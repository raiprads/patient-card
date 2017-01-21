jQuery(document).ready( function() {

	var nonce = jQuery('#mynonce').val();

	jQuery.ajax({
        type : "post",
        dataType : "json",
        url : doAjax.ajaxurl,
        data : {
        	action: "view_patient_teeth", 
        	nonce: nonce, // security matters
        },
        success: function(response) {
            if(response.type == "success") {
               jQuery('#patient-x-teeth').attr('src', 'data:image/png;base64,' + response.teeth_data);
            }
            else {
               alert("Error encountered during the processing of data.");
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
	        alert(xhr.status);
	        alert(xhr.responseText);
	    }
    });


    jQuery('#btn-save-teeth-info').click( function(event) {

    	jQuery.ajax({
	        type : "post",
	        //dataType : "json",
	        url : doAjax.ajaxurl,
	        data : {
	        	action: "save_patient_teeth_values", 
	        	nonce: jQuery('#myteethnonce').val(), // security matters
	        	teethval: getToothValues(),
	        },
	        success: function(response) {
	        	console.log(response);
	        	jQuery('#ptx').html(response);
	            // if(response.type == "success") {
	            //    //jQuery('#patient-x-teeth').attr('src', 'data:image/png;base64,' + response.teeth_data);
	            //    jQuery('#ptx').html(response);
	            // }
	            // else {
	            //    alert("Error encountered during the processing of data.");
	            // }
	        },
	        error: function (xhr, ajaxOptions, thrownError) {
		        alert(xhr.status);
		        alert(xhr.responseText);
		    }
	    });

    	event.preventDefault();

    });




	

});


function getToothValues() {

	// get the values of each tooth
	var arr = "";

	for(var tens=10; tens<=40; tens+=10) {

		for(var ones=1; ones<=8; ones++) {

			var teethnum = tens+ones;
			var teethval = jQuery('#teeth-'+teethnum).val();

			if(teethval != "") {
				arr = arr + teethnum + ":" + teethval + ",";
			}

		}

	}

	return arr;

}
