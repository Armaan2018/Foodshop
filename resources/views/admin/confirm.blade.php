@extends('admin.layouts.app')

@section('main-content')







<div class="col-xl-12 col-xxl-12 col-lg-12 col-sm-12" id="promark">
                        <div class="card">
                            <div class="card-header border-0">
                                <div>
                                    <h4 class="card-title mb-2">Recived Orders</h4>
                                    <p class="fs-13 mb-0"></p>
                                </div>
                                <div class="dropdown">
                                    <a href="{{ route('oreders.show.all') }}" class="btn border btn-rounded text-black">
                                       Recent Orders
                                    </a>
                                    
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive ">
                                    <table class="table order-request">
                                        <tbody id="confirm_table_tbody">

                                         
                                       
                                       
                                    </tbody>
                                  </table>
                                   {{--  <div class="card-footer border-0 pt-0 text-center">
                                        <a href="ecom-product-list.html" class="btn-link">View More &gt;&gt;</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>










<!-- Modal -->










@endsection