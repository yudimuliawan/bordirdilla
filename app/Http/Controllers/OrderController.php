<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use App\Checkout;
use App\product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->session()->get('user')->id;
        $orders = DB::table('orders')
            ->where('id', $id)
            ->get();
        $user = User::find($id);
        //dd($orders);
        return view('order.index', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $aa = $request->session()->get('product')->productId;
        // dd($aa);

        // $products = DB::table('products')
        //     ->where()
        //     ->get();

        // return view('order.create', ['products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orderId = $id;
        $checkouts = DB::table('checkouts')
            ->where('orderId', $id)
            ->join('products', 'checkouts.productId', '=', 'products.productId')
            ->get();

        // $products = DB::table('products')
        //     ->where('productId', $checkouts productId)
        //     ->get();

        // foreach ($checkouts as $key => $check) { 
        //     dd($check->productName);
        // }
            
        
        
        //dd($product->category->categoryName);
        return view('order.details', ['checkouts' => $checkouts, 'orderId' => $orderId]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
