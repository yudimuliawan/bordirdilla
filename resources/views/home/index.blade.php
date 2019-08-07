@extends('layouts.main')

@section('pagetitle')
Sepatu Bordir.id| Home
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
									<a class="dropdown-item" href="/history">
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
						<li class="nav-item active">
							<a class="nav-link ml-lg-0" href="index.html">Home
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

		<!--/shop-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container-fluid">
				<div class="inner-sec-shop px-lg-4 px-3">
					<div class="row">
						<!-- product left -->
						<div class="side-bar col-lg-3">
							<div class="search-hotel">
								<h3 class="agileits-sear-head">Product Category..</h3>
								<ul class="list-group category_block">
									@foreach($categories as $category)
										<li class="list-group-item"><a href="/home/category/{{$category->categoryId}}">{{$category->categoryName}}</a></li>
									@endforeach
								</ul>
							</div>
						</div>
						<!--/product right-->
						<div class="left-ads-display col-lg-9">
							<div class="wrapper_top_shop">
								<div class="row">
									<!-- /womens -->
									@foreach($products as $product)
									<div class="col-md-3 product-men women_two shop-gd">
										<div class="product-googles-info googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="{{asset('vendor/colo/images/product_5.png') }}" class="img-fluid" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="/home/product/{{$product->productId}}" class="link-product-add-cart">Quick View</a>
														</div>
													</div>
													<span class="product-new-top">Bordir</span>
												</div>
												<div class="item-info-product">
													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="/home/product/{{$product->productId}}">{{$product->productName}}</a>
																</h4>
																<div class="grid-price mt-2">
																	<span class="money ">Rp. {{number_format($product->price, 2, '.', ',')}}</span>
																</div>
															</div>
																<li>
																	<a href="#">
																		<i class="fa fa-star-half-o" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</div>
									@endforeach
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

@endsection
