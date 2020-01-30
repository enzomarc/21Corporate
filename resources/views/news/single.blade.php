@extends('layouts.website')

@section('content')
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
@stop