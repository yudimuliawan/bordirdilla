
@extends('layouts.productlist')

@section('pagetitle')
Sepatu Bordir.id | category information
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
	                <li class="active">Category details</li>
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
                        <h4><a href="/category/{{$category->categoryId}}/edit">Edit category</a></h4>
                    </div>
                    <div class="panel-body"> 
                        <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>category Id</th>
                                <th>category name</th>
                                <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                    	<label>{{$category->categoryId}}</label>
                                    </td>
                                    <td>
                                    	<label>{{$category->categoryName}}</label>
                                    </td>
                                    <td>
                                    	<i class="fa fa-pencil" style="color: red;"><a href="/category/{{$category->categoryId}}/edit"> Edit category</a></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
                <a href="/category" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Go back to category List</a>
            </div>
        </div>
    </div>
</div>

@endsection