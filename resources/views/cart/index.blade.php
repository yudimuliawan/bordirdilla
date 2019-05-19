
@extends('layouts.home')

@section('pagetitle')
Sepatu Bordir.id| Add to Cart
@endsection

@section('content')
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/home">Sepatu Bordir.id</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home.index')}}">Home</a>
                </li>
                @if(session('user'))
                @if(session('user')->type=='admin')
                <li class="nav-item">
                    <a class="nav-link" href="/category">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/product">Product</a>
                </li>
                @endif
                @endif
                <li class="nav-item active">
                    <a class="nav-link" href="/cart">Cart <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
                @if(session('user'))
                    @if(session('user')->type=='admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.index')}}">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Log out</a>
                        </li>
                    @else
                    @endif
                    @if(session('user')->type=='user')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('userprofile.show')}}">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Log out</a>
                        </li>
                    @else
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login.index')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('registration.index')}}">Register</a>
                    </li>
                @endif
            </ul>

            <!-- <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div> -->
                <a class="btn btn-success btn-sm ml-3" href="{{route('cart.index')}}">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge badge-light">{{Cart::content()->count()}}</span>
                </a>
            <!-- </form> -->
        </div>
    </div>
</nav>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">SEPATU BORDIR.ID CART</h1>

     </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
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
                        @foreach($cartProducts as $cp)
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>{{$cp->name}}</td>
                            <td>{{$cp->options['size']}}</td>
                            <td><input class="form-control" type="text" value="{{$cp->qty}}" /></td>
                            <td class="text-right">Rp. {{$cp->subtotal}}</td>
                            <td class="text-right"><a href="{{ url('/delete-cart/'.$cp->rowId)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td>
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
                            <td class="text-right"><strong>Rp. {{$total}}</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a class="btn btn-block btn-light" href="{{route('home.index')}}"> Lanjutkan Pemesanan </a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <a class="btn btn-lg btn-block btn-success text-uppercase" href="{{route('checkout.index')}}">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('footer')

<!-- Footer -->
<footer class="text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-4 col-xl-3">
                <h5>About</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <p class="mb-0">
                    Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
                </p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                <h5>Informations</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><a href="">Link 1</a></li>
                    <li><a href="">Link 2</a></li>
                    <li><a href="">Link 3</a></li>
                    <li><a href="">Link 4</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
                <h5>Others links</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><a href="">Link 1</a></li>
                    <li><a href="">Link 2</a></li>
                    <li><a href="">Link 3</a></li>
                    <li><a href="">Link 4</a></li>
                </ul>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3">
                <h5>Kontak</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><i class="fa fa-home mr-2"></i> Sepatu Bordir.id</li>
                    <li><i class="fa fa-envelope mr-2"></i> email@ub.com</li>
                    <li><i class="fa fa-phone mr-2"></i> +62000000</li>
                </ul>
            </div>
            <div class="col-12 copyright mt-3">
                <p class="float-left">
                    <a href="#">Back to top</a>
                </p>
            </div>
        </div>
    </div>
</footer>
@endsection


@section('styles')
	<style type="text/css">
		.bloc_left_price {
		    color: #c01508;
		    text-align: center;
		    font-weight: bold;
		    font-size: 150%;
		}
		.category_block li:hover {
		    background-color: #007bff;
		}
		.category_block li:hover a {
		    color: #ffffff;
		}
		.category_block li a {
		    color: #343a40;
		}
		.add_to_cart_block .price {
		    color: #c01508;
		    text-align: center;
		    font-weight: bold;
		    font-size: 200%;
		    margin-bottom: 0;
		}
		.add_to_cart_block .price_discounted {
		    color: #343a40;
		    text-align: center;
		    text-decoration: line-through;
		    font-size: 140%;
		}
		.product_rassurance {
		    padding: 10px;
		    margin-top: 15px;
		    background: #ffffff;
		    border: 1px solid #6c757d;
		    color: #6c757d;
		}
		.product_rassurance .list-inline {
		    margin-bottom: 0;
		    text-transform: uppercase;
		    text-align: center;
		}
		.product_rassurance .list-inline li:hover {
		    color: #343a40;
		}
		.reviews_product .fa-star {
		    color: gold;
		}
		.pagination {
		    margin-top: 20px;
		}
		footer {
		    background: #343a40;
		    padding: 40px;
		}
		footer a {
		    color: #f8f9fa!important
		}
	</style>
@endsection