<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Burger extends Model
{
    use HasFactory;

    protected $guarded = [];

     public function orders(){
    	return $this -> belongsToMany('App\Models\Order');
    }

    public function customers(){
    	return $this -> belongsToMany('App\Models\Customer');
    }

       public function restaurants()
      {
      	return $this -> belongsToMany('App\Models\Restaurant');
      }
}
