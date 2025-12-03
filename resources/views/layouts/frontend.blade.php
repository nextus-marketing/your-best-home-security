<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-98T3F9KPCE"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());   gtag('config', 'G-98T3F9KPCE'); </script>
    <title>@yield(section: 'title')</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
    <link rel="canonical" href="{{ url()->current() }}" />
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="/frontend/my-img/new-logo/your-best-home-security-46x46.png">
	<!-- Google Fonts Css-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
	<!-- Bootstrap Css -->
	<link href="/frontend/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="/frontend/css/slicknav.min.css" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="/frontend/css/swiper-bundle.min.css">
	<!-- Font Awesome Icon Css-->
	<link href="/frontend/css/all.min.css" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="/frontend/css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="/frontend/css/magnific-popup.css">
	<!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="/frontend/css/mousecursor.css">
	<!-- Main Custom Css -->
	<link href="/frontend/css/custom.css" rel="stylesheet" media="screen">
    <!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="/frontend/css/my.css">

     @if(View::hasSection('meta'))
    @yield('meta')
@elseif(View::hasSection('meta_description'))
    <meta name="description" content="@yield('meta_description')">
@endif
    @yield('structured_data')
    <!-- <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "name": "HomeDefender",
      "url": "https://yourbesthomesecurity.com/",
      "logo": "https://homedefender.net/frontend/my-img/logo/logo-2.png",
      
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "customer support",
        "telephone": "+1 (888) 447-6320",
        "email": "info@homedefender.net",
        "areaServed": "USA"
      }
    },
    {
      "@type": "WebSite",
      "url": "https://homedefender.net/",
      "name": "HomeDefender",
      "publisher": {
        "@type": "Organization",
        "name": "HomeDefender"
      },
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://homedefender.net/?s={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": "WebPage",
      "url": "https://homedefender.net/",
      "name": "HomeDefender",
      "isPartOf": {
        "@type": "WebSite",
        "url": "https://homedefender.net/"
      },
      "mainEntityOfPage": {
        "@type": "WebSite",
        "url": "https://homedefender.net/"
      }
    }
  ]
}
</script> -->
</head>
<body>
<a href="tel:1-888-447-6320" class="call-now-float" aria-label="Call Now">
    <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" width="22" height="22">
        <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.11-.21 11.36 11.36 0 003.54.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 5a1 1 0 011-1h3.5a1 1 0 011 1 11.36 11.36 0 00.57 3.54 1 1 0 01-.45 1.25l-2.2 2.2z"/>
    </svg>
</a>

    <!-- Header Start -->
     @if (!Request::is('home'))
	<header class="main-header">
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<!-- Logo Start -->
					<a class="navbar-brand d-flex align-items-center" href="/" style="gap:10px;">
                        <img src="/frontend/my-img/new-logo/your-best-home-security.png" 
                            alt="Logo" 
                            style="width:61px; height:51px; object-fit:contain;">

                        <span style="font-size:20px; font-weight:700; color:#000;">
                            Your Best Home Security
                        </span>
                    </a>

					<!-- Logo End -->

					<!-- Main Menu Start -->
					<div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="/">Home</a>
                                </li>                                
                                <li class="nav-item"><a class="nav-link" href="/#about">About Us</a>
                                <li class="nav-item"><a class="nav-link" href="/#contact">Contact Us</a></li>                         
                            </ul>
                        </div>
                        
                        <!-- Header Btn Start -->
                        <div class="header-btn">
                            <a href="#contact" class="btn-default">Get Started Today</a>
                        </div>
                        <!-- Header Btn End -->
					</div>
					<!-- Main Menu End -->
					<div class="navbar-toggle"></div>
				</div>
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>
    @endif
	<!-- Header End -->

@yield(section: 'content')


@if(!Request::is('contact'))
    <!-- Popup Overlay -->
    <div id="promoPopup" class="promo-popup-overlay">
        <div class="promo-popup">
            <!-- Logo Centered -->
            <div class="popup-logo">
               <a class="navbar-brand d-flex align-items-center" href="/" style="gap:10px;">
                        <img src="/frontend/my-img/new-logo/your-best-home-security.png" 
                            alt="Logo" 
                            style="width:61px; height:51px; object-fit:contain;">

                        <span style="font-size:20px; font-weight:700; color:#000;">
                            Your Best Home Security
                        </span>
                    </a>
            </div>
            <span class="close-popup">&times;</span>
            <h2>Get <span style="color:#2335dd;">3 Months FREE</span> Monitoring!</h2>
            <p>Call now and secure your home with our exclusive limited-time offer.</p>
            <div class="our-support-btn">
                <a href="tel:18884476320" class="btn-default">Contact Now</a>
            </div>
        </div>
    </div>
