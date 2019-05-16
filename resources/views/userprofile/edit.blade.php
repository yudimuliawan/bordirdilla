
@extends('layouts.user')

@section('pagetitle')
Sepatu Bordir.id | Index
@endsection

@section('content')

<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-10"><h1>Hi, {{session('user')->username}}</h1><!-- </div> -->
        <!-- <div> -->
                        <a style="text-decoration: none;" href="{{route('home.index')}}"><i class="glyphicon glyphicon-home"><strong> HOME</strong></i></a>
                        <br />
                        <br />
                        <a style="text-decoration: none;" href="/logout"><i class="glyphicon glyphicon-log-out"><strong> LOGOUT</strong></i></a>
                    </div>
        <div class="col-sm-2"><a href="{{route('userprofile.show')}}" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://anecca.org/wp-content/uploads/2017/10/profile-blank-female.png"></a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3"><!--left col-->
              
          <ul class="list-group">
            <li class="list-group-item text-muted">Profile</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Name</strong></span> {{session('user')->username}}</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Email</strong></span> <a style="text-decoration: none;" href="mailto: {{session('user')->email}}">{{session('user')->email}}</a></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Password</strong></span> {{session('user')->password}}</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Ultimo accesso</strong></span> 23/07/2016</li>
            
          </ul> 
          <ul class="list-group">
              <li class="list-group-item text-right"><span class="pull-left"><strong>Do you want to change your Information ?</strong></span><a href="/profile/{{session('user')->id}}/edit"><button>Edit</button></a><div class="expandable form-group text-center" style="margin-top:30px; width:100%" data-count="1">
        <!-- <div class="row">
            <input name="name[]" type="text" id="name[]"  placeholder="Allergia">
            <button class="btn add-more" id="add-more" type="button">+</button>
        </div> -->
    </div></li>
           
            
          </ul> 
               
          
        </div><!--/col-3-->
        <div class="col-sm-9">
          
          <ul class="nav nav-tabs" id="myTab">
            <li><a href="" data-toggle="tab">Edit Profile</a></li>
            <li><a href="{{route('userprofile.show')}}" data-toggle="tab">Back to index</a></li>
          </ul>
              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
              <!-- <div class="table-responsive"> -->
                <table class="table table-hover">
                    <fieldset>
                        <!-- <h2>Edit Profile</h2> -->

                        <div class="row">
                            <div class="col-md-8">
                                <form method="post" action="/profile/{{$user->id}}">
                        <input type="hidden" name="_method" value="put">
                        <!-- <table>
                            <tr>
                                <td>USER ID:</td>
                                <td>{{$user->id}}</td>
                            </tr>
                            <tr>
                                <td>USER NAME:</td>
                                <td><input type="text" name="username" value="{{$user->username}}"></td>
                            </tr><tr>
                                <td>USER EMAIL:</td>
                                <td><input type="text" name="email" value="{{$user->email}}"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="Update"></td>
                            </tr>
                        </table> -->
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Your ID</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <i class="glyphicon glyphicon-tag" aria-hidden="true"></i>
                                    <label>{{$user->id}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Your Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="username" id="name"  placeholder="Enter your Name" value="{{$user->username}}" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Your Email</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email" value="{{$user->email}}"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <input class="btn btn-primary btn-lg btn-block login-button" type="submit" name="Update" value="Update">
                        </div>
                    </form>
                            </div>
                        </div>
                        
                    </fieldset>
                </table>
              
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                               </hr>
@endsection