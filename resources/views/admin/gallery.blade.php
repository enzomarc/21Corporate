@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                <div class="row" style="display:flex; justify-content: center; align-items: center;">
                    <div class="col-sm-12">
                        <h3>Gallerie</h3>
                        <h4>C'est ici que vous gérez les photos qui sont affichées dans la gallerie sur la page d'accueil.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div style="text-align: right; margin-bottom: 1rem;">
        <button onclick="$('#photo_modal').modal('show');" class="btn btn-primary btn-icon">
            Ajouter une photo
            <i class="entypo-plus-squared"></i>
        </button>
    </div>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Aperçu</th>
            <th>Catégorie</th>
            <th>Auteur</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($photos as $photo)
            <tr>
                <td>{{ $photo->id }}</td>
                <td>
                    <a target="_blank" href="/upload/{{ $photo->path }}">
                        <img style="height: 32px; width: 32px" src="/upload/{{ $photo->path }}" alt="{{ $photo->author }}">
                    </a>
                </td>
                <td>{{ $photo->category ?? 'N/A' }}</td>
                <td>{{ $photo->author ?? 'N/A' }}</td>
                <td>
                    <button type="button" data-photo="{{ $photo->id }}" class="btn btn-sm btn-red btn-icon delete-btn">
                        Supprimer
                        <i class="entypo-cancel"></i>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- Add photo modal -->
    <div class="modal fade" id="photo_modal" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Ajouter une photo</h4>
                </div>

                <form method="post" id="photo_form">
                    <div class="modal-body twelve columns">
                        <div class="row">
                            <div class="col-md-12" style="display: flex; justify-content: center; margin-bottom: 3rem;">
                                <img src="" alt="tmp" id="tmpshot" style="display: none" width="500">
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 1rem">
                            <div class="col-md-12">
                                <input type="file" id="image" name="image" class="form-control" required>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 1rem">
                            <div class="col-md-12">
                                <select name="category" id="category" class="form-control">
                                    <option value="">Choisissez une catégorie</option>
                                    <option value="Inconnue">Inconnue</option>
                                    <option value="Football">Football</option>
                                    <option value="Basketball">Basketball</option>
                                    <option value="Arts martiaux">Arts martiaux</option>
                                    <option value="Boxe">Boxe</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 1rem">
                            <div class="col-md-12">
                                <input type="text" name="author" id="author" class="form-control" placeholder="Auteur de l'image">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-info">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End add photo modal -->
@stop

@section('css')
    <link rel="stylesheet" href="/assets/js/datatables/datatables.css">
    <link rel="stylesheet" href="/assets/js/select2/select2-bootstrap.css">
    <link rel="stylesheet" href="/assets/js/select2/select2.css">
@stop

@section('script')
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
            const photo = $(this)[0].dataset['photo'];
            const parent = $(this).parent().parent();

            $.ajax({
                url: '/admin/gallery/' + photo,
                method: "DELETE",
                data: {_token: "{{ csrf_token() }}"},
                success: function (response) {
                    toastr.success(response.message, 'Photo supprimée');
                    parent.fadeOut(300);
                },
                error: function (response) {
                    toastr.error(response.responseJSON.message, 'Erreur');
                    console.log(response);
                }
            });
        });

        $('#image').change(function () {
            const file = $(this)[0].files[0];
            const reader = new FileReader();

            reader.addEventListener("load", function () {
                $('#tmpshot')[0].src = reader.result;
                $('#tmpshot').fadeIn(300);
            });

            if (file) {
                reader.readAsDataURL(file);
            }
        });

        $('#photo_form').submit((e) => {
            e.preventDefault();
            e.stopPropagation();

            const data = new FormData($('#photo_form')[0]);

            $.ajax({
                url: "{{ route('gallery.store') }}",
                method: "POST",
                contentType: false,
                processData: false,
                data: data,
                success: (response) => {
                    toastr.success(response.message, "Photo ajoutée");
                    $('#photo_modal').modal('hide');

                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                },
                error: (response) => {
                    toastr.error(response.responseJSON.message, 'Erreur');
                    console.log(response);
                    $('#photo_modal').modal('hide');
                }
            });
        });
    </script>
@stop