@extends('layouts.frontend')
@section('title') Contact Us | Home Defender @endsection
@section('meta')
<meta name="description" content="Get in touch with HomeDefender for home security solutions, smart automation services, or support. Contact us today for quick assistance.">
@endsection
@section('content')


<!-- Page Header Start -->
	<div class="page-header parallaxie">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="page-header-box">
						<h1 class="wow fadeInUp" data-cursor="-opaque">Contact us</h1>
						<nav class="wow fadeInUp" data-wow-delay="0.2s">
                            <ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="/">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">contact us</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="page-contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="contact-us-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact us</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><span>Secure Your</span> With Us</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Have question or need a customized security solution? Our team is here to assist you. Get in touch with us today.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="contact-info-list">
                        <div class="contact-info-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-phone.svg" alt="icon">
                            </div>
                            <div class="contact-item-content">
                                <p>phone number</p>
                                <h3><a href="tel:+18884476320">+1 (888) 447-6320</a></h3>
                            </div>
                        </div>
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-mail.svg" alt="icon">
                            </div>
                            <div class="contact-item-content">
                                <p>email address</p>
                                <h3 style="font-size: 17px;"><a href="mailto:info@homedefender.net">info@homedefender.net</a></h3>
                            </div>
                        </div>
                        <div class="contact-info-item location-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-location.svg" alt="icon">
                            </div>
                            <div class="contact-item-content">
                                <p>location</p>
                                <h3>Jersey City, NJ 07097</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

      <!-- Contact Us Form Section Start -->
    <div class="contact-form-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-us-box">
                        <!-- Google Map IFrame Start -->
                        <div class="google-map-iframe">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3109.681062723335!2d-77.27802109999999!3d38.7939453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b64df978e83c03%3A0x1e8f94883e861db3!2s9620%20Hillock%20Ct%2C%20Burke%2C%20VA%2022015%2C%20USA!5e0!3m2!1sen!2sin!4v1763160258624!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!-- Google Map IFrame End -->

                        <!-- Contact Us Form Start -->
                        <div class="contact-us-form">
                            <div class="section-title">
                                <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Get in Touch</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.4s">We specialize in providing top-quality security and CCTV solutions to safeguard your home and business. </p>
                            </div>
                                <form action="{{ route('contact-enquiry') }}" enctype="multipart/form-data" method="POST" id="contactForm" class="contact-form wow fadeInUp" data-wow-delay="0.6s" data-toggle="validator">
                                 @csrf   
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Full name">
                                        <div class="field_error" id="full_name-error" style="color:#ff0000; margin-top:5px;"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
                                        <div class="field_error" id="subject-error" style="color:#ff0000; margin-top:5px;"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name ="email" class="form-control" id="email" placeholder="E-mail">
                                        <div class="field_error" id="email-error" style="color:#ff0000; margin-top:5px;"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Phone no.">
                                        <div class="field_error" id="mobile-error" style="color:#ff0000; margin-top:5px;"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="2" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group col-md-12 mb-4 text-center">
                                        <div class="d-inline-block">
                                            <div class="g-recaptcha" data-sitekey="6LeePR4sAAAAAJ5GKP1pMpC_bpQfeva1Nat1aT9N"></div>
                                             <div class="field_error" id="captcha-error" style="color:#ff0000; margin-top:5px;"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn-default"><span>send message</span></button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </form>
                            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Contact Us Form Section End -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    $(document).ready(function() {
       
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#contactForm').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            form.find('div[id$="-error"]').empty(); 

            var url = form.attr('action');

            $.ajax({
                type: "POST",
                url: url,
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    form.find('#started').attr('disabled', true).hide();
                    form.find('#form_loader').show();
                },
                success: function(data) {
                    if (data.status === 'success') {
                        toastr.success(data.message, '', {
                            showMethod: "slideDown",
                            hideMethod: "slideUp",
                            timeOut: 1500,
                            closeButton: true,
                        });

                        form[0].reset();

                        setTimeout(function() {
                            window.location.href = '/thankyou';
                        }, 1000);
                    }
                },
                    error: function(xhr) {
                    console.log(xhr);
                    toastr.error(
                        'There are some errors in the form. Please check your inputs.',
                        '', {
                            showMethod: "slideDown",
                            hideMethod: "slideUp",
                            timeOut: 1500,
                            closeButton: true,
                    });

                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        $.each(xhr.responseJSON.errors, function(key, value) {
                            var errorText = Array.isArray(value) ? value.join(
                                ', ') : value;
                            form.find('#' + key + '-error').html(
                                errorText); 
                        });

                        var firstErrorKey = Object.keys(xhr.responseJSON.errors)[0];
                        $('html, body').animate({
                            scrollTop: form.find('#' + firstErrorKey + '-error')
                                .offset().top - 200
                        }, 500);

                    } else {
                        toastr.error(
                            'An unexpected error occurred. Please try again later.',
                            '', {
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                timeOut: 1500,
                                closeButton: true,
                            });
                    }
                },
                complete: function() {
                    form.find('#started').attr('disabled', false).show();
                    form.find('#form_loader').hide();
                }
            });
        });
    });
</script>
@endsection