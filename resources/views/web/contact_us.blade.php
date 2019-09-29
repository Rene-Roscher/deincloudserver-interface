@extends('layouts.app')

@section('content')
    <div class="xs-banner inner-banner contet-to-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="xs-banner-content">
                        <h1 class="banner-sub-title wow fadeInLeft">Contact us</h1>
                        <h2 class="banner-title wow fadeInLeft" data-wow-duration="1.5s">GET IN TOUCH</h2>
                    </div><!-- .xs-banner-content END -->
                </div>
                <div class="col-lg-6 align-self-end">
                    <div class="inner-welcome-image-group ">
                        <img src="assets/images/innerWelcome/contact-bg.png" alt="hosting image">
                        <img src="assets/images/innerWelcome/phone.png" class="banner-ico banner-ico-1" alt="phone icon">
                        <img src="assets/images/innerWelcome/plane.png" class="banner-ico banner-ico-2" alt="phone icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcumb end here--><!-- End banner section -->

    <!-- contact info section -->
    <section class="xs-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="xs-heading wow fadeIn">
                        <h2 class="heading-sub-title">Find us</h2>
                        <h3 class="heading-title">CONTACT <span>WITH US</span></h3>
                    </div><!-- .xs-heading END -->
                </div>
            </div><!-- .row END -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-group wow fadeInUp">
                        <div class="contact-info-icon">
                            <i class="fa fa-microphone fa-fw fa-4x"></i>
                        </div>
                        <h4 class="xs-title"><a href="#">TeamSpeak³ Support</a></h4>
                        <span class="text-muted">Mo. - Fr. von 14:00 bis 22:30 & Sam. 16:30 bis 20:30 Uhr</span>
                        <a class="text-center" href="ts3server://dcs">ts.deincloudserver.de</a>
                    </div><!-- .contact-info-group END -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-group wow fadeInUp active" data-wow-duration="1.5s">
                        <div class="contact-info-icon">
                            <i class="fa fa-whatsapp fa-fw fa-5x"></i>
                        </div>
                        <h4 class="xs-title"><a href="#">Make a Call</a></h4>
                        <span>009-215-5596 (toll free)</span>
                        <span>009-215-5595</span>
                    </div><!-- .contact-info-group END -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-group wow fadeInUp" data-wow-duration="2s">
                        <div class="contact-info-icon">
                            <i class="fa fa-envelope-o fa-fw fa-5x"></i>
                        </div>
                        <h4 class="xs-title"><a href="#">Send Mail</a></h4>
                        <a href="mailto:contact@example.com">contact@example.com</a>
                        <a href="mailto:info@example.com">info@example.com</a>
                    </div><!-- .contact-info-group END -->
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </section><!-- END contact info section -->

    <!-- contact form section -->
    <section class="xs-section-padding xs-bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="xs-heading wow fadeIn">
                        <h2 class="heading-sub-title">Habe Sie eine Frage?</h2>
                        <h3 class="heading-title">Teilen Sie uns Ihre <span>Frage</span> mit.</h3>
                    </div><!-- .xs-heading END -->
                </div>
            </div><!-- .row END -->
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="xs-form-group wow fadeInUp">
                        <form action="{{ route('contact_us.send') }}" method="POST" id="" class="xs-form">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name">
                                <input type="email" class="form-control" name="email" placeholder="E-Mail">
                                <input type="text" class="form-control" name="company_name" placeholder="Unternehmen (optional)">
                                <textarea name="message" placeholder="Ihre Frage...." class="form-control" cols="30" rows="10"></textarea>
                            </div>
                            <div class="xs-btn-wraper">
                                <input type="submit" class="btn btn-primary" value="Unverbindlich anfragen">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- .container END -->
    </section><!-- END contact form section -->
@endsection