@endif

<script>
    // Show popup after 2 seconds
    setTimeout(function() {
        document.getElementById("promoPopup").style.display = "flex";
    }, 2000);

    // Close Popup
    document.querySelector(".close-popup").onclick = function () {
        document.getElementById("promoPopup").style.display = "none";
    };

    // Close when clicking outside the popup
    window.onclick = function (e) {
        if (e.target == document.getElementById("promoPopup")) {
            document.getElementById("promoPopup").style.display = "none";
        }
    };
</script>


<button id="scrollTopBtn">
    <i class="fa fa-arrow-up"></i>
</button>

<script>
    const scrollTopBtn = document.getElementById("scrollTopBtn");

    // Show button when scrolling
    window.addEventListener("scroll", function () {
        if (window.scrollY > 200) {
            scrollTopBtn.style.display = "flex";
        } else {
            scrollTopBtn.style.display = "none";
        }
    });

    // Scroll to top smoothly
    scrollTopBtn.addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
</script>       

    <!-- Main Footer Start -->
     @if(!Request::is('home'))
   <footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-footer-box">
                    <div class="footer-logo">
                        <a class="navbar-brand d-flex align-items-center" href="/" style="gap:10px;">
                        <img src="/frontend/my-img/new-logo/your-best-home-security.png" 
                            alt="Logo" 
                            style="width:61px; height:51px; object-fit:contain;">

                        <span style="font-size:20px; font-weight:700; color:#000;">
                            Your Best Home Security
                        </span>
                    </a>
                    </div>

                    <div class="footer-contact-details">
                        <div class="footer-contact-item">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-phone.svg" alt="icon">
                            </div>
                            <div class="footer-contact-item-content">
                                <p>phone number</p>
                                <h3><a href="tel:18884476320">+1 (888) 447-6320</a></h3>
                            </div>
                        </div>

                        <div class="footer-contact-item">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-mail.svg" alt="icon">
                            </div>
                            <div class="footer-contact-item-content">
                                <p>email address</p>
                                <h3><a href="mailto:info@homedefender.net">info@homedefender.net</a></h3>
                            </div>
                        </div>

                        <div class="footer-contact-item">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-location.svg" alt="icon">
                            </div>
                            <div class="footer-contact-item-content">
                                <p>location</p>
                                <h3>Jersey City, NJ 07097</h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-8 col-md-6">
                <div class="about-footer">
                    <div class="footer-links">
                        <h3>About Solutions</h3>
                        <p>At <b class="heightlite">Your Best Home Security</b>, we strive to deliver security products and monitoring systems that revolutionize the way people protect, monitor, and safeguard their homes and businesses.</p>
                    </div>
                </div>               
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="footer-links">
                    <h3>Quick link</h3>
                    <ul>
                        <li><a href="/">home</a></li>
                        <li><a href="/#about">about us</a></li>
                        <li><a href="/#contact">Contact Us</a></li>
                    </ul>
                </div>
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
                <div class="col-md-6">
                        <div class="footer-privacy-policy">
                            <ul>
                                <li><a href="/privacy-policy">privacy policy</a></li>
                                <li><a href="/terms-and-condition">term's & condition</a></li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</footer>
@endif

    <!-- Main Footer End -->
    <!-- Jquery Library File -->
    <script src="/frontend/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="/frontend/js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="/frontend/js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="/frontend/js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="/frontend/js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="/frontend/js/jquery.waypoints.min.js"></script>
    <script src="/frontend/js/jquery.counterup.min.js"></script>
    <!-- Isotop js file -->
	<script src="/frontend/js/isotope.min.js"></script>
    <!-- Magnific js file -->
    <script src="/frontend/js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="/frontend/js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="/frontend/js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="/frontend/js/gsap.min.js"></script>
    <script src="/frontend/js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="/frontend/js/SplitText.js"></script>
    <script src="/frontend/js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="/frontend/js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js file -->
    <script src="/frontend/js/wow.min.js"></script>
    <!-- Main Custom js file -->
    <script src="/frontend/js/function.js"></script>

        <!-- End Script -->
</body>
</html>
