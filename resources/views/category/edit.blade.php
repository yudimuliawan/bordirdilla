
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
	                <li><a href="{{route('product.index')}}">Produk</a></li>
	                <li><a href="{{route('category.index')}}">Kategori</a></li>
	                <li class="active">Tambah Kategori</li>
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
                        <h4>Tambah Kategori</h4>
                    </div>
                    <div class="panel-body"> 
                        <div class="table-responsive">
                        	<form method="post" action="/category/{{$category->categoryId}}">
                        		{{csrf_field()}}
							<input type="hidden" name="_method" value="put">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Product Id</th>
                                <th>Product name</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$category->categoryId}}</td>
                                    <td>
                                    	<input class="form-control" type="text" value="{{$category->categoryName}}" name="catname">
                                    </td>
                                </tr>
                                <tr>
                                	<td>
                                    	<input type="submit" name="submit" value="Update" class="btn btn-primary">
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        </form>
                    </div>
                </div>
                </div>
                <a href="{{route('category.index')}}" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Kembali Ke Daftar Kategori</a>
            </div>
        </div>
    </div>
</div>

@endsection