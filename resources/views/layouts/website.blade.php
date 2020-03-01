<!DOCTYPE html>
<html lang="en-gb">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>21Corporate</title>
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href="/css/akslider.css" rel="stylesheet" type="text/css"/>
    <link href="/css/donate.css" rel="stylesheet" type="text/css"/>
    <link href="/css/theme.css" rel="stylesheet" type="text/css"/>
    <link href="/css/toastr.min.css" rel="stylesheet" type="text/css"/>
    <script type='text/javascript'
            src='http://ajax.googleapis.com/ajax/libs/mootools/1.3.1/mootools-yui-compressed.js'></script>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
</head>

<body class="tm-isblog">

<div class="preloader">
    <div class="loader"></div>
</div>


<div class="over-wrap">
    <div class="toolbar-wrap">
        <div class="uk-container uk-container-center">
            <div class="tm-toolbar uk-clearfix uk-hidden-small">


                <div class="uk-float-right">
                    <div class="uk-panel">
                        <div class="social-top">
                            <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-facebook"></span></a>
                            <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-twitter"></span></a>
                            <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-youtube"></span></a>
                            <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-instagram"></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="tm-menu-box">

        <div style="height: 70px;" class="uk-sticky-placeholder">
            <nav style="margin: 0px;" class="tm-navbar uk-navbar" data-uk-sticky="">
                <div class="uk-container uk-container-center">
                    <a class="tm-logo uk-float-left" href="{{ route('home') }}">
                        <img src="/images/logo-img.png" alt="logo" title="logo"> <span>21<em>Corporate</em></span>
                    </a>

                    <ul class="uk-navbar-nav uk-hidden-small">
                        <li class="uk-parent uk-active" data-page="home" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{ route('home') }}">Accueil</a></li>
                        <li data-page="about" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{ route('about') }}">A Propos</a></li>
                        <li data-page="players"><a href="{{ route('players') }}">Joueurs</a></li>
                        <li data-page="events"><a href="{{ route('events') }}">Evènements</a></li>
                        <li data-page="news"><a href="{{ route('news.all') }}">Actualités</a></li>
                        <li data-page="shop"><a href="/category.html">Boutique</a></li>
                        <li data-page="contact"><a href="/contact.html">Contact</a></li>
                    </ul>
                    <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
                </div>
            </nav>
        </div>

    </div>

    @yield('content')

    <div class="bottom-wrapper">
        <div class="tm-bottom-f-box  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-f" class="tm-bottom-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="footer-logo">
                                <a href="/"><img src="/images/footer-logo-img.png" alt=""><span>21</span>Corporate</a>
                            </div>
                            <div class="footer-socials">
                                <div class="social-top">
                                    <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-facebook"></span></a>
                                    <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-twitter"></span></a>
                                    <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-youtube"></span></a>
                                    <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-instagram"></span></a>
                                </div>
                            </div>
                            <div class="clear"></div>

                            <p class="footer-about-text">
                                Cras convallis feugiat felis eget venenatis. Sed leo tellus, luctus eget ante quis, rutrum dignissim enim. Morbi efficitur tellus non mauris tincidunt feugiat. Vestibulum quis nunc in nibh eleifend convallis. Vestibulum nec viverra dui. Suspendisse vel neque eros. Donec tincidunt tempus massa sed vehicula. Integer ullamcorper at elit eu commodo.
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="tm-bottom-g-box  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-g" class="tm-bottom-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1 uk-width-large-1-2">
                        <div class="uk-panel">
                            <div class="match-list-wrap foot">
                                <div id="carusel-7" class="uk-slidenav-position" data-uk-slideshow="{ height : 37, autoplay:true, animation:'scroll' }">
                                    <div class="last-match-top">
                                        <div class="last-match-title">Dernier match</div>
                                        <div class="footer-slider-btn">
                                            <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                                            <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <ul class="uk-slideshow">
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="/images/team-ava.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        England </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        Amsterdam </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="/images/team-ava1.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Lire Plus</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="/images/team-ava2.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        Cambridgehire </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        china </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="/images/team-ava3.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Lire Plus</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="/images/team-ava4.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-20)" title="Cambridgehire VS china (2015-11-20)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        Cambridgehire </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        china </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="/images/team-ava5.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-20)" title="Cambridgehire VS china (2015-11-20)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Lire Plus</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="/images/team-ava.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        England </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        Amsterdam </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="/images/team-ava1.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Lire Plus</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li aria-hidden="false">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="/images/team-ava2.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        Cambridgehire </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        china </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="/images/team-ava3.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Lire Plus</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="/images/team-ava4.png" class="img-polaroid" alt="King VS china (2015-11-20)" title="King VS china (2015-11-20)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        King </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        china </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="/images/team-ava5.png" class="img-polaroid" alt="King VS china (2015-11-20)" title="King VS china (2015-11-20)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Lire Plus</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="/images/team-ava.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        England </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        Amsterdam </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="/images/team-ava1.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Lire Plus</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="/images/team-ava2.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        Cambridgehire </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        china </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="/images/team-ava3.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Lire Plus</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="uk-width-1-1 uk-width-large-1-2">
                        <div  class="uk-panel">
                            <div class="acymailing_module" id="acymailing_module_formAcymailing54111">
                                <div class="acymailing_fulldiv" id="acymailing_fulldiv_formAcymailing54111">
                                    <form id="formAcymailing54111" method="post" name="formAcymailing54111">
                                        <div class="acymailing_module_form">
                                            <div class="mail-title">Newsletters</div>
                                            <div class="acymailing_introtext">Suspendisse sodales, magna at dignissim cursus, velit ex porttitor eros.</div>
                                            <div class="clear"></div>
                                            <div class="space"></div>
                                            <table class="acymailing_form">
                                                <tbody>
                                                <tr>
                                                    <td class="acyfield_email acy_requiredField">
                                                            <span class="mail-wrap">
                                                                <input id="user_email_formAcymailing54111" onfocus="if(this.value == 'Enter your email') this.value = '';" onblur="if(this.value=='') this.value='Enter your email';" class="inputbox" name="user[email]" style="width:80%" value="Enter your email" title="Enter your email" type="text">
                                                            </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="acysubbuttons">
                                                            <span class="submit-wrap">
                                                                <span class="submit-wrapper">
                                                                    <input class="button subbutton btn btn-primary" value="Subscribe" name="Submit" onclick="try{ return submitacymailingform('optin','formAcymailing54111'); }catch(err){alert('The form could not be submitted '+err);return false;}" type="submit">
                                                                </span>
                                                            </span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <footer id="tm-footer" class="tm-footer">
            <div class="uk-panel">
                <div class="uk-container uk-container-center">
                    <div class="uk-grid">
                        <div class="uk-width-1-1">
                            <div class="footer-wrap">
                                <div class="foot-menu-wrap">
                                    <ul class="nav menu">
                                        <li class="item-165"><a href="{{ route('about') }}">A Propos</a></li>
                                        <li class="item-166"><a href="{{ route('players') }}">Nos Joueurs</a></li>
                                        <li class="item-167"><a href="match-list.html">Match</a></li>
                                        <li class="item-168"><a href="results.html">Résultats</a></li>
                                        <li class="item-169"><a href="{{ route('news.all') }}">Actualités</a></li>
                                    </ul>
                                </div>
                                <div class="copyrights">Copyright © 2015 <a href="/">Sportak Team</a>. All Rights Reserved.</div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <div id="offcanvas" class="uk-offcanvas">
        <div class="uk-offcanvas-bar">
            <ul class="uk-nav uk-nav-offcanvas">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="{{ route('about') }}">A Propos</a></li>
                <li><a href="{{ route('about') }}">Nos Joueurs</a></li>
                <li><a href="{{ route('about') }}">Gallerie</a></li>
                <li><a href="{{ route('about') }}">Match</a></li>
                <li><a href="{{ route('news.all') }}">Actualités</a></li>
                <li><a href="category.html">Shop</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </div>
</div>


<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/uikit.js"></script>
<script type="text/javascript" src="/js/SimpleCounter.js"></script>
<script type="text/javascript" src="/js/components/grid.js"></script>
<script type="text/javascript" src="/js/components/slider.js"></script>
<script type="text/javascript" src="/js/components/slideshow.js"></script>
<script type="text/javascript" src="/js/components/slideset.js"></script>
<script type="text/javascript" src="/js/components/sticky.js"></script>
<script type="text/javascript" src="/js/components/lightbox.js"></script>
<script type="text/javascript" src="/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="/js/components/accordion.js"></script>
<script type="text/javascript" src="/js/underscore.js"></script>
<script src="/assets/js/toastr.js"></script>

<script type="text/javascript" src="/js/theme.js"></script>
<script type="text/javascript">
    window.$ = jQuery;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('ul.uk-navbar-nav li.uk-active').removeClass('uk-active');
    const items = $('ul.uk-navbar-nav li');
    const page = "{{ $page ?? '' }}".toLowerCase();

    _.each(items, (item) => {
        if (item.dataset['page'].toLowerCase() === page)
            item.classList.add('uk-active');
    });
</script>

@yield('script')

</body>

</html>
