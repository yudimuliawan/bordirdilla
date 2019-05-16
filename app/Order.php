<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //protected $table = 'products';
    public $primaryKey = 'orderId';
    //public $incrementing = false;
    public $timestamps = false;
    //const CREATED_AT = 'creation_date';
    //const UPDATED_AT = 'last_update';

    public function user()
    {
    	return $this->belongsTo('App\user', 'id');
    }

    public function checkouts()
    {
    	return $this->hasMany('App\Checkout', 'orderId');
    }
}
