@extends('layouts.frontend')
@section('title')
    Home Defender | Affordable Smart Home Security Solutions
@endsection
@section('meta')
<meta name="description" content="HomeDefender Protect your home with professional security solutions and smart home services. Secure installations, 24/7 monitoring, and peace of mind for you and your family. Get started today.">
@endsection
@section('content')

<style>
    @media (max-width: 768px) {
    .main-header .navbar .container {
        justify-content: center !important;
    }

    .header-btn {
        position: absolute;
        right: 15px;
    }
}
@media only screen and (max-width: 767px) {
    .what-we-counter-item-content h3 {
        font-size: 17px;
    }
}

@media (max-width: 480px) {
    .footer-logo {
        padding: 12px 15px 6px 15px; /* even smaller for very small screens */
    }
}

/* Desktop (Default) */
.section-title h1 {
    font-size: 68px;
    font-weight: 800;
    text-transform: uppercase;
    margin-bottom: 0;
    cursor: none;
}

/* Mobile */
@media only screen and (max-width: 767px) {
    .section-title h1 {
        font-size: 54px;
    }
}


</style>
<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container d-flex justify-content-between align-items-center">

                <!-- Logo Left -->
                <a class="navbar-brand" href="/home">
                    <img src="/frontend/my-img/logo/logo-2.png" alt="Logo" 
                         style="width:161px; height: 51px; object-fit:contain;">
                </a>

                <!-- Call Now Right -->
                <div class="header-btn">
                    <a href="tel:1-888-447-6320" class="btn-default">Call Now</a>
                </div>

            </div>
        </nav>
    </div>
