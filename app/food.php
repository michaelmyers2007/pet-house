<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    protected $fillable=[
    'type_id',
    'name',
    'photo',
    'price',
    'qty',
    ];
    public function type()
    {
    	return $this->belongsTo('App\type');
    }
    public function item()
    {
        return $this->hasOne('App\item');
    }
}
