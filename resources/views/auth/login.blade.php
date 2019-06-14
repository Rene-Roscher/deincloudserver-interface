@extends('layouts.app')

@section('content')

    <div class="xs-banner inner-banner contet-to-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="xs-banner-content">
                        <h2 class="banner-title wow fadeInLeft" data-wow-duration="1.5s">Benutzer Login</h2>
                    </div>
                </div>
                <div class="col-lg-6 align-self-end">
                    <div class="inner-welcome-image-group signin-icon">
                        <img src="{{ asset('images/innerWelcome/signin.png') }}" alt="hosting image">
                        <img src="{{ asset('images/innerWelcome/man.png') }}" class="banner-ico banner-ico-1" alt="phone icon">
                        <img src="{{ asset('images/innerWelcome/folder.png') }}" class="banner-ico banner-ico-2" alt="phone icon">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="xs-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="xs-heading wow fadeIn">
                        <h2 class="heading-sub-title">Melde dich mit deinem Benutzerkonto an.</h2>
                        <h3 class="heading-title">Benutzer <span>Login</span></h3>
                    </div>
                </div>
            </div>
            <form action="{{ route('login') }}" method="post" class="xs-form">
                @csrf
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="form-group">
                            @error('email')
                            {{ $message }}
                            @enderror
                            <input type="email" class="form-control" name="email" placeholder="E-Mail" value="{{ old('email') }}" required>
                            @error('password')
                            {{ $message }}
                            @enderror
                            <input type="password" class="form-control" name="password" placeholder="Passwort" value="{{ old('password') }}" required>
                            <div class="media justify-content-between">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="remember" autocomplete="off">
                                    <label class="custom-control-label" for="tenInch">Login speichern</label>
                                </div>
                                <div class="forgot-password-wraper">
                                    <a href="{{ route('password.request') }}">Passwort vergessen?</a>
                                </div>
                            </div>
                            <div class="xs-btn-wraper">
                                <input type="submit" class="btn btn-primary" value="Anmelden" autocomplete="off">
                            </div>
                            <p class="form-info">Noch nicht regestriert?  <a href="{{ route('register') }}">Regestrieren</a></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
