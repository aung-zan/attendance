<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Attendance System</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- build -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/users.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vertical-menu.css') }}">
    <!-- build -->

    <!-- plugin -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icheck/icheck.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form-validation/form-validation.min.css') }}">
    <!-- plugin -->

    <!-- custom -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
    <!-- custom -->

</head>
<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    <!-- nav fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-light bg-gradient-x-grey-blue">
        <div class="navbar-wrapper">

            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto">
                        <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a>
                    </li>

                    <li class="nav-item">
                        <a class="navbar-brand" href="#">
                          <h5 class="brand-text">Attendance System</h5>
                        </a>
                    </li>

                    <li class="nav-item d-md-none">
                        <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>

            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav float-right">

                        <!-- notification -->
                        <li class="dropdown dropdown-notification nav-item">
                            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i>
                                <span class="badge badge-pill badge-default badge-danger badge-default badge-up">5</span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0">
                                        <span class="grey darken-2">Notifications</span>
                                        <span class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span>
                                    </h6>
                                </li>

                                <li class="scrollable-container media-list">
                                    <a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">You have new order!</h6>
                                                <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time>
                                                </small>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0)">
                                        <div class="media">
                                          <div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading red darken-1">99% Server load</h6>
                                                <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p>
                                                <small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time>
                                                </small>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                                <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p>
                                                <small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                                                </small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            <li class="dropdown-menu-footer">
                                <a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a>
                            </li>
                          </ul>
                        </li>

                        <!-- user's profile -->
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <span class="avatar avatar-online">
                                    <img src="{{ asset('/img/github_acc_pic.png') }}" alt="avatar"><i></i></span>
                                <span class="user-name">{{ Auth::user()->name }}</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('adminProfile.edit', Auth::id()) }}">
                                    <i class="ft-user"></i> Edit Profile
                                </a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="{{ route('admin.logout') }}" id="logout"><i class="ft-power"></i> Logout</a>
                                <form method="POST" action="{{ route('admin.logout') }}" id="logoutForm">
                                    @csrf
                                </form>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- nav fixed-top-->

    <!-- menu bar -->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <!-- get route name -->
                <?php
                    $route = Route::currentRouteName();
                    $routeName = explode('.', $route);
                ?>
                <!-- get route name -->

                <li class=" nav-item {{ ($routeName[0] === 'client')? 'active':'' }}">
                    <a href="{{ route('client.index') }}">
                        <i class="ft-users"></i>
                        <span class="menu-title" data-i18n="">Clients</span>
                    </a>
                </li>

                <li class=" nav-item {{ ($routeName[0] === 'company')? 'active':'' }}">
                    <a href="{{ route('company.index') }}">
                        <i class="ft-home"></i>
                        <span class="menu-title" data-i18n="">Companies</span>
                    </a>
                </li>

                <li class=" nav-item {{ ($routeName[0] === 'report')? 'active':'' }}">
                    <a href="#">
                        <i class="ft-alert-triangle"></i>
                        <span class="menu-title" data-i18n="">Reports</span>
                        <span class="badge badge badge-danger badge-pill float-right mr-2">New</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- menu bar -->

    @yield('content')

    <script src="{{ asset('js/vendors.min.js') }} " type="text/javascript"></script>
    <script src="{{ asset('js/app-menu.js') }} " type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }} " type="text/javascript"></script>

    <!-- for validation -->
    <script src="{{ asset('js/jqBootstrapValidation.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/icheck/icheck.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/spinner/jquery.bootstrap-touchspin.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/form-validation/jqBootstrapValidation.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/form-validation/form-validation.js') }}" type="text/javascript"></script>
    <!-- for validation -->

    <script src="{{ asset('js/custom.js') }} " type="text/javascript"></script>
</body>
</html>