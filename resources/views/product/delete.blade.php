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
      <a class="logo">
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
            <i class="fa fa-check"></i> <span>Kelola Produk</span>
          </a>
        </li>
        <li>
          <a href="#">
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
				KELOLA PRODUK
			</h1>
			<ol class="breadcrumb">
				<li><a href="/admin"><i class="fa fa-check"></i>Home</a></li>
                <li><a href="/product"><i class="fa fa-check"></i>Kelola Produk</a></li>
          		<li class="active">Delete Product</li>
			</ol>
    	</section>
  
		<!-- Main content -->
		<section class="content">  
			<div class="row">
				<div class="main">
					<div class="col-md-12">
						<div class="box">
							<div class="panel panel-info">
								<div class="panel-heading">
									<h3 class="panel-title">Delete Product</h3>
								</div>
								<div class="panel-body"> 
                  <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>Picture</th>
                            <th>Product Id</th>
                            <th>Product name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Catagory Name</th>                                
                            <th>Option</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td height="5%" width="20%">
                              <img src="{{asset('vendor/colo/images/product_5.png') }}" height="100%" width="100%">
                            </td>
                            <td>
                              <label>{{$product->productId}}</label>
                            </td>
                            <td>
                              <label>{{$product->productName}}</label>
                            </td>
                            <td>
                              <label>{{$product->price}}</label>
                            </td>
                            <td height="10%" width="20%">
                              <label>{{$product->description}}</label>
                            </td>
                            <td>
                              <label>{{$product->category->categoryName}}</label>
                            </td>
                            <td>
                              <i class="fa fa-pencil" style="color: red;"><a href="/product/{{$product->productId}}/edit"> Edit product</a></i>
                            </td>
                          </tr>
                        </tbody>
                    </table>
                    <h3>Are you sure you want to delete this product?</h3>
                    <form method="post" action="/product/{{$product->productId}}">
                      {{csrf_field()}}
                      <input type="hidden" name="_method" value="delete">
                      <input class="btn btn-danger" type="submit" value="Confirm">
                    </form>
                  </div>
                </div>
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