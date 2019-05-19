<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AccountingController extends Controller
{
    //
    public function index(){
        $rs = DB::table('orders')->select('idPemesanan','jenis','tanggal')
        ->where('status','Menunggu konfirmasi')
        ->groupBy('idPemesanan')
        ->orderBy('idPemesanan','desc')
        ->get();
        return view('admin.accounting',['orders'=>$rs]);
        // echo 'akunting';
    }

    public function show($id){
        $rs = DB::table('orders')->where('idPemesanan',$id)
        
        ->get();
        return view('admin.accountingKonfirmasi',['detail'=>$rs]);
    }

    public function confirm(Request $req){
        $id= $req->idPemesanan;
        $data = [
            'status'=>'Terkonfirmasi'
        ];
        DB::table('orders')->where('idPemesanan',$id)->update($data);
        return redirect('accounting/konfirmasi');

    }

    public function listTagihan(){
        $rs = DB::table('orders')->select('idPemesanan','jenis','tanggal')
        ->where('status','Sudah diterima')
        ->where('jenis','kredit')
        ->groupBy('idPemesanan')
        ->orderBy('idPemesanan','desc')
        ->get();
        return view('admin.accounting.listtagihan',['orders'=>$rs]);
    }

    public function tagihanDetail($id){
        $rs = DB::table('orders')->where('idPemesanan',$id)
        ->get();
        return view('admin.accounting.detailTagihan',['detail'=>$rs]);
    }
}
