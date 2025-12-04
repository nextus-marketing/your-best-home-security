@extends('layouts.frontend')
@section('title')
    Your Best Home Security | Smart Home Security Solutions
@endsection
@section('meta')
<meta name="description" content="Protect your home with Your Best Home Security. Explore smart security systems, safety guides, and reliable home protection products designed for complete peace of mind.">
@endsection
@section('content')

    <style>
        .why-choose-us {
            padding: 10px 0;
        }

        .our-support.about-support {
            background: transparent;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }

        .our-testimonials {
            padding: 10px 0;
        }

        .our-services {
    background: url(../images/section-bg-shape.png), var(--secondary-color);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    padding: 60px 0;
    }
    
    </style>
    <div class="hero dark-section parallaxie" style="background-image: url(&quot;https://homedefender.net/frontend/images/hero-bg-2.jpg&quot;); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center -325.8px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Secure Your Peaces</h3>
                            <h1 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Advanced Security Solutions <br> For Homes and Businesses</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Outdoor surveillance cameras mounted on a vine-covered brick wall.
                                future</p>
                        </div>
                        <div class="hero-body wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                            <div class="hero-btn">
                                <a href="tel:1-888-447-6320" class="btn-default">Call Now</a>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hero-image">
                        <figure>
                            <img src="/frontend/images/hero-image.png" alt="hero-image">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .call-now-btn {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transition: 0.4s ease;
        }

        .call-now-btn.show {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }
    </style>

    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us mt-5" id="about">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <div class="section-title section-title-center">
                        
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><span>When You Need, </span>
                            Better Security Installation</h2>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="why-choose-box">
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-why-choose-1.svg" alt="icon-why-choose">
                            </div>
                            <div class="why-choose-item-content">
                                <h3><span class="heightlite">Video Surveillance</span>
                                    Reliable and Proven</h3>
                                <p>Our advanced CCTV systems are built to deliver crystal-clear monitoring and round-the-clock reliability, ensuring complete protection for your premises at all times.</p>
                            </div>
                        </div>
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-why-choose-2.svg" alt="icon-why-choose">
                            </div>
                            <div class="why-choose-item-content">
                                <h3><span class="heightlite">Security Professional</span>
                                    Experts and Staff</h3>
                                <p> Our trained security personnel combine experience with modern techniques to provide unmatched on-site protection tailored to your specific security requirements.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="why-choose-image">
                        <figure>
                            <img src="/frontend/images/why-choose-image.png" alt="icon-why-choose">
                        </figure>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="why-choose-box">
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-why-choose-3.svg" alt="icon-why-choose">
                            </div>
                            <div class="why-choose-item-content">
                                <h3><span class="heightlite">Intelligent Security Access</span>
                                    Smart & Secure</h3>
                                <p>We offer intelligent access control solutions that allow you to monitor entries, restrict unauthorized access, and maintain a safe environment with real-time tracking.</p>
                            </div>
                        </div>
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-why-choose-4.svg" alt="icon-why-choose">
                            </div>
                            <div class="why-choose-item-content">
                                <h3><span class="heightlite">Our Security Service</span>
                                    24/7 Support</h3>
                                <p>From emergency responses to routine checks, our support team is available 24/7 to assist you with immediate help and ensure your safety without any interruptions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="our-support-btn wow fadeInUp text-center" data-wow-delay="0.8s">
                            <a href="tel:18884476320" class="btn-default">Talk To An Expert</a>
                        </div>
        </div>
    </div>

     <!-- Our Services Section Start -->
    <div class="our-services">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <div class="section-title section-title-center">
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><span>Comprehensive Security  
                            </span>Solutions For Everyone</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp">
                        <div class="service-image">
                            <a href="#0" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="/frontend/my-img/home.jpg" alt="private-security">
                                </figure>
                            </a>
                        </div>
                        <div class="service-body">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-service-item-1.svg" alt="icon-service-item">
                            </div>
                            <div class="service-content">
                                <h3><a href="#0">Home Security Systems</a></h3>
                                <p>Customized systems tailored for optimal home protection.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-image">
                            <a href="#0" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="/frontend/my-img/surveillance.jpg" alt="bank">
                                </figure>
                            </a>
                        </div>
                        <div class="service-body">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-service-item-2.svg" alt="icon-service">
                            </div>
                            <div class="service-content">
                                <h3><a href="#0">Surveillance Equipment</a></h3>
                                <p>High-definition cameras for reliable surveillance.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-image">
                            <a href="#0" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="/frontend/my-img/business.jpg" alt="school">
                                </figure>
                            </a>
                        </div>
                        <div class="service-body">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-service-item-3.svg" alt="icon-service-item">
                            </div>
                            <div class="service-content">
                                <h3><a href="#0">Business Security Solutions</a></h3>
                                <p>Advanced security systems for commercial spaces.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="1.2s">
                        <h3> Let's make <span class="heightlite">something great</span>  work together.</h3>
                        <div class="our-support-btn wow fadeInUp" data-wow-delay="0.8s" style="margin-top: 20px;">
                            <a href="tel:18884476320" class="btn-default">Talk To An Expert</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services Section End -->

    <!-- Our Support Section Start -->
    <!-- Our Support Section Start -->
<div class="our-support about-support">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-6">
                <div class="our-support-images">
                    <div class="our-support-image box-1">
                        <figure class="image-anime reveal">
                            <img src="/frontend/images/support-image-1.jpg" alt="support-image">
                        </figure>
                    </div>
                    <div class="our-support-image box-2">
                        <figure class="image-anime reveal">
                            <img src="/frontend/images/support-image-2.jpg" alt="support-image">
                        </figure>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="our-support-content">

                    <div class="section-title mb-4">
                        <h3 class="wow fadeInUp">Let's Explore</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                            <span>Performance That</span> Stands Apart
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                            At Your Best Home Security, we prioritize your safety with personalized, innovative security systems designed to fit your unique needs.
                        </p>
                    </div>

                    <div class="our-support-btn wow fadeInUp mb-4" data-wow-delay="0.8s">
                        <a href="tel:1-888-447-6320" class="btn-default">Contact Now</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Our Support Section End -->

    <!-- Our Support Section End -->

    <!-- CTA Box Section Start -->
    <div class="cta-box dark-section" id="contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="cta-box-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact us</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><span>Join The Security 
                                </span>Revolution Today</h2>
                        </div>
                        <div class="cta-box-body wow fadeInUp" data-wow-delay="0.6s">
                            <div class="cta-box-item">
                                <div class="icon-box">
                                    <a href="tel:1-888-447-6320">
                                    <img src="/frontend/images/icon-phone.svg" alt="icon-phone">
                                    </a>
                                </div>
                                <div class="cta-box-item-content">
                                    <p>Get Started Today</p>
                                    <h3><a href="tel:1-888-447-6320">+1(888) 447-6320</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="cta-box-image">
                        <img src="/frontend/images/cta-box-image.png" alt="cta-box-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Box Section End -->


    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-us-images">
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="/frontend/my-img/monitoring.jpg" alt="monitoring">
                            </figure>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-us-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">We Provide</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><span>Latest Monitoring
                                </span> Systems</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">We provide a latest and modern technology of
                                security equipment. Our focus on give best security systems. Always helping experts for your
                                security.</p>
                        </div>
                    </div>
                    <div class="about-us-body wow fadeInUp" data-wow-delay="0.8s">
                        <div class="about-contact-box">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-about-contact.svg" alt="about">
                            </div>
                            <div class="about-contact-box-content">
                                <p>Call Directly 24/7</p>
                                <h3><a href="tel:1-888-447-6320">+1(888) 447-6320</a></h3>
                            </div>
                        </div>
                        <div class="about-us-btn">
                            <a href="tel:1-888-447-6320" class="btn-default">Call Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- About Us Section End -->


    <!-- Our Testimonials Section Start -->
    <div class="our-testimonials">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">What Our Clients Say</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque" style="font-size: 40px;">Trusted By<span> Families And Businesses
                            </span></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-author-box">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="/frontend/images/author-1.jpg" alt="author">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>Emily Carter</h3>
                                                    <p>Chicago, Illinois</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-quote">
                                                <img src="/frontend/my-img/testimonial.svg" alt="testimonial">
                                            </div>
                                        </div>
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="testimonial-content">
                                        <p>"Your Best Home Security transformed our sense of safety. The installation was seamless, and now we feel secure at all times."</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-author-box">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="/frontend/my-img/micheal.jpg" alt="author">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>Michael Johnson</h3>
                                                </div>
                                            </div>
                                            <div class="testimonial-quote">
                                                <img src="/frontend/my-img/testimonial.svg" alt="testimonial">
                                            </div>
                                        </div>
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>"Their customer service is exceptional! They answered all my questions and ensured I was comfortable with the system before leaving."</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-author-box">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="/frontend/my-img/liza.jpg" alt="author">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>Lisa Smith</h3>
                                                </div>
                                            </div>
                                            <div class="testimonial-quote">
                                                <img src="/frontend/my-img/testimonial.svg" alt="testimonial">
                                            </div>
                                        </div>
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>"I love the smart integration. Controlling my security system from my phone has been a game-changer for my family."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-btn">
                                <div class="testimonial-button-prev"></div>
                                <div class="testimonial-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    <div class="our-feature dark-section" style="text-align:center; padding:60px 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Start Protecting Today</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                            <span>Your Safety Starts With Us</span>
                        </h2>
                        <p>Contact us now for a free consultation and discover how we can provide peace of mind for you and your loved ones.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <!-- Box 2 -->
                <div class="cta-box-body wow fadeInUp" data-wow-delay="0.6s" style="justify-content: center;">
                    <div class="cta-box-item">
                        <div class="icon-box">
                            <a href="tel:1-888-447-6320">
                            <img src="/frontend/images/icon-phone.svg" alt="icon-phone">
                            </a>
                        </div>
                        <div class="cta-box-item-content">
                            <p>Smart Security,Best Engineers</p>
                            <h3><a href="tel:1-888-447-6320">+1(888) 447-6320
                        </a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
