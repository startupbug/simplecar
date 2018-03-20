

/*Initialized Varilables */

/* Script Beginning */

var base_url  = base_url;



$(document).ready(function(){

	//Disable front page form unless selected
	  //$('.simple_form').submit(false);

	console.log("Custom JS ==" + base_url);
	

	/* Login Form Ajax Submit */

	$("#login_form").on('submit', function(e){
	      e.preventDefault();
	      //base_url  = '/simplecar/backend/';
	      
	      console.log('login form');

	      var formData = new FormData(this);
	      $.ajaxSetup({
	          headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
	      });

	      $.ajax({
	            url: base_url + "/login",
	            type: 'post',
	            data: new FormData(this),
	            processData: false,
	            contentType: false,
	        })
	        .success(function( data ) {
	          console.log(data);
	          
	          if(data.success==true){
	          	toastr.success(data.msg);

 	            //Reload Home page after Login
	            window.location.reload();

	          }else if(data.success==false){
	          	toastr.error(data.msg);
	          }

	        })
	        .error(function( data ) {
	          console.log("error" + data);
	          toastr.error(data.msg);

	        });
	});

	/* Tokenize Bootstrap 
	
	$('#tokenfield').tokenfield({
	  autocomplete: {
	    source: ['red','blue','green','yellow','violet','brown','purple','black','white'],
	    delay: 100
	  },
	  showAutocompleteOnFocus: true
	})*/

	//Home Page Brand Ajax Request for Model
	$("#generation_car_make_id").on('click', function(e){
		  e.preventDefault();
		  console.log("Change event");

		  //enabling submit button attr
		  $('.dealButton').prop("disabled", false);
		   //$('.simple_form').submit(true);
		  console.log($(this).val());
		  
		  var brand_id = $(this).val();

	      $.ajaxSetup({
	          headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
	      });

	      $.ajax({
	            url: window.base_url + "getmodelcar",
	            type: 'post',
	            data: {'brand_id': brand_id},
	        })
	        .success(function( data ) {
	          console.log(data);
	          //$("#modelDropdown").html(data.html);
	          $('#generation_car_model_id').html(data.html);
	           $('.dealButton').prop("disabled", false); 
	          // if(data.success==true){
	          // 	toastr.success(data.msg);

 	         //    //Reload Home page after Login
	          //   window.location.reload();

	          // }else if(data.success==false){
	          // 	toastr.error(data.msg);
	          // }

	        })
	        .error(function( data ) {
	          console.log("error" + data);
	          console.log(data);
	         // toastr.error(data.msg);

	        });

	});



	//Updating Box Code 
	$("[name='req_year']").on('click', function(e){
		console.log(121212);
		 console.log($(this).val());
		 $(".boxYear").text($(this).val());
	});

	$("[name='req_style']").on('click', function(e){
		 //console.log(121212);
		 //console.log($(this).val());
		 $(".boxStyle").text($(this).val());
	});	


});
