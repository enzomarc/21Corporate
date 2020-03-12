@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                <div class="row" style="display:flex; justify-content: center; align-items: center;">
                    <div class="col-sm-10">
                        <h3>Evènements</h3>
                        <h4>C'est ici que vous programmez les evènements auxquels vous participerez. Les visiteurs pourront ensuite s'enregistrer.</h4>
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ route('events.create') }}" class="btn btn-lg btn-primary btn-icon">
                            Créer un evènement
                            <i class="entypo-plus-squared"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Titre de l'evènement</th>
            <th>Date de début</th>
            <th>Date de fin</th>
            <th>Participant(s)</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td>{{ $event->id }}</td>
                    <td>{{ $event->title }}</td>
                    <td>{{ date('d/m/Y', strtotime($event->start_date)) }}</td>
                    <td>{{ date('d/m/Y', strtotime($event->end_date)) }}</td>
                    <td>{{ $event->subscriptions }}</td>
                    <td>
                        <a href="{{ route('events.edit', ['event' => $event]) }}" class="btn btn-sm btn-primary btn-icon">
                            Modifier
                            <i class="entypo-pencil"></i>
                        </a>
                        <button type="button" data-event="{{ $event->id }}" class="btn btn-sm btn-red btn-icon delete-btn">
                            Supprimer
                            <i class="entypo-cancel"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop

@section('css')
    <link rel="stylesheet" href="/assets/js/datatables/datatables.css">
    <link rel="stylesheet" href="/assets/js/select2/select2-bootstrap.css">
    <link rel="stylesheet" href="/assets/js/select2/select2.css">
@stop

@section('script')
    <script src="/assets/js/datatables/datatables.js"></script>
    <script src="/assets/js/select2/select2.min.js"></script>
    <script src="/assets/js/jquery.inputmask.bundle.js"></script>

    <script>
        const table = $('table');

        const initialize = function () {
            table.dataTable({
                "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Tout"]],
                "bStateSave": true
            });

            table.closest('.dataTables_wrapper').find('select').select2({
                minimumResultsForSearch: -1
            });
        };

        initialize();

        $('.delete-btn').click(function () {
            const event = $(this)[0].dataset['event'];
            const parent = $(this).parent().parent();

            $.ajax({
                url: '/admin/events/' + event,
                method: "DELETE",
                data: {_token: "{{ csrf_token() }}"},
                success: function (response) {
                    toastr.success(response.message, 'Evènement supprimé');
                    parent.fadeOut(300);
                },
                error: function (response) {
                    toastr.error(response.responseJSON.message, 'Erreur');
                    console.log(response);
                }
            });
        });
    </script>
@stop