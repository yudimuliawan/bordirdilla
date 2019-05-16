<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //protected $table = 'products';
    public $primaryKey = 'id';
    //public $incrementing = false;
    public $timestamps = false;
    //const CREATED_AT = 'creation_date';
    //const UPDATED_AT = 'last_update';

    public function orders()
    {
    	return $this->hasMany('App\order', 'id');
    }
}
