<!doctype html>

<html
  lang="en"
  class="layout-menu-fixed layout-compact"
  {{-- data-assets-path="{{ asset('assets') }}" --}}
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Yangon Railway Station') }}</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- plugin css -->
    <link href="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css">
    <!-- preloader css -->
    <link href="{{ asset('assets/css/preloader.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css"/>
    <!-- Custom Css-->
    <link href="{{ asset('assets/css/custom.css') }}" id="app-style" rel="stylesheet" type="text/css"/>
    
  </head>

  <body>
     <!-- <body data-layout="horizontal"> -->
     <!-- Begin page -->
     <div id="layout-wrapper">
        <header id="page-topbar">
           <div class="navbar-header">
              <div class="d-flex">
                 <!-- LOGO -->
                 <div class="navbar-brand-box">
                    <a class="logo logo-dark" href="index.html">
                    <span class="logo-sm">
                    <img alt="" height="39" src="{{ asset('assets/images/logo.svg') }}"/>
                    </span>
                    <span class="logo-lg">
                    <img alt="" height="39" src="{{ asset('assets/images/logo.svg') }}"/>
                    <span class="logo-txt">
                        Railway Service
                    </span>
                    </span>
                    </a>
                    <a class="logo logo-light" href="index.html">
                    <span class="logo-sm">
                    <img alt="" height="24" src="assets/images/logo-sm.svg"/>
                    </span>
                    <span class="logo-lg">
                    <img alt="" height="24" src="assets/images/logo-sm.svg"/>
                    <span class="logo-txt">
                    StarCode Kh
                    </span>
                    </span>
                    </a>
                 </div>
                 <button class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn" type="button">
                 <i class="fa fa-fw fa-bars">
                 </i>
                 </button>
                 <!-- App Search-->
                 <form class="app-search d-none d-lg-block">
                    <div class="position-relative">
                       <input class="form-control" placeholder="Search..." type="text"/>
                       <button class="btn btn-primary" type="button">
                       <i class="bx bx-search-alt align-middle">
                       </i>
                       </button>
                    </div>
                 </form>
              </div>
              <div class="d-flex">
                 <div class="dropdown d-inline-block d-lg-none ms-2">
                    <button aria-expanded="false" aria-haspopup="true" class="btn header-item" data-bs-toggle="dropdown" id="page-header-search-dropdown" type="button">
                    <i class="icon-lg" data-feather="search">
                    </i>
                    </button>
                    <div aria-labelledby="page-header-search-dropdown" class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                       <form class="p-3">
                          <div class="form-group m-0">
                             <div class="input-group">
                                <input aria-label="Search Result" class="form-control" placeholder="Search ..." type="text"/>
                                <button class="btn btn-primary" type="submit">
                                <i class="mdi mdi-magnify">
                                </i>
                                </button>
                             </div>
                          </div>
                       </form>
                    </div>
                 </div>
                 <div class="dropdown d-none d-sm-inline-block">
                    <button aria-expanded="false" aria-haspopup="true" class="btn header-item" data-bs-toggle="dropdown" type="button">
                    <img alt="Header Language" height="16" id="header-lang-img" src="assets/images/flags/us.jpg"/>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                       <!-- item-->
                       <a class="dropdown-item notify-item language" data-lang="en" href="javascript:void(0);">
                       <img alt="user-image" class="me-1" height="12" src="assets/images/flags/us.jpg"/>
                       <span class="align-middle">
                       English
                       </span>
                       </a>
                       <!-- item-->
                       <a class="dropdown-item notify-item language" data-lang="sp" href="javascript:void(0);">
                       <img alt="user-image" class="me-1" height="12" src="assets/images/flags/spain.jpg"/>
                       <span class="align-middle">
                       Spanish
                       </span>
                       </a>
                       <!-- item-->
                       <a class="dropdown-item notify-item language" data-lang="gr" href="javascript:void(0);">
                       <img alt="user-image" class="me-1" height="12" src="assets/images/flags/germany.jpg"/>
                       <span class="align-middle">
                       German
                       </span>
                       </a>
                       <!-- item-->
                       <a class="dropdown-item notify-item language" data-lang="it" href="javascript:void(0);">
                       <img alt="user-image" class="me-1" height="12" src="assets/images/flags/italy.jpg"/>
                       <span class="align-middle">
                       Italian
                       </span>
                       </a>
                       <!-- item-->
                       <a class="dropdown-item notify-item language" data-lang="ru" href="javascript:void(0);">
                       <img alt="user-image" class="me-1" height="12" src="assets/images/flags/russia.jpg"/>
                       <span class="align-middle">
                       Russian
                       </span>
                       </a>
                    </div>
                 </div>
                 <div class="dropdown d-none d-sm-inline-block">
                    <button class="btn header-item" id="mode-setting-btn" type="button">
                    <i class="icon-lg layout-mode-dark" data-feather="moon">
                    </i>
                    <i class="icon-lg layout-mode-light" data-feather="sun">
                    </i>
                    </button>
                 </div>
                 <div class="dropdown d-none d-lg-inline-block ms-1">
                    <button aria-expanded="false" aria-haspopup="true" class="btn header-item" data-bs-toggle="dropdown" type="button">
                    <i class="icon-lg" data-feather="grid">
                    </i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                       <div class="p-2">
                          <div class="row g-0">
                             <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                <img alt="Github" src="assets/images/brands/github.png"/>
                                <span>
                                GitHub
                                </span>
                                </a>
                             </div>
                             <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                <img alt="bitbucket" src="assets/images/brands/bitbucket.png"/>
                                <span>
                                Bitbucket
                                </span>
                                </a>
                             </div>
                             <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                <img alt="dribbble" src="assets/images/brands/dribbble.png"/>
                                <span>
                                Dribbble
                                </span>
                                </a>
                             </div>
                          </div>
                          <div class="row g-0">
                             <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                <img alt="dropbox" src="assets/images/brands/dropbox.png"/>
                                <span>
                                Dropbox
                                </span>
                                </a>
                             </div>
                             <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                <img alt="mail_chimp" src="assets/images/brands/mail_chimp.png"/>
                                <span>
                                Mail Chimp
                                </span>
                                </a>
                             </div>
                             <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                <img alt="slack" src="assets/images/brands/slack.png"/>
                                <span>
                                Slack
                                </span>
                                </a>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="dropdown d-inline-block">
                    <button aria-expanded="false" aria-haspopup="true" class="btn header-item noti-icon position-relative" data-bs-toggle="dropdown" id="page-header-notifications-dropdown" type="button">
                    <i class="icon-lg" data-feather="bell">
                    </i>
                    <span class="badge bg-danger rounded-pill">
                    5
                    </span>
                    </button>
                    <div aria-labelledby="page-header-notifications-dropdown" class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                       <div class="p-3">
                          <div class="row align-items-center">
                             <div class="col">
                                <h6 class="m-0">
                                   Notifications
                                </h6>
                             </div>
                             <div class="col-auto">
                                <a class="small text-reset text-decoration-underline" href="#!">
                                Unread (3)
                                </a>
                             </div>
                          </div>
                       </div>
                       <div data-simplebar="" style="max-height: 230px;">
                          <a class="text-reset notification-item" href="#!">
                             <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                   <img alt="user-pic" class="rounded-circle avatar-sm" src="assets/images/users/avatar-3.jpg"/>
                                </div>
                                <div class="flex-grow-1">
                                   <h6 class="mb-1">
                                      James Lemire
                                   </h6>
                                   <div class="font-size-13 text-muted">
                                      <p class="mb-1">
                                         It will seem like simplified English.
                                      </p>
                                      <p class="mb-0">
                                         <i class="mdi mdi-clock-outline">
                                         </i>
                                         <span>
                                         1 hour ago
                                         </span>
                                      </p>
                                   </div>
                                </div>
                             </div>
                          </a>
                          <a class="text-reset notification-item" href="#!">
                             <div class="d-flex">
                                <div class="flex-shrink-0 avatar-sm me-3">
                                   <span class="avatar-title bg-primary rounded-circle font-size-16">
                                   <i class="bx bx-cart">
                                   </i>
                                   </span>
                                </div>
                                <div class="flex-grow-1">
                                   <h6 class="mb-1">
                                      Your order is placed
                                   </h6>
                                   <div class="font-size-13 text-muted">
                                      <p class="mb-1">
                                         If several languages coalesce the grammar
                                      </p>
                                      <p class="mb-0">
                                         <i class="mdi mdi-clock-outline">
                                         </i>
                                         <span>
                                         3 min ago
                                         </span>
                                      </p>
                                   </div>
                                </div>
                             </div>
                          </a>
                          <a class="text-reset notification-item" href="#!">
                             <div class="d-flex">
                                <div class="flex-shrink-0 avatar-sm me-3">
                                   <span class="avatar-title bg-success rounded-circle font-size-16">
                                   <i class="bx bx-badge-check">
                                   </i>
                                   </span>
                                </div>
                                <div class="flex-grow-1">
                                   <h6 class="mb-1">
                                      Your item is shipped
                                   </h6>
                                   <div class="font-size-13 text-muted">
                                      <p class="mb-1">
                                         If several languages coalesce the grammar
                                      </p>
                                      <p class="mb-0">
                                         <i class="mdi mdi-clock-outline">
                                         </i>
                                         <span>
                                         3 min ago
                                         </span>
                                      </p>
                                   </div>
                                </div>
                             </div>
                          </a>
                          <a class="text-reset notification-item" href="#!">
                             <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                   <img alt="user-pic" class="rounded-circle avatar-sm" src="assets/images/users/avatar-6.jpg"/>
                                </div>
                                <div class="flex-grow-1">
                                   <h6 class="mb-1">
                                      Salena Layfield
                                   </h6>
                                   <div class="font-size-13 text-muted">
                                      <p class="mb-1">
                                         As a skeptical Cambridge friend of mine occidental.
                                      </p>
                                      <p class="mb-0">
                                         <i class="mdi mdi-clock-outline">
                                         </i>
                                         <span>
                                         1 hour ago
                                         </span>
                                      </p>
                                   </div>
                                </div>
                             </div>
                          </a>
                       </div>
                       <div class="p-2 border-top d-grid">
                          <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                          <i class="mdi mdi-arrow-right-circle me-1">
                          </i>
                          <span>
                          View More..
                          </span>
                          </a>
                       </div>
                    </div>
                 </div>
                 <div class="dropdown d-inline-block">
                    <button class="btn header-item right-bar-toggle me-2" type="button">
                    <i class="icon-lg" data-feather="settings">
                    </i>
                    </button>
                 </div>
                 <div class="dropdown d-inline-block">
                    <button aria-expanded="false" aria-haspopup="true" class="btn header-item bg-light-subtle border-start border-end" data-bs-toggle="dropdown" id="page-header-user-dropdown" type="button">
                    <img alt="Header Avatar" class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"/>
                    <span class="d-none d-xl-inline-block ms-1 fw-medium">
                    StarCode Kh
                    </span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block">
                    </i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                       <!-- item-->
                       <a class="dropdown-item" href="apps-contacts-profile.html">
                       <i class="mdi mdi mdi-face-man font-size-16 align-middle me-1">
                       </i>
                       Profile
                       </a>
                       <a class="dropdown-item" href="auth-lock-screen.html">
                       <i class="mdi mdi-lock font-size-16 align-middle me-1">
                       </i>
                       Lock Screen
                       </a>
                       <div class="dropdown-divider">
                       </div>
                       <a class="dropdown-item" href="auth-logout.html">
                       <i class="mdi mdi-logout font-size-16 align-middle me-1">
                       </i>
                       Logout
                       </a>
                    </div>
                 </div>
              </div>
           </div>
        </header>
        <!-- ========== Left Sidebar Start ========== -->
        @include('layouts.partials._sidebar')
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
           <div class="page-content">
              <div class="container-fluid">
                 <!-- start page title -->
                 @yield('breadcrumbs')
                 <!-- end page title -->
                 @yield('content')
              </div>
              <!-- container-fluid -->
           </div>
           <!-- End Page-content -->
           @include('layouts.partials._footer')
        </div>
        <!-- end main content-->
     </div>
     <!-- END layout-wrapper -->
     <!-- Right Sidebar -->
     <div class="right-bar">
        <div class="h-100" data-simplebar="">
           <div class="rightbar-title d-flex align-items-center p-3">
              <h5 class="m-0 me-2">
                 Theme Customizer
              </h5>
              <a class="right-bar-toggle ms-auto" href="javascript:void(0);">
              <i class="mdi mdi-close noti-icon">
              </i>
              </a>
           </div>
           <!-- Settings -->
           <hr class="m-0"/>
           <div class="p-4">
              <h6 class="mb-3">
                 Layout
              </h6>
              <div class="form-check form-check-inline">
                 <input class="form-check-input" id="layout-vertical" name="layout" type="radio" value="vertical"/>
                 <label class="form-check-label" for="layout-vertical">
                 Vertical
                 </label>
              </div>
              <div class="form-check form-check-inline">
                 <input class="form-check-input" id="layout-horizontal" name="layout" type="radio" value="horizontal"/>
                 <label class="form-check-label" for="layout-horizontal">
                 Horizontal
                 </label>
              </div>
              <h6 class="mt-4 mb-3 pt-2">
                 Layout Mode
              </h6>
              <div class="form-check form-check-inline">
                 <input class="form-check-input" id="layout-mode-light" name="layout-mode" type="radio" value="light"/>
                 <label class="form-check-label" for="layout-mode-light">
                 Light
                 </label>
              </div>
              <div class="form-check form-check-inline">
                 <input class="form-check-input" id="layout-mode-dark" name="layout-mode" type="radio" value="dark"/>
                 <label class="form-check-label" for="layout-mode-dark">
                 Dark
                 </label>
              </div>
              <h6 class="mt-4 mb-3 pt-2">
                 Layout Width
              </h6>
              <div class="form-check form-check-inline">
                 <input class="form-check-input" id="layout-width-fuild" name="layout-width" onchange="document.body.setAttribute('data-layout-size', 'fluid')" type="radio" value="fuild"/>
                 <label class="form-check-label" for="layout-width-fuild">
                 Fluid
                 </label>
              </div>
              <div class="form-check form-check-inline">
                 <input class="form-check-input" id="layout-width-boxed" name="layout-width" onchange="document.body.setAttribute('data-layout-size', 'boxed')" type="radio" value="boxed"/>
                 <label class="form-check-label" for="layout-width-boxed">
                 Boxed
                 </label>
              </div>
              <h6 class="mt-4 mb-3 pt-2">
                 Layout Position
              </h6>
              <div class="form-check form-check-inline">
                 <input class="form-check-input" id="layout-position-fixed" name="layout-position" onchange="document.body.setAttribute('data-layout-scrollable', 'false')" type="radio" value="fixed"/>
                 <label class="form-check-label" for="layout-position-fixed">
                 Fixed
                 </label>
              </div>
              <div class="form-check form-check-inline">
                 <input class="form-check-input" id="layout-position-scrollable" name="layout-position" onchange="document.body.setAttribute('data-layout-scrollable', 'true')" type="radio" value="scrollable"/>
                 <label class="form-check-label" for="layout-position-scrollable">
                 Scrollable
                 </label>
              </div>
              <h6 class="mt-4 mb-3 pt-2">
                 Topbar Color
              </h6>
              <div class="form-check form-check-inline">
                 <input class="form-check-input" id="topbar-color-light" name="topbar-color" onchange="document.body.setAttribute('data-topbar', 'light')" type="radio" value="light"/>
                 <label class="form-check-label" for="topbar-color-light">
                 Light
                 </label>
              </div>
              <div class="form-check form-check-inline">
                 <input class="form-check-input" id="topbar-color-dark" name="topbar-color" onchange="document.body.setAttribute('data-topbar', 'dark')" type="radio" value="dark"/>
                 <label class="form-check-label" for="topbar-color-dark">
                 Dark
                 </label>
              </div>
              <h6 class="mt-4 mb-3 pt-2 sidebar-setting">
                 Sidebar Size
              </h6>
              <div class="form-check sidebar-setting">
                 <input class="form-check-input" id="sidebar-size-default" name="sidebar-size" onchange="document.body.setAttribute('data-sidebar-size', 'lg')" type="radio" value="default"/>
                 <label class="form-check-label" for="sidebar-size-default">
                 Default
                 </label>
              </div>
              <div class="form-check sidebar-setting">
                 <input class="form-check-input" id="sidebar-size-compact" name="sidebar-size" onchange="document.body.setAttribute('data-sidebar-size', 'md')" type="radio" value="compact"/>
                 <label class="form-check-label" for="sidebar-size-compact">
                 Compact
                 </label>
              </div>
              <div class="form-check sidebar-setting">
                 <input class="form-check-input" id="sidebar-size-small" name="sidebar-size" onchange="document.body.setAttribute('data-sidebar-size', 'sm')" type="radio" value="small"/>
                 <label class="form-check-label" for="sidebar-size-small">
                 Small (Icon View)
                 </label>
              </div>
              <h6 class="mt-4 mb-3 pt-2 sidebar-setting">
                 Sidebar Color
              </h6>
              <div class="form-check sidebar-setting">
                 <input class="form-check-input" id="sidebar-color-light" name="sidebar-color" onchange="document.body.setAttribute('data-sidebar', 'light')" type="radio" value="light"/>
                 <label class="form-check-label" for="sidebar-color-light">
                 Light
                 </label>
              </div>
              <div class="form-check sidebar-setting">
                 <input class="form-check-input" id="sidebar-color-dark" name="sidebar-color" onchange="document.body.setAttribute('data-sidebar', 'dark')" type="radio" value="dark"/>
                 <label class="form-check-label" for="sidebar-color-dark">
                 Dark
                 </label>
              </div>
              <div class="form-check sidebar-setting">
                 <input class="form-check-input" id="sidebar-color-brand" name="sidebar-color" onchange="document.body.setAttribute('data-sidebar', 'brand')" type="radio" value="brand"/>
                 <label class="form-check-label" for="sidebar-color-brand">
                 Brand
                 </label>
              </div>
              <h6 class="mt-4 mb-3 pt-2">
                 Direction
              </h6>
              <div class="form-check form-check-inline">
                 <input class="form-check-input" id="layout-direction-ltr" name="layout-direction" type="radio" value="ltr"/>
                 <label class="form-check-label" for="layout-direction-ltr">
                 LTR
                 </label>
              </div>
              <div class="form-check form-check-inline">
                 <input class="form-check-input" id="layout-direction-rtl" name="layout-direction" type="radio" value="rtl"/>
                 <label class="form-check-label" for="layout-direction-rtl">
                 RTL
                 </label>
              </div>
           </div>
        </div>
        <!-- end slimscroll-menu-->
     </div>
     <!-- /Right-bar -->
     <!-- Right bar overlay-->
     <div class="rightbar-overlay">
     </div>
     <!-- JAVASCRIPT -->
     <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
     <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
     <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
     <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
     <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
     <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
     <!-- pace js -->
     <script src="{{ asset('assets/libs/pace-js/pace.min.js') }}"></script>
     <!-- apexcharts -->
     <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
     <!-- Plugins js-->
     <script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
     <script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>
     <!-- dashboard init -->
     <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>
     <script src="{{ asset('assets/js/app.js') }}"></script>
  </body>
</html>
