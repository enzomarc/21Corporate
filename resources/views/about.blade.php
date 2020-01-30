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
                                <h1>A Propos</h1>
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
            <li class="uk-active"><span>A Propos</span>
            </li>
        </ul>
    </div>

    <div class="tm-bottom-a-box  ">
        <div class="uk-container uk-container-center">
            <section id="tm-bottom-a" class="tm-bottom-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}"
                     data-uk-grid-margin="">

                <div class="uk-width-1-1 uk-row-first">
                    <div class="uk-panel">
                        <div class="about-team-page-top-wrap">
                            <div class="uk-grid">
                                <div class="uk-width-large-5-10 uk-width-small-1-1 left-part">
                                    <div class="top-title">
                                        <h2>A Propos de <span>nous</span></h2>
                                    </div>
                                    {!! $info->about !!}
                                </div>
                                <div class="uk-width-large-5-10 uk-width-small-1-1">
                                    <div class="top-banner uk-cover-background uk-position-relative"
                                         style="height: 420px; background-image: url('images/about-team-banner.jpg');">
                                        <img class="uk-invisible" src="images/about-team-banner.jpg" alt="">
                                        <div class="uk-position-cover uk-flex uk-flex-center uk-flex-middle inner">
                                            “{{ $info->quote }}”
                                            <div class="name">{{ $info->author }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!--
    <div class="tm-bottom-d-box tm-full-width  ">
        <div class="uk-container uk-container-center">
            <section id="tm-bottom-d" class="tm-bottom-d uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}"
                     data-uk-grid-margin="">

                <div class="uk-width-1-1 uk-row-first">
                    <div class="uk-panel our-awards-wrap">
                        <div class="uk-width-1-1">
                            <div class="our-awards-title">
                                <h3>Nos <span>Trophées</span></h3>
                            </div>
                            <div class="our-awards-text">Nullam quis eros tellus. Duis sit amet neque nec orci feugiat
                                tincidunt. Lorem ipsum dolor sit amet,
                                <br> consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet,
                                congue erat.
                            </div>
                        </div>
                        <div dir="ltr" class="uk-slidenav-position our-awards"
                             data-uk-slider="{default: 6, autoplay:true, autoplayInterval:7000, animation: 'slide-bottom', duration: 400}">
                            <div class="uk-slider-container">
                                <ul class="uk-slider uk-grid uk-grid-width-large-1-5 uk-grid-width-medium-1-3">
                                    <li class="uk-slide-after">
                                        <div class="img-wrap"><img draggable="false" src="images/award-img.png" alt="">
                                        </div>
                                        <div class="text">2014 world cup champion</div>
                                    </li>
                                    <li class="uk-slide-after">
                                        <div class="img-wrap"><img draggable="false" src="images/award-img1.png" alt="">
                                        </div>
                                        <div class="text">2014 world cup champion</div>
                                    </li>
                                    <li class="uk-slide-after">
                                        <div class="img-wrap"><img draggable="false" src="images/award-img2.png" alt="">
                                        </div>
                                        <div class="text">2014 world cup champion</div>
                                    </li>
                                    <li class="uk-slide-after">
                                        <div class="img-wrap"><img draggable="false" src="images/award-img3.png" alt="">
                                        </div>
                                        <div class="text">2014 world cup champion</div>
                                    </li>
                                    <li class="uk-slide-after">
                                        <div class="img-wrap"><img draggable="false" src="images/award-img4.png" alt="">
                                        </div>
                                        <div class="text">2014 world cup champion</div>
                                    </li>
                                    <li class="uk-slide-before">
                                        <div class="img-wrap"><img draggable="false" src="images/award-img5.png" alt="">
                                        </div>
                                        <div class="text">2014 world cup champion</div>
                                    </li>
                                    <li class="uk-slide-before">
                                        <div class="img-wrap"><img draggable="false" src="images/award-img3.png" alt="">
                                        </div>
                                        <div class="text">2014 world cup champion</div>
                                    </li>
                                    <li class="uk-slide-before">
                                        <div class="img-wrap"><img draggable="false" src="images/award-img.png" alt="">
                                        </div>
                                        <div class="text">2014 world cup champion</div>
                                    </li>
                                    <li class="uk-slide-before">
                                        <div class="img-wrap"><img draggable="false" src="images/award-img1.png" alt="">
                                        </div>
                                        <div class="text">2014 world cup champion</div>
                                    </li>
                                    <li class="uk-slide-before">
                                        <div class="img-wrap"><img draggable="false" src="images/award-img2.png" alt="">
                                        </div>
                                        <div class="text">2014 world cup champion</div>
                                    </li>
                                    <li class="uk-slide-before">
                                        <div class="img-wrap"><img draggable="false" src="images/award-img3.png" alt="">
                                        </div>
                                        <div class="text">2014 world cup champion</div>
                                    </li>
                                    <li class="">
                                        <div class="img-wrap"><img draggable="false" src="images/award-img4.png" alt="">
                                        </div>
                                        <div class="text">2014 world cup champion</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    -->
@stop