<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable=[
        'address',
        'delievery place',
        'phone',
        'postal code',
        'city',
    ];
}
