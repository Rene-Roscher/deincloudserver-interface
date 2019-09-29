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
                        <h4 class="xs-title">99.9% Uptime garantiert</h4>
                        <p>Wir können Ihnen eine Uptime von 99,9% anbieten,<br> dass entspricht im Jahr eine Downtime von max. 8 Stunden, 45 Minuten & 57 Sekunden.</p>
                    </div><!-- .why-choose-us-block END -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="why-choose-us-block wow fadeInUp" data-wow-duration="2s">
                        <div class="choose-us-img">
                            <img src="{{ asset('images/dc/IMG_1006.jpg') }}" alt="hostinza hosting image">
                        </div>
                        <h4 class="xs-title">Colocation</h4>
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
@endsection
