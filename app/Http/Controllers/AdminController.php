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

	public function customer(){
        $rs = DB::table('customer')
		->where('terkonfirmasi','belum')->get();
		
		$user = DB::table('users')
	    	->where('id', session('user')->id)
			->first(); 
			
        return view('admin.outside.index',compact('rs'), ['user'=>$user]);
   
    }
    public function detail($id){
        $rs = DB::table('customer')
		->where('customerId',$id)->first();
		
		$user = DB::table('users')
	    	->where('id', session('user')->id)
			->first(); 

        return view('admin.outside.detail',compact('rs'), ['user'=>$user]);
    }

    public function konfirmasi(Request $req){
        $id = $req->customerId;
        DB::table('customer')->where('customerId',$id)->update(['terkonfirmasi'=>'sudah']);
        return redirect()->route('outside.customer')->with('msg','Konfirmasi Berhasil');
    }
	
}
