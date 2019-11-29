<!DOCTYPE html>
<html lang="en-gb">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>21Corporate</title>
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href="/css/akslider.css" rel="stylesheet" type="text/css" />
    <link href="/css/donate.css" rel="stylesheet" type="text/css" />
    <link href="/css/theme.css" rel="stylesheet" type="text/css" />

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
                        <img src="/images/logo-img.png" alt="logo" title="logo"> <span>21<em>Corporate</em></span>
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
                        <div class="uk-cover-background uk-position-relative head-wrap" style="height: 290px; background-image: url(/{{ str_replace('public', 'storage', $post->image) }});">
                            <img class="uk-invisible" src="/{{ str_replace('public', 'storage', $post->image) }}" alt="" height="290" width="1920">
                            <div class="uk-position-cover uk-flex uk-flex-center head-title">
                                <h1>
                                    {{ $post->title }}
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
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('news.all') }}">News</a></li>
            <li class="uk-active"><span>{{ $post->title }}</span></li>
        </ul>
    </div>

    <div class="uk-container uk-container-center">
        <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
            <div class="tm-main uk-width-medium-3-4 uk-push-1-4">
                <main id="tm-content" class="tm-content">
                    <div class="contentpaneopen">
                        <article>
                            <div class="clearfix"></div>
                            <div class="article-slider">
                                <div id="carusel-11-30" class="uk-slidenav-position" data-uk-slideshow="{ height : 510 }">
                                    <ul class="uk-slideshow">
                                        <li>
                                            <div style="background-image: url({{ str_replace('public', 'storage', $post->image) }});" class="uk-cover-background uk-position-cover"></div>
                                            <img style="width: 100%; height: auto; opacity: 0;" src="/{{ str_replace('public', 'storage', $post->image) }}" alt="">
                                        </li>
                                        <li>
                                            <div style="background-image: url({{ str_replace('public', 'storage', $post->image) }});" class="uk-cover-background uk-position-cover"></div>
                                            <img style="width: 100%; height: auto; opacity: 0;" src="/{{ str_replace('public', 'storage', $post->image) }}" alt="">
                                        </li>
                                    </ul>
                                    <div class="article-slider-btn">
                                        <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                                        <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="article-param">
                                <div class="date">
                                    <i class="uk-icon-calendar"></i>
                                    {{ date('D, d M Y', strtotime($post->created_at)) }}
                                </div>
                                <div class="author">
                                    <i class="uk-icon-user"></i>
                                    <a class="filter-link" data-original-title="Montrer seulement les articles de <b>{{ $post->author }}</b>" href="#" rel="nofollow">{{ $post->author }}</a>
                                </div>
                            </div>
                            <div class="article-single-text">
                                {!! $post->content !!}
                            </div>
                            <div class="share-wrap">
                                <div class="share-title">share</div>
                                <script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script>
                                <div class="yashare-auto-init" data-yasharel10n="en" data-yasharetype="none" data-yasharequickservices="facebook,twitter,gplus"><span class="b-share"><a rel="nofollow" target="_blank" title="Facebook" class="b-share__handle b-share__link b-share-btn__facebook" href="https://share.yandex.net/go.xml?service=facebook&amp;url=http%3A%2F%2Fsport.statiolh.bget.ru%2Findex.php%2Fnews%2Fitem%2F2-life%2F30-bla-bla-bla&amp;title=Your%20Joomla!%20Site%20-%20Suspendisse%20purus%20enim%2C%20dictum%20sed%20lorem%20ac%2C%20sodales%20maximus%20est%20-%20Life%20-%20News" data-service="facebook"><span class="b-share-icon b-share-icon_facebook"></span></a><a rel="nofollow" target="_blank" title="Twitter" class="b-share__handle b-share__link b-share-btn__twitter" href="https://share.yandex.net/go.xml?service=twitter&amp;url=http%3A%2F%2Fsport.statiolh.bget.ru%2Findex.php%2Fnews%2Fitem%2F2-life%2F30-bla-bla-bla&amp;title=Your%20Joomla!%20Site%20-%20Suspendisse%20purus%20enim%2C%20dictum%20sed%20lorem%20ac%2C%20sodales%20maximus%20est%20-%20Life%20-%20News" data-service="twitter"><span class="b-share-icon b-share-icon_twitter"></span></a><a rel="nofollow" target="_blank" title="Google Plus" class="b-share__handle b-share__link b-share-btn__gplus" href="https://share.yandex.net/go.xml?service=gplus&amp;url=http%3A%2F%2Fsport.statiolh.bget.ru%2Findex.php%2Fnews%2Fitem%2F2-life%2F30-bla-bla-bla&amp;title=Your%20Joomla!%20Site%20-%20Suspendisse%20purus%20enim%2C%20dictum%20sed%20lorem%20ac%2C%20sodales%20maximus%20est%20-%20Life%20-%20News" data-service="gplus"><span class="b-share-icon b-share-icon_gplus"></span></a></span></div>
                            </div>
                        </article>
                        <div class="news-nav-wrap">
                            <div class="uk-grid" data-uk-grid-match="">
                                <div class="uk-width-1-2 uk-panel list-article news-nav">
                                    <div class="name">
                                        <h4>
                                            <a href="news-single.html">
                                                Vestibulum ante ipsum primis in            </a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="uk-width-1-2 uk-panel list-article news-nav">
                                    <div class="name">
                                        <h4>
                                            <a href="news-single.html">
                                                Suspendisse purus enim, dictum sed lorem ac, sodales maximus est            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="other-post-title">Other <span>Posts</span></h3>
                        <div class="uk-grid" data-uk-grid-match="">
                            <div class="uk-width-large-1-3 uk-width-medium-2-4 uk-width-small-2-4 list-article other uk-flex uk-flex-column">
                                <div class="wrapper">
                                    <div class="img-wrap">
                                        <a href="news-single.html">
                                            <img src="/images/news/534579b3c373c09398691a46025fe5e6.jpg" class="img-polaroid" alt="">
                                        </a>        </div>
                                    <div class="info">
                                        <div class="date">
                                            November 19, 2015            </div>
                                        <div class="name">
                                            <h4>
                                                <a href="news-single.html">
                                                    Nunc in interdum neque. Mauris tincidunt molestie felis                    </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-large-1-3 uk-width-medium-2-4 uk-width-small-2-4 list-article other uk-flex uk-flex-column">
                                <div class="wrapper">
                                    <div class="img-wrap">
                                        <a href="news-single.html">
                                            <img src="/images/news/7f2425d96a8122cb1ac403d0604c257e.jpg" class="img-polaroid" alt="">
                                        </a>        </div>
                                    <div class="info">
                                        <div class="date">
                                            November 20, 2015            </div>
                                        <div class="name">
                                            <h4>
                                                <a href="news-single.html">
                                                    Interdum et malesuada fames ac ante ipsum primis in faucibus                    </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-large-1-3 uk-width-medium-2-4 uk-width-small-2-4 list-article other uk-flex uk-flex-column">
                                <div class="wrapper">
                                    <div class="img-wrap">
                                        <a href="news-single.html">
                                            <img src="/images/news/35b8bf93115eb2b8da9f8b4f41fdb0fd.jpg" class="img-polaroid" alt="">
                                        </a>        </div>
                                    <div class="info">
                                        <div class="date">
                                            November 25, 2015            </div>
                                        <div class="name">
                                            <h4>
                                                <a href="news-single.html">
                                                    Suspendisse purus enim, dictum sed lorem ac, sodales maximus est                    </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="comments-wrap">
                            <div id="jc">
                                <div id="comments">
                                    <h3>Comments <span>3</span></h3>
                                    <div class="comments-list" id="comments-list-0">
                                        <div class="even" id="comment-item-14">
                                            <div class="rbox">
                                                <div class="comment-avatar"><img src="http://www.gravatar.com/avatar/d18ba4a7237afbb7b1fb23fc70c2081b?d=http%3A%2F%2Fsport.statiolh.bget.ru%2Fcomponents%2Fcom_jcomments%2Fimages%2Fno_avatar.png" alt="Jesica"></div>
                                                <div class="comment-box avatar-indent">
                                                    <a class="comment-anchor" href="#comment-14" id="comment-14">#</a>
                                                    <span class="comment-author">Jesica</span>
                                                    <span class="comment-date">12 : 50 PM, December 08, 2015</span>
                                                    <div class="comment-body" id="comment-body-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>
                                                    <span class="comments-buttons">
                                                        <a href="#" onclick="jcomments.showReply(14); return false;">Reply</a>
                                                        <a href="#" onclick="jcomments.showReply(14,1); return false;">Reply with quote</a>
                                                        <a href="#" onclick="jcomments.quoteComment(14); return false;">Quote</a>
                                                        </span>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="comments-list" id="comments-list-14">
                                            <div class="odd" id="comment-item-19">
                                                <div class="rbox">
                                                    <div class="comment-avatar"><img src="http://www.gravatar.com/avatar/ee93789afa0c550a5c6e41f5e85caed3?d=http%3A%2F%2Fsport.statiolh.bget.ru%2Fcomponents%2Fcom_jcomments%2Fimages%2Fno_avatar.png" alt="Jorge"></div>
                                                    <div class="comment-box avatar-indent">
                                                        <a class="comment-anchor" href="#comment-19" id="comment-19">#</a>
                                                        <span class="comment-author">Jorge</span>
                                                        <span class="comment-date">01 : 08 PM, December 08, 2015</span>
                                                        <div class="comment-body" id="comment-body-19">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                                                        <span class="comments-buttons">
                                                            <a href="#" onclick="jcomments.showReply(19); return false;">Reply</a>
                                                            <a href="#" onclick="jcomments.showReply(19,1); return false;">Reply with quote</a>
                                                            <a href="#" onclick="jcomments.quoteComment(19); return false;">Quote</a>
                                                            </span>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="comments-list" id="comments-list-19">
                                                <div class="even" id="comment-item-20">
                                                    <div class="rbox">
                                                        <div class="comment-avatar"><img src="http://www.gravatar.com/avatar/b04dfe4ca691441cd19e145fc5d513b8?d=http%3A%2F%2Fsport.statiolh.bget.ru%2Fcomponents%2Fcom_jcomments%2Fimages%2Fno_avatar.png" alt="Ann"></div>
                                                        <div class="comment-box avatar-indent">
                                                            <a class="comment-anchor" href="#comment-20" id="comment-20">#</a>
                                                            <span class="comment-author">Ann</span>
                                                            <span class="comment-date">01 : 10 PM, December 08, 2015</span>
                                                            <div class="comment-body" id="comment-body-20">The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains</div>
                                                            <span class="comments-buttons">
                                                                <a href="#" onclick="jcomments.showReply(20); return false;">Reply</a>
                                                                <a href="#" onclick="jcomments.showReply(20,1); return false;">Reply with quote</a>
                                                                <a href="#" onclick="jcomments.quoteComment(20); return false;">Quote</a>
                                                                </span>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="comments-list-footer"><a class="refresh" href="#" title="Refresh comments list" onclick="jcomments.showPage(30,'com_cobalt',0);return false;">Refresh comments list</a></div>
                                </div>
                                <h3 class="title-bottom">Leave a <span>Reply</span></h3>
                                <a id="addcomments" href="#addcomments"></a>
                                <form id="comments-form" name="comments-form" action="javascript:void(null);">
                                    <div class="uk-grid">
                                        <div class="uk-width-1-2 uk-panel">
                                            <p>
                                                    <span>
                                                    <input id="comments-form-name" placeholder="Name" name="name" value="" maxlength="20" size="22" tabindex="1" type="text">
                                                    </span>
                                            </p>
                                            <p>
                                                    <span>
                                                    <input id="comments-form-email" placeholder="Email" name="email" value="" size="22" tabindex="2" type="text">
                                                    </span>
                                            </p>
                                            <p>
                                                    <span>
                                                    <input id="comments-form-homepage" placeholder="Website" name="homepage" value="" size="22" tabindex="3" type="text">
                                                    </span>
                                            </p>
                                        </div>
                                        <div class="uk-width-1-2 uk-panel uk-flex uk-flex-column">
                                            <div class="textarea-wrap">
                                                <textarea id="comments-form-comment" placeholder="Message" name="comment" tabindex="5"></textarea>
                                                <div class="grippie"></div>
                                                <div id="comments-form-buttons">
                                                    <div class="btn" id="comments-form-send">
                                                        <div><a href="#" tabindex="7" onclick="jcomments.saveComment();return false;" title="Send (Ctrl+Enter)">Send</a></div>
                                                    </div>
                                                    <div class="btn" id="comments-form-cancel" style="display:none;">
                                                        <div><a href="#" tabindex="8" onclick="return false;" title="Cancel">Cancel</a></div>
                                                    </div>
                                                    <div style="clear:both;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <input name="object_id" value="30" type="hidden">
                                        <input name="object_group" value="com_cobalt" type="hidden">
                                    </div>
                                </form>
                                <script type="text/javascript">
                                    <!--
                                    function JCommentsInitializeForm()
                                    {
                                        var jcEditor = new JCommentsEditor('comments-form-comment', true);
                                        jcomments.setForm(new JCommentsForm('comments-form', jcEditor));
                                    }

                                    if (window.addEventListener) {window.addEventListener('load',JCommentsInitializeForm,false);}
                                    else if (document.addEventListener){document.addEventListener('load',JCommentsInitializeForm,false);}
                                    else if (window.attachEvent){window.attachEvent('onload',JCommentsInitializeForm);}
                                    else {if (typeof window.onload=='function'){var oldload=window.onload;window.onload=function(){oldload();JCommentsInitializeForm();}} else window.onload=JCommentsInitializeForm;}
                                    //-->
                                </script>
                                <script type="text/javascript">
                                    <!--
                                    jcomments.setAntiCache(1,0,0);
                                    //-->
                                </script>
                            </div>
                        </div>


                    </div>

                </main>
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
                        <ul id="tags_list" class="tag_list">
                            @foreach($post->tag as $tag)
                                <li class="tag_element"><a href="#" rel="nofollow"><span class="tag">{{ $tag }}</span></a></li>
                            @endforeach
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
                                <a href="/"><img src="/images/footer-logo-img.png" alt=""><span>Sport</span>.ak</a>
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
                                                    <a class="read-more" href="match-single.html">Read More</a>
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
                                                    <a class="read-more" href="match-single.html">Read More</a>
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
                                                    <a class="read-more" href="match-single.html">Read More</a>
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
                                                    <a class="read-more" href="match-single.html">Read More</a>
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
                                                    <a class="read-more" href="match-single.html">Read More</a>
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
                                                    <a class="read-more" href="match-single.html">Read More</a>
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
                                                    <a class="read-more" href="match-single.html">Read More</a>
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
                                        <li class="item-165"><a href="about.html">About</a>
                                        </li>
                                        <li class="item-166"><a href="players.html">Players</a>
                                        </li>
                                        <li class="item-167"><a href="match-list.html">Match</a>
                                        </li>
                                        <li class="item-168"><a href="results.html">Results</a>
                                        </li>
                                        <li class="item-169"><a href="news.html">News</a>
                                        </li>
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
                <li class="uk-active"><a href="news.html">News</a>
                </li>
                <li><a href="category.html">Shop</a>
                </li>
                <li><a href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/uikit.js"></script>
<script type="text/javascript" src="/js/components/grid.js"></script>
<script type="text/javascript" src="/js/components/slider.js"></script>
<script type="text/javascript" src="/js/components/slideshow.js"></script>
<script type="text/javascript" src="/js/components/slideset.js"></script>
<script type="text/javascript" src="/js/components/sticky.js"></script>
<script type="text/javascript" src="/js/components/lightbox.js"></script>
<script type="text/javascript" src="/js/components/accordion.js"></script>
<script type="text/javascript" src="/js/isotope.pkgd.min.js"></script>

<script type="text/javascript" src="/js/theme.js"></script>
</body>

</html>