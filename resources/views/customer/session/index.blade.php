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
                                    Aktuelle Sitzungen
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
                                        <a href="#" class="text-muted">IPv4</a>
                                    </th>
                                    <th scope="col">
                                        <a href="#" class="text-muted">Letzte Aktivität</a>
                                    </th>
                                    <th scope="col">
                                        <a href="#" class="text-muted">Aktionen</a>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach($sessions as $session)
                                    <tr id="sessionRow-{{ $session->id }}">
                                        <td>{{ $session->id }} @if(session()->getId() == $session->id) <strong class="text-muted">[Eigene Sitzung]</strong> @endif</td>
                                        <td>{{ $session->ip_address }}  </td>
                                        <td>{{ $session->lastActivity() }}</td>
                                        <td>
{{--                                            <button onclick="loadSessionDetails(this, '{{ $session->id }}')" class="btn btn-sm btn-outline-danger" type="button">Details</button>--}}
                                            <button onclick="cancelSession(this, '{{ $session->id }}')" class="btn btn-sm btn-outline-danger" data-deletable="true" data-id="{{ $session->id }}" type="button">Beenden</button>
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
        var table = null;
        $(document).ready( function () {
            table = $("#table").DataTable({
                language: {
                    url: "{{ asset('datatables/language.json') }}",
                },
                aaSorting: [[0, 'desc']],
            });

            $('#table').on( 'click', 'button', function () {
                var attr = $(this).attr('data-deletable');
                if (typeof attr !== typeof undefined && attr === 'true') {
                    table.row($(this).parents('tr')).remove().draw(false);
                }

            });

        } );
        function cancelSession(btn, id) {


            // $(btn).html('<i class="fa fa-spinner fa-spin"></i> Beenden...');
            // $("#sessionRow-" + id).fadeOut();
            // setTimeout(function () {
            //     $("#sessionRow-" + id).delete();
            //     table.row("#sessionRow-" + id).delete();
            //     // myTable.row( this ).delete();
            // }, 1);


            // $('#table').data.reload();
            // $(btn).attr('disabled', 'disabled');
            // $.ajax({
            //     type: 'GET',
            //     url: 'sessions/' + id + '/destroy',0
            //     complete: function (data) {
            //         if (data.success) {
            //             $("#sessionRow-" + id).wiggle();
            //         } else {
            //             toast.error('Es ist ein Fehler mein löschvorgang aufgetreten.')
            //         }
            //     },
            //     error: function (data) {
            //     }
            // });
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

