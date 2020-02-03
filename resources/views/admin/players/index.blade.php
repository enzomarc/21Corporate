@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                <div class="row" style="display:flex; justify-content: center; align-items: center;">
                    <div class="col-sm-10">
                        <h3>Joueurs</h3>
                        <h4>Sur cette page vous pouvez gérer vos joueurs, de leurs informations personnelles à leurs carrières.</h4>
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ route('players.create') }}" class="btn btn-lg btn-primary btn-icon">
                            Ajouter un joueur
                            <i class="entypo-user-add"></i>
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
            <th>Nom(s) & prénom(s)</th>
            <th>Nationalité</th>
            <th>Poste préféré</th>
            <th>Club actuel</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($players as $player)
            <tr>
                <td>{{ $player->id }}</td>
                <td>{{ $player->first_name . ' ' . $player->last_name }}</td>
                <td>{{ $player->nationality }}</td>
                <td>{{ $player->preferred_position }}</td>
                <td>{{ $player->current_club }}</td>
                <td>
                    <a href="{{ route('players.edit', ['player' => $player]) }}" class="btn btn-sm btn-primary btn-icon">
                        Modifier
                        <i class="entypo-pencil"></i>
                    </a>
                    <button type="button" data-player="{{ $player->id }}" class="btn btn-sm btn-red btn-icon delete-btn">
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
            const player = $(this)[0].dataset['player'];
            const parent = $(this).parent().parent();

            $.ajax({
                url: '/admin/players/' + player,
                method: "DELETE",
                data: {_token: "{{ csrf_token() }}"},
                success: function (response) {
                    toastr.success(response.message, 'Joueur supprimé');
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
