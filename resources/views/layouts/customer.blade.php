<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>{{ config('app.name', '404') }}</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/datatables.min.css"/>

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('backend/fonts/feather/feather.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/libs/highlight.js/styles/vs2015.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/libs/quill/dist/quill.core.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/libs/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/libs/flatpickr/dist/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/own.css') }}">
    {{--    <link rel="stylesheet" href="{{ asset('backend/css/rangeSlider.css') }}">--}}
    {{--    <script src="{{ asset('backend/js/rangeSlider.js') }}"></script>--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Theme CSS -->
    {{--<link rel="stylesheet" href="{{ asset('backend/css/theme.min.css') }}" id="stylesheetLight">--}}
    <link rel="stylesheet" href="{{ asset('backend/css/theme-dark.min.css') }}" id="stylesheetDark">

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"/>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- C S R F TOKEN -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--Plugin CSS file with desired skin-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css"/>

    <!--jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!--Plugin JavaScript file-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>
</head>

<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
</script>

<body style="display: block">
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
    <div class="container-fluid">

        <a class="navbar-brand" href="{{ url('/') }}">
            DeinCloudServerDE
        </a>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">

            <!-- Navigation -->
            <ul class="navbar-nav mb-md-4">
                <li class="nav-item">
                    <a class="nav-link {{ \Illuminate\Support\Str::startsWith(\Illuminate\Support\Facades\Route::currentRouteName(), 'customer.dashboard') ? 'active' : '' }} " href="{{ route('customer.dashboard') }}">
                        <i class="fe fe-home"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('customer.dashboard') }}">
                        <i class="fe fe-git-branch"></i> Bots <span class="badge badge-primary ml-auto">0</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @isonroute('{{ Route::currentRouteName() }}', 'customer.dashboard') " href="{{ route('customer.dashboard') }}">
                        <i class="fe fe-git-branch"></i> Streams <span class="badge badge-primary ml-auto">0</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @isonroute('{{ Route::currentRouteName() }}', 'customer.dashboard') " href="{{ route('customer.dashboard') }}">
                        <i class="fe fe-terminal"></i> Instanzen <span class="badge badge-primary ml-auto">0</span>
                    </a>
                </li>
            </ul>
            <!-- Push content down -->
            @if(auth()->user()->hasRole('ADMIN'))
                <hr class="navbar-divider my-3">
                <h6 class="navbar-heading">
                    Administration
                </h6>
            @endif
            <div class="mt-auto"></div>



            <!-- User (md) -->
            <div class="navbar-user d-none d-md-flex" id="sidebarUser">

                <!-- Icon -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>

                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="navbar-user-link" data-toggle="modal">
                    <span class="icon">
                        <i class="fe fe-log-out"></i>
                    </span>
                </a>

                <!-- Dropup -->
                <div class="dropup">

                    <!-- Toggle -->
                    <a class="dropdown-toggle"
                       aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-sm avatar-online">
                            <img src="https://api.adorable.io/avatars/50/{{ auth()->user()->getAuthIdentifierName() }}" class="avatar-img rounded-circle" alt="...">
                        </div>
                    </a>

                </div>

                <!-- Icon -->
                <a href="#sidebarModalActivity" class="navbar-user-link" data-toggle="modal">
                    <span class="icon">
                        <i class="fe fe-settings"></i>
                    </span>
                </a>

            </div>


        </div>
        <!-- / .navbar-collapse -->

    </div>
</nav>

<div class="main-content">

    <div class="header">
        <div class="container-fluid">

            <!-- Body -->
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">
                        @if(session()->has('verified') && session()->remove('verified'))
                            <div class="alert alert-primary alert-heading" role="alert" id="resendedAlert">
                                Sie haben Ihr Konto erfolgreich bestätigt.
                                <small>
                                    <ul class="small pl-4 mb-0">
                                        <li>
                                            Sie können nun Aufladungen & Bestellungen tätigen.
                                        </li>
                                    </ul>
                                </small>
                                <br>
                                <a href="#" class="btn btn-sm btn-outline-white">
                                    Guthaben aufladen
                                </a>
                            </div>
                        @elseif (!auth()->user()->hasVerifiedEmail())
                            <div class="alert alert-primary" role="alert" id="resendedAlert" style="display: none">
                                Ein neuer Bestätigungslink wurde Ihnen an Ihre E-Mail-Adresse gesendet.
                            </div>
                            <div class="alert alert-primary" role="alert" id="unverifedAlert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Konto bestätigung ausstehend!</strong><br>
                                <small>
                                    <ul class="small pl-4 mb-0">
                                        <li>
                                            Bitte überprüfen Sie Ihr E-Mail-Postfach, ob Sie dort eine bestätigungs E-Mail bekommen haben.
                                        </li>
                                    </ul>
                                </small>
                                <br>
                                <button onclick="resendVerificationMail(this);" class="btn btn-sm btn-outline-white">
                                    Bestätigung erneut senden
                                </button>
                            </div>
                        @endif

                        <!-- Pretitle -->
                        <h6 class="header-pretitle">
                            {{ str_replace('/', ' / ', str_replace_first('/', '', str_replace(url('/'), '', request()->fullUrl()))) }}
                        </h6>

                        <!-- Title -->
                        <h1 class="header-title">
                            @yield('title')
                        </h1>

                    </div>
                    <div class="col-auto">

                        <!-- Button -->
                        @yield('actions')

                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .header-body -->

        </div>
    </div>

    @yield('content')

    <div id="ajaxModal" class="modal fadeIn" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            </div>
        </div>
    </div>

</div>


</body>

@if (count($errors) > 0)
    <script>
        toastr.error('@foreach ($errors->all() as $error) {{ $error }} @endforeach')
    </script>
@endif

@if (\Illuminate\Support\Facades\Session::has('success'))
    <script>
        toastr.success("{!! \Illuminate\Support\Facades\Session::get('success') !!}")
    </script>
@endif

<!-- Libs JS -->
<script src="{{ asset('backend/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('backend/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/libs/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('backend/libs/highlightjs/highlight.pack.min.js') }}"></script>
<script src="{{ asset('backend/libs/flatpickr/dist/flatpickr.min.js') }}"></script>
<script src="{{ asset('backend/libs/jquery-mask-plugin/dist/jquery.mask.min.js') }}"></script>
<script src="{{ asset('backend/libs/list.js/dist/list.min.js') }}"></script>
<script src="{{ asset('backend/libs/quill/dist/quill.min.js') }}"></script>
<script src="{{ asset('backend/libs/dropzone/dist/min/dropzone.min.js') }}"></script>
<script src="{{ asset('backend/libs/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('backend/libs/chart.js/Chart.extension.min.js') }}"></script>
<script src="{{ asset('backend/js/theme.min.js') }}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/datatables.min.js"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
    });
    function resendVerificationMail(btn) {
        $(btn).html('<i class="fa fa-spinner fa-spin"></i> Versenden...');
        $(btn).attr('disabled', 'disabled');
        $.ajax({
            type: 'GET',
            url: '{{ route('verification.resend') }}',
            complete: function (data) {
                $("#unverifedAlert").fadeOut();
                setTimeout(function () {
                    $("#resendedAlert").fadeIn();
                }, 600)
            },
            error: function (data) {
            }
        });
    }
</script>

@yield('scripts')

</html>
