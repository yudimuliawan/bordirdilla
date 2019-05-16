<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
    	if(session('user')->type=='admin'){
	    	$user = DB::table('users')
	    		->where('id', session('user')->id)
	    		->first();

    		return view('admin.index', ['user' => $user]);
    	}else if(session('user')->type=='user')
    	{
    		return redirect('/profile');
    	}else
    	{
    		redirect('home.index');
    	}
    }
}
