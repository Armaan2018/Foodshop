(function($) {
    $(document).ready(function() {

/*******************
 image upload instant
*********************/

$('input#upload_input_id').change(function(e){


let file_url = URL.createObjectURL(e.target.files[0]);
    $('img#uploaded_image_id').attr('src',file_url);
});

$('input#restimg_input_id').change(function(e){


let file_url = URL.createObjectURL(e.target.files[0]);
    $('img#uploaded_restimg_id').attr('src',file_url);
});



/*******************
*   burger Create   *
*********************/
       
$(document).on('submit','form#burger_form_id',function(e){
    e.preventDefault();
    
    $('span#burger_error_span').text('');
    $.ajax({
        url:'burger-create',
        method:"POST",
        data: new FormData(this),
        contentType:false,
        processData:false,
        success:function(response){
                     allBurgers();
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                    $('#insertmodel').hide();
                    $('form#burger_form_id')[0].reset();
                    $('img#uploaded_image_id').attr('src','')
                     swal("Good job!", "New Burger Added!", "success");

            

        },
         error:function(response){
            $('span#burger_error_span_name').text(response.responseJSON.errors.name);
            $('span#burger_error_span_price').text(response.responseJSON.errors.price);
            $('span#burger_error_span_image').text(response.responseJSON.errors.image);

        }
    });
});


/*******************
*   All Burgers   *
*********************/


function allBurgers(){
    $.ajax({
        url:'burger-show',
        success:function(response){
            $('tbody#burger_tbody').html(response);

        }
    })
}


allBurgers();




/*******************
*   Edit Burgers   *
*********************/

$(document).on('click','a#burg_id',function(e){
    e.preventDefault();

    let burger_id = $(this).attr('burger_edit_attr');

    $.ajax({
        url:'burger-edit/' + burger_id,
        success:function(response){
             $("#editmodal input[name='name']").val(response.name);
             $("#editmodal input[name='price']").val(response.price);
             $("#editmodal input[name='id']").val(response.id);
             $('#editmodal img#uploaded_image_id').attr('src','media/burger'+'/'+response.image);

        }
    });

});


$(document).on('submit','form#burger_edit_id',function(e){
    e.preventDefault();

    $.ajax({
        url:'burger-update',
        method:"POST",
        data:new FormData(this),
        processData:false,
        contentType:false,
        success:function(response){
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                    $('#editmodal').hide();

                   swal("Good job!", "Burger Updated Successful!", "success");
                   allBurgers();

        }
    });
});



/*delete burger*/

$(document).on('click','a#burg_delete_id',function(e){
    e.preventDefault();

    let det_id = $(this).attr('burger_delete_attr');

    swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this Category!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {

                        $.ajax({

                            url: 'burger-delete/' + det_id,
                            success: function(response) {
                                swal("Opps Category has been deleted!", {
                                    icon: "success",
                                });
                                allBurgers();

                            }


                        });



                    } else {
                        swal("Burger Not Deleted Yet");
                    }
                });


});


$(document).on('click','a#rest_delete_id',function(e){
    e.preventDefault();

    let det_id = $(this).attr('rest_delete_attr');

    swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this Restaurant!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {

                        $.ajax({

                            url: 'restaurant-delete/' + det_id,
                            success: function(response) {
                                swal("Opps Restaurant has been deleted!", {
                                    icon: "success",
                                });
                                showallRest();

                            }


                        });



                    } else {
                        swal("Restaurant Not Deleted Yet");
                    }
                });


});





/*******************
*   All restaurants   *
*********************/


function showallRest(){
    $.ajax({
        url:'restaurant-show',
        success:function(response){
            $('tbody#restaurant_tbody').html(response);

        }
    })
}


showallRest();




/*******************
*   restaurant Create   *
*********************/
       
$(document).on('submit','form#restaurant_form_id',function(e){
    e.preventDefault();
    
    $.ajax({
        url:'restaurant-create',
        method:"POST",
        data: new FormData(this),
        contentType:false,
        processData:false,
        success:function(response){

                     showallRest();
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                    $('#insert_rest_modal').hide();
                    $('form#restaurant_form_id')[0].reset();
                    $('img#uploaded_restimg_id').attr('src','')
                     swal("Good job!", "New Restaurant Added!", "success");

            

        },
        
    });
});


    });

})(jQuery)
