@extends('layouts.frontend')
@section('title')
    404 | Home Defender
@endsection
@section('content')
<!-- Page Header Start -->
	<div class="page-header parallaxie">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="wow fadeInUp" data-cursor="-opaque">Page not found</h1>
						<nav class="wow fadeInUp" data-wow-delay="0.2s">
                            <ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="/">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">404 error page</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- error section start -->
    <div class="error-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-page-image wow fadeInUp">
                        <img src="/frontend/images/404-error-img.png" alt="">
                    </div>
                    <div class="error-page-content">
                        <div class="section-title">
                            <h2 class=" wow fadeInUp" data-cursor="-opaque" data-wow-delay="0.2s"><span>Oops!</span> page not found</h2>
                        </div>
                        <div class="error-page-content-body">
                            <p class="wow fadeInUp" data-wow-delay="0.4s">The page you are looking for does not exist.</p>
                            <a class="btn-default wow fadeInUp" data-wow-delay="0.6s" href="/">back to home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- error section end -->
@endsection