@extends('layouts.admin')

@section('pagetitle')
Sepatu Bordir.id | Marketing
@endsection

@section('content')
<!-- Navbar-->
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
            PENGIRIMAN
          </h1>
          <ol class="breadcrumb">
            <li><a href="/marketing/pengiriman"><i class="fa fa-check"></i>Pengiriman</a></li>
            <li class="active">Detail Pengiriman</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">  
          <div class="row">
            <div class="main">
              <div class="col-md-12">
                <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">Detail pengiriman barang : ID ({{$detail[0]->idPemesanan}}) </h3>
                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                  <div class="box box-info">
                  <div class="container mb-4">
                      <form action="{{url('marketing/pengiriman/send')}}" method="post" enctype="multipart/form-data"> 
                        <div class="row">
                          {{csrf_field()}}
                          <div class="col-12">
                            <div class="table-responsive">
                                <input type="hidden" name="idPemesanan" value="{{$detail[0]->idPemesanan}}">
                                <input type="hidden" name="kota" value="{{$detail[0]->Kota}}">
                                <table class="table table-striped">
                                  <thead>
                                    <tr>
                                        <td scope="col">Kota </td>
                                        <td scope="col">{{ucfirst($detail[0]->Kota)}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="col"> <b>Nama</b> </td>
                                        <td scope="col">{{ucfirst($detail[0]->namaCustomer)}} </td>
                                        <input type="hidden" name="namaCustomer" value="{{$detail[0]->namaCustomer}}">
                                    </tr>
                                    <tr>
                                        <td scope="col"> <b>Alamat Pengiriman</b> </td>
                                        <td scope="col">{{$detail[0]->Alamat}} </td>
                                        <input type="hidden" name="alamat" value="{{$detail[0]->Alamat}}">
                                    </tr>
                                  </thead>
                                </table>
                            </div>
                          </div>
                          <div class="table-responsive">
                              <h5 style="text-align:left;margin-top:2%">Detail Pesanan</h5>
                              <table class="table table-striped">
                                  <thead>
                                    <tr>
                                        <th scope="col"> </th>
                                        <th scope="col">Produk</th>
                                        <th scope="col">Ukuran</th>
                                        <th scope="col" class="text-center">Jumlah</th>
                                        <th scope="col" class="text-right">Harga</th>
                                        <th> </th>
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
                                        <td class="text-right">Rp. {{$cp->totalPrice}}</td>
                                        <!-- <td class="text-right"><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td> -->
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
                                        <td class="text-right"><strong>Rp. {{$total}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><strong>Voucher</strong></td>
                                        <td class="text-right"><strong>{{$detail[0]->promo}}%</strong></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><strong>Jenis</strong></td>
                                        <td class="text-right"><strong>{{$detail[0]->jenis}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><strong>Yang harus dibayar</strong></td>
                                        <td class="text-right"><strong>Rp.
                                                {{$total-($total*($detail[0]->promo/100))}}</strong></td>
                                        <input type="hidden" name="pay" value="{{$total-($total*($detail[0]->promo/100))}}">
                                    </tr>
                                  </tbody>
                              </table>
                          </div>
                          <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td scope="col"> <b>Jasa Pengiriman</b> </td>
                                        <td scope="col">
                                            <select name="kurir" class="form-control">
                                                <option>JNE</option>
                                                <option>J&T</option>
                                            </select>
                                        </td>
                                        <td scope="col"></td>
                                        <td scope="col"></td>
                                    </tr>
                                    <tr>
                                        <td scope="col"> <b>Biaya Pengiriman</b> </td>
                                        <td scope="col">Rp.20.000 </td>
                                        <input type="hidden" name="ongkir" value="20000">
                                        <td scope="col"></td>
                                        <td scope="col"></td>
                                    </tr>
                                    <tr>
                                        <td scope="col"> <b>Bukti Pengiriman</b> </td>
                                        <td scope="col"><input type="file" name="buktiPengiriman" id=""> </td>
                                        <td scope="col"></td>
                                        <td scope="col"></td>
                                    </tr>
                                </thead>
                            </table>
                          </div>
                        </div>
                        <div class="col mb-2">
                          <div class="row">
                            <div class="col-sm-12  col-md-6">
                            </div>
                            <div class="col-sm-12 col-md-6 text-right">
                              <label for=""> <br></label>
                              <input class="btn btn-lg btn-block btn-success text-uppercase" type="submit" value="Send">
                            </div>
                          </div>
                        </div>
                      </form>
                  <div>
                </div>
              </div>
            </div>
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