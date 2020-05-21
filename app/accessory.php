<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accessory extends Model
{
    protected $fillable=[
     'type_id',
     'name',
     'photo',
     'price',
     'no_accessories',
    ];
    public function type()
    {
    	return $this->belongsTo('App\type');
    }
    
}
