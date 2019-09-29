
@php($activityLogType = $activityLog->activityLogType()->first())
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Aktionübersicht #{{ $activityLog->id }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <b>Status: <small>{{ $activityLog->state }}</small></b><br>
            <b>Ausführung: <small>{{ $activityLog->created_at }}</small></b><br><br>

            <b>Details:</b>
            <small>
                <ul class="small pl-4 mb-0">
                    <li>
                        Agent: {{ $activityLog->payload->agent }}
                    </li>
                    <li>
                        IPv4: {{ $activityLog->payload->ip }}
                    </li>
                    <li>
                        Ajax: {{ $activityLog->payload->ajax ? 'Ja' : 'Nein' }}
                    </li>
                    <li>
                        Uri: {{ $activityLog->payload->uri }}
                    </li>
                </ul>
            </small>
            <br>
            @if (!empty($activityLog->payload->request))
                <b>Parameter:</b>

                <small>
                    @foreach($activityLog->payload->request as $value => $item)
                        <li>
                            @if ($value == 'password' || $value == 'password_confirmation')
                                {{ $value.': '}}<strong>Passwörter werden aus sicherheitsgründen nicht gespeichert.</strong>
                            @else
                                {{ $value.': '.$item }}
                            @endif
                        </li>
                    @endforeach
                </small>
            @endif
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Schließen</button>
        </div>
    </div>
</div>
