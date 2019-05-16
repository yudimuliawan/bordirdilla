
@extends('layouts.productlist')

@section('pagetitle')
Sepatu Bordir.id | Product information
@endsection

@section('content')

<div class="container bootstrap snippet">
    <div class="col-md-12 col-sm-8 content">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                	<li class="active"><a href="{{route('home.index')}}">Home</a></li>
                	<li class="active"><a href="/admin">Profile</a></li>
                  <li><a href="/product">Back to list</a></li>
                  <li class="active">Product details</li>
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
                        <h4><a href="/product/{{$product->productId}}/edit">Edit product</a></h4>
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
                                    <td>
                                    	<label>{{$product->description}}</label>
                                    </td>
                                    <td>
                                    	<label>{{$product->quantity}}</label>
                                    </td>
                                    <td>
                                    	<label>{{$product->category->categoryName}}</label>
                                    </td>
                                	<td>
                                    	<i class="fa fa-pencil"><a href="/product/{{$product->productId}}/edit"> Edit product</a></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
                <a href="/product" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Go back to Product List</a>
            </div>
        </div>
    </div>
</div>

@endsection