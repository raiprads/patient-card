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
        	console.log(response);
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




	

});
