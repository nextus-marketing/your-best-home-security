<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        $authors = Blog::distinct()->pluck('author');

        return view('Admin.Blogs.index', compact('blogs', 'authors'));

    }

    public function data(Request $request)
    {
        $query = Blog::query();

        if ($request->has('publish_date') && ! empty($request->publish_date)) {
            $query->whereDate('publish_date', date('Y-m-d', strtotime($request->publish_date)));
        }

        if ($request->title_id) {
            $query->where('id', $request->title_id);
        }

        if ($request->has('status') && $request->status) {
            $query->where('status', $request->status);
        }

        $query->orderByDesc('id');

        return DataTables::eloquent($query)
            ->editColumn('category', function ($blog) {
                return $blog->category ? $blog->category->name : 'N/A';
            })
            ->editColumn('title', function ($blog) {
                return $blog->title ?? 'N/A';
            })
            ->editColumn('photo', function ($blog) {
                if ($blog->photo == null) {
                    return 'N/A';
                }
                $photoUrl = $blog->photo ? \Storage::url($blog->photo) : asset('default-image.jpg');

                return '<img src="'.$photoUrl.'" width="100" height="100">';
            })
            ->editColumn('publish_date', function ($blog) {
                return formatDate($blog->publish_date);
            })
            ->editColumn('author', function ($blog) {
                return $blog->author ?? 'Unknown';
            })
            // ->editColumn('meta_keyword', function ($blog) {
            //     return $blog->meta_keyword ?? 'N/A';
            // })
            ->editColumn('meta_title', function ($blog) {
                return $blog->meta_title ?? 'N/A';
            })
            ->editColumn('blog_visitors_count', function ($blog) {
                return $blog->blog_visitors()->count();
            })
            ->editColumn('slug', function ($blog) {
                return $blog->slug;
            })
            ->editColumn('sub_title', function ($blog) {
                return Str::limit(strip_tags($blog->sub_title), 40, '...');
            })

            ->editColumn('status', function ($blog) {
                return '<div class="form-check form-switch">
                        <input class="form-check-input blogs-status-switch" type="checkbox" '.
                            ($blog->status == 'ACTIVE' ? 'checked' : '').' data-routekey="'.$blog->route_key.'">
                    </div>';
            })
            ->addColumn('action', function ($blog) {
                $edit = '<a href="'.route('admin.blogs.edit', ['blog' => $blog->id]).'" class="badge bg-warning fs-1">
            <i class="fa fa-edit"></i>
            </a>';

                $delete = '<a href="javascript:void(0);" class="badge bg-danger fs-1 delete-blog" data-routekey="'.$blog->id.'">
                  <i class="fa fa-trash"></i>
               </a>';

                return $edit.' '.$delete;
            })

            ->addIndexColumn()
            ->rawColumns([
                'status', 'action', 'category', 'title', 'photo', 'publish_date',
                'author', 'meta_keyword', 'blog_visitors_count', 'meta_title',
                'home_featured', 'slug', 'sub_title',
            ])
            ->setRowId('id')
            ->make(true);
    }

    public function list()
    {
        $blogs = Blog::all();

        return response()->json([
            'status' => 'success',
            'list' => $blogs,
        ], 200);
    }

    public function create()
    {
        $categories = Category::all();
        $blog = null;

        return view('Admin.Blogs.form', compact('categories', 'blog'));
    }

    public function store(Request $request)
    {
        $request->validate($this->rules, $this->customMessages);

        $blog = new Blog;
        $blog->fill($request->all());

        if ($request->hasFile('photo')) {
            // Store in default Laravel storage
            $photoPath = $request->file('photo')->store('photos', 'public');
            $blog->photo = $photoPath;

            // Also copy to public_html/storage/photos
            $filename = basename($photoPath);
            $from = storage_path('app/public/photos/'.$filename);
            $to = public_path('storage/photos/'.$filename);

            if (! \File::exists(public_path('storage/photos'))) {
                \File::makeDirectory(public_path('storage/photos'), 0755, true);
            }

            \File::copy($from, $to);
        }

        // Save the description (can be JSON)
        $blog->description = $request->input('description');
        $blog->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Blog management Created Successfully',
            'blog' => $blog,
        ], 201);
    }

    public function edit(Blog $blog)
    {
        $categories = Category::all();

        return view('Admin.Blogs.form', compact('categories', 'blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'slug' => 'required|alpha_dash|unique:blogs,slug,'.$blog->id,
            'publish_date' => 'required|date',
            'author' => 'required|string|max:255',
        ];

        $customMessages = [
            'title.required' => 'The blog title is required.',
            'sub_title.required' => 'The Sub Title is required.',
            'publish_date.required' => 'The publish date is required.',
            'publish_date.date' => 'The publish date must be a valid date.',
            'author.required' => 'The author name is required.',
            'slug.required' => 'Slug is required',
            'slug.alpha_dash' => 'Slug should only contain letters, numbers, dashes, and underscores',
            'slug.unique' => 'This slug is already in use',
        ];

        $request->validate($rules, $customMessages);

        $blog->fill($request->all());

        if ($request->hasFile('photo')) {
            // Delete the old photo if exists
            if ($blog->photo) {
                Storage::disk('public')->delete($blog->photo);
            }

            // Store in Laravel storage
            $photoPath = $request->file('photo')->store('photos', 'public');
            $blog->photo = $photoPath;

            // Also copy to public_html/storage/photos
            $filename = basename($photoPath);
            $from = storage_path('app/public/photos/'.$filename);
            $to = public_path('storage/photos/'.$filename);

            if (! \File::exists(public_path('storage/photos'))) {
                \File::makeDirectory(public_path('storage/photos'), 0755, true);
            }

            \File::copy($from, $to);
        }

        $blog->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Blog management Updated Successfully',
            'blog' => $blog,
        ], 201);
    }

    public function changeHomeFeaturedStatus(Request $request)
    {
        $blog = Blog::findByKey($request->route_key);
        $blog->home_featured = $request->status;
        $blog->save();

        return response()->json([
            'status' => 'success',
            'message' => $blog->name.' has been marked '.$blog->home_featured.' successfully',
            'blog' => $blog,
        ], 201);
    }

    public function changeStatus(Request $request)
    {
        $blog = Blog::findByKey($request->route_key);
        $blog->status = $request->status;
        $blog->save();

        return response()->json([
            'status' => 'success',
            'message' => $blog->name.' has been marked '.$blog->status.' successfully',
            'blog' => $blog,
        ], 201);
    }

    public function destroy(Blog $blog)
    {
        try {
            // Optional: delete associated user if needed
            if ($blog->user) {
                $blog->user->delete();
            }

            $blog->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'Blog and related user deleted successfully.',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete blog: '.$e->getMessage(),
            ], 500);
        }
    }

    private $rules = [

        'title' => 'required|string|max:255',
        'sub_title' => 'required|string|max:255',
        'slug' => 'required|alpha_dash|unique:blogs,slug,',
        // 'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:width=368,height=245',
        'publish_date' => 'required|date|',
        'author' => 'required|string|max:255',
    ];

    private $customMessages = [

        'title.required' => 'The blog title is required.',
        'sub_title.required' => 'The Sub Title title is required.',
        // 'photo.image' => 'The main image must be an image file.',
        // 'photo.mimes' => 'The main image must be a file of type: jpeg, png, jpg, gif.',
        // 'photo.max' => 'The main image may not be greater than 5MB.',
        // 'photo.dimensions' => 'The image must be exactly 368 × 245 pixels.',
        'publish_date.required' => 'The publish date is required.',
        'publish_date.date' => 'The publish date must be a valid date.',
        'author.required' => 'The author name is required.',
        // 'meta_keyword.string' => 'The meta keywords must be a string.',
        'slug.required' => 'Slug is required',
        'slug.alpha_dash' => 'Slug should only contain letters, numbers, dashes, and underscores',
        'slug.unique' => 'This slug is already in use',
    ];
}
