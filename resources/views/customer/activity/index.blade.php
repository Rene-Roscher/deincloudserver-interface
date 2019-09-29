@extends('layouts.customer')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xl-12">

                <!-- Goals -->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Aktionsübersicht
                                </h4>

                            </div>
                            <div class="col-auto">
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="table-responsive">
                        <div style="margin: 2em">
                            <table class="table" id="table">
                                <thead>
                                <tr>
                                    <th scope="col">
                                        <a href="#" class="text-muted">#</a>
                                    </th>
                                    <th scope="col">
                                        <a href="#" class="text-muted">Beschreibung</a>
                                    </th>
                                    <th scope="col">
                                        <a href="#" class="text-muted">IPv4</a>
                                    </th>
                                    <th scope="col">
                                        <a href="#" class="text-muted">Status</a>
                                    </th>
                                    <th scope="col">
                                        <a href="#" class="text-muted">Erstelldatum</a>
                                    </th>
                                    <th scope="col">
                                        <a href="#" class="text-muted">Aktionen</a>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach($activities as $activity)
                                        <tr>
                                            <td>{{ $activity->id }}</td>
                                            <td>{{ $activity->activityLogType->title }}</td>
                                            <td>{{ isset($activity->payload->ip) ? $activity->payload->ip : '0.0.0.0' }}</td>
                                            <td>{{ $activity->state }}</td>
                                            <td>{{ $activity->created_at->format('d.m.Y H:i:s') }}</td>
                                            <td>
                                                <button onclick="loadActivityDetails('{{ $activity->id }}')" class="btn btn-sm btn-white" type="button">Details</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $(document).ready( function () {
            $("#table").DataTable({
                language: {
                    url: "{{ asset('datatables/language.json') }}",
                },
                aaSorting: [[0, 'desc']],
            });
        } );

        function loadActivityDetails(id) {
            $.ajax({
                type: 'get',
                dataType: 'json',
                url: 'activities/' + id + '/detailsModal',
                // data: {
                //     activity_id: id,
                // },
                success: function(data) {
                    // $('#myModal').modal('show');
                    $('.modal').empty().append(data.payload).fadeIn().modal();
                },
                error: function(xhr, textStatus, thrownError) {
                    alert(xhr.status);
                }
            });
        }
    </script>
@endsection
