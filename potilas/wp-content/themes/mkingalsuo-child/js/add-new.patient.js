jQuery(document).ready( function() {

   jQuery("#btn-add-new").click( function() {
      
	    var txtpostinumero = jQuery("#txtpostinumero").val();

	    console.log(txtpostinumero);

	    jQuery.ajax({
	        type : "POST",
	        dataType : "html",
	        url : doAjax.ajaxurl,
	        data : {
	        	txtpostinumero: txtpostinumero
	        },
	        success: function(data) {
	            alert(data);
	        },
	        error: function (data, status, error) {
		        alert(data.responseText);
		    }
	    });

	    return false;  

   });



});