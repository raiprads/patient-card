<?php

$hash = get_the_content();

?>

<form id="form-update-tab1" method="post">
<input type="hidden" id="mynonce" name="mynonce" value="<?php echo wp_create_nonce("update_patient_tab1_nonce"); ?>">
<input type="hidden" name="post_id" id="post_id" value="<?php echo get_the_ID(); ?>">

<div id="ajax_message"></div>

    <div class="col-lg-6">

        <h3>Henkilötiedot</h3>

        <div class="form-group col-md-12 col-lg-12">
            <label class="required">Henkilötunnus</label>
            <?php
		       $hktunnus = get_post_meta( get_the_ID(), 'patient_hktunnus', true ); 
		    ?>
            <input class="form-control" id="txthktunnus" name="txthktunnus" value="<?php echo decrypt_data($hktunnus, $hash); ?>">
        </div>

        <div class="form-group col-md-6 col-lg-6">
            <label class="required">Sukunimi</label>
            <input class="form-control" id="txtsukunimi" name="txtsukunimi"
            value="<?php echo get_post_meta( get_the_ID(), 'patient_sukunimi', true ); ?>">
        </div>

        <div class="form-group col-md-6 col-lg-6">
            <label class="required">Etunimi</label>
            <input class="form-control" id="txtetunimi" name="txtetunimi"
            value="<?php echo get_post_meta( get_the_ID(), 'patient_etunimi', true ); ?>">
        </div>

        <div class="form-group col-md-12 col-lg-12">
            <label class="required">Puh. kotiin</label>
            <?php
		        $pnumero = get_post_meta( get_the_ID(), 'patient_puhkotiin', true ); 
			?>
            <input class="form-control" id="txtpuhkotiin" name="txtpuhkotiin" value="<?php echo decrypt_data($pnumero, $hash); ?>">
        </div>

        <div class="form-group col-md-12 col-lg-12">
            <label >Sähköposti</label>
            <?php
		        $sposti = get_post_meta( get_the_ID(), 'patient_sposti', true ); 
		    ?>
            <input class="form-control" id="txtsposti" name="txtsposti"
            value="<?php echo decrypt_data($sposti, $hash); ?>">
        </div>

    </div>

    <div class="col-lg-6">

        <h3>Osoite</h3>

        <div class="form-group col-md-12 col-lg-12">
            <label class="required">Kotiosoite</label>
            <?php
		        $kotiosoite = get_post_meta( get_the_ID(), 'patient_kotiosoite', true ); 
		    ?>
            <input class="form-control" id="txtkotiosoite" name="txtkotiosoite"
            value="<?php echo decrypt_data($kotiosoite, $hash); ?>">
        </div>

        <div class="form-group col-md-6 col-lg-6">
            <label class="required">Postitoimipaikka</label>
            <select class="form-control" id="drppostitoimipaikka" name="drppostitoimipaikka">
            <?php 

                // Open the file
                $filename = __DIR__ . '/inc/kunnat.txt';
                $default_kunta = trim(get_post_meta( get_the_ID(), 'patient_postitoimipaikka', true ));

                $fp = @fopen($filename, 'r'); 

                // Add each line to an array
                if ($fp) {
                   $array = explode("\n", fread($fp, filesize($filename)));
                }

                for($i=0; $i < sizeof($array); $i++) {
                    if(trim($array[$i]) != $default_kunta){
                        echo '<option value="'. $array[$i] .'">'. $array[$i] .'</option>';
                    }else {
                        echo '<option value="'. $array[$i] .'" selected = "selected">'. $array[$i] .'</option>';
                    }
                }
            ?>
            </select>
        </div>

        <div class="form-group col-md-6 col-lg-6">
            <label class="required">Postinumero</label>
            <?php
		        $postinumero = get_post_meta( get_the_ID(), 'patient_postinumero', true ); 
		    ?>
		    <input class="form-control" id="txtpostinumero" name="txtpostinumero"
		    value="<?php echo decrypt_data($postinumero, $hash); ?>">
        </div>

        <h3>Työpaikka</h3>

        <div class="form-group col-md-6 col-lg-6">
            <label>Ammatti</label>
            <?php
		        $ammatti = get_post_meta( get_the_ID(), 'patient_ammatti', true ); 
		    ?>
		    <input class="form-control" id="txtammatti" name="txtammatti" 
		    value="<?php echo decrypt_data($ammatti, $hash); ?>">
        </div>

        <div class="form-group col-md-6 col-lg-6">
            <label>Puh. työhön</label>
            <?php
		        $tyoosoite = get_post_meta( get_the_ID(), 'patient_tyoosoite', true ); 
		    ?>
		    <input class="form-control" id="txtpuhtyohon" name="txtpuhtyohon"
		    value="<?php echo decrypt_data($tyoosoite, $hash); ?>">
        </div> 

        <div class="form-group col-md-12 col-lg-12">
            <label>Osoite</label>
            <?php
		        $puhtyohon = get_post_meta( get_the_ID(), 'patient_puhtyohon', true ); 
		    ?>
		    <input class="form-control" id="txttyoosoite" name="txttyoosoite"
		    value="<?php echo decrypt_data($puhtyohon, $hash); ?>">
        </div>                      

    </div>

    
    <div class="col-lg-12">

        <hr/>

        <button type="submit" class="btn btn-primary" id="btn-add-new" ><i class="fa fa-save"></i> Update</button>
        <button type="button" class="btn btn-default" onclick="window.location = '<?php echo get_the_permalink()."?t=1"; ?>'" ><i class="fa fa-arrow-left"></i> Back</button>

    </div>

</form>