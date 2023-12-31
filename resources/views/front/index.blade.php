<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}" lang="{{LaravelLocalization::getCurrentLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>CloudSky - Multipurpose Domain, Hosting and WHMCS Template</title>
    
    <!-- ==== Document Meta ==== -->
    <meta name="author" content="Mahmoud Maher">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicons ==== -->
    <link rel="icon" href="favicon.png" type="{{URL::asset('front')}}/image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,900%7CLato:300,400i,900%7CRaleway:100,300,300i,400,500,500i,600,700">

    <!-- ==== Font Awesome ==== -->
    <link rel="stylesheet" href="{{URL::asset('front')}}/css/font-awesome.min.css">
    @if(LaravelLocalization::getCurrentLocale()=='ar')
        <link rel="stylesheet" href="{{URL::asset('front')}}/css/font-awesome-rtl.css">
    @endif
    
    <!-- ==== Bootstrap Framework ==== -->
    <link rel="stylesheet" href="{{URL::asset('front')}}/css/bootstrap.min.css">
    @if(LaravelLocalization::getCurrentLocale()=='ar')
        <link rel="stylesheet" href="{{URL::asset('front')}}/css/bootstrap-rtl.min.css">
    @endif

    <!-- ==== jQuery UI Plugin ==== -->
    <link rel="stylesheet" href="{{URL::asset('front')}}/css/jquery-ui.min.css">
    
    <!-- ==== Owl Carousel Plugin ==== -->
    <link rel="stylesheet" href="{{URL::asset('front')}}/css/owl.carousel.min.css">
    
    <!-- ==== Bar Rating Plugin ==== -->
    <link rel="stylesheet" href="{{URL::asset('front')}}/css/fontawesome-stars-o.min.css">
    
    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="{{URL::asset('front')}}/css/style.css">
    @if(LaravelLocalization::getCurrentLocale()=='ar')
        <link rel="stylesheet" href="{{URL::asset('front')}}/css/style-rtl.css">
    @endif
    
    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="{{URL::asset('front')}}/css/responsive-style.css">

    <!-- ==== Theme Color Stylesheet ==== -->
    <link rel="stylesheet" href="{{URL::asset('front')}}/css/colors/theme-color-1.css" id="changeColorScheme">
    
    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="{{URL::asset('front')}}/css/custom.css">

    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preloader--spinners">
            <span class="preloader--spinner"></span>
            <span class="preloader--spinner"></span>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
        <header class="header--section">
            <!-- Header Topbar Start -->
            <div class="header--topbar">
                <div class="container">
                    <!-- Header Topbar Social Start -->
                    <ul class="nav social float--left hidden-xs">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                    <!-- Header Topbar Social End -->

                    <!-- Header Topbar Links Start -->
                    <ul class="nav links float--right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="text-c--main mr--8 fa fa-globe"></i>Language <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li>
                                        <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="mailto:example@example.com">
                                <i class="text-c--main mr--8 fa fa-envelope-o"></i><span>Email Us</span>
                            </a>
                        </li>
                        <li class="hidden-xs">
                            <a href="tel:0004561239870">
                                <i class="text-c--main mr--8 fa fa-volume-control-phone"></i><span>000 456 123 9870</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Header Topbar Links End -->
                </div>
            </div>
            <!-- Header Topbar End -->

            <!-- Header Navbar Start -->
            <nav class="header--navbar navbar" data-trigger="sticky">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Logo Start -->
                        <a href="index.html" class="navbar-brand">
                            <img src="{{URL::asset('front')}}/img/logo.png" alt="">
                        </a>
                        <!-- Logo End -->
                    </div>

                    <!-- Header Cart Start -->
                    <div class="header--cart-btn float--right">
                        <a href="cart.html" class="btn-link"><i class="fa fa-shopping-cart"></i><span>3</span></a>
                    </div>
                    <!-- Header Cart End -->

                    <div id="headerNav" class="navbar-collapse collapse float--right">
                        <!-- Header Nav Links Start -->
                        <ul class="header--nav-links nav">
                            <li class="active"><a href="index.html">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hosting</a>

                                <ul class="dropdown-menu">
                                    <li><a href="shared-hosting.html">Shared Hosting</a></li>
                                    <li><a href="reseller-hosting.html">Reseller Hosting</a></li>
                                    <li><a href="vps-hosting.html">VPS Hosting</a></li>
                                    <li><a href="dedicated-hosting.html">Dedicated Hosting</a></li>
                                </ul>
                            </li>
                            <li><a href="domain.html">Domain</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>

                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About</a>

                                        <ul class="dropdown-menu">
                                            <li><a href="about.html">About CloudSky</a></li>
                                            <li><a href="datacenter.html">About Datacenter</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">SSL Certificates</a>

                                        <ul class="dropdown-menu">
                                            <li><a href="ssl-certificates.html">SSL Certificates</a></li>
                                            <li><a href="ssl-certificate-details.html">SSL Certificate Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a>

                                        <ul class="dropdown-menu">
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="service-details.html">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="team.html">Team</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio</a>

                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio.html">Portfolio</a></li>
                                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="clients.html">Our Clients</a></li>
                                    <li><a href="affiliate-marketing.html">Affiliate Marketing</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages</a>

                                        <ul class="dropdown-menu">
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop</a>

                                <ul class="dropdown-menu">
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="shop-details.html">Shop Details</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a>

                                <ul class="dropdown-menu">
                                    <li><a href="blog-sidebar-right.html">Blog Sidebar Right</a></li>
                                    <li><a href="blog-sidebar-left.html">Blog Sidebar Left</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                        <!-- Header Nav Links End -->
                    </div>
                </div>
            </nav>
            <!-- Header Navbar End -->
        </header>
        <!-- Header Section End -->

        <!-- Banner Section Start -->
        <section class="banner--section">
            <!-- Banner Slider Start -->
            <div class="banner--slider owl-carousel" data-owl-dots="true">
                <!-- Banner Item Start -->
                <div class="banner--item bg--overlay" data-bg-img="{{URL::asset('front')}}/img/banner-home-img/slider-bg-01.jpg">
                    <div class="vc--parent">
                        <div class="vc--child">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <!-- Banner Content Start -->
                                        <div class="banner--content text-center pt--60 pb--80">
                                            <div class="title text-uppercase">
                                                <h1 class="h1">Website</h1>
                                                <h2 class="h1"><strong>Performance</strong></h2>
                                            </div>

                                            <div class="desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                            </div>

                                            <div class="action">
                                                <a href="#" class="btn btn-lg btn-default">Read More<i class="ml--8 fa fa-check-circle"></i></a>
                                                <a href="#" class="btn btn-lg btn-primary">Our Plans<i class="ml--8 fa fa-check-circle"></i></a>
                                            </div>
                                        </div>
                                        <!-- Banner Content End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Item End -->

                <!-- Banner Item Start -->
                <div class="banner--item bg--overlay" data-bg-img="{{URL::asset('front')}}/img/banner-home-img/slider-bg-02.jpg">
                    <div class="vc--parent">
                        <div class="vc--child">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <!-- Banner Content Start -->
                                        <div class="banner--content text-center pt--60 pb--80">
                                            <div class="title text-uppercase">
                                                <h1 class="h1">Website</h1>
                                                <h2 class="h1"><strong>Performance</strong></h2>
                                            </div>

                                            <div class="desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                            </div>

                                            <div class="action">
                                                <a href="#" class="btn btn-lg btn-default">Read More<i class="ml--8 fa fa-check-circle"></i></a>
                                                <a href="#" class="btn btn-lg btn-primary">Our Plans<i class="ml--8 fa fa-check-circle"></i></a>
                                            </div>
                                        </div>
                                        <!-- Banner Content End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Item End -->

                <!-- Banner Item Start -->
                <div class="banner--item bg--overlay" data-bg-img="{{URL::asset('front')}}/img/banner-home-img/slider-bg-03.jpg">
                    <div class="vc--parent">
                        <div class="vc--child">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <!-- Banner Content Start -->
                                        <div class="banner--content text-center pt--60 pb--80">
                                            <div class="title text-uppercase">
                                                <h1 class="h1">Website</h1>
                                                <h2 class="h1"><strong>Performance</strong></h2>
                                            </div>

                                            <div class="desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                            </div>

                                            <div class="action">
                                                <a href="#" class="btn btn-lg btn-default">Read More<i class="ml--8 fa fa-check-circle"></i></a>
                                                <a href="#" class="btn btn-lg btn-primary">Our Plans<i class="ml--8 fa fa-check-circle"></i></a>
                                            </div>
                                        </div>
                                        <!-- Banner Content End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Item End -->
            </div>
            <!-- Banner Slider End -->
        </section>
        <!-- Banner Section End -->

        <!-- Domain Search Section Start -->
        <section class="domain-search--section pt--70 pb--70">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--30 text-center">
                    <h2 class="h1 text-uppercase">Search Your Perfect Domain Name Here</h2>

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <!-- Section Title End -->

                <!-- Domain Search Form Start -->
                <div class="domain-search--form">
                    <form action="http://billing.ywhmcs.com/domainchecker.php?systpl=CloudSky" method="post" data-form="validate">
                        <div class="row gutter--0">
                            <div class="col-md-6 col-md-offset-3">
                                <!-- Domain Search Form Group Start -->
                                <div class="input-group">
                                    <input type="text" name="domain" placeholder="Your Domain Name Here" class="form-control" required>

                                    <div class="input-group-addon">
                                        <select name="ext" class="btn-default active">
                                            <option value=".com" selected>.com</option>
                                            <option value=".net">.net</option>
                                            <option value=".org">.org</option>
                                        </select>

                                        <button type="submit" class="btn btn-default active">Search<i class="ml--8 fa fa-search"></i></button>
                                    </div>
                                </div>
                                <!-- Domain Search Form Group End -->

                                <!-- Domain Search Form Extras Start -->
                                <div class="extras">
                                    <ul class="nav">
                                        <li><span data-scroll-reveal="bottom">Instant Activation</span></li>
                                        <li><span data-scroll-reveal="bottom">Complete DNS Control</span></li>
                                        <li><span data-scroll-reveal="bottom">No Hidden Cost</span></li>
                                    </ul>
                                </div>
                                <!-- Domain Search Form Extras End -->
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Domain Search Form End -->
            </div>
        </section>
        <!-- Domain Search Section End -->

        <!-- Services Section Start -->
        <section class="services--section">
            <!-- Services Slider Start -->
            <div class="services--slider owl-carousel" data-owl-nav="true" data-owl-responsive='{"0": {"items": "1"}, "551": {"items": "2"}, "768": {"items": "3"}, "992": {"items": "3"}, "1200": {"items": "4"}}'>
                <!-- Services Item Start -->
                <div class="service--item style--1 p--80 bg--c-main text-center">
                    <div class="icon">
                        <img src="{{URL::asset('front')}}/img/services-img/icon-01.png" alt="">
                    </div>

                    <div class="title text-uppercase">
                        <h2 class="h4">Shared Hosting</h2>
                    </div>

                    <div class="desc">
                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incidunt  labore  dolore magna aliqua. Ut enim ad nostrud exeycitation.</p>
                    </div>

                    <div class="action">
                        <a href="service-details.html" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <!-- Services Item End -->

                <!-- Services Item Start -->
                <div class="service--item style--1 p--80 bg--c-main text-center">
                    <div class="icon">
                        <img src="{{URL::asset('front')}}/img/services-img/icon-02.png" alt="">
                    </div>

                    <div class="title text-uppercase">
                        <h2 class="h4">Reseller Hosting</h2>
                    </div>

                    <div class="desc">
                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incidunt  labore  dolore magna aliqua. Ut enim ad nostrud exeycitation.</p>
                    </div>

                    <div class="action">
                        <a href="service-details.html" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <!-- Services Item End -->

                <!-- Services Item Start -->
                <div class="service--item style--1 p--80 bg--c-main text-center">
                    <div class="icon">
                        <img src="{{URL::asset('front')}}/img/services-img/icon-03.png" alt="">
                    </div>

                    <div class="title text-uppercase">
                        <h2 class="h4">VPS Hosting</h2>
                    </div>

                    <div class="desc">
                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incidunt  labore  dolore magna aliqua. Ut enim ad nostrud exeycitation.</p>
                    </div>

                    <div class="action">
                        <a href="service-details.html" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <!-- Services Item End -->

                <!-- Services Item Start -->
                <div class="service--item style--1 p--80 bg--c-main text-center">
                    <div class="icon">
                        <img src="{{URL::asset('front')}}/img/services-img/icon-04.png" alt="">
                    </div>

                    <div class="title text-uppercase">
                        <h2 class="h4">Dedicated Hosting</h2>
                    </div>

                    <div class="desc">
                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incidunt  labore  dolore magna aliqua. Ut enim ad nostrud exeycitation.</p>
                    </div>

                    <div class="action">
                        <a href="service-details.html" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <!-- Services Item End -->

                <!-- Services Item Start -->
                <div class="service--item style--1 p--80 bg--c-main text-center">
                    <div class="icon">
                        <img src="{{URL::asset('front')}}/img/services-img/icon-05.png" alt="">
                    </div>

                    <div class="title text-uppercase">
                        <h2 class="h4">Cloud Hosting</h2>
                    </div>

                    <div class="desc">
                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incidunt  labore  dolore magna aliqua. Ut enim ad nostrud exeycitation.</p>
                    </div>

                    <div class="action">
                        <a href="service-details.html" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <!-- Services Item End -->
            </div>
            <!-- Services Slider End -->
        </section>
        <!-- Services Section End -->

        <!-- Pricing Section Start -->
        <section class="pricing--section pt--70 pb--80">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--50 text-center">
                    <h2 class="h1 text-uppercase">Our Pricing</h2>

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <!-- Section Title End -->

                <!-- Pricing Nav Start -->
                <div class="pricing--nav pb--50 text-center">
                    <ul class="nav">
                        <li class="active">
                            <a href="#pricingTab01" data-toggle="tab">
                                <img src="{{URL::asset('front')}}/img/pricing-img/nav-icon-01-normal.png" alt="" class="icon">
                                <img src="{{URL::asset('front')}}/img/pricing-img/nav-icon-01-hover.png" alt="" class="icon">

                                <span>Shared Hosting</span>
                            </a>
                        </li>
                        <li>
                            <a href="#pricingTab02" data-toggle="tab">
                                <img src="{{URL::asset('front')}}/img/pricing-img/nav-icon-02-normal.png" alt="" class="icon">
                                <img src="{{URL::asset('front')}}/img/pricing-img/nav-icon-02-hover.png" alt="" class="icon">
                                
                                <span>Reseller Hosting</span>
                            </a>
                        </li>
                        <li>
                            <a href="#pricingTab03" data-toggle="tab">
                                <img src="{{URL::asset('front')}}/img/pricing-img/nav-icon-03-normal.png" alt="" class="icon">
                                <img src="{{URL::asset('front')}}/img/pricing-img/nav-icon-03-hover.png" alt="" class="icon">
                                
                                <span>VPS Hosting</span>
                            </a>
                        </li>
                        <li>
                            <a href="#pricingTab04" data-toggle="tab">
                                <img src="{{URL::asset('front')}}/img/pricing-img/nav-icon-04-normal.png" alt="" class="icon">
                                <img src="{{URL::asset('front')}}/img/pricing-img/nav-icon-04-hover.png" alt="" class="icon">
                                
                                <span>Dedicated Hosting</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Pricing Nav End -->

                <!-- Tab Content Start -->
                <div class="tab-content">
                    <!-- Tab Pane Start -->
                    <div class="tab-pane fade in active" id="pricingTab01">
                        <!-- Pricing Slider Start -->
                        <div class="pricing--slider owl-carousel" data-owl-margin="30" data-owl-autoplay="false" data-owl-loop="false" data-owl-nav="true" data-owl-responsive='{"0": {"items": "1"}, "551": {"items": "2"}, "768": {"items": "3"}, "992": {"items": "3"}, "1200": {"items": "4"}}'>
                            <!-- Pricing Item Start -->
                            <div class="pricing--item pt--10">
                                <div class="title text-uppercase">
                                    <h3 class="h4">
                                        <span class="vc--parent">
                                            <span class="vc--child">Free</span>
                                        </span>
                                    </h3>
                                </div>

                                <div class="price">
                                    <p><small>$</small>0<small>/mo</small></p>
                                </div>

                                <div class="features">
                                    <ul class="nav">
                                        <li>24/7 Support</li>
                                        <li>5TB Bandwidth</li>
                                        <li>100GB Hosting Space</li>
                                        <li>16GB Memory</li>
                                        <li>100 Free Domain</li>
                                        <li>User Analytics</li>
                                    </ul>
                                </div>

                                <div class="action">
                                    <a href="#" class="btn btn-default">Select Plan<i class="ml--8 fa fa-check-circle"></i></a>
                                </div>
                            </div>
                            <!-- Pricing Item End -->

                            <!-- Pricing Item Start -->
                            <div class="pricing--item pt--10 active">
                                <div class="title text-uppercase">
                                    <h3 class="h4">
                                        <span class="vc--parent">
                                            <span class="vc--child">Basic</span>
                                        </span>
                                    </h3>
                                </div>

                                <div class="price">
                                    <p><small>$</small>32<small>/mo</small></p>
                                </div>

                                <div class="features">
                                    <ul class="nav">
                                        <li>24/7 Support</li>
                                        <li>5TB Bandwidth</li>
                                        <li>100GB Hosting Space</li>
                                        <li>16GB Memory</li>
                                        <li>100 Free Domain</li>
                                        <li>User Analytics</li>
                                    </ul>
                                </div>

                                <div class="action">
                                    <a href="#" class="btn btn-default">Select Plan<i class="ml--8 fa fa-check-circle"></i></a>
                                </div>
                            </div>
                            <!-- Pricing Item End -->

                            <!-- Pricing Item Start -->
                            <div class="pricing--item pt--10">
                                <div class="title text-uppercase">
                                    <h3 class="h4">
                                        <span class="vc--parent">
                                            <span class="vc--child">Popular</span>
                                        </span>
                                    </h3>
                                </div>

                                <div class="price">
                                    <p><small>$</small>69<small>/mo</small></p>
                                </div>

                                <div class="features">
                                    <ul class="nav">
                                        <li>24/7 Support</li>
                                        <li>5TB Bandwidth</li>
                                        <li>100GB Hosting Space</li>
                                        <li>16GB Memory</li>
                                        <li>100 Free Domain</li>
                                        <li>User Analytics</li>
                                    </ul>
                                </div>

                                <div class="action">
                                    <a href="#" class="btn btn-default">Select Plan<i class="ml--8 fa fa-check-circle"></i></a>
                                </div>
                            </div>
                            <!-- Pricing Item End -->

                            <!-- Pricing Item Start -->
                            <div class="pricing--item pt--10">
                                <div class="title text-uppercase">
                                    <h3 class="h4">
                                        <span class="vc--parent">
                                            <span class="vc--child">Gold</span>
                                        </span>
                                    </h3>
                                </div>

                                <div class="price">
                                    <p><small>$</small>99<small>/mo</small></p>
                                </div>

                                <div class="features">
                                    <ul class="nav">
                                        <li>24/7 Support</li>
                                        <li>5TB Bandwidth</li>
                                        <li>100GB Hosting Space</li>
                                        <li>16GB Memory</li>
                                        <li>100 Free Domain</li>
                                        <li>User Analytics</li>
                                    </ul>
                                </div>

                                <div class="action">
                                    <a href="#" class="btn btn-default">Select Plan<i class="ml--8 fa fa-check-circle"></i></a>
                                </div>
                            </div>
                            <!-- Pricing Item End -->

                            <!-- Pricing Item Start -->
                            <div class="pricing--item pt--10">
                                <div class="title text-uppercase">
                                    <h3 class="h4">
                                        <span class="vc--parent">
                                            <span class="vc--child">Business</span>
                                        </span>
                                    </h3>
                                </div>

                                <div class="price">
                                    <p><small>$</small>199<small>/mo</small></p>
                                </div>

                                <div class="features">
                                    <ul class="nav">
                                        <li>24/7 Support</li>
                                        <li>5TB Bandwidth</li>
                                        <li>100GB Hosting Space</li>
                                        <li>16GB Memory</li>
                                        <li>100 Free Domain</li>
                                        <li>User Analytics</li>
                                    </ul>
                                </div>

                                <div class="action">
                                    <a href="#" class="btn btn-default">Select Plan<i class="ml--8 fa fa-check-circle"></i></a>
                                </div>
                            </div>
                            <!-- Pricing Item End -->
                        </div>
                        <!-- Pricing Slider End -->
                    </div>
                    <!-- Tab Pane End -->

                    <!-- Tab Pane Start -->
                    <div class="tab-pane fade" id="pricingTab02">
                        <!-- Pricing Slider Start -->
                        <div class="pricing--slider pt--50 owl-carousel" data-owl-margin="30" data-owl-autoplay="false" data-owl-loop="false" data-owl-nav="true" data-owl-responsive='{"0": {"items": "1"}, "551": {"items": "2"}, "768": {"items": "3"}, "992": {"items": "3"}, "1200": {"items": "4"}}'>
                            <!-- Pricing Item Start -->
                            <div class="pricing--item pt--10">
                                <div class="title text-uppercase">
                                    <h3 class="h4">
                                        <span class="vc--parent">
                                            <span class="vc--child">Free</span>
                                        </span>
                                    </h3>
                                </div>

                                <div class="price">
                                    <p><small>$</small>0<small>/mo</small></p>
                                </div>

                                <div class="features">
                                    <ul class="nav">
                                        <li>24/7 Support</li>
                                        <li>5TB Bandwidth</li>
                                        <li>100GB Hosting Space</li>
                                        <li>16GB Memory</li>
                                        <li>100 Free Domain</li>
                                        <li>User Analytics</li>
                                    </ul>
                                </div>

                                <div class="action">
                                    <a href="#" class="btn btn-default">Select Plan<i class="ml--8 fa fa-check-circle"></i></a>
                                </div>
                            </div>
                            <!-- Pricing Item End -->

                            <!-- Pricing Item Start -->
                            <div class="pricing--item pt--10 active">
                                <div class="title text-uppercase">
                                    <h3 class="h4">
                                        <span class="vc--parent">
                                            <span class="vc--child">Basic</span>
                                        </span>
                                    </h3>
                                </div>

                                <div class="price">
                                    <p><small>$</small>32<small>/mo</small></p>
                                </div>

                                <div class="features">
                                    <ul class="nav">
                                        <li>24/7 Support</li>
                                        <li>5TB Bandwidth</li>
                                        <li>100GB Hosting Space</li>
                                        <li>16GB Memory</li>
                                        <li>100 Free Domain</li>
                                        <li>User Analytics</li>
                                    </ul>
                                </div>

                                <div class="action">
                                    <a href="#" class="btn btn-default">Select Plan<i class="ml--8 fa fa-check-circle"></i></a>
                                </div>
                            </div>
                            <!-- Pricing Item End -->

                            <!-- Pricing Item Start -->
                            <div class="pricing--item pt--10">
                                <div class="title text-uppercase">
                                    <h3 class="h4">
                                        <span class="vc--parent">
                                            <span class="vc--child">Popular</span>
                                        </span>
                                    </h3>
                                </div>

                                <div class="price">
                                    <p><small>$</small>69<small>/mo</small></p>
                                </div>

                                <div class="features">
                                    <ul class="nav">
                                        <li>24/7 Support</li>
                                        <li>5TB Bandwidth</li>
                                        <li>100GB Hosting Space</li>
                                        <li>16GB Memory</li>
                                        <li>100 Free Domain</li>
                                        <li>User Analytics</li>
                                    </ul>
                                </div>

                                <div class="action">
                                    <a href="#" class="btn btn-default">Select Plan<i class="ml--8 fa fa-check-circle"></i></a>
                                </div>
                            </div>
                            <!-- Pricing Item End -->

                            <!-- Pricing Item Start -->
                            <div class="pricing--item pt--10">
                                <div class="title text-uppercase">
                                    <h3 class="h4">
                                        <span class="vc--parent">
                                            <span class="vc--child">Gold</span>
                                        </span>
                                    </h3>
                                </div>

                                <div class="price">
                                    <p><small>$</small>99<small>/mo</small></p>
                                </div>

                                <div class="features">
                                    <ul class="nav">
                                        <li>24/7 Support</li>
                                        <li>5TB Bandwidth</li>
                                        <li>100GB Hosting Space</li>
                                        <li>16GB Memory</li>
                                        <li>100 Free Domain</li>
                                        <li>User Analytics</li>
                                    </ul>
                                </div>

                                <div class="action">
                                    <a href="#" class="btn btn-default">Select Plan<i class="ml--8 fa fa-check-circle"></i></a>
                                </div>
                            </div>
                            <!-- Pricing Item End -->

                            <!-- Pricing Item Start -->
                            <div class="pricing--item pt--10">
                                <div class="title text-uppercase">
                                    <h3 class="h4">
                                        <span class="vc--parent">
                                            <span class="vc--child">Business</span>
                                        </span>
                                    </h3>
                                </div>

                                <div class="price">
                                    <p><small>$</small>199<small>/mo</small></p>
                                </div>

                                <div class="features">
                                    <ul class="nav">
                                        <li>24/7 Support</li>
                                        <li>5TB Bandwidth</li>
                                        <li>100GB Hosting Space</li>
                                        <li>16GB Memory</li>
                                        <li>100 Free Domain</li>
                                        <li>User Analytics</li>
                                    </ul>
                                </div>

                                <div class="action">
                                    <a href="#" class="btn btn-default">Select Plan<i class="ml--8 fa fa-check-circle"></i></a>
                                </div>
                            </div>
                            <!-- Pricing Item End -->
                        </div>
                        <!-- Pricing Slider End -->
                    </div>
                    <!-- Tab Pane End -->

                    <!-- Tab Pane Start -->
                    <div class="tab-pane fade" id="pricingTab03">
                        <!-- Pricing Slider Start -->
                        <div class="pricing--slider pt--50 owl-carousel" data-owl-margin="30" data-owl-autoplay="false" data-owl-loop="false" data-owl-nav="true" data-owl-responsive='{"0": {"items": "1"}, "551": {"items": "2"}, "768": {"items": "3"}, "992": {"items": "3"}, "1200": {"items": "4"}}'>
                            <!-- Pricing Item Start -->
                            <div class="pricing--item pt--10">
                                <div class="title text-uppercase">
                                    <h3 class="h4">
                                        <span class="vc--parent">
                                            <span class="vc--child">Free</span>
                                        </span>
                                    </h3>
                                </div>

                                <div class="price">
                                    <p><small>$</small>0<small>/mo</small></p>
                                </div>

                                <div class="features">
                                    <ul class="nav">
                                        <li>24/7 Support</li>
                                        <li>5TB Bandwidth</li>
                                        <li>100GB Hosting Space</li>
                                        <li>16GB Memory</li>
                                        <li>100 Free Domain</li>
                                        <li>User Analytics</li>
                                    </ul>
                                </div>

                                <div class="action">
                                    <a href="#" class="btn btn-default">Select Plan<i class="ml--8 fa fa-check-circle"></i></a>
                                </div>
                            </div>
                            <!-- Pricing Item End -->

                            <!-- Pricing Item Start -->
                            <div class="pricing--item pt--10 active">
                                <div class="title text-uppercase">
                                    <h3 class="h4">
                                        <span class="vc--parent">
                                            <span class="vc--child">Basic</span>
                                        </span>
                                    </h3>
                                </div>

                                <div class="price">
                                    <p><small>$</small>32<small>/mo</small></p>
                                </div>

                                <div class="features">
                                    <ul class="nav">
                                        <li>24/7 Support</li>
                                        <li>5TB Bandwidth</li>
                                        <li>100GB Hosting Space</li>
                                        <li>16GB Memory</li>
                                        <li>100 Free Domain</li>
                                        <li>User Analytics</li>
                                    </ul>
                                </div>

                                <div class="action">
                                    <a href="#" class="btn btn-default">Select Plan<i class="ml--8 fa fa-check-circle"></i></a>
                                </div>
                            </div>
                            <!-- Pricing Item End -->

                            <!-- Pricing Item Start -->
                            <div class="pricing--item pt--10">
                                <div class="title text-uppercase">
                                    <h3 class="h4">
                                        <span class="vc--parent">
                                            <span class="vc--child">Popular</span>
                                        </span>
                                    </h3>
                                </div>

                                <div class="price">
                                    <p><small>$</small>69<small>/mo</small></p>
                                </div>

                                <div class="features">
                                    <ul class="nav">
                                        <li>24/7 Support</li>
                                        <li>5TB Bandwidth</li>
                                        <li>100GB Hosting Space</li>
                                        <li>16GB Memory</li>
                                        <li>100 Free Domain</li>
                                        <li>User Analytics</li>
                                    </ul>
                                </div>

                                <div class="action">
                                    <a href="#" class="btn btn-default">Select Plan<i class="ml--8 fa fa-check-circle"></i></a>
                                </div>
                            </div>
                            <!-- Pricing Item End -->

                            <!-- Pricing Item Start -->
                            <div class="pricing--item pt--10">
                                <div class="title text-uppercase">
                                    <h3 class="h4">
                                        <span class="vc--parent">
                                            <span class="vc--child">Gold</span>
                                        </span>
                                    </h3>
                                </div>

                                <div class="price">
                                    <p><small>$</small>99<small>/mo</small></p>
                                </div>

                                <div class="features">
                                    <ul class="nav">
                                        <li>24/7 Support</li>
                                        <li>5TB Bandwidth</li>
                                        <li>100GB Hosting Space</li>
                                        <li>16GB Memory</li>
                                        <li>100 Free Domain</li>
                                        <li>User Analytics</li>
                                    </ul>
                                </div>

                                <div class="action">
                                    <a href="#" class="btn btn-default">Select Plan<i class="ml--8 fa fa-check-circle"></i></a>
                                </div>
                            </div>
                            <!-- Pricing Item End -->

                            <!-- Pricing Item Start -->
                            <div class="pricing--item pt--10">
                                <div class="title text-uppercase">
                                    <h3 class="h4">
                                        <span class="vc--parent">
                                            <span class="vc--child">Business</span>
                                        </span>
                                    </h3>
                                </div>

                                <div class="price">
                                    <p><small>$</small>199<small>/mo</small></p>
                                </div>

                                <div class="features">
                                    <ul class="nav">
                                        <li>24/7 Support</li>
                                        <li>5TB Bandwidth</li>
                                        <li>100GB Hosting Space</li>
                                        <li>16GB Memory</li>
                                        <li>100 Free Domain</li>
                                        <li>User Analytics</li>
                                    </ul>
                                </div>

                                <div class="action">
                                    <a href="#" class="btn btn-default">Select Plan<i class="ml--8 fa fa-check-circle"></i></a>
                                </div>
                            </div>
                            <!-- Pricing Item End -->
                        </div>
                        <!-- Pricing Slider End -->
                    </div>
                    <!-- Tab Pane End -->

                    <!-- Tab Pane Start -->
                    <div class="tab-pane fade" id="pricingTab04">
                        <!-- Pricing Slider Start -->
                        <div class="pricing--slider pt--50 owl-carousel" data-owl-margin="30" data-owl-autoplay="false" data-owl-loop="false" data-owl-nav="true" data-owl-responsive='{"0": {"items": "1"}, "551": {"items": "2"}, "768": {"items": "3"}, "992": {"items": "3"}, "1200": {"items": "4"}}'>
                            <!-- Pricing Item Start -->
                            <div class="pricing--item pt--10">
                                <div class="title text-uppercase">
                                    <h3 class="h4">
                                        <span class="vc--parent">
                                            <span class="vc--child">Free</span>
                                        </span>
                                    </h3>
                                </div>

                                <div class="price">
                                    <p><small>$</small>0<small>/mo</small></p>
                                </div>

                                <div class="features">
                                    <ul class="nav">
                                        <li>24/7 Support</li>
                                        <li>5TB Bandwidth</li>
                                        <li>100GB Hosting Space</li>
                                        <li>16GB Memory</li>
                                        <li>100 Free Domain</li>
                                        <li>User Analytics</li>
                                    </ul>
                                </div>

                                <div class="action">
                                    <a href="#" class="btn btn-default">Select Plan<i class="ml--8 fa fa-check-circle"></i></a>
                                </div>
                            </div>
                            <!-- Pricing Item End -->

                            <!-- Pricing Item Start -->
                            <div class="pricing--item pt--10 active">
                                <div class="title text-uppercase">
                                    <h3 class="h4">
                                        <span class="vc--parent">
                                            <span class="vc--child">Basic</span>
                                        </span>
                                    </h3>
                                </div>

                                <div class="price">
                                    <p><small>$</small>32<small>/mo</small></p>
                                </div>

                                <div class="features">
                                    <ul class="nav">
                                        <li>24/7 Support</li>
                                        <li>5TB Bandwidth</li>
                                        <li>100GB Hosting Space</li>
                                        <li>16GB Memory</li>
                                        <li>100 Free Domain</li>
                                        <li>User Analytics</li>
                                    </ul>
                                </div>

                                <div class="action">
                                    <a href="#" class="btn btn-default">Select Plan<i class="ml--8 fa fa-check-circle"></i></a>
                                </div>
                            </div>
                            <!-- Pricing Item End -->

                            <!-- Pricing Item Start -->
                            <div class="pricing--item pt--10">
                                <div class="title text-uppercase">
                                    <h3 class="h4">
                                        <span class="vc--parent">
                                            <span class="vc--child">Popular</span>
                                        </span>
                                    </h3>
                                </div>

                                <div class="price">
                                    <p><small>$</small>69<small>/mo</small></p>
                                </div>

                                <div class="features">
                                    <ul class="nav">
                                        <li>24/7 Support</li>
                                        <li>5TB Bandwidth</li>
                                        <li>100GB Hosting Space</li>
                                        <li>16GB Memory</li>
                                        <li>100 Free Domain</li>
                                        <li>User Analytics</li>
                                    </ul>
                                </div>

                                <div class="action">
                                    <a href="#" class="btn btn-default">Select Plan<i class="ml--8 fa fa-check-circle"></i></a>
                                </div>
                            </div>
                            <!-- Pricing Item End -->

                            <!-- Pricing Item Start -->
                            <div class="pricing--item pt--10">
                                <div class="title text-uppercase">
                                    <h3 class="h4">
                                        <span class="vc--parent">
                                            <span class="vc--child">Gold</span>
                                        </span>
                                    </h3>
                                </div>

                                <div class="price">
                                    <p><small>$</small>99<small>/mo</small></p>
                                </div>

                                <div class="features">
                                    <ul class="nav">
                                        <li>24/7 Support</li>
                                        <li>5TB Bandwidth</li>
                                        <li>100GB Hosting Space</li>
                                        <li>16GB Memory</li>
                                        <li>100 Free Domain</li>
                                        <li>User Analytics</li>
                                    </ul>
                                </div>

                                <div class="action">
                                    <a href="#" class="btn btn-default">Select Plan<i class="ml--8 fa fa-check-circle"></i></a>
                                </div>
                            </div>
                            <!-- Pricing Item End -->

                            <!-- Pricing Item Start -->
                            <div class="pricing--item pt--10">
                                <div class="title text-uppercase">
                                    <h3 class="h4">
                                        <span class="vc--parent">
                                            <span class="vc--child">Business</span>
                                        </span>
                                    </h3>
                                </div>

                                <div class="price">
                                    <p><small>$</small>199<small>/mo</small></p>
                                </div>

                                <div class="features">
                                    <ul class="nav">
                                        <li>24/7 Support</li>
                                        <li>5TB Bandwidth</li>
                                        <li>100GB Hosting Space</li>
                                        <li>16GB Memory</li>
                                        <li>100 Free Domain</li>
                                        <li>User Analytics</li>
                                    </ul>
                                </div>

                                <div class="action">
                                    <a href="#" class="btn btn-default">Select Plan<i class="ml--8 fa fa-check-circle"></i></a>
                                </div>
                            </div>
                            <!-- Pricing Item End -->
                        </div>
                        <!-- Pricing Slider End -->
                    </div>
                    <!-- Tab Pane End -->
                </div>
                <!-- Tab Content End -->
            </div>
        </section>
        <!-- Pricing Section End -->

        <!-- Features Section Start -->
        <section class="features--section pt--70 pb--50 bg--overlay" data-bg-img="{{URL::asset('front')}}/img/features-img/bg.jpg">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--50 text-center">
                    <h2 class="h1 text-uppercase">Our Featurs Makes Us Best</h2>

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <!-- Section Title End -->

                <div class="row AdjustRow" data-scroll-reveal="group">
                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--30">
                        <!-- Feature Item Start -->
                        <div class="feature--item style--1 text-center">
                            <div class="img">
                                <img src="{{URL::asset('front')}}/img/features-img/icon-01-normal.png" alt="">
                                <img src="{{URL::asset('front')}}/img/features-img/icon-01-hover.png" alt="">
                            </div>

                            <div class="title">
                                <h3 class="h4">Multiple Cloud Infrastructure</h3>
                            </div>

                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit  consectetur sed do eiusmod tempor.</p>
                            </div>
                        </div>
                        <!-- Feature Item End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--30">
                        <!-- Feature Item Start -->
                        <div class="feature--item style--1 text-center">
                            <div class="img">
                                <img src="{{URL::asset('front')}}/img/features-img/icon-02-normal.png" alt="">
                                <img src="{{URL::asset('front')}}/img/features-img/icon-02-hover.png" alt="">
                            </div>

                            <div class="title">
                                <h3 class="h4">Multiple Datacenters</h3>
                            </div>

                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit  consectetur sed do eiusmod tempor.</p>
                            </div>
                        </div>
                        <!-- Feature Item End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--30">
                        <!-- Feature Item Start -->
                        <div class="feature--item style--1 text-center">
                            <div class="img">
                                <img src="{{URL::asset('front')}}/img/features-img/icon-03-normal.png" alt="">
                                <img src="{{URL::asset('front')}}/img/features-img/icon-03-hover.png" alt="">
                            </div>

                            <div class="title">
                                <h3 class="h4">Unlimited Database</h3>
                            </div>

                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit  consectetur sed do eiusmod tempor.</p>
                            </div>
                        </div>
                        <!-- Feature Item End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--30">
                        <!-- Feature Item Start -->
                        <div class="feature--item style--1 text-center">
                            <div class="img">
                                <img src="{{URL::asset('front')}}/img/features-img/icon-04-normal.png" alt="">
                                <img src="{{URL::asset('front')}}/img/features-img/icon-04-hover.png" alt="">
                            </div>

                            <div class="title">
                                <h3 class="h4">99.99% Uptime</h3>
                            </div>

                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit  consectetur sed do eiusmod tempor.</p>
                            </div>
                        </div>
                        <!-- Feature Item End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--30">
                        <!-- Feature Item Start -->
                        <div class="feature--item style--1 text-center">
                            <div class="img">
                                <img src="{{URL::asset('front')}}/img/features-img/icon-05-normal.png" alt="">
                                <img src="{{URL::asset('front')}}/img/features-img/icon-05-hover.png" alt="">
                            </div>

                            <div class="title">
                                <h3 class="h4">24/7 Support</h3>
                            </div>

                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit  consectetur sed do eiusmod tempor.</p>
                            </div>
                        </div>
                        <!-- Feature Item End -->
                    </div>

                    <div class="col-md-4 col-xs-6 col-xxs-12 pb--30">
                        <!-- Feature Item Start -->
                        <div class="feature--item style--1 text-center">
                            <div class="img">
                                <img src="{{URL::asset('front')}}/img/features-img/icon-06-normal.png" alt="">
                                <img src="{{URL::asset('front')}}/img/features-img/icon-06-hover.png" alt="">
                            </div>

                            <div class="title">
                                <h3 class="h4">High Security</h3>
                            </div>

                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit  consectetur sed do eiusmod tempor.</p>
                            </div>
                        </div>
                        <!-- Feature Item End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Features Section End -->

        <!-- Testimonial Section Start -->
        <section class="testimonials--section pt--70 pb--70">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--50 text-center">
                    <h2 class="h1 text-uppercase">Customer's Feedback</h2>

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <!-- Section Title End -->

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <!-- Testimonial Slider Start -->
                        <div class="testimonial--slider owl-carousel" data-owl-dots="true" data-owl-margin="30" data-owl-speed="2000">
                            <!-- Testimonial Item Start -->
                            <div class="testimonial--item">
                                <div class="content text-center">
                                    <div class="img">
                                        <img src="{{URL::asset('front')}}/img/testimonial-img/client-01.jpg" alt="">
                                    </div>

                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuovod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  quis nostrud exercitation.</p>
                                    </blockquote>
                                </div>

                                <div class="name">
                                    <p>Maria Doe</p>
                                </div>
                            </div>
                            <!-- Testimonial Item End -->

                            <!-- Testimonial Item Start -->
                            <div class="testimonial--item">
                                <div class="content text-center">
                                    <div class="img">
                                        <img src="{{URL::asset('front')}}/img/testimonial-img/client-02.jpg" alt="">
                                    </div>

                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuovod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  quis nostrud exercitation.</p>
                                    </blockquote>
                                </div>

                                <div class="name">
                                    <p>Alan Palmer</p>
                                </div>
                            </div>
                            <!-- Testimonial Item End -->

                            <!-- Testimonial Item Start -->
                            <div class="testimonial--item">
                                <div class="content text-center">
                                    <div class="img">
                                        <img src="{{URL::asset('front')}}/img/testimonial-img/client-03.jpg" alt="">
                                    </div>

                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuovod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  quis nostrud exercitation.</p>
                                    </blockquote>
                                </div>

                                <div class="name">
                                    <p>Nicole Morrison</p>
                                </div>
                            </div>
                            <!-- Testimonial Item End -->
                        </div>
                        <!-- Testimonial Slider Start -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Section End -->

        <!-- Counter Section Start -->
        <section class="counter--section pt--80 pb--50 bg--overlay" data-bg-img="{{URL::asset('front')}}/img/counter-img/bg.jpg">
            <div class="container">
                <div class="row AdjustRow">
                    <div class="col-md-3 col-xs-6 col-xss-12 pb--30">
                        <!-- Counter Item Start -->
                        <div class="counter--item style--1">
                            <div class="img">
                                <img src="{{URL::asset('front')}}/img/counter-img/icon-01.png" alt="">
                            </div>

                            <div class="title">
                                <h2 class="h4">Happy Costomers</h2>
                            </div>

                            <div class="count">
                                <h3 class="h1"><span data-trigger="counterUp">302</span>+</h3>
                            </div>
                        </div>
                        <!-- Counter Item End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xss-12 pb--30">
                        <!-- Counter Item Start -->
                        <div class="counter--item style--1">
                            <div class="img">
                                <img src="{{URL::asset('front')}}/img/counter-img/icon-02.png" alt="">
                            </div>

                            <div class="title">
                                <h2 class="h4">Hosting Servers Sold</h2>
                            </div>

                            <div class="count">
                                <h3 class="h1"><span data-trigger="counterUp">502</span>+</h3>
                            </div>
                        </div>
                        <!-- Counter Item End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xss-12 pb--30">
                        <!-- Counter Item Start -->
                        <div class="counter--item style--1">
                            <div class="img">
                                <img src="{{URL::asset('front')}}/img/counter-img/icon-03.png" alt="">
                            </div>

                            <div class="title">
                                <h2 class="h4">Our Data Center</h2>
                            </div>

                            <div class="count">
                                <h3 class="h1"><span data-trigger="counterUp">150</span>+</h3>
                            </div>
                        </div>
                        <!-- Counter Item End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xss-12 pb--30">
                        <!-- Counter Item Start -->
                        <div class="counter--item style--1">
                            <div class="img">
                                <img src="{{URL::asset('front')}}/img/counter-img/icon-04.png" alt="">
                            </div>

                            <div class="title">
                                <h2 class="h4">Team Members</h2>
                            </div>

                            <div class="count">
                                <h3 class="h1"><span data-trigger="counterUp">690</span>+</h3>
                            </div>
                        </div>
                        <!-- Counter Item End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Counter Section End -->

        <!-- FAQ Section Start -->
        <section class="faq--section pt--80 pb--20">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--50 text-center">
                    <h2 class="h1 text-uppercase">Here are some common questions about CloudSky</h2>

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <!-- Section Title End -->

                <div class="row row--vc-md">
                    <div class="col-md-6 pb--60">
                        <!-- FAQ Image Start -->
                        <div class="faq--img" data-scroll-reveal="left">
                            <img src="{{URL::asset('front')}}/img/faq-img/01.jpg" alt="" class="center-block">
                        </div>
                        <!-- FAQ Image End -->
                    </div>

                    <div class="col-md-6 pb--60">
                        <!-- FAQ Items Start -->
                        <div class="faq--items panel-group" id="faqItems01" data-scroll-reveal="right">
                            <!-- FAQ Item End -->
                            <div class="faq--item panel">
                                <div class="panel-heading">
                                    <h3 class="h4">
                                        <a href="#faqItems01_1" data-toggle="collapse" data-parent="#faqItems01">
                                            <i class="fa fa-cloud"></i>
                                            <span>What is bandwidth and how much do you need?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItems01_1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item End -->
                            <div class="faq--item panel">
                                <div class="panel-heading">
                                    <h3 class="h4">
                                        <a href="#faqItems01_2" class="collapsed" data-toggle="collapse" data-parent="#faqItems01">
                                            <i class="fa fa-database"></i>
                                            <span>What is SSL security?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItems01_2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item End -->
                            <div class="faq--item panel">
                                <div class="panel-heading">
                                    <h3 class="h4">
                                        <a href="#faqItems01_3" class="collapsed" data-toggle="collapse" data-parent="#faqItems01">
                                            <i class="fa fa-server"></i>
                                            <span>What is shared web hosting?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItems01_3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item End -->
                            <div class="faq--item panel">
                                <div class="panel-heading">
                                    <h3 class="h4">
                                        <a href="#faqItems01_4" class="collapsed" data-toggle="collapse" data-parent="#faqItems01">
                                            <i class="fa fa-lock"></i>
                                            <span>Is my website protected from hackers?</span>
                                        </a>
                                    </h3>
                                </div>

                                <div id="faqItems01_4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Items End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ Section End -->

        <!-- Call To Action Start -->
        <section class="call-to-action pt--50 pb--50 bg--c-main">
            <div class="container">
                <!-- Call To Action Content Start -->
                <div class="cta--content text-center">
                    <div class="title">
                        <h2 class="h3">Choose the best Managed Cloud Hosting experience for your business!</h2>
                    </div>

                    <div class="action">
                        <a href="#" class="btn btn-lg btn-primary">Get Started Now<i class="ml--8 fa fa-check-circle"></i></a>
                    </div>

                    <div class="note text-uppercase">
                        <p><small>Vorem ipsum dolor sit amet</small></p>
                    </div>
                </div>
                <!-- Call To Action Content End -->
            </div>
        </section>
        <!-- Call To Action End -->

        <!-- Blog Section Start -->
        <section class="blog--section pt--80 pb--50 bg--c-lighterblue">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--50 text-center">
                    <h2 class="h1 text-uppercase">Latest Blog Posts</h2>

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <!-- Section Title End -->

                <div class="row AdjustRow">
                    <div class="col-md-4 col-sm-12 pb--30">
                        <!-- Post Item Start -->
                        <div class="post--item">
                            <div class="post--img">
                                <img src="{{URL::asset('front')}}/img/blog-img/post-item-01.jpg" alt="">

                                <a href="#" class="date"><i class="mr--8 fa fa-calendar-o"></i>June 01, 2017</a>
                            </div>

                            <div class="post--inner">
                                <ul class="nav meta">
                                    <li><a href="#"><i class="fa fa-heart-o"></i>23</a></li>
                                    <li><a href="#"><i class="fa fa-comments-o"></i>13</a></li>
                                </ul>

                                <div class="title">
                                    <h2 class="h4"><a href="blog-details.html" class="btn-link">Lorem ipsum dolor</a></h2>
                                </div>

                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>

                                <div class="action text-right">
                                    <a href="blog-details.html" class="btn btn-default">Read More<i class="ml--5 fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Post Item End -->
                    </div>

                    <div class="col-md-4 col-sm-12 pb--30">
                        <!-- Post Item Start -->
                        <div class="post--item">
                            <div class="post--img">
                                <img src="{{URL::asset('front')}}/img/blog-img/post-item-02.jpg" alt="">

                                <a href="#" class="date"><i class="mr--8 fa fa-calendar-o"></i>June 01, 2017</a>
                            </div>

                            <div class="post--inner">
                                <ul class="nav meta">
                                    <li><a href="#"><i class="fa fa-heart-o"></i>23</a></li>
                                    <li><a href="#"><i class="fa fa-comments-o"></i>13</a></li>
                                </ul>

                                <div class="title">
                                    <h2 class="h4"><a href="blog-details.html" class="btn-link">Lorem ipsum dolor sit amet</a></h2>
                                </div>

                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>

                                <div class="action text-right">
                                    <a href="blog-details.html" class="btn btn-default">Read More<i class="ml--5 fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Post Item End -->
                    </div>

                    <div class="col-md-4 col-sm-12 pb--30">
                        <!-- Post Item Start -->
                        <div class="post--item">
                            <div class="post--img">
                                <img src="{{URL::asset('front')}}/img/blog-img/post-item-03.jpg" alt="">

                                <a href="#" class="date"><i class="mr--8 fa fa-calendar-o"></i>June 01, 2017</a>
                            </div>

                            <div class="post--inner">
                                <ul class="nav meta">
                                    <li><a href="#"><i class="fa fa-heart-o"></i>23</a></li>
                                    <li><a href="#"><i class="fa fa-comments-o"></i>13</a></li>
                                </ul>

                                <div class="title">
                                    <h2 class="h4"><a href="blog-details.html" class="btn-link">Lorem ipsum dolor</a></h2>
                                </div>

                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>

                                <div class="action text-right">
                                    <a href="blog-details.html" class="btn btn-default">Read More<i class="ml--5 fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Post Item End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Section End -->

        <!-- Clients Section Start -->
        <section class="clients--section pt--70 pb--50">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--50 text-center">
                    <h2 class="h1 text-uppercase">We Work With</h2>

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <!-- Section Title End -->

                <div class="row" data-scroll-reveal="group">
                    <div class="col-md-3 col-xs-6 col-xss-12 pb--30">
                        <!-- Client Brand Start -->
                        <div class="client--brand">
                            <img src="{{URL::asset('front')}}/img/client-img/client-brand-01.png" alt="">
                        </div>
                        <!-- Client Brand End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xss-12 pb--30">
                        <!-- Client Brand Start -->
                        <div class="client--brand">
                            <img src="{{URL::asset('front')}}/img/client-img/client-brand-02.png" alt="">
                        </div>
                        <!-- Client Brand End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xss-12 pb--30">
                        <!-- Client Brand Start -->
                        <div class="client--brand">
                            <img src="{{URL::asset('front')}}/img/client-img/client-brand-03.png" alt="">
                        </div>
                        <!-- Client Brand End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xss-12 pb--30">
                        <!-- Client Brand Start -->
                        <div class="client--brand">
                            <img src="{{URL::asset('front')}}/img/client-img/client-brand-04.png" alt="">
                        </div>
                        <!-- Client Brand End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xss-12 pb--30">
                        <!-- Client Brand Start -->
                        <div class="client--brand">
                            <img src="{{URL::asset('front')}}/img/client-img/client-brand-05.png" alt="">
                        </div>
                        <!-- Client Brand End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xss-12 pb--30">
                        <!-- Client Brand Start -->
                        <div class="client--brand">
                            <img src="{{URL::asset('front')}}/img/client-img/client-brand-06.png" alt="">
                        </div>
                        <!-- Client Brand End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xss-12 pb--30">
                        <!-- Client Brand Start -->
                        <div class="client--brand">
                            <img src="{{URL::asset('front')}}/img/client-img/client-brand-07.png" alt="">
                        </div>
                        <!-- Client Brand End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xss-12 pb--30">
                        <!-- Client Brand Start -->
                        <div class="client--brand">
                            <img src="{{URL::asset('front')}}/img/client-img/client-brand-08.png" alt="">
                        </div>
                        <!-- Client Brand End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Clients Section End -->

        <!-- Footer Section Start -->
        <footer class="footer--section" data-bg-img="{{URL::asset('front')}}/img/footer-img/footer-widget-bg.jpg">
            <!-- Footer Widgets Start -->
            <div class="footer--widgets pt--90 pb--30">
                <div class="container">
                    <div class="row AdjustRow">
                        <div class="col-md-3 col-xs-6 col-xss-12 pb--60">
                            <!-- Widget Start -->
                            <div class="widget">
                                <!-- About Widget Start -->
                                <div class="about--widget">
                                    <div class="logo">
                                        <img src="{{URL::asset('front')}}/img/logo.png" alt="">
                                    </div>

                                    <address>
                                        <p>52 Shewrapara, Ibrahimpur, Mirpur 2653, Dhaka.</p>
                                    </address>

                                    <dl>
                                        <dt><i class="fa fa-envelope-o"></i>Email</dt>
                                        <dd>
                                            <p>
                                                <span>Sales:</span>
                                                <a href="mailto:sales@example.com" class="btn-link">sales@example.com</a>
                                            </p>
                                            <p>
                                                <span>Support:</span>
                                                <a href="mailto:support@example.com" class="btn-link">support@example.com</a>
                                            </p>
                                        </dd>
                                    </dl>

                                    <dl>
                                        <dt><i class="fa fa-phone"></i>Phone</dt>
                                        <dd>
                                            <p>
                                                <span>Sales:</span>
                                                <a href="tel:00123412345" class="btn-link">001 234 12345</a>
                                            </p>
                                            <p>
                                                <span>Support:</span>
                                                <a href="tel:00123412345" class="btn-link">001 234 12345</a>
                                            </p>
                                        </dd>
                                    </dl>
                                </div>
                                <!-- About Widget End -->
                            </div>
                            <!-- Widget End -->
                        </div>

                        <div class="col-md-3 col-xs-6 col-xss-12 pb--60">
                            <!-- Widget Start -->
                            <div class="widget">
                                <h2 class="h4 widget--title text-uppercase">Resources</h2>

                                <!-- Links Widget Start -->
                                <div class="links--widget">
                                    <ul class="nav">
                                        <li><a href="#">Hosting</a></li>
                                        <li><a href="#">Dedicated Hosting</a></li>
                                        <li><a href="#">VPS Hosting</a></li>
                                        <li><a href="#">Professional Services</a></li>
                                        <li><a href="#">Reseller Hosting</a></li>
                                        <li><a href="#">Cloud Hosting</a></li>
                                        <li><a href="#">System Status</a></li>
                                        <li><a href="#">Referral System</a></li>
                                        <li><a href="#">Forum</a></li>
                                    </ul>
                                </div>
                                <!-- Links Widget End -->
                            </div>
                            <!-- Widget End -->
                        </div>

                        <div class="col-md-3 col-xs-6 col-xss-12 pb--60">
                            <!-- Widget Start -->
                            <div class="widget">
                                <h2 class="h4 widget--title text-uppercase">Quick Links</h2>

                                <!-- Links Widget Start -->
                                <div class="links--widget">
                                    <ul class="nav">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Our Team</a></li>
                                        <li><a href="#">Cloud Hosting</a></li>
                                        <li><a href="#">Logos &amp; Banners</a></li>
                                        <li><a href="#">Cloud Hosting</a></li>
                                        <li><a href="#">Reseller Hosting</a></li>
                                        <li><a href="#">Shop</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                                <!-- Links Widget End -->
                            </div>
                            <!-- Widget End -->
                        </div>

                        <div class="col-md-3 col-xs-6 col-xss-12 pb--60">
                            <!-- Widget Start -->
                            <div class="widget">
                                <h2 class="h4 widget--title text-uppercase">NewsLetter</h2>

                                <!-- Newsletter Widget Start -->
                                <div class="newsletter--widget">
                                    <div class="desc">
                                        <p>Dolor sit amet consectetur adipisicing elit sed do tempor ut labore</p>
                                    </div>

                                    <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d" method="post" name="mc-embedded-subscribe-form" target="_blank" data-form="validate">
                                        <input type="text" name="EMAIL" placeholder="Email" class="form-control" required>

                                        <button type="submit" class="btn btn-primary">Subscribe</button>
                                    </form>
                                </div>
                                <!-- Newsletter Widget End -->
                            </div>
                            <!-- Widget End -->

                            <!-- Widget Start -->
                            <div class="widget">
                                <h2 class="h4 widget--title text-uppercase">Payment Methods</h2>

                                <!-- Image Widget Start -->
                                <div class="img---widget">
                                    <img src="{{URL::asset('front')}}/img/footer-img/payment-methods.png" alt="">
                                </div>
                                <!-- Image Widget End -->
                            </div>
                            <!-- Widget End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Widgets End -->

            <!-- Footer Copyright Start -->
            <div class="footer--copyright pt--30 pb--30">
                <div class="container">
                    <ul class="social nav">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>

                    <p class="copyright--text">Copyright 2018 &copy; <a href="#">CloudSky</a>. All Rights Reserved.</p>
                </div>
            </div>
            <!-- Footer Copyright End -->
        </footer>
        <!-- Footer Section End -->
    </div>
    <!-- Wrapper End -->

    <!-- Login Form Start -->
    <div id="loginForm" class="login--form modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>

                <div class="modal-body">
                    <div class="title">
                        <h2 class="h4">Login</h2>
                    </div>

                    <form action="http://billing.ywhmcs.com/dologin.php" data-form="validate">
                        <div class="form-group">
                            <input type="email" name="username" placeholder="Your Email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control" required>
                        </div>

                        <input type="hidden" name="systpl" value="CloudSky">

                        <p class="help-block"><a href="http://billing.ywhmcs.com/pwreset.php?systpl=CloudSky">Forgot Your Password?</a></p>

                        <button type="submit" class="btn btn-block btn-default text-uppercase">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Form End -->

    <!-- Cookie Notification Start -->
    <div id="cookieNotify" class="hidden">
        <div class="alert bg--c-darkgray--b">
            <button class="close" data-dismiss="alert">&times;</button>
            
            <div class="container">
                <button data-dismiss="alert" class="btn btn-sm btn-primary float--right">GOT IT!</button>
                <p>This is a sample cookie notification bar.</p>
            </div>
        </div>
    </div>
    <!-- Cookie Notification End -->

    <!-- Back To Top Button Start -->
    <div id="backToTop">
        <a href="#" class="btn btn-lg btn-default active"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- Back To Top Button End -->

    <!-- ==== jQuery Library ==== -->
    <script src="{{URL::asset('front')}}/js/jquery-3.2.1.min.js"></script>

    <!-- ==== jQuery UI ==== -->
    <script src="{{URL::asset('front')}}/js/jquery-ui.min.js"></script>

    <!-- ==== jQuery UI Touch Punch ==== -->
    <script src="{{URL::asset('front')}}/js/jquery.ui.touch-punch.min.js"></script>

    <!-- ==== Bootstrap Framework ==== -->
    <script src="{{URL::asset('front')}}/js/bootstrap.min.js"></script>

    <!-- ==== StickyJS Plugin ==== -->
    <script src="{{URL::asset('front')}}/js/jquery.sticky.min.js"></script>

    <!-- ==== Owl Carousel Plugin ==== -->
    <script src="{{URL::asset('front')}}/js/owl.carousel.min.js"></script>

    <!-- ==== Waypoints Plugin ==== -->
    <script src="{{URL::asset('front')}}/js/jquery.waypoints.min.js"></script>

    <!-- ==== Counter-Up Plugin ==== -->
    <script src="{{URL::asset('front')}}/js/jquery.counterup.min.js"></script>

    <!-- ==== Counter Down Plugin ==== -->
    <script src="{{URL::asset('front')}}/js/jquery.countdown.min.js"></script>

    <!-- ==== Validation Plugin ==== -->
    <script src="{{URL::asset('front')}}/js/jquery.validate.min.js"></script>

    <!-- ==== Isotope Plugin ==== -->
    <script src="{{URL::asset('front')}}/js/isotope.min.js"></script>

    <!-- ==== Zoom Plugin ==== -->
    <script src="{{URL::asset('front')}}/js/jquery.zoom.min.js"></script>

    <!-- ==== Bar Rating Plugin ==== -->
    <script src="{{URL::asset('front')}}/js/jquery.barrating.min.js"></script>

    <!-- ==== Scroll Reveal Plugin ==== -->
    <script src="{{URL::asset('front')}}/js/scrollreveal.min.js"></script>

    <!-- ==== RetinaJS Plugin ==== -->
    <script src="{{URL::asset('front')}}/js/retina.min.js"></script>

    <!-- ==== Google Map API ==== -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK9f7sXWmqQ1E-ufRXV3VpXOn_ifKsDuc"></script>

    <!-- ==== Main JavaScript ==== -->
    <script src="{{URL::asset('front')}}/js/main.js"></script>
</body>
</html>
