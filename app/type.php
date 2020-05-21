<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    protected $fillable = [
        'name',
        'photo',
        'animal_id',
       ];
       public function animal()
    {
    	# code...
    	return $this->belongsTo('App\animal');
    }
    public function item()
    {
        return $this->hasOne('App\item');
    }
    public function behavior()
    {
        return $this->hasOne('App\behavior');
    }
   public function presentPrice()
   {
       return money_format('$%i',$this->price / 100);
   }
}
