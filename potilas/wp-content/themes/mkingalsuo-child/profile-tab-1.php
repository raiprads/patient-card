<?php

$hash = get_the_content();

?>

<div class="col-lg-6">
	
	<!-- start henkilötiedot -->
	<div class="panel panel-default">
	  	<div class="panel-heading">Henkilötiedot</div>
	 	<div class="panel-body">
	 		
	 		<table class="table">
				<tbody>
					<tr> 
		                <th>Henkilötunnus</th>
		                <td>
		                	<?php
		                		$hktunnus = get_post_meta( get_the_ID(), 'patient_hktunnus', true ); 
			                    echo decrypt_data($hktunnus, $hash);
		                	?>
		                </td>
		            </tr>
		            <tr> 
		                <th>Sukunimi</th>
		                <td><?php echo get_post_meta( get_the_ID(), 'patient_sukunimi', true ); ?></td>
		            </tr>
		            <tr> 
		                <th>Etunimi</th>
		                <td><?php echo get_post_meta( get_the_ID(), 'patient_etunimi', true ); ?></td>
		            </tr>
		            <tr> 
		                <th>Puhelinnumero</th>
		                <td>
		                	<?php
		                		$pnumero = get_post_meta( get_the_ID(), 'patient_puhkotiin', true ); 
			                    echo decrypt_data($pnumero, $hash);
		                	?>
		                </td>
		            </tr>
		            <tr> 
		                <th>Sähköposti</th>
		                <td>
		                	<?php
		                		$sposti = get_post_meta( get_the_ID(), 'patient_sposti', true ); 
			                    echo decrypt_data($sposti, $hash);
		                	?>
		                </td>
		            </tr>
				</tbody>
			</table>

	 	</div>
	</div>
	<!-- end henkilötiedot -->

	<!-- start osoite -->
	<div class="panel panel-default">
	  	<div class="panel-heading">Osoite</div>
	 	<div class="panel-body">
	 		
	 		<table class="table">
				<tbody>
					<tr> 
		                <th>Kotiosoite</th>
		                <td>
		                	<?php
		                		$kotiosoite = get_post_meta( get_the_ID(), 'patient_kotiosoite', true ); 
			                    echo decrypt_data($kotiosoite, $hash);
		                	?>
		                </td>
		            </tr>
		            <tr> 
		                <th>Postitoimipaikka</th>
		                <td><?php echo get_post_meta( get_the_ID(), 'patient_postitoimipaikka', true ); ?></td>
		            </tr>
		            <tr> 
		                <th>Postinumero</th>
		                <td>
		                	<?php
		                		$postinumero = get_post_meta( get_the_ID(), 'patient_postinumero', true ); 
			                    echo decrypt_data($postinumero, $hash);
		                	?>
		                </td>
		            </tr>
				</tbody>
			</table>

	 	</div>
	</div>
	<!-- end osoite -->

	<!-- start työpaikka -->
	<div class="panel panel-default">
	  	<div class="panel-heading">Työpaikka</div>
	 	<div class="panel-body">
	 		
	 		<table class="table">
				<tbody>
					<tr> 
		                <th>Ammatti</th>
		                <td>
		                	<?php
		                		$ammatti = get_post_meta( get_the_ID(), 'patient_ammatti', true ); 
			                    echo decrypt_data($ammatti, $hash);
		                	?>
		                </td>
		            </tr>
		            <tr> 
		                <th>Osoite</th>
		                <td>
		                	<?php
		                		$tyoosoite = get_post_meta( get_the_ID(), 'patient_tyoosoite', true ); 
			                    echo decrypt_data($tyoosoite, $hash);
		                	?>
		                </td>
		            </tr>
		            <tr> 
		                <th>Puh. työhön</th>
		                <td>
		                	<?php
		                		$puhtyohon = get_post_meta( get_the_ID(), 'patient_puhtyohon', true ); 
			                    echo decrypt_data($puhtyohon, $hash);
		                	?>
		                </td>
		            </tr>
				</tbody>
			</table>

	 	</div>
	</div>
	<!-- end työpaikka -->



</div>