@extends('admin.layouts.app')

@section('main-content')


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertmodel">
Create A New Burger !!
</button>

{{-- all burgers --}}




<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Created Burgers</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead class="thead-dark">
                                            <tr>
                                                
                                                <th><strong>ID NO.</strong></th>
                                                <th><strong>Price</strong></th>
                                                <th width="15%"><strong>Size | Quantity | total</strong></th>
                                                
                                                <th><strong>Snacks</strong></th>           
                                                <th width="10%"><strong>Sancks Quantity|Price</strong></th>
                                                <th><strong>Snacks</strong></th>
                                                <th width="10%"><strong>Drinks Quantity|Price</strong></th>
                                                <th><strong>Total</strong></th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($buri as $element)
                                          <tr>
                                           
                                                @php
                                                   $dam = json_decode($element -> burger);
                                                   $dam_san = json_decode($element -> snacks); 

                                                   $dam_dri = json_decode($element -> drinks);
                                                @endphp
                                                 <td>{{ $dam -> burgername}}</td>
                                                 <td><strong>{{ $dam -> burgerprice}}</strong></td>
                                                  <td><strong>{{ $dam -> burgquantity}} | {{ $dam -> burgsize}} | {{$dam -> total}}</strong></td>
                                                <td><strong>{{ $dam_san -> snack_name}}</strong></td>


                                                <td><strong>{{ $dam_san -> snack_bill}} * {{ $dam_san -> snack_quantity}} = {{ $dam_san -> snacks_bill}} </strong></td> 



                                                <td><strong>{{ $dam_dri -> drinkname}}</strong></td>

                                                <td><strong>{{ $dam_dri -> drinkprice}}  {{ $dam_dri -> drinksize}}  {{ $dam_dri -> drinkquan}} {{ $dam_dri -> totaldrink}} </strong></td>
                                                <td><strong>{{ $element -> total }}</strong></td>
                                                </tr>
                                           @endforeach
                                               
                                               


                                           
                               
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>















@endsection