<?php
    $tab3 = get_post_meta( get_the_ID(), 'tab_3', true ); 
    
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
    
    <!-- start Ekstraoraalitutkimus -->
    <div class="panel panel-default">
        <div class="panel-heading">Ekstraoraalitutkimus</div>
        <div class="panel-body">

            <table class="table table-hover">
                <tbody>
                    <tr class="tr-top"> 
                        <th>Suupielet</th>
                        <td>
                            <span class="strong-green"><?php
                                //mypost_meta_data($post_id, $key, $replacement, $encrypted = false, $hash = null) 
                                echo mypost_meta_data(get_the_ID(), 'patient_chksuupielet', "Muutoksia", true, $hash); 
                            ?></span>
                            <?php echo mypost_meta_data(get_the_ID(), 'patient_txtsuupielet', "", true, $hash); ?>
                        </td>
                    </tr>
                    <tr> 
                        <th>Huulet</th>
                        <td>
                            <span class="strong-green"><?php
                                echo mypost_meta_data(get_the_ID(), 'patient_chkhuulet', "Muutoksia", true, $hash); 
                            ?></span>
                            <?php echo mypost_meta_data(get_the_ID(), 'patient_txthuulet', "", true, $hash); ?>
                        </td>
                    </tr>
                    <tr> 
                        <th>Imusolmukkeet</th>
                        <td>
                            <span class="strong-green"><?php
                                echo mypost_meta_data(get_the_ID(), 'patient_chkimusolmukkeet', "Muutoksia", true, $hash); 
                            ?></span>
                            <?php echo mypost_meta_data(get_the_ID(), 'patient_txtimusolmukkeet', "", true, $hash); ?>
                        </td>
                    </tr>
                    <tr> 
                        <th>Poimut</th>
                        <td>
                            <span class="strong-green"><?php
                                echo mypost_meta_data(get_the_ID(), 'patient_chkpoimut', "Muutoksia", true, $hash); 
                            ?></span>
                            <?php echo mypost_meta_data(get_the_ID(), 'patient_txtpoimut', "", true, $hash); ?>
                        </td>
                    </tr>
                    <tr> 
                        <th>Arvet</th>
                        <td>
                            <span class="strong-green"><?php
                                echo mypost_meta_data(get_the_ID(), 'patient_chkarvet', "Muutoksia", true, $hash); 
                            ?></span>
                            <?php echo mypost_meta_data(get_the_ID(), 'patient_txtarvet', "", true, $hash); ?>
                        </td>
                    </tr>
                    <tr> 
                        <th>Muuta huomioitavaa</th>
                        <td>
                            <?php echo mypost_meta_data(get_the_ID(), 'patient_txtmhuomioitavaa', "", true, $hash); ?>
                        </td>
                    </tr>

                </tbody>
            </table>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th><h4>Leukanivelet</h4></th>
                        <th><h4>Oikea</h4></th>
                        <th><h4>Vasen</h4></th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td><label>Liikkuvus</label></td>
                        <td>
                            <?php echo mypost_meta_data(get_the_ID(), 'patient_chkliikkuvuso', "Rajoitt.", true, $hash); ?>
                        </td>
                        <td>
                            <?php echo mypost_meta_data(get_the_ID(), 'patient_chkliikkuvusv', "Rajoitt.", true, $hash); ?>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Aristusta</label></td>
                        <td>
                            <?php echo mypost_meta_data(get_the_ID(), 'patient_chkaristustao', "Rajoitt.", true, $hash); ?>
                        </td>
                        <td>
                            <?php echo mypost_meta_data(get_the_ID(), 'patient_chkaristustav', "Rajoitt.", true, $hash); ?>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Rahinaa, naksahtelua</label></td>
                        <td>
                            <?php echo mypost_meta_data(get_the_ID(), 'patient_chkrnaksahteluao', "Rajoitt.", true, $hash); ?>
                        </td>
                        <td>
                            <?php echo mypost_meta_data(get_the_ID(), 'patient_chkrnaksahteluav', "Rajoitt.", true, $hash); ?>
                        </td>
                    </tr>

                </tbody>
            </table>



        </div>
    </div>
    <!-- end Ekstraoraalitutkimus -->

</div>


