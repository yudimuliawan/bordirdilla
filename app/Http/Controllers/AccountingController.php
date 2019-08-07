<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;

class AccountingController extends Controller
{
    //
    public $cut = '127.0.0.1:8000/';
    public function index(){
        $rs = DB::table('orders')->select('idPemesanan','jenis','tanggal', 'namaCustomer')
        ->where('status','Menunggu konfirmasi')
        ->groupBy('idPemesanan')
        ->orderBy('idPemesanan','desc')
        ->get();

        $user = DB::table('users')
        ->where('id', session('user')->id)
        ->first();  

        return view('admin.accounting',['orders'=>$rs, 'user'=>$user]);
        // echo 'akunting';
    }

    public function show($id){
        $rs = DB::table('orders')->where('idPemesanan',$id)
        ->get();

        $user = DB::table('users')
        ->where('id', session('user')->id)
        ->first();  

        return view('admin.accountingKonfirmasi',['detail'=>$rs, 'user'=>$user]);
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

        $rs = DB::select(DB::raw("SELECT * FROM tagihan WHERE orderId IN (select idPemesanan from orders where status != 'Menunggu Konfirmasi' and status !='Kirim bukti pembayaran' and jenis='kredit' group by idPemesanan ) 
        and orderId NOT IN (select orderId from tagihan where status='lunas') group by orderId order by idTagihan desc"));

        // $rs = DB::table('tagihan')
        // ->select('orderId',DB::raw('(select tanggal from orders where idPemesanan=tagihan.orderId group by idPemesanan) as tgl'))
        // ->where('status','belum')->groupBy('orderId')->orderBy('tgl','desc')->get();
        return view('admin.accounting.listtagihan',compact('rs'));
        // return response()->json($rs);
    }

    public function tagihanDetail($id){
        $rs = DB::table('tagihan')
        ->select('*',DB::raw('(select username from users where users.id=tagihan.customerId) as nama'))
        ->where('orderId',$id)->orderBy('idtagihan','asc')
        ->get();
        return view('admin.accounting.detailTagihan',compact('rs'));
        // return response()->json($rs);
    }

    public function listLaporan(){
        $client = new Client();
        $res = $client->request('GET',$this->cut.'api/pembelian/laporan')->getBody();
        $data = json_decode($res);
        return view('admin.accounting.listLaporan',compact('data'));
    }

    public function detailLaporan($id){
        $client = new Client();
        $res = $client->request('GET',$this->cut.'api/pembelian/laporan/'.$id)->getBody();
        $data = json_decode($res);
        return view('admin.accounting.detailLaporan',compact('data'))->with('url',$this->cut);
    }

    public function tagih($id){
        
    }

    
}
