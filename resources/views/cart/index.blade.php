
@extends('layouts.main')

@section('pagetitle')
Sepatu Bordir.id| History
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


            <!--checkout-->
            <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
                <div class="container">
                    <div class="inner-sec-shop px-lg-4 px-3">
                        <div class="checkout-right">
                            <h4>Your shopping cart contains:
                                <span>{{Cart::content()->count()}} Products</span>
                            </h4>
                            <table class="timetable_sub">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Product Name</th>
                                    <th>Size</th>
                                    <th>Price</th>
                                    <th>Remove</th>
                                </tr>
						</thead>
						<tbody>
                            <?php 
                            $total=0;
                            ?>
                             @foreach($cartProducts as $cp)
							<tr class="rem1">
								<td class="invert-image">
									<a href="single.html">
										<img src="{{asset('vendor/colo/images/product_5.png') }}" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value">
												<span>{{$cp->qty}}</span>
											</div>
										</div>
									</div>
								</td>
                                <td class="invert">{{$cp->name}}</td>
                                <td class="invert">{{$cp->options['size']}}</td>
								<td class="invert">Rp. {{$cp->subtotal}}</td>
								<td class="invert">
									<div class="rem">
                                        <a href="{{ url('/delete-cart/'.$cp->rowId)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> 
									</div>

								</td>
                            </tr>
                            <?php 
                                $total=$total+($cp->subtotal);
                            ?>
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong>Total</strong></td>
                                <td class="invert"><strong>Rp. {{$total}}</strong></td>
                                <td></td>
                            </tr>
						</tbody>
					</table>
                </div>
                <div class="checkout-right-basket">
                    <a href="{{route('checkout.index')}}">Make a Payment </a>
                </div>
            <section>
@endsection