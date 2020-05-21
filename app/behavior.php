<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class behavior extends Model
{
    protected $fillable=[
     'type_id',
     'description',

    ];
    public function type()
    {
    	return $this->belongsTo(type::class,'type_id');
    }
}
