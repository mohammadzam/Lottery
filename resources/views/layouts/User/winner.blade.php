@extends('include.main')
@section('content')
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Users</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0);">Panel</a>
                                </li>
                                <li class="breadcrumb-item active">Winner</li>
                            </ol>
                        </div>
                        <!--end col-->
                        <div class="col-auto align-self-center">
                            <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                <span class="day-name" id="Day_Name">Today:</span>&nbsp; <span class=""
                                                                                               id="Select_date">Jan 11</span>
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

        <div class="row">
            <div class="col-lg-12">
                <table class="body-wrap"
                       style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: transparent; margin: 0;"
                       bgcolor="transparent">
                    <tbody>
                    <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                        <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;"
                            valign="top"></td>
                        <td class="container" width="600"
                            style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;"
                            valign="top">
                            <div class="content"
                                 style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;">
                                <table class="main" width="100%" cellpadding="0" cellspacing="0" itemprop="action"
                                       itemscope="" itemtype="http://schema.org/ConfirmAction"
                                       style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background-color: transparent; margin: 0; border: 1px dashed #4d79f6;"
                                       bgcolor="#fff">
                                    <tbody>
                                    <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                        <td class="content-wrap"
                                            style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;"
                                            valign="top">
                                            <meta itemprop="name" content="Confirm Email"
                                                  style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                            <table width="100%" cellpadding="0" cellspacing="0"
                                                   style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                <tbody>
                                                <tr>
                                                    <img class="card-img-top img-fluid bg-light-alt w-75" style="margin-bottom: 4%;margin-left: 12%"
                                                         src="{{asset('assets/images/Congra.png')}}"
                                                         alt="Card image cap">
                                                </tr>
                                                <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                    <td class="content-block text-success"
                                                        style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; color: #4d79f6; font-size: 24px; font-weight: 700; text-align: center; vertical-align: top; margin: 0; padding: 0 0 10px;"
                                                        valign="top">The Winner Is: {{$data->name}}</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                            <div class="text-center">
                                                <a href="{{route('show.lottery.win')}}" class="btn btn-primary btn-sm">Draw
                                                    Again</a>
                                            </div>

                                        </td>

                                    </tr>

                                    </tbody>
                                </table>
                                <!--end table-->
                            </div>
                            <!--end content-->
                        </td>
                        <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;"
                            valign="top"></td>
                    </tr>
                    </tbody>
                </table>
                <!--end table-->
            </div>
            <!--end col-->
        </div>
        <!-- end row -->
    </div>

@stop
