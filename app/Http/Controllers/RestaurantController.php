<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function showRestaurant()
    {
    	return view('admin.restaurant');
    }

      /************************
    *   Burger Create       *
    ************************/	
    public function createRestaurant(Request $request){

      /*validation*/
    	// $request -> validate([

    	// 	'name' =>'required|unique:burgers',
    	// 	'price' =>'required|numeric',
    	// 	'image' =>'required',

    	// ]);

    	/*image*/
         
          $unique_file_name = '';

        if ($request -> hasFile('restimg')) {

            $img = $request -> file('restimg');

            $unique_file_name = md5(time().rand()).'.'. $img -> getClientOriginalExtension();

            $img -> move(public_path('media/restaurant/'), $unique_file_name);
        }

    	Restaurant::create([
             'restname' => $request -> restname,
             'location' => $request -> location,
             'distance' => $request -> distance,
             'hotline' => $request -> hotline,
             'restimg' => $unique_file_name,
             
    	]);

      // return	$request -> all();
    	
    }






public function deleteRest($id)
{
	$del_id = Restaurant::findOrFail($id);

	$del_id -> delete();
}











    public function showallRest()
    	{
    		$data = Restaurant::latest()->get();
    		$i = 1;

    		foreach ($data as $element) { ?>
             <tr>
                                               
                                                
                                                <td><div class="d-flex align-items-center"><img src="media/restaurant/<?php echo $element-> restimg ?>" class="rounded-lg mr-2" width="24" alt=""> <span class="w-space-no"><?php echo $element -> restname; ?></span></div></td>
                                                <td><?php echo $element -> location; ?></td>
                                                <td><?php echo $element -> distance; ?></td>
                                                <td><?php echo $element -> hotline; ?></td>
                                                <td><div class="d-flex align-items-center"><i class="fa fa-circle text-success mr-1"></i> Available</div></td>
                                              
                                                <td>
													<div class="d-flex">

														<a href="editmodal" id="burg_id"burger_edit_attr="<?php echo $element -> id; ?>" data-toggle="modal" data-target="#editmodal" class="btn btn-primary shadow btn-xs sharp mr-1" ><i class="fa fa-pencil"></i></a>




														<a href="#" id="rest_delete_id"
														rest_delete_attr="<?php echo $element -> id; ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>


                                            </tr>

    		
    		<?php }
    	}

}
