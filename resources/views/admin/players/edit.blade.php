@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                <div class="row" style="display:flex; justify-content: center; align-items: center;">
                    <div class="col-sm-10">
                        <h3>Modification d'un joueur</h3>
                        <h4>Remplissez les informations personnelles, ainsi que les informations concernant la carrière et les accomplissements du joueur puis cliquez sur <b>Modifier</b>.</h4>
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ route('players.index') }}" class="btn btn-lg btn-primary btn-icon">
                            Liste des joueurs
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
                    Informations personnelles
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                </div>
            </div>

            <div class="panel-body">

                <form role="form" id="player-form" class="form-horizontal form-groups-bordered">

                    <div class="form-group">
                        <label for="first_name" class="col-sm-3 control-label">Nom(s) *</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="John" value="{{ $player->first_name }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="last_name" class="col-sm-3 control-label">Prénom(s)</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="last_name" id="last_name" value="{{ $player->last_name }}" placeholder="Doe">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="date_of_birth" class="col-sm-3 control-label">Date de naissance *</label>

                        <div class="col-sm-5">
                            <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" value="{{ $player->date_of_birth }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="last_name" class="col-sm-3 control-label">Nationalité *</label>

                        <div class="col-sm-5">
                            <select class="form-control countries" id="nationality" name="nationality" required></select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="eu_passport" class="col-sm-3 control-label">Passport Européen *</label>

                        <div class="col-sm-5">
                            <select class="form-control" id="eu_passport" name="eu_passport" required>
                                <option value="1">Oui</option>
                                <option value="0">Non</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="height" class="col-sm-3 control-label">Hauteur *</label>

                        <div class="col-sm-5">
                            <div class="input-group">
                                <input type="number" class="form-control" name="height" id="height" min="1" placeholder="En centimètres" value="{{ $player->height }}" required>
                                <span class="input-group-addon">cm</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">Poids *</label>

                        <div class="col-sm-5">
                            <div class="input-group">
                                <input type="number" class="form-control" name="weight" id="weight" min="1" placeholder="En kilogrammes" value="{{ $player->weight }}" required>
                                <span class="input-group-addon">kg</span>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="marital_status" class="col-sm-3 control-label">Statut matrimonial *</label>

                        <div class="col-sm-5">
                            <select class="form-control" id="marital_status" name="marital_status">
                                <option value="Célibataire">Célibataire</option>
                                <option value="En couple">En couple</option>
                                <option value="Marié(e)">Marié(e)</option>
                                <option value="Divorcé(e)">Divorcé(e)</option>
                                <option value="Autre">Autre</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="preferred_position" class="col-sm-3 control-label">Poste préféré</label>

                        <div class="col-sm-5">
                            <select class="form-control" id="preferred_position" name="preferred_position">
                                <option value="Avant centre">Avant centre</option>
                                <option value="Ailier gauche">Ailier gauche</option>
                                <option value="Ailier droit">Ailier droit</option>
                                <option value="Milieu gauche">Milieu gauche</option>
                                <option value="Milieu central">Milieu central</option>
                                <option value="Milieu droit">Milieu droit</option>
                                <option value="Arrière gauche">Arrière gauche</option>
                                <option value="Arrière droit">Arrière droit</option>
                                <option value="Défenseur central">Défenseur central</option>
                                <option value="Gardien">Gardien</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="positions" class="col-sm-3 control-label">Autre(s) position(s)</label>

                        <div class="col-sm-5">
                            <select class="form-control" multiple id="positions" name="positions">
                                <option value="Avant centre">Avant centre</option>
                                <option value="Ailier gauche">Ailier gauche</option>
                                <option value="Ailier droit">Ailier droit</option>
                                <option value="Milieu gauche">Milieu gauche</option>
                                <option value="Milieu central">Milieu central</option>
                                <option value="Milieu droit">Milieu droit</option>
                                <option value="Arrière gauche">Arrière gauche</option>
                                <option value="Arrière droit">Arrière droit</option>
                                <option value="Défenseur central">Défenseur central</option>
                                <option value="Gardien">Gardien</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="current_club" class="col-sm-3 control-label">Club actuel</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="current_club" id="current_club" value="{{ $player->current_club }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="club_league" class="col-sm-3 control-label">Nom de la ligue du club</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="club_league" id="club_league" value="{{ $player->club_league }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="league_level" class="col-sm-3 control-label">Niveau de la ligue du club</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="league_level" id="league_level" value="{{ $player->league_level }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contract_expiration" class="col-sm-3 control-label">Date d'expiration du contrat</label>

                        <div class="col-sm-5">
                            <input type="date" class="form-control" name="contract_expiration" id="contract_expiration" value="{{ $player->contract_expiration }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="registration_type" class="col-sm-3 control-label">Type de contrat du joueur</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="registration_type" id="registration_type" value="{{ $player->registration_type }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="foot" class="col-sm-3 control-label">Pied fort *</label>

                        <div class="col-sm-5">
                            <select class="form-control" id="foot" name="foot">
                                <option value="Pied droit">Pied droit</option>
                                <option value="Pied gauche">Pied gauche</option>
                                <option value="Les deux">Les deux</option>
                                <option value="Les deux - pied droit préféré">Les deux - pied droit préféré</option>
                                <option value="Les deux - pied gauche préféré">Les deux - pied gauche préféré</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="profile" class="col-sm-3 control-label">Profil du joueur</label>

                        <div class="col-sm-5">
                            <textarea class="form-control autogrow" id="profile" name="profile" placeholder="Décrivez le joueur en quelques lignes" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal; height: 98px;">{{$player->profile}}</textarea>
                        </div>
                    </div>

                </form>

            </div>

        </div>
    </div>

    <!-- Career -->
    <div class="row">
        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    Carrière
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                </div>
            </div>

            <div class="panel-body">
                <div class="row" style="float: right; padding: 15px">
                    <button onclick="$('#career_modal').modal('show');" class="btn btn-primary btn-icon">
                        Ajouter une étape
                        <i class="entypo-plus-squared"></i>
                    </button>
                </div>

                <table class="table table-bordered" id="careers-table">
                    <thead>
                    <tr>
                        <th>Période</th>
                        <th>Club</th>
                        <th>Pays</th>
                        <th>Club actuel</th>
                        <th>Matchs joués</th>
                        <th>Nombre de buts</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <!-- Add career modal -->
    <div class="modal fade" id="career_modal" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Ajouter une étape à la carrière du joueur</h4>
                </div>

                <form method="post" id="career_form">
                    <div class="modal-body twelve columns">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contract_start" class="control-label">Début du contrat</label>
                                    <input type="date" class="form-control" id="contract_start" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contract_end" class="control-label">Fin du contrat</label>
                                    <input type="date" class="form-control" id="contract_end" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="club" class="control-label">Nom du club</label>
                                    <input type="text" class="form-control" id="club" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="club_current" class="control-label">Club actuel?</label>
                                    <select id="club_current" class="form-control" required>
                                        <option value="Non">Non</option>
                                        <option value="Oui">Oui</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="country" class="control-label">Pays</label>
                                    <select id="country" class="form-control countries"></select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="matches" class="control-label">Nombre de match(s) joué(s)</label>
                                    <input type="number" class="form-control" min="0" id="matches" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="goals" class="control-label">Nombre de but(s) marqué(s)</label>
                                    <input type="number" class="form-control" min="0" id="goals" required>
                                </div>
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
    <!-- End add career modal -->


    <!-- Achievements -->
    <div class="row">
        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    Réalisations
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                </div>
            </div>

            <div class="panel-body">
                <div class="row" style="float: right; padding: 15px">
                    <button onclick="$('#achievement_modal').modal('show');" class="btn btn-primary btn-icon">
                        Ajouter une réalisation
                        <i class="entypo-plus-squared"></i>
                    </button>
                </div>

                <table class="table table-bordered" id="achievements-table">
                    <thead>
                    <tr>
                        <th>Période</th>
                        <th>Réalisation</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <!-- Add achievement modal -->
    <div class="modal fade" id="achievement_modal" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Ajouter une réalisation du joueur</h4>
                </div>

                <form method="post" id="achievement_form">
                    <div class="modal-body twelve columns">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="contract_start" class="control-label">Période</label>
                                    <input type="text" class="form-control" id="period" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="achievement" class="control-label">Réalisation</label>
                                    <textarea class="form-control autogrow" id="achievement" placeholder="Dites en quelques lignes ce que le joueur a accomplit" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal; height: 98px;"></textarea>
                                </div>
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
    <!-- End add achievement modal -->

    <!-- Photos -->
    <div class="row">
        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    Photos
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                </div>
            </div>

            <div class="panel-body">
                <div class="row" style="float: right; padding: 15px">
                    <button onclick="$('#photo_modal').modal('show');" class="btn btn-primary btn-icon">
                        Ajouter une photo
                        <i class="entypo-plus-squared"></i>
                    </button>
                </div>

                <table class="table table-bordered" id="photos-table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Aperçu</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <!-- Add photo modal -->
    <div class="modal fade" id="photo_modal" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Ajouter une photo du joueur</h4>
                </div>

                <form method="post" id="photo_form">
                    <div class="modal-body twelve columns">
                        <div class="row">
                            <div class="col-md-12" style="display: flex; justify-content: center; margin-bottom: 3rem;">
                                <img src="" alt="tmp" id="tmpshot" style="display: none" width="500">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="file" id="image" name="image" class="form-control">
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

    <div class="row footer" style="display: flex; justify-content: flex-end; padding: 0 20px 40px 0">
        <button class="btn btn-success btn-lg btn-icon" id="submit">
            Modifier
            <i class="entypo-pencil"></i>
        </button>
    </div>

@stop

@section('script')
    <script>
        let careers = {!! json_encode($player->careers) !!};
        let achievements = {!! json_encode($player->achievements) !!};
        let photos = {!! json_encode($player->photos) !!};
        const positions = {!! json_encode($player->positions) !!};

        refreshCareersTable();
        refreshAccomplishmentsTable();
        refreshPhotosTable();

        // Update select
        _.where($('#foot')[0].options, {value: "{{ $player->foot }}"})[0].selected = true;
        _.where($('#eu_passport')[0].options, {value: "{{ $player->eu_passport == true ? "1" : "0" }}"})[0].selected = true;
        _.where($('#marital_status')[0].options, {value: "{{ $player->marital_status }}"})[0].selected = true;
        _.where($('#preferred_position')[0].options, {value: "{{ $player->preferred_position }}"})[0].selected = true;
        _.each($('#positions')[0].options, (option) => {
            _.each(positions, (position) => {
                if (option.value === position)
                    option.selected = true;
            });
        });

        $("#career_form").submit((e) => {
            e.stopPropagation();
            e.preventDefault();

            const contract_start = $('#contract_start').val();
            const contract_end = $('#contract_end').val();
            const club = $('#club').val();
            const current_club = $('#club_current').val();
            const country = $('#country').val();
            const matches = $('#matches').val();
            const goals = $('#goals').val();

            const career = {
                id: careers.length + 1,
                start: contract_start,
                end: contract_end,
                period: contract_start + ' - ' + contract_end,
                club: club,
                current_club: current_club,
                country: country,
                matches: matches,
                goals: goals
            };

            careers.push(career);
            refreshCareersTable();
            $('#career_modal').modal('hide');
        });

        $('#achievement_form').submit((e) => {
            e.stopPropagation();
            e.preventDefault();

            const period = $('#period').val();
            const content = $('#achievement').val();

            const achievement = {
                id: achievements.length + 1,
                period: period,
                achievement: content
            };

            achievements.push(achievement);
            refreshAccomplishmentsTable();
            $('#achievement_modal').modal('hide');
        });

        /**
         * Refresh the player careers table.
         */
        function refreshCareersTable() {
            const table = $('#careers-table tbody')[0];
            table.innerHTML = "";

            _.each(careers, (career) => {
                career.current_club = career.current_club === false ? "Non" : "Oui";
                table.innerHTML += "<tr><td>"+ career.period +"</td><td>"+ career.club +"</td><td>"+ career.country +"</td><td>"+ career.current_club +"</td><td>"+ career.matches +"</td><td>"+ career.goals +"</td><td><button onclick='deleteCareer("+ career.id +")' class='btn btn-danger'>Supprimer</button></td></tr>";
            });
        }

        /**
         * Refresh the player accomplishments table.
         */
        function refreshAccomplishmentsTable() {
            const table = $('#achievements-table tbody')[0];
            table.innerHTML = "";

            _.each(achievements, (achievement) => {
                table.innerHTML += "<tr><td>"+ achievement.period +"</td><td>"+ achievement.achievement +"</td><td><button onclick='deleteAchievement("+ achievement.id +")' class='btn btn-danger'>Supprimer</button></td></tr>";
            });
        }

        /**
         * Refresh the player photos table
         */
        function refreshPhotosTable() {
            const table = $('#photos-table tbody')[0];
            table.innerHTML = "";

            _.each(photos, (photo) => {
                table.innerHTML += '<tr><td>'+ photo.id +'</td><td><img height="64" width="64" src="/upload/'+ photo.path +'" alt="image"></td></tr>';
            });
        }

        /**
         * Delete career in careers collection.
         *
         * @param id
         */
        function deleteCareer(id) {
            careers = _.reject(careers, (career) => {
                return career.id === id;
            });

            refreshCareersTable();
        }

        /**
         * Delete achievement in achievements collection.
         *
         * @param id
         */
        function deleteAchievement(id) {
            achievements = _.reject(achievements, (achievement) => {
                return achievement.id === id;
            });

            refreshAccomplishmentsTable();
        }

        /**
         * Delete photo in photos collection.
         *
         * @param id
         */
        function deletePhoto(id) {
            $.ajax({
                url: "/admin/photos/" + id,
                method: "DELETE",
                success: (response) => {
                    toastr.success(response.message, 'Photo supprimée');

                    photos = _.reject(photos, (photo) => {
                        return photo.id === id;
                    });

                    refreshPhotosTable();
                },
                error: (response) => {
                    console.log(response);
                    toastr.error(response.responseJSON.message, 'Erreur');
                }
            });
        }

        $('#submit').click(() => {
            $('#player-form').submit();
        });

        $('#player-form').submit((e) => {
            e.preventDefault();
            e.stopPropagation();

            $.ajax({
                url: "{{ route('players.update', ['player' => $player->id]) }}",
                method: "PUT",
                data: {
                    first_name: $('#first_name').val(),
                    last_name: $('#last_name').val(),
                    date_of_birth: $('#date_of_birth').val(),
                    nationality: $('#nationality').val(),
                    eu_passport: $('#eu_passport').val(),
                    marital_status: $('#marital_status').val(),
                    height: $('#height').val(),
                    weight: $('#weight').val(),
                    preferred_position: $('#preferred_position').val(),
                    positions: $('#positions').val(),
                    current_club: $('#current_club').val(),
                    club_league: $('#club_league').val(),
                    league_level: $('#league_level').val(),
                    contract_expiration: $('#contract_expiration').val(),
                    registration_type: $('#registration_type').val(),
                    foot: $('#foot').val(),
                    profile: $('#profile').val(),
                    careers: careers,
                    achievements: achievements,
                    photos: photos
                },
                success: (response) => {
                    toastr.success(response.message, "Joueur mis à jour");
                },
                error: (response) => {
                    console.log(response);

                    if (response.status === 422) {
                        _.each(response.responseJSON.errors, (error) => {
                            toastr.error(error[0], "Champ requis");
                        });

                        toastr.error("Tous les champs marqués d'une étoile(*) sont obligatoires. Veuillez compléter les informations.", "Erreur");
                    } else {
                        toastr.error(response.responseJSON.message, "Erreur");
                    }
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
                url: "{{ route('photos.store') }}",
                method: "POST",
                contentType: false,
                processData: false,
                data: data,
                success: (response) => {
                    photos.push(response.photo);
                    toastr.success(response.message, "Photo ajoutée");
                    refreshPhotosTable();
                    $('#photo_modal').modal('hide');
                },
                error: (response) => {
                    toastr.error(response.responseJSON.message, 'Erreur');
                    console.log(response);
                    $('#photo_modal').modal('hide');
                }
            });
        });

        // Load select countries.
        $.ajax({
            url: "/js/countries.json",
            method: "GET",
            success: (countries) => {
                const selects = $('.countries');

                _.each(countries, (country) => {
                    _.each(selects, (select) => {
                        select.innerHTML += "<option value='" + country.name + "'>" + country.name + "</option>";
                    });
                });

                // Update nationality select
                _.where($('#nationality')[0].options, {value: "{{ $player->nationality }}"})[0].selected = true;
            },
            error: (response) => {
                toastr.warning("Une erreur est survenue lors du chargement de la liste des pays. Veuillez recharger la page.", "Attention");
                console.log(response);
            }
        });

    </script>
@stop