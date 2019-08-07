
@extends('layouts.main')

@section('pagetitle')
Sepatu Bordir.id| History Detail
@endsection

@section('content')
<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
			<div class="row">
				<div class="col-md-3 top-info text-left mt-lg-4">
					<h6>Need Help</h6>
					<ul>
						<li>
							<i class="fas fa-phone"></i> Call</li>
						<li class="number-phone mt-3">12345678099</li>
					</ul>
				</div>
				<div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="#">
							Sepatu Bordir.ID </a>
					</h1>
				</div>
				<div class="col-md-3 top-info-cart text-right mt-lg-4">
					<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">
						<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
							aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav nav-mega mx-auto">
								<li class="nav-item dropdown" >
									<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{$user->username}}<span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
									<a class="dropdown-item" href="{{route('userprofile.show')}}">
										{{ __('Profile') }}
									</a>
									<a class="dropdown-item" href="{{route('userprofile.show')}}">
										{{ __('History') }}
									</a>
									<a class="dropdown-item" href="/logout">
										{{ __('Logout') }}
									</a>
									</ul>
								</li>
								<li class="button">
									<a class="btn chekout" href="{{route('cart.index')}}">
										<button class="top_googles_cart" type="submit" name="submit" value="">
											<i class="fas fa-cart-arrow-down"></i>
											<span id="checkout_items" class="checkout_items">[{{Cart::content()->count()}}]</span>
										</button>
									</a>
								</li>
							</ul>
						</div>
					</nav>>
					<!---->
				</div>
            </div>
            
            <label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						
					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav nav-mega mx-auto">
						<li class="nav-item">
							<a class="nav-link ml-lg-0" href="/home">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.html">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html">Contact</a>
						</li>
					</ul>

				</div>
			</nav>
		</header>
		<!-- //header -->
        
        <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
            <form action="{{url('/uploadbukti')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="container">
                    <div class="inner-sec-shop px-lg-4 px-3">
                        <div class="checkout-right">
                            <h4>Detail your order:
                            <span>({{$detail[0]->idPemesanan}})</span></h4>
                            <input type="hidden" name="idPemesanan" value="{{$detail[0]->idPemesanan}}">
                            <table class="timetable_sub">
                                <thead>
                                <tr>
                                    <th>Produk</th>
                                    <th>Nama Produk</th>
                                    <th>Ukuran</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $total=0;
                                    ?>
                                     @foreach($detail as $cp)
                                    <tr class="rem1">
                                        <td class="invert-image">
                                            <a href="single.html">
                                                <img src="{{asset('vendor/colo/images/product_5.png') }}" alt=" " class="img-responsive">
                                            </a>
                                        </td>
                                        <td class="invert">{{$cp->productName}}</td>
                                        <td class="invert">{{$cp->size}}</td>
                                        <td class="invert">{{$cp->quantity}}</td>
                                        <td class="invert">Rp. {{$cp->totalPrice}}</td> 
                                    </tr>
                                    <?php 
                                        $total=$total+($cp->totalPrice);
                                    ?>
                                    @endforeach
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><strong>Total yang harus dibayar</strong></td>
                                        <td class="invert"><strong>Rp. {{$total}}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col mb-2">
                        <div class="row">
                            <div class="col-sm-12  col-md-6">
                                @if($detail[0]->buktiPembayaran==null)
                                <label for=""> Upload bukti pembayaran</label>
                                <input type="file" name="buktiPembayaran" class="btn btn-block btn-light">
                                @else
                                <label for=""> Bukti pembayaran</label><br>
                                <img style="height:100px; width:100px" src="{{asset($detail[0]->buktiPembayaran)}}" />
                                 @endif
                            </div>
                            <div class="col-sm-12 col-md-6 text-right">
                                @if($detail[0]->buktiPembayaran==null)
                                <label for=""> <br></label>
                                <input class="btn btn-lg btn-block btn-success text-uppercase" type="submit" value="Save">
                                 @endif
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
@endsection