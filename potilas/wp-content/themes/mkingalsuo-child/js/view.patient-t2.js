function getCheckboxValue(chkid) {
	return jQuery('#' + chkid).prop('checked');
}

jQuery(document).ready( function() {

	jQuery("#form-update-tab2").validate({
		rules: {
			txtttauti: {
				required: "#chkttauti:checked"
			},
			txtmsairaudet: {
				required: "#chkmsairaudet:checked"
			},
			txtlaakitys: {
				required: "#chklaakitys:checked"
			},
			txtvuosi: {
				number: true,
				minlength: 4
			},
			txtvalmistettuv: {
				number: true,
				minlength: 4
			},
			txtpohjattuv: {
				number: true,
				minlength: 4
			},
			txtkorjattuv: {
				number: true,
				minlength: 4
			}
		},
		messages: {
			txtttauti: "Tarttuva tauti on pakollinen.",
			txtmsairaudet: "Muut sairaudet on pakollinen.",
			txtlaakitys: "Lääkitys on pakollinen.",
			txtvuosi: {
				number: "Vuosi täytyy sisältää numeroita.",
				minlength: "Anna vähintään 4 merkkiä."
			},
			txtvalmistettuv: {
				number: "Valmistettu v. täytyy sisältää numeroita.",
				minlength: "Anna vähintään 4 merkkiä."
			},
			txtpohjattuv: {
				number: "Pohjattu v. täytyy sisältää numeroita.",
				minlength: "Anna vähintään 4 merkkiä."
			},
			txtkorjattuv: {
				number: "Korjattu v. täytyy sisältää numeroita.",
				minlength: "Anna vähintään 4 merkkiä."
			}
		},
		submitHandler: function(form) {
		    
		    //form.submit();
		    //vars
		    var serializeData = jQuery(form).serialize();

		    console.log(serializeData);

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