<!DOCTYPE html>
<!--
   This is a starter template page. Use this page to start your new project from
   scratch. This page gets rid of all links and provides the needed markup only.
   -->
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>My Transition Explorer</title>
      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="dist/css/adminlte.min.css">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   </head>
   <body class="hold-transition sidebar-mini">
      <div class="wrapper">
         <!-- Navbar -->
         <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
               </li>
               <li class="nav-item d-none d-sm-inline-block">
                  <a href="index3.html" class="nav-link">Home</a>
               </li>
               <li class="nav-item d-none d-sm-inline-block">
                  <a href="#" class="nav-link">Timeline</a>
               </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
               <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <a href="#" class="dropdown-item">
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
               </div>
               </li>
               <!-- Notifications Dropdown Menu -->
               <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="fa fa-bell-o"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                     <div class="dropdown-divider"></div>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                  </div>
               </li>
            </ul>
         </nav>
         <!-- /.navbar -->
         <!-- Main Sidebar Container -->
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
            <img src="dist/img/boxed-bg.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
               style="opacity: .8">
            <span class="brand-text font-weight-light">My Transition Explorer</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
               <!-- Sidebar user panel (optional) -->
               <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                     <img src="dist/img/boxed-bg.jpg" class="img-circle elevation-2" alt="User Image">
                  </div>
                  <div class="info">
                     <a href="#" class="d-block">
                     {{ Auth::user()->name }}
                     </a>
                  </div>
               </div>
               <!-- Sidebar Menu -->
               <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                     <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="nav-icon fa fa-dashboard"></i>
                           <p>
                              Dashboard
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="nav-icon fa fa-dashboard"></i>
                           <p>
                              Timelime
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="nav-icon fa fa-dashboard"></i>
                           <p>
                              Survey
                           </p>
                        </a>
                     </li>
                     <li class="nav-item has-treeview">
                        <a href="#" class="nav-link active">
                           <i class="nav-icon fa fa-bell"></i>
                           <p>
                              Reminders
                              <i class="right fa fa-angle-left"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="#" class="nav-link active">
                                 <i class="fa fa-circle-o nav-icon"></i>
                                 <p>Calender</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                                 <i class="fa fa-circle-o nav-icon"></i>
                                 <p>Notes</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="nav-icon fa fa-user"></i>
                           <p>
                              Profile
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           <i class="nav-icon fa fa-power-off"></i>Log out
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                           </form>
                           </p>
                        </a>
                  </ul>
               </nav>
               <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
         </aside>
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <div class="content">
               <div class="container-fluid">
               </div>
               <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <!-- Control Sidebar -->
         <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
               <h5>Title</h5>
               <p>Sidebar content</p>
            </div>
         </aside>
         <!-- /.control-sidebar -->
         <!-- Main Footer -->
         <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2018 <a href="https://adminlte.io"> - </a>.</strong> All rights reserved.
         </footer>
      </div>
      <!-- ./wrapper -->
      <!-- REQUIRED SCRIPTS -->
      <!-- jQuery -->
      <script src="plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE App -->
      <script src="dist/js/adminlte.min.js"></script>
   </body>
</html>