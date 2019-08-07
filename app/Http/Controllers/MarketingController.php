<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class MarketingController extends Controller
{
    //
    public function index()
    {

        $rs = DB::table('kotadistribusi')
        ->select('*',DB::raw("(select COUNT(DISTINCT idPemesanan) from orders where namaCustomer in (select customerName from customer where kotaDistribusi = kotadistribusi.namaKota) and status = 'Terkonfirmasi') as counter"))
        ->get();

        $user = DB::table('users')
	    	->where('id', session('user')->id)
            ->first();

        return view('admin.marketing.index', ['city' => $rs, 'user'=>$user]);
        // return response()->json($rs);
    }

    public function showByCity($city)
    {

        $kota = $city;
        $rs = DB::table('orders')
            ->where('status', 'Terkonfirmasi')
            ->whereIn('namaCustomer', function ($query) use ($city) {
                $query->select('customerName')
                    ->from('customer')
                    ->where('kotaDistribusi', $city);
            })
            ->groupBy('idPemesanan')
            ->orderBy('idPemesanan', 'desc')
            ->get();

        $user = DB::table('users')
	    	->where('id', session('user')->id)
            ->first();

        return view('admin.marketing.orderPerKota', ['orders' => $rs, 'kota' => $city, 'user'=>$user]);

    }

    public function detailOrder($city, $id)
    {
        $rs = DB::table('orders')->where('idPemesanan', $id)
            ->get();

        $user = DB::table('users')
	    	->where('id', session('user')->id)
            ->first();  

        return view('admin.marketing.detailOrder', ['detail' => $rs, 'city' => $city, 'user'=>$user]);
    }

    public function sendOrder(Request $req)
    {
        $id = $req->idPemesanan;
        DB::table('orders')->where('idPemesanan', $id)->update(['status' => 'Menunggu di produksi']);
        return redirect("/marketing/pengadaan/$req->kota");

    }

    public function listStatusPemesanan()
    {
        $rs = DB::table('orders')->select('tanggal', DB::raw("(select kotaDistribusi from customer where customerName=namaCustomer) as Kota "), 'status', 'idPemesanan', 'namaCustomer')
            ->groupBy('idPemesanan')
            ->orderBy('idPemesanan', 'desc')
            ->get();

        $user = DB::table('users')
	    	->where('id', session('user')->id)
            ->first();  

        return view('admin.marketing.statusPemesanan', ['orders' => $rs, 'user'=>$user]);

    }

    public function listPengiriman()
    {
        $rs = DB::table('orders')->select('idPemesanan', 'tanggal', DB::raw("(select kotaDistribusi from customer where customerName=namaCustomer) as Kota "), 'status')
            ->where('status', 'Proses pengiriman')
            ->groupBy('idPemesanan')
            ->orderBy('idPemesanan', 'desc')
            ->get();
        
        $user = DB::table('users')
	    	->where('id', session('user')->id)
            ->first();  

        return view('admin.marketing.pengiriman', ['orders' => $rs, 'user'=>$user]);
    }

    public function detailPengiriman($id)
    {
        $rs = DB::table('orders')->select('idPemesanan', 'namaCustomer', 'tanggal', 'productName', 'size', 'quantity', 'totalPrice', 'promo', 'jenis', 'buktiPembayaran',
            DB::raw("(select kotaDistribusi from customer where customerName=namaCustomer) as Kota "),
            DB::raw("(select address from customer where customerName=namaCustomer) as Alamat "))
            ->where('idPemesanan', $id)
            ->get();

        $user = DB::table('users')
	    	->where('id', session('user')->id)
            ->first();  
        // return response()->json($rs);
        return view('admin.marketing.detailPengiriman', ['detail' => $rs, 'user'=>$user]);
    }

    public function kirimPengiriman(Request $req)
    {
        $path = $req->file('buktiPengiriman')->store('public/image/bukti/pengiriman');
        $path = str_replace('public','storage',$path);
        $data = [
            'idPemesanan' => $req['idPemesanan'],
            'address' => $req['alamat'],
            'ongkirPengiriman' => $req['ongkir'],
            'buktiPengiriman' => $path,

        ];

        DB::table('pengiriman')->insert($data);
        DB::table('orders')->where('idPemesanan',$req['idPemesanan'])->update(['status'=>'Dalam pengiriman']);
        return redirect('marketing/pengiriman');
        // echo json_encode($data);
    }

}
