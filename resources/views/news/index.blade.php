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
@stop

@section('script')
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
@stop