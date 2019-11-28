@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                <div class="row" style="display:flex; justify-content: center; align-items: center;">
                    <div class="col-sm-10">
                        <h3>Actualités</h3>
                        <h4>Ecrivez des articles sur les évènements en cours. Donnez des nouvelles à vos visiteurs.</h4>
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ route('news.create') }}" class="btn btn-lg btn-primary btn-icon">
                            Ecrire un article
                            <i class="entypo-pencil"></i>
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
                <th>Titre de l'article</th>
                <th>Auteur</th>
                <th>Mots clés</th>
                <th>Publié le</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->author }}</td>
                    <td>{{ $post->tags }}</td>
                    <td>{{ date('d/m/Y', strtotime($post->created_at)) }}</td>
                    <td>
                        <a href="{{ route('news.edit', ['news' => $post]) }}" class="btn btn-sm btn-primary btn-icon">
                            Modifier
                            <i class="entypo-pencil"></i>
                        </a>
                        <button type="button" data-post="{{ $post->id }}" class="btn btn-sm btn-red btn-icon delete-btn">
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
            const post = $(this)[0].dataset['post'];
            const parent = $(this).parent().parent().parent();

            $.ajax({
                url: '/admin/news/' + post,
                method: "DELETE",
                data: {_token: "{{ csrf_token() }}"},
                success: function (response) {
                    toastr.success(response.message, 'Article supprimé');
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
