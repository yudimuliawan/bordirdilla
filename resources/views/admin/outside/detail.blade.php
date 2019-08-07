@extends('layouts.admin')

@section('pagetitle')
Sepatu Bordir.id | Admin
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
        <li>
          <a href="#">
            <i class="fa fa-check"></i> <span>Kelola Produk</span>
          </a>
        </li>
        <li class="active">
          <a href="/customer">
            <i class="fa fa-user-plus"></i> <span>Konfirmasi Customer</span>
          </a>
        </li>
        <li>
          <a href="{{url('marketing/status-pemesanan')}}">
            <i class="fa fa-line-chart"></i> <span>Laporan Penjualan</span>
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
        KONFIRMASI CUSTOMER
      </h1>
      <ol class="breadcrumb">
        <li><a href="/customer"><i class="fa fa-check"></i>Konfirmasi Customer</a></li>
        <li class="active">Konfirmasi Customer</a></li>
      </ol>
    </section>
  
    <!-- Main content -->
    <section class="content">  
      <div class="row">
        <div class="main">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Konfirmasi Customer</h3>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="box box-info">
                  <div class="table-responsive">
                     @if (session('msg'))
                    <div class="alert alert-success">
                        {{ session('msg') }}
                    </div>
                    @endif
                    <table class="table no-margin">
                      <tbody>
                        <tr>
                            <tr>
                                <td>Customer ID</td>
                                <td>:</td>
                                <td>{{$rs->customerId}}</td>
                            </tr>
                            <tr>
                                <td>Customer Name</td>
                                <td>:</td>
                                <td>{{$rs->customerName}}</td>
                            </tr>
                            <tr>
                                <td>Kota Distribusi</td>
                                <td>:</td>
                                <td>{{$rs->kotaDistribusi}}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{$rs->address}}</td>
                            </tr>
                            <tr>
                                <td>No Telp</td>
                                <td>:</td>
                                <td>{{$rs->phone}}</td>
                            </tr>
                            <tr>
                                <td>Alamat Email</td>
                                <td>:</td>
                                <td>{{$rs->alamatEmail}}</td>
                            </tr>
                        </tr>
                      </tbody>
                    </table>
                    <form action="{{route('konfirmasi')}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="customerId" value="{{$rs->customerId}}">
                        <input class="btn btn-lg btn-block btn-success text-uppercase" type="submit" value="Konfirmasi">
                    </form>
                  </div>
                </div>
                <!-- ./box-body -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->    
  <!-- /.content-wrapper -->
  </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.13
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>
 </body>
</html>
@endsection