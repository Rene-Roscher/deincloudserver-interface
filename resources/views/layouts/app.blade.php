<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ env('APP_NAME', 'DeinCloudServer') }}</title>
    <meta name="description" content="Test">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Karla:400,700,700i%7CRubik:300,400,500,700" rel="stylesheet">

    <link rel="icon" type="image/png" href="favicon.ico">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.structure.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/rev-settings.css') }}">


    <!--For Plugins external css-->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
</head>
<body>

<!-- prelaoder -->
<div id="preloader">
    <div class="preloader-wrapper">
        <div class="spinner"></div>
    </div>
{{--    <div class="preloader-cancel-btn">--}}
{{--        <a href="#" class="btn btn-secondary prelaoder-btn"></a>--}}
{{--    </div>--}}
</div>	<!-- END prelaoder -->

<div class="header-transparent nav-sticky">
    <!-- topBar section -->
    <div class="xs-top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="xs-top-bar-info">
                        <li>
                            <a href="mailto:info@deincloudserver.de" target="_blank"><i class="icon icon-envelope1"></i>info@domain.com</a>
                        </li>
                        <li>
                            <a href="ts3server://ts.deincloudserver.de" target="_blank"><i class="fa fa-"></i>TeamSpeak Support</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="top-menu">
                        <li><a href="support.html"><i class="icon icon-hours-support"></i> Support</a></li>
                        <li><a href="login.html"><i class="icon icon-key2"></i> Anmelden</a></li>
                        <li><a href="signup.html"><i class="icon icon-users"></i> Registrieren</a></li>
                    </ul>
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </div>    <!-- End topBar section -->

    <!-- header section -->
    <header class="xs-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="xs-logo-wraper">
                        <a href="index.html" class="xs-logo">
                            <img src="{{ asset('images/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <nav class="xs-menus">
                        <div class="nav-header">
                            <a class="nav-brand" href="index.html"></a>
                            <div class="nav-toggle"></div>
                        </div>
                        <!-- menu list start -->
                        <div class="nav-menus-wrapper">
                            <ul class="nav-menu align-to-right">
{{--                                <li><a href="#">Pages</a>--}}
{{--                                    <div class="megamenu-panel xs-icon-menu">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-lg-4">--}}
{{--                                                <div class="single-menu-item">--}}
{{--                                                    <a href="about.html"><i class="icon icon-briefcase"></i>About</a>--}}
{{--                                                </div>--}}
{{--                                                <div class="single-menu-item">--}}
{{--                                                    <a href="affiliate.html"><i class="icon icon-line-chart"></i>Affiliate</a>--}}
{{--                                                </div>--}}
{{--                                                <div class="single-menu-item">--}}
{{--                                                    <a href="pricing.html"><i class="icon icon-agenda"></i>Pricing</a>--}}
{{--                                                </div>--}}
{{--                                                <div class="single-menu-item">--}}
{{--                                                    <a href="faq.html"><i class="icon icon-question-circle"></i>FAQ</a>--}}
{{--                                                </div>--}}
{{--                                                <div class="single-menu-item">--}}
{{--                                                    <a href="terms.html"><i class="icon icon-direction"></i>Terms</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-lg-4">--}}
{{--                                                <div class="single-menu-item">--}}
{{--                                                    <a href="who-is.html"><i class="icon icon-folder"></i>Whois</a>--}}
{{--                                                </div>--}}
{{--                                                <div class="single-menu-item">--}}
{{--                                                    <a href="support.html"><i class="icon icon-chat"></i>Support</a>--}}
{{--                                                </div>--}}
{{--                                                <div class="single-menu-item">--}}
{{--                                                    <a href="cart.html"><i class="icon icon-shopping-cart-1"></i>Cart</a>--}}
{{--                                                </div>--}}
{{--                                                <div class="single-menu-item">--}}
{{--                                                    <a href="checkout.html"><i class="icon icon-wallet"></i>Checkout</a>--}}
{{--                                                </div>--}}
{{--                                                <div class="single-menu-item">--}}
{{--                                                    <a href="privacy.html"><i class="icon icon-padlock-1"></i>Privacy</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-lg-4">--}}
{{--                                                <div class="single-menu-item">--}}
{{--                                                    <a href="login.html"><i class="icon icon-agenda-1"></i>Login</a>--}}
{{--                                                </div>--}}
{{--                                                <div class="single-menu-item">--}}
{{--                                                    <a href="signup.html"><i class="icon icon-users"></i> Signup</a>--}}
{{--                                                </div>--}}
{{--                                                <div class="single-menu-item">--}}
{{--                                                    <a href="forgot-password.html"><i class="icon icon-safebox"></i> Forgot password</a>--}}
{{--                                                </div>--}}
{{--                                                <div class="single-menu-item">--}}
{{--                                                    <a href="404.html"><i class="icon icon-sad"></i>404</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
                                <li><a href="#">Produkte</a>
                                    <div class="megamenu-panel xs-service-menu">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <a href="shared-hosting.html">
                                                    <div class="media">
                                                        <img src="{{ asset('images/menu-icon/icon-1.png') }}" alt="">
                                                        <div class="media-body">
                                                            <h4>RootServer</h4>
                                                            <p>Ideal für Projekte von großem Umfang.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="reseller-hosting.html">
                                                    <div class="media">
                                                        <img src="{{ asset('images/menu-icon/icon-2.png') }}" alt="">
                                                        <div class="media-body">
                                                            <h4>TeamSpeak3 Server</h4>
                                                            <p>Perfekt für Clans & Communities.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="vps-hosting.html">
                                                    <div class="media">
                                                        <img src="{{ asset('images/menu-icon/icon-3.png') }}" alt="">
                                                        <div class="media-body">
                                                            <h4>WebHosting</h4>
                                                            <p>Eine einfache Verwaltung dank Plesk.<p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a href="cloud-hosting.html">
                                                    <div class="media">
                                                        <img src="{{ asset('images/menu-icon/icon-4.png') }}" alt="">
                                                        <div class="media-body">
                                                            <h4>Music-Bot</h4>
                                                            <p>Music-Bots für Discord & TeamSpeak.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="dedicated-hosting.html">
                                                    <div class="media">
                                                        <img src="{{ asset('images/menu-icon/icon-5.png') }}" alt="">
                                                        <div class="media-body">
                                                            <h4>Dedizierte Server</h4>
                                                            <p>Eigene dedezierte Hardware für mehr Leistung.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="domain.html">
                                                    <div class="media">
                                                        <img src="{{ asset('images/menu-icon/icon-6.png') }}" alt="">
                                                        <div class="media-body">
                                                            <h4>Domain</h4>
                                                            <p>Hole dir noch heute deine eigene .DE Domain!</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#">GameServer</a>
                                    <div class="megamenu-panel xs-service-menu">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <a href="shared-hosting.html">
                                                    <div class="media">
                                                        <img src="{{ asset('images/menu-icon/icon-1.png') }}" alt="">
                                                        <div class="media-body">
                                                            <h4>Minecraft</h4>
                                                            <p>Einfache Verwaltung dank unseren selbstentwickelten Webinterface</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="reseller-hosting.html">
                                                    <div class="media">
                                                        <img src="{{ asset('images/menu-icon/icon-2.png') }}" alt="">
                                                        <div class="media-body">
                                                            <h4>TeamSpeak3 Server</h4>
                                                            <p>Perfekt für Clans & Communities.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="vps-hosting.html">
                                                    <div class="media">
                                                        <img src="{{ asset('images/menu-icon/icon-3.png') }}" alt="">
                                                        <div class="media-body">
                                                            <h4>WebHosting</h4>
                                                            <p>Eine einfache Verwaltung dank Plesk.<p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a href="cloud-hosting.html">
                                                    <div class="media">
                                                        <img src="{{ asset('images/menu-icon/icon-4.png') }}" alt="">
                                                        <div class="media-body">
                                                            <h4>Music-Bot</h4>
                                                            <p>Music-Bots für Discord & TeamSpeak.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="dedicated-hosting.html">
                                                    <div class="media">
                                                        <img src="{{ asset('images/menu-icon/icon-5.png') }}" alt="">
                                                        <div class="media-body">
                                                            <h4>Dedizierte Server</h4>
                                                            <p>Eigene dedezierte Hardware für mehr Leistung.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="domain.html">
                                                    <div class="media">
                                                        <img src="{{ asset('images/menu-icon/icon-6.png') }}" alt="">
                                                        <div class="media-body">
                                                            <h4>Domain</h4>
                                                            <p>Hole dir noch heute deine eigene .DE Domain!</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#">News</a>
                                    <ul class="nav-dropdown xs-icon-menu">
                                        <li class="single-menu-item">
                                            <a href="blog.html"><i class="icon icon-file-2"></i>Blog</a>
                                        </li>
                                        <li class="single-menu-item">
                                            <a href="blog-2.html"><i class="icon icon-file-2"></i>Blog 2</a>
                                        </li>
                                        <li class="single-menu-item">
                                            <a href="blog-single.html"><i class="icon icon-contract"></i>Blog single</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>                    <!-- menu list end -->
                    </nav>
                </div>
                <div class="col-lg-2">
                    <ul class="xs-menu-tools">
                        <li>
                            <a href="#modal-popup-1" class="languageSwitcher-button xs-modal-popup"><i class="icon icon-internet"></i></a>
                        </li>
                        <li>
                            <a href="#" class="offset-side-bar"><i class="icon icon-cart1"></i><span class="item-count">2</span></a>
                        </li>
                        <li>
                            <a href="#modal-popup-2" class="navsearch-button xs-modal-popup"><i class="icon icon-search"></i></a>
                        </li>
                        <li>
                            <a href="#" class="navSidebar-button"><i class="icon icon-burger-menu"></i></a>
                        </li>
                    </ul>
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </header>    <!-- End header section -->
</div>

<!-- banner section -->
<section class="xs-banner banner-v3 contet-to-center">
    <div class="container">
        <div class="row">
            <div class="col-md-7 align-self-center">
                <div class="xs-banner-content">
                    <h1 class="banner-title wow fadeInLeft">DeinCloudServer</h1>
                    <p class="banner-sub-title wow fadeInUp" data-wow-duration="1.5s">  - <span id="subtitle"></span></p>
                    <div class="xs-btn-wraper wow fadeInUp" data-wow-duration="1.7s">
                        <a href="{{ url('/blog') }}" class="btn btn-outline-primary">Blog</a>
                        <a href="{{ url('/login') }}" class="btn btn-primary">Noch nicht regestriert?</a>
                    </div>
                </div><!-- .xs-banner-content END -->
            </div>
            <div class="col-md-5">
                <div class="xs-banner-image wow fadeInRight">
                    <img src="{{ asset('images/welcome/banner_image-2.png') }}" data-parallax='{"y": 150}' alt="Welcome banner image">
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section><!-- End banner section -->
<!-- domain search section -->
{{--<div class="xs-domain-search domainSearch-v2">--}}
{{--    <div class="container">--}}
{{--        <div class="domain-search-form-group wow fadeIn">--}}
{{--            <form action="#" method="POST" class="domain-search-form">--}}
{{--                <input type="search" placeholder="Enter Address" id="domain-search">--}}
{{--                <div class="select-group">--}}
{{--                    <select name="domainList">--}}
{{--                        <option value="com" selected>.com</option>--}}
{{--                        <option value="net">.net</option>--}}
{{--                        <option value="io">.io</option>--}}
{{--                        <option value="info">.info</option>--}}
{{--                        <option value="store">.store</option>--}}
{{--                    </select>--}}
{{--                    <input type="submit" value="Search">--}}
{{--                </div>--}}
{{--            </form>--}}
{{--            <ul class="xs-domain-info">--}}
{{--                <li>--}}
{{--                    <img src="{{ asset('images/domain/com.png') }}" alt="Domain name">--}}
{{--                    <strong>$2.95</strong>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <img src="{{ asset('images/domain/co.png') }}" alt="Domain name">--}}
{{--                    <strong>$4.5</strong>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <img src="{{ asset('images/domain/net.png') }}" alt="Domain name">--}}
{{--                    <strong>$5.8</strong>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <img src="{{ asset('images/domain/info.png') }}" alt="Domain name">--}}
{{--                    <strong>$7.9</strong>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <img src="{{ asset('images/domain/store.png') }}" alt="Domain name">--}}
{{--                    <strong>$1.00</strong>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div><!-- .container END -->--}}
{{--</div><!-- End domain search section -->--}}

<!-- why choose section -->
<section class="why-choose-section xs-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="xs-heading wow fadeIn">
                    <h2 class="heading-sub-title">Warum</h2>
                    <h3 class="heading-title"><span>DeinCloudServer?</span></h3>
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-us-block wow fadeInUp">
                    <div class="choose-us-img">
                        <img src="{{ asset('images/chooseUs/choose-us-1.png') }}" alt="hostinza hosting image">
                    </div>
                    <h4 class="xs-title">99.9% </h4>
                    <p>Dank unseren exzellenten dauerhaften <a href="{{ url('ddos-protection') }}">DDoS-Schutz</a> des <a href="https://www.first-colo.net/" target="_blank">First-Colo's</a>, können wir Ihnen eine Mindestverfügbarkeit von 99,9% garantieren.</p>
                </div><!-- .why-choose-us-block END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-us-block wow fadeInUp" data-wow-duration="1.5s">
                    <div class="choose-us-img">
                        <img src="{{ asset('images/chooseUs/choose-us-2.png') }}" alt="hostinza hosting image">
                    </div>
                    <h4 class="xs-title">Safe and Secured</h4>
                    <p>Our team assured your web site is always safe and secure</p>
                </div><!-- .why-choose-us-block END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-us-block wow fadeInUp" data-wow-duration="2s">
                    <div class="choose-us-img">
                        <img src="{{ asset('images/chooseUs/choose-us-3.png') }}" alt="hostinza hosting image">
                    </div>
                    <h4 class="xs-title">Our Dedicated Support</h4>
                    <p>We finally found a host that truly understood the unique</p>
                </div><!-- .why-choose-us-block END -->
            </div>
        </div>
    </div><!-- .container END -->
</section><!-- END why choose section -->

<!-- pricing section -->
<section class="pricing-section xs-section-padding xs-bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="xs-heading wow fadeIn">
                    <h2 class="heading-sub-title">Pricing Plans</h2>
                    <h3 class="heading-title">SELECT <span>BEST PLAN</span></h3>
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->
        <div class="pricing-matrix pricing-expand wow fadeIn">
            <div class="row no-gutters">
                <div class="col-lg-3">
                    <div class="pricing-matrix-item">
                        <div class="d-lg-block d-md-none d-none">
                            <div class="pricing-image">
                                <img src="{{ asset('images/pricing/pricing-feature.svg') }}" alt="pricing image">
                            </div>
                            <div class="gap"></div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Visits per month </span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Total Sites </span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Hosting type  </span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Local storage</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Bandwidth per month</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Imported SSL</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">24/7 phone support </span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Consultative onboarding </span>
                            </div>
                            <div class="gap"></div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Dev, Stage, Prod </span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Transferable Sites  </span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Multisite ready </span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">PHP 7 ready </span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">LargeFS </span>
                            </div>
                            <div class="gap"></div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Global CDN  </span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Page Performance  </span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">SSL certificates  </span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">GeoTarget  </span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Content Performance </span>
                            </div>
                            <div class="gap"></div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Imported SSL  </span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Readiness assessment  </span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Success management  </span>
                            </div>
                            <div class="gap"></div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">Application Performance</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature">High availability  </span>
                            </div>
                        </div>
                    </div><!-- .pricing-matrix-item END -->
                </div>
                <div class="col-lg-9">
                    <div class="pricing-matrix-slider owl-carousel">
                        <div class="pricing-matrix-item">
                            <div class="pricing-feature-group">
                                <h4 class="xs-title">Regular</h4>
                                <div class="pricing-body">
                                    <p>The High performance cloud platform ever</p>
                                    <div class="pricing-price">
                                        <h2><sup>$</sup>29</h2>
                                    </div>
                                    <a href="#" class="btn btn-primary">Buy Now</a>
                                </div>
                            </div>
                            <div class="gap"></div>
                            <div class="pricing-feature-item">
                                <div class="pricing-feature d-lg-none d-sm-block">Visits per month </div>
                                <div class="pricing-feature">Up to 25000 </div>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Total Sites </span>
                                <span class="pricing-feature">1</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Hosting type  </span>
                                <span class="pricing-feature">Shared</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Local storage</span>
                                <span class="pricing-feature">50 GB</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Bandwidth per month</span>
                                <span class="pricing-feature">256 GB</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Imported SSL</span>
                                <span class="pricing-feature"></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">24/7 phone support </span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Consultative onboarding </span>
                                <span class="pricing-feature"></span>
                            </div>
                            <div class="gap"></div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Dev, Stage, Prod </span>
                                <span class="pricing-feature"></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Transferable Sites  </span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Multisite ready </span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">PHP 7 ready </span>
                                <span class="pricing-feature"></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">LargeFS </span>
                                <span class="pricing-feature"></span>
                            </div>
                            <div class="gap"></div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Global CDN  </span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Page Performance  </span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">SSL certificates    </span>
                                <span class="pricing-feature"></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">GeoTarget     </span>
                                <span class="pricing-feature">Add On</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Content Performance   </span>
                                <span class="pricing-feature"></span>
                            </div>
                            <div class="gap"></div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Imported SSL</span>
                                <span class="pricing-feature"></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Readiness assessment  </span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Success management</span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="gap"></div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Application Performance</span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">High availability  </span>
                                <span class="pricing-feature"></span>
                            </div>
                        </div><!-- .pricing-matrix-item END -->
                        <div class="pricing-matrix-item">
                            <div class="pricing-feature-group">
                                <h4 class="xs-title">Standard</h4>
                                <div class="pricing-body">
                                    <p>The High performance cloud platform ever</p>
                                    <div class="pricing-price">
                                        <h2><sup>$</sup>39</h2>
                                    </div>
                                    <a href="#" class="btn btn-primary">Buy Now</a>
                                </div>
                            </div>
                            <div class="gap"></div>
                            <div class="pricing-feature-item">
                                <div class="pricing-feature d-lg-none d-sm-block">Visits per month </div>
                                <div class="pricing-feature">Up to 50000 </div>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Total Sites </span>
                                <span class="pricing-feature">3</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Hosting type  </span>
                                <span class="pricing-feature">Shared</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Local storage</span>
                                <span class="pricing-feature">100 GB</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Bandwidth per month</span>
                                <span class="pricing-feature">512 GB</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Imported SSL</span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">24/7 phone support </span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Consultative onboarding </span>
                                <span class="pricing-feature"></span>
                            </div>
                            <div class="gap"></div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Dev, Stage, Prod </span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Transferable Sites  </span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Multisite ready </span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">PHP 7 ready </span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">LargeFS </span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="gap"></div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Global CDN  </span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Page Performance  </span>
                                <span class="pricing-feature"></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">SSL certificates    </span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">GeoTarget     </span>
                                <span class="pricing-feature">Add On</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Content Performance   </span>
                                <span class="pricing-feature">Add On</span>
                            </div>
                            <div class="gap"></div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Imported SSL</span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Readiness assessment  </span>
                                <span class="pricing-feature">Limited</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Success management</span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="gap"></div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Application Performance</span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">High availability  </span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                        </div><!-- .pricing-matrix-item END -->
                        <div class="pricing-matrix-item">
                            <div class="pricing-feature-group">
                                <h4 class="xs-title">Plus</h4>
                                <div class="pricing-body">
                                    <p>The High performance cloud platform ever</p>
                                    <div class="pricing-price">
                                        <h2><sup>$</sup>49</h2>
                                    </div>
                                    <a href="#" class="btn btn-primary">Buy Now</a>
                                </div>
                            </div>
                            <div class="gap"></div>
                            <div class="pricing-feature-item">
                                <div class="pricing-feature d-lg-none d-sm-block">Visits per month </div>
                                <div class="pricing-feature">Unlimited </div>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Total Sites </span>
                                <span class="pricing-feature">5</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Hosting type  </span>
                                <span class="pricing-feature">Shared</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Local storage</span>
                                <span class="pricing-feature">500 GB</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Bandwidth per month</span>
                                <span class="pricing-feature">1 TB</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Imported SSL</span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">24/7 phone support </span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Consultative onboarding </span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="gap"></div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Dev, Stage, Prod </span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Transferable Sites  </span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Multisite ready </span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">PHP 7 ready </span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">LargeFS </span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="gap"></div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Global CDN  </span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Page Performance  </span>
                                <span class="pricing-feature"></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">SSL certificates    </span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">GeoTarget     </span>
                                <span class="pricing-feature">Add On</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Content Performance   </span>
                                <span class="pricing-feature">Add On</span>
                            </div>
                            <div class="gap"></div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Imported SSL</span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Readiness assessment  </span>
                                <span class="pricing-feature">Unlimited</span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Success management</span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="gap"></div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">Application Performance</span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="pricing-feature-item">
                                <span class="pricing-feature d-lg-none d-sm-block">High availability  </span>
                                <span class="pricing-feature"><i class="fa fa-check"></i></span>
                            </div>
                        </div><!-- .pricing-matrix-item END -->
                    </div><!-- .pricing-matrix-slider END -->
                </div>
            </div>
        </div><!-- .pricing-matrix pricing-expand END -->
    </div><!-- .container END -->
</section><!-- END pricing section -->

<!-- include feature section -->
<section class="xs-section-padding bg-gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="xs-heading wow fadeIn">
                    <h2 class="heading-sub-title">We Offer</h2>
                    <h3 class="heading-title">FEATURES <span>INCLUDED</span></h3>
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->
        <ul class="nav nav-tabs main-nav-tab-2 tab-swipe wow fadeIn" data-wow-duration="1.5s" role="tablist">
            <li>
                <a id="webTransfer-tab" class="active show" data-toggle="tab" href="#webTransfer" role="tab" aria-controls="webTransfer" aria-selected="true">
                    <p><img src="{{ asset('images/features/tab-icon-1.png') }}" alt="hosting features icon"></p>
                    Website Transfers
                </a>
            </li>
            <li>
                <a id="freeEmail-tab" data-toggle="tab" href="#freeEmail" role="tab" aria-controls="freeEmail" aria-selected="false">
                    <p><img src="{{ asset('images/features/tab-icon-2.png') }}" alt="hosting features icon"></p>
                    Get free email
                </a>
            </li>
            <li>
                <a id="webSpeed-tab" data-toggle="tab" href="#webSpeed" role="tab" aria-controls="webSpeed" aria-selected="false">
                    <p><img src="{{ asset('images/features/tab-icon-3.png') }}" alt="hosting features icon"></p>
                    Website speed
                </a>
            </li>
            <li>
                <a id="freeCpanel-tab" data-toggle="tab" href="#freeCpanel" role="tab" aria-controls="freeCpanel" aria-selected="false">
                    <p><img src="{{ asset('images/features/tab-icon-1.png') }}" alt="hosting features icon"></p>
                    Free cPanel
                </a>
            </li>
        </ul><!-- .main-nav-tab-2 END -->
        <div class="tab-content wow fadeIn" data-wow-duration="2s">
            <div class="tab-pane fadeIn animated show active" id="webTransfer" role="tabpanel" aria-labelledby="webTransfer-tab">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="feature-image-content">
                            <img src="{{ asset('images/features/feature-image.png') }}" alt="hosting feature image">
                        </div><!-- .feature-image-content END -->
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="feature-text-content">
                            <h3 class="content-title">Get free Website Transfers</h3>
                            <p>Moving your website from another Web Host? Chat with us and our Account Manager will do the cPanel to cPanel website migration for you, completely Free of charge! Also, you can upgrade between plans on Shared Hosting by yourself from your panel.</p>
                        </div><!-- .feature-text-content END -->
                    </div>
                </div><!-- .row END -->
            </div><!-- #webTransfer END -->
            <div class="tab-pane fadeIn animated" id="freeEmail" role="tabpanel" aria-labelledby="freeEmail-tab">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="feature-image-content">
                            <img src="{{ asset('images/features/feature-image.png') }}" alt="hosting feature image">
                        </div><!-- .feature-image-content END -->
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="feature-text-content">
                            <h3 class="content-title">Free unlimited email service</h3>
                            <p>Moving your website from another Web Host? Chat with us and our Account Manager will do the cPanel to cPanel website migration for you, completely Free of charge! Also.</p>
                        </div><!-- .feature-text-content END -->
                    </div>
                </div><!-- .row END -->
            </div><!-- #freeEmail END -->
            <div class="tab-pane fadeIn animated" id="webSpeed" role="tabpanel" aria-labelledby="webSpeed-tab">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="feature-image-content">
                            <img src="{{ asset('images/features/feature-image.png') }}" alt="hosting feature image">
                        </div><!-- .feature-image-content END -->
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="feature-text-content">
                            <h3 class="content-title">Super web spped</h3>
                            <p>Moving your website from another Web Host? Chat with us and our Account Manager will do the cPanel to cPanel website migration for you, completely.</p>
                        </div><!-- .feature-text-content END -->
                    </div>
                </div><!-- .row END -->
            </div><!-- #webSpeed END -->
            <div class="tab-pane fadeIn animated" id="freeCpanel" role="tabpanel" aria-labelledby="freeCpanel-tab">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="feature-image-content">
                            <img src="{{ asset('images/features/feature-image.png') }}" alt="hosting feature image">
                        </div><!-- .feature-image-content END -->
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="feature-text-content">
                            <h3 class="content-title">Free cPanel service</h3>
                            <p>Moving your website from another Web Host? Chat with us and our Account Manager will do the cPanel to cPanel website migration for you, completely Free of charge! Also, you can upgrade between plans on Shared Hosting by yourself from your panel.</p>
                        </div><!-- .feature-text-content END -->
                    </div>
                </div><!-- .row END -->
            </div><!-- #freeCpanel END -->
        </div>
    </div><!-- .container END -->
</section><!-- END include feature section -->

<!-- hosting info section -->
<section class="xs-section-padding xs-hosting-info">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hosting-info-img">
                    <img src="{{ asset('images/info/info-img-1.png') }}" alt="Hosting info image">
                    <img src="{{ asset('images/info/icon-1.png') }}" class="info-icon icon-1" alt="hosting icon">
                    <img src="{{ asset('images/info/icon-2.png') }}" class="info-icon icon-2" alt="hosting icon">
                    <img src="{{ asset('images/info/icon-3.png') }}" class="info-icon icon-3" alt="hosting icon">
                    <img src="{{ asset('images/info/icon-4.png') }}" class="info-icon icon-4" alt="hosting icon">
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="hosting-info-wraper">
                    <div class="spinner-icon wow">
                        <img src="{{ asset('images/info/electric-wave.png') }}" alt="hosting info info">
                    </div>
                    <div class="wow fadeInUp">
                        <h2 class="content-title">Get best plans for more Power</h2>
                        <p>Our best-in-class WordPress solution, with additional optimization to make running a WooCommerce online store easy. Our prices are clear and straight forward so you can</p>
                        <ul class="xs-list check">
                            <li>We've been supporting WordPress since the beginning.</li>
                            <li>Perfect for large sites or agencies managing multiple clients.</li>
                            <li>Our easy-to-use control panel and API let you spend</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Get Started</a>
                    </div>
                </div><!-- .hosting-info-wraper END -->
            </div>
        </div><!-- .row END -->
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="hosting-info-wraper-2 wow fadeInLeft" data-wow-duration="1.5s">
                    <h2 class="content-title">Powerful Server and Platform</h2>
                    <div class="media hosting-info-list">
                        <div class="d-flex info-icon">
                            <img src="{{ asset('images/info/gaurd-icon.png') }}" alt="hosting info icon">
                        </div>
                        <div class="media-body">
                            <h4 class="xs-title small">Better Security and faster Server</h4>
                            <p>Our best-in-class WordPress solution, with additio nal optiz ation to make running a WooCommerce</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                    <div class="media hosting-info-list">
                        <div class="d-flex info-icon">
                            <img src="{{ asset('images/info/cloud-icon.png') }}" alt="hosting info icon">
                        </div>
                        <div class="media-body">
                            <h4 class="xs-title small">No-Downtime website transfers </h4>
                            <p>Our best-in-class WordPress solution, with additio nal optiz ation to make running a WooCommerce</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                    <div class="media hosting-info-list">
                        <div class="d-flex info-icon">
                            <img src="{{ asset('images/info/clock-icon.png') }}" alt="hosting info icon">
                        </div>
                        <div class="media-body">
                            <h4 class="xs-title small">Deployment within few minutes </h4>
                            <p>Our best-in-class WordPress solution, with additio nal optiz ation to make running a WooCommerce</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                    <a href="#" class="btn btn-primary">Get Started</a>
                </div><!-- .hosting-info-wraper-2 END -->
            </div>
            <div class="col-lg-6">
                <div class="hosting-info-img wow fadeInRight" data-wow-duration="2s">
                    <img src="{{ asset('images/info/info-img-2.png') }}" alt="Hosting info image">
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section><!-- END hosting info section -->

<!-- testimonial section -->
<section class="xs-testimonial-section wow fadeIn">
    <div class="container">
        <div class="xs-testimonial-slider owl-carousel">
            <div class="xs-testimonial-item">
                <div class="testimonial-content">
                    <p>Our best-in-class WordPress solution with additio nal optiz ation to make an running a WooCommerce</p>
                    <div class="commentor-bio media">
                        <div class="d-flex round-avatar">
                            <img src="{{ asset('images/avatar/avatar-1.png') }}" alt="avatar image">
                        </div>
                        <div class="media-body align-self-center">
                            <h4 class="commentor-title">Richard I Jones</h4>
                            <p class="commentor-info">WWW Realty</p>
                            <i class="icon icon-quote"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xs-testimonial-item">
                <div class="testimonial-content">
                    <p>Our best-in-class WordPress solution with additio nal optiz ation to make an running a WooCommerce</p>
                    <div class="commentor-bio media">
                        <div class="d-flex round-avatar">
                            <img src="{{ asset('images/avatar/avatar-2.png') }}" alt="avatar image">
                        </div>
                        <div class="media-body align-self-center">
                            <h4 class="commentor-title">Cecilia H King</h4>
                            <p class="commentor-info">The White Rabbit</p>
                            <i class="icon icon-quote"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xs-testimonial-item">
                <div class="testimonial-content">
                    <p>Our best-in-class WordPress solution with additio nal optiz ation to make an running a WooCommerce</p>
                    <div class="commentor-bio media">
                        <div class="d-flex round-avatar">
                            <img src="{{ asset('images/avatar/avatar-3.png') }}" alt="avatar image">
                        </div>
                        <div class="media-body align-self-center">
                            <h4 class="commentor-title">Joe D Walczak</h4>
                            <p class="commentor-info">Hechinger</p>
                            <i class="icon icon-quote"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .container END -->
</section><!-- END testimonial section -->

<!-- blog section -->
<section class="xs-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="xs-heading wow fadeIn">
                    <h2 class="heading-sub-title">Latest Info</h2>
                    <h3 class="heading-title">GET <span>LATEST INFO</span></h3>
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="xs-blog-post wow fadeInUp">
                    <div class="post-image">
                        <img src="{{ asset('images/blogs/blogs-1.jpg') }}" alt="hosting blog images">
                    </div><!-- .post-image END -->
                    <div class="entry-header">
                        <div class="post-meta">
                            <span class="post-cat"><a href="#">Cloud Hosting</a></span>
                        </div>
                        <h2 class="entry-title"><a href="blog-single.html">Best domain name for Business</a></h2>
                        <div class="entry-meta">
                            <span class="meta-date">7 March, 2018</span>
                        </div>
                    </div><!-- .entry-header END -->
                </div><!-- .xs-blog-post END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="xs-blog-post wow fadeInUp" data-wow-duration="1.5s">
                    <div class="post-image">
                        <img src="{{ asset('images/blogs/blogs-2.jpg') }}" alt="hosting blog images">
                    </div><!-- .post-image END -->
                    <div class="entry-header">
                        <div class="post-meta">
                            <span class="post-cat"><a href="#">Reseller Hosting</a></span>
                        </div>
                        <h2 class="entry-title"><a href="blog-single.html">Best reseller hosting for start business</a></h2>
                        <div class="entry-meta">
                            <span class="meta-date">1 June, 2017</span>
                        </div>
                    </div><!-- .entry-header END -->
                </div><!-- .xs-blog-post END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="xs-blog-post wow fadeInUp" data-wow-duration="2s">
                    <div class="post-image">
                        <img src="{{ asset('images/blogs/blogs-3.jpg') }}" alt="hosting blog images">
                    </div><!-- .post-image END -->
                    <div class="entry-header">
                        <div class="post-meta">
                            <span class="post-cat"><a href="#">Shared Hosting</a></span>
                        </div>
                        <h2 class="entry-title"><a href="blog-single.html">Domain name for student</a></h2>
                        <div class="entry-meta">
                            <span class="meta-date">2 April, 2017</span>
                        </div>
                    </div><!-- .entry-header END -->
                </div><!-- .xs-blog-post END -->
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section><!-- END blog section -->

<!-- language switcher strart -->
<!-- xs modal -->
<div class="zoom-anim-dialog mfp-hide modal-language" id="modal-popup-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="language-content">
                <p>Switch The Language</p>
                <ul class="flag-lists">
                    <li><a href="#"><img src="{{ asset('images/flags/006-united-states.svg') }}" alt=""><span>English</span></a></li>
                    <li><a href="#"><img src="{{ asset('images/flags/005-germany.svg') }}" alt=""><span>German</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- End xs modal --><!-- end language switcher strart -->

<!-- language switcher strart -->
<!-- xs modal -->
<div class="zoom-anim-dialog mfp-hide modal-searchPanel" id="modal-popup-2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="xs-search-panel">
                <form action="#" method="POST" class="xs-search-group">
                    <input type="search" class="form-control" name="search" id="search" placeholder="Search">
                    <button type="submit" class="search-button"><i class="icon icon-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div><!-- End xs modal --><!-- end language switcher strart -->

<!-- offset cart strart -->
<!-- sidebar cart item -->
<div class="xs-sidebar-group cart-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading media">
                <div class="media-body">
                    <a href="#" class="close-side-widget">
                        X
                    </a>
                </div>
            </div>
            <div class="xs-empty-content">
                <h3 class="widget-title">Shopping cart</h3>
                <h4 class="xs-title">No products in the cart.</h4>
                <p class="empty-cart-icon">
                    <i class="icon icon-shopping-cart"></i>
                </p>
                <p class="xs-btn-wraper">
                    <a class="btn btn-primary" href="#">Return To Shop</a>
                </p>
            </div>
        </div>
    </div>
</div>    <!-- END sidebar cart item -->    <!-- END offset cart strart -->

<!-- offset cart strart -->
<!-- sidebar cart item -->
<div class="xs-sidebar-group info-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">
                    X
                </a>
            </div>
            <div class="sidebar-textwidget">
                <div class="sidebar-logo-wraper">
                    <img src="{{ asset('images/blue_logo.png') }}" alt="sidebar logo">
                </div>
                <p>Far far away, behind the word moun tains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of  </p>
                <ul class="sideabr-list-widget">
                    <li>
                        <div class="media">
                            <div class="d-flex">
                                <img src="{{ asset('images/location.png') }}" alt="">
                            </div>
                            <div class="media-body">
                                <p>759 Pinewood Avenue</p>
                                <span>Marquette, Michigan</span>
                            </div>
                        </div><!-- address 1 -->
                    </li>
                    <li>
                        <div class="media">
                            <div class="d-flex">
                                <img src="{{ asset('images/mail.png') }}" alt="">
                            </div>
                            <div class="media-body">
                                <a href="mailto:info@deincloudserver.de">info[@]domain[.]de</a>
                                <span>Online Support</span>
                            </div>
                        </div><!-- address 1 -->
                    </li>
                    <li>
                        <div class="media">
                            <div class="d-flex">
                                <img src="{{ asset('images/phone.png') }}" alt="">
                            </div>
                            <div class="media-body">
                                <p>906-624-2565</p>
                                <span>Mon-Fri 8am-5pm</span>
                            </div>
                        </div><!-- address 1 -->
                    </li>
                </ul><!-- .sideabr-list-widget -->
                <div class="subscribe-from">
                    <p>Get Subscribed!</p>
                    <form action="#" method="POST" id="subscribe-form" class="subscribe-form">
                        <label for="sub-input"></label>
                        <div class="form-group">
                            <input type="email" name="email" id="sub-input" placeholder="Enter your mail here" class="form-control">
                            <button class="sub-btn" type="submit"><i class="icon icon-arrow-right"></i></button>
                        </div>
                    </form>
                </div>
                <ul class="social-list version-2">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" class="vimeo"><i class="fa fa-vimeo"></i></a></li>
                </ul><!-- .social-list -->
                <div class="text-center">
                    <a href="#" class="btn btn-primary">Purchase Now</a>
                </div>
            </div>
        </div>
    </div>
</div>    <!-- END sidebar widget item -->    <!-- END offset cart strart -->

<!-- footer section start -->
<footer class="xs-footer-section">
    <!-- feature list section -->
    <div class="xs-feature-section">
        <div class="container">
            <div class="row feature-v2">
                <div class="col-lg-6">
                    <div class="xs-feature-group wow fadeInLeft">
                        <div class="media">
                            <div class="feature-img d-flex">
                                <img src="{{ asset('images/sheild-2.png') }}" alt="hosting feature img">
                            </div>
                            <div class="media-body feature-content">
                                <h4 class="xs-title">Days money back guarantee</h4>
                                <p>Share processes an data secure lona need <br> to know basis without the need.</p>
                                <div class="xs-btn-wraper">
                                    <a href="#" class="btn btn-primary">Know More</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- .xs-feature-group END -->
                </div>
                <div class="col-lg-6">
                    <div class="xs-feature-group wow fadeInRight">
                        <div class="media">
                            <div class="feature-img d-flex">
                                <img src="{{ asset('images/cloud-lock-2.png') }}" alt="hosting feature img">
                            </div>
                            <div class="media-body feature-content">
                                <h4 class="xs-title">Build and protect your brand</h4>
                                <p>Share processes an data secure lona need <br> to know basis without the need.</p>
                                <div class="xs-btn-wraper">
                                    <a href="#" class="btn btn-primary">Know More</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- .xs-feature-group END -->
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </div>			<!-- END feature list section -->
    <div class="footer-group" style="background-image: url({{ asset('images/footer-bg.png') }});">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget wow fadeInUp">
                            <h3 class="widget-title">Services</h3>
                            <ul class="xs-list">
                                <li><a href="shared-hosting.html">Shared Hosting</a></li>
                                <li><a href="reseller-hosting.html">Reseller Hosting</a></li>
                                <li><a href="vps-hosting.html">VPS Hosting</a></li>
                                <li><a href="cloud-hosting.html">Cloud Hosting</a></li>
                                <li><a href="dedicated-hosting.html">Dedicated Hosting</a></li>
                                <li><a href="domain.html">Domain Name</a></li>
                            </ul><!-- .xs-list END -->
                        </div><!-- .footer-widget END -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget wow fadeInUp" data-wow-duration="1s">
                            <h3 class="widget-title">Company</h3>
                            <ul class="xs-list">
                                <li><a href="about.html">About us</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="support.html">Support</a></li>
                                <li><a href="blog.html">Latest Blog</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="affiliate.html">Affiliate</a></li>
                            </ul><!-- .xs-list END -->
                        </div><!-- .footer-widget END -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget wow fadeInUp" data-wow-duration="1.3s">
                            <h3 class="widget-title">Solutions</h3>
                            <ul class="xs-list">
                                <li><a href="who-is.html">Who Is</a></li>
                                <li><a href="terms.html">Terms of Service</a></li>
                                <li><a href="privacy.html">Privacy Policy</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="login.html">Log In</a></li>
                            </ul><!-- .xs-list END -->
                        </div><!-- .footer-widget END -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget wow fadeInUp" data-wow-duration="1.5s">
                            <h3 class="widget-title">Contact Info</h3>
                            <ul class="contact-info-widget">
                                <li class="media">
                                    <img src="{{ asset('images/address-pin.png') }}" class="d-flex" alt="contact icon">
                                    <span class="media-body">9/4c, 1010 Avenue, NY, USA</span>
                                </li><!-- .media END -->
                                <li class="media">
                                    <img src="{{ asset('images/phone-pin.png') }}" class="d-flex" alt="contact icon">
                                    <span class="media-body">009-215-5596 (toll free) 009-215-5596</span>
                                </li><!-- .media END -->
                                <li class="media">
                                    <img src="{{ asset('images/email-icon.png') }}" class="d-flex" alt="contact icon">
                                    <span class="media-body">9/4c, 1010 Avenue, NY, USA</span>
                                </li><!-- .media END -->
                            </ul><!-- .contact-info-widget -->
                        </div><!-- .footer-widget END -->
                    </div>
                </div><!-- .row END -->
            </div><!-- .container END -->
        </div><!-- .footer-main END -->
        <div class="container">
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-bottom-info wow fadeInUp">
                            <p>Offers valid for a limited time onlyand  reflect multi  annual discounts. Other terms and conditions may apply.  <a href="#">Click Here</a></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="xs-list list-inline wow fadeInUp" data-wow-duration="1s">
                            <li><img src="{{ asset('images/security/security-company-images-1.png') }}" alt="security company images"></li>
                            <li><img src="{{ asset('images/security/security-company-images-2.png') }}" alt="security company images"></li>
                            <li><img src="{{ asset('images/security/security-company-images-3.png') }}" alt="security company images"></li>
                            <li><img src="{{ asset('images/security/security-company-images-4.png') }}" alt="security company images"></li>
                        </ul>
                    </div>
                </div><!-- .row END -->
            </div><!-- .footer-bottom end -->
        </div><!-- .container end -->
    </div><!-- .footer-group END -->
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="copyright-text wow fadeInUp">
                        <p>&copy; 2018 <a href="#">Hostinza</a> Theme by <a href="https://themeforest.net/user/xpeedstudio">Xpeed Studio</a></p>
                    </div><!-- .copyright-text END -->
                </div>
                <div class="col-md-4">
                    <div class="footer-logo-wraper wow fadeInUp" data-wow-duration="1s">
                        <a href="index.html" class="footer-logo"><img src="{{ asset('images/footer-logo.png') }}" alt="footer logo"></a>
                    </div><!-- .footer-logo-wraper END -->
                </div>
                <div class="col-md-4">
                    <div class="social-list-wraper wow fadeInUp" data-wow-duration="1.3s">
                        <ul class="social-list">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="googlePlus"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div><!-- .social-list-wraper END -->
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </div><!-- .footer-copyright END -->
</footer>
<!-- footer section end -->
<!-- js file start -->
{{--<script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>--}}
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/Popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/tweetie.js') }}"></script>
<script src="{{ asset('js/jquery.parallax-scroll.js') }}"></script>
<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('js/jquery.parallax.js') }}"></script>
<script src="{{ asset('js/hostslide.js') }}"></script>
<script src="{{ asset('js/vps-slider.js') }}"></script>
<script src="{{ asset('js/vps-slider-settings.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script>
<script src="{{ asset('js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('js/shuffle-letters.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/typed.min.js') }}"></script>
<!-- End js file -->

<script>

    $(document).ready(function () {
        var type = new Typed("#subtitle", {
            strings: [
                "Kriegt das schon wieder hin.",
                "Gesucht und gefunden!",
                "und die Konkurrenz steht im Schatten.",
                "wie die Kirsche auf der Torte.",
                "Jederzeit und überall!",
                "und los gehts!",
                "allzeit bereit!",
                "Für ein riesen Erfolg in deinen Projekten.",
                "auf immer und ewig!",
                "ein neues Statussymbol!",
                "lass DeinCloudServer die arbeit vollrichten!",
                "beruhigt die Nerven!",
                "Wenn du vorankommen willst.",
                "nur fürs Beste!",
                "Alles unter einem Dach.",
                "Einfach perfekt!"
            ],
            smartBackspace: true,
            showCursor: false,
            autoInsertCss: true,
            fadeOut: true,
            typeSpeed: 75,
            startDelay: 0,
            backDelay: 1000,
            loop: true,
        });
    });

</script>
</body>
</html>
