@extends('layouts.website')

@section('content')
    <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
        <div class="uk-container uk-container-center">
            <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                <div class="uk-width-1-1 uk-row-first">
                    <div class="uk-panel">
                        <div class="uk-cover-background uk-position-relative head-wrap" style="height: 290px; background-image: url('/images/head-bg.jpg');">
                            <img class="uk-invisible" src="/images/head-bg.jpg" alt="" height="290" width="1920">
                            <div class="uk-position-cover uk-flex uk-flex-center head-title">
                                <h1>{{ $player->first_name . ' ' . $player->last_name }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="uk-container uk-container-center alt">
        <ul class="uk-breadcrumb">
            <li><a href="{{ route('home') }}">Accueil</a>
            </li>
            <li><a href="{{ route('players') }}">Nos Joueurs</a>
            </li>
            <li class="uk-active"><span>{{ $player->first_name . ' ' . $player->last_name }}</span>
            </li>
        </ul>
    </div>


    <div class="uk-container uk-container-center">
        <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
            <div class="tm-main uk-width-medium-1-1 uk-row-first">
                <main id="tm-content" class="tm-content">
                    <div id="system-message-container"></div>
                    <div class="contentpaneopen">
                        <article class="player-single tt-players-page">
                            <div class="uk-container uk-container-center alt">
                                <div class="uk-gfid">
                                </div>
                            </div>
                            <div class="player-top">
                                <div class="uk-container uk-container-center alt">
                                    <div class="uk-grid">
                                        <div class="uk-width-5-12">
                                            <div class="avatar">
                                                @if($player->photos->count() > 0)
                                                    <img src="/upload/{{ $player->photos[0]->path }}"
                                                         class="img-polaroid"
                                                         alt="{{ $player->first_name . ' ' . $player->last_name }}"
                                                         title="{{ $player->first_name . ' ' . $player->last_name }}">
                                                @else
                                                    <img src="/images/df207a70fca3a58b07082ce9aca2c538.jpg"
                                                         class="img-polaroid" alt="{{ $player->first_name . ' ' . $player->last_name }}"
                                                         title="{{ $player->first_name . ' ' . $player->last_name }}">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="uk-width-1-12">
                                            <div class="number">
                                                {{ $player->id }}
                                            </div>
                                        </div>
                                        <div class="uk-width-6-12">
                                            <div class="name">
                                                <h2>
                                                    {{ $player->first_name . ' ' . $player->last_name }}
                                                </h2>
                                            </div>
                                            <div class="wrap">
                                                <ul class="info">
                                                    <li><span>POSITION</span><span>{{ $player->preferred_position }}</span></li>
                                                    <li><span>NAISSANCE</span><span>{{ date_format(new DateTime($player->date_of_birth), 'd/m/Y') }}</span></li>
                                                    <li><span>NATIONALITÉ</span><span>{{ $player->nationality }}</span></li>
                                                    <li><span>PASSPORT EU</span><span>{{ $player->eu_passport ? "Oui" : "Non" }}</span></li>
                                                    <li><span>PIED FORT</span><span>{{ $player->foot }}</span></li>
                                                    <li><span>TAILLE</span><span>{{ $player->height }} CM</span></li>
                                                    <li><span>POIDS</span><span>{{ $player->weight }} KG</span></li>
                                                    <li><span>CLUB ACTUEL</span><span>{{ $player->current_club ?? 'N/A' }}</span></li>
                                                    <li><span>LIGUE DU CLUB</span><span>{{ $player->club_league ?? 'N/A' }}</span></li>
                                                    <li><span>NIVEAU DE LA LIGUE</span><span>{{ $player->league_level ?? 'N/A' }}</span></li>
                                                    <li><span>EXPIRATION DU CONTRAT</span><span>{{ $player->contract_expiration != null ? date_format(new DateTime($player->contract_expiration), 'd/m/Y') : "N/A" }}</span></li>
                                                    <li><span>TYPE DE CONTRAT</span><span>{{ $player->registration_type }}</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-container uk-container-center alt">
                                <div class="uk-grid">
                                    <div class="uk-width-1-1">
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-container uk-container-center alt">
                                <div class="uk-grid">
                                    <div class="uk-width-9-10 uk-push-1-10">
                                        <div class="player-total-info">
                                            <p><strong>Profil du joueur</strong></p>
                                            <p>{{ $player->profile }}</p>
                                            <br>

                                            <p><strong>Réalisations du joueur</strong></p>
                                            <ul>
                                                @foreach($player->achievements as $achievement)
                                                    <li><b>{{ $achievement->period }}</b> - {{ $achievement->achievement }}</li>
                                                @endforeach
                                            </ul>
                                            <br>

                                            <p><strong>Evolution de la carrière du joueur</strong></p>
                                            <div class="article-single-text">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>Période</th>
                                                        <th>Club</th>
                                                        <th>Pays</th>
                                                        <th>Club actuel</th>
                                                        <th>Matchs joués</th>
                                                        <th>Nombre de buts</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($player->careers as $career)
                                                        <tr>
                                                            <td>{{ $career->period }}</td>
                                                            <td>{{ $career->club }}</td>
                                                            <td>{{ $career->country }}</td>
                                                            <td>{{ $career->current_club ? "Oui" : "Non" }}</td>
                                                            <td>{{ $career->matches }}</td>
                                                            <td>{{ $career->goals }}</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <div>
                            <div class="other-players-wrap">
                                <div class="uk-container uk-container-center alt">
                                    <div class="uk-grid">
                                        @if($photos->count() < 2)
                                            <div class="uk-width-1-1">
                                                <h3 class="other-post-title">AUTRES <span>JOUEURS</span></h3>
                                                <div dir="ltr" class="uk-slidenav-position player-slider" data-uk-slider="">
                                                    <div class="uk-slider-container">
                                                        <div class="player-slider-btn">
                                                            <a draggable="false" href="/" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous"></a>
                                                            <a draggable="false" href="/" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next"></a>
                                                        </div>
                                                        <ul class="uk-slider uk-grid uk-grid-width-1-4">
                                                            <li class="player-item">
                                                                <div class="player-article">
                                                                    <div class="wrapper">
                                                                        <div class="img-wrap">
                                                                            <div class="player-number">
                                                                                <span>47</span>
                                                                            </div>
                                                                            <div class="bio"><span><a draggable="false" href="player.html">bio</a></span></div>
                                                                            <a draggable="false" href="player.html">
                                                                                <img draggable="false" src="/images/70d6fcd7a5ed8edc8acc6b52c76d7ff4.jpg" class="img-polaroid" alt="Joe Perez" title="Joe Perez"></a>
                                                                            <ul class="socials">
                                                                                <li class="twitter"><a draggable="false" href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="facebook"><a draggable="false" href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="google-plus"><a draggable="false" href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="pinterest"><a draggable="false" href="https://www.pinterest.com" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="linkedin"><a draggable="false" href="https://www.linkedin.com" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="info">
                                                                            <div class="name">
                                                                                <h3>
                                                                                    <a draggable="false" href="player.html">Joe Perez</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="position">STRIKER</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="player-item">
                                                                <div class="player-article">
                                                                    <div class="wrapper">
                                                                        <div class="img-wrap">
                                                                            <div class="player-number">
                                                                                <span>21</span>
                                                                            </div>
                                                                            <div class="bio"><span><a draggable="false" href="player.html">bio</a></span></div>
                                                                            <a draggable="false" href="player.html">
                                                                                <img draggable="false" src="/images/494a6c4fd56d9d2af64b92b6337db693.jpg" class="img-polaroid" alt="Steven Webb" title="Steven Webb"></a>
                                                                            <ul class="socials">
                                                                                <li class="twitter"><a draggable="false" href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="facebook"><a draggable="false" href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="google-plus"><a draggable="false" href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="pinterest"><a draggable="false" href="https://www.pinterest.com" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="linkedin"><a draggable="false" href="https://www.linkedin.com" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="info">
                                                                            <div class="name">
                                                                                <h3>
                                                                                    <a draggable="false" href="player.html">Steven Webb</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="position">DEFENDER</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="player-item">
                                                                <div class="player-article">
                                                                    <div class="wrapper">
                                                                        <div class="img-wrap">
                                                                            <div class="player-number">
                                                                                <span>07</span>
                                                                            </div>
                                                                            <div class="bio"><span><a draggable="false" href="player.html">bio</a></span></div>
                                                                            <a draggable="false" href="player.html">
                                                                                <img draggable="false" src="/images/f9bfc5bc85499506c9e18e5afb2eaf2d.jpg" class="img-polaroid" alt="Benjamin Mendoza" title="Benjamin Mendoza"></a>
                                                                            <ul class="socials">
                                                                                <li class="twitter"><a draggable="false" href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="facebook"><a draggable="false" href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="google-plus"><a draggable="false" href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="pinterest"><a draggable="false" href="https://www.pinterest.com" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="linkedin"><a draggable="false" href="https://www.linkedin.com" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="info">
                                                                            <div class="name">
                                                                                <h3>
                                                                                    <a draggable="false" href="player.html">Benjamin Mendoza</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="position">DEFENDER</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="player-item">
                                                                <div class="player-article">
                                                                    <div class="wrapper">
                                                                        <div class="img-wrap">
                                                                            <div class="player-number">
                                                                                <span>36</span>
                                                                            </div>
                                                                            <div class="bio"><span><a draggable="false" href="player.html">bio</a></span></div>
                                                                            <a draggable="false" href="player.html">
                                                                                <img draggable="false" src="/images/8a3d3554567e4859f88a93ac59e1eadc.jpg" class="img-polaroid" alt="Christopher Herrera" title="Christopher Herrera"></a>
                                                                            <ul class="socials">
                                                                                <li class="twitter"><a draggable="false" href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="facebook"><a draggable="false" href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="google-plus"><a draggable="false" href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="pinterest"><a draggable="false" href="https://www.pinterest.com" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="linkedin"><a draggable="false" href="https://www.linkedin.com" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="info">
                                                                            <div class="name">
                                                                                <h3>
                                                                                    <a draggable="false" href="player.html">Christopher Herrera</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="position">STRIKER</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="player-item">
                                                                <div class="player-article">
                                                                    <div class="wrapper">
                                                                        <div class="img-wrap">
                                                                            <div class="player-number">
                                                                                <span>23</span>
                                                                            </div>
                                                                            <div class="bio"><span><a draggable="false" href="player.html">bio</a></span></div>
                                                                            <a draggable="false" href="player.html">
                                                                                <img draggable="false" src="/images/450032a6f795065465ebb3d698d74294.jpg" class="img-polaroid" alt="Bobby Guerrero" title="Bobby Guerrero"></a>
                                                                            <ul class="socials">
                                                                                <li class="twitter"><a draggable="false" href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="facebook"><a draggable="false" href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="google-plus"><a draggable="false" href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="pinterest"><a draggable="false" href="https://www.pinterest.com" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="linkedin"><a draggable="false" href="https://www.linkedin.com" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="info">
                                                                            <div class="name">
                                                                                <h3>
                                                                                    <a draggable="false" href="player.html">Bobby Guerrero</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="position">MIDFIELDER</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="player-item">
                                                                <div class="player-article">
                                                                    <div class="wrapper">
                                                                        <div class="img-wrap">
                                                                            <div class="player-number">
                                                                                <span>14</span>
                                                                            </div>
                                                                            <div class="bio"><span><a draggable="false" href="player.html">bio</a></span></div>
                                                                            <a draggable="false" href="player.html">
                                                                                <img draggable="false" src="/images/a0cd8e2687c86ec4810f4adec5724bba.jpg" class="img-polaroid" alt="Douglas Pain" title="Douglas Pain"></a>
                                                                            <ul class="socials">
                                                                                <li class="twitter"><a draggable="false" href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="facebook"><a draggable="false" href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="info">
                                                                            <div class="name">
                                                                                <h3>
                                                                                    <a draggable="false" href="player.html">Douglas Pain</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="position">DEFENDER</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li class="player-item">
                                                                <div class="player-article">
                                                                    <div class="wrapper">
                                                                        <div class="img-wrap">
                                                                            <div class="player-number">
                                                                                <span>35</span>
                                                                            </div>
                                                                            <div class="bio"><span><a draggable="false" href="player.html">bio</a></span></div>
                                                                            <a draggable="false" href="player.html">
                                                                                <img draggable="false" src="/images/bd84c3b0e76d2dd99a75ac9ca2f6ec06.jpg" class="img-polaroid" alt="Johnny Thompson" title="Johnny Thompson"></a>
                                                                            <ul class="socials">
                                                                                <li class="twitter"><a draggable="false" href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="facebook"><a draggable="false" href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="google-plus"><a draggable="false" href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="pinterest"><a draggable="false" href="https://www.pinterest.com" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="linkedin"><a draggable="false" href="https://www.linkedin.com" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="info">
                                                                            <div class="name">
                                                                                <h3>
                                                                                    <a draggable="false" href="player.html">Johnny Thompson</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="position">goalkeeper</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="uk-width-1-1">
                                                <h3 class="other-post-title"><span>PHOTOS</span> DU JOUEUR</h3>
                                                <div dir="ltr" class="uk-slidenav-position player-slider" data-uk-slider="">
                                                    <div class="uk-slider-container">
                                                        <div class="player-slider-btn">
                                                            <a draggable="false" href="/" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous"></a>
                                                            <a draggable="false" href="/" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next"></a>
                                                        </div>
                                                        <ul class="uk-slider uk-grid uk-grid-width-1-4" id="photos_container"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script>
        const photos = {!! json_encode($photos)  !!};
        console.log(photos);

        for (let photo of photos) {
            $('#photos_container').append('<li class="player-item"><div class="player-article"><div class="wrapper"><div class="img-wrap"><a draggable="false" href="#"><img draggable="false" src="/upload/'+ photo.path +'" class="img-polaroid"></a></div></div></div></li>');
        }
    </script>
@stop