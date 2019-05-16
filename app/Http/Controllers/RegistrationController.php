<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateUserRequest;

class RegistrationController extends Controller
{
    public function index(Request $request)
    {
    	return view('registration.index');
    }

    public function store(Request $request)
    {
    	if($request->password==$request->passwordConfirmation)
    	{
	    	$params = [
	            'username' => $request->username,
	            'password' => $request->password,
	            'email' =>$request->email,
	            'type' => 'user'
	        ];

	    	DB::table('users')
	    		->insert($params);

	    	return redirect('/login');
    	}
    	else
    	{
    		return redirect('registration.index');
    	}
    }
}
