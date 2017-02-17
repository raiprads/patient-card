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
    
    <!-- start Esitiedot -->
    <div class="panel panel-default">
        <div class="panel-heading">Esitiedot</div>
        <div class="panel-body">

        	<table class="table table-hover">
				<tbody>
					<tr class="tr-top"> 
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
		                <td><?php echo mypost_meta_data(get_the_ID(), 'patient_chkreuma', "Kyllä", true, $hash);  ?></td>
		            </tr>
		            <tr> 
		                <th>Sydän- ja verisuonisairaus</th>
		                <td><?php echo mypost_meta_data(get_the_ID(), 'patient_chksjverisuonisairaus', "Kyllä", true, $hash);  ?></td>
		            </tr>
		            <tr> 
		                <th>Veri- ja verenvuototaudit</th>
		                <td>
		                	<?php echo mypost_meta_data(get_the_ID(), 'patient_chkvjverenvuototaudit', "Kyllä", true, $hash); ?>
		                </td>
		            </tr>
		            <tr> 
		                <th>Päänalueen sädehoito</th>
		                <td>
		                	<?php echo mypost_meta_data(get_the_ID(), 'patient_chkpsadehoito', "Kyllä", true, $hash); ?>
		                </td>
		            </tr>
		            <tr> 
		                <th>Epilepsia</th>
		                <td>
		                	<?php echo mypost_meta_data(get_the_ID(), 'patient_chkepilepsia', "Kyllä", true, $hash); ?>
		                </td>
		            </tr>
		            <tr> 
		                <th>Tarttuva tauti</th>
		                <td>
		                	<?php echo mypost_meta_data(get_the_ID(), 'patient_txtttauti', "", true, $hash); ?>
		                </td>
		            </tr>
		            <tr> 
		                <th>Muut sairaudet</th>
		                <td>
		                	<?php echo mypost_meta_data(get_the_ID(), 'patient_txtmsairaudet', "", true, $hash); ?>
		                </td>
		            </tr>
		            <tr> 
		                <th>Lääkitys</th>
		                <td>
		                	<?php echo mypost_meta_data(get_the_ID(), 'patient_txtlaakitys', "", true, $hash); ?>
		                </td>
		            </tr>
		            <tr> 
		                <th>Syljeneritys</th>
		                <td>
		                	<?php echo mypost_meta_data(get_the_ID(), 'patient_chksyljeneritys', "Alentunnut", true, $hash); ?>
		                </td>
		            </tr>

				</tbody>
			</table>

        </div>
    </div>
    <!-- end Esitiedot -->

</div>

