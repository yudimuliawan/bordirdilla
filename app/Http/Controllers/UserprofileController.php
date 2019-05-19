<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;

class UserprofileController extends Controller
{
    public function show(Request $request)
    {
    	if($request->session()->has('user'))
    	{
            if(session('user')->type=='user'){
            $orders = DB::table('orders')
                    ->where('namaCustomer',session('user')->username)
                    ->groupBy('idPemesanan')
                    ->orderBy('idPemesanan','desc')
                    ->get();

    		return view('userprofile.index', ['orders' => $orders]);
        }else{
            return redirect('/admin');
        }
    			
    	}
    	else
    	{
    		return redirect('/login');
    	}
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
    	return redirect('/logout');
    }
}
