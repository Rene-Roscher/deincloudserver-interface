<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ env('APP_NAME', 'DeinCloudServer') }} @hasSection('header-title')|@endif @yield('header-title') </title>

    <meta name="author" content="Rene Roscher">
    <meta name="publisher" content="Rene Roscher">
    <meta name="copyright" content="Rene Roscher">
    <meta name="audience" content="Alle">
    <meta http-equiv="content-language" content="de">
    <meta name="robots" content="index, follow">


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Karla:400,700,700i%7CRubik:300,400,500,700" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset('images/favicon-32.png') }}">
    <!-- Place favicon.ico in the root directory -->
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
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">


    <!--For Plugins external css-->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="https://wp.xpeedstudio.com/hostinza/wp-content/themes/hostinza/assets/css/responsive.css" />
</head>
<body>

<!-- prelaoder -->
<div id="preloader">
    <div class="preloader-wrapper">
        <div class="spinner"></div>
    </div>
</div>
<!-- END prelaoder -->

<div class="header-transparent nav-sticky">
    <!-- topBar section -->
    <div class="xs-top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="xs-top-bar-info">
                        <li>
                            <a href="mailto:info@deincloudserver.de" target="_blank"><i class="icon icon-envelope1"></i>info@deincloudserver.de</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="top-menu">
                        <li><a href="{{ route('login') }}"><i class="icon icon-key2"></i> Anmelden</a></li>
                        <li><a href="{{ route('register') }}"><i class="icon icon-users"></i> Registrieren</a></li>
                    </ul>
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </div>    <!-- End topBar section -->

    <!-- header section -->
    <header class="xs-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="xs-logo-wraper">
                        <a href="{{ url('/') }}" class="xs-logo">
                            <img src="https://media.discordapp.net/attachments/356011913563602947/587635035667038240/dcs_logo_lang.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <nav class="xs-menus">
                        <div class="nav-header">
                            <a class="nav-brand" href="index.html"></a>
                            <div class="nav-toggle"></div>
                        </div>
                        <!-- menu list start -->
                        <div class="nav-menus-wrapper">
                            <ul class="nav-menu align-to-right">
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
                                <li>
                                    <a href="#">GameServer</a>
                                    <div class="megamenu-panel xs-service-menu" style="width: auto">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <a href="shared-hosting.html">
                                                    <div class="media">
                                                        <img src="{{ asset('images/menu-icon/icon-1.png') }}" alt="">
                                                        <div class="media-body">
                                                            <h4>Minecraft</h4>
                                                            <p>Einfache Verwaltung dank unseren selbstentwickelten Webinterface.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="reseller-hosting.html">
                                                    <div class="media">
                                                        <img src="{{ asset('images/menu-icon/icon-2.png') }}" alt="">
                                                        <div class="media-body">
                                                            <h4>Counter Strike</h4>
                                                            <p>Perfekt für Clans & Teams.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="vps-hosting.html">
                                                    <div class="media">
                                                        <img src="{{ asset('images/menu-icon/icon-3.png') }}" alt="">
                                                        <div class="media-body">
                                                            <h4>Garry's Mod</h4>
                                                            <p>Entscheide selbst, welche Modis gezockt werden sollen!<p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">Lizenzen</a>
                                    <div class="megamenu-panel xs-service-menu" style="width: auto">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <a href="shared-hosting.html">
                                                    <div class="media">
                                                        <img src="{{ asset('images/menu-icon/icon-1.png') }}" alt="">
                                                        <div class="media-body">
                                                            <h4>Plesk</h4>
                                                            <p>Miete Dir auf Prepaid-Basis deine eigene Plesk Lizenz.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="reseller-hosting.html">
                                                    <div class="media">
                                                        <img src="{{ asset('images/menu-icon/icon-2.png') }}" alt="">
                                                        <div class="media-body">
                                                            <h4>WHMCS</h4>
                                                            <p>Starte noch heute mit deinem eigenen Hosting durch!</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="reseller-hosting.html">
                                                    <div class="media">
                                                        <img src="{{ asset('images/menu-icon/icon-2.png') }}" alt="">
                                                        <div class="media-body">
                                                            <h4>Tekbase</h4>
                                                            <p>Starte noch heute mit deinem eigenen Hosting durch!</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">News</a>
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
                                <li><a href="contact.html">Kontakt</a></li>
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

@yield('content')

<!-- language switcher strart -->
<!-- xs modal -->
<div class="zoom-anim-dialog mfp-hide modal-language" id="modal-popup-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="language-content">
                <p>Sprache ändern</p>
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
                                <a href="mailto:info@deincloudserver.de">info@deincloudserver.de</a>
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
                                <span>Mon-Sam 13-22 Uhr</span>
                            </div>
                        </div><!-- address 1 -->
                    </li>
                </ul>
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
                </ul>
                <div class="text-center">
                    <a href="#" class="btn btn-primary">Purchase Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="xs-footer-section">

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
                    </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                            </ul>
                        </div>
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
                            </ul>
                        </div>
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
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget wow fadeInUp" data-wow-duration="1.5s">
                            <h3 class="widget-title">Contact Info</h3>
                            <ul class="contact-info-widget">
                                <li class="media">
                                    <img src="{{ asset('images/address-pin.png') }}" class="d-flex" alt="contact icon">
                                    <span class="media-body">9/4c, 1010 Avenue, NY, USA</span>
                                </li>
                                <li class="media">
                                    <img src="{{ asset('images/phone-pin.png') }}" class="d-flex" alt="contact icon">
                                    <span class="media-body">009-215-5596 (toll free) 009-215-5596</span>
                                </li>
                                <li class="media">
                                    <img src="{{ asset('images/email-icon.png') }}" class="d-flex" alt="contact icon">
                                    <span class="media-body">9/4c, 1010 Avenue, NY, USA</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="copyright-text wow fadeInUp">
                        <p>&copy; 2018 <a href="#">Hostinza</a> Theme by <a href="https://themeforest.net/user/xpeedstudio">Xpeed Studio</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-logo-wraper wow fadeInUp" data-wow-duration="1s">
                        <a href="index.html" class="footer-logo"><img src="{{ asset('images/footer-logo.png') }}" alt="footer logo"></a>
                    </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

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

@yield('scripts')

</body>
</html>
