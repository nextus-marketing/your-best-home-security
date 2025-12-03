@extends('layouts.admin')
@section('title')
    Blog Management
@endsection
@section('content')
    <!-- Include Editor.js and Tools -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/image@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/delimiter@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/raw@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/table@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/link@latest"></script>

    <form method="POST"
        action="{{ Route::is('admin.blogs.create') ? route('admin.blogs.store') : route('admin.blogs.update', ['blog' => $blog->id ?? null]) }}"
        enctype="multipart/form-data" autocomplete="off" id="blogs-form">
        @csrf
        {{ Route::is('admin.blogs.create') ? '' : method_field('PUT') }}

        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-header">
                        <h5>{{ Route::is('admin.blogs.create') ? 'Create' : 'Edit' }} Blog</h5>
                    </div>

                    <div class="card-body border-top">
                        <div class="row mt-4">
                            <!-- Title -->
                            <div class="col-sm-12 col-md-6 mb-3">
                                <label class="control-label col-form-label">
                                    Title <sup class="tcul-star-restrict">*</sup>
                                </label>
                                <input type="text" class="form-control" placeholder="Write Title Name here..."
                                    name="title" id="title" value="{{ isset($blog) ? $blog->title : '' }}" />
                                <div id="title-error" class="text-danger mt-1"></div>
                            </div>

                            <!-- Slug -->
                            <div class="col-sm-12 col-md-6">
                                <label class="control-label col-form-label">Slug <sup
                                        class="tcul-star-restrict">*</sup></label>
                                <input type="text" class="form-control" placeholder="Write Slug here..." name="slug" id="slug"
                                    value="{{ isset($blog) ? $blog->slug : '' }}" />
                                <div id="slug-error" style="color:red"></div>
                            </div>

                            <!-- Publish Date -->
                            <div class="col-sm-12 col-md-6 mb-3">
                                <label class="control-label col-form-label">
                                    Publish Date <sup class="tcul-star-restrict">*</sup>
                                </label>
                                <input type="date" class="form-control" name="publish_date"
                                    value="{{ isset($blog) ? $blog->publish_date : '' }}" />
                                <div id="publish_date-error" class="text-danger mt-1"></div>
                            </div>

                            <!-- Author Name -->
                            <div class="col-sm-12 col-md-6 mb-3">
                                <label class="control-label col-form-label">
                                    Author Name <sup class="tcul-star-restrict">*</sup>
                                </label>
                                <input type="text" class="form-control" placeholder="Write Author Name here..."
                                    name="author" value="{{ isset($blog) ? $blog->author : '' }}" />
                                <div id="author-error" class="text-danger mt-1"></div>
                            </div>

                            <!-- Sub Title -->
                            <div class="col-sm-12 col-md-6 mb-3">
                                <label class="control-label col-form-label">
                                    Sub Title <sup class="tcul-star-restrict">*</sup>
                                </label>
                                <input type="text" class="form-control" placeholder="Write Sub Title Name here..."
                                    name="sub_title" id="sub_title" value="{{ isset($blog) ? $blog->sub_title : '' }}" />
                                <div id="sub_title-error" class="text-danger mt-1"></div>
                            </div>

                            <!-- Blog Image -->
                            <div class="col-sm-12 col-md-6 mb-3">
                                <label class="control-label col-form-label">Image </label>
                                <div class="col-md-8">	
                                    <fieldset class="form-group">
                                        <input type="file" name="photo" class="form-control" id="blog-photo"
                                            placeholder="Please Select Photo">
                                        <div id="photo-error" style="color:red"></div>
                                    </fieldset>
                                    @if (isset($blog))
                                        <img src="{{ $blog->photo_link }}" border="10" width="100" height="100"
                                            class="img-rounded img-thumbnail">
                                    @endif
                                </div>
                            </div>

                            <!-- Meta Title -->
                            <div class="col-sm-12 col-md-12 mb-3">
                                <label class="control-label col-form-label">
                                    Meta Title
                                </label>
                                <input type="text" class="form-control" placeholder="Enter Meta Title here..."
                                    name="meta_title" value="{{ isset($blog) ? $blog->meta_title : '' }}" />
                                <div id="meta_title-error" class="text-danger mt-1"></div>
                            </div>

                            <!-- Meta Keywords -->
                            {{-- <div class="col-sm-12 col-md-12 mb-3">
                                <label class="control-label col-form-label">
                                    Meta Keywords
                                </label>
                                <input type="text" class="form-control" placeholder="Enter Meta Keywords here..."
                                    name="meta_keyword" value="{{ isset($blog) ? $blog->meta_keyword : '' }}" />
                                <div id="meta_keyword-error" class="text-danger mt-1"></div>
                            </div> --}}

                            <!-- Meta Description -->
                            <div class="col-sm-12 col-md-12 mb-3">
                                <label class="control-label col-form-label">
                                    Meta Description
                                </label>
                                <input type="text" class="form-control" placeholder="Enter Meta Description here..."
                                    name="meta_description" value="{{ isset($blog) ? $blog->meta_description : '' }}" />
                                <div id="meta_description-error" class="text-danger mt-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Description -->
        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-header">
                        <h5>Blog Description</h5>
                    </div>
                    <div class="card-body border-top">
                        <div class="col-sm-12 col-md-12 mb-3">
                            <div id="editorjs"></div>
                            <div id="description-error" class="text-danger mt-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Submit Buttons -->
        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            Save &nbsp; <i class="ti ti-device-floppy"></i>
                        </button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="{{ route('admin.blogs.index') }}" type="button" class="btn btn-secondary">
                            Cancel &nbsp; <i class="ti ti-arrow-back-up-double"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Editor.js Initialization -->
    <script>
        const editor = new EditorJS({
            holder: 'editorjs',
            tools: {
                header: {
                    class: Header,
                    config: {
                        placeholder: 'Enter a heading',
                        levels: [1, 2, 3, 4, 5, 6],
                        defaultLevel: 2,
                    },
                },
                list: {
                    class: EditorjsList,
                    inlineToolbar: true,
                    config: { defaultStyle: 'unordered' }
                },
                quote: Quote,
                image: {
                    class: ImageTool,
                    config: {
                        uploader: { 
                            uploadByFile: (file) => {
                                return new Promise((resolve, reject) => {
                                    if (file.size > 5 * 1024 * 1024) {
                                        reject('File size exceeds 5MB');
                                        return;
                                    }
                                    const reader = new FileReader();
                                    reader.readAsDataURL(file);
                                    reader.onloadend = () => resolve({ success: 1, file: { url: reader.result } });
                                    reader.onerror = (error) => reject('File reading error: ' + error);
                                });
                            },
                        },
                    },
                },
                table: {
                    class: Table,
                    inlineToolbar: true,
                    config: { rows: 2, cols: 3 }
                },
                linkTool: {
                    class: LinkTool,
                    config: { endpoint: '/link-preview' }
                },
            },
            data: {!! isset($blog) && $blog->description ? ($blog->description) : '{}' !!},
            onReady: () => { editor.focus(); },
            onChange: async () => {
                const savedData = await editor.save();
                localStorage.setItem('editorContent', JSON.stringify(savedData));
            }
        });

        // Form Submit
        $('#blogs-form').submit(async function(e) {
            e.preventDefault();
            $('div[id$="-error"]').empty();
            const savedData = await editor.save();
            var form = $(this);
            var formData = new FormData(this);
            formData.append('description', JSON.stringify(savedData));
            var url = form.attr('action');

            $.ajax({
                type: "POST",
                url: url,
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    if (data.status === 'success') {
                        toastr.success(data.message, '', { timeOut: 1500, closeButton: true });
                        setTimeout(() => window.location.href = "{!! route('admin.blogs.index') !!}", 100);
                    } else {
                        toastr.error('There is some error!!', '', { timeOut: 1500, closeButton: true });
                    }
                },
                error: function(xhr) {
                    toastr.error('There are some errors in Form. Please check your inputs', '', { timeOut: 1500, closeButton: true });
                    $.each(xhr.responseJSON.errors, function(key, value) {
                        $('#' + key + '-error').html(value);
                    });
                    $('html, body').animate({
                        scrollTop: $('#' + Object.keys(xhr.responseJSON.errors)[0] + '-error').offset().top - 200
                    }, 500);
                }
            });
        });

        // Auto-generate Slug
        $('#title').keyup(function () {
            var title = $(this).val();
            var slug = title.toLowerCase().replace(/ /g, '-');
            $('#slug').val(slug);
        });
    </script>
@endsection
