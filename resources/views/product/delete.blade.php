
@extends('layouts.productlist')

@section('pagetitle')
Sepatu Bordir.id | Confirmation Page
@endsection

@section('content')

<div class="container bootstrap snippet">
    <div class="col-md-12 col-sm-8 content">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                	<li class="active"><a href="{{route('home.index')}}">Home</a></li>
                	<li class="active"><a href="{{route('admin.index')}}">Profile</a></li>
	                <li><a href="{{route('product.index')}}">Products</a></li>
	                <li><a href="{{route('category.index')}}">Categories</a></li>
                  	<li class="active">Delete product</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info panel-shadow">
                    <div class="panel-heading">
                        <h3>
                            <img class="img-circle img-thumbnail" src="https://bootdey.com/img/Content/user_3.jpg">
                            Admin
                        </h3>
                        <h4>Delete product</h4>
                    </div>
                    <div class="panel-body"> 
                        <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                            	<th>Picture</th>
                                <th>Product Id</th>
                                <th>Product name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Qty</th>
                                <th>Catagory Name</th>                                
                                <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                	<td height="10%" width="10%">
                                    	<img src="https://static.acer.com/up/Resource/Acer/Home/Product_Highlights/20180112/swift_5.png" height="100%" width="100%">
                                    </td>
                                    <td>
                                    	<label>{{$product->productId}}</label>
                                    </td>
                                    <td>
                                    	<label>{{$product->productName}}</label>
                                    </td>
                                    <td>
                                        <label>{{$product->price}}</label>
                                    </td>
                                    <td height="10%" width="20%">
                                    	<label>{{$product->description}}</label>
                                    </td>
                                    <td>
                                    	<label>{{$product->quantity}}</label>
                                    </td>
                                    <td>
                                    	<label>{{$product->category->categoryName}}</label>
                                    </td>
                                	<td>
                                    	<i class="fa fa-pencil" style="color: red;"><a href="/product/{{$product->productId}}/edit"> Edit product</a></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h3>Are you sure you want to delete this product?</h3>
							<form method="post" action="/product/{{$product->productId}}">
								{{csrf_field()}}
								<input type="hidden" name="_method" value="delete">
								<!--
								<input type="hidden" name="pid" value="{{$product->productId}}">
								-->
								<input class="btn btn-danger" type="submit" value="Confirm">
							</form>
                    </div>
                </div>
                </div>
                <a href="/product" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Go back to Product List</a>
            </div>
        </div>
    </div>
</div>

@endsection