<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="icon" href="/assets/images/favicon.ico">

    <title>21Corporate | Administration</title>

    <link rel="stylesheet" href="/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" href="/assets/css/font-icons/entypo/css/entypo.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/neon-core.css">
    <link rel="stylesheet" href="/assets/css/neon-theme.css">
    <link rel="stylesheet" href="/assets/css/neon-forms.css">
    <link rel="stylesheet" href="/assets/css/custom.css">

    @yield('css')

    <script src="/assets/js/jquery-1.11.3.min.js"></script>

    <!--[if lt IE 9]><script src="/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="page-body  page-left-in" data-url="https://enzomarc.github.io">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

    <div class="sidebar-menu">

        <div class="sidebar-menu-inner">

            <header class="logo-env">

                <!-- logo -->
                <div class="logo">
                    <a href="{{ route('dashboard') }}">
                        <h2 style="color: #fff; font-weight: bold">21Corporate</h2>
                    </a>
                </div>

                <!-- logo collapse icon -->
                <div class="sidebar-collapse">
                    <a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                        <i class="entypo-menu"></i>
                    </a>
                </div>

                <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
                <div class="sidebar-mobile-menu visible-xs">
                    <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                        <i class="entypo-menu"></i>
                    </a>
                </div>

            </header>

            <div class="sidebar-user-info">

                <div class="sui-normal">
                    <a href="{{ route('dashboard') }}" class="user-link">
                        <img src="{{ auth()->user()->avatar != null ? "/upload/" . auth()->user()->avatar : "/assets/images/thumb-1@2x.png" }}" width="55" alt="" class="img-circle" />

                        <span>Bienvenue,</span>
                        <strong>{{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}</strong>
                    </a>
                </div>

                <div class="sui-hover inline-links animate-in"><!-- You can remove "inline-links" class to make links appear vertically, class "animate-in" will make A elements animateable when click on user profile -->
                    <a href="#">
                        <i class="entypo-pencil"></i>
                        New Page
                    </a>

                    <a href="mailbox.html">
                        <i class="entypo-mail"></i>
                        Inbox
                    </a>

                    <a href="extra-lockscreen.html">
                        <i class="entypo-lock"></i>
                        Log Off
                    </a>

                    <span class="close-sui-popup">&times;</span><!-- this is mandatory -->
                </div>
            </div>


            <ul id="main-menu" class="main-menu">
                <!-- add class "multiple-expanded" to allow multiple submenus to open -->
                <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
                <li data-page="about">
                    <a href="{{ route('about.admin') }}">
                        <i class="entypo-info-circled"></i>
                        <span class="title">A Propos</span>
                    </a>
                </li>
                <li data-page="news">
                    <a href="{{ route('news.index') }}">
                        <i class="entypo-newspaper"></i>
                        <span class="title">Actualités</span>
                    </a>
                </li>
                <li data-page="players">
                    <a href="{{ route('players.index') }}">
                        <i class="entypo-users"></i>
                        <span class="title">Joueurs</span>
                    </a>
                </li>
                <li data-page="events">
                    <a href="{{ route('events.index') }}">
                        <i class="entypo-location"></i>
                        <span class="title">Evènements</span>
                    </a>
                </li>
                <li data-page="gallery">
                    <a href="{{ route('gallery') }}">
                        <i class="entypo-camera"></i>
                        <span class="title">Gallerie</span>
                    </a>
                </li>
                <li data-page="unknown" class="has-sub">
                    <a href="#">
                        <i class="entypo-flow-tree"></i>
                        <span class="title">Menu Levels</span>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="entypo-flow-line"></i>
                                <span class="title">Menu Level 1.1</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="entypo-flow-line"></i>
                                <span class="title">Menu Level 1.2</span>
                            </a>
                        </li>
                        <li class="has-sub">
                            <a href="#">
                                <i class="entypo-flow-line"></i>
                                <span class="title">Menu Level 1.3</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="entypo-flow-parallel"></i>
                                        <span class="title">Menu Level 2.1</span>
                                    </a>
                                </li>
                                <li class="has-sub">
                                    <a href="#">
                                        <i class="entypo-flow-parallel"></i>
                                        <span class="title">Menu Level 2.2</span>
                                    </a>
                                    <ul>
                                        <li class="has-sub">
                                            <a href="#">
                                                <i class="entypo-flow-cascade"></i>
                                                <span class="title">Menu Level 3.1</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="entypo-flow-branch"></i>
                                                        <span class="title">Menu Level 4.1</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="entypo-flow-cascade"></i>
                                                <span class="title">Menu Level 3.2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="entypo-flow-parallel"></i>
                                        <span class="title">Menu Level 2.3</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>

    </div>

    <div class="main-content">

        <div class="row">

            <!-- Profile Info and Notifications -->
            <div class="col-md-6 col-sm-8 clearfix">

                <ul class="user-info pull-left pull-none-xsm">


                    <ul class="user-info pull-left pull-right-xs pull-none-xsm">

                        <!-- Raw Notifications -->
                        <li class="notifications dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="entypo-attention"></i>
                                <span class="badge badge-info">6</span>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="top">
                                    <p class="small">
                                        <a href="#" class="pull-right">Mark all Read</a>
                                        You have <strong>3</strong> new notifications.
                                    </p>
                                </li>

                                <li>
                                    <ul class="dropdown-menu-list scroller">
                                        <li class="unread notification-success">
                                            <a href="#">
                                                <i class="entypo-user-add pull-right"></i>

                                                <span class="line">
												<strong>New user registered</strong>
											</span>

                                                <span class="line small">
												30 seconds ago
											</span>
                                            </a>
                                        </li>

                                        <li class="unread notification-secondary">
                                            <a href="#">
                                                <i class="entypo-heart pull-right"></i>

                                                <span class="line">
												<strong>Someone special liked this</strong>
											</span>

                                                <span class="line small">
												2 minutes ago
											</span>
                                            </a>
                                        </li>

                                        <li class="notification-primary">
                                            <a href="#">
                                                <i class="entypo-user pull-right"></i>

                                                <span class="line">
												<strong>Privacy settings have been changed</strong>
											</span>

                                                <span class="line small">
												3 hours ago
											</span>
                                            </a>
                                        </li>

                                        <li class="notification-danger">
                                            <a href="#">
                                                <i class="entypo-cancel-circled pull-right"></i>

                                                <span class="line">
												John cancelled the event
											</span>

                                                <span class="line small">
												9 hours ago
											</span>
                                            </a>
                                        </li>

                                        <li class="notification-info">
                                            <a href="#">
                                                <i class="entypo-info pull-right"></i>

                                                <span class="line">
												The server is status is stable
											</span>

                                                <span class="line small">
												yesterday at 10:30am
											</span>
                                            </a>
                                        </li>

                                        <li class="notification-warning">
                                            <a href="#">
                                                <i class="entypo-rss pull-right"></i>

                                                <span class="line">
												New comments waiting approval
											</span>

                                                <span class="line small">
												last week
											</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="external">
                                    <a href="#">View all notifications</a>
                                </li>
                            </ul>

                        </li>

                        <!-- Message Notifications -->
                        <li class="notifications dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="entypo-mail"></i>
                                <span class="badge badge-secondary">10</span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <form class="top-dropdown-search">

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search anything..." name="s" />
                                        </div>

                                    </form>

                                    <ul class="dropdown-menu-list scroller">
                                        <li class="active">
                                            <a href="#">
											<span class="image pull-right">
												<img src="/assets/images/thumb-1@2x.png" width="44" alt="" class="img-circle" />
											</span>

                                                <span class="line">
												<strong>Luc Chartier</strong>
												- yesterday
											</span>

                                                <span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
                                            </a>
                                        </li>

                                        <li class="active">
                                            <a href="#">
											<span class="image pull-right">
												<img src="/assets/images/thumb-2@2x.png" width="44" alt="" class="img-circle" />
											</span>

                                                <span class="line">
												<strong>Salma Nyberg</strong>
												- 2 days ago
											</span>

                                                <span class="line desc small">
												Oh he decisively impression attachment friendship so if everything.
											</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
											<span class="image pull-right">
												<img src="/assets/images/thumb-3@2x.png" width="44" alt="" class="img-circle" />
											</span>

                                                <span class="line">
												Hayden Cartwright
												- a week ago
											</span>

                                                <span class="line desc small">
												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
											<span class="image pull-right">
												<img src="/assets/images/thumb-4@2x.png" width="44" alt="" class="img-circle" />
											</span>

                                                <span class="line">
												Sandra Eberhardt
												- 16 days ago
											</span>

                                                <span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="external">
                                    <a href="mailbox.html">All Messages</a>
                                </li>
                            </ul>

                        </li>

                        <!-- Task Notifications -->
                        <li class="notifications dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="entypo-list"></i>
                                <span class="badge badge-warning">1</span>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="top">
                                    <p>You have 6 pending tasks</p>
                                </li>

                                <li>
                                    <ul class="dropdown-menu-list scroller">
                                        <li>
                                            <a href="#">
											<span class="task">
												<span class="desc">Procurement</span>
												<span class="percent">27%</span>
											</span>

                                                <span class="progress">
												<span style="width: 27%;" class="progress-bar progress-bar-success">
													<span class="sr-only">27% Complete</span>
												</span>
											</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
											<span class="task">
												<span class="desc">App Development</span>
												<span class="percent">83%</span>
											</span>

                                                <span class="progress progress-striped">
												<span style="width: 83%;" class="progress-bar progress-bar-danger">
													<span class="sr-only">83% Complete</span>
												</span>
											</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
											<span class="task">
												<span class="desc">HTML Slicing</span>
												<span class="percent">91%</span>
											</span>

                                                <span class="progress">
												<span style="width: 91%;" class="progress-bar progress-bar-success">
													<span class="sr-only">91% Complete</span>
												</span>
											</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
											<span class="task">
												<span class="desc">Database Repair</span>
												<span class="percent">12%</span>
											</span>

                                                <span class="progress progress-striped">
												<span style="width: 12%;" class="progress-bar progress-bar-warning">
													<span class="sr-only">12% Complete</span>
												</span>
											</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
											<span class="task">
												<span class="desc">Backup Create Progress</span>
												<span class="percent">54%</span>
											</span>

                                                <span class="progress progress-striped">
												<span style="width: 54%;" class="progress-bar progress-bar-info">
													<span class="sr-only">54% Complete</span>
												</span>
											</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
											<span class="task">
												<span class="desc">Upgrade Progress</span>
												<span class="percent">17%</span>
											</span>

                                                <span class="progress progress-striped">
												<span style="width: 17%;" class="progress-bar progress-bar-important">
													<span class="sr-only">17% Complete</span>
												</span>
											</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="external">
                                    <a href="#">See all tasks</a>
                                </li>
                            </ul>

                        </li>

                    </ul>

            </div>


            <!-- Raw Links -->
            <div class="col-md-6 col-sm-4 clearfix hidden-xs">

                <ul class="list-inline links-list pull-right">

                    <!-- Language Selector -->
                    <li class="dropdown language-selector">

                        Language: &nbsp;
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
                            <img src="/assets/images/flags/flag-uk.png" width="16" height="16" />
                        </a>

                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="#">
                                    <img src="/assets/images/flags/flag-de.png" width="16" height="16" />
                                    <span>Deutsch</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#">
                                    <img src="/assets/images/flags/flag-uk.png" width="16" height="16" />
                                    <span>English</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/assets/images/flags/flag-fr.png" width="16" height="16" />
                                    <span>François</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/assets/images/flags/flag-al.png" width="16" height="16" />
                                    <span>Shqip</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/assets/images/flags/flag-es.png" width="16" height="16" />
                                    <span>Español</span>
                                </a>
                            </li>
                        </ul>

                    </li>

                    <li class="sep"></li>


                    <li>
                        <a href="#" data-toggle="chat" data-collapse-sidebar="1">
                            <i class="entypo-chat"></i>
                            Chat

                            <span class="badge badge-success chat-notifications-badge is-hidden">0</span>
                        </a>
                    </li>

                    <li class="sep"></li>

                    <li>
                        <a href="{{ route('logout') }}">
                            Log Out <i class="entypo-logout right"></i>
                        </a>
                    </li>
                </ul>

            </div>

        </div>

        <hr />

        @yield('content')

        <!-- Footer -->
        <footer class="main">

            &copy; 2019 <strong>Licon</strong> Corp by <a href="https://enzomarc.github.io" target="_blank">Marc Enzo</a>

        </footer>
    </div>


    <div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25">

        <div class="chat-inner">


            <h2 class="chat-header">
                <a href="#" class="chat-close"><i class="entypo-cancel"></i></a>

                <i class="entypo-users"></i>
                Chat
                <span class="badge badge-success is-hidden">0</span>
            </h2>


            <div class="chat-group" id="group-1">
                <strong>Favorites</strong>

                <a href="#" id="sample-user-123" data-conversation-history="#sample_history"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
                <a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
                <a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
                <a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
                <a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
            </div>


            <div class="chat-group" id="group-2">
                <strong>Work</strong>

                <a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
                <a href="#" data-conversation-history="#sample_history_2"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
                <a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
            </div>


            <div class="chat-group" id="group-3">
                <strong>Social</strong>

                <a href="#"><span class="user-status is-busy"></span> <em>Velma G. Pearson</em></a>
                <a href="#"><span class="user-status is-offline"></span> <em>Margaret R. Dedmon</em></a>
                <a href="#"><span class="user-status is-online"></span> <em>Kathleen M. Canales</em></a>
                <a href="#"><span class="user-status is-offline"></span> <em>Tracy J. Rodriguez</em></a>
            </div>

        </div>

        <!-- conversation template -->
        <div class="chat-conversation">

            <div class="conversation-header">
                <a href="#" class="conversation-close"><i class="entypo-cancel"></i></a>

                <span class="user-status"></span>
                <span class="display-name"></span>
                <small></small>
            </div>

            <ul class="conversation-body">
            </ul>

            <div class="chat-textarea">
                <textarea class="form-control autogrow" placeholder="Type your message"></textarea>
            </div>

        </div>

    </div>


    <!-- Chat Histories -->
    <ul class="chat-history" id="sample_history">
        <li>
            <span class="user">Art Ramadani</span>
            <p>Are you here?</p>
            <span class="time">09:00</span>
        </li>

        <li class="opponent">
            <span class="user">Catherine J. Watkins</span>
            <p>This message is pre-queued.</p>
            <span class="time">09:25</span>
        </li>

        <li class="opponent">
            <span class="user">Catherine J. Watkins</span>
            <p>Whohoo!</p>
            <span class="time">09:26</span>
        </li>

        <li class="opponent unread">
            <span class="user">Catherine J. Watkins</span>
            <p>Do you like it?</p>
            <span class="time">09:27</span>
        </li>
    </ul>




    <!-- Chat Histories -->
    <ul class="chat-history" id="sample_history_2">
        <li class="opponent unread">
            <span class="user">Daniel A. Pena</span>
            <p>I am going out.</p>
            <span class="time">08:21</span>
        </li>

        <li class="opponent unread">
            <span class="user">Daniel A. Pena</span>
            <p>Call me when you see this message.</p>
            <span class="time">08:27</span>
        </li>
    </ul>


</div>

<!-- Sample Modal (Default skin) -->
<div class="modal fade" id="sample-modal-dialog-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Widget Options - Default Modal</h4>
            </div>

            <div class="modal-body">
                <p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Sample Modal (Skin inverted) -->
<div class="modal invert fade" id="sample-modal-dialog-2">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Widget Options - Inverted Skin Modal</h4>
            </div>

            <div class="modal-body">
                <p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Sample Modal (Skin gray) -->
<div class="modal gray fade" id="sample-modal-dialog-3">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Widget Options - Gray Skin Modal</h4>
            </div>

            <div class="modal-body">
                <p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>




<!-- Imported styles on this page -->
<link rel="stylesheet" href="/assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
<link rel="stylesheet" href="/assets/js/rickshaw/rickshaw.min.css">

<!-- Bottom scripts (common) -->
<script src="/assets/js/gsap/TweenMax.min.js"></script>
<script src="/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
<script src="/assets/js/datatables/datatables.js"></script>
<script src="/assets/js/bootstrap.js"></script>
<script src="/assets/js/joinable.js"></script>
<script src="/assets/js/resizeable.js"></script>
<script src="/assets/js/neon-api.js"></script>
<script src="/assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>


<!-- Imported scripts on this page -->
<script src="/assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
<script src="/assets/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="/assets/js/jquery.sparkline.min.js"></script>
<script src="/assets/js/rickshaw/vendor/d3.v3.js"></script>
<script src="/assets/js/rickshaw/rickshaw.min.js"></script>
<script src="/assets/js/neon-chat.js"></script>
<script src="/assets/js/toastr.js"></script>
<script type="text/javascript" src="/js/underscore.js"></script>


<!-- JavaScripts initializations and stuff -->
<script src="/assets/js/neon-custom.js"></script>

<!-- Demo Settings -->
<script src="/assets/js/neon-demo.js"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    const items = $('ul.main-menu li');
    const page = "{{ $page ?? '' }}".toLowerCase();

    _.each(items, (item) => {
        if (item.dataset['page'] && item.dataset['page'].toLowerCase() === page)
            item.classList.add('active');
    });
</script>

@yield('script')

</body>
</html>