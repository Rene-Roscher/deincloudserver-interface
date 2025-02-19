@extends('layouts.app')

@section('content')

    <div class="xs-banner inner-banner contet-to-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="xs-banner-content">
                        <h2 class="banner-title wow fadeInLeft" data-wow-duration="1.5s">Registrierung</h2>
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
                        <h2 class="heading-sub-title">Regestriere dich mit deinen Daten.</h2>
                        <h3 class="heading-title">Benutzer <span>registrieren</span></h3>
                    </div>
                </div>
            </div>
            <form action="{{ route('register') }}" method="post" class="xs-form">
                @csrf

                <ul class="nav nav-tabs main-nav-tab tab-swipe" role="tablist">
                    <li>
                        <a id="monthly-tab" class="@if(old('account_type', 'PRIVATE') == 'PRIVATE') isActive active show @endif" data-toggle="tab" href="#private" onclick="$('#account_type').attr('value', 'PRIVATE');">Privat</a>
                    </li>
                    <li>
                        <a id="yearly-tab" class="@if(old('account_type', 'PRIVATE') == 'COMPANY') isActive active show @endif" data-toggle="tab" href="#company" onclick="$('#account_type').attr('value', 'COMPANY');" class="">Business</a>
                    </li>
                    <li class="indicator" style="left: 5px; width: 125px;"></li>
                </ul>

                <div class="row">
                    <div class="col-md-12 mx-auto">

                        <input name="account_type" id="account_type" value="{{ old('account_type', 'PRIVATE') }}" hidden>

                        <div id="registration" class="form-group">
                            <div class="tab-content">
                                <div class="tab-pane fadeIn animated @if(old('account_type', 'PRIVATE') == 'PRIVATE') show active @endif" id="private"></div>
                                <div class="tab-pane fadeIn animated @if(old('account_type', 'PRIVATE') == 'COMPANY') show active @endif" id="company">
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            @error('company_name'){{ $message }}@enderror
                                            <input type="text" class="form-control" name="company_name" placeholder="Firmenname" value="{{ old('company_name') }}" required>
                                        </div>
                                        <div class="col-md-4">
                                            @error('company_contact'){{ $message }}@enderror
                                            <input type="text" class="form-control" name="company_contact" placeholder="Kontaktperson" value="{{ old('company_contact') }}" required>
                                        </div>
                                        <div class="col-md-4">
                                            @error('company_ustid'){{ $message }}@enderror
                                            <input type="text" class="form-control" name="company_ustid" placeholder="UstId" value="{{ old('company_ustid') }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2">
                                    @error('salutation'){{ $message }}@enderror
                                    <label for="salutation"></label><select class="form-control" name="salutation" id="salutation">
                                        <option value="MALE" @if(old('salutation') == 'MALE') selected @endif>Herr</option>
                                        <option @if(old('salutation') == 'FEMALE') selected @endif value="FEMALE">Frau</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    @error('first_name'){{ $message }}@enderror
                                    <input type="text" class="form-control" name="first_name" placeholder="Vorname" value="{{ old('first_name') }}" required>
                                </div>
                                <div class="col-md-5">
                                    @error('last_name'){{ $message }}@enderror
                                    <input type="text" class="form-control" name="last_name" placeholder="Nachname" value="{{ old('last_name') }}" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    @error('email'){{ $message }}@enderror
                                    <input type="email" class="form-control" name="email" placeholder="E-Mail" value="{{ old('email') }}" required>
                                </div>
                                <div class="col-md-4">
                                    @error('birthday'){{ $message }}@enderror
                                    <input type="date" class="form-control" name="birthday" placeholder="Geburtsdatum" value="{{ old('birthday') }}" required>
                                </div>
                                <div class="col-md-4">
                                    @error('phone_number'){{ $message }}@enderror
                                    <input type="tel" class="form-control" name="phone_number" placeholder="Handynummer (+490000000000)" value="{{ old('phone_number') }}" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    @error('password'){{ $message }}@enderror
                                    <input type="password" class="form-control" name="password" placeholder="Passwort" value="{{ old('password') }}" required>
                                </div>
                                <div class="col-md-6">
                                    @error('password_confirmation'){{ $message }}@enderror
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Passwort wiederholen" value="{{ old('password_confirmation') }}" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    @error('street'){{ $message }}@enderror
                                    <input type="text" class="form-control" name="street" placeholder="Straße" value="{{ old('street') }}" required>
                                </div>
                                <div class="col-md-3">
                                    @error('house_number'){{ $message }}@enderror
                                    <input type="text" class="form-control" name="house_number" placeholder="Hausnummer" value="{{ old('house_number') }}" required>
                                </div>
                                <div class="col-md-3">
                                    @error('postcode'){{ $message }}@enderror
                                    <input type="text" class="form-control" name="postcode" placeholder="Postleizahl" value="{{ old('postcode') }}" required>
                                </div>
                                <div class="col-md-3">
                                    @error('city'){{ $message }}@enderror
                                    <input type="text" class="form-control" name="city" placeholder="Stadt" value="{{ old('city') }}" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    @error('region'){{ $message }}@enderror
                                    <input type="text" class="form-control" name="region" placeholder="Bundesland" value="{{ old('region') }}" required>
                                </div>
                                <div class="col-md-6">
                                    @error('country'){{ $message }}@enderror
                                    <input type="text" class="form-control" name="country" placeholder="Land" value="{{ old('country') }}" required>
                                </div>
                            </div>
                            <br>
                            <div class="xs-btn-wraper">
                                <input type="submit" class="btn btn-primary" value="Registrieren" autocomplete="off">
                            </div>
                            <p class="form-info">Bereits regestriert?  <a href="{{ route('login') }}">Anmelden</a></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <style>
        input[type="date"]::-webkit-clear-button {
            display: none;
        }

        /* Removes the spin button */
        input[type="date"]::-webkit-inner-spin-button {
            display: none;
        }

        /* A few custom styles for date inputs */
        input[type="date"] {
            appearance: none;
            -webkit-appearance: none;
            color: #95a5a6;
            font-family: "Helvetica", arial, sans-serif;
            font-size: 18px;
            border:1px solid #ecf0f1;
            background:#ecf0f1;
            padding:5px;
            display: inline-block !important;
            visibility: visible !important;
        }
    </style>
@endsection
