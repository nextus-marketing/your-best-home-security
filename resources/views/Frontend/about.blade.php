
@extends('layouts.frontend')
@section('title') About Us | Home Defender @endsection
@section('meta')
<meta name="description" content="Learn about HomeDefender’s mission to provide reliable home security and smart automation solutions. Discover our experience, values, and commitment to protecting families with trusted, innovative technology.">
@endsection
@section('content')
<style>
 .page-team {
    padding: 5px 0 10px;
}
.our-testimonials {
    padding: 10px 0;
}
</style>
<div class="page-header parallaxie">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="page-header-box">
						<h1 class="wow fadeInUp" data-cursor="-opaque">About us</h1>
						<nav class="wow fadeInUp" data-wow-delay="0.2s">
                            <ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="/">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">about us</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="our-commitment">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="our-commitment-images">
                        <div class="our-commitment-img-box">
                            <div class="commitment-image-1">
                                <figure class="image-anime reveal">
                                    <img src="/frontend/images/commitment-image-1.jpg" alt="commitment">
                                </figure>
                            </div>
                            <div class="satisfy-client-box">
                                <div class="satisfy-client-content">
                                    <h2><span class="counter">3.5</span>K</h2>
                                    <p>Our Trusted Clients</p>
                                </div>
                                <div class="satisfy-client-images">
                                    <div class="satisfy-client-image">
                                        <figure class="image-anime reveal">
                                            <img src="/frontend/images/satisfy-client-img-1.jpg" alt="client">
                                        </figure>
                                    </div>
                                    <div class="satisfy-client-image">
                                        <figure class="image-anime reveal">
                                            <img src="/frontend/images/satisfy-client-img-2.jpg" alt="client">
                                        </figure>
                                    </div>
                                    <div class="satisfy-client-image">
                                        <figure class="image-anime reveal">
                                            <img src="/frontend/images/satisfy-client-img-3.jpg" alt="client">
                                        </figure>
                                    </div>
                                    <div class="satisfy-client-image">
                                        <figure class="image-anime reveal">
                                            <img src="/frontend/images/satisfy-client-img-4.jpg" alt="client">
                                        </figure>
                                    </div>
                                    <div class="satisfy-client-image">
                                        <figure class="image-anime reveal">
                                            <img src="/frontend/images/satisfy-client-img-5.jpg" alt="client">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="our-commitment-img-box">
                            <div class="commitment-image-2">
                                <figure class="image-anime reveal">
                                    <img src="/frontend/my-img/security-guard-workspace.jpg" alt="guard-workspace">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="our-commitment-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">About Us</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><span>15 Years Of Excellence </span> In Security Solutions</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Home Defender is one of the top 100 security companies in the country by SDM Magazine.
                            </br>
                            With over 15 years of expertise in the field, we have been committed to delivering the best in security and automation solutions. Home Defender has consistently ranked among the top 100 security companies in the nation by SDM Magazine, a testament to our dedication to quality and innovation.
                            </br>
                            </br>
                            We focus on providing tailored solutions that meet the unique needs of our customers, offering a perfect blend of advanced technology and user-friendly designs. Whether you need to secure your home, business, or industrial property, we’re here to make your life safer and simpler.</p>
                        </div>
                    </div>
                    <div class="commitment-list wow fadeInUp" data-wow-delay="0.6s">
                        <ul>
                            <li>Arm/Disarm your home security system</li>
                            <li>Live Video monitoring</li>
                            <li>Access from anywhere</li>
                            <li>View security alerts / notification</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Commitment Section End -->

    <div class="our-feature dark-section">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6 col-md-8">
                <div class="section-title">
                    <h3 class="wow fadeInUp">Why Choose Us</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                        <span>Home Defender </span>
                    </h2>
                    <p>Choose us for expert solutions, reliable service, and unmatched dedication to your security and convenience needs. Your safety is our priority.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-4">
                <div class="contact-now-circle">
                    <a href="/contact"><img src="/frontend/images/contact-now-circle.svg" alt="contact-now"></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="our-feature-box">

                    <div class="feature-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="/frontend/images/icon-feature-item-1.svg" alt="icon-feature">
                        </div>
                        <div class="feature-item-content">
                            <h3>Easy to set up and use (professional installation available)</h3>
                        </div>
                    </div>

                    <div class="feature-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="/frontend/images/icon-feature-item-2.svg" alt="icon-feature">
                        </div>
                        <div class="feature-item-content">
                            <h3>System With Reliable 24/7 Professional Monitoring</h3>
                        </div>
                    </div>

                    <div class="feature-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="/frontend/images/icon-feature-item-3.svg" alt="icon-feature">
                        </div>
                        <div class="feature-item-content">
                            <h3>Ethernet connection with cellular backup so you’re always connected</h3>
                        </div>
                    </div>

                    <div class="feature-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon-box">
                            <img src="/frontend/images/icon-feature-item-4.svg" alt="icon-feature">
                        </div>
                        <div class="feature-item-content">
                            <h3>Faster emergency dispatch and fewer false alarms</h3>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-12">
                <div class="feature-counter-box">

                    <div class="feature-counter-item">
                        <h2><span class="counter">220</span>+</h2>
                        <p>Residential area</p>
                    </div>

                    <div class="feature-counter-item">
                        <h2><span class="counter">30</span>+</h2>
                        <p>Malls & Building</p>
                    </div>

                    <div class="feature-counter-item">
                        <h2><span class="counter">100</span>+</h2>
                        <p>Commercial Space</p>
                    </div>

                    <div class="feature-counter-item">
                        <h2><span class="counter">700</span>+</h2>
                        <p>Project Complete</p>
                    </div>

                    <div class="feature-counter-item">
                        <h2><span class="counter">25</span>+</h2>
                        <p>Year of Experience</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Section 1: Image Left / Content Right -->
