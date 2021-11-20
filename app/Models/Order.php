<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function burgers(){
    	return $this -> belongsToMany('App\Models\Burger');
    }

       public function customers (){
    	return $this -> belongsToMany('App\Models\Customer')->with('id');
    }
}
