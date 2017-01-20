jQuery(document).ready( function() {

	jQuery("#form-add-new").validate({
		rules: {
			txthktunnus: "required",
			txtsukunimi: "required",
			txtetunimi: "required",
			txtpnumero: {
		      required: true,
		      digits: true
		    },
		    txtsposti: {
				required: true,
				email: true
			},
			txtkadunnimi: "required",
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
			txtpnumero: {
				required: "Please enter your puhelinnumero",
		      	digits: "Your puhelinnumero must consist of digits"
			},
			txtsposti: "Please enter a valid sähköposti",
			txtkotiosoite: "Please enter your kotiosoite",
			txtpostinumero: "Please enter your postinumero"
		},
		submitHandler: function(form) {
		    
		    //form.submit();
		    //vars
			var nonce = jQuery('#mynonce').val();
			var txthktunnus = jQuery('#txthktunnus').val();
			var txtsukunimi = jQuery('#txtsukunimi').val();
			var txtetunimi = jQuery('#txtetunimi').val();
			var txtpnumero = jQuery('#txtpnumero').val();
			var txtsposti = jQuery('#txtsposti').val();
			var txtkotiosoite = jQuery('#txtkotiosoite').val();
			var drppostitoimipaikka = jQuery('#drppostitoimipaikka').val();
			var txtpostinumero = jQuery('#txtpostinumero').val();

			jQuery.ajax({
		        type : "post",
		        dataType : "json",
		        url : doAjax.ajaxurl,
		        data : {
		        	action: "add_new_patient", 
		        	nonce: nonce, // security matters
		        	txthktunnus: txthktunnus,
		        	txtsukunimi: txtsukunimi,
		        	txtetunimi: txtetunimi,
		        	txtpnumero: txtpnumero,
		        	txtsposti: txtsposti,
		        	txtkotiosoite: txtkotiosoite,
		        	drppostitoimipaikka: drppostitoimipaikka,
		        	txtpostinumero: txtpostinumero
		        },
		        success: function(response) {
		            if(response.type == "success") {
		               alert(response.message);
		               location.reload();
		            }
		            else {
		               alert("Error encountered during saving the data.");
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