<div class="about-us">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Image -->
            <div class="col-lg-6">
                <div class="about-us-images">
                    <div class="about-img-1">
                    <figure class="image-anime reveal">
                        <img src="/frontend/my-img/about.jpg" alt="about">
                    </figure>
                    </div>
                </div>
            </div>

            <!-- Right Content -->
            <div class="col-lg-6">
                <div class="about-us-content">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">We Provide</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s">
                            <span>Secure Yourself </span> With The Most-Trusted, 
                            Easy-To-Use Systems On The Market
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                            The integrity of your home or business is of utmost importance. 
                            Highly trained operators rapidly handle fire, burglary, hold-up, 
                            temperature issues, or medical emergency alarm signals. 
                            We operate a 24/7/365 UL-listed and NYFD-approved central station 
                            using digital, radio, cellular, and internet communication.
                        </p>
                    </div>

                    <div class="about-us-btn mt-3">
                        <a href="tel:1-888-447-6320" class="btn-default">Call Now</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<!-- About Us Section Start -->
<div class="about-us">
    <div class="container">
        <div class="row align-items-center">

            <!-- Content First -->
            <div class="col-lg-6">
                <div class="about-us-content">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">We Provide</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                            <span>Secure Your Home with </span> Expert-Backed Protection
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                            We provide a latest and modern technology of security equipment. 
                            Our focus on give best security systems. Always helping experts for your security.
                        </p>
                    </div>

                    <div class="commitment-list wow fadeInUp" data-wow-delay="0.6s">
                        <ul>
                            <li>New Homeowners</li>
                            <li>Relocating Homeowners</li>
                            <li>Second Homeowners</li>
                            <li>Upgrading Existing Security</li>
                        </ul>
                    </div>
                    </br>
                    <div class="about-us-btn" style="margin-top:20px;">
                        <a href="tel:1-888-447-6320" class="btn-default">Call Now</a>
                    </div>
                </div>
            </div>
            
            <!-- Image Second -->
            <div class="col-lg-6 mt-2">
                <div class="about-us-images">
                    <div class="about-img-1">
                        <figure class="image-anime reveal">
                            <img src="/frontend/images/about-img-1.jpg" alt="about">
                        </figure>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>




 <div class="our-feature dark-section">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="our-feature-box">
                        <div class="feature-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="/frontend/my-img/client-01.png" alt="client">
                            </div>
                        </div>
                        <div class="feature-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="/frontend/my-img/client-03.webp" alt="client">
                            </div>
                        </div>
                        <div class="feature-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="/frontend/my-img/client-04.webp" alt="client">
                            </div>
                        </div>
                        <div class="feature-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="/frontend/my-img/client-05.png" alt="client">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="our-testimonials pt-5">
        <div class="container">


            <!-- BLOCK 1 -->
            <div class="about-us">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-6">
                            <div class="about-us-content">
                                <div class="section-title">
                                    <h3 class="wow fadeInUp">We Provide</h3>
                                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                                        <span>Essential Security</span>
                                    </h2>
                                    <p class="wow fadeInUp" data-wow-delay="0.4s">
                                     Keep your loved ones and home safe with our Essential Home Protection package. 
                                     Professionally installed and easy to control from your smartphone,
                                     our system lets you arm and disarm your security from anywhere.
                                     Enjoy peace of mind knowing your home is monitored 24/7 by
                                     our award-winning security team.
                                    </p>
                                </div>
                                <div class="about-us-btn" style="margin-top:20px;">
                                    <a href="tel:1-888-447-6320" class="btn-default">Call Now</a>
                                </div>
                                </br>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="about-us-images">
                                <div class="about-img-1">
                                    <figure class="image-anime reveal">
                                        <img src="/frontend/my-img/essential-security.jpg" alt="essential-security">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-us">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-us-images">
                                <div class="about-img-1">
                                    <figure class="image-anime reveal">
                                        <img src="/frontend/my-img/smart-home.jpg" alt="smart-home">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-us-content">
                                <div class="section-title">
                                    <h3 class="wow fadeInUp">We Provide</h3>
                                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                                        <span>Home Automation</span>
                                    </h2>
                                    <p class="wow fadeInUp" data-wow-delay="0.4s">
                                    Take control of your home like never before. Our Home Automation package adds video monitoring to your security system,
                                     so you can see what’s happening inside and outside your home in real-time. 
                                    Enjoy all the features of our Essential Security package, now with enhanced visibility and convenience.
                                    </p>
                                </div>
                            </div>
                            <div class="about-us-btn" style="margin-top:20px;">
                                <a href="tel:1-888-447-6320" class="btn-default">Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-us">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-us-content">
                                <div class="section-title">
                                    <h3 class="wow fadeInUp">We Provide</h3>
                                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                                        <span>Connected Home</span>
                                    </h2>
                                    <p class="wow fadeInUp" data-wow-delay="0.4s">
                                      Experience the future of home protection. Our Connected Home package not only keeps your home safe but
                                       also brings unmatched convenience with live video monitoring, energy management, 
                                       and full remote access control. Protect, monitor, and manage your home—all from anywhere.
                                    </p>
                                </div>
                                <div class="about-us-btn" style="margin-top:20px;">
                                    <a href="tel:1-888-447-6320" class="btn-default">Call Now</a>
                                </div>
                                </br>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-us-images">
                                <div class="about-img-1">
                                    <figure class="image-anime reveal">
                                        <img src="/frontend/my-img/home.avif" alt="home">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-us-images">
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="/frontend/my-img/home-solution.jpg" alt="home-solution">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-us-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">We Provide</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><span>Home Security
                                    Solutions </span> </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Securing the things you treasure most — like
                                your family, home and valuables.
                                </br>
                                </br>
                                Your family. Your home. Everything you own. You can’t always be there to protect what you
                                care about most. But with Secured Home Security, you’ll benefit from multiple monitoring
                                centers that ensure that help is always near and a single app to control all of your
                                connected devices.
                                </br>
                                </br>
                                From monitored burglar and fire alarms, to video, smart lights, locks, doorbell cameras and
                                thermostats…even personal emergency response…enjoy comfort and convenience knowing your home
                                and loved ones are protected.
                                </br>
                                </br>
                                Choose Secured Home Security and check off one less thing to worry about in your busy
                                lifestyle!</p>
                        </div>
                    </div>
                    <div class="about-us-btn" style="margin-top:20px;">
                        <a href="tel:1-888-447-6320" class="btn-default">Call Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-us-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">We Provide</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                                <span>Business Security Solutions</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">
                                As a business owner, you work hard to make your business succeed, it’s your livelihood, so
                                it’s important to protect it against internal and external crime, fire and environmental
                                hazards.
                                <br><br>
                                Our security experts create a security solution based on the needs of your business. We ask
                                the right questions, get to know your business objectives, opportunities and challenges.
                                Then we find the right mix of products and services that are the perfect fit. And we’re
                                there for you beyond that, every step of the way, understanding that your needs may evolve
                                as your businesses grows or changes.
                                <br><br>
                                From consultation and design, to installation, monitoring and service, we integrate our
                                products to provide smart, cost-effective, quality security solutions for you.
                            </p>
                        </div>
                        <div class="about-us-btn" style="margin-top:20px;">
                            <a href="tel:1-888-447-6320" class="btn-default">Call Now</a>
                        </div>
                        </br>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-us-images">
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="/frontend/my-img/meeting.jpg" alt="meeting">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-team">
    <div class="container">

        <!-- Section Title -->
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                        <span>Expert Security </span>Team
                    </h2>
                </div>
            </div>
        </div>

        <!-- Team Members -->
        <div class="row justify-content-center">

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="team-item wow fadeInUp">
                    <div class="team-image">
                        <a href="#0" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="/frontend/my-img/person-1.webp" alt="person-1">
                            </figure>
                        </a>
                    </div>
                    <div class="team-content text-center">
                        <h3><a href="#0">Justin Novak</a></h3>
                        <p>Co founder</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-image">
                        <a href="#0" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="/frontend/my-img/person-2.jpg" alt="person">
                            </figure>
                        </a>
                    </div>
                    <div class="team-content text-center">
                        <h3><a href="#0">Norton Berry</a></h3>
                        <p>Managing Director</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-image">
                        <a href="#0" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="/frontend/my-img/person-4.jpg" alt="person">
                            </figure>
                        </a>
                    </div>
                    <div class="team-content text-center">
                        <h3><a href="#0">Edward Smith</a></h3>
                        <p>Investment Expert</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-image">
                        <a href="#0" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="/frontend/my-img/person-3.jpg" alt="person">
                            </figure>
                        </a>
                    </div>
                    <div class="team-content text-center">
                        <h3><a href="#0">Jonathan Blake</a></h3>
                        <p>Head of Client Relations</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- CTA Box Section Start -->
    <div class="cta-box dark-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="cta-box-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact us</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Tailored<span> Home
                                    Security Solutions </span></h2>
                            <p>From doorbell cameras to full home security systems, Prime Home Safety offers a wide range of
                                services to keep your home safe and secure. Our network of trusted professionals ensures
                                high-quality installations and ongoing support.</p>
                        </div>
                        <div class="cta-box-body wow fadeInUp" data-wow-delay="0.6s">
                            <div class="cta-box-item">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-phone.svg" alt="icon">
                                </div>
                                <div class="cta-box-item-content">
                                    <p>Contact Us</p>
                                    <h3><a href="tel:1-888-447-6320">+(1) 888 447 6320</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="cta-box-image">
                        <img src="/frontend/my-img/security-person.png" alt="security-person">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Box Section End -->

@endsection