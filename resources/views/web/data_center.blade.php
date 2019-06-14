@extends('layouts.app')

@section('content')
    <!--breadcumb start here-->
    <div class="xs-banner inner-banner contet-to-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="xs-banner-content">
                        <h2 class="banner-title wow fadeInLeft" data-wow-duration="1.5s">Rechenzentrum</h2>
                        <p class="banner-sub-title wow fadeInUp" data-wow-duration="1.5s">  - Unser Zuhause für Ihre Dienstleistungen.</p>
                    </div><!-- .xs-banner-content END -->
                </div>
                <div class="col-lg-6 align-self-end">
                    <div class="inner-welcome-image-group ">
                        <img src="{{ asset('images/innerWelcome/about-bg.png') }}" alt="hosting image">
                        <img src="{{ asset('images/innerWelcome/info.png') }}" class="banner-ico banner-ico-1" alt="phone icon">
                        <img src="{{ asset('images/innerWelcome/board.png') }}" class="banner-ico banner-ico-2" alt="phone icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---->

    <section class="xs-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="xs-heading wow fadeIn">
                        <h2 class="heading-sub-title">Wir stellen Ihn das First-Colo</h2>
                        <h3 class="heading-title">Rechenzentrum vor<span>!</span></h3>
                    </div><!-- .xs-heading END -->
                </div>
            </div><!-- .row END -->
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="intro-video wow fadeInUp">
                        <img src="{{ asset('images/dc/IMG_3403.jpg') }}" alt="video popop up image">
                        <div class="video-pop-up-content">
                            <a href="https://www.first-colo.net/wp-content/uploads/video-new.mp4" class="xs-video-popup gloosy-btn">
                                <i class="icon icon-play1"></i>
                            </a>
                        </div>
                        <div class="xs-overlay xs-bg-black"></div>
                    </div>
                </div>
            </div>
        </div><!-- .container END -->
    </section><!-- END intro video section -->

    <!-- why choose section -->
    <section class="why-choose-section xs-section-padding xs-bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="xs-heading wow fadeIn">
{{--                        <h2 class="heading-sub-title">Gründe</h2>--}}
                        <h3 class="heading-title">Warum wir uns für's <span>First-Colo</span> entschieden haben.</h3>
                    </div><!-- .xs-heading END -->
                </div>
            </div><!-- .row END -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="why-choose-us-block wow fadeInUp">
                        <div class="choose-us-img">
                            <img src="{{ asset('images/dc/rz1.webp') }}" alt="hostinza hosting image">
                        </div>
                        <h4 class="xs-title">Standort</h4>
                        <p>In Frankfurt am Main befindet sich der größte Internet-Knotenpunkt der Welt, auch DE-CIX genannt. Mehrere Terrabit/s an Daten werden hier innerhalb binnen Sekunde ausgetauscht.</p>
                    </div><!-- .why-choose-us-block END -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="why-choose-us-block wow fadeInUp">
                        <div class="choose-us-img">
                            <img src="{{ asset('images/dc/IMG_1020.jpg') }}" alt="hostinza hosting image">
                        </div>
                        <h4 class="xs-title">99.9% Uptime Guarantee</h4>
                        <p>Share processes and data secure <br> lona need to know basis</p>
                    </div><!-- .why-choose-us-block END -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="why-choose-us-block wow fadeInUp" data-wow-duration="2s">
                        <div class="choose-us-img">
                            <img src="{{ asset('images/dc/IMG_1006.jpg') }}" alt="hostinza hosting image">
                        </div>
                        <h4 class="xs-title">Our Dedicated Support</h4>
                        <p>We finally found a host that truly understood the unique</p>
                    </div><!-- .why-choose-us-block END -->
                </div>
            </div>
        </div><!-- .container END -->
    </section><!-- END why choose section -->

    <!-- office section -->
    <section class="xs-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="xs-heading wow fadeIn">
{{--                        <h2 class="heading-sub-title"></h2>--}}
                        <h3 class="heading-title">Weitere Bilder zur <span>Sicherheit</span>, <span>Netzwerk-Technik</span> & <span>Ausfallsicherheit</span></h3>
                    </div><!-- .xs-heading END -->
                </div>
            </div><!-- .row END -->
            <div class="row">
                <div class="col-md-7 col-lg-4 offset-lg-2">
                    <div class="office-interface-group-content wow fadeInLeft">
                        <img src="{{ asset('images/dc/rz9.webp') }}" alt="office images">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="join-with-us-wraper wow fadeInRight" data-wow-duration="1s">
                        <div class="join-with-us-content">
                            <h2>Sie möchten Ihren Server bei uns im First-Colo unterstellen?</h2>
                            <a href="{{ url('contact-us') }}" class="btn btn-secondary">Jetzt anfragen</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="office-interface-group-content content-1 wow fadeInLeft" data-wow-duration="1.3s">
                        <img src="{{ asset('images/dc/rz17.jpg') }}" alt="office images">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="office-interface-group-content content-2 wow fadeInRight" data-wow-duration="1.5s">
                        <img src="{{ asset('images/dc/IMG_0985.jpg') }}" alt="office images">
                    </div>
                </div>
                <div class="col-md-7 col-lg-5 offset-lg-1">
                    <div class="office-interface-group-content wow fadeInLeft">
                        <img src="{{ asset('images/dc/rz16.jpg') }}" alt="office images">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="office-interface-group-content content-1 wow fadeInLeft" data-wow-duration="1.3s">
                        <img src="{{ asset('images/dc/rz23.jpg') }}" alt="office images">
                    </div>
                </div>
            </div>
            <div class="row">

            </div><!-- .row END -->
        </div><!-- .container END -->
    </section><!-- END office section -->

    <!-- language switcher strart -->
    <!-- xs modal -->
    <div class="zoom-anim-dialog mfp-hide modal-language" id="modal-popup-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="language-content">
                    <p>Switch The Language</p>
                    <ul class="flag-lists">
                        <li><a href="#"><img src="assets/images/flags/006-united-states.svg" alt=""><span>English</span></a></li>
                        <li><a href="#"><img src="assets/images/flags/002-canada.svg" alt=""><span>English</span></a></li>
                        <li><a href="#"><img src="assets/images/flags/003-vietnam.svg" alt=""><span>Vietnamese</span></a></li>
                        <li><a href="#"><img src="assets/images/flags/004-france.svg" alt=""><span>French</span></a></li>
                        <li><a href="#"><img src="assets/images/flags/005-germany.svg" alt=""><span>German</span></a></li>
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
                        <img src="assets/images/blue_logo.png" alt="sidebar logo">
                    </div>
                    <p>Far far away, behind the word moun tains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of  </p>
                    <ul class="sideabr-list-widget">
                        <li>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="assets/images/location.png" alt="">
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
                                    <img src="assets/images/mail.png" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="mailto:info@domain.com">info@domain.com</a>
                                    <span>Online Support</span>
                                </div>
                            </div><!-- address 1 -->
                        </li>
                        <li>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="assets/images/phone.png" alt="">
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

    <!-- team section strart -->
    <section class="xs-section-padding xs-bg-gray xs-team-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="xs-heading wow fadeIn">
                        <h2 class="heading-sub-title">Our Experts</h2>
                        <h3 class="heading-title">MEET <span>OUR TEAM</span></h3>
                    </div><!-- .xs-heading END -->
                </div>
            </div><!-- .row END -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="xs-single-team wow fadeInUp">
                        <img src="assets/images/teams/team-1.jpg" alt="team memeber image">
                        <div class="team-bio">
                            <h4>Dimon Lake</h4>
                            <p>CEO</p>
                        </div>
                        <div class="team-hover-content">
                            <div class="team-bio">
                                <h4>Dimon Lake</h4>
                                <p>CEO</p>
                            </div>
                            <div class="team-description">
                                <p>Share processes an data secure lona need </p>
                            </div>
                            <ul class="simple-social-list list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .team-hover-content END -->
                    </div><!-- .xs-single-team END -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="xs-single-team wow fadeInUp" data-wow-duration="1s">
                        <img src="assets/images/teams/team-2.jpg" alt="team memeber image">
                        <div class="team-bio">
                            <h4>Lara Kein</h4>
                            <p>HR Head</p>
                        </div>
                        <div class="team-hover-content">
                            <div class="team-bio">
                                <h4>Lara Kein</h4>
                                <p>HR Head</p>
                            </div>
                            <div class="team-description">
                                <p>Share processes an data secure lona need </p>
                            </div>
                            <ul class="simple-social-list list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .team-hover-content END -->
                    </div><!-- .xs-single-team END -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="xs-single-team wow fadeInUp" data-wow-duration="1.3s">
                        <img src="assets/images/teams/team-3.jpg" alt="team memeber image">
                        <div class="team-bio">
                            <h4>James Carter</h4>
                            <p>Marketing manager</p>
                        </div>
                        <div class="team-hover-content">
                            <div class="team-bio">
                                <h4>James Carter</h4>
                                <p>Marketing manager</p>
                            </div>
                            <div class="team-description">
                                <p>Share processes an data secure lona need </p>
                            </div>
                            <ul class="simple-social-list list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .team-hover-content END -->
                    </div><!-- .xs-single-team END -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="xs-single-team wow fadeInUp" data-wow-duration="1.6s">
                        <img src="assets/images/teams/team-4.jpg" alt="team memeber image">
                        <div class="team-bio">
                            <h4>Lina Ketty</h4>
                            <p>Head of design</p>
                        </div>
                        <div class="team-hover-content">
                            <div class="team-bio">
                                <h4>Lina Ketty</h4>
                                <p>Head of design</p>
                            </div>
                            <div class="team-description">
                                <p>Share processes an data secure lona need </p>
                            </div>
                            <ul class="simple-social-list list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .team-hover-content END -->
                    </div><!-- .xs-single-team END -->
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </section><!-- END team section -->
@endsection
