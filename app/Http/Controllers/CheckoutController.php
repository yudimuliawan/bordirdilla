<?php

namespace App\Http\Controllers;

use Cart;
use App\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartProducts = Cart::Content();
        return view('checkout.index', ['cartProducts' => $cartProducts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Cart::Content()->count()!=null){
        $orderId = DB::table('orders')
            ->insertGetId(['id'=> session('user')->id]);

        $cartProducts = Cart::content();

        foreach($cartProducts as $cp)
        {
            $params=[
                'productId'=>$cp->id,
                // 'productname'=>$cp->name,
                'orderId'=>$orderId,
                // 'username'=>$request->name,
                'qn'=>$cp->qty
                // 'price'=>$cp->subtotal,
                // 'phonenumber'=>$request->phone_number,
                // 'address'=>$request->address,
                // 'zipcode'=>$request->zip_code
            ];
            DB::table('checkouts')
                ->insert($params);

            Cart::remove($cp->rowId);
        }

        return view('checkout.thanks');
    }else{
        $cartProducts = Cart::content();
        return view('cart.index', ['cartProducts'=>$cartProducts]);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout $checkout)
    {
        //
    }
}
