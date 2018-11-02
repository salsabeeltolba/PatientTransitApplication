<?php
$module = \App\Module::All(); //get all records review tables
?>

        <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> My Transition Explorer </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">
    <!-- bottom Script is for quiz/adminlte, yeahyea-->
    <link rel="stylesheet" href="{{asset('adminlte/css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style type="text/css">
        .module_detail_card{
            padding: 20px!important;
        }
        .card-title {
            margin-bottom: 1.75rem;
            font-size: 20px;
            font-weight: 900;
            /*   border-bottom: 1px solid black;*/
        }
        .module_detail_title{
            border-bottom: 1px solid #E2E2E2;
        }
        .module_detail_description{
            margin-top: 20px;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-primary  navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i> Menu</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">

            </li>
            <li class="nav-item d-none d-sm-inline-block">

            </li>
        </ul>


        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="{{url('home')}}" class="nav-link" >
                    <i class="nav-icon fas fa-home" title="Home"></i>
                </a>
            </li>

            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="nav-icon fa fa-bell" title="Notifications"></i>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out-alt" title="Log Out"></i>
                    <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    </p>
                </a>
            </li>


        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{url('home')}}" class="brand-link  bg-primary">
            <img src='{{ asset("/mte.ico")}}' class="brand-image img-circle elevation-3">
            <span class="brand-text text-lg-center font-weig-bold"> My Transition <br>    Explorer</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src='{{ asset("/403.svg")}}'  class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="{{ route('UserProfile') }}" class=" d-block"> {{ Auth::user()->name }}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="{{ route('UserProfile') }}" class="nav-link">
                            <i class="nav-icon fa fa-heartbeat"></i>
                            <p>
                                User Profile
                            </p>
                        </a>
                    </li>
                    @if(!Auth::user()->isAdmin())

                        <li class="nav-item">
                            <a href="{{ route('events.index') }}" class="nav-link">
                                <i class="nav-icon fa fa-calendar-alt">  </i>
                                <p>
                                    Reminders
                                </p>
                            </a>
                        </li>
                    @endif
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-edit"></i>
                            <p>
                                Survey
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('tests')}}" class="nav-link">
                                    <i class="nav-icon fas fa-pen"></i>
                                    <p>Take Survey</p>
                                </a>
                            </li>
                            @if(!Auth::user()->isAdmin())
                                <li class="nav-item">
                                    <a href="{{url('results')}}" class="nav-link">
                                        <i class="nav-icon fas fa-check-circle"></i>
                                        <p>View Past Results</p>
                                    </a>
                                <li class="nav-item">
                                    <a href="{{url('ResultTable')}}" class="nav-link">
                                        <i class="nav-icon fas fa-table"></i>
                                        <p>View Table </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('ResultGraph')}}" class="nav-link">
                                        <i class="nav-icon fas fa-chart-line"></i>
                                        <p>View Graph </p>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </li>

                    @if(Auth::user()->isAdmin())
                        <li class="nav-item">
                            <a href="{{url('topics')}}" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Topics
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('questions')}}" class="nav-link">
                                <i class="nav-icon fas fa-question"></i>
                                <p>
                                    Questions
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('questions_options')}}" class="nav-link">
                                <i class="nav-icon fas fa-check-square"></i>
                                <p>
                                    Question Options
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-book"></i>
                                <p>
                                    Module
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @forelse($module as $key => $value)
                                    <li class="nav-item">
                                        <a href="{{ route('module_detail.index',['id' => $value->id]) }}" class="nav-link">
                                            <i class="nav-icon fas fa-hand-holding-heart"></i>
                                            <p>{{$value->name}}</p>
                                        </a>
                                    </li>
                            @empty
                            @endforelse  <!-- added file -->

                            </ul>
                        </li>


                        @if(!Auth::user()->isAdmin())
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-users"></i>
                                    <p>
                                        User Management
                                        <i class="fa fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{url('roles')}}" class="nav-link">
                                            <i class="nav-icon fas fa-database"></i>
                                            <p>Roles</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('users')}}" class="nav-link">
                                            <i class="nav-icon fas fa-user-circle"></i>
                                            <p>Users</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('user_actions')}}" class="nav-link">
                                            <i class="nav-icon fas fa-sticky-note"></i>
                                            <p>User Actions</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    @else
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-book"></i>
                                <p>
                                    module
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @forelse($module as $key => $value)
                                    <li class="nav-item">
                                        <a href="{{ route('module_detail.show',['id' => $value->id]) }}" class="nav-link">
                                            <i class="nav-icon fas fa-hand-holding-heart"></i>
                                            <p>{{$value->name}}</p>
                                        </a>
                                    </li>
                                @empty
                                @endforelse
                            </ul>
                        </li>

                    @endif

                    @if(!Auth::user()->isAdmin())

                        <li class="nav-item">
                            <a href="{{ route('Timeline') }}" class="nav-link">
                                <i class="nav-icon fa fa-heartbeat"></i>
                                <p>
                                    Timeline
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{ route('notes.index') }}" class="nav-link">
                                <i class="nav-icon fa fa-clipboard-list"></i>
                                <p>
                                    Notes
                                </p>
                            </a>
                        </li>

                    @endif

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <section class="content">
            @yield('content')
        </section>

    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2018-2019 <a href="#"> My Transition Explorer </a>.</strong>
    All rights reserved.
</footer>

<!-- REQUIRED SCRIPTS -->
<script src="/js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- bottom Script is for quiz/adminlte-->
<script src="{{asset('adminlte/js/app.js')}}"></script>
<script src="{{asset('adminlte/ckeditor/ckeditor.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    </body>
    </html>
@stack('js')