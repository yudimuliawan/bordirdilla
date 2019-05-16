
@extends('layouts.productlist')

@section('pagetitle')
Sepatu Bordir.id | Update product information
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
                  	<li class="active">Update product</li>
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
                        <h4>Update product</h4>
                    </div>
                    <div class="panel-body"> 
                        <div class="table-responsive">
                        	<form method="post" action="/product/{{$product->productId}}">
                        		{{csrf_field()}}
							<input type="hidden" name="_method" value="put">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Product Id</th>
                                <th>Product name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Qty</th>
                                <th>Catagory Name</th>                                
                                <th>Picture</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                    	<hr />
                                    	<input class="form-control" type="text" value="{{$product->productId}}" name="productId" readonly>
                                    	<hr />
                                    </td>
                                    <td>
                                    	<hr />
                                    	<input class="form-control" type="text" value="{{$product->productName}}" name="pname">
                                    	<hr />
                                    </td>
                                    <td>
                                    	<hr />
                                        <input class="form-control" type="text" value="{{$product->price}}" name="price">
                                        <hr />
                                    </td>
                                    <td>
                                    	<hr />
                                    	<textarea name="description">{{$product->description}}</textarea>
                                    	<!-- <input class="form-control" type="text" value="{{$product->description}}" name="description"> -->
                                    </td>
                                    <td>
                                    	<hr />
                                    	<input class="form-control" type="text" value="{{$product->quantity}}" name="quantity">
                                    	<hr />
                                    </td>
                                    <td>
                                    	<hr />
                                    	<select name="cat">
											@foreach($categories as $cat)
												<option value="{{$cat->categoryId}}">{{$cat->categoryName}}</option>
											@endforeach
										</select>
                                    	<hr />
                                    </td>
                                    <td>
                                    	<hr />
                                    	<img src="https://static.acer.com/up/Resource/Acer/Home/Product_Highlights/20180112/swift_5.png" height="20%" width="20%">
                                    	<strong>Insert an image</strong>
                                    	<label class="fa fa-image"></label>
                                    	<input type="file" name="image" id="fileToUpload">
                                    </td>
                                </tr>
                                <tr>
                                	<td>
                                    	<input type="submit" name="submit" value="Update" class="btn btn-primary">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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