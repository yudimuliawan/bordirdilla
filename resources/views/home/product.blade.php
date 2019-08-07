@extends('layouts.main')

@section('pagetitle')
Product | Sepatu Bordir.id
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
			<div class="container">
                <h3 class="tittle-w3layouts text-center my-lg-4 my-4">Detail Product</h3>
				    <div class="inner-sec-shop pt-lg-4 pt-3">
					    <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="card bg-light mb-3">
                                    <div class="card-body">
                                        <a href="" data-toggle="modal" data-target="#productModal">
                                            <img class="img-fluid"
                                            src="{{asset('vendor/colo/images/product_5.png') }}" />
                                            <p class="text-center">{{$product->productName}}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Add to cart -->
                            <div class="col-12 col-lg-6 add_to_cart_block">
                                <div class="card bg-light mb-3">
                                    <div class="card-body">
                                        <p class="price">Rp. {{$product->price}}</p>
                                        <form method="post" action="/cart">
                                        <div class="card border-light mb-3">
                                            <div class="card-header bg-primary text-white text-uppercase"><i
                                                class="fa fa-align-justify"></i> Description</div>
                                            <div class="card-body">
                                                <p class="card-text">
                                                {{$product->description}}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah :</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus" data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                </div>
                                                <input type="hidden" id="proid" value="{{$product->productId}}" name="proid">
                                                <input type="text" class="form-control" id="quantity" name="quantity" min="1" max="100" value="1" readonly>
                                                <div class="input-group-append">
                                                    <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Ukuran :</label>
                                            <select name="ukuran" class="form-control" id="exampleFormControlSelect1">
                                                <?php for($x=36;$x<=43;$x++) { ?>
                                                <option>{{$x}}</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-success btn-lg btn-block text-uppercase">
                                            <i class="fa fa-shopping-cart"></i> Add To Cart
                                        </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section> 
        
        <!-- top Products -->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container">
				<div class="address row">
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-map"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Address</h6>
								<p> California, USA

								</p>
							</div>
						</div>

					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-envelope"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Email</h6>
								<p>Email :
									<a href="mailto:example@email.com"> mail@example.com</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="fas fa-mobile-alt"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Phone</h6>
								<p>+1 234 567 8901</p>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section>
</div>		
@endsection

