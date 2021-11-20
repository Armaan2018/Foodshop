(function($) {
    $(document).ready(function() {
 
    
     function allOrders(){
        $.ajax({
            url:'customer-orders',
            success:function(response){

                $('#promark tbody#order_table_tbody').html(response);

            }
        });
     }

     allOrders();


     function allConfirms(){
        $.ajax({
            url:'confirmed-orders',
            success:function(response){

                $('#promark tbody#confirm_table_tbody').html(response);

            }
        });
     }

    allConfirms();


    
    /*
          test

      
    */





/*********************/



$(document).on('click','a#logout_btn_id',function(e){
    event.preventDefault();

    $('form#logout_form_submit').submit();

});



















     $(document).on('click','a#confirm_btn_id',function(event){
        event.preventDefault();

        let id = $(this).attr('confirm_btn_attr');


          swal({
                    title: "Are you sure?",
                    text: "Do You Want To Confirm This Order??",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {

                        $.ajax({

                            url: 'confirm-order/' + id,
                            success: function() {

                                swal("Order Confirmed", {
                                    icon: "success",
                                });

                                allOrders();
                                
                                

                          

                            }


                        });



                    } else {
                        swal("Order Not Confirmed");
                    }
                });

     });


      $(document).on('click','a#delivary_btn_id',function(event){
        event.preventDefault();

        let id = $(this).attr('delivary_btn_attr');


          swal({
                    title: "Are you sure?",
                    text: "Do You Want To Delivar This Order??",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {

                        $.ajax({

                            url: 'all-confirmed/' + id,
                            success: function() {

                                swal("The Order Has been delivared Successfully", {
                                    icon: "success",
                                });

                                allConfirms();
                                
                                

                          

                            }


                        });



                    } else {
                        swal("Order Not Confirmed");
                    }
                });

     });


$(document).on('click','div#followdiv a#followanchor',function(e){
    e.preventDefault();
   
   $(this).addClass('bg-white text-primary suriya');
   $(this).text('Followed');
   $('h3#totalFollower').text('151');


});

$(document).on('click','div#followdiv a.suriya',function(e){
    e.preventDefault();
   
   $(this).removeClass('bg-white text-primary suriya');
   $(this).addClass('bg-primary text-white');
   $(this).text('Follow');
   $('h3#totalFollower').text('150');


});


    });

})(jQuery)
