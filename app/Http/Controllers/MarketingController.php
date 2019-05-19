<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarketingController extends Controller
{
    //
    public function index()
    {

        $rs = DB::table('kotadistribusi')->get();
        return view('admin.marketing.index',['city'=>$rs]);
    }

    public function showByCity($city)
    {

        $kota = $city;
        $rs = DB::table('orders')
            ->where('status','Terkonfirmasi')
            ->whereIn('namaCustomer', function ($query) use($city) {
                $query->select('customerName')
                    ->from('customer')
                    ->where('kotaDistribusi', $city);
            })
            ->groupBy('idPemesanan')
            ->orderBy('idPemesanan','desc')
            ->get();

            return view('admin.marketing.orderPerKota',['orders'=>$rs,'kota'=>$city]);

    }

    public function detailOrder($city,$id){
        $rs = DB::table('orders')->where('idPemesanan',$id)
        ->get();
        return view('admin.marketing.detailOrder',['detail'=>$rs,'city'=>$city]);
    }

    public function sendOrder(Request $req){
        $id = $req->idPemesanan;
        DB::table('orders')->where('idPemesanan',$id)->update(['status'=>'Proses pembuatan']);
        return redirect("/marketing/pengadaan/$req->kota");
      
    }

    public function listStatusPemesanan(){
        // $rs = DB::table('orders')->select('tanggal', function($query) {
        //     $query->select('kotaDistribusi')->from('customer')->whereRaw('customer.customerName=orders.namaCustomer');
        // })
        // ->groupBy('idPemesanan')
        // ->orderBy('idPemesanan','desc')
        // ->get();
        
        $rs= DB::table('orders')->select('tanggal', DB::raw("(select kotaDistribusi from customer where customerName=namaCustomer) as Kota "),'status')
        ->groupBy('idPemesanan')
        ->orderBy('idPemesanan','desc')
        ->get();

        return view('admin.marketing.statusPemesanan',['orders'=>$rs]);
        
    }
}
