<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Cart;

class CartController extends Controller
{
    public function index()
    {
        $cartProducts=Cart::Content();
        return view('cart.index',['cartProducts'=> $cartProducts]);
    }

    public function add(Request $request)
    {
        $productId=$request->proid;
         //return $request->quantity;
        
        $productDetails=DB::table('products')
            ->where('productId',$productId)
            ->first();
        Cart::Add([
            'id'=>$productId,
            'name'=>$productDetails->productName,
            'price'=>$productDetails->price,
            'qty'=>$request->quantity
        ]);

      // return Cart::Content();
         return redirect('/cart');
    }


     public function remove($rowId)
    {
       Cart::remove($rowId);
      // return Cart::Content();
         return redirect('/cart');
    }
}
