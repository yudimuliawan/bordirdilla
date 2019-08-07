@extends('layouts.main')

@section('pagetitle')
Sepatu Bordir.id | Portal
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
					<ul class="cart-inner-info">
						<li class="button-log">
							<a class="btn-open" href="#">
								<span class="fa fa-user-plus" aria-hidden="true"></span>
							</a>
						</li>
						<li class="button">
							<a class="btn chekout" href="#">
								<button class="top_googles_cart" type="submit" name="submit" value="">
									<i class="fas fa-cart-arrow-down"></i>
									<span id="checkout_items" class="checkout_items">[0]</span>
								</button>
							</a>
						</li>
					</ul>
					<!---->
					<div class="overlay-login text-left">
						<button type="button" class="overlay-close1">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<div class="wrap">
							<h5 class="text-center mb-4">Sign Up Now</h5>
							<div class="login p-5 bg-dark mx-auto mw-100">
								<form action="/registration" class="form-horizontal" role="form" method="POST">
									{{csrf_field()}}
									<div class="form-group">
										<label class="mb-2">Username</label>
										<input type="text" class="form-control" name="username" id="name"  placeholder="you" required autofocus>
									</div>
									<div class="form-group">
										<label class="mb-2">Email address</label>
										<input type="email" class="form-control" name="email" id="email" placeholder="you@example.com"  required autofocus>
									</div>
									<div class="form-group">
										<label class="mb-2">Distribution City</label>
										<input type="text" class="form-control" name="city" id="city"  placeholder="your city"  required autofocus>
									</div>
									<div class="form-group">
										<label class="mb-2">Address</label>
										<input type="text" class="form-control" name="address" id="address" placeholder="your address" required autofocus>
									</div>
									<div class="form-group">
										<label class="mb-2">Phone</label>
										<input type="text" class="form-control" name="phone" id="phone" placeholder="+62 (..)" required autofocus>
									</div>
									<div class="form-group">
										<label class="mb-2">Password</label>
										<input type="password" class="form-control" name="password" id="password" placeholder="***" required="">
									</div>
									<div class="form-group">
										<label class="mb-2">Confirm Password</label>
										<input type="password" class="form-control" name="passwordConfirmation"  id="password-confirm" placeholder="***" required="">
									</div>
									<button type="submit"class="btn btn-primary submit mb-4">Sign Up</button>
								</form>
							</div>
							<!---->
						</div>
					</div>
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

		<!-- top Products -->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container">
				<div class="container-login mb-4">
					<form id="login-form" class="login-form" method="post" autocomplete="off">
						{{csrf_field()}}
						<div class="form-group-login">
							<div class="form-destination">
								<label>Username</label>
								<input type="text" name="username" id="txtUsername" placeholder="you" />
							</div>
							<div class="form-date-from form-icon">
								<label>Password</label>
								<input type="password" name="password" placeholder="***" />
							</div>
							<div class="form-submit">
								<input type="submit" name="buttonLogin" value="Sign In" class="submit"/>
							</div>
						</div>
					</form>
					<br/>
                        @component('message.alert')
                             @slot('type')
                            	white
                             @endslot
                            @slot('slot')
                                {{session('message')}}
                            @endslot
                        @endcomponent
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