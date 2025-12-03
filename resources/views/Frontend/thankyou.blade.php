@extends('layouts.frontend')
@section('title')
    Thankyou | Home Defender
@endsection
@section('content')
<!-- Page Header Start -->
	<div class="page-header parallaxie">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="wow fadeInUp" data-cursor="-opaque">Thank you</h1>
						<nav class="wow fadeInUp" data-wow-delay="0.2s">
                            <ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="/">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Thankyou</li>
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
                    <!-- <div class="error-page-image wow fadeInUp">
                        <img src="/frontend/images/404-error-img.png" alt="">
                    </div> -->
                    <div class="error-page-content">
                        <div class="section-title">
                            <h2 class=" wow fadeInUp" data-cursor="-opaque" data-wow-delay="0.2s"><span>Thank You </span> for Contacting Us</h2>
                        </div>
                        <div class="error-page-content-body">
                            <p class="wow fadeInUp" data-wow-delay="0.4s">We appreciate your message and have received it. Our team will review it and contact you soon.</p>
                            <a class="btn-default wow fadeInUp" data-wow-delay="0.6s" href="/">back to home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- error section end -->
@endsection