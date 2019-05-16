<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    //protected $table = 'products';
    public $primaryKey = 'checkoutId';
    //public $incrementing = false;
    public $timestamps = false;
    //const CREATED_AT = 'creation_date';
    //const UPDATED_AT = 'last_update';

    public function order()
    {
    	return $this->belongsTo('App\order', 'orderId');
    }

    public function product()
    {
    	return $this->belongsTo('App\product', 'productId');
    }
}
