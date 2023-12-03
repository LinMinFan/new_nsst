@extends('layouts.manage')

@push('meta')
@endpush

@push('css')
@endpush

@section('content')
    <div class="col-8" id="main">
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title">
                全方位建築智慧化管理系統 <small>新保科技</small>
            </h3>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="">{{trans('manage.homepage')}}</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">{{trans('manage.main_interface')}}</a>
                    </li>
                </ul>
                <div class="page-toolbar">
                </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN STATUS -->
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="dashboard-stat red-sunglo">
                        <div class="visual">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                mail
                            </div>
                            <div class="desc">
                                {{trans('manage.pending_letters')}}
                            </div>
                        </div>
                        <a class="more" href="">
                            {{trans('manage.read_all')}}
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="dashboard-stat yellow-crusta">
                        <div class="visual">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                0
                            </div>
                            <div class="desc">
                                {{trans('manage.stayed_visitors')}}
                            </div>
                        </div>
                        <a class="more" href="">
                            {{trans('manage.read_all')}}
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="dashboard-stat green-meadow">
                        <div class="visual">
                            <i class="fa fa-gift"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                0
                            </div>
                            <div class="desc">
                                {{trans('manage.pending_objects')}}
                            </div>
                        </div>
                        <a class="more" href="">
                            {{trans('manage.read_all')}}
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END STATUS -->
            <!-- BEGIN DASHBOARD STATS -->
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="dashboard-stat blue-madison">
                        <div class="visual">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                None
                            </div>
                            <div class="desc">
                                {{trans('manage.wait_approve_reservation')}}
                            </div>
                        </div>
                        <a class="more" href="javascript:;">
                            {{trans('manage.process_approve')}}
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="dashboard-stat red-intense">
                        <div class="visual">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                0
                            </div>
                            <div class="desc">
                                {{trans('manage.notice_problems')}}
                            </div>
                        </div>

                        <a class="more" href="">
                            {{trans('manage.read_all')}}
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="dashboard-stat green-haze">
                        <div class="visual">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                0
                            </div>
                            <div class="desc">
                                {{trans('manage.amount_resident')}}
                            </div>
                        </div>
                        <a class="more" href="">
                            {{trans('manage.members_manage')}}
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="dashboard-stat purple-plum">
                        <div class="visual">
                            <i class="fa fa-crosshairs"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                0
                            </div>
                            <div class="desc">
                                {{trans('manage.ba_warning_notice')}}
                            </div>
                        </div>
                        <a class="more" href="javascript:;">
                            {{trans('manage.read_all')}}
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END DASHBOARD STATS -->
            <div class="clearfix">
            </div>

        </div>
    </div>
@endsection

@push('js')
@endpush
