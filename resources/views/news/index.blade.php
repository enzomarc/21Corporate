<!DOCTYPE html>
<html lang="en-gb">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>21Corporate</title>
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
    <link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href="css/akslider.css" rel="stylesheet" type="text/css" />
    <link href="css/donate.css" rel="stylesheet" type="text/css" />
    <link href="css/theme.css" rel="stylesheet" type="text/css" />
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/mootools/1.3.1/mootools-yui-compressed.js'></script>

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
                            <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-google"></span></a>
                            <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-pinterest"></span></a>
                            <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-youtube"></span></a>
                            <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-instagram"></span></a>
                            <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-flickr"></span></a>
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
                    <a class="tm-logo uk-float-left" href="index.html">
                        <img src="images/logo-img.png" alt="logo" title="logo"> <span>21<em>Corporate</em></span>
                    </a>

                    <ul class="uk-navbar-nav uk-hidden-small">
                        <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{ route('home') }}">Accueil</a></li>
                        <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="about.html">A Propos</a></li>
                        <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="#">Pages</a>
                            <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                                <div class="uk-grid uk-dropdown-grid">
                                    <div class="uk-width-1-1">
                                        <ul class="uk-nav uk-nav-navbar">
                                            <li><a href="players.html">Joueurs</a>
                                            </li>
                                            <li><a href="gallery.html">Gallerie</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="match-list.html">Match</a>
                            <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                                <div class="uk-grid uk-dropdown-grid">
                                    <div class="uk-width-1-1">
                                        <ul class="uk-nav uk-nav-navbar">
                                            <li><a href="results.html">Resultats</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="uk-active"><a href="{{ route('news.all') }}">Actualités</a>
                        </li>
                        <li><a href="category.html">Boutique</a>
                        </li>
                        <li><a href="contact.html">Contact</a>
                        </li>
                    </ul>
                    <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
                </div>
            </nav>
        </div>

    </div>

    <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
        <div class="uk-container uk-container-center">
            <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                <div class="uk-width-1-1 uk-row-first">
                    <div class="uk-panel">
                        <div class="uk-cover-background uk-position-relative head-wrap" style="height: 290px; background-image: url('images/head-bg.jpg');">
                            <img class="uk-invisible" src="images/head-bg.jpg" alt="" height="290" width="1920">
                            <div class="uk-position-cover uk-flex uk-flex-center head-title">
                                <h1>
                                    Actualités
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <div class="uk-container uk-container-center alt">
        <ul class="uk-breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="uk-active"><span>Actualités</span></li>
        </ul>
    </div>

    <div class="uk-container uk-container-center">
        <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
            <div class="tm-main uk-width-medium-3-4 uk-push-1-4">

                <div class="contentpaneopen">
                    <main id="tm-content" class="tm-content">
                        <div class="uk-grid" data-uk-grid-match="">
                            @foreach($posts as $post)
                                <div class="uk-width-large-1-3 uk-width-medium-2-4 uk-width-small-2-4 list-article uk-flex uk-flex-column">
                                    <div class="wrapper">
                                        <div class="img-wrap uk-flex-wrap-top">
                                            <a href="{{ route('news.single', ['slug' => $post->slug]) }}">
                                                <img src="/{{ str_replace('public', 'storage', $post->image) }}" class="img-polaroid" alt="">
                                            </a>
                                        </div>
                                        <div class="info uk-flex-wrap-middle">
                                            <div class="date">
                                                {{ date('D, d M Y', strtotime($post->created_at)) }}
                                            </div>
                                            <div class="name">
                                                <h4>
                                                    <a href="{{ route('news.single', ['slug' => $post->slug]) }}">
                                                        {{ $post->title }}
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="text">
                                                <p>Vivamus hendrerit, tortor sed luctus maximus, nunc urna hendrerit nibh, sit amet efficitur libero lorem quis mauris. Nunc a pulvinar lectus.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article-actions uk-flex-wrap-bottom">
                                        <div class="count"><i class="uk-icon-user"></i><span style="font-size: 9px">by {{ $post->author }}</span></div>
                                        <div class="read-more"><a href="{{ route('news.single', ['slug' => $post->slug]) }}">Lire plus</a></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </main>
                </div>


            </div>
            <aside class="tm-sidebar-a uk-width-medium-1-4 uk-pull-3-4 uk-row-first">
                <div class="uk-panel newsletter-sidebar">
                    <h3 class="uk-panel-title">Newsletter</h3>
                    <div class="acymailing_modulenewsletter-sidebar" id="acymailing_module_formAcymailing40192">
                        <div class="acymailing_fulldiv" id="acymailing_fulldiv_formAcymailing40192">
                            <form id="formAcymailing40192" method="post" name="formAcymailing40192">
                                <div class="acymailing_module_form">
                                    <div class="mail-title">Newsletter</div>
                                    <div class="acymailing_introtext">Inscrivez vous à notre Newsletter et restez toujours à l'affût des dernières actualités.</div>
                                    <div class="clear"></div>
                                    <div class="space"></div>
                                    <table class="acymailing_form">
                                        <tbody>
                                        <tr>
                                            <td class="acyfield_email acy_requiredField">
                                                <span class="mail-wrap">
                                                    <input id="user_email_formAcymailing40192" onfocus="if(this.value == 'Email') this.value = '';" onblur="if(this.value=='') this.value='Email';" class="inputbox" name="user[email]" style="width:80%" value="Email" title="Email" type="text">
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="acysubbuttons">
                                                <span class="submit-wrap">
                                                    <span class="submit-wrapper">
                                                        <input class="button subbutton btn btn-primary" value=" " name="Submit" onclick="try{ return submitacymailingform('optin','formAcymailing40192'); }catch(err){alert('The form could not be submitted '+err);return false;}" type="submit">
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
                <div class="uk-panel news-sidebar">
                    <h3 class="uk-panel-title">Last News</h3>
                    <article class="has-context ">
                        <div class="latest-news-wrap">
                            <div class="img-wrap">
                                <a href="#">
                                    <img src="images/35b8bf93115eb2b8da9f8b4f41fdb0fd.jpg" class="img-polaroid" alt="">
                                </a>
                            </div>
                            <div class="info">
                                <div class="date">
                                    November 25, 2015
                                </div>
                                <div class="name">
                                    <h4>
                                        <a href="#">
                                            Suspendisse purus enim, dictum sed lorem ac, sodales maximus est
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="has-context ">
                        <div class="latest-news-wrap">
                            <div class="img-wrap">
                                <a href="#">
                                    <img src="images/4e9ed1f24d1f63b923e67456774158a3.jpg" class="img-polaroid" alt="">
                                </a>
                            </div>
                            <div class="info">
                                <div class="date">
                                    November 20, 2015
                                </div>
                                <div class="name">
                                    <h4>
                                        <a href="#">
                                            Suspendisse purus enim, dictum sed lorem ac, sodales maximus est
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="has-context ">
                        <div class="latest-news-wrap">
                            <div class="img-wrap">
                                <a href="#">
                                    <img src="images/19896c58825d0206bd858f7e50bf51b2.jpg" class="img-polaroid" alt="">
                                </a>
                            </div>
                            <div class="info">
                                <div class="date">
                                    November 20, 2015
                                </div>
                                <div class="name">
                                    <h4>
                                        <a href="#">
                                            Cum sociis natoque penatibus et magnis dis parturient
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="uk-panel tags-sidebar">
                    <h3 class="uk-panel-title">Mots clés</h3>
                    <div class="contentpaneopen">
                        <ul class="tag_list" id="tags_list">

                        </ul>
                    </div>
                    <div style="clear: both;"></div>
                </div>
            </aside>
        </div>
    </div>

    <div class="bottom-wrapper">
        <div class="tm-bottom-f-box  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-f" class="tm-bottom-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="footer-logo">
                                <a href="/"><img src="images/footer-logo-img.png" alt=""><span>Sport</span>.ak</a>
                            </div>
                            <div class="footer-socials">
                                <div class="social-top">
                                    <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-facebook"></span></a>
                                    <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-twitter"></span></a>
                                    <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-google"></span></a>
                                    <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-pinterest"></span></a>
                                    <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-youtube"></span></a>
                                    <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-instagram"></span></a>
                                    <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-flickr"></span></a>
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
                                        <div class="last-match-title">Last match</div>
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
                                                            <img src="images/team-ava.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        England </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        Amsterdam </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava1.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava2.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        Cambridgehire </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        china </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava3.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava4.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-20)" title="Cambridgehire VS china (2015-11-20)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        Cambridgehire </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        china </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava5.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-20)" title="Cambridgehire VS china (2015-11-20)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        England </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        Amsterdam </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava1.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li aria-hidden="false">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava2.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        Cambridgehire </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        china </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava3.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava4.png" class="img-polaroid" alt="King VS china (2015-11-20)" title="King VS china (2015-11-20)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        King </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        china </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava5.png" class="img-polaroid" alt="King VS china (2015-11-20)" title="King VS china (2015-11-20)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        England </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        Amsterdam </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava1.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava2.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        Cambridgehire </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        china </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava3.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Read More</a>
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
                                        <li class="item-165"><a href="about.html">About</a></li>
                                        <li class="item-166"><a href="players.html">Players</a></li>
                                        <li class="item-167"><a href="match-list.html">Match</a></li>
                                        <li class="item-168"><a href="results.html">Results</a></li>
                                        <li class="item-169"><a href="news.html">Actualités</a></li>
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
                <li class="uk-parent"><a href="index.html">Home</a>
                    <ul class="uk-nav-sub">
                        <li><a class="yellow-scheme" href="../yellow/index.html">Yellow Color Scheme</a>
                        </li>
                        <li><a class="blue-scheme" href="../blue/index.html">Blue Color Scheme</a>
                        </li>
                        <li><a class="red-scheme" href="../red/index.html">Red Color Scheme</a>
                        </li>
                        <li><a href="offline.html">Offline Page</a>
                        </li>
                        <li><a href="404.html">Error Page</a>
                        </li>
                    </ul>
                </li>
                <li><a href="about.html">About</a></li>
                <li class="uk-parent"><a href="#">Pages</a>
                    <ul class="uk-nav-sub">
                        <li><a href="players.html">Players</a>
                        </li>
                        <li><a href="gallery.html">Gallery</a>
                        </li>
                    </ul>
                </li>
                <li class="uk-parent"><a href="match-list.html">Match</a>
                    <ul class="uk-nav-sub">
                        <li><a href="results.html">Results</a>
                        </li>
                    </ul>
                </li>
                <li class="uk-active"><a href="news.html">Actualités</a>
                </li>
                <li><a href="category.html">Shop</a>
                </li>
                <li><a href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/uikit.js"></script>
<script type="text/javascript" src="js/SimpleCounter.js"></script>
<script type="text/javascript" src="js/components/grid.js"></script>
<script type="text/javascript" src="js/components/slider.js"></script>
<script type="text/javascript" src="js/components/slideshow.js"></script>
<script type="text/javascript" src="js/components/slideset.js"></script>
<script type="text/javascript" src="js/components/sticky.js"></script>
<script type="text/javascript" src="js/components/lightbox.js"></script>
<script type="text/javascript" src="js/components/accordion.js"></script>
<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>

<script type="text/javascript" src="js/theme.js"></script>
<script>
    fetch("{{ route('news.tags') }}")
        .then(data => {
            return data.json();
        })
        .then(res => {
            const list = document.querySelector('#tags_list');

            for (const tag of res.tags) {
                list.innerHTML += '<li class="tag_element"><a href="#" rel="nofollow"><span class="tag">'+ tag +'</span></a></li>';
            }
        });
</script>

</body>

</html>