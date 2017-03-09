function getCheckboxValue(chkid) {
	return jQuery('#' + chkid).prop('checked');
}

function ifCheckFocusInput(id) {
	jQuery("#chk" + id).change( function(){
		
		if( !jQuery(this).is(":checked") ) {
            jQuery("#txt" + id).val("");
        }else {
        	jQuery("#txt" + id).focus();
        }

	});
}

jQuery(document).ready( function() {


	// if checkbox is checked focus the input field
	ifCheckFocusInput('suupielet');
	ifCheckFocusInput('huulet');
	ifCheckFocusInput('imusolmukkeet');
	ifCheckFocusInput('poimut');
	ifCheckFocusInput('arvet'); 

	jQuery("#form-update-tab3").validate({
		rules: {
			txtsuupielet: {
				required: "#chksuupielet:checked"
			},
			txthuulet: {
				required: "#chkhuulet:checked"
			},
			txtimusolmukkeet: {
				required: "#chkimusolmukkeet:checked"
			},
			txtpoimut: {
				required: "#chkpoimut:checked"
			},
			txtarvet: {
				required: "#chkarvet:checked"
			}
		},
		messages: {
			txtsuupielet: "Suupielet on pakollinen.",
			txthuulet: "Huulet on pakollinen.",
			txtimusolmukkeet: "Imusolmukkeet on pakollinen.",
			txtpoimut: "Poimut on pakollinen.",
			txtarvet: "Arvet on pakollinen."
		},
		submitHandler: function(form) {
		    
		    //form.submit();
		    //vars
		    var serializeData = jQuery(form).serialize();

		    //console.log(serializeData);

		    jQuery.ajax({
		        type : "post",
		        dataType : "json",
		        url : doAjax.ajaxurl,
		        data : serializeData,
		        success: function(response) {
		            if(response.type == "success") {
		               jQuery("#ajax_message").html(
		               		'<div class="alert alert-success alert-dismissable">' + 
	  						'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
	  						response.message + '</div>'
		               	);

		            	jQuery("html, body").animate({ scrollTop: 0 }, 1000);
		            }
		            else {
		               jQuery("#ajax_message").html(
		               		'<div class="alert alert-warning alert-dismissable">' + 
	  						'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
							'Error encountered during saving the data.</div>'
		               	);
		            }
		        },
		        error: function (xhr, ajaxOptions, thrownError) {
			        console.log(xhr.status);
			        console.log(xhr.responseText);
			    }
		    }); 

			event.preventDefault();

		}
	});



});