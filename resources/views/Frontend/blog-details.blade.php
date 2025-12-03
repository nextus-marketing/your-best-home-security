@extends('layouts.frontend')

@section('title')
    {{ $blog->meta_title }}
@endsection

@section('meta_description')
    {{ $blog->meta_description }}
@endsection

@section('content')
@section('structured_data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ url()->current() }}"
      },
      "headline": "{{ addslashes($blog->meta_title ?? $blog->title) }}",
      "description": "{{ addslashes(strip_tags($blog->meta_description ?? Str::limit($blog->content ?? '', 150))) }}",
      "author": {
        "@type": "Person",
        "name": "{{ addslashes($blog->author_name ?? 'Admin') }}"
      },
      "publisher": {
        "@type": "Organization",
        "name": "OEM Used Car Part",
        "logo": {
          "@type": "ImageObject",
          "url": "{{ url('/frontend/my-img/logo/logo-2.png') }}"
        }
      },
      "datePublished": "{{ $blog->created_at->toIso8601String() }}",
      "dateModified": "{{ $blog->updated_at->toIso8601String() }}"
    }
    @if(!empty($blog->faqs) && count($blog->faqs) > 0)
    ,
    {
      "@type": "FAQPage",
      "mainEntity": [
        @foreach($blog->faqs as $faq)
        {
          "@type": "Question",
          "name": "{{ addslashes($faq['question']) }}",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "{{ addslashes(strip_tags($faq['answer'])) }}"
          }
        }@if(!$loop->last),@endif
        @endforeach
      ]
    }
    @endif
  ]
}
</script>
@endsection
<style>
    .page-blog {
    padding: 0px 0;
}
.page-single-post {
    padding: 50px 0;
}
.post-entry h3 {
    font-size: 26px;
}
.post-entry h2 {
    font-size: 24px;
}
</style>
<div class="page-header parallaxie">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="page-header-box">
						<h1 class="wow fadeInUp" data-cursor="-opaque">{{ $blog->title }}</h1>
						<div class="post-single-meta wow fadeInUp">
							<ol class="breadcrumb">
                                <li><i class="fa-regular fa-user"></i> {{ $blog->author }}</li>
								<li><i class="fa-regular fa-clock"></i>{{ \Carbon\Carbon::parse($blog->publish_date)->timezone('Asia/Kolkata')->format('d M') }}</li>
                            </ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="page-single-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="post-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset(Storage::url($blog->photo)) }}" alt="blog-img">
                        </figure>
                    </div>
                    <div class="post-content">
                        <div class="post-entry">
                            <p class="wow fadeInUp">
                                 @php
                            $description = json_decode($blog->description, true);
                            if (!empty($description['blocks']) && is_array($description['blocks'])) {
                                foreach ($description['blocks'] as $d) {
                                    switch ($d['type']) {
                                        case 'header':
                                            $level = $d['data']['level'] ?? 2;
                                            echo "<h{$level}>{$d['data']['text']}</h{$level}>";
                                            break;
                                        case 'paragraph':
                                            echo "<p>{$d['data']['text']}</p>";
                                            break;
                                        case 'delimiter':
                                            echo '<hr>';
                                            break;
                                        case 'image':
                                            if (!empty($d['data']['file']['url'])) {
                                                $url = htmlspecialchars($d['data']['file']['url']);
                                                $caption = $d['data']['caption'] ?? '';
                                                $align = $d['data']['alignment'] ?? 'center';
                                                echo "<div class='image-container {$align}'><img src='{$url}' alt='".strip_tags($caption)."'>";
                                                if ($caption) echo "<p class='caption'>{$caption}</p>";
                                                echo "</div>";
                                            }
                                            break;
                                        case 'list':
                                            $items = $d['data']['items'] ?? [];
                                            $style = $d['data']['style'] ?? 'unordered';
                                            if ($style === 'ordered') {
                                                echo "<ol>";
                                                foreach ($items as $item) echo "<li>{$item['content']}</li>";
                                                echo "</ol>";
                                            } elseif ($style === 'unordered') {
                                                echo "<ul>";
                                                foreach ($items as $item) echo "<li>{$item['content']}</li>";
                                                echo "</ul>";
                                            } elseif ($style === 'checklist') {
                                                echo "<ul class='checklist'>";
                                                foreach ($items as $item) {
                                                    $checked = !empty($item['meta']['checked']) ? 'checked' : '';
                                                    echo "<li><input type='checkbox' disabled {$checked}> {$item['content']}</li>";
                                                }
                                                echo "</ul>";
                                            }
                                            break;
                                        case 'table':
                                            if (!empty($d['data']['content'])) {
                                                echo '<table class="editor-table">';
                                                foreach ($d['data']['content'] as $row) {
                                                    echo '<tr>';
                                                    foreach ($row as $cell) echo "<td>{$cell}</td>";
                                                    echo '</tr>';
                                                }
                                                echo '</table>';
                                            }
                                            break;
                                        case 'linkTool':
                                            if (!empty($d['data']['link'])) {
                                                $href = htmlspecialchars($d['data']['link']);
                                                $text = $d['data']['meta']['title'] ?? $href;
                                                echo "<a href='{$href}' target='_blank'>{$text}</a>";
                                            }
                                            break;
                                    }
                                }
                            } else {
                                echo '<p>No description available.</p>';
                            }
                        @endphp
                            </p>           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-blog">
    <h3 class="text-center mb-4 heightlite">Recent Blogs</h3>
    <div class="container">
        <div class="row">

            @foreach($latestBlogs as $latest)
                <div class="col-lg-4 col-md-6">
                    <div class="post-item wow fadeInUp" data-wow-delay="0.3s">

                        {{-- Blog Image --}}
                        <div class="post-featured-image">
                            <a href="{{ route('blogs.details', $latest->slug) }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img 
                                        src="{{ $latest->photo ? asset(Storage::url($latest->photo)) : asset('frontend/assets/img/default-blog.jpg') }}"
                                        alt="Blog"
                                        style="width:100%; height:280px; object-fit:cover;"
                                    >
                                </figure>
                            </a>

                            {{-- Blog Date --}}
                            <div class="post-item-meta">
                                <a href="#">
                                    {{ \Carbon\Carbon::parse($latest->publish_date)->format('d M') }}
                                </a>
                            </div>
                        </div>

                        {{-- Blog Content --}}
                        <div class="post-item-body">
                            <div class="post-item-content">
                                <h2>
                                    <a href="{{ route('blogs.details', $latest->slug) }}">
                                        {{ $latest->title }}
                                    </a>
                                </h2>
                            </div>

                            {{-- Read More Button --}}
                            <div class="blog-item-btn">
                                <a href="{{ route('blogs.details', $latest->slug) }}" class="readmore-btn">
                                    read more
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach

            {{-- If no recent blogs --}}
            @if($latestBlogs->count() == 0)
                <div class="col-12 text-center py-4">
                    <h5>No recent blogs available.</h5>
                </div>
            @endif

        </div>
    </div>
</div>

@endsection