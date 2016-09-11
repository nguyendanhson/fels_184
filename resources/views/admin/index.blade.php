@extends('layouts.admin')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center">Admin Page</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-2 col-lg-offset-1 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-2">
                            <i class="fa fa-users fa-3x"></i>
                        </div>
                        <div class="col-xs-10 text-right">
                            <div class="huge">{{ $users }}</div>
                            <div>Manage Users</div>
                        </div>
                    </div>
                </div>
                <a href="{{URl('/admin/users')}}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-2 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-2">
                            <i class="fa fa-tasks fa-3x"></i>
                        </div>
                        <div class="col-xs-10 text-right">
                            <div class="huge">12</div>
                            <div>Manage Categories</div>
                        </div>
                    </div>
                </div>
                <a href="{{ URL('admin/categories') }}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-2 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-2">
                            <i class="fa fa-file-text-o fa-3x"></i>
                        </div>
                        <div class="col-xs-10 text-right">
                            <div class="huge">124</div>
                            <div>Manage Lessons</div>
                        </div>
                    </div>
                </div>
                <a href="{{ URL('admin/lessons') }}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-2 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-2">
                            <i class="fa fa-font fa-3x"></i>
                        </div>
                        <div class="col-xs-10 text-right">
                            <div class="huge">13</div>
                            <div>Manage Words</div>
                        </div>
                    </div>
                </div>
                <a href="{{ URL('admin/words') }}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-2 col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-2">
                            <i class="fa fa-check-square-o fa-3x"></i>
                        </div>
                        <div class="col-xs-10 text-right">
                            <div class="huge">13</div>
                            <div>Manage Answers</div>
                        </div>
                    </div>
                </div>
                <a href="{{ URL('admin/words') }}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header text-center">All Activities</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>

</div>
<!-- /#page-wrapper -->
@endsection
