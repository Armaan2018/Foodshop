<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Burger;
use App\Models\Order;

class OrderDetailController extends Controller
{
    public function showSelected($id)
    {
    	$get_data = Burger::findOrFail($id);
    	return view('front.detail',[
    		'data' => $get_data,
    		'id'   => $get_data -> id,
    		'price'   => $get_data -> price,


    	]);
    }



    public function orderCreate(Request $request ,$id){

    	// $first_burg = Burger::where('id',$id)->first();
        $first_burg = Burger::where('id',$id)->first();
        $restaurant = $first_burg -> restaurants() -> first();
    	$burg_size  = $request -> size;
    	$price_burg = $first_burg -> price;
    	$id         = $first_burg -> id;
    	$burgername = $first_burg -> name;
    	$burgerimage = $first_burg -> image;
    	$ordertype  = $request -> ordertype;

        if ($burg_size == 'LG') {
        	$price_burg_modify = $price_burg + ($price_burg * 25/100); 
        }elseif($burg_size == 'XL'){
            $price_burg_modify = $price_burg + ($price_burg * 50/100); 
        }elseif($burg_size == 'SM'){
        	$price_burg_modify = $price_burg; 
        }

        //snack section
        $selected_snacks = $request -> snacks;

        if ($selected_snacks == 'French Fry') {
         	$snacks_bill = '50';
         } elseif ($selected_snacks == 'Wadges') {
         	$snacks_bill = '75';
         } elseif ($selected_snacks == 'Wounthon') {
         	$snacks_bill = '100';
         }elseif ($selected_snacks == 'Nuggets') {
         	$snacks_bill = '150';
         }else{
         	$snacks_bill = '0';
         }

         $snacks_quantity = $request -> snacksno;

         $snacks_final_bill = $snacks_bill * $snacks_quantity;
           
         //drinks info

         $drinktype = $request -> drinkselect;
         $drinksize = $request -> drinksize;
         $drinkquan = $request -> drinkquan;

        
         //selecting logic
          $drinkprice = 0;
         if ($drinktype == 'pepsi' AND $drinksize == '250ml') {
         	$drinkprice = '15';
         }elseif ($drinktype == 'pepsi' AND $drinksize == '400ml') {
         	$drinkprice = '25';
         }elseif ($drinktype == 'pepsi' AND $drinksize == '600ml') {
         	$drinkprice = '35';
         } 

         if ($drinktype == 'cocacola' AND $drinksize == '250ml') {
         	$drinkprice = '20';
         }elseif ($drinktype == 'cocacola' AND $drinksize == '400ml') {
         	$drinkprice = '30';
         }elseif ($drinktype == 'cocacola' AND $drinksize == '600ml') {
         	$drinkprice = '40';
         } 

         if ($drinktype == 'mirinda' AND $drinksize == '250ml') {
         	$drinkprice = '20';
         }elseif ($drinktype == 'mirinda' AND $drinksize == '400ml') {
         	$drinkprice = '30';
         }elseif ($drinktype == 'mirinda' AND $drinksize == '600ml') {
         	$drinkprice = '40';
         }

         //total drink price
         $totalpricedrink = $drinkprice * $drinkquan;







  
    	
    	$quan_burg = $request -> quantity;
    	$burgtotal = $price_burg_modify * $quan_burg; 
    	$total = ($price_burg_modify * $quan_burg) + $snacks_final_bill + $totalpricedrink;


    	$burger = [

            'burgername'   => $burgername,
            'image'        =>  $burgerimage,
    		'burgerprice'  => $price_burg_modify,
    		'burgquantity' => $quan_burg,
    		'burgsize'     => $burg_size,
    		'total'        => $burgtotal




    	];



    	$snacks = [

    		'snack_name'      => $selected_snacks,
    		'snack_bill'      => $snacks_bill,
    		'snack_quantity'  => $snacks_quantity,
    		'snacks_bill'     => $snacks_final_bill



    	];


    	$drinks = [

    		'drinkname' => $drinktype,
    		'drinkprice' => $drinkprice,
    		'drinksize' => $drinksize,
    		'drinkquan' => $drinkquan,
    	   'totaldrink' =>  $totalpricedrink




    	];
        
        

      
    




       $data_burg =	Order::create([

           
    		'quantity'  =>  $quan_burg,
    		'burgtotal' =>  $burgtotal,
    		'total'     =>  $total,
    		'burger'    =>  json_encode($burger),
    		'snacks'    =>  json_encode($snacks),
    		'drinks'    =>  json_encode($drinks),
    		'ordertype' =>  $ordertype,
            'restaurant' => $restaurant
    		






    	]);

        $data_burg -> burgers() -> attach($request -> id);


        $data_id = $data_burg -> id;


       return redirect()-> route('check.burger.customer',$data_id); 





    }


    //test ajax system


 
}
