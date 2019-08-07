@extends('layouts.admin')

@section('pagetitle')
Sepatu Bordir.id | Marketing
@endsection

@section('content')
<!-- Navbar -->
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Sepatu Bordir</b>ID</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="hidden-xs">{{$user->username}}</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="{{ asset('vendor/AdminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                  <p>
                  {{$user->username}} - Management Marketing
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="{{url('/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN MENU</li>
          <li class="active">
            <a href="#">
              <i class="fa fa-check"></i> <span>Pengadaan Barang</span>
            </a>
          </li>
          <li>
            <a href="{{url('marketing/status-pemesanan')}}">
              <i class="fa fa-th-list"></i> <span>Status Pemesanan</span>
            </a>
          </li>
          <li>
            <a href="{{url('marketing/pengiriman')}}">
              <i class="fa fa-truck"></i> <span>Pengiriman</span>
            </a>
          </li>
          <li>
            <a href="">
              <i class="fa fa-users"></i> <span>Customer</span>
            </a>
          </li>
          <li>
            <a href="">
              <i class="fa fa-line-chart"></i> <span>Laporan Pemesanan</span>
            </a>
          </li>
          </li>        
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
           PENGADAAN BARANG
        </h1>
        <ol class="breadcrumb">
          <li class="active"><i class="fa fa-check"></i>Pengadaan Barang</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Info boxes -->
        <div class="row">
          @foreach($city as $row)
          <div class="col-md-3 col-sm-6 col-xs-12">
            <a href="{{url('marketing/pengadaan')}}/{{$row->namaKota}}">
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="fa fa-cubes"></i></span>       
              <div class="info-box-content">
                <span class="info-box-text">{{ucfirst($row->namaKota)}}</span>
                <span class="info-box-number">({{$row->counter}})</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          @endforeach
          <!-- /.col -->
        </div>
      </section>
    <!-- /.content-wrapper -->
  </div>

<!-- Footer -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.13
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>
 </body>
@endsection