<div class="col-lg-6">
    
    <!-- start Intraoraalitutkimus -->
    <div class="panel panel-default">
        <div class="panel-heading">Intraoraalitutkimus</div>
        <div class="panel-body">

            <table class="table table-hover">
                <tbody>
                    <tr class="tr-top"> 
                        <th>Suuhygienia</th>
                        <td>
                            <span class="strong-green"><?php echo mypost_meta_data(get_the_ID(), 'patient_inlineSuuhygieniaOptions', "", true, $hash); ?></span>
                        </td>
                    </tr>
                    <tr> 
                        <th>Limakalvot</th>
                        <td>
                            <span class="strong-green"><?php echo mypost_meta_data(get_the_ID(), 'patient_inlineLimakalvotOptions', "", true, $hash); ?></span> <?php echo mypost_meta_data(get_the_ID(), 'patient_txtlimakalvotm', "", true, $hash); ?>
                        </td>
                    </tr>
                </tbody>
            </table>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th colspan="2"><h4>Proteesialusta</h4></th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td><label>Vähäinen ienvallin resortio</label></td>
                        <td>
                            <span class="strong-green"><?php echo mypost_meta_data(get_the_ID(), 'patient_rdovahainenir', "", true, $hash); ?></span>
                            <?php echo mypost_meta_data(get_the_ID(), 'patient_txtvahainenir', "", true, $hash); ?>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Normaali ienvallin resortio</label></td>
                        <td>
                            <span class="strong-green"><?php echo mypost_meta_data(get_the_ID(), 'patient_rdonormaaliir', "", true, $hash); ?></span>
                            <?php echo mypost_meta_data(get_the_ID(), 'patient_txtnormaaliir', "", true, $hash); ?>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Voimakas ienvallin resortio</label></td>
                        <td>
                            <span class="strong-green"><?php echo mypost_meta_data(get_the_ID(), 'patient_rdovoimakasir', "", true, $hash); ?></span>
                            <?php echo mypost_meta_data(get_the_ID(), 'patient_txtvoimakasir', "", true, $hash); ?>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Kiinteä limakalvo</label></td>
                        <td>
                            <span class="strong-green"><?php echo mypost_meta_data(get_the_ID(), 'patient_rdokiintealimakalvo', "", true, $hash); ?></span>
                            <?php echo mypost_meta_data(get_the_ID(), 'patient_txtkiintealimakalvo', "", true, $hash); ?>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Paikallinen muutos</label></td>
                        <td>
                            <span class="strong-green"><?php echo mypost_meta_data(get_the_ID(), 'patient_rdopaikallinenmuutos', "", true, $hash); ?></span>
                            <?php echo mypost_meta_data(get_the_ID(), 'patient_txtpaikallinenmuutos', "", true, $hash); ?>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Laaja muutos</label></td>
                        <td>
                            <span class="strong-green"><?php echo mypost_meta_data(get_the_ID(), 'patient_rdolaajamuutos', "", true, $hash); ?></span>
                            <?php echo mypost_meta_data(get_the_ID(), 'patient_txtlaajamuutos', "", true, $hash); ?>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Terve limakalvo</label></td>
                        <td>
                            <span class="strong-green"><?php echo mypost_meta_data(get_the_ID(), 'patient_rdotervelimakalvo', "", true, $hash); ?></span>
                            <?php echo mypost_meta_data(get_the_ID(), 'patient_txttervelimakalvo', "", true, $hash); ?>
                        </td>
                    </tr>

                     <tr>
                        <td><label>Paikallinen stomatiitti</label></td>
                        <td>
                            <span class="strong-green"><?php echo mypost_meta_data(get_the_ID(), 'patient_rdopaikallinenstomatiitti', "", true, $hash); ?></span>
                            <?php echo mypost_meta_data(get_the_ID(), 'patient_txtpaikallinenstomatiitti', "", true, $hash); ?>
                        </td>
                    </tr>

                     <tr>
                        <td><label>Yleinen stomatiitti</label></td>
                        <td>
                            <span class="strong-green"><?php echo mypost_meta_data(get_the_ID(), 'patient_rdoyleinenstomatiitti', "", true, $hash); ?></span>
                            <?php echo mypost_meta_data(get_the_ID(), 'patient_txtyleinenstomatiitti', "", true, $hash); ?>
                        </td>
                    </tr>

                    
                </tbody>
            </table>



        </div>
    </div>
    <!-- end Intraoraalitutkimus -->

</div>



<div class="col-lg-12">

    <hr/>

    <a href="?t=3&action=edit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>

</div>

<?php }

?>