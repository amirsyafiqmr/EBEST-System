<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EBEST MEM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by QBOOTSTRAP.COM" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="QBOOTSTRAP.COM" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('logo-amir.ico') }}" />

    <!-- Animate.css -->
    <link rel="stylesheet" href="med/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="med/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="med/css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="med/css/magnific-popup.css">
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="med/css/owl.carousel.min.css">
    <link rel="stylesheet" href="med/css/owl.theme.default.min.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="med/css/flexslider.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="med/css/style.css">

    <!-- Modernizr JS -->
    <script src="med/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="med/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="qbootstrap-loader"></div>

<div id="page">
    <nav class="qbootstrap-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="top">
                            <div class="row">
                                <div class="col-md-4 col-md-push-4 text-center">
                                    <div><img src="med/images/MLOGO.png"></div>
                                </div>
                                <div class="col-md-4 col-md-pull-4">
                                    <div class="num">
                                        <span class="icon"><i class="icon-phone"></i></span>
                                        <p><a href="">+(60)11-10142018 (ARIF)</a><br><a href="">+(60)17-3639073 (HAYATI)</a></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="loc">
                                        <span class="icon"><i class="icon-location"></i></span>
                                        <p><a href="">No 2, Jalan Taming 2A, Kaw. Perindustrian Taming Jaya, 43300 Balakong, Selangor.</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 text-center">
                        <div class="menu-1">
                            <ul>
                                <li class="active"><a href="/">Home</a></li>
                                <li class="active"><a href="{{ route('customerLogin') }}">{{ __('Login') }}</a></li>
                                <li class="active"><a href="http://www.madetillevent.com.my/profile.html">About Us</a></li>
                                <li class="active"><a href="http://www.madetillevent.com.my/contactus.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    <aside id="qbootstrap-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(med/images/MA2.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                <div class="slider-text-inner">
                                    <h1><strong>Buffetware</strong></h1>
                                    <h2 class="doc-holder">Sparkling clean and hygienically wrapped porcelain tableware delivered by Madetill Event</h2>
                                    <p><a class="btn btn-primary btn-lg" href="{{ route('customerLogin') }}">Book Now!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(med/images/MA1.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                <div class="slider-text-inner">
                                    <h1><strong>Canopy Equipment</strong></h1>
                                    <h2 class="doc-holder">Best choice of canopy to suits all your functions</h2>
                                    <p><a class="btn btn-primary btn-lg" href="{{ route('customerLogin') }}">Book Now!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(med/images/M12.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                <div class="slider-text-inner">
                                    <h1><strong>Serving Dome</strong></h1>
                                    <h2>Timeless elegance and massive choice makes Madetill's quality stainless steel and ever-popular option</a></h2>
                                    <p><a class="btn btn-primary btn-lg btn-learn" href="{{ route('customerLogin') }}">Book Now!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id="qbootstrap-intro">
        <div class="row">
            <div class="intro animate-box">
                <div class="intro-grid color-1">
                    <span class="icon"><i class="icon-calendar3"></i></span>
                    <h3>Canopy & Equipment</h3>
                    <p>Many type of canopy and equipment for you</p>
                    <a href="{{ route('customerLogin') }}" class="btn btn-primary">Book Here...</a>
                </div>
                <div class="intro-grid color-2">
                    <span class="icon"><i class="icon-clock3"></i></span>
                    <h3>Do You Need Service Repair?</h3>
                    <p>for your serving dome and buffetware!</p>
                    <a href="http://www.madetillevent.com.my/contactus.html" class="btn btn-primary">Call Here...</a>
                </div>
                <div class="intro-grid color-3">
                    <span class="icon"><i class="icon-wallet2"></i></span>
                    <h3>Download Price List</h3>
                    <p>Let's know our price</p>
                    <a href="http://www.madetillevent.com.my/pricelist.pdf" class="btn btn-primary">Download Here!</a>
                </div>
            </div>
        </div>
    </div>

    <div id="qbootstrap-services">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading">
                    <h2>Welcome to Madetill Event Management
                        The Rental Professional in Banquet Equipment</h2>
                    <p>Madetill Event Management Sdn Bhd (MEM) was incorporated on 2nd Dec 2004. Our company is the sole manufacture of serving dome food warmer in Malaysia. We have been manufactured serving dome since 1998 under our principle company Madetill Industries (M) Sdn Bhd. The core businesses of MEM are selling and rental various model of serving dome...</p>
                </div>
            </div>
        </div>


    <div id="qbootstrap-counter" class="qbootstrap-counters" style="background-image: url(med/images/MC1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                            <span class="qbootstrap-counter-label"><h2><font color="white">What Makes Us the Best?</font></h2>
                            <p>Our catering equipment hire business has grown mainly by word-of-mouth from regular, satisfied clients. All of this deliverd to your venue to any event, from birthday celebrations, weddings, tea receptions, to high-end banquets and large corporate functions.</p></span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="qbootstrap-blog">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading">
                    <h2>SALES OF HOTEL & CATERING EQUIPMENT</h2>
                    <p>We supply a huge range of Hotel & Catering Equipment including</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row animate-box">
                        <div class="owl-carousel owl-carousel-fullwidth">
                            <div class="item">
                                <div class="blog-slide active">
                                    <a class="blog-box" style="background-image: url(med/images/M11.png);"></a>
                                    <div class="desc">
                                        <h3><center>Serving Dome</center></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog-slide active">
                                    <a class="blog-box" style="background-image: url(med/images/M8.png);"></a>
                                    <div class="desc">
                                        <h3><center>Buffet Accessories</center></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog-slide active">
                                    <a class="blog-box" style="background-image: url(med/images/M5.png);"></a>
                                    <div class="desc">
                                        <h3><center>Glassware</center></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog-slide active">
                                    <a class="blog-box" style="background-image: url(med/images/M9.png);"></a>
                                    <div class="desc">
                                        <h3><center>Melamine</center></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog-slide active">
                                    <a class="blog-box" style="background-image: url(med/images/M7.png);"></a>
                                    <div class="desc">
                                        <h3><center>Chinawares Porcelain</center></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog-slide active">
                                    <a class="blog-box" style="background-image: url(med/images/M14.png);"></a>
                                    <div class="desc">
                                        <h3><center>VVIP Tableware</center></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog-slide active">
                                    <a class="blog-box" style="background-image: url(med/images/M6.png);"></a>
                                    <div class="desc">
                                        <h3><center>Variety of Cutleries</center></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog-slide active">
                                    <a class="blog-box" style="background-image: url(med/images/M10.png);"></a>
                                    <div class="desc">
                                        <h3><center>Banquet Linen</center></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog-slide active">
                                    <a class="blog-box" style="background-image: url(med/images/M15.png);"></a>
                                    <div class="desc">
                                        <h3><center>Other Rentals</center></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <footer id="qbootstrap-footer" role="contentinfo">
        <div class="row copyright">

            <div class="col-md-12 text-center">
                <p>
                    <ul class="qbootstrap-social">
                        <a href="https://www.facebook.com/MEMHQ/"><i class="icon-facebook2"></i></a></li>
                        <a href="https://twitter.com/MEM_HQ"><i class="icon-twitter2"></i></a></li>
                        <a href="https://www.instagram.com/madetillevent/"><i class="icon-instagram"></i></a></li>
                        <a href="https://www.facebook.com/venueperkahwinanmem/"><i class="icon-facebook2"></i></a></li>
                        <small class="block">Copyright &copy;2019 | All Rights Reserved.</small>
                        <small class="block">Created by Madetill Event Management Sdn. Bhd.</small>
                    </ul>
                </p>
            </div>
        </div>
    </footer>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="med/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="med/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="med/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="med/js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="med/js/jquery.stellar.min.js"></script>
<!-- Carousel -->
<script src="med/js/owl.carousel.min.js"></script>
<!-- Flexslider -->
<script src="med/js/jquery.flexslider-min.js"></script>
<!-- countTo -->
<script src="med/js/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script src="med/js/jquery.magnific-popup.min.js"></script>
<script src="med/js/magnific-popup-options.js"></script>
<!-- Sticky Kit -->
<script src="med/js/sticky-kit.min.js"></script>
<!-- Main -->
<script src="med/js/main.js"></script>

</body>
</html>

