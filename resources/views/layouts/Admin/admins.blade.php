@extends('include.main')
@section('content')
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row">
                            <div class="col">
                                <h4 class="page-title">Admins</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Panel</a>
                                    </li>
                                    <li class="breadcrumb-item active">Admins Table</li>
                                </ol>
                            </div>
                            <!--end col-->
                            <div class="col-auto align-self-center">
                                <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                    <span class="day-name" id="Day_Name">Today:</span>&nbsp; <span class="" id="Select_date">Jan 11</span>
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
                <div class="col-sm-12 text-left mb-4">
                    <a  href="{{route('create.new.admin')}}" class="btn btn-primary px-4">Create New Admin</a>
                </div>

            </div>
            <!--end row-->
            <!-- end page title end breadcrumb -->
            <!-- end row -->

            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                    <tr class="text-center">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th class="">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($data)& $data->count()>0)
                                        @foreach($data as $datum)
                                    <tr class="text-center">
                                        <td>{{$datum->id}}</td>
                                        <td>{{$datum->name}}</td>
                                        <td>{{$datum->email}}</td>
                                        <td class="d-flex justify-content-around">
                                            <a href="{{route('show.edit.form.admin',$datum->id)}}">
                                                <i class="las la-pen text-info font-18"></i>
                                            </a>
                                            <a href="#">
                                                <i class="las la-eye text-success font-18"></i>
                                            </a>
                                            <a href="{{route('destroy.admin',$datum->id)}}">
                                                <i class="las la-trash-alt text-danger font-18"></i>
                                            </a>

                                        </td>
                                    </tr>
                                        @endforeach
                                    @else
                                        <div>
                                            <h3 class="text-center text-danger">No Data Found</h3>
                                        </div>
                                        @endif
                                    </tbody>
                                </table>
                                <!--end /table-->
                            </div>
                            <!--end /tableresponsive-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
            </div>
            <!-- end row -->
        </div>

@stop
