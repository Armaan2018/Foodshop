@extends('admin.layouts.app')

@section('main-content')


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insert_rest_modal">
Add Restaurant!
</button>

{{-- all burgers --}}




<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Associated Restaurants</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                
                                                
                                                <th><strong>Restaurant Nam</strong></th>
                                                <th><strong>Location</strong></th>
                                                <th><strong>Distance</strong></th>
                                                <th><strong>Hotline</strong></th>
                                                <th><strong>Status</strong></th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="restaurant_tbody">
                               
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>









<!-- Modal -->
<div class="modal fade" id="insert_rest_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="exampleModalLongTitle" >Add New Restaurant</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="basic-form">
                                    <form id="restaurant_form_id" action="{{ route('create.restaurant') }}" method="POST" enctype="multipart/form-data">
                                    	@csrf
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Restaurant Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="restname" class="form-control" placeholder="Restaurant">
                                            </div>
                                           {{--  <span class="text-danger" id="burger_error_span_name"></span> --}}
                                        </div> 


                                         <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Location</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="location" class="form-control" placeholder="location">
                                            </div>
                                         
                                        </div>

                                         <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Distance</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="distance" class="form-control" placeholder="distance">
                                            </div>
                                         
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Hotline</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="hotline" class="form-control" placeholder="hotline">
                                            </div>
                                      

                                        </div>
                                   

<div class="card">
                            <div class="card-header border-0 pb-0">
                                <h5 class="card-title">Restaurant Image</h5>
                            </div>
                            <div class="card-body">
                               <img src="" id="uploaded_restimg_id" style="height: 200px;">
                            </div>

                          
                        </div>

                                    <div class="form-group row">
                                                                        
                                                <input type="file" name="restimg" id="restimg_input_id">    
                                              {{--   <span class="text-danger" id="burger_error_span_image"></span> --}}               
                                        </div>

                                   <div class="card-footer">
                                        <div class="form-group row">
                                           
                                                <button type="submit" style="width: 100%" class="btn btn-primary">Submit</button>
                                           
                                        </div>
                                        </div>
                                    </form>
                                </div>
      </div>
     
    </div>
  </div>
</div>



{{-- <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="exampleModalLongTitle" >Create New Burger</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="basic-form">
                                    <form id="burger_edit_id" action="{{ route('burger.update') }}" method="POST" enctype="multipart/form-data">
                                    	@csrf
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Burger Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="name" class="form-control" placeholder="Burger Name">

                                                <input type="hidden" name="id" class="form-control" placeholder="">
                                            </div>
                                            <span class="text-danger" id="burger_error_span_name"></span>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Price</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="price" class="form-control" placeholder="Price">
                                            </div>
                                         <span class="text-danger" id="burger_error_span_price"></span>

                                        </div>
                                   

<div class="card">
                            <div class="card-header border-0 pb-0">
                                <h5 class="card-title">Burger Image</h5>
                            </div>
                            <div class="card-body">
                               <img src="" id="uploaded_image_id" style="height: 200px;">
                            </div>

                          
                        </div>

                                    <div class="form-group row">
                                                                        
                                                <input type="file" name="image" id="upload_input_id">    
                                                <span class="text-danger" id="burger_error_span_image"></span>               
                                        </div>

                                   <div class="card-footer">
                                        <div class="form-group row">
                                           
                                                <button type="submit" style="width: 100%" class="btn btn-primary">Submit</button>
                                           
                                        </div>
                                        </div>
                                    </form>
                                </div>
      </div>
     
    </div>
  </div>
</div> --}}





@endsection