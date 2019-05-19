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
        // $client = new \GuzzleHttp\Client();
        // $response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');
        // echo $response->getBody();

       
        $rs = $this->url;
        echo $rs;
    }

    public function ambil(Request $request){
        echo $request->hewan;

        
    }
}
