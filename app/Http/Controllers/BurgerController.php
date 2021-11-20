<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Burger;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Validator;

class BurgerController extends Controller
{


    /************************
    *   Burger Page Show     *
    ************************/
    public function showPage()
    {
        $rest = Restaurant::all();
    	return view('admin.burger',compact('rest'));
    }


    /************************
    *   Burger Create       *
    ************************/	
    public function burgerCreate(Request $request){

      /*validation*/
    	$request -> validate([

    		'name' =>'required|unique:burgers',
    		'price' =>'required|numeric',
    		'image' =>'required',

    	]);

    	/*image*/
         
          $unique_file_name = '';

        if ($request -> hasFile('image')) {

            $img = $request -> file('image');

            $unique_file_name = md5(time().rand()).'.'. $img -> getClientOriginalExtension();

            $img -> move(public_path('media/burger/'), $unique_file_name);
        }

    $burg_data =	Burger::create([
             'name' => $request -> name,
             'price' => $request -> price,
             'image' => $unique_file_name
    	]);


    $burg_data -> restaurants() -> attach($request -> restaurant);

    	return response() -> json(['success','value added']);
    	
    }


    /************************
    *   All Burgers         *
    ************************/

    public function burgerShow()
    	{
    		$data = Burger::latest()->get();
    		$i = 1;

    		foreach ($data as $element) { ?>
             <tr>
                                               
                                                <td><strong><?php echo $i; $i++; ?></strong></td>
                                                <td><div class="d-flex align-items-center"><img src="media/burger/<?php echo $element-> image ?>" class="rounded-lg mr-2" width="24" alt=""> <span class="w-space-no"><?php echo $element -> name; ?></span></div></td>
                                                <td><?php echo $element -> price; ?>.00 TK</td>
                                                <td>Hot Deals</td>
                                                <td><div class="d-flex align-items-center"><i class="fa fa-circle text-success mr-1"></i> Available</div></td>
                                                <td>Active Status</td>
                                                <td>
													<div class="d-flex">

														<a href="editmodal" id="burg_id"burger_edit_attr="<?php echo $element -> id; ?>" data-toggle="modal" data-target="#editmodal" class="btn btn-primary shadow btn-xs sharp mr-1" ><i class="fa fa-pencil"></i></a>




														<a href="#" id="burg_delete_id"
														burger_delete_attr="<?php echo $element -> id; ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>


                                            </tr>

    		
    		<?php }
    	}


    /************************
       *    Edit Burgers   *
    ************************/	

   public function burgerEdit($id)
   {

   	  $edit_data = Burger::findOrFail($id);


   	  return [


        'id'    => $edit_data -> id,
   	  	'name'  => $edit_data -> name,
   	  	'price' => $edit_data -> price,
   	  	'image' => $edit_data -> image




   	  ];

   	

   }



    /************************
       *    Update Burgers   *
    ************************/	
    
    public function burgerUpdate(Request $request)
    {

       

 

        if ($request -> hasFile('image')) {

            $img = $request -> file('image');

            $unique_file_name = md5(time().rand()).'.'. $img -> getClientOriginalExtension();

            $img -> move(public_path('media/burger/'), $unique_file_name);
        }else{

             unset($img);
        }

    	$get_id = $request -> id;

    	$data_update = Burger::findOrFail($get_id);

    

    	$data_update -> name = $request -> name;
    	$data_update -> price = $request -> price;
        $data_update -> image = $unique_file_name;
    	$data_update -> update();
    }

     /************************
       *    Update Delete   *
    ************************/

    public function burgerDelete($id)
    	{
    		$dat_id = Burger::findOrFail($id);

    		$dat_id -> delete();
    	}


      



     
      
         

}
