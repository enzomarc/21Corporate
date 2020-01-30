@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                <div class="row" style="display:flex; justify-content: center; align-items: center;">
                    <div class="col-sm-10">
                        <h3>Nouvel article</h3>
                        <h4>Veillez à remplir chaque section avant de cliquer sur <b>Publier</b>.</h4>
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ route('news.index') }}" class="btn btn-lg btn-primary btn-icon">
                            Liste des articles
                            <i class="entypo-list"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <form id="createForm" method="post" role="form">

        @csrf

        <!-- Title and Publish Buttons -->
        <div class="row">
            <div class="col-sm-2 post-save-changes">
                <button id="publish" type="button" class="btn btn-green btn-lg btn-block btn-icon">
                    Publier
                    <i class="entypo-upload"></i>
                </button>
            </div>

            <div class="col-sm-10">
                <input type="text" class="form-control input-lg" name="title" id="title" placeholder="Titre de l'article" required />
            </div>
        </div>
        <br />

        <!-- WYSIWYG - Content Editor -->
        <div class="row">
            <div class="col-sm-12">
                <textarea class="form-control wysihtml5" rows="18" data-stylesheet-url="/assets/css/wysihtml5-color.css" name="content" id="content" required></textarea>
            </div>
        </div>

        <br />

        <!-- Metaboxes -->
        <div class="row">

            <!-- Metabox :: Publish Settings -->
            <div class="col-sm-6">

                <div class="panel panel-primary" data-collapsed="0">

                    <div class="panel-heading">
                        <div class="panel-title">
                            Paramètres de publication
                        </div>

                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        </div>
                    </div>

                    <div class="panel-body">

                        <div class="checkbox checkbox-replace">
                            <input type="checkbox" id="chk-1">
                            <label>Afficher sur la page d'accueil</label>
                        </div>

                        <br />

                        <div class="checkbox checkbox-replace">
                            <input type="checkbox" id="chk-2" checked>
                            <label>Marquer l'auteur actuel</label>
                        </div>

                        <br />

                        <div class="checkbox checkbox-replace">
                            <input type="checkbox" id="chk-2" checked>
                            <label>Générer le slug automatiquement</label>
                        </div>

                        <br />

                        <p>Date de publication</p>
                        <div class="input-group">
                            <input type="text" class="form-control datepicker" name="created_at" value="{{ date('d/m/Y') }}" data-format="D, dd MM yyyy">

                            <div class="input-group-addon">
                                <a href="#"><i class="entypo-calendar"></i></a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>


            <!-- Metabox :: Featured Image -->
            <div class="col-sm-6">

                <div class="panel panel-primary" data-collapsed="0">

                    <div class="panel-heading">
                        <div class="panel-title">
                            Image de l'article
                        </div>

                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        </div>
                    </div>

                    <div class="panel-body">

                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 160px;" data-trigger="fileinput">
                                <img src="/assets/images/album-image-1.jpg" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px"></div>
                            <div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">Choisir une image</span>
										<span class="fileinput-exists">Modifier</span>
										<input type="file" name="hero" id="hero" accept="image/*">
									</span>
                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Supprimer</a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="clear"></div>

            <!-- Metabox :: Tags -->
            <div class="col-sm-12">

                <div class="panel panel-primary" data-collapsed="0">

                    <div class="panel-heading">
                        <div class="panel-title">
                            Mots clés (Facultatif)
                        </div>

                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        </div>
                    </div>

                    <div class="panel-body">

                        <p>Ajoutez des mots clés (<em>Appuyez sur Entrée pour ajouter le mot saisi)</em></p>
                        <input type="text" value="sport,football,soccer" class="form-control tagsinput" id="tags" name="tags" />

                    </div>

                </div>

            </div>

        </div>

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
        $('button#publish').click(() => {
            const data = new FormData($('#createForm')[0]);

            $.ajax({
                url: "{{ route('news.store') }}",
                type: "POST",
                data: data,
                cache: false,
                contentType: false,
                processData: false,
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