</header>


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
    <div class="hero dark-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">welcome to home defender</h3>
                            <h1 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Get 3 Months FREE Monitoring!</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Creating a smart Surveillance for the present and
                                future</p>
                        </div>
                        <div class="hero-body wow fadeInUp" data-wow-delay="0.6s">
                            <div class="hero-btn">
                                <a href="tel:1-888-447-6320" class="btn-default">Speak With an Expert</a>
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

    <!-- Best Service Section Start -->
    <div class="best-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="best-services-box">
                        <div class="best-service-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-best-service-1.svg" alt="icon-best-service">
                            </div>
                            <div class="best-service-item-content">
                                <h3>Premium Indoor Cameras</h3>
                            </div>
                        </div>
                        <div class="best-service-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-best-service-2.svg" alt="icon-best-service">
                            </div>
                            <div class="best-service-item-content">
                                <h3>24/7 Quick Alarms Response</h3>
                            </div>
                        </div>
                        <div class="best-service-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-best-service-3.svg" alt="icon-best-service">
                            </div>
                            <div class="best-service-item-content">
                                <h3>Amazing Security Systems</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Best Service Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">We Provides</h3>
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
                            <img src="/frontend/images/why-choose-image.png" alt="why-choose-image">
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
        </div>
    </div>

    <!-- What We Do Section Start -->
    <div class="what-we-do dark-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="what-we-do-content">
                        <div class="section-title section-title-center">
                            <h3 class="wow fadeInUp">what we do</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><span>Delivering Trusted
                                </span>Security And Surveillance</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">At our core, we are dedicated to delivering
                                trusted security and surveillance solutions that provide peace of mind for homes and
                                businesses alike. Our expertise spans from the installation of advanced CCTV systems.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.6s">We understand that every property is unique,
                                which is why we offer tailored solutions designed to meet your specific needs. Our
                                state-of-the-art technology ensures high-definition video, reliable performance, and
                                seamless connectivity, empowering you to monitor and protect your property at all times.</p>
                        </div>
                        <!-- Section Title End -->

                        <div class="about-need-help wow fadeInUp" data-wow-delay="0.8s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-need-help.svg" alt="icon-need-help">
                            </div>
                            <div class="need-help-content">
                                <p>Call for Any Kind Of Services</p>
                                <h3><a href="tel:1-888-447-6320">+1 (888) 447-6320</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="what-we-counter-image">
                        <div class="what-we-counter-box">
                                <div class="what-we-counter-item">
                                    <div class="icon-box d-none d-sm-block">
                                        <img src="/frontend/images/icon-what-we-counter-1.svg" alt="counter">
                                    </div>

                                    <div class="what-we-counter-item-content">
                                        <h3><span class="counter">450</span>+</h3>
                                        <p>Give development of security for home and offices complexity</p>
                                    </div>
                                </div>
                                <div class="what-we-counter-item">
                                    <div class="icon-box d-none d-sm-block">
                                        <img src="/frontend/images/icon-what-we-counter-2.svg" alt="counter">
                                    </div>
                                    <div class="what-we-counter-item-content">
                                        <h3><span class="counter">875</span>+</h3>
                                        <p>We are ready to give you security service in reasonable price</p>
                                    </div>
                                </div>
                            </div>

                        <div class="what-we-image">
                            <figure>
                                <img src="/frontend/images/what-we-image.jpg" alt="what-we-image">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- What We Do Section End -->



    <!-- Our Support Section Start -->
    <div class="our-support about-support">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="our-support-images">
                        <div class="our-support-image box-1">
                            <figure class="image-anime reveal">
                                <img src="/frontend/images/support-image-1.jpg" alt="support">
                            </figure>
                        </div>
                        <div class="our-support-image box-2">
                            <figure class="image-anime reveal">
                                <img src="/frontend/images/support-image-2.jpg" alt="support">
                            </figure>
                        </div>
                        <div class="our-support-circle">
                            <a href="/contact"><img src="/frontend/images/contact-now-circle-2.svg" alt="contact-now-circle"></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="our-support-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Let's Explore</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><span>Performance That
                                </span>Stands Apart </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Our dedicated technical support team is
                                available around the clock to ensure your security systems operate flawlessly.</p>
                        </div>
                        <div class="our-support-body wow fadeInUp" data-wow-delay="0.6s">
                            <div class="support-item">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-support-item-1.svg" alt="icon-support">
                                </div>
                                <div class="support-item-content">
                                    <h3>Quality</h3>
                                    <p>Unparalleled performance and reliability, the ultimate monitoring solution.</p>
                                </div>
                            </div>
                            <div class="support-item">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-support-item-2.svg" alt="icon-support">
                                </div>
                                <div class="support-item-content">
                                    <h3>Reliability</h3>
                                    <p>Unleash unparalleled reliability with our security & monitoring product.</p>
                                </div>
                            </div>
                            <div class="support-item">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-support-item-2.svg" alt="icon-support">
                                </div>
                                <div class="support-item-content">
                                    <h3>Unmatched Performance</h3>
                                    <p>Delivering seamless protection and real-time surveillance like never before.</p>
                                </div>
                            </div>
                        </div>
                        <div class="our-support-btn wow fadeInUp" data-wow-delay="0.8s">
                            <a href="tel:1-888-447-6320" class="btn-default">Call for Best Offers</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Support Section End -->

    <!-- CTA Box Section Start -->
    <div class="cta-box dark-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="cta-box-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact us</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><span>Get Connected To
                                </span>Home Defender Experts Near You!</h2>
                        </div>
                        <div class="cta-box-body wow fadeInUp" data-wow-delay="0.6s">
                            <div class="cta-box-item">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-phone.svg" alt="icon-phone">
                                </div>
                                <div class="cta-box-item-content">
                                    <p>Smart Security,Best Engineers</p>
                                    <h3><a href="tel:1-888-447-6320">+1 (888) 447-6320</a></h3>
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
                                <img src="/frontend/images/icon-about-contact.svg" alt="icon-about-contact">
                            </div>
                            <div class="about-contact-box-content">
                                <p>Call Directly 24/7</p>
                                <h3><a href="tel:1-888-447-6320">+1 (888) 447-6320</a></h3>
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


    <!-- Our Feature Section Start -->
    <div class="our-feature dark-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our Partners</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><span>Get Free
                            </span>Consultancy</h2>
                    </div>
                </div>

                <div class="col-lg-6 col-md-4">
                    <div class="contact-now-circle">
                        <a href="tel:1-888-447-6320"><img src="/frontend/images/contact-now-circle.svg" alt="contact-now-circle"></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="our-feature-box">
                        <div class="feature-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="/frontend/my-img/client-01.png" alt="client-01">
                            </div>
                        </div>
                        <div class="feature-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="/frontend/my-img/client-03.webp" alt="client-03">
                            </div>
                        </div>
                        <div class="feature-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="/frontend/my-img/client-04.webp" alt="client-04">
                            </div>
                        </div>
                        <div class="feature-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="/frontend/my-img/client-05.png" alt="client-05">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Feature Section End -->

    <!-- Our Commitment Section Start -->
    <div class="our-commitment">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-us-images">
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="/frontend/my-img/compresive.jpg" alt="compresive">
                            </figure>

                        </div>
                        <!-- About Image 1 End -->

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="our-commitment-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Our Commitment</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><span>Comprehensive Home
                                    Security </span> For Every Homeowner</h2>
                        </div>
                    </div>

                    <div class="commitment-list wow fadeInUp" data-wow-delay="0.6s">
                        <ul>
                            <li>Smart Doorbell Cameras</li>
                            <li>Door & Window Sensors</li>
                            <li>Comprehensive Security Systems</li>
                            <li>24/7 Monitoring & Emergency Response</li>
                            <li>Affordable Solutions for Every Budget</li>
                        </ul>
                    </div>
                    <div class="about-us-btn" style="margin-top: 30px;">
                        <a href="tel:1-888-447-6320" class="btn-default">Call for Instant Help</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Commitment Section End -->

    
   

    <!-- Our Testimonials Section Start -->
    <div class="our-testimonials">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">testimonials</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">We Are <span>Trusted 15+
                            </span>Countries Worldwide</h2>
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
                                                <img src="/frontend/images/testimonial-quote.svg" alt="author">
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
                                        <p>"The team at Secured Home Security provided excellent service from start to
                                                finish. They guided me through every step, from choosing the right package
                                                to the installation process. Their professionalism and attention to detail
                                                were impressive, making the whole experience smooth and hassle-free."</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-author-box">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="/frontend/images/author-2.jpg" alt="author">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>Michael Anderson</h3>
                                                    <p>Los Angeles, California</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-quote">
                                                <img src="/frontend/images/testimonial-quote.svg" alt="author">
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
                                            <p>"Secured Home Security has completely transformed the safety of our home. The
                                                system is
                                                incredibly reliable and easy to use, giving us peace of mind 24/7. The smart
                                                features are top-notch, and I
                                                love the convenience of controlling everything from my phone. Highly
                                                recommend it to anyone looking for a solid security solution!"</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-author-box">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="/frontend/images/author-3.jpg" alt="author">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>Sarah Johnson</h3>
                                                    <p>Dallas, Texas</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-quote">
                                                <img src="/frontend/images/testimonial-quote.svg" alt="testimonial">
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
                                            <p>"The support from Secured Home Security has been outstanding! Whenever I had
                                                questions or needed help with
                                                the system, their team was always quick to respond and incredibly helpful.
                                                It’s reassuring to know that they are just a call away whenever I need
                                                assistance. Exceptional customer support!"</p>
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
                        <h3 class="wow fadeInUp">let's connect</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                            <span>We’re Always There For You With 24/7 Award-Winning Monitoring.</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <!-- Box 2 -->
                <div class="cta-box-body wow fadeInUp" data-wow-delay="0.6s" style="justify-content: center;">
                    <div class="cta-box-item">
                        <div class="icon-box">
                            <img src="/frontend/images/icon-phone.svg" alt="icon-phone">
                        </div>
                        <div class="cta-box-item-content">
                            <p>Smart Security,Best Engineers</p>
                            <h3><a href="tel:1-888-447-6320">+1 (888) 447-6320
                        </a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-footer-box">

                    <div class="footer-logo">
                        <a href="/home">
                            <img src="/frontend/my-img/logo/logo-1.png" alt="Logo">
                        </a>
                    </div>

                    <div class="footer-contact-details">

                        <div class="footer-contact-item">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-phone.svg" alt="icon-phone">
                            </div>
                            <div class="footer-contact-item-content">
                                <p>phone number</p>
                                <h3><a href="tel:1-888-447-6320">+1 (888) 447-6320</a></h3>
                            </div>
                        </div>

                        <div class="footer-contact-item">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-mail.svg" alt="icon-mail">
                            </div>
                            <div class="footer-contact-item-content">
                                <p>email address</p>
                                <h3><a href="mailto:info@homedefender.net">info@homedefender.net</a></h3>
                            </div>
                        </div>

                        <div class="footer-contact-item">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-location.svg" alt="icon-location">
                            </div>
                            <div class="footer-contact-item-content">
                                <p>location</p>
                                <h3>Jersey City, NJ 07097</h3>
                            </div>
                        </div>

                    </div> <!-- /.footer-contact-details -->

                </div> <!-- /.main-footer-box -->
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-copyright-text">
                        <p>Copyright © 2025 All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

@endsection
