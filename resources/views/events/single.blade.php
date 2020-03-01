@extends('layouts.website')

@section('content')
    <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
        <div class="uk-container uk-container-center">
            <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                <div class="uk-width-1-1 uk-row-first">
                    <div class="uk-panel">
                        <div class="uk-cover-background uk-position-relative head-wrap" style="height: 290px; background-image: url(/upload/{{ $event->image }});">
                            <img class="uk-invisible" src="/upload/{{ $event->image }}" alt="" height="290" width="1920">
                            <div class="uk-position-cover uk-flex uk-flex-center head-title">
                                <h1>
                                    {{ $event->title }}
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
            <li><a href="{{ route('home') }}">Accueil</a></li>
            <li><a href="{{ route('news.all') }}">Evènement</a></li>
            <li class="uk-active"><span>{{ $event->title }}</span></li>
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
                                            <div style="background-image: url(/upload/{{ $event->image }});" class="uk-cover-background uk-position-cover"></div>
                                            <img style="width: 100%; height: auto; opacity: 0;" src="/upload/{{ $event->image }}" alt="">
                                        </li>
                                        <li>
                                            <div style="background-image: url(/upload/{{ $event->image }});" class="uk-cover-background uk-position-cover"></div>
                                            <img style="width: 100%; height: auto; opacity: 0;" src="/upload/{{ $event->image }}" alt="">
                                        </li>
                                    </ul>
                                    <div class="article-slider-btn">
                                        <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                                        <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="article-param" style="margin-bottom: 2rem">
                                <div class="date">
                                    <i class="uk-icon-calendar"></i>
                                    Du {{ date('d/m/Y', strtotime($event->start_date)) }} au {{ date('d/m/Y', strtotime($event->end_date)) }}
                                </div>
                                <div class="author">
                                    <i class="uk-icon-users"></i>
                                    <a class="filter-link" href="#" rel="nofollow">{{ $event->id }} participant(s)</a>
                                </div>
                            </div>
                            <div class="article-single-text">
                                <h1>{{ $event->title }}</h1>
                                {{ $event->description }}
                            </div>
                            <div class="share-wrap" style="margin: 5rem 2rem">
                                <div class="share-title">share</div>
                                <script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script>
                                <div class="yashare-auto-init" data-yasharel10n="en" data-yasharetype="none" data-yasharequickservices="facebook,twitter,gplus"><span class="b-share"><a rel="nofollow" target="_blank" title="Facebook" class="b-share__handle b-share__link b-share-btn__facebook" href="https://share.yandex.net/go.xml?service=facebook&amp;url=http%3A%2F%2Fsport.statiolh.bget.ru%2Findex.php%2Fnews%2Fitem%2F2-life%2F30-bla-bla-bla&amp;title=Your%20Joomla!%20Site%20-%20Suspendisse%20purus%20enim%2C%20dictum%20sed%20lorem%20ac%2C%20sodales%20maximus%20est%20-%20Life%20-%20News" data-service="facebook"><span class="b-share-icon b-share-icon_facebook"></span></a><a rel="nofollow" target="_blank" title="Twitter" class="b-share__handle b-share__link b-share-btn__twitter" href="https://share.yandex.net/go.xml?service=twitter&amp;url=http%3A%2F%2Fsport.statiolh.bget.ru%2Findex.php%2Fnews%2Fitem%2F2-life%2F30-bla-bla-bla&amp;title=Your%20Joomla!%20Site%20-%20Suspendisse%20purus%20enim%2C%20dictum%20sed%20lorem%20ac%2C%20sodales%20maximus%20est%20-%20Life%20-%20News" data-service="twitter"><span class="b-share-icon b-share-icon_twitter"></span></a><a rel="nofollow" target="_blank" title="Google Plus" class="b-share__handle b-share__link b-share-btn__gplus" href="https://share.yandex.net/go.xml?service=gplus&amp;url=http%3A%2F%2Fsport.statiolh.bget.ru%2Findex.php%2Fnews%2Fitem%2F2-life%2F30-bla-bla-bla&amp;title=Your%20Joomla!%20Site%20-%20Suspendisse%20purus%20enim%2C%20dictum%20sed%20lorem%20ac%2C%20sodales%20maximus%20est%20-%20Life%20-%20News" data-service="gplus"><span class="b-share-icon b-share-icon_gplus"></span></a></span></div>
                            </div>
                        </article>

                        <div id="comments-wrap" style="margin-top: 2rem">
                            <div id="jc">
                                <h3 class="title-bottom">Inscrivez <span>vous</span></h3>
                                <a id="addcomments" href="#addcomments"></a>
                                <form id="comments-form" name="comments-form">
                                    <input type="hidden" name="event" value="{{ $event->id }}">
                                    <div class="uk-grid">
                                        <div class="uk-width-1-2 uk-panel">
                                            <p>
                                                    <span>
                                                    <input id="comments-form-name" placeholder="Votre nom" name="name" value="" maxlength="20" size="22" tabindex="1" type="text" required>
                                                    </span>
                                            </p>
                                            <p>
                                                    <span>
                                                    <input id="comments-form-email" placeholder="Votre addresse email" name="email" value="" size="22" tabindex="2" type="text" required>
                                                    </span>
                                            </p>
                                            <p>
                                                    <span>
                                                    <input id="comments-form-homepage" placeholder="Numéro de télépone (optionnel)" name="phone" value="" size="22" tabindex="3" type="text">
                                                    </span>
                                            </p>
                                        </div>
                                        <div class="uk-width-1-2 uk-panel uk-flex uk-flex-column">
                                            <div class="textarea-wrap">
                                                <textarea id="comments-form-comment" placeholder="Message (optionnel)" name="message" tabindex="5"></textarea>
                                                <div class="grippie"></div>
                                                <div id="comments-form-buttons">
                                                    <div class="btn" id="comments-form-send">
                                                        <div><a id="subscribe" href="#" tabindex="7" title="Participer">Participer</a></div>
                                                    </div>
                                                    <div class="btn" id="comments-form-cancel" style="display:none;">
                                                        <div><a href="#" tabindex="8" onclick="return false;" title="Annuler">Annuler</a></div>
                                                    </div>
                                                    <div style="clear:both;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
            </aside>
        </div>
    </div>
@stop

@section('script')
    <script>
        $('#subscribe').click(function () {
            const data = new FormData($('#comments-form')[0]);

            $.ajax({
                url: "{{ route('events.subscribe', ['event' => $event]) }}",
                method: "POST",
                data: data,
                contentType: false,
                processData: false,
                success: (response) => {
                    console.log(response);
                    toastr.info(response.message, 'Participation enregistrée');
                },
                error: (response) => {
                    console.log(response);
                    toastr.error(response.responseJSON.message, 'Erreur');
                }
            });
        });
    </script>
@stop