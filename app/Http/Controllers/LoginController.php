<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        if(session('user'))
        {
            if(session('user')->type=='admin')
            {
                return redirect()->route('admin.index');
            }else if(session('user')->type=='user'){
                return redirect()->route('userprofile.show');
            }else if(session('user')->type=='accounting'){
                return redirect()->route('accounting.index');
            }else if(session('user')->type=='marketing'){
                return redirect()->route('marketing.index');
            }
        }else{
            return view('login.index');
        }
    }

    public function verify(Request $request)
    {
        //$sql = "SELECT * FROM users WHERE username='$request->username' AND password='$request->password'";
        //$result = DB::select($sql);

        $user = DB::table('users')
            ->where('username', $request->username)
            ->where('password', $request->password)
            ->first();
        if($user!=null){

            if($user->type=='user')
        	{
        		$request->session()->put('user', $user);
        		// session('user', $user);
                return redirect()->route('home.index');
        	}
            if($user->type=='admin')
            {
                $request->session()->put('user', $user);
                $request->session()->put('admin', $user);
                // session('user', $user);
                return redirect()->route('admin.index');
            }
            if($user->type=='accounting')
            {
                $request->session()->put('user', $user);
                $request->session()->put('admin', $user);
                // session('user', $user);
                return redirect()->route('accounting.index');
            }
            if($user->type=='marketing')
            {
                $request->session()->put('user', $user);
                $request->session()->put('admin', $user);
                // session('user', $user);
                return redirect()->route('marketing.index');
            }
        }
    	else
    	{
            $request->session()->flash('message', 'Invalid username or password');
            //$request->session()->forget('message');
            //$request->session()->flush();
            return redirect()->back();
    	}
    }
}
