@extends('layouts.customer')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xl-12">

                <div class="row">
                    <div class="col-12 col-lg-6 col-xl">

                    <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">

                                        <!-- Title -->
                                        <h6 class="card-title text-uppercase text-muted mb-2">
                                            Bots
                                        </h6>

                                        <!-- Heading -->
                                        <span class="h2 mb-0">
                                            {{ 'x/x' }}
                                        </span>

                                    </div>
                                    <div class="col-auto">

                                        <!-- Icon -->
                                        <span class="h1 fe fe-monitor text-muted mb-0"></span>

                                    </div>
                                </div> <!-- / .row -->

                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-lg-6 col-xl">

                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">

                                        <!-- Title -->
                                        <h6 class="card-title text-uppercase text-muted mb-2">
                                            Preis
                                        </h6>

                                        <!-- Heading -->
                                        <span class="h2 mb-0">
                                            {{ 52 / 60 }} €
                                        </span>

                                    </div>
                                    <div class="col-auto">

                                        <!-- Icon -->
                                        <span class="h2 fe fe-briefcase text-muted mb-0"></span>

                                    </div>
                                </div> <!-- / .row -->

                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-lg-6 col-xl">

                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">

                                        <!-- Title -->
                                        <h6 class="card-title text-uppercase text-muted mb-2">
                                            Bot-Auslastung
                                        </h6>

                                        <div class="row align-items-center no-gutters">
                                            <div class="col-auto">

                                                <!-- Heading -->
                                                <span class="h2 mr-2 mb-0">{{ 0 }}%</span>

                                            </div>
                                            <div class="col">

                                                <!-- Progress -->
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar" role="progressbar" style="width: {{ 0 }}%" aria-valuenow="{{ 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                            </div>
                                        </div> <!-- / .row -->

                                    </div>
                                    <div class="col-auto">

                                        <!-- Icon -->
                                        <span class="h2 fe fe-clipboard text-muted mb-0"></span>

                                    </div>
                                </div> <!-- / .row -->

                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-lg-6 col-xl">

                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">

                                        <!-- Title -->
                                        <h6 class="card-title text-uppercase text-muted mb-2">
                                            Speicher-Auslastung
                                        </h6>

                                        <div class="row align-items-center no-gutters">
                                            <div class="col-auto">

                                                <!-- Heading -->
                                                <span class="h2 mr-2 mb-0">{{ 0 }}%</span>

                                            </div>
                                            <div class="col">

                                                <!-- Progress -->
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar" role="progressbar" style="width: {{ 0 }}%" aria-valuenow="{{ 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                            </div>
                                        </div> <!-- / .row -->

                                    </div>
                                    <div class="col-auto">

                                        <!-- Icon -->
                                        <span class="h2 fe fe-clock text-muted mb-0"></span>

                                    </div>
                                </div> <!-- / .row -->

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">

                        <form>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Vorname</label>
                                    <input class="form-control" value="@user(first_name)" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Nachname</label>
                                    <input class="form-control" value="@user(last_name)" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Anrede</label>
                                    <select class="form-control" readonly>
                                        @foreach(['MALE' => 'Herr', 'FEMALE' => 'Frau'] as $key => $value)
                                            <option value="{{ $key }}" @if(auth()->user()->salutation == $key) selected @endif readonly>{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Geburtstag</label>
                                    <input type="text" class="form-control" placeholder="Flatpickr example" data-toggle="flatpickr">
{{--                                    <input type="daste" class="form-control" value="{{ auth()->user()->birthday->format('d.m.Y') }}">--}}
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Zur bearbeitung</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('.openPopup').on('click',function(){
                var dataURL = $(this).attr('data-href');
                $('.modal-body').load(dataURL,function(){
                    $('#myModal').modal({show:true});
                });
            });
        });
    </script>
@endsection
