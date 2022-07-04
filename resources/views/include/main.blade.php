<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{$page_name??'Verkio - Lottery System'}}</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    <!-- jvectormap -->
    <link href="{{asset('plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/leaflet/leaflet.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/lightpick/lightpick.css')}}" rel="stylesheet">
    <!-- App css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/jquery-ui.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css">
</head>
<body class="dark-sidenav">
<!-- Left Sidenav -->
<div class="left-sidenav">
    <!-- LOGO -->
    <div class="brand">
        <a href="#" class="logo">
          <span>
            <img src="{{asset('assets/images/logo-sm.png')}}" alt="logo-small" class="logo-sm">
          </span>
            <span>
{{--            <img src="{{asset('assets/images/logo.png')}}" alt="logo-large" class="logo-lg logo-light">--}}
                <span style="color: white">Verkio - Lottery System Panle</span>
            <img src="{{asset('assets/images/logo-dark.png')}}" alt="logo-large" class="logo-lg logo-dark">
          </span>
        </a>
    </div>
    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <ul class="metismenu left-sidenav-menu">
            <li class="menu-label mt-0">Main</li>
            <li>
                <a href="javascript: void(0);">
                    <i data-feather="home" class="align-self-center menu-icon"></i>
                    <span>Dashboard</span>
                    <span class="menu-arrow">
                <i class="mdi mdi-chevron-right"></i>
              </span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('show.profile.page')}}">
                            <i class="ti-control-record"></i>Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('show.admins.page')}}">
                            <i class="ti-control-record"></i>Admins</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('show.users.page')}}">
                            <i class="ti-control-record"></i>Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('show.lottery.page')}}">
                            <i class="ti-control-record"></i>Lottery</a>
                    </li>
                </ul>
            </li>
            <hr class="hr-dashed hr-menu">
        </ul>
    </div>
</div>
<!-- end left-sidenav-->
<div class="page-wrapper">
    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- Navbar -->
        <nav class="navbar-custom">
            <ul class="list-unstyled topbar-nav float-right mb-0">
                <li class="dropdown hide-phone">
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i data-feather="search" class="topbar-icon"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg p-0">
                        <!-- Top Search Bar -->
                        <div class="app-search-topbar">
                            <form action="#" method="get">
                                <input type="search" name="search" class="from-control top-search mb-0" placeholder="Type text...">
                                <button type="submit">
                                    <i class="ti-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </li>
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i data-feather="bell" class="align-self-center topbar-icon"></i>
                        <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg pt-0">
                        <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">Notifications <span class="badge badge-primary badge-pill">2</span>
                        </h6>
                        <div class="notification-menu" data-simplebar>
                            <!-- item-->
                            <a href="#" class="dropdown-item py-3">
                                <small class="float-right text-muted pl-2">2 min ago</small>
                                <div class="media">
                                    <div class="avatar-md bg-soft-primary">
                                        <i data-feather="shopping-cart" class="align-self-center icon-xs"></i>
                                    </div>
                                    <div class="media-body align-self-center ml-2 text-truncate">
                                        <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                        <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                            <!-- item-->
                            <a href="#" class="dropdown-item py-3">
                                <small class="float-right text-muted pl-2">10 min ago</small>
                                <div class="media">
                                    <div class="avatar-md bg-soft-primary">
                                        <img src="{{asset('assets/images/users/user-4.jpg')}}" alt="" class="thumb-sm rounded-circle">
                                    </div>
                                    <div class="media-body align-self-center ml-2 text-truncate">
                                        <h6 class="my-0 font-weight-normal text-dark">Meeting with designers</h6>
                                        <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                            <!-- item-->
                            <a href="#" class="dropdown-item py-3">
                                <small class="float-right text-muted pl-2">40 min ago</small>
                                <div class="media">
                                    <div class="avatar-md bg-soft-primary">
                                        <i data-feather="users" class="align-self-center icon-xs"></i>
                                    </div>
                                    <div class="media-body align-self-center ml-2 text-truncate">
                                        <h6 class="my-0 font-weight-normal text-dark">UX 3 Task complete.</h6>
                                        <small class="text-muted mb-0">Dummy text of the printing.</small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                            <!-- item-->
                            <a href="#" class="dropdown-item py-3">
                                <small class="float-right text-muted pl-2">1 hr ago</small>
                                <div class="media">
                                    <div class="avatar-md bg-soft-primary">
                                        <img src="{{asset('assets/images/users/user-5.jpg')}}" alt="" class="thumb-sm rounded-circle">
                                    </div>
                                    <div class="media-body align-self-center ml-2 text-truncate">
                                        <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                        <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                            <!-- item-->
                            <a href="#" class="dropdown-item py-3">
                                <small class="float-right text-muted pl-2">2 hrs ago</small>
                                <div class="media">
                                    <div class="avatar-md bg-soft-primary">
                                        <i data-feather="check-circle" class="align-self-center icon-xs"></i>
                                    </div>
                                    <div class="media-body align-self-center ml-2 text-truncate">
                                        <h6 class="my-0 font-weight-normal text-dark">Payment Successfull</h6>
                                        <small class="text-muted mb-0">Dummy text of the printing.</small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                        </div>
                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary">View all <i class="fi-arrow-right"></i>
                        </a>
                    </div>
                </li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <span class="ml-1 nav-user-name hidden-sm">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                        <img src="{{asset('assets/images/users/user-5.jpg')}}" alt="profile-user" class="rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">
                            <i data-feather="user" class="align-self-center icon-xs icon-dual mr-1"></i> Profile </a>
                        <a class="dropdown-item" href="#">
                            <i data-feather="settings" class="align-self-center icon-xs icon-dual mr-1"></i> Settings </a>
                        <div class="dropdown-divider mb-0"></div>
                        <a class="dropdown-item" href="" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i data-feather="power" class="align-self-center icon-xs icon-dual mr-1"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            <!--end topbar-nav-->
            <ul class="list-unstyled topbar-nav mb-0">
                <li>
                    <button class="nav-link button-menu-mobile">
                        <i data-feather="menu" class="align-self-center topbar-icon"></i>
                    </button>
                </li>
            </ul>
        </nav>
        <!-- end navbar-->
    </div>
    <!-- Top Bar End -->
    <!-- Page Content-->
    <div class="page-content">
         @yield('content')
         <!-- end page content -->
             <footer class="footer text-center text-sm-left">&copy; 2021 Verkio - Lottery System <span class="d-none d-sm-inline-block float-right">Created by <i class="mdi mdi-heart text-danger"></i> Mohammad Zam </span>
             </footer>
    </div>


</div>

<!-- end page-wrapper -->
<!-- jQuery  -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/metismenu.min.js')}}"></script>
<script src="{{asset('assets/js/waves.js')}}"></script>
<script src="{{asset('assets/js/feather.min.js')}}"></script>
<script src="{{asset('assets/js/simplebar.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/js/moment.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('plugins/apex-charts/apexcharts.min.js')}}"></script>
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
<script src="{{asset('assets/pages/jquery.analytics_dashboard.init.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('plugins/leaflet/leaflet.js')}}"></script>
<script src="{{asset('plugins/lightpick/lightpick.js')}}"></script>
<script src="{{asset('assets/pages/jquery.profile.init.js')}}"></script>
<!-- App js -->
<script src="{{asset('assets/js/app.js')}}"></script>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])


</body>
</html>
