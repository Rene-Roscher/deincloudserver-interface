@extends('layouts.app')

@section('header-title', 'Startseite')

@section('content')
    <!-- banner section -->
    <section class="xs-banner banner-v3 contet-to-center">
        <div class="container">
            <div class="row">
                <div class="col-md-7 align-self-center">
                    <div class="xs-banner-content">
                        <h1 class="banner-title wow fadeInLeft">DeinCloudServer</h1>
                        <p class="banner-sub-title wow fadeInUp" data-wow-duration="1.5s">  - <span id="subtitle"></span></p>
                        <div class="xs-btn-wraper wow fadeInUp" data-wow-duration="1.7s">
                            <a href="{{ url('/register') }}" class="btn btn-primary">Noch nicht regestriert?</a>
                        </div>
                    </div><!-- .xs-banner-content END -->
                </div>
                <div class="col-md-5">
                    <div class="xs-banner-image wow fadeInRight">
                        <img src="{{ asset('images/welcome/banner_image-2.png') }}" data-parallax='{"y": 150}' alt="#">
                    </div>
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </section><!-- End banner section -->
    <!-- why choose section -->
    <section class="why-choose-section xs-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="xs-heading wow fadeIn">
                        <h2 class="heading-sub-title wow fadeInDown">Warum</h2>
                        <h3 class="heading-title"><span>DeinCloudServer?</span></h3>
                    </div><!-- .xs-heading END -->
                </div>
            </div><!-- .row END -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="why-choose-us-block wow fadeInUp">
                        <div class="choose-us-img">
                            <img src="{{ asset('images/chooseUs/choose-us-1.png') }}" alt="#">
                        </div>
                        <h4 class="xs-title">Unsere Verfügbarkeit @version()</h4>
                        <p>Dank unseren exzellenten dauerhaften <a href="{{ url('ddos-protection') }}">DDoS-Schutz</a> des <a href="https://www.first-colo.net/" target="_blank">First-Colo's</a>, können wir Ihnen eine Mindestverfügbarkeit von 99% garantieren.</p>
                    </div><!-- .why-choose-us-block END -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="why-choose-us-block wow fadeInUp" data-wow-duration="1.5s">
                        <div class="choose-us-img">
                            <img src="{{ asset('images/chooseUs/choose-us-2.png') }}" alt="#">
                        </div>
                        <h4 class="xs-title">100% Prepaid</h4>
                        <p>Dank eines Prepaidsystems sind Sie an keinerlei Verträge oder Sonstigen gebunden.</p>
                    </div><!-- .why-choose-us-block END -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="why-choose-us-block" data-wow-duration="2s">
                        <div class="choose-us-img">
                            <img src="{{ asset('images/chooseUs/choose-us-3.png') }}" alt="#">
                        </div>
                        <h4 class="xs-title">Unser engagierter Support</h4>
                        <p>Wir haben für verschiedene Kategorien ein Spezialisiertes Supporter Team, was Ihnen bei Fragen oder Problemen weiter helfen kann.</p>
                    </div><!-- .why-choose-us-block END -->
                </div>
            </div>
        </div><!-- .container END -->
    </section><!-- END why choose section -->

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
                            <h2 class="content-title">Unsere Qualitäten & Hardware</h2>
                            <p>Unsere Serversysteme stammen von Supermicro und den aktuellen besten Standards. Bei den CPUs setzten wir ganz auf die E5 & E3 Serie der <a href="https://www.intel.de/content/www/de/de/products/processors/xeon.html">Intel Xeon Prozessoren</a>.</p>
                            <h5 class="content-title">Kapazitäten eines Nodes</h5>
                            <ul class="xs-list check">
                                <li> - CPU: 2x E5-2680v2 (40th | 3,6GHz)</li>
                                <li> - Arbeitsspeicher: 256 GB (16x16) Samsung DDR3 ECC</li>
                                <li> - Speicher: 4x 1TB Samsung 860 EVO <b>(SSD | Raid 5)</b></li>
                                <li> - Netzwerk: 2x 1GBit/s Uplink <b>(Redundanz)</b></li>
                            </ul>
                            <a href="{{ url('/server-hardware') }}" class="btn btn-primary">Mehr erfahren</a>
                        </div>
                    </div><!-- .hosting-info-wraper END -->
                </div>
            </div><!-- .row END -->
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="hosting-info-wraper-2 wow fadeInLeft" data-wow-duration="1.5s">
                        <h2 class="content-title">Standort & Erreichbarkeit</h2>
                        <div class="media hosting-info-list">
                            <div class="d-flex info-icon">
                                <img src="{{ asset('images/info/gaurd-icon.png') }}" alt="hosting info icon">
                            </div>
                            <div class="media-body">
                                <h4 class="xs-title small">DDoS-Schutz</h4>
                                <p>Unser DDoS-Schutz des <a href="https://first-colo.net/">First-Colo's</a> kann eine Bandbreite von bis zu 550 GBit/s problemlos filtern.</p>
                            </div>
                        </div><!-- .hosting-info-list END -->
                        <div class="media hosting-info-list">
                            <div class="d-flex info-icon">
                                <img src="{{ asset('images/info/cloud-icon.png') }}" alt="hosting info icon">
                            </div>
                            <div class="media-body">
                                <h4 class="xs-title small">Anbindung</h4>
                                <p>All unsere Nodes sind mit mindestens 2x 1 Gbit/s angebunden.</p>
                            </div>
                        </div><!-- .hosting-info-list END -->
                        <div class="media hosting-info-list">
                            <div class="d-flex info-icon">
                                <img src="{{ asset('images/info/clock-icon.png') }}" alt="hosting info icon">
                            </div>
                            <div class="media-body">
                                <h4 class="xs-title small">Netzwerk</h4>
                                <p>Durch hochwertige Router, Switches & eines gut gewählten Standortes, ist das Netzwerk einfach nahe zu perfekt in <a>Frankfurt am Main</a>.</p>
                            </div>
                        </div><!-- .hosting-info-list END -->
                        <a href="{{ url('data-center') }}" class="btn btn-primary">Zum Rechenzentrum</a>
                    </div><!-- .hosting-info-wraper-2 END -->
                </div>
                <div class="col-lg-6">
                    <div class="hosting-info-img wow fadeInRight" data-wow-duration="2s">
                        <img src="{{ asset('images/info/info-img-2.png') }}" alt="#">
                    </div>
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </section><!-- END hosting info section -->

    <!-- testimonial section -->
    <!-- blog section -->
    <section class="xs-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="xs-heading wow fadeIn">
                        <h2 class="heading-sub-title">Letzte Beiträge</h2>
                        <h3 class="heading-title">Immmer auf dem neusten Stand<span>!</span></h3>
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

@endsection

@section('scripts')
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
@endsection
