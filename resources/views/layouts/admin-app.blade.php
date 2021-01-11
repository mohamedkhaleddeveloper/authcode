<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    @if (Lang::locale() == 'en')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template.">
        <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
        <meta name="author" content="PIXINVENT">
        <title>{{__('Login with Code')}}</title>
        <link rel="apple-touch-icon" href="{{ asset('public/rubsto/app-assets/images/ico/apple-icon-120.png') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/rubsto/app-assets/images/ico/favicon.ico') }}">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMuli:300,400,500,700" rel="stylesheet">
        <!-- BEGIN VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/css/vendors.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/vendors/css/file-uploaders/dropzone.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/vendors/css/charts/morris.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/vendors/css/extensions/unslider.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/vendors/css/weather-icons/climacons.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/vendors/css/forms/icheck/icheck.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/vendors/css/forms/icheck/custom.css') }}">
        <!-- END VENDOR CSS-->
        <!-- BEGIN ROBUST CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/css/custom-rtl.css') }}">
        <!-- END ROBUST CSS-->
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/css/core/colors/palette-gradient.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/css/pages/login-register.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/css/pages/timeline.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/css/plugins/file-uploaders/dropzone.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/css/core/colors/palette-climacon.css') }}">
        <!-- END Page Level CSS-->
        <!-- BEGIN Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/assets/css/style.css') }}">
        <!-- END Custom CSS-->
    @else
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template.">
        <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
        <meta name="author" content="PIXINVENT">
        <title>{{__('Login with Code')}}</title>
        <link rel="apple-touch-icon" href="{{ asset('public/rubsto/app-assets/images/ico/apple-icon-120.png') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/rubsto/app-assets/images/ico/favicon.ico') }}">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMuli:300,400,500,700" rel="stylesheet">
        <!-- BEGIN VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/css-rtl/vendors.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/vendors/css-rtl/file-uploaders/dropzone.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/vendors/css-rtl/charts/jquery-jvectormap-2.0.3.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/vendors/css-rtl/charts/morris.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/vendors/css-rtl/extensions/unslider.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/vendors/css-rtl/weather-icons/climacons.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/vendors/css-rtl/forms/icheck/icheck.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/vendors/css-rtl/forms/icheck/custom.css') }}">
        <!-- END VENDOR CSS-->
        <!-- BEGIN ROBUST CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/css-rtl/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/css-rtl/custom-rtl.css') }}">
        <!-- END ROBUST CSS-->
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/css-rtl/core/colors/palette-gradient.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/css-rtl/pages/login-register.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/css-rtl/pages/timeline.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/css-rtl/plugins/file-uploaders/dropzone.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/app-assets/css-rtl/core/colors/palette-climacon.css') }}">
        <!-- END Page Level CSS-->
        <!-- BEGIN Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('public/rubsto/assets/css-rtl/style-rtl.css') }}">
        <!-- END Custom CSS-->
        @endif
    </head>
    @auth
    <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

      <!-- fixed-top-->
      <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
          <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
              <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
              <li class="nav-item"><a class="navbar-brand" href="{{route ('Dashboard')}}"><img style="width:65%;" alt="Tech Performance" src="{{ asset('public/rubsto/app-assets/images/logo/logo-light-sm.png')}}">
                  
              <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
          </div>
          <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
              <ul class="nav navbar-nav mr-auto float-left">
                <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                {{-- <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                  <div class="search-input">
                    <input class="input" type="text" placeholder="Explore Robust...">
                  </div>
                </li> --}}
              </ul>
              <ul class="nav navbar-nav float-right">         
                <li class="dropdown dropdown-language nav-item">
                       <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" 
                          aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-gb">
                          </i><span>English</span><span class="selected-language"></span>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                          <a class="dropdown-item" href="{{ route('admin.lang') }}"><i class="flag-icon flag-icon-eg"></i> Arabic</a>
                      </div>
                </li>
                <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i><span class="badge badge-pill badge-default badge-danger badge-default badge-up">5</span></a>
                  <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                    <li class="dropdown-menu-header">
                      <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6><span class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span>
                    </li>
                    <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                        <div class="media">
                          <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                          <div class="media-body">
                            <h6 class="media-heading">You have new order!</h6>
                            <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time></small>
                          </div>
                        </div></a><a href="javascript:void(0)">
                        <div class="media">
                          <div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                          <div class="media-body">
                            <h6 class="media-heading red darken-1">99% Server load</h6>
                            <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time></small>
                          </div>
                        </div></a><a href="javascript:void(0)">
                        <div class="media">
                          <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                          <div class="media-body">
                            <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                            <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                          </div>
                        </div></a><a href="javascript:void(0)">
                        <div class="media">
                          <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                          <div class="media-body">
                            <h6 class="media-heading">Complete the task</h6><small>
                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                          </div>
                        </div></a><a href="javascript:void(0)">
                        <div class="media">
                          <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                          <div class="media-body">
                            <h6 class="media-heading">Generate monthly report</h6><small>
                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                          </div>
                        </div></a></li>
                    <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
                  </ul>
                </li>
                <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail"></i><span class="badge badge-pill badge-default badge-info badge-default badge-up">5              </span></a>
                  <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                    <li class="dropdown-menu-header">
                      <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span></h6><span class="notification-tag badge badge-default badge-warning float-right m-0">4 New</span>
                    </li>
                    <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                        <div class="media">
                          <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{ asset('public/rubsto/app-assets/images/portrait/small/avatar-s-19.png')}}" alt="avatar"><i></i></span></div>
                          <div class="media-body">
                            <h6 class="media-heading">Margaret Govan</h6>
                            <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p><small>
                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                          </div>
                        </div></a><a href="javascript:void(0)">
                        <div class="media">
                          <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="{{ asset('public/rubsto/app-assets/images/portrait/small/avatar-s-2.png')}}" alt="avatar"><i></i></span></div>
                          <div class="media-body">
                            <h6 class="media-heading">Bret Lezama</h6>
                            <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Tuesday</time></small>
                          </div>
                        </div></a><a href="javascript:void(0)">
                        <div class="media">
                          <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{ asset('public/rubsto/app-assets/images/portrait/small/avatar-s-3.png')}}" alt="avatar"><i></i></span></div>
                          <div class="media-body">
                            <h6 class="media-heading">Carie Berra</h6>
                            <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time></small>
                          </div>
                        </div></a><a href="javascript:void(0)">
                        <div class="media">
                          <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="{{ asset('public/rubsto/app-assets/images/portrait/small/avatar-s-6.png')}}" alt="avatar"><i></i></span></div>
                          <div class="media-body">
                            <h6 class="media-heading">Eric Alsobrook</h6>
                            <p class="notification-text font-small-3 text-muted">We have project party this saturday.</p><small>
                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">last month</time></small>
                          </div>
                        </div></a></li>
                    <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>
                  </ul>
                </li>
                <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="avatar avatar-online"><img src="{{ asset('public/rubsto/app-assets/images/portrait/small/avatar-s-1.png')}}" alt="avatar"><i></i></span><span class="user-name">John Doe</span></a>
                  <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a>
                      <a class="dropdown-item" href="email-application.html"><i class="ft-mail"></i> My Inbox</a>
                      <a class="dropdown-item" href="user-cards.html"><i class="ft-check-square"></i> Tickets</a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('admin.logout') }}"
                          onclick="event.preventDefault();
                                          document.getElementById('admin-logout-form').submit();">
                              <i class="ft-power"></i>  {{ __('logout') }} 
                          </a>
                          <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  
                  
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
  
      <!-- ////////////////////////////////////////////////////////////////////////////-->
  
  
      <div class="main-menu menu-fixed menu-dark menu-accordion  menu-shadow " data-scroll-to-active="true">
        <div class="main-menu-content">
          <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
              <li class=" nav-item pt-1">
                  <a href="{{ route('admin.dashboard') }}">
                      <i class="icon-home"></i>
                      <span class="menu-title" data-i18n="nav.support_raise_support.main">{{__('Dashboard')}}</span>
                  </a>
              </li>
              <li class=" nav-item pt-1">
                  <a href="{{ route('clients.index') }}">
                      <i class="icon-layers"></i>
                      <span class="menu-title" data-i18n="nav.support_raise_support.main">{{__('Clients')}}</span>
                  </a>
              </li>
              <li class=" nav-item pt-1">
                <a href="{{ route('products.index') }}">
                    <i class="icon-layers"></i>
                    <span class="menu-title" data-i18n="nav.support_raise_support.main">{{__('Products')}}</span>
                </a>
            </li>
          </ul>
        </div>
      </div>
    @endauth
        @yield('content')
   
         <!-- BEGIN VENDOR JS-->
         <script src="{{ asset('public/rubsto/app-assets/vendors/js/vendors.min.js')}}"></script>
         <!-- BEGIN VENDOR JS-->
         <!-- BEGIN PAGE VENDOR JS-->
         <script src="{{ asset('public/rubsto/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
         <script src="{{ asset('public/rubsto/app-assets/vendors/js/forms/icheck/icheck.min.js')}}"></script>
         <script src="{{ asset('public/rubsto/app-assets/vendors/js/extensions/jquery.knob.min.js')}}"></script>
         <script src="{{ asset('public/rubsto/app-assets/js/scripts/extensions/knob.js')}}"></script>
         <script src="{{ asset('public/rubsto/app-assets/vendors/js/charts/raphael-min.js')}}"></script>
         <script src="{{ asset('public/rubsto/app-assets/vendors/js/charts/morris.min.js')}}"></script>
         <script src="{{ asset('public/rubsto/app-assets/vendors/js/charts/chart.min.js')}}"></script>
         <script src="{{ asset('public/rubsto/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js')}}"></script>
         <script src="{{ asset('public/rubsto/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js')}}"></script>
         <script src="{{ asset('public/rubsto/app-assets/data/jvector/visitor-data.js')}}"></script>
         <script src="{{ asset('public/rubsto/app-assets/vendors/js/charts/echarts/echarts.js')}}"></script>
         <script src="{{ asset('public/rubsto/app-assets/vendors/js/timeline/horizontal-timeline.js')}}"></script>
         <script src="{{ asset('public/rubsto/app-assets/vendors/js/extensions/unslider-min.js')}}"></script>
         <script src="{{ asset('public/rubsto/app-assets/vendors/js/extensions/dropzone.min.js')}}"></script>
         <!-- END PAGE VENDOR JS-->
         <!-- BEGIN ROBUST JS-->
         <script src="{{ asset('public/rubsto/app-assets/js/core/app-menu.js')}}"></script>
         <script src="{{ asset('public/rubsto/app-assets/js/core/app.js')}}"></script>
         <!-- END ROBUST JS-->
         <!-- BEGIN PAGE LEVEL JS-->
         <script src="{{ asset('public/rubsto/app-assets/js/scripts/forms/form-login-register.js')}}"></script>
         <script src="{{ asset('public/rubsto/app-assets/js/scripts/pages/dashboard-crm.js')}}"></script>
         <!-- END PAGE LEVEL JS-->
    </body>
</html>

