<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>SiScouting</title>

        <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.png">
         <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="js/vendor/modernizr.min.js"></script>
        <script src="js/jquery-3.4.1.js"></script>
        <script>
            $(document).ready(function(){
                    $('#selectCompeticao').children('div').hide();
            });
        </script>
    </head>
    <body>
        <!-- Page Wrapper -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available classes:

            'page-loading'      enables page preloader
        -->
        <div id="page-wrapper">
            <!-- Preloader -->
            <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
            <!-- Page Container -->
            <!-- In the PHP version you can set the following options from inc/config file -->
            <!--
                Available #page-container classes:

                '' (None)                                       for a full main and alternative sidebar hidden by default (> 991px)

                'sidebar-visible-lg'                            for a full main sidebar visible by default (> 991px)
                'sidebar-partial'                               for a partial main sidebar which opens on mouse hover, hidden by default (> 991px)
                'sidebar-partial sidebar-visible-lg'            for a partial main sidebar which opens on mouse hover, visible by default (> 991px)
                'sidebar-mini sidebar-visible-lg-mini'          for a mini main sidebar with a flyout menu, enabled by default (> 991px + Best with static layout)
                'sidebar-mini sidebar-visible-lg'               for a mini main sidebar with a flyout menu, disabled by default (> 991px + Best with static layout)

                'sidebar-alt-visible-lg'                        for a full alternative sidebar visible by default (> 991px)
                'sidebar-alt-partial'                           for a partial alternative sidebar which opens on mouse hover, hidden by default (> 991px)
                'sidebar-alt-partial sidebar-alt-visible-lg'    for a partial alternative sidebar which opens on mouse hover, visible by default (> 991px)

                'sidebar-partial sidebar-alt-partial'           for both sidebars partial which open on mouse hover, hidden by default (> 991px)

                'sidebar-no-animations'                         add this as extra for disabling sidebar animations on large screens (> 991px) - Better performance with heavy pages!

                'style-alt'                                     for an alternative main style (without it: the default style)
                'footer-fixed'                                  for a fixed footer (without it: a static footer)

                'disable-menu-autoscroll'                       add this to disable the main menu auto scrolling when opening a submenu

                'header-fixed-top'                              has to be added only if the class 'navbar-fixed-top' was added on header.navbar
                'header-fixed-bottom'                           has to be added only if the class 'navbar-fixed-bottom' was added on header.navbar

                'enable-cookies'                                enables cookies for remembering active color theme when changed from the sidebar links
            -->
            <div id="page-container" class="sidebar-mini sidebar-visible-lg-mini sidebar-no-animations">
                <!-- Alternative Sidebar -->
                <div id="sidebar-alt">
                    <!-- Wrapper for scrolling functionality -->
                    <!-- END Wrapper for scrolling functionality -->
                </div>
                <!-- END Alternative Sidebar -->

                <!-- Main Sidebar -->
                <div id="sidebar">
                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            <!-- Brand -->
                            <a href="{{route('sis.home')}}" class="sidebar-brand">
                                <i class="fa fa-futbol-o"></i><span class="sidebar-nav-mini-hide"><strong>SiS</strong>couting</span>

                            </a>
                            <!-- END Brand -->

                            <!-- User Info -->
                            <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                                <div class="sidebar-user-avatar">
                                    <a href="#">
                                        <img src="img/placeholders/avatars/avatar2.jpg" alt="avatar">
                                    </a>
                                </div>
                                <div class="sidebar-user-name"><strong>@yield('admin')</strong><br><h6>@yield('tipo')</h6></div>
                                <div class="sidebar-user-links">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Profile"><i class="gi gi-user"></i></a>
                                    <a href="{{route('sis.logout')}}" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a>
                                </div>
                            </div>
                            <!-- END User Info -->

                            <!-- Theme Colors -->
                            <!-- Change Color Theme functionality can be found in js/app.js - templateOptions() -->

                            <!-- Sidebar Navigation -->
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="{{route('sis.home')}}" data-toggle="tooltip" data-placement="right" title="Pagina Principal"><i class="fa fa-home sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide" >Pagina Principal</span></a>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu" data-toggle="tooltip" data-placement="right" title="Jogos"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-cubes sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Jogos</span></a>
                                    <ul>
                                        <li>
                                            <a href="#">Registar Jogo</a>
                                        </li>
                                        <li>
                                            <a href="#">Listar Jogos</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="sidebar-header">
                                    <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a></span>
                                    <span class="sidebar-header-title">Equipa Técnico</span>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-users sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Equipa</span></a>
                                    <ul>
                                        <li>
                                            <a href="{{route('gest.addTecnico')}}">Novo Técnico</a>
                                        </li>
                                        <li>
                                            <a href="{{route('gest.listTecnico')}}">Listar Equipe Técnica</a>
                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-street-view sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Jogadores</span></a>
                                    <ul>
                                        <li>
                                            <a href="{{route('jogador.addJogador')}}">Novo Jogador</a>
                                        </li>
                                        <li>
                                            <a href="{{route('jogador.listJogador')}}">Listar Jogadores</a>
                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-bar-chart-o sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Estatisticas </span></a>
                                    <ul>
                                        <li>
                                            <a href="#">General</a>
                                        </li>
                                        <li>
                                            <a href="#">Responsive</a>
                                        </li>
                                        <li>
                                            <a href="#">Datatables</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-cup sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Trofeus</span></a>
                                    <ul>
                                        <li>
                                            <a href="#">Font Awesome</a>
                                        </li>
                                        <li>
                                            <a href="#">Glyphicons Pro</a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                            <!-- END Sidebar Navigation -->

                            <!-- Sidebar Notifications -->
                            <!-- END Sidebar Notifications -->
                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->
                </div>
                <!-- END Main Sidebar -->

                <!-- Main Container -->
                <div id="main-container">
                    <!-- Header -->
                    <!-- In the PHP version you can set the following options from inc/config file -->
                    <!--
                        Available header.navbar classes:

                        'navbar-default'            for the default light header
                        'navbar-inverse'            for an alternative dark header

                        'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                            'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                        'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                            'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                    -->
                    <header class="navbar navbar-default">
                        <!-- Left Header Navigation -->
                        <ul class="nav navbar-nav-custom">
                            <!-- Main Sidebar Toggle Button -->
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-bars fa-fw"></i>
                                </a>
                            </li>
                            <!-- END Main Sidebar Toggle Button -->

                            <!-- Template Options -->
                            <!-- Change Options functionality can be found in js/app.js - templateOptions() -->
                            <!-- END Template Options -->
                        </ul>
                        <!-- END Left Header Navigation -->

                        <!-- Search Form -->
                        <form action="page_ready_search_results.html" method="post" class="navbar-form-custom">
                            <div class="form-group">
                                <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
                            </div>
                        </form>
                        <!-- END Search Form -->

                        <!-- Right Header Navigation -->
                        <ul class="nav navbar-nav-custom pull-right">
                            <!-- Alternative Sidebar Toggle Button -->

                            <!-- END Alternative Sidebar Toggle Button -->

                            <!-- User Dropdown -->
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="img/placeholders/avatars/avatar2.jpg" alt="avatar"> <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-custom dropdown-menu-right">

                                    <li>
                                        <a href="page_ready_user_profile.html">
                                            <i class="fa fa-user fa-fw pull-right"></i>
                                            Profile
                                        </a>

                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{route('sis.logout')}}"><i class="gi gi-exit fa-fw pull-right"></i> Logout</a>
                                    </li>

                                </ul>
                            </li>
                            <!-- END User Dropdown -->
                        </ul>
                        <!-- END Right Header Navigation -->
                    </header>
                    <!-- END Header -->

                    <!-- Page content -->
                    <div id="page-content">

                        @yield('conteudo')

                    </div>
            <!-- END Page Container -->
            <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>
            <footer class="clearfix">
                <div class="pull-right">
                    Crafted with <i class="fa fa-heart text-danger"></i> by <a href="#" target="_blank">SiScouting</a>
                </div>
            </footer>
        </div>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->
</div>
        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="js/vendor/jquery.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>
        <!-- Google Maps API Key (you will have to obtain a Google Maps API key to use Google Maps) -->
        <!-- For more info please have a look at https://developers.google.com/maps/documentation/javascript/get-api-key#key -->

        <script src="js/pages/tablesDatatables.js"></script>
        <script>$(function(){ TablesDatatables.init(); });</script>
    </body>
</html>
