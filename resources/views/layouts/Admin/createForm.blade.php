@extends('include.main')
@section('content')
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row">
                <div class="col">
                    <h4 class="page-title">Admins</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">Admin</a>
                        </li>
                        <li class="breadcrumb-item active">Create New Admin</li>
                    </ol>
                </div>
                <!--end col-->
                <div class="col-auto align-self-center">
                    <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                        <span class="day-name" id="Day_Name">Today:</span>&nbsp; <span class=""
                                                                                       id="Select_date"></span>
                        <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                    </a>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end page-title-box-->
    </div>
    <div class="tab-pane fade active show" id="Profile_Settings" role="tabpanel"
         aria-labelledby="settings_detail_tab">
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Personal Information</h4>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        @if(Session::has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <span class="alert-text"><strong>Error!</strong> {{Session::get('error')}}</span>
                            </div>
                        @endif
                            @if($errors->has('email'))

                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <span class="alert-text"><strong>Error!</strong> {{ $errors->first('email') }}</span>
                                </div>
                            @endif
                            @if($errors->has('name'))

                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <span class="alert-text"><strong>Error!</strong> {{ $errors->first('name') }}</span>
                                </div>
                            @endif
                            @if($errors->has('password'))

                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <span class="alert-text"><strong>Error!</strong> {{ $errors->first('password') }}</span>
                                </div>
                            @endif
                        <form method="POST" action="{{route('store.new.admin')}}" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Name</label>
                            <div class="col-lg-9 col-xl-8">
                                <input class="form-control" name="name"  type="text" value="{{old('name')}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Email</label>
                            <div class="col-lg-9 col-xl-8">
                                <input class="form-control" name="email" type="email" value="{{old('email')}}">
                                <span class="form-text text-muted font-12">We'll never share your email with anyone else.</span>
                            </div>
                        </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">New Password</label>
                                <div class="col-lg-9 col-xl-8">
                                    <input class="form-control" name="password" type="password" placeholder="New Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Confirm Password</label>
                                <div class="col-lg-9 col-xl-8">
                                    <input class="form-control" name="password_confirmation" type="password" placeholder="Re-Password">
                                    <span class="form-text text-muted font-12">Never share your password.</span>
                                </div>
                            </div>
                        <div class="form-group row">
                            <div class="col-lg-9 col-xl-8 offset-lg-3">
                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
            <!--end col-->

            <!-- end col -->
        </div>
        <!--end row-->
    </div>
@stop
