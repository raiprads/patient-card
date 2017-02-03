<?php 

/**
 * Template Name: Add new patient template
 *
 * @package Patient Card
 * @subpackage mkingalsuo-child
 * @since mkingalsuo-child 1.0
 */

get_header();

?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">


                        <h1 class="page-header">
                            <i class="fa fa-edit"></i> Add New Patient
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Add New Patient
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">

                    <form id="form-add-new" method="post">
                    <input type="hidden" id="mynonce" name="mynonce" value="<?php echo wp_create_nonce("add_new_patient_nonce"); ?>">
                    
                        <div class="col-lg-6">

                            <h3>Henkilötiedot</h3>

                            <div class="form-group col-md-12 col-lg-12">
                                <label class="required">Henkilötunnus</label>
                                <input class="form-control" id="txthktunnus" name="txthktunnus">
                            </div>

                            <div class="form-group col-md-6 col-lg-6">
                                <label class="required">Sukunimi</label>
                                <input class="form-control" id="txtsukunimi" name="txtsukunimi">
                            </div>

                            <div class="form-group col-md-6 col-lg-6">
                                <label class="required">Etunimi</label>
                                <input class="form-control" id="txtetunimi" name="txtetunimi">
                            </div>

                            <div class="form-group col-md-12 col-lg-12">
                                <label class="required">Puh. kotiin</label>
                                <input class="form-control" id="txtpuhkotiin" name="txtpuhkotiin">
                            </div>

                            <div class="form-group col-md-12 col-lg-12">
                                <label >Sähköposti</label>
                                <input class="form-control" id="txtsposti" name="txtsposti">
                            </div>

                        </div>

                        <div class="col-lg-6">

                            <h3>Osoite</h3>

                            <div class="form-group col-md-12 col-lg-12">
                                <label class="required">Kotiosoite</label>
                                <input class="form-control" id="txtkotiosoite" name="txtkotiosoite">
                            </div>

                            <div class="form-group col-md-6 col-lg-6">
                                <label class="required">Postitoimipaikka</label>

                                <select class="form-control" id="drppostitoimipaikka" name="drppostitoimipaikka">
                                <?php 

                                    // Open the file
                                    $filename = __DIR__ . '/inc/kunnat.txt';
                                    $default_kunta = 'Kangasala';

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
                                <input class="form-control" id="txtpostinumero" name="txtpostinumero">
                            </div>

                            <h3>Työpaikka</h3>

                            <div class="form-group col-md-6 col-lg-6">
                                <label>Ammatti</label>
                                <input class="form-control" id="txtammatti" name="txtammatti">
                            </div>

                            <div class="form-group col-md-6 col-lg-6">
                                <label>Puh. työhön</label>
                                <input class="form-control" id="txtpuhtyohon" name="txtpuhtyohon">
                            </div> 

                            <div class="form-group col-md-12 col-lg-12">
                                <label>Osoite</label>
                                <input class="form-control" id="txttyoosoite" name="txttyoosoite">
                            </div>                      

                        </div>

                        
                        <div class="col-lg-12">

                            <hr/>

                            <button type="submit" class="btn btn-primary" id="btn-add-new" ><i class="fa fa-save"></i> Save</button>
                            <button type="reset" class="btn btn-default"  >Reset</button>

                        </div>

                    </form>



                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


<?php get_footer(); ?>