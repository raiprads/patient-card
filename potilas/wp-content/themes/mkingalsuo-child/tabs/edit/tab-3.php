<?php
    $hash = get_the_content();
?>
<form id="form-update-tab3" method="post" class="form-horizontal">
<input type="hidden" id="nonce" name="nonce" value="<?php echo wp_create_nonce("update_patient_tab3_nonce"); ?>">
<input type="hidden" name="post_id" id="post_id" value="<?php echo get_the_ID(); ?>">
<input type="hidden" name="action" value="update_patient_tab3">

<div id="ajax_message"></div>

    <!-- start Ekstraoraalitutkimus -->
    <div class="col-lg-6">

        <h3>Ekstraoraalitutkimus</h3>

        <div class="form-group">
            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chksuupielet" name="chksuupielet" data-size="mini" data-toggle="toggle" data-on="Muutoksia" data-off="Terveet" <?php echo mypost_meta_data(get_the_ID(), 'patient_chksuupielet', "checked", true, $hash); 
                ?>>
            </div>
            <label class="col-md-10 col-lg-10">Suupielet</label>
            <div class="col-md-2 col-lg-2"></div>
            <div class="col-md-8 col-lg-8">
                <input type="text" class="form-control" id="txtsuupielet" name="txtsuupielet" value="<?php echo mypost_meta_data(get_the_ID(), 'patient_txtsuupielet', '', true, $hash); 
                ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chkhuulet" name="chkhuulet" data-size="mini" data-toggle="toggle" data-on="Muutoksia" data-off="Terveet" <?php echo mypost_meta_data(get_the_ID(), 'patient_chkhuulet', "checked", true, $hash); 
                ?>>
            </div>
            <label class="col-md-10 col-lg-10">Huulet</label>
            <div class="col-md-2 col-lg-2"></div>
            <div class="col-md-8 col-lg-8">
                <input type="text" class="form-control" id="txthuulet" name="txthuulet" value="<?php echo mypost_meta_data(get_the_ID(), 'patient_txthuulet', '', true, $hash); 
                ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chkimusolmukkeet" name="chkimusolmukkeet" data-size="mini" data-toggle="toggle" data-on="Muutoksia" data-off="Terveet" <?php echo mypost_meta_data(get_the_ID(), 'patient_chkimusolmukkeet', "checked", true, $hash); 
                ?>>
            </div>
            <label class="col-md-10 col-lg-10">Imusolmukkeet</label>
            <div class="col-md-2 col-lg-2"></div>
            <div class="col-md-8 col-lg-8">
                <input type="text" class="form-control" id="txtimusolmukkeet" name="txtimusolmukkeet" value="<?php echo mypost_meta_data(get_the_ID(), 'patient_txtimusolmukkeet', '', true, $hash); 
                ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chkpoimut" name="chkpoimut" data-size="mini" data-toggle="toggle" data-on="On" data-off="Ei" <?php echo mypost_meta_data(get_the_ID(), 'patient_chkpoimut', "checked", true, $hash); 
                ?>>
            </div>
            <label class="col-md-10 col-lg-10">Poimut</label>
            <div class="col-md-2 col-lg-2"></div>
            <div class="col-md-8 col-lg-8">
                <input type="text" class="form-control" id="txtpoimut" name="txtpoimut" value="<?php echo mypost_meta_data(get_the_ID(), 'patient_txtpoimut', '', true, $hash); 
                ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chkarvet" name="chkarvet" data-size="mini" data-toggle="toggle" data-on="On" data-off="Ei" <?php echo mypost_meta_data(get_the_ID(), 'patient_chkarvet', "checked", true, $hash); 
                ?>>
            </div>
            <label class="col-md-10 col-lg-10">Arvet</label>
            <div class="col-md-2 col-lg-2"></div>
            <div class="col-md-8 col-lg-8">
                <input type="text" class="form-control" id="txtarvet" name="txtarvet" value="<?php echo mypost_meta_data(get_the_ID(), 'patient_txtarvet', '', true, $hash); 
                ?>">
            </div>
        </div>

        <div class="form-group col-md-12 col-lg-12">
            <label>Muuta huomioitavaa</label>
            <input type="text" class="form-control" id="txtmhuomioitavaa" name="txtmhuomioitavaa" value="<?php echo mypost_meta_data(get_the_ID(), 'patient_txtmhuomioitavaa', '', true, $hash); 
                ?>">
        </div>

        <div class="form-group col-md-12 col-lg-12">
            
            <table class="table">
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
                            <input type="checkbox" id="chkliikkuvuso" name="chkliikkuvuso" data-size="mini" data-toggle="toggle" data-on="Rajoitt." data-off="Vap" <?php echo mypost_meta_data(get_the_ID(), 'patient_chkliikkuvuso', "checked", true, $hash); 
                            ?>>
                        </td>
                        <td>
                            <input type="checkbox" id="chkliikkuvusv" name="chkliikkuvusv" data-size="mini" data-toggle="toggle" data-on="Rajoitt." data-off="Vap" <?php echo mypost_meta_data(get_the_ID(), 'patient_chkliikkuvusv', "checked", true, $hash); 
                            ?>>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Aristusta</label></td>
                        <td>
                            <input type="checkbox" id="chkaristustao" name="chkaristustao" data-size="mini" data-toggle="toggle" data-on="Rajoitt." data-off="Vap" <?php echo mypost_meta_data(get_the_ID(), 'patient_chkaristustao', "checked", true, $hash); ?>>
                        </td>
                        <td>
                            <input type="checkbox" id="chkaristustav" name="chkaristustav" data-size="mini" data-toggle="toggle" data-on="Rajoitt." data-off="Vap" <?php echo mypost_meta_data(get_the_ID(), 'patient_chkaristustav', "checked", true, $hash); ?>>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Rahinaa, naksahtelua</label></td>
                        <td>
                            <input type="checkbox" id="chkrnaksahteluao" name="chkrnaksahteluao" data-size="mini" data-toggle="toggle" data-on="Rajoitt." data-off="Vap" <?php echo mypost_meta_data(get_the_ID(), 'patient_chkrnaksahteluao', "checked", true, $hash); ?>>
                        </td>
                        <td>
                            <input type="checkbox" id="chkrnaksahteluav" name="chkrnaksahteluav" data-size="mini" data-toggle="toggle" data-on="Rajoitt." data-off="Vap" <?php echo mypost_meta_data(get_the_ID(), 'patient_chkrnaksahteluav', "checked", true, $hash); ?>>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
                    

    </div>
    <!-- end Ekstraoraalitutkimus -->

    <!-- start Intraoraalitutkimus -->
    <div class="col-lg-6">

        <h3>Intraoraalitutkimus</h3>

        <div class="form-group">
            <div class="col-md-12 col-lg-12">
                <label>Suuhygienia</label>
            </div>

            <?php $inlineSuuhygieniaOptions = mypost_meta_data(get_the_ID(), 'patient_inlineSuuhygieniaOptions', "", true, $hash); ?>
            
            <div class="col-md-12 col-lg-12">
                <label class="radio-inline">
                  <input type="radio" name="inlineSuuhygieniaOptions" id="rdosuuhygieniah" value="hyvä"

                    <?php if($inlineSuuhygieniaOptions == "hyvä") { echo "checked"; } ?>

                  > Hyvä
                </label>
                <label class="radio-inline">
                  <input type="radio" name="inlineSuuhygieniaOptions" id="rdosuuhygieniak" value="kohtalainen"

                    <?php if($inlineSuuhygieniaOptions == "kohtalainen") { echo "checked"; } ?>

                  > Kohtalainen
                </label>
                <label class="radio-inline">
                  <input type="radio" name="inlineSuuhygieniaOptions" id="rdosuuhygieniahu" value="huono"

                    <?php if($inlineSuuhygieniaOptions == "huono") { echo "checked"; } ?>

                  > Huono
                </label>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12 col-lg-12">
                <label>Limakalvot</label>
            </div>

            <?php $inlineLimakalvotOptions = mypost_meta_data(get_the_ID(), 'patient_inlineLimakalvotOptions', "", true, $hash); ?>

            <div class="col-md-12 col-lg-12">
                <label class="radio-inline">
                  <input type="radio" name="inlineLimakalvotOptions" id="rdolimakalvott" value="terveet"

                    <?php if($inlineLimakalvotOptions == "terveet") { echo "checked"; } ?>

                  > Terveet
                </label>
                <label class="radio-inline">
                  <input type="radio" name="inlineLimakalvotOptions" id="rdolimakalvotm" value="muutoksia"

                    <?php if($inlineLimakalvotOptions == "muutoksia") { echo "checked"; } ?>

                  > Muutoksia
                </label>
            </div>
            <div class="col-md-12 col-lg-12 top10">
                <input class="form-control" id="txtlimakalvotm" name="txtlimakalvotm" type="text" value="<?php echo mypost_meta_data(get_the_ID(), 'patient_txtlimakalvotm', "", true, $hash); ?>">
            </div>
        </div>

        <div class="form-group col-md-12 col-lg-12">
            
            <table class="table">
                <thead>
                    <tr>
                        <th><h4>Proteesialusta</h4></th>
                        <th><h4>YL</h4></th>
                        <th><h4>AL</h4></th>
                        <th><h4>&nbsp;</h4></th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td><label>Vähäinen ienvallin resortio</label></td>

                        <?php $rdovahainenir = mypost_meta_data(get_the_ID(), 'patient_rdovahainenir', "", true, $hash); ?>

                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdovahainenir" value="yl"

                                        <?php if($rdovahainenir == "yl") { echo "checked"; } ?>

                                    >
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdovahainenir" value="al"

                                        <?php if($rdovahainenir == "al") { echo "checked"; } ?>

                                    >
                              </label>
                            </div>
                        </td>
                        <td>
                            <input class="form-control" id="txtvahainenir" name="txtvahainenir" type="text" value="<?php echo mypost_meta_data(get_the_ID(), 'patient_txtvahainenir', "", true, $hash); ?>">
                        </td>
                    </tr>

                    <tr>
                        <td><label>Normaali ienvallin resortio</label></td>

                        <?php $rdonormaaliir = mypost_meta_data(get_the_ID(), 'patient_rdonormaaliir', "", true, $hash); ?>

                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdonormaaliir" value="yl"

                                        <?php if($rdonormaaliir == "yl") { echo "checked"; } ?>

                                    >
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdonormaaliir" value="al"

                                        <?php if($rdonormaaliir == "al") { echo "checked"; } ?>

                                    >
                              </label>
                            </div>
                        </td>
                        <td>
                            <input class="form-control" id="txtnormaaliir" name="txtnormaaliir" type="text" value="<?php echo mypost_meta_data(get_the_ID(), 'patient_txtnormaaliir', "", true, $hash); ?>">
                        </td>
                    </tr>

                    <tr>
                        <td><label>Voimakas ienvallin resortio</label></td>

                        <?php $rdovoimakasir = mypost_meta_data(get_the_ID(), 'patient_rdovoimakasir', "", true, $hash); ?>

                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdovoimakasir" value="yl"

                                        <?php if($rdovoimakasir == "yl") { echo "checked"; } ?>

                                    >
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdovoimakasir" value="al"

                                        <?php if($rdovoimakasir == "al") { echo "checked"; } ?>

                                    >
                              </label>
                            </div>
                        </td>
                        <td>
                            <input class="form-control" id="txtvoimakasir" name="txtvoimakasir" type="text" value="<?php echo mypost_meta_data(get_the_ID(), 'patient_txtvoimakasir', "", true, $hash); ?>">
                        </td>
                    </tr>

                    <tr>
                        <td><label>Kiinteä limakalvo</label></td>
                        <td>

                            <?php $rdokiintealimakalvo = mypost_meta_data(get_the_ID(), 'patient_rdokiintealimakalvo', "", true, $hash); ?>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdokiintealimakalvo" value="yl"

                                        <?php if($rdokiintealimakalvo == "yl") { echo "checked"; } ?>

                                    >
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdokiintealimakalvo" value="al"

                                        <?php if($rdokiintealimakalvo == "al") { echo "checked"; } ?>

                                    >
                              </label>
                            </div>
                        </td>
                        <td>
                            <input class="form-control" id="txtkiintealimakalvo" name="txtkiintealimakalvo" type="text" value="<?php echo mypost_meta_data(get_the_ID(), 'patient_txtkiintealimakalvo', "", true, $hash); ?>">
                        </td>
                    </tr>

                    <tr>
                        <td><label>Paikallinen muutos</label></td>
                        <td>

                            <?php $rdopaikallinenmuutos = mypost_meta_data(get_the_ID(), 'patient_rdopaikallinenmuutos', "", true, $hash); ?>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdopaikallinenmuutos" value="yl"

                                        <?php if($rdopaikallinenmuutos == "yl") { echo "checked"; } ?>

                                    >
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdopaikallinenmuutos" value="al"

                                        <?php if($rdopaikallinenmuutos == "al") { echo "checked"; } ?>

                                    >
                              </label>
                            </div>
                        </td>
                        <td>
                            <input class="form-control" id="txtpaikallinenmuutos" name="txtpaikallinenmuutos" type="text" value="<?php echo mypost_meta_data(get_the_ID(), 'patient_txtpaikallinenmuutos', "", true, $hash); ?>">
                        </td>
                    </tr>

                    <tr>
                        <td><label>Laaja muutos</label></td>
                        <td>
                            
                            <?php $rdolaajamuutos = mypost_meta_data(get_the_ID(), 'patient_rdolaajamuutos', "", true, $hash); ?>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdolaajamuutos" value="yl"

                                        <?php if($rdolaajamuutos == "yl") { echo "checked"; } ?>

                                    >
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdolaajamuutos" value="al"

                                        <?php if($rdolaajamuutos == "al") { echo "checked"; } ?>

                                    >
                              </label>
                            </div>
                        </td>
                        <td>
                            <input class="form-control" id="txtlaajamuutos" name="txtlaajamuutos"  type="text" value="<?php echo mypost_meta_data(get_the_ID(), 'patient_txtlaajamuutos', "", true, $hash); ?>">
                        </td>
                    </tr>

                    <tr>
                        <td><label>Terve limakalvo</label></td>
                        <td>

                            <?php $rdotervelimakalvo = mypost_meta_data(get_the_ID(), 'patient_rdotervelimakalvo', "", true, $hash); ?>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdotervelimakalvo" value="yl"

                                        <?php if($rdotervelimakalvo == "yl") { echo "checked"; } ?>

                                    >
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdotervelimakalvo" value="al"

                                        <?php if($rdotervelimakalvo == "al") { echo "checked"; } ?>

                                    >
                              </label>
                            </div>
                        </td>
                        <td>
                            <input class="form-control" id="txttervelimakalvo" name="txttervelimakalvo" type="text" value="<?php echo mypost_meta_data(get_the_ID(), 'patient_txttervelimakalvo', "", true, $hash); ?>">
                        </td>
                    </tr>

                    <tr>
                        <td><label>Paikallinen stomatiitti</label></td>
                        <td>
                            
                            <?php $rdopaikallinenstomatiitti = mypost_meta_data(get_the_ID(), 'patient_rdopaikallinenstomatiitti', "", true, $hash); ?>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdopaikallinenstomatiitti" value="yl"

                                        <?php if($rdopaikallinenstomatiitti == "yl") { echo "checked"; } ?>

                                    >
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdopaikallinenstomatiitti" value="al"

                                        <?php if($rdopaikallinenstomatiitti == "al") { echo "checked"; } ?>

                                    >
                              </label>
                            </div>
                        </td>
                        <td>
                            <input class="form-control" id="txtpaikallinenstomatiitti" name="txtpaikallinenstomatiitti" type="text" value="<?php echo mypost_meta_data(get_the_ID(), 'patient_txtpaikallinenstomatiitti', "", true, $hash); ?>">
                        </td>
                    </tr>

                    <tr>
                        <td><label>Yleinen stomatiitti</label></td>
                        <td>
                            
                            <?php $rdoyleinenstomatiitti = mypost_meta_data(get_the_ID(), 'patient_rdoyleinenstomatiitti', "", true, $hash); ?>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdoyleinenstomatiitti" value="yl"

                                        <?php if($rdoyleinenstomatiitti == "yl") { echo "checked"; } ?>

                                    >
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdoyleinenstomatiitti" value="al"

                                        <?php if($rdoyleinenstomatiitti == "al") { echo "checked"; } ?>

                                    >
                              </label>
                            </div>
                        </td>
                        <td>
                            <input class="form-control" id="txtyleinenstomatiitti" name="txtyleinenstomatiitti" type="text" value="<?php echo mypost_meta_data(get_the_ID(), 'patient_txtyleinenstomatiitti', "", true, $hash); ?>">
                        </td>
                    </tr>


                </tbody>
            </table>

        </div>

        

    </div>
    <!-- end Intraoraalitutkimus -->

    
    <div class="col-lg-12">

        <hr/>

        <button type="submit" class="btn btn-primary" id="btn-add-update" ><i class="fa fa-save"></i> Update</button>
        <button type="button" class="btn btn-default" onclick="window.location = '<?php echo get_the_permalink()."?t=3"; ?>'" ><i class="fa fa-arrow-left"></i> Back</button>

    </div>

</form>