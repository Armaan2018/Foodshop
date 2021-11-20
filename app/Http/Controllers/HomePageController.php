<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Burger;

class HomePageController extends Controller
{
  public function index()
  {
  	$data = Burger::latest()->get();
  	return view('front.burger_home',compact('data'));
  }
}
