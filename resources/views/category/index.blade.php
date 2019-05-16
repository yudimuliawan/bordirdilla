



@extends('layouts.productlist')

<!-- @section('styles')
	<style type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	</style>
@endsection -->

@section('pagetitle')
Sepatu Bordir.id | All category
@endsection

@section('content')

<div class="container bootstrap snippet">
    <div class="col-md-12 col-sm-8 content">
    	<div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                	<li class="active"><a href="{{route('home.index')}}">Home</a></li>
                	<li class="active"><a href="/admin">Profile</a></li>
	                <li><a href="{{route('product.index')}}">Produk</a></li>
	                <li><a href="{{route('category.index')}}">Kategori</a></li>
	                <li class="active">Kategori</li>
                </ol>
            </div>
        </div>
	    <div class="row">    
	        <div class="col-md-12">
	            <div class="panel panel-default panel-table">
	              <div class="panel-heading">
	                <div class="row">
	                  <div class="col col-xs-6">
	                  	<h1>
	                  		<a style="text-decoration: none;" href="{{route('admin.index')}}">Profile</a> /
	                  		<a style="text-decoration: none;" href="{{route('home.index')}}">Home</a>
	                  	</h1>
	                  </div>
	                  <div class="col col-xs-6 text-right">
	                  	<a class="btn btn-sm btn-warning" href="{{route('product.create')}}" style="color: white; text-decoration: none;">Tambah Produk Baru</a>
	                    <!-- <button type="button" class="btn btn-sm btn-primary"> --><a class="btn btn-sm btn-primary" href="/category/create" style="color: white; text-decoration: none;">Create New category</a><!-- </button> -->
	                    <div class="container">
							<div class="col-md-5">
							  <form class="navbar-form" role="search" method="post" action="/category/search">
							  	{{csrf_field()}}
							    <div class="input-group add-on">
							      <input class="form-control" placeholder="Search" name="searchText" id="srch-term" type="text">
							      <div class="input-group-btn">
							        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
							      </div>
							    </div>
							  </form>
		                  </div>
		                </div>

	              </div>
	              <div class="panel-body">
	                <table class="table table-striped table-bordered table-list">
	                	<thead>
		                    <tr>
		                        <th><em class="fa fa-cog"> Options</em></th>
		                        <th class="hidden-xs">ID</th>
		                        <th>category name</th>
		                    </tr> 
	                  	</thead>
		                <tbody>
		                    @foreach($categories as $category)
		                          <tr>
		                            <td align="center">
		                              <a class="btn btn-info" href="/category/{{$category->categoryId}}"><em class="fa fa-info"></em></a>
		                              <a class="btn btn-warning" href="/category/{{$category->categoryId}}/edit"><em class="fa fa-pencil"></em></a>
		                              <a class="btn btn-danger" href="/category/{{$category->categoryId}}/delete"><em class="fa fa-trash"></em></a>
		                            </td>
		                            <td class="hidden-xs">{{$category->categoryId}}</td>
		                            <td>{{$category->categoryName}}</td>
		                          </tr>
		                    @endforeach
		                </tbody>
	                </table>
	              </div>
	              <div class="panel-footer">
	                <div class="row">
	                  <div class="col col-xs-4">Number of categories: {{$categories->count()}}
	                  </div>
	                    </ul>
	                  </div>
	                </div>
	              </div>
	            </div>
			</div>
		</div>
	</div>
</div>

@endsection