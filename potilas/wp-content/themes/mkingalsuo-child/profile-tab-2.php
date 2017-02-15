<?php
    $tab2 = get_post_meta( get_the_ID(), 'tab_2', true ); 
    
    if(empty($tab2)) {
?>
<div class="col-lg-12">
<a href="?t=2&action=edit" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add data</a>
</div>
<?php 

} else { 

	$hash = get_the_content();

?>
<div class="col-lg-6">
    
    <!-- start henkilötiedot -->
    <div class="panel panel-default">
        <div class="panel-heading">Esitiedot</div>
        <div class="panel-body">

        	<table class="table">
				<tbody>
					<tr> 
		                <th>Yliherkkyys</th>
		                <td>
		                	<?php
			                    //mypost_meta_data($post_id, $key, $replacement, $encrypted = false, $hash = null) 
			                    echo mypost_meta_data(get_the_ID(), 'patient_chkyliherkkyys', "Kyllä", true, $hash); 
		                	?>
		                </td>
		            </tr>
		            <tr> 
		                <th>Reuma</th>
		                <td><?php echo mypost_meta_data(get_the_ID(), 'patient_chksjverisuonisairaus', "Kyllä", true, $hash);  ?></td>
		            </tr>
		            <tr> 
		                <th>Sydän- ja verisuonisairaus</th>
		                <td><?php echo get_post_meta( get_the_ID(), 'patient_etunimi', true ); ?></td>
		            </tr>
		            <tr> 
		                <th>Veri- ja verenvuototaudit</th>
		                <td>
		                	<?php
		                		$pnumero = get_post_meta( get_the_ID(), 'patient_puhkotiin', true ); 
			                    echo decrypt_data($pnumero, $hash);
		                	?>
		                </td>
		            </tr>
		            <tr> 
		                <th>Päänalueen sädehoito</th>
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

</div>
<?php }

?>