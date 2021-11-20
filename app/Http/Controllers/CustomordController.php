<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;

class CustomordController extends Controller
{
    public function showCustomerInfo()
        {
           
           return view('admin.order');

         
            

            }


            public function allconFirm()
            {
            	return view('admin.confirm');
            }










     public function showOrders(){

            $orders     = Customer::where('confirm',false)->latest()->get();
            	

foreach ($orders as $element) { ?>
 
 

 
   
 

 <tr>

  <?php foreach ($element -> orders as $pele): ?>

    <?php 
                                               $burger = json_decode($pele -> burger);
                                               $snacks = json_decode($pele -> snacks);
                                               $drinks = json_decode($pele -> drinks);
                                               $rest = json_decode($pele -> restaurant);

     ?>
      <td width="40%">
                                                <div class="media align-items-center">
                                                    <img class="mr-3 img-fluid rounded-circle" width="75" src="media/burger/<?php echo $burger -> image; ?>" alt="DexignZone">
                                                    <div class="media-body">
                                                        <h5 class="mt-0 mb-2"><a href="ecom-product-detail.html" class="text-black"><?php echo $burger -> burgername ?></a></h5>
                                                        <p class="mb-0 text-primary"> <strong>Size:</strong> #<?php echo $burger -> burgsize ?><strong>x</strong><?php echo $burger -> burgquantity ?> = <span class="text-dark"><?php echo $burger -> total ?></span></p>
                                                        <p class="mb-0 text-primary"> <strong>Snacks:</strong> #<?php echo $snacks -> snack_name ?>- <span class="text-mute"><?php echo $snacks -> snack_bill ?>x<?php echo $snacks -> snack_quantity ?></span> = <span class="text-dark"><?php echo $snacks -> snacks_bill ?></span></p>
                                                        <p class="mb-0 text-primary"> <strong>Drinks:</strong> #<?php echo $drinks -> drinkname ?> - <span class="text-success"><?php echo $drinks -> drinksize ?> </span><span class="text-mute">x<?php echo $drinks -> drinkquan ?>  = <span class="text-dark"><?php echo $drinks -> totaldrink ?> </span></p>
                                                        <span class="badge badge-info"><?php echo $pele -> ordertype ?></span>
                                                        <span class="badge badge-dark"><?php echo $element -> created_at ->diffForHumans(); ?></span>
                                                    </div>
                                                </div>
                                            </td>

                                             

                                      <td width="40%">
                        <h5 class="mb-2 text-black wspace-no"><?php echo $element -> name ?></h5>
                        <p class="mb-0"><?php echo $element -> address ?></p>
                        <p class="mb-0"><?php echo $element -> phone ?></p>
                        <p class="mb-0"><?php echo $element -> email ?></p>
                      </td>        
                                           

                                               </td>
                                          
                                              <td width="40%">  
                                                  <div class="d-flex align-items-center justify-content-center">
                                                    <h4 class="mb-0 mr-3 fs-20 text-black d-inline-block"><strong class="text-success"><?php echo $pele -> total ?></strong> Tk</h4>
                                                    <h6><span class="badge badge-secondary"><?php echo $element -> payment ?></span></h6>
                                                   
                                                  
                                                    
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                   <strong class="text-dark">Ordered From : </strong>
                                                  <strong class="m-2"><span class="badge badge-info"><i class="fa fa-cutlery pr-3" aria-hidden="true"></i><?php echo $rest -> restname ?></span></strong>
                                                  </div>
                                              </td>
                                            
                                          
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a  confirm_btn_attr ="<?php echo $element -> id ?>" id="confirm_btn_id" class="btn border-dark btn-rounded text-dark" href="#"> <strong>Confirm</strong></a>
                                                 
                                                </div>
                                            </td>

                                           
    
  <?php endforeach ?>
                                                

                                           
                                        </tr>
 
<?php }
  
            }                               
                                             
                                               


                                            
                                              
                                           
                                               
                                        



//confirmed order

public function showAllConfirm(){

            $orders     = Customer::where([
              'confirm' => true,
              'delivary' => false



            ])->latest()->get();
            	

foreach ($orders as $element) { ?>
 
 

 
   
 

 <tr>

  <?php foreach ($element -> orders as $pele): ?>

    <?php 
                                               $burger = json_decode($pele -> burger);
                                               $snacks = json_decode($pele -> snacks);
                                               $drinks = json_decode($pele -> drinks);
                                                $rest = json_decode($pele -> restaurant);

     ?>
      <td width="40%">
                                                <div class="media align-items-center">
                                                    <img class="mr-3 img-fluid rounded-circle" width="75" src="media/burger/<?php echo $burger -> image; ?>" alt="DexignZone">
                                                    <div class="media-body">
                                                        <h5 class="mt-0 mb-2"><a href="ecom-product-detail.html" class="text-black"><?php echo $burger -> burgername ?></a></h5>
                                                        <p class="mb-0 text-primary"> <strong>Size:</strong> #<?php echo $burger -> burgsize ?><strong>x</strong><?php echo $burger -> burgquantity ?> = <span class="text-dark"><?php echo $burger -> total ?></span></p>
                                                        <p class="mb-0 text-primary"> <strong>Snacks:</strong> #<?php echo $snacks -> snack_name ?>- <span class="text-mute"><?php echo $snacks -> snack_bill ?>x<?php echo $snacks -> snack_quantity ?></span> = <span class="text-dark"><?php echo $snacks -> snacks_bill ?></span></p>
                                                        <p class="mb-0 text-primary"> <strong>Drinks:</strong> #<?php echo $drinks -> drinkname ?> - <span class="text-success"><?php echo $drinks -> drinksize ?> </span><span class="text-mute">x<?php echo $drinks -> drinkquan ?>  = <span class="text-dark"><?php echo $drinks -> totaldrink ?> </span></p>
                                                        <span class="badge badge-info"><?php echo $pele -> ordertype ?></span>
                                                        <span class="badge badge-dark"><?php echo $element -> created_at ->diffForHumans(); ?></span>
                                                    </div>
                                                </div>
                                            </td>

                                             

                                      <td width="40%">
                        <h5 class="mb-2 text-black wspace-no"><?php echo $element -> name ?></h5>
                        <p class="mb-0"><?php echo $element -> address ?></p>
                        <p class="mb-0"><?php echo $element -> phone ?></p>
                        <p class="mb-0"><?php echo $element -> email ?></p>
                      </td>        
                                           

                                               </td>
                                          
                                           <td width="40%">  
                                                  <div class="d-flex align-items-center justify-content-center">
                                                    <h4 class="mb-0 mr-3 fs-20 text-black d-inline-block"><strong class="text-success"><?php echo $pele -> total ?></strong> Tk</h4>
                                                    <h6><span class="badge badge-secondary"><?php echo $element -> payment ?></span></h6>
                                                   
                                                  
                                                    
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                   <strong class="text-dark">Ordered From : </strong>
                                                  <strong class="m-2"><span class="badge badge-info"><i class="fa fa-cutlery pr-3" aria-hidden="true"></i><?php echo $rest -> restname ?></span></strong>
                                                  </div>
                                              </td>
                                            
                                          
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a  delivary_btn_attr ="<?php echo $element -> id ?>" id="delivary_btn_id" class="btn border-dark btn-rounded text-dark" href="#"> <strong>Delivary</strong></a>
                                                 
                                                </div>
                                            </td>

                                           
    
  <?php endforeach ?>
                                                

                                           
                                        </tr>
 
<?php }
  
            }                               
                                             
                                               



///            

























        

 public function showConfirm($id)
    {
        $confirmorder = Customer::findOrFail($id);


           $confirmorder -> confirm = true;


            $confirmorder -> update(); 


            
}



public function delivarShow($id)
    {
        $delivary = Customer::findOrFail($id);


           $delivary -> delivary = true;


            $delivary -> update(); 


            
}



}
