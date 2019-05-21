<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Http\apicon;

class LogoutController extends Controller
{
    public function index(Request $request)
    {
    	$request->session()->flush();
    	return redirect('/login');
    }

    public function testapi(){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', config('app.cut_url').'/api/test/coba')->getBody();
        echo $response;

        


       
    }

    public function ambil(Request $request){
        echo $request->hewan;

        
    }
}
