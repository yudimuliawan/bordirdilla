@extends('layouts.main')

@section('pagetitle')
Sepatu Bordir.id| Profile
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
                <div class="inner-sec-shop px-lg-4 px-3">
                    <div class="row">
                        <div class="col-sm-3"><!--left col-->
                            <ul class="list-group-profile">
                                <li class="list-group-item text-center">Profile</li>
                                    <div class="form-group-profile">
                                        <div class="cols-sm-1">
                                            <li class="list-group-item text-right"><span class="pull-left"><strong>Name  :</strong></span>{{session('user')->username}}</li>
                                            <li class="list-group-item text-right"><span class="pull-left"><strong>Email :</strong></span>{{session('user')->email}}</li>
                                        </div>
                                    <div>
                               
                            </ul> 
                        </div><!--/col-3-->
                       
                        <div class="col-md-8">
                            <ul class="list-group-profile">
                                <li class="list-group-item text-center">Edit Profile</li>
                                    <li class="list-group-item text-right">
                                        <form method="post" action="/profile/{{$user->id}}">
                                            <input type="hidden" name="_method" value="put">
                                            <div class="form-group-profile">
                                                <div class="cols-sm-10">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="username" id="name"  placeholder="Enter your Name" value="{{$user->username}}" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-profile">
                                                <div class="cols-sm-10">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email" value="{{$user->email}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-button">
                                                <input class="btn btn-primary btn-lg btn-block login-button" type="submit" name="Update" value="Update Profile">
                                            </div>   
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   
			
        