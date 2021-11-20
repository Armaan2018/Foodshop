<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Burger;
use App\Models\Order;
use App\Models\Customer;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{
    public function index($id)
    {
    	// $burger = Burger::findOrFail($id);
        $burger = Order::where('id',$id)->first(); 

    	


    	
    	return view('front.checkout',[
    		'burg' => $burger,
    		

    	]);
    }

    public function createCustomer(Request $request,$id)
    {
    



       
      $test_id = $request -> id;


      $request -> validate([
         'name' =>'required',
            'email' =>'required',
            'address' =>'required',
            'phone' =>'required',
            'payment' => 'required'


      ]);
        
        
        $data = Customer::create([

        	'name' => $request -> name,
        	'address' => $request -> address,
        	'email' => $request -> email,
        	'phone' => $request -> phone,
        	'payment' => $request -> payment,
        	



        ]);



        // $data -> burgers() -> attach($burg_id);
        $data -> orders() -> attach($request -> id);
return response() -> json(['success','value added']);

    }


}