<div class="col-lg-6">
    
    <!-- start Aikaisempi Hampaiden Hoito -->
    <div class="panel panel-default">
        <div class="panel-heading">Aikaisempi Hampaiden Hoito</div>
        <div class="panel-body">

        	<table class="table table-hover">
				<tbody>
					<tr class="tr-top"> 
		                <td colspan="2">
		                	<?php
			                    echo mypost_meta_data(get_the_ID(), 'patient_txtaahhoito', "", true, $hash); 
		                	?>
		                </td>
		            </tr>
		            <tr> 
		                <th>Vuosi</th>
		                <td><?php echo mypost_meta_data(get_the_ID(), 'patient_txtvuosi', "", true, $hash);  ?></td>
		            </tr>
		            <tr> 
		                <th>Aikaisemmat proteesit</th>
		                <td><?php echo mypost_meta_data(get_the_ID(), 'patient_chkaproteesit', "On", true, $hash);  ?></td>
		            </tr>
		            <tr class="tr-top">
		            	<th colspan="2">
		            		<h4>Millaiset</h4>
		            	</th>
		            </tr>
		            <tr> 
		                <th>YL</th>
		                <td>
		                	<?php echo mypost_meta_data(get_the_ID(), 'patient_chkmillaisetyl', "Kyllä", true, $hash); ?>
		                </td>
		            </tr>
		            <tr> 
		                <th>AL</th>
		                <td>
		                	<?php echo mypost_meta_data(get_the_ID(), 'patient_chkmillaisetal', "Kyllä", true, $hash); ?>
		                </td>
		            </tr>
		            <tr class="tr-top"> 
		                <th colspan="2"></th>
		            </tr>
		            <tr class="tr-top"> 
		                <th>Valmistettu v.</th>
		                <td>
		                	<?php echo mypost_meta_data(get_the_ID(), 'patient_txtvalmistettuv', "", true, $hash); ?>
		                </td>
		            </tr>
		            <tr> 
		                <th>Pohjattu v.</th>
		                <td>
		                	<?php echo mypost_meta_data(get_the_ID(), 'patient_txtpohjattuv', "", true, $hash); ?>
		                </td>
		            </tr>
		            <tr> 
		                <th>Korjattu v.</th>
		                <td>
		                	<?php echo mypost_meta_data(get_the_ID(), 'patient_txtkorjattuv', "", true, $hash); ?>
		                </td>
		            </tr>
		            <tr class="tr-top">
		            	<th colspan="2">
		            		<h4>Potilaan mielipide proteeseitaan</h4>
		            	</th>
		            </tr>
		            <tr> 
		                <th>Tyytyväinen ulkonäköön</th>
		                <td>
		                	<?php echo mypost_meta_data(get_the_ID(), 'patient_chkpmptulkonakoon', "Kyllä", true, $hash); ?>
		                </td>
		            </tr>
		            <tr> 
		                <th>Tyytyväinen pureskelukykyyn</th>
		                <td>
		                	<?php echo mypost_meta_data(get_the_ID(), 'patient_chkpmptpureskelukykyyn', "Kyllä", true, $hash); ?>
		                </td>
		            </tr>
		            <tr class="tr-top"> 
		                <th colspan="2"></th>
		            </tr>
		            <tr class="tr-top"> 
		                <th colspan="2">Havainnot entisistä proteeseistä</th>
		            </tr>
		            <tr>
		                <td colspan="2">
		                	<?php echo mypost_meta_data(get_the_ID(), 'patient_txtaheproteeseista', "", true, $hash); ?>
		                </td>
		            </tr>
		            <tr class="tr-top">
		            	<th colspan="2">
		            		<h4>Purenta</h4>
		            	</th>
		            </tr>
		            <tr> 
		                <th>Ant.</th>
		                <td>
		                	<?php echo mypost_meta_data(get_the_ID(), 'patient_chkpurentaant', "Kyllä", true, $hash); ?>
		                </td>
		            </tr>
		            <tr> 
		                <th>Post.</th>
		                <td>
		                	<?php echo mypost_meta_data(get_the_ID(), 'patient_chkpurentapost', "Kyllä", true, $hash); ?>
		                </td>
		            </tr>
		            <tr> 
		                <th>Ristipur.</th>
		                <td>
		                	<?php echo mypost_meta_data(get_the_ID(), 'patient_chkpurentaristipur', "Kyllä", true, $hash); ?>
		                </td>
		            </tr>
		            <tr class="tr-top"> 
		                <th colspan="2"></th>
		            </tr>
		            <tr class="tr-top"> 
		                <th>Vapaaväli mm.</th>
		                <td>
		                	<?php echo mypost_meta_data(get_the_ID(), 'patient_txtvapaavalimm', "", true, $hash); ?>
		                </td>
		            </tr>
		            <tr> 
		                <th>Purentakorkeus mm.</th>
		                <td>
		                	<?php echo mypost_meta_data(get_the_ID(), 'patient_txtpurentakorkeusmm', "", true, $hash); ?>
		                </td>
		            </tr>

				</tbody>
			</table>

        </div>
    </div>
    <!-- end Aikaisempi Hampaiden Hoito -->

</div>

<div class="col-lg-12">

    <hr/>

    <a href="?t=2&action=edit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>

</div>

<?php }

?>