

/*Initialized Varilables */

/* Script Beginning */

var base_url  = base_urlz;

   	var int_color_arr = [];
   	var ext_color_arr = [];
   	var loadFlag = 0;
$(document).ready(function(){
	console.log("dashboard Custom");

  /* Request Datatable */
	oreqTable = $('#requestTable').DataTable({
		  "processing": true,
		  "serverSide": true,
		  "ajax": base_url + "/dashboard/get-requests",
		  "columns": [
			  {data: 'image', name: 'image'},
			  {data: 'brand_name', name: 'brand_name'},
			  {data: 'req_year', name: 'req_year'},
			  {data: 'req_style', name: 'req_style'},
			  {data: 'req_ext_color', name: 'req_ext_color'},
			  {data: 'req_int_color', name: 'req_int_color'},
			  {data: 'req_comment', name: 'req_comment'},
			  {data: 'status', name: 'status'},

		  ]
	});

	omodelTable = $('#modelsTable').DataTable({
		  "processing": true,
		  "serverSide": true,
		  "ajax": base_url + "/dashboard/get-models",
          "initComplete": function(settings, json) {

	           $(document).delegate('.delModal', 'click', function(e){
	                e.preventDefault();
	                console.log("clciekd" + $(this).data('id'));
	                var id = $(this).data('id');
	                console.log('id' + id);

	                $.ajaxSetup({
	                   headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
	                });

	                $.ajax({
	                      url: base_url + "/dashboard/delete-model",
	                      type: 'post',
	                      data: {'id': id},
						  success: function (data) {
						  	  console.log(data);

					          if(data.success==true){
					          	toastr.success(data.msg);

					          }else if(data.success==false){
					          	toastr.error(data.msg);
					          }
		                       omodelTable.ajax.reload();
						  },
						  error: function (data) {
		                      omodelTable.ajax.reload();
		                      console.log(data);
		                      toastr.error('Oops. Couldnot be Deleted, Please Try again');
						  },
	                  });
	          });

 		  },
		  "columns": [
		  	  {data: 'model_id', name: 'model_id'},
			  {data: 'image', name: 'image'},
			  {data: 'brand_name', name: 'brand_name'},
			  {data: 'model_name', name: 'model_name'},
			  {data: 'year', name: 'year'},
			  {data: 'comment', name: 'comment'},
			  {data: 'action', name: 'action'},
		  ]
	});

	/*Users Datatable */
		ousersTable = $('#usersTable').DataTable({
			  "processing": true,
			  "serverSide": true,
			  "ajax": base_url + "/dashboard/get-users",
			  "columns": [
			  	  {data: 'user_name', name: 'user_name'},
				  {data: 'role_name', name: 'role_name'},
				  {data: 'email', name: 'email'},
				  {data: 'registered_at', name: 'registered_at'},
			  ]
		});


	//Loading LoadJS for Edit Model Page
		loadJS();
   /* Selecting Multiple Colors Exterior */

	$("[name='ext_color_prev']").change(function(e){
		e.preventDefault();
		var extColor = $(this).val();
		console.log("extColor" + extColor);
			console.log(loadFlag);
		if(ext_color_arr.indexOf(extColor) >= 0){
			//exists
			console.log("exists");
		}else{
			//Doesn't exists
			console.log("not exists");
			ext_color_arr.push(extColor);
			$("#extColorList").append('<li class="circle" style="background:'+extColor+'"><span></span><span data-id="'+extColor+'" class="glyphicon glyphicon-remove delCol">x</span></li>');

			$("#ext_color").val(ext_color_arr);
			console.log(ext_color_arr);

			// if(loadFlag == 0){
			// 	console.log(loadFlag);
			// 	loadFlag = 1;
				loadJS();
			//}
		}
	});

   /* Selecting Multiple Colors Interior  */

	$("[name='int_color_prev']").change(function(e){
		e.preventDefault();
		var intColor = $(this).val();
		console.log("intColor" + intColor);

		if(int_color_arr.indexOf(intColor) >= 0){
			//exists
			console.log("exists");
		}else{
			//Doesn't exists
			console.log("not exists");
			int_color_arr.push(intColor);
			$("#intColorList").append('<li class="circle2" style="background:'+intColor+'"><span data-id="'+intColor+'" class="glyphicon glyphicon-remove delColInt">x</span></li>');
			$("#int_color").val(int_color_arr);
			console.log(int_color_arr);
			console.log(loadFlag);
			//if(loadFlag == 0){
				//console.log(loadFlag);
				//loadFlag = 1;
				loadJS();
			//}
		}
	});

	function loadJS(){

			//del color exterior
			$(".delCol").click(function(e){

				 e.preventDefault();

		      		var ext_color = $('#ext_color').val();
		      		ext_color = ext_color.split(',');
					var removColor = $(this).data('id');
					var index = ext_color.indexOf(removColor);
					if (index > -1) {
					    ext_color.splice(index, 1);
					}

					$(this).closest("li").remove();
					$("#ext_color").val(ext_color);
			});

	   //delete color interior
		 $(".delColInt").click(function(e){

				e.preventDefault();
				 /*console.log("int color:::" + $(this).data('id'));
				 var removColor_int = $(this).data('id');
				 $(this).closest("li").remove();
				 //Popping Color from Array
				 int_color_arr.pop(removColor_int);
				 //Updating input of ext Color
				 $("#int_color").val(int_color_arr);
				 */


		      		var int_color = $('#int_color').val();
		      		int_color = int_color.split(',');
					var removColor = $(this).data('id');
					var index = int_color.indexOf(removColor);
					if (index > -1) {
					    int_color.splice(index, 1);
					}

					$(this).closest("li").remove();
					$("#int_color").val(int_color);

		 });

	}



});
