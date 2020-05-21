<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
       'hash',
       'total',
       'address_id',
       'paid',
       'customer_id',



    ]; 

    public function address()
    {
    	return $this->belongTo('App\address');
    }
}
