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
              <i class="fa fa-users"></i> <span>Member</span>
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
            <li><a href="/marketing/pengadaan"><i class="fa fa-check"></i>Pengadaan Barang</a></li>
            <li><a href="#"><i class="fa fa-check"></i>Kota DIstribusi</a></li>
            <li class="active">Detail Pemesanan</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">  
          <div class="row">
            <div class="main">
              <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">Detail Pemesanan Sepatu : ID ({{$detail[0]->idPemesanan}}) </h3>
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <div class="box box-info">
                        <div class="container mb-4">
                          <form action="{{url('marketing/pengadaan/send')}}" method="post" enctype="multipart/form-data"> 
                            <div class="row">
                              {{csrf_field()}}
                              <div class="col-12">
                                <div class="table-responsive">
                                  <input type="hidden" name="idPemesanan" value="{{$detail[0]->idPemesanan}}">
                                  <input type="hidden" name="kota" value="{{$city}}">
                                  <table class="table">
                                    <thead>
                                      <tr>
                                          <th scope="col"> </th>
                                          <th scope="col">Produk</th>
                                          <th scope="col">Ukuran</th>
                                          <th scope="col">Jumlah</th>
                                          <th scope="col">Harga</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                                      $total=0;
                                      ?>
                                      @foreach($detail as $cp)
                                      <tr>
                                          <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                          <td>{{$cp->productName}}</td>
                                          <td>{{$cp->size}}</td>
                                          <td>{{$cp->quantity}}</td>
                                          <td >Rp. {{$cp->totalPrice}}</td>
                                      </tr>
                                      <?php 
                                          $total=$total+($cp->totalPrice);
                                      ?>
                                      @endforeach 
                                      <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td><strong>Total</strong></td>
                                          <td><strong>Rp. {{$total}}</strong></td>
                                      </tr>
                                      <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td><strong>Yang harus dibayar</strong></td>
                                          <td><strong>Rp. {{$total-($total*($detail[0]->promo/100))}}</strong></td>
                                          <input type="hidden" name="pay" value="{{$total-($total*($detail[0]->promo/100))}}">
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="col mb-2">
                                <div class="row">
                                    <div class="col-sm-12  col-md-6">
                                      <label for=""> Bukti pembayaran</label><br>
                                      <a target="_blank" href="{{asset($detail[0]->buktiPembayaran)}}">
                                      <img style="height:100px; width:100px" src="{{asset($detail[0]->buktiPembayaran)}}" />
                                      </a> 
                                    </div>
                                    <div class="col-sm-5 col-md-5 text-right">
                                      <label for=""> <br></label>
                                      <input class="btn btn-lg btn-block btn-success text-uppercase" type="submit" value="Konfirmasi">
                                    </div>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-- ./box-body -->
                    <div class="box-footer">
                      <div class="row">
               
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.box-footer -->
                  </div>
                  <!-- /.box -->
                </div>
                <!-- /.col -->
              </div>
          </div>
          <!-- /.row -->
        </section>
      <!-- /.content-wrapper -->
      </div>

<!-- Footer-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.4.13
        </div>
        <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
        reserved.
      </footer>
</body>
@endsection