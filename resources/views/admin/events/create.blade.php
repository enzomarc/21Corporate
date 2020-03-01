@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                <div class="row" style="display:flex; justify-content: center; align-items: center;">
                    <div class="col-sm-10">
                        <h3>Ajout d'un evènement</h3>
                        <h4>Remplissez les informations concernant l'evènement puis cliquez sur <b>Ajouter</b>.</h4>
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ route('events.index') }}" class="btn btn-lg btn-primary btn-icon">
                            Liste des evènements
                            <i class="entypo-list"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    Informations sur l'evènement
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                </div>
            </div>

            <div class="panel-body">

                <form role="form" id="event-form" class="form-horizontal form-groups-bordered" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="title" class="col-sm-3 control-label">Titre de l'evènement *</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="title" id="title" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="image" class="col-sm-3 control-label">Image de l'evènement</label>

                        <div class="col-sm-5">
                            <input type="file" class="form-control" name="image" id="image" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="start_date" class="col-sm-3 control-label">Date de début *</label>

                        <div class="col-sm-5">
                            <input type="date" class="form-control" name="start_date" id="start_date">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="end_date" class="col-sm-3 control-label">Date de fin</label>

                        <div class="col-sm-5">
                            <input type="date" class="form-control" name="end_date" id="end_date">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="profile" class="col-sm-3 control-label">Description de l'evènement</label>

                        <div class="col-sm-5">
                            <textarea class="form-control autogrow" id="description" name="description" placeholder="Décrivez l'evènement de manière explicite (Ex: Lieu, Programme, Invités...)" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal; height: 98px;"></textarea>
                        </div>
                    </div>

                </form>

            </div>

        </div>
    </div>

    <div class="row footer" style="display: flex; justify-content: flex-end; padding: 0 20px 40px 0">
        <button class="btn btn-success btn-lg btn-icon" id="submit">
            Ajouter
            <i class="entypo-plus"></i>
        </button>
    </div>

@stop

@section('script')
    <script>
        function clearFields() {
            $('#title').val('');
            $('#start_date').val('');
            $('#end_date').val('');
            $('#description').val('');
            $('#image').val('');
        }

        $('#submit').click(() => {
            const form = $('#event-form')[0];
            const data = new FormData(form);

            $.ajax({
                url: "{{ route('events.store') }}",
                method: "POST",
                data: data,
                contentType: false,
                processData: false,
                success: (response) => {
                    toastr.success(response.message, 'Evènement créé');
                    clearFields();
                },
                error: (response) => {
                    console.log(response);
                    toastr.error(response.responseJSON.message, 'Erreur');
                }
            });
        });
    </script>
@stop