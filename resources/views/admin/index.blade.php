
@extends('layouts.productlist')

@section('pagetitle')
Sepatu Bordir.id| Profile
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
                </ol>
            </div>
	      <div class="col-md-12">
	            <div class="panel panel-default panel-table">
	              <div class="panel-heading">
	                <div class="row">
	                  <div class="col col-xs-6">
	           <!-- <A href="edit.html" >Edit Profile</A> -->

	        <A href="/logout" >Logout</A>
	       <br>
	<p class=" text-info">{{Carbon\Carbon::now()->toDateTimeString()}}</p>
	      </div>
	   
	   
	          <div class="panel panel-info">
	            <div class="panel-heading">
	              <h3 class="panel-title">Hello, {{$user->username}}</h3>
	            </div>
	            <div class="panel-body">
	              <div class="row">
	                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://bootdey.com/img/Content/user_3.jpg" class="img-circle img-responsive"> </div>
	                
	                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
	                  <dl>
	                    <dt>DEPARTMENT:</dt>
	                    <dd>Administrator</dd>
	                    <dt>HIRE DATE</dt>
	                    <dd>11/12/2013</dd>
	                    <dt>DATE OF BIRTH</dt>
	                       <dd>11/12/2013</dd>
	                    <dt>GENDER</dt>
	                    <dd>Male</dd>
	                  </dl>
	                </div>-->
	                <div class="col-md-5 col-lg-5 "> 
	                  <table class="table table-user-information">
	                    <tbody>
	                      <tr>
	                        <td>Username:</td>
	                        <td>{{$user->username}}</td>
	                      </tr>
	                      <tr>
	                        <td>Date of Birth</td>
	                        <td>Dummy</td>
	                      </tr>
	                      <tr>
	                        <td>Gender</td>
	                        <td>Dummy</td>
	                      </tr>
	                      <tr>
	                        <td>Password</td>
	                        <td>{{$user->password}}</td>
	                      </tr>
	                      <tr>
	                        <td>Email</td>
	                        <td><a href="mailto:<%= adminInfo[i].email %>">{{$user->email}}</a></td>
	                      </tr>
	                      <tr>
	                        <td>Phone Number</td>
	                        <td>Dummy</td>    
	                      </tr>
	                     
	                    </tbody>
	                  </table>
	                  <a href="/product" class="btn btn-primary btn-block">View Products</a>
	                </div>
	              </div>
	            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
          </div>
        </div>
      </div>
</div>
</div>
</div>
</div>
</div>

@endsection