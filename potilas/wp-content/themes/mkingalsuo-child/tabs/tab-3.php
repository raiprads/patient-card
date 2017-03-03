<?php
    $tab2 = get_post_meta( get_the_ID(), 'tab_3', true ); 
    
    if(empty($tab3)) {
?>
<div class="col-lg-12">
<a href="?t=3&action=edit" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add data</a>
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



<div class="col-lg-12">

    <hr/>

    <a href="?t=3&action=edit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>

</div>

<?php }

?>