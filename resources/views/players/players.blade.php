@extends('layouts.website')

@section('content')
    <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
        <div class="uk-container uk-container-center">
            <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse"
                     data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                <div class="uk-width-1-1 uk-row-first">
                    <div class="uk-panel">
                        <div class="uk-cover-background uk-position-relative head-wrap"
                             style="height: 290px; background-image: url('images/head-bg.jpg');">
                            <img class="uk-invisible" src="images/head-bg.jpg" alt="" height="290" width="1920">
                            <div class="uk-position-cover uk-flex uk-flex-center head-title">
                                <h1>Nos Joueurs</h1>
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
            <li class="uk-active"><span>Nos Joueurs</span>
            </li>
        </ul>
    </div>


    <div class="uk-container uk-container-center">
        <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
            <div class="tm-main uk-width-medium-1-1 uk-row-first">
                <main id="tm-content" class="tm-content">

                    <div class="uk-container uk-container-center tt-gallery-top">
                        <div class="uk-grid" data-uk-grid-match="">
                            <div class="uk-width-medium-3-10 uk-width-small-1-1 title">Nos Différents Joueurs</div>
                            <div class="uk-width-medium-7-10 uk-width-small-1-1 text">Notre agence est composée de
                                joueurs talentueux. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis
                                sapien a ante rutrum pulvinar quis ac tellus. Proin facilisis dui at mollis tincidunt.
                                Sed dignissim orci non arcu luctus pretium. Donec at ex aliquet, porttitor lacus eget,
                                ullamcorper quam. Integer pellentesque egestas arcu, nec molestie leo sollicitudin et
                            </div>
                        </div>
                    </div>

                    <div class="list-players-wrapper">
                        <div class="uk-sticky-placeholder">
                            <div class="button-group filter-button-group" data-uk-sticky="{top:70, boundary: true}">
                                <div class="uk-container uk-container-center">
                                    <div class="label-menu">Les postes</div>
                                    <button class="active" data-filter="*">Tout</button>
                                    @foreach($positions as $position)
                                        <button data-filter=".{{ \Illuminate\Support\Str::slug($position, '_') }}">{{ $position }}</button>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="list-players-wrap" id="boundary">
                            <div class="left-player">
                                <img src="images/left-player-bg.png" alt="">
                            </div>
                            <div class="right-player">
                                <img src="images/right-player-bg.png" alt="">
                            </div>
                            <div class="uk-container uk-container-center alt">
                                <div class="uk-grid grid1 players-list">
                                    @foreach($players as $player)
                                        <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item {{ \Illuminate\Support\Str::slug($player->preferred_position, '_') }}">
                                            <div class="player-article">
                                                <div class="wrapper">
                                                    <div class="img-wrap">
                                                        <div class="player-number">
                                                            <span>
                                                            {{ $player->id }}
                                                            </span>
                                                        </div>
                                                        <div class="bio">
                                                            <span>
                                                            <a href="{{ route('players.single', ['player' => $player]) }}">bio
                                                            </a>
                                                            </span>
                                                        </div>
                                                        <a href="{{ route('players.single', ['player' => $player]) }}">
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
                                                        </a>
                                                        <ul class="socials">
                                                            <li class="twitter">
                                                                <a href="http://twitter.com/" target="_blank"
                                                                   rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li class="facebook">
                                                                <a href="http://facebook.com/" target="_blank"
                                                                   rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li class="google-plus">
                                                                <a href="https://plus.google.com/" target="_blank"
                                                                   rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li class="pinterest">
                                                                <a href="https://www.pinterest.com" target="_blank"
                                                                   rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li class="linkedin">
                                                                <a href="https://www.linkedin.com" target="_blank"
                                                                   rel="nofollow">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="info">
                                                        <div class="name">
                                                            <h3>
                                                                <a href="{{ route('players.single', ['player' => $player]) }}">
                                                                    {{ $player->first_name . ' ' . $player->last_name }}
                                                                </a>
                                                            </h3>
                                                        </div>
                                                        <div class="position">
                                                            {{ $player->preferred_position }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
@stop
