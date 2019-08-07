<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;

class UserprofileController extends Controller
{
    public function show(Request $request)
    {
    	
        $user = DB::table('users')
	    	->where('id', session('user')->id)
	    	->first();

    		return view('userprofile.index', ['user' => $user]);
    }

    public function edit($id)
    {
    	$user = User::find($id);
    	return view('userprofile.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
    	$u = User::find($id);
    	$u->username = $request->username;
    	$u->email = $request->email;
    	$u->save();
    	return redirect('/profile');
    }
}
