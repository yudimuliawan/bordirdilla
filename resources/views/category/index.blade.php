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
          		<li class="active">Kelola Produk</li>
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
									<h3 class="panel-title">Data Category Sepatu Bordir.ID</h3>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col col-xs-12 text-right">
											<a class="btn btn-sm btn-primary" href="/product" style="color: white; text-decoration: none;">Product</a>
											<a class="btn btn-sm btn-warning" href="/category/create" style="color: white; text-decoration: none;">Create New Category</a>
											<div class="col col-xs-3 text-right">
											<form class="navbar-form" role="search" method="post" action="/category/search">
							  	{{csrf_field()}}
							    <div class="input-group add-on">
							      <input class="form-control" placeholder="Search" name="searchText" id="srch-term" type="text">
							      <div class="input-group-btn">
							        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
							      </div>
							    </div>
							  </form>
		                  					</div>
		                				</div>
	              					</div>
									  <div class="panel-body">
	                <table class="table table-striped table-bordered table-list">
	                	<thead>
		                    <tr>
		                        <th><em class="fa fa-cog"> Options</em></th>
		                        <th class="hidden-xs">ID</th>
		                        <th>category name</th>
		                    </tr> 
	                  	</thead>
		                <tbody>
		                    @foreach($categories as $category)
		                          <tr>
		                            <td align="center">
		                              <a class="btn btn-warning" href="/category/{{$category->categoryId}}/edit"><em class="fa fa-pencil"></em></a>
		                              <a class="btn btn-danger" href="/category/{{$category->categoryId}}/delete"><em class="fa fa-trash"></em></a>
		                            </td>
		                            <td class="hidden-xs">{{$category->categoryId}}</td>
		                            <td>{{$category->categoryName}}</td>
		                          </tr>
		                    @endforeach
		                </tbody>
	                </table>
	              </div>
	              <div class="panel-footer">
	                <div class="row">
	                  <div class="col col-xs-4">Number of categories: {{$categories->count()}}
	                  </div>
	                    </ul>
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