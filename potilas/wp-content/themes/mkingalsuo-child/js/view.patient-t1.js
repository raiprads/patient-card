jQuery(document).ready( function() {

	jQuery("#form-update-tab1").validate({
		rules: {
			txthktunnus: "required",
			txtsukunimi: "required",
			txtetunimi: "required",
			txtpuhkotiin: {
		      required: true,
		      digits: true
		    },
		    txtsposti: {
				email: true
			},
			txtkotiosoite: "required",
			txtpostinumero: {
				required: true,
				minlength: 5,
				maxlength: 5
			}
		},
		messages: {
			txthktunnus: "Please enter your henkilötunnus",
			txtsukunimi: "Please enter your sukunimi",
			txtetunimi: "Please enter your etunimi",
			txtpuhkotiin: {
				required: "Please enter your puh. kotiin",
		      	digits: "Your puh. kotiin must consist of digits"
			},
			txtsposti: "Please enter a valid sähköposti",
			txtkotiosoite: "Please enter your kotiosoite",
			txtpostinumero: "Please enter your postinumero"
		},
		submitHandler: function(form) {
		    
		    //form.submit();
		    //vars
			var nonce = jQuery('#mynonce').val();
			var post_id = jQuery('#post_id').val();
			var txthktunnus = jQuery('#txthktunnus').val();
			var txtsukunimi = jQuery('#txtsukunimi').val();
			var txtetunimi = jQuery('#txtetunimi').val();
			var txtpuhkotiin = jQuery('#txtpuhkotiin').val();
			var txtsposti = jQuery('#txtsposti').val();
			var txtkotiosoite = jQuery('#txtkotiosoite').val();
			var drppostitoimipaikka = jQuery('#drppostitoimipaikka').val();
			var txtpostinumero = jQuery('#txtpostinumero').val();
			var txtammatti = jQuery('#txtammatti').val();
			var txttyoosoite = jQuery('#txttyoosoite').val();
			var txtpuhtyohon = jQuery('#txtpuhtyohon').val();
			
			jQuery.ajax({
		        type : "post",
		        dataType : "json",
		        url : doAjax.ajaxurl,
		        data : {
		        	action: "update_patient_tab1", 
		        	nonce: nonce, // security matters
		        	post_id: post_id,
		        	txthktunnus: txthktunnus,
		        	txtsukunimi: txtsukunimi,
		        	txtetunimi: txtetunimi,
		        	txtpuhkotiin: txtpuhkotiin,
		        	txtsposti: txtsposti,
		        	txtkotiosoite: txtkotiosoite,
		        	drppostitoimipaikka: drppostitoimipaikka,
		        	txtpostinumero: txtpostinumero,
		        	txtammatti: txtammatti,
		        	txttyoosoite: txttyoosoite,
		        	txtpuhtyohon: txtpuhtyohon
		        },
		        success: function(response) {
		            if(response.type == "success") {
		               jQuery("#ajax_message").html(
		               		'<div class="alert alert-success alert-dismissable">' + 
	  						'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
	  						response.message + '</div>'
		               	);
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
			        alert(xhr.status);
			        alert(xhr.responseText);
			    }
		    }); 

			event.preventDefault();

		}
	});




});
