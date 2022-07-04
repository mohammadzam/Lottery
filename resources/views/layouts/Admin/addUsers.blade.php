@extends('include.main') @section('content') <div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">Lottery</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">Panel</a>
                            </li>
                            <li class="breadcrumb-item active">Lottery</li>
                        </ol>
                    </div>
                    <!--end col-->
                    <div class="col-auto align-self-center">
                        <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                            <span class="day-name" id="Day_Name">Today:</span>&nbsp; <span class="" id="Select_date">Jan 7</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar align-self-center icon-xs ml-1">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
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
        <div class="col-sm-8 offset-sm-2">
            @if($errors->has('num'))

                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="alert-text"><strong>Error!</strong> {{ $errors->first('num') }}</span>
                </div>
            @endif
            <div class="card">
                <img class="card-img-top img-fluid bg-light-alt w-50" style="margin-left: 25%;margin-top: 2%" src="{{asset('assets/images/add-user.png')}}" width="250" height="250" alt="Card image cap">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Adding new contestants</h4>
                        </div>
                        <!--end col-->
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-header-->
                <div class="card-body text-center">
                    <p class="card-text text-muted">Please enter the number of users you want to add, you cannot add more than 5 contestants at a time</p>
                    <div class="form-group">
                        <label class="mb-3">Pleas insert a value:</label>
                        <form method="POST" action="{{route('add.users')}} " enctype="multipart/form-data">
                            @csrf
                        <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
              <span class="input-group-btn input-group-prepend">
                <button class="btn btn-primary bootstrap-touchspin-down" type="button">-</button>
              </span>
                            <input id="demo3" type="number" value="" name="num" class="form-control">
                            <span class="input-group-btn input-group-append">
                <button class="btn btn-primary bootstrap-touchspin-up" type="button">+</button>
              </span>
                        </div>
{{--                                <div class="col-lg-9 col-xl-8 offset-lg-3 mt-5 mr-4">--}}
                                    <button type="submit" class="btn btn-primary btn-md mt-5">Add</button>
{{--                                </div>--}}
                        </form>
                    </div>

                </div>
                <!--end card -body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->
</div> @stop
