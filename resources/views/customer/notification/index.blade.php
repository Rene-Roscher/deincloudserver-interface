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
                                    Benachrichtigungssystem (1/5)
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
                                        <a href="#" class="text-muted">Provider</a>
                                    </th>
                                    <th scope="col">
                                        <a href="#" class="text-muted">Status</a>
                                    </th>
                                    <th scope="col">
                                        <a href="#" class="text-muted">Aktionen</a>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach($notifications as $notification)
                                    <tr id="notificationRow-{{ $notification->id }}">
                                        <td>{{ $notification->id }}</td>
                                        <td>{{ $notification->notificationType->provider }}  </td>
                                        <td>{{ $notification->state }}</td>
                                        <td>
                                            <button onclick="" class="btn btn-sm btn-outline-danger" type="button">Details</button>
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
        function cancelSession(btn, id) {
            $(btn).html('<i class="fa fa-spinner fa-spin"></i> Beenden...');
            $("#sessionRow-" + id).fadeOut();
            setTimeout(function () {
                $("#sessionRow-" + id).delete();
                $("#table").DataTable().remove().draw( false );
            }, 1);
        }
        function loadSessionDetails(id) {
            $.ajax({
                type: 'post',
                dataType: 'json',
                url: 'sessions/' + id + '/detailsModal',
                data: {
                    activity_id: id,
                },
                success: function(data) {
                    $('.modal').empty().append(data.payload).fadeIn().modal();
                },
                error: function(xhr, textStatus, thrownError) {
                    alert(xhr.status);
                }
            });
        }
    </script>
@endsection

