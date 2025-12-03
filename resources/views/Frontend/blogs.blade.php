@extends('layouts.frontend')
@section('title')
    Blogs | Home Defender
@endsection
@section('meta')
<meta name="description" content="Read expert articles on home security, smart devices, automation tips, and safety solutions. Stay updated with the latest insights on the HomeDefender blog.">
@endsection

@section('content')

<style>
    /* Same pagination styling used in your first page */
    .pagination__item--arrow {
        font-size: 18px;
        font-weight: bold;
        padding: 12px 20px;
        color: #fff;
        background-color: #f39200;
        border-radius: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .pagination__item--arrow:hover {
        background-color: #333;
        color: #fff;
        transform: scale(1.1);
        cursor: pointer;
    }

    .pagination__list.disabled .pagination__item--arrow {
        color: #ccc;
        background-color: #f1f1f1;
        cursor: not-allowed;
    }

    .pagination__item {
        padding: 10px 15px;
        font-size: 16px;
        color: #333;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        margin: 0 6px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .pagination__item:hover {
        background-color: #f39200;
        color: white;
    }

    .pagination__item--current {
        background-color: #f39200;
        color: white;
    }

    .pagination__wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
    }
</style>

<div class="page-header parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="wow fadeInUp" data-cursor="-opaque">Blogs</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.2s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-blog">
    <div class="container">
        <div class="row justify-content-center">

            {{-- Dynamic Blog Loop --}}
            @forelse($blogs as $blog)
                @php
                    $content = json_decode($blog->description, true);
                    $previewText = '';

                    if (isset($content['blocks'][0]['data']['text'])) {
                        $previewText = strip_tags($content['blocks'][0]['data']['text']);
                    } else {
                        $previewText = strip_tags($blog->description);
                    }
                @endphp

                <div class="col-lg-4 col-md-6">
                    <div class="post-item wow fadeInUp">
                        <div class="post-featured-image">
                            <a href="{{ route('blogs.details', $blog->slug) }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img
                                        src="{{ $blog->photo ? asset(Storage::url($blog->photo)) : asset('frontend/assets/img/default-blog.jpg') }}"
                                        alt="Blog"
                                        style="width:100%; height:300px; object-fit:cover;"
                                    >
                                </figure>
                            </a>

                            <div class="post-item-meta">
                                <a href="#">
                                    {{ \Carbon\Carbon::parse($blog->publish_date)->timezone('Asia/Kolkata')->format('d M') }}
                                </a>
                            </div>
                        </div>

                        <div class="post-item-body">
                            <div class="post-item-content">
                                <h2>
                                    <a href="{{ route('blogs.details', $blog->slug) }}">
                                        {{ $blog->title }}
                                    </a>
                                </h2>
                            </div>
                            <div class="blog-item-btn">
                                <a href="{{ route('blogs.details', $blog->slug) }}" class="readmore-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-lg-12 text-center py-5">
                    <h4>No blogs available right now.</h4>
                </div>
            @endforelse

            {{-- Pagination --}}
            @if($blogs->hasPages())
                <div class="col-lg-12">
                    <div class="pagination__area">
                        <nav class="pagination justify-content-center">
                            <ul class="pagination__wrapper">

                                {{-- Prev --}}
                                <li class="pagination__list {{ $blogs->onFirstPage() ? 'disabled' : '' }}">
                                    @if(!$blogs->onFirstPage())
                                        <a href="{{ $blogs->previousPageUrl() }}" class="pagination__item--arrow">
                                            <i class="bx bx-chevron-left"></i> Prev
                                        </a>
                                    @else
                                        <span class="pagination__item--arrow">
                                            <i class="bx bx-chevron-left"></i> Prev
                                        </span>
                                    @endif
                                </li>

                                {{-- Numbers --}}
                                @for($i = 1; $i <= $blogs->lastPage(); $i++)
                                    <li class="pagination__list">
                                        @if($i == $blogs->currentPage())
                                            <span class="pagination__item pagination__item--current">{{ $i }}</span>
                                        @else
                                            <a href="{{ $blogs->url($i) }}" class="pagination__item">{{ $i }}</a>
                                        @endif
                                    </li>
                                @endfor

                                {{-- Next --}}
                                <li class="pagination__list {{ $blogs->hasMorePages() ? '' : 'disabled' }}">
                                    @if($blogs->hasMorePages())
                                        <a href="{{ $blogs->nextPageUrl() }}" class="pagination__item--arrow">
                                            Next <i class="bx bx-chevron-right"></i>
                                        </a>
                                    @else
                                        <span class="pagination__item--arrow">
                                            Next <i class="bx bx-chevron-right"></i>
                                        </span>
                                    @endif
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            @endif

        </div>
    </div>
</div>

@endsection
