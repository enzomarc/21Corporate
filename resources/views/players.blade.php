@extends('layouts.website')

@section('content')
    <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
        <div class="uk-container uk-container-center">
            <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                <div class="uk-width-1-1 uk-row-first">
                    <div class="uk-panel">
                        <div class="uk-cover-background uk-position-relative head-wrap" style="height: 290px; background-image: url('images/head-bg.jpg');">
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
                            <div class="uk-width-medium-7-10 uk-width-small-1-1 text">Notre agence est composée de joueurs talentueux. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis sapien a ante rutrum pulvinar quis ac tellus. Proin facilisis dui at mollis tincidunt. Sed dignissim orci non arcu luctus pretium. Donec at ex aliquet, porttitor lacus eget, ullamcorper quam. Integer pellentesque egestas arcu, nec molestie leo sollicitudin et</div>
                        </div>
                    </div>

                    <div class="list-players-wrapper">
                        <div class="uk-sticky-placeholder">
                            <div class="button-group filter-button-group" data-uk-sticky="{top:70, boundary: true}">
                                <div class="uk-container uk-container-center">
                                    <div class="label-menu">Les postes</div>
                                    <button class="active" data-filter="*">Tout
                                    </button>
                                    <button data-filter=".tt_2a195f12da9f3f36da06e6097be7e451">Défenseurs
                                    </button>
                                    <button data-filter=".tt_22c19cd174143e3b4c7ef40ae23c5d1a">Attaquants
                                    </button>
                                    <button data-filter=".tt_81747b4426a9882884c1f83eda78844f">Gardiens
                                    </button>
                                    <button data-filter=".tt_4d957768dcc72908ab3b9e28dc867052">Milieux
                                    </button>
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
                                    <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451">
                                        <div class="player-article">
                                            <div class="wrapper">
                                                <div class="img-wrap">
                                                    <div class="player-number">
                                                            <span>
                                                            21
                                                            </span>
                                                    </div>
                                                    <div class="bio">
                                                            <span>
                                                            <a href="player.html">bio
                                                            </a>
                                                            </span>
                                                    </div>
                                                    <a href="player.html">
                                                        <img src="images/494a6c4fd56d9d2af64b92b6337db693.jpg" class="img-polaroid" alt="Steven Webb" title="Steven Webb">
                                                    </a>
                                                    <ul class="socials">
                                                        <li class="twitter">
                                                            <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="facebook">
                                                            <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="google-plus">
                                                            <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="pinterest">
                                                            <a href="https://www.pinterest.com" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="linkedin">
                                                            <a href="https://www.linkedin.com" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="info">
                                                    <div class="name">
                                                        <h3>
                                                            <a href="player.html">
                                                                Steven Webb
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div class="position">
                                                        DEFENDER
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_22c19cd174143e3b4c7ef40ae23c5d1a">
                                        <div class="player-article">
                                            <div class="wrapper">
                                                <div class="img-wrap">
                                                    <div class="player-number">
                                                            <span>
                                                            19
                                                            </span>
                                                    </div>
                                                    <div class="bio">
                                                            <span>
                                                            <a href="player.html">bio
                                                            </a>
                                                            </span>
                                                    </div>
                                                    <a href="player.html">
                                                        <img src="images/df207a70fca3a58b07082ce9aca2c538.jpg" class="img-polaroid" alt="John Montgomery" title="John Montgomery">
                                                    </a>
                                                    <ul class="socials">
                                                        <li class="twitter">
                                                            <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="facebook">
                                                            <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="google-plus">
                                                            <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="pinterest">
                                                            <a href="https://www.pinterest.com" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="linkedin">
                                                            <a href="https://www.linkedin.com" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="info">
                                                    <div class="name">
                                                        <h3>
                                                            <a href="player.html">
                                                                John Montgomery
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div class="position">
                                                        STRIKER
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_81747b4426a9882884c1f83eda78844f">
                                        <div class="player-article">
                                            <div class="wrapper">
                                                <div class="img-wrap">
                                                    <div class="player-number">
                                                            <span>
                                                            35
                                                            </span>
                                                    </div>
                                                    <div class="bio">
                                                            <span>
                                                            <a href="player.html">bio
                                                            </a>
                                                            </span>
                                                    </div>
                                                    <a href="player.html">
                                                        <img src="images/bd84c3b0e76d2dd99a75ac9ca2f6ec06.jpg" class="img-polaroid" alt="Johnny Thompson" title="Johnny Thompson">
                                                    </a>
                                                    <ul class="socials">
                                                        <li class="twitter">
                                                            <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="facebook">
                                                            <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="google-plus">
                                                            <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="pinterest">
                                                            <a href="https://www.pinterest.com" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="linkedin">
                                                            <a href="https://www.linkedin.com" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="info">
                                                    <div class="name">
                                                        <h3>
                                                            <a href="player.html">
                                                                Johnny Thompson
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div class="position">
                                                        goalkeeper
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451">
                                        <div class="player-article">
                                            <div class="wrapper">
                                                <div class="img-wrap">
                                                    <div class="player-number">
                                                            <span>
                                                            07
                                                            </span>
                                                    </div>
                                                    <div class="bio">
                                                            <span>
                                                            <a href="player.html">bio
                                                            </a>
                                                            </span>
                                                    </div>
                                                    <a href="player.html">
                                                        <img src="images/f9bfc5bc85499506c9e18e5afb2eaf2d.jpg" class="img-polaroid" alt="Benjamin Mendoza" title="Benjamin Mendoza">
                                                    </a>
                                                    <ul class="socials">
                                                        <li class="twitter">
                                                            <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="facebook">
                                                            <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="google-plus">
                                                            <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="pinterest">
                                                            <a href="https://www.pinterest.com" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="linkedin">
                                                            <a href="https://www.linkedin.com" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="info">
                                                    <div class="name">
                                                        <h3>
                                                            <a href="player.html">
                                                                Benjamin Mendoza
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div class="position">
                                                        DEFENDER
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_22c19cd174143e3b4c7ef40ae23c5d1a">
                                        <div class="player-article">
                                            <div class="wrapper">
                                                <div class="img-wrap">
                                                    <div class="player-number">
                                                            <span>
                                                            47
                                                            </span>
                                                    </div>
                                                    <div class="bio">
                                                            <span>
                                                            <a href="player.html">bio
                                                            </a>
                                                            </span>
                                                    </div>
                                                    <a href="player.html">
                                                        <img src="images/70d6fcd7a5ed8edc8acc6b52c76d7ff4.jpg" class="img-polaroid" alt="Joe Perez" title="Joe Perez">
                                                    </a>
                                                    <ul class="socials">
                                                        <li class="twitter">
                                                            <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="facebook">
                                                            <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="google-plus">
                                                            <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="pinterest">
                                                            <a href="https://www.pinterest.com" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="linkedin">
                                                            <a href="https://www.linkedin.com" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="info">
                                                    <div class="name">
                                                        <h3>
                                                            <a href="player.html">
                                                                Joe Perez
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div class="position">
                                                        STRIKER
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_4d957768dcc72908ab3b9e28dc867052">
                                        <div class="player-article">
                                            <div class="wrapper">
                                                <div class="img-wrap">
                                                    <div class="player-number">
                                                            <span>
                                                            23
                                                            </span>
                                                    </div>
                                                    <div class="bio">
                                                            <span>
                                                            <a href="player.html">bio
                                                            </a>
                                                            </span>
                                                    </div>
                                                    <a href="player.html">
                                                        <img src="images/450032a6f795065465ebb3d698d74294.jpg" class="img-polaroid" alt="Bobby Guerrero" title="Bobby Guerrero">
                                                    </a>
                                                    <ul class="socials">
                                                        <li class="twitter">
                                                            <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="facebook">
                                                            <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="google-plus">
                                                            <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="pinterest">
                                                            <a href="https://www.pinterest.com" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="linkedin">
                                                            <a href="https://www.linkedin.com" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="info">
                                                    <div class="name">
                                                        <h3>
                                                            <a href="player.html">
                                                                Bobby Guerrero
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div class="position">
                                                        MIDFIELDER
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451">
                                        <div class="player-article">
                                            <div class="wrapper">
                                                <div class="img-wrap">
                                                    <div class="player-number">
                                                            <span>
                                                            14
                                                            </span>
                                                    </div>
                                                    <div class="bio">
                                                            <span>
                                                            <a href="player.html">bio
                                                            </a>
                                                            </span>
                                                    </div>
                                                    <a href="player.html">
                                                        <img src="images/a0cd8e2687c86ec4810f4adec5724bba.jpg" class="img-polaroid" alt="Douglas Pain" title="Douglas Pain">
                                                    </a>
                                                    <ul class="socials">
                                                        <li class="twitter">
                                                            <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="facebook">
                                                            <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="info">
                                                    <div class="name">
                                                        <h3>
                                                            <a href="player.html">
                                                                Douglas Pain
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div class="position">
                                                        DEFENDER
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_22c19cd174143e3b4c7ef40ae23c5d1a">
                                        <div class="player-article">
                                            <div class="wrapper">
                                                <div class="img-wrap">
                                                    <div class="player-number">
                                                            <span>
                                                            36
                                                            </span>
                                                    </div>
                                                    <div class="bio">
                                                            <span>
                                                            <a href="player.html">bio
                                                            </a>
                                                            </span>
                                                    </div>
                                                    <a href="player.html">
                                                        <img src="images/8a3d3554567e4859f88a93ac59e1eadc.jpg" class="img-polaroid" alt="Christopher Herrera" title="Christopher Herrera">
                                                    </a>
                                                    <ul class="socials">
                                                        <li class="twitter">
                                                            <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="facebook">
                                                            <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="google-plus">
                                                            <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="pinterest">
                                                            <a href="https://www.pinterest.com" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="linkedin">
                                                            <a href="https://www.linkedin.com" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="info">
                                                    <div class="name">
                                                        <h3>
                                                            <a href="player.html">
                                                                Christopher Herrera
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div class="position">
                                                        STRIKER
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
