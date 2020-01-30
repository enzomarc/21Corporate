@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                <div class="row" style="display:flex; justify-content: center; align-items: center;">
                    <div class="col-sm-10">
                        <h3>A Propos</h3>
                        <h4>Les informations fournies sur cette page seront affichées aux visiteurs qui voudront en savoir plus sur votre business, alors soyez explicite.</h4>
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ route('about') }}" class="btn btn-lg btn-primary btn-icon">
                            Voir la page
                            <i class="entypo-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <form id="aboutForm" role="form" method="post">

        <!-- Save Button -->
        <div class="row">
            <div class="col-sm-2 post-save-changes">
                <button id="save" type="button" class="btn btn-green btn-lg btn-block btn-icon">
                    Enregistrer
                    <i class="entypo-check"></i>
                </button>
            </div>

            <div class="col-sm-10" style="margin-bottom: 2rem">
                <h2>A propos de vous</h2>
            </div>
        </div>

        <!-- WYSIWYG - Content Editor -->
        <div class="row">
            <div class="col-sm-12">
                <textarea class="form-control wysihtml5" rows="18" data-stylesheet-url="/assets/css/wysihtml5-color.css" name="about" id="about" required>{{$info->about ?? ''}}</textarea>
            </div>
        </div>
        <br><br>

        <div class="row">
            <div class="col-sm-12" style="margin-bottom: 2rem">
                <h2>Citation</h2>
            </div>
        </div>

        <!-- Quote -->
        <div class="row">
            <div class="col-sm-12">
                <input style="margin-bottom: 1rem" class="form-control" type="text" name="author" id="author" placeholder="Auteur de la citation" value="{{ $info->author ?? '' }}" required>
                <textarea class="form-control" rows="8" name="quote" id="quote" placeholder="Citation" required>{{$info->quote ?? ''}}</textarea>
            </div>
        </div>
        <br><br>

        <!--
        <div class="row">
            <div class="col-sm-12" style="margin-bottom: 2rem">
                <h2>Trophées</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom du trophée</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    foreach($awards as $award)
                        <tr>
                            <td>$award->id</td>
                            <td>$award->name</td>
                            <td>
                                <button type="button" data-post="$award->id" class="btn btn-sm btn-red btn-icon delete-btn">
                                    Supprimer
                                    <i class="entypo-cancel"></i>
                                </button>
                            </td>
                        </tr>
                    endforeach
                    </tbody>
                </table>
            </div>
        </div>
        -->

    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/assets/js/wysihtml5/bootstrap-wysihtml5.css">
    <link rel="stylesheet" href="/assets/js/selectboxit/jquery.selectBoxIt.css">

    <style>
        .ms-container .ms-list {
            width: 135px;
            height: 205px;
        }

        .post-save-changes {
            float: right;
            margin-bottom: 2rem;
        }

        @media screen and (max-width: 789px)
        {
            .post-save-changes {
                float: none;
                margin-bottom: 20px;
            }
        }
    </style>
@stop

@section('script')
    <script src="/assets/js/wysihtml5/wysihtml5-0.4.0pre.min.js"></script>
    <script src="/assets/js/wysihtml5/bootstrap-wysihtml5.js"></script>
    <script src="/assets/js/jquery.multi-select.js"></script>
    <script src="/assets/js/fileinput.js"></script>
    <script src="/assets/js/bootstrap-datepicker.js"></script>
    <script src="/assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
    <script src="/assets/js/bootstrap-tagsinput.min.js"></script>
    <script src="/assets/js/neon-chat.js"></script>

    <script>
        $('button#save').click(() => {
            $.ajax({
                url: "{{ route('about.store') }}",
                type: "POST",
                data: { about: $('#about').val(), quote: $('#quote').val(), author: $('#author').val() },
                success: (response) => {
                    toastr.success(response.message, "Succès");
                },
                error: (response) => {
                    console.log(response);
                    toastr.error(response.responseJSON.message, "Erreur");
                }
            });
        });
    </script>
@stop