
@extends('layouts.productlist')

@section('pagetitle')
Sepatu Bordir.id | Create New Product
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
                  	<li class="active">Create new product</li>
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
                        <h4>Create new product</h4>
                    </div>
                    <div class="panel-body"> 
                        <div class="table-responsive">
                        	<form method="post" action="/product">
                        		{{csrf_field()}}
                        <table class="table">
                            <thead>
                            <tr>
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
                                    	
                                    	<input class="form-control" type="text" value="{{old('pname')}}" name="pname">
                                    	
                                    </td>
                                    <td>
                                    	
                                        <input class="form-control" type="text" value="{{old('price')}}" name="price">
                                        
                                    </td>
                                    <td>
                                    	
                                    	<textarea name="description" value="{{old('description')}}"></textarea>
                                    </td>
                                    <td>
                                    	
                                    	<input class="form-control" type="text" value="{{old('quantity')}}" name="quantity">
                                    	
                                    </td>
                                    <td>
                                    	
                                    	<select name="cat">
											@foreach($categories as $cat)
												<option value="{{$cat->categoryId}}">{{$cat->categoryName}}</option>
											@endforeach
										</select>
                                    	
                                    </td>
                                    <td>
                                    	
                                    	<strong>Insert an image</strong>
                                    	<label class="fa fa-image"></label>
                                    	<input type="file" name="image" id="fileToUpload">
                                    </td>
                                </tr>
                                <tr>
                                	<td>
                                    	<input type="submit" name="submit" value="Save" class="btn btn-primary">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        @if($errors->any())
							<ul>
								@foreach($errors->all() as $error)
									<li>{{$error}}</li>
								@endforeach
							</ul>
						@endif
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