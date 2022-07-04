@extends('include.main')
@section('content')
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row">
                            <div class="col">
                                <h4 class="page-title">Profile</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Panel</a>
                                    </li>
                                    <li class="breadcrumb-item active">Profile</li>
                                </ol>
                            </div>
                            <!--end col-->
                            <div class="col-auto align-self-center">
                                <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                    <span class="day-name" id="Day_Name">Today:</span>&nbsp; <span class="" id="Select_date"></span>
                                    <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                                </a>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div id="user_map" class="pro-map" style="height: 220px"></div>
                        </div>
                        <!--end card-body-->
                        <div class="card-body">
                            <div class="dastyle-profile">
                                <div class="row">
                                    <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                        <div class="dastyle-profile-main">
                                            <div class="dastyle-profile-main-pic">
                                                <img src="{{asset('assets/images/users/owner.jpg')}}" alt="" height="110" class="rounded-circle">

                            </span>
                                            </div>
                                            <div class="dastyle-profile_user-detail">
                                                <h5 class="dastyle-user-name">Mohammad Zam</h5>
                                                <p class="mb-0 dastyle-user-name-post">laravel / Full Stack Developer , Syria</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-4 ml-auto align-self-center">
                                        <ul class="list-unstyled personal-detail mb-0">
                                            <li class="">
                                                <i class="las la-phone mr-2 text-secondary font-22 align-middle"></i>
                                                <b>Phone </b>: +98 91004 40339
                                            </li>
                                            <li class="mt-2">
                                                <i class="las la-envelope text-secondary font-22 align-middle mr-2"></i>
                                                <b>Email </b>: Mohammadalizamp9@gmail.com
                                            </li>
                                            <li class="mt-2">
                                                <i class="las la-globe text-secondary font-22 align-middle mr-2"></i>
                                                <b>Lives in </b>: <a href="" class="font-14 text-primary">Iran</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-4 align-self-center">
                                        <div class="row">
                                            <div class="col-auto text-right border-right">
                                                <a href="https://www.facebook.com/mohammad.zam.3348" type="button" class="btn btn-soft-primary btn-icon-circle-sm mb-2">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                                <p class="mb-0 font-weight-semibold">Facebook</p>
                                                </h4>
                                            </div>
                                            <!--end col-->
                                            <div class="col-auto">
                                                <a href="https://wa.me/989100440339" type="button" class="btn btn-soft-success btn-icon-circle-sm mb-2">
                                                    <i class="fab fa-whatsapp"></i>
                                                </a>
                                                <p class="mb-0 font-weight-semibold">WhatsApp</p>
                                                </h4>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end f_profile-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>

        </div>
        <!-- container -->
@stop
