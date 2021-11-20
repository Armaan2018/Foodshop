(function() {
    $(document).ready(function() {
 
const pricewithsize = $('span#price_tag').text();


$(document).on('change','#sizeselect',function(){
	
	
	let size = $(this).val();

    if (size == 'SM') {
		reg = (0) * pricewithsize;
		finreg  = (+ reg) + (+ pricewithsize);
		$('span#price_tag').text(finreg);
		$('strong#totalofall').text(finreg);
		$('input[id = "burgquan').val(1);
	}


	if (size == 'LG') {
		lgsize = (.25) * pricewithsize;
		finlg  = (+ lgsize) + (+ pricewithsize);
		$('span#price_tag').text(finlg);
		$('strong#totalofall').text(finlg);
		$('input[id = "burgquan').val(1);

	}

	if (size == 'XL') {
		xlsize = (.50) * pricewithsize;
		finxl = (+ xlsize) + (+ pricewithsize);
		$('span#price_tag').text(finxl);
		$('strong#totalofall').text(finxl);
		$('input[id = "burgquan').val(1);
	}

	


    
   

   
	

   
    


      
});




$(document).on('change','input[id = "burgquan"]',function(){
	let burgquan = $(this).val();

	let burgerprice = $('span#price_tag').text();

	let burgxquan = burgquan * burgerprice;


	$('span#price_tag').text(burgxquan);
	$('strong#totalofall').text(burgxquan);


});


  

 
$(document).on('change','#snack_select',function(){

 


 


	let type = $(this).val();

	if (type == 'Wadges') {
		$('span#price_tag_snacks').text('75');
		$('#divsnack input[id = "snackquan"]').val(1);
	}
	if (type == 'French Fry') {
		$('span#price_tag_snacks').text('50');
		$('#divsnack input[id = "snackquan"]').val(1);
	}
	if (type == 'Wounthon') {
		$('span#price_tag_snacks').text('100');
		$('#divsnack input[id = "snackquan"]').val(1);
	}
	if (type == 'Nuggets') {
		$('span#price_tag_snacks').text('150');
		$('#divsnack input[id = "snackquan"]').val(1);
	}

});





$(document).on('change','#divsnack input[id = "snackquan"]',function(){

let burgerprice = $('span#price_tag').text();
   

	let format = $('#snack_select').val();
	wadges = '';
	french = '';
	wounthon = '';
	nuggets = '';


	if (format == 'French Fry') {
	 	french = 50;
	}

	if (format == 'Wadges') {
	 	wadges = 75;
	}	

	if (format == 'Wounthon') {
	 	wounthon = 100;
	}	


	if (format == 'Nuggets') {
	 	nuggets = 150;
	}	


let snackquanity = $(this).val();

let frenchfinale = snackquanity * french;
let wadfinale = snackquanity * wadges;
let wounfinale = snackquanity * wounthon;
let nugfinale = snackquanity * nuggets;


let totalfrench = (+ burgerprice) + (+ frenchfinale)
let totalwadges = (+ burgerprice) + (+ wadfinale)
let totalwounthon = (+ burgerprice) + (+ wounfinale)
let totalnuggets = (+ burgerprice) + (+ nugfinale)


// let totafinal = (+burgerprice) + (+frenchfinale);

if (format == 'French Fry') {
	$('span#price_tag_snacks').text(frenchfinale);
	$('strong#totalofall').text(totalfrench);
	
	
}

if (format == 'Wadges') {
	$('span#price_tag_snacks').text(wadfinale);
	$('strong#totalofall').text(totalwadges);

}

if (format == 'Wounthon') {
	$('span#price_tag_snacks').text(wounfinale);
	$('strong#totalofall').text(totalwounthon);
	
}

if (format == 'Nuggets') {
	$('span#price_tag_snacks').text(nugfinale);
	$('strong#totalofall').text(totalnuggets);
	
}


});


// $(document).on('change','#drinkdiv select#drinkselect',function(){
// 	let type = $(this).val();
// 	if (type == 'pepsi') {
//          $('#drinkdiv input[id="drinkquan"]').val(1);
// 	}if (type == 'cocacola') {
//          $('#drinkdiv input[id="drinkquan"]').val(1);
// 	}if (type == 'mirinda') {
//          $('#drinkdiv input[id="drinkquan"]').val(1);
// 	}
// });




//drink price selecting on size

$(document).on('change','#drinkdiv select#drinksize',function(){

	let type = $('#drinkdiv select#drinkselect').val();
	let size = $(this).val();
	let quantity = $('#drinkdiv input[id="drinkquan"]').val();


	if (type == 'pepsi' && size == '250ml') {
       singleprice = 15;
       $('span#drinkpriceid').text(singleprice);
       $('#drinkdiv input[id="drinkquan"]').val(1);     

	}

	if (type == 'pepsi' && size == '400ml') {
	    singleprice = 25;
        $('span#drinkpriceid').text(singleprice);
        $('#drinkdiv input[id="drinkquan"]').val(1);
            
	}

	if (type == 'pepsi' && size == '600ml') {
	   singleprice = 35;
       $('span#drinkpriceid').text(singleprice);
       $('#drinkdiv input[id="drinkquan"]').val(1);
      
             
	}


	if (type == 'cocacola' && size == '250ml') {
       singleprice = 20;
       $('span#drinkpriceid').text(singleprice);
       $('#drinkdiv input[id="drinkquan"]').val(1);
      

	}

	if (type == 'cocacola' && size == '400ml') {
	   singleprice = 30;
        $('span#drinkpriceid').text(singleprice);
        $('#drinkdiv input[id="drinkquan"]').val(1);
      
	}

	if (type == 'cocacola' && size == '600ml') {
	   singleprice = 40;
       $('span#drinkpriceid').text(singleprice);
       $('#drinkdiv input[id="drinkquan"]').val(1);
       
	}

	if (type == 'mirinda' && size == '250ml') {
       singleprice = 20;
       $('span#drinkpriceid').text(totalprice);
       $('#drinkdiv input[id="drinkquan"]').val(1);


	}

	if (type == 'mirinda' && size == '400ml') {
	   singleprice = 30;
        $('span#drinkpriceid').text(singleprice);
        $('#drinkdiv input[id="drinkquan"]').val(1);
      
	}

	if (type == 'mirinda' && size == '600ml') {
	   singleprice = 40;     
       $('span#drinkpriceid').text(singleprice);
       $('#drinkdiv input[id="drinkquan"]').val(1);
       
	}

});










//drink price selecting on quantity



$(document).on('change','#drinkdiv input[id="drinkquan"]',function(){


    let burg = $('span#price_tag').text();
    let snack = $('span#price_tag_snacks').text();
    let snackxburg = (+ burg) + (+ snack);
	let type = $('#drinkdiv select#drinkselect').val();
	let size = $('#drinkdiv select#drinksize').val();
	let totalbefore = $('strong#totalofall').text();
	let quantity = $(this).val();





	if (type == 'pepsi' && size == '250ml') {
       singleprice = 15;
       totalprice  = singleprice * quantity;

       $('span#drinkpriceid').text(totalprice);
       $('strong#totalofall').text((+ snackxburg) + (+ totalprice));


	}

	if (type == 'pepsi' && size == '400ml') {
	   singleprice = 25;
       totalprice  = singleprice * quantity;
        $('span#drinkpriceid').text(totalprice);
        $('strong#totalofall').text((+ snackxburg) + (+ totalprice));
      
	}

	if (type == 'pepsi' && size == '600ml') {
	   singleprice = 35;
       totalprice  = singleprice * quantity;
       $('span#drinkpriceid').text(totalprice);
       $('strong#totalofall').text((+ totalbefore) + (+ totalprice));
       
	}


	if (type == 'cocacola' && size == '250ml') {
       singleprice = 20;
       totalprice  = singleprice * quantity;
       $('span#drinkpriceid').text(totalprice);
       $('strong#totalofall').text((+ snackxburg) + (+ totalprice));


	}

	if (type == 'cocacola' && size == '400ml') {
	   singleprice = 30;
       totalprice  = singleprice * quantity;
        $('span#drinkpriceid').text(totalprice);
        $('strong#totalofall').text((+ totalbefore) + (+ totalprice));
      
	}

	if (type == 'cocacola' && size == '600ml') {
	   singleprice = 40;
       totalprice  = singleprice * quantity;
       $('span#drinkpriceid').text(totalprice);
      $('strong#totalofall').text((+ snackxburg) + (+ totalprice));
       
	}

	if (type == 'mirinda' && size == '250ml') {
       singleprice = 20;
       totalprice  = singleprice * quantity;
       $('span#drinkpriceid').text(totalprice);
       $('strong#totalofall').text((+ snackxburg) + (+ totalprice));


	}

	if (type == 'mirinda' && size == '400ml') {
	   singleprice = 30;
       totalprice  = singleprice * quantity;
        $('span#drinkpriceid').text(totalprice);
       $('strong#totalofall').text((+ snackxburg) + (+ totalprice));
      
	}

	if (type == 'mirinda' && size == '600ml') {
	   singleprice = 40;
       totalprice  = singleprice * quantity;
       $('span#drinkpriceid').text(totalprice);
      $('strong#totalofall').text((+ snackxburg) + (+ totalprice));
       
	}

});




       
	$(document).on('submit','form#customer_form_id',function(e){
		event.preventDefault();

		let custid = $('#customer_form_id input[name="catch_id"]').attr('id_attr');

          $('span#error_text_name').text();
		 $('span#error_text_address').text();
          $('span#error_text_email').text();
          $('span#error_text_phone').text();
          $('span#error_text_payment').text();

		

		$.ajax({

			url:'/burger/item/checkout/' + custid,
			method:'POST',
			data:new FormData(this),
			contentType:false,
			processData:false,
			success:function(response){


				$('button#sub_btn_id').hide();

				$('div#clear_div').hide();

				$('div#borolekha h1').text('Thank You');

				$("#alBox").al({

// default, success, warning, error
context: "success",

text: {

  // The title bar of your alert
  title: "Your Order Has been Recived",

  // The more verbose description of the alert.
  description: "You will be notified shortly",

  // The text of the "dismiss" button
  dismiss: "DISMISS"
},



});

				window.location.href = "/";
                   
			},
			error:function(response){
				 $('span#error_text_name').text(response.responseJSON.errors.name);
				 $('span#error_text_address').text(response.responseJSON.errors.address);
				 $('span#error_text_email').text(response.responseJSON.errors.email);
				 $('span#error_text_phone').text(response.responseJSON.errors.phone);
				 $('span#error_text_payment').text(response.responseJSON.errors.phone);

			}
		});

	});




    });

})(jQuery)
