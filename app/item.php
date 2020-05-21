<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $fillable=[
       'code_no',
       'price',
       'qty',
       'type_id',
       'food_id',
       'acc_id',

    ];
    public function type()
    {
    	return $this->belongsTo(type::class,'type_id');
    }
    public function food()
    {
      return $this->belongsTo(food::class,'food_id');
    }
    public function FunctionName()
    {
       return $this->belongsTo(accessory::class,'acc_id');
    }
}
