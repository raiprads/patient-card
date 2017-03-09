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
                <input type="checkbox" id="chksuupielet" name="chksuupielet" data-size="mini" data-toggle="toggle" data-on="Muutoksia" data-off="Terveet">
            </div>
            <label class="col-md-10 col-lg-10">Suupielet</label>
            <div class="col-md-2 col-lg-2"></div>
            <div class="col-md-8 col-lg-8">
                <input class="form-control" id="txtsuupielet" name="txtsuupielet">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chkhuulet" name="chkhuulet" data-size="mini" data-toggle="toggle" data-on="Muutoksia" data-off="Terveet">
            </div>
            <label class="col-md-10 col-lg-10">Huulet</label>
            <div class="col-md-2 col-lg-2"></div>
            <div class="col-md-8 col-lg-8">
                <input class="form-control" id="txthuulet" name="txthuulet">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chkimusolmukkeet" name="chkimusolmukkeet" data-size="mini" data-toggle="toggle" data-on="Muutoksia" data-off="Terveet">
            </div>
            <label class="col-md-10 col-lg-10">Imusolmukkeet</label>
            <div class="col-md-2 col-lg-2"></div>
            <div class="col-md-8 col-lg-8">
                <input class="form-control" id="txtimusolmukkeet" name="txtimusolmukkeet">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chkpoimut" name="chkpoimut" data-size="mini" data-toggle="toggle" data-on="On" data-off="Ei">
            </div>
            <label class="col-md-10 col-lg-10">Poimut</label>
            <div class="col-md-2 col-lg-2"></div>
            <div class="col-md-8 col-lg-8">
                <input class="form-control" id="txtpoimut" name="txtpoimut">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chkarvet" name="chkarvet" data-size="mini" data-toggle="toggle" data-on="On" data-off="Ei">
            </div>
            <label class="col-md-10 col-lg-10">Arvet</label>
            <div class="col-md-2 col-lg-2"></div>
            <div class="col-md-8 col-lg-8">
                <input class="form-control" id="txtarvet" name="txtarvet">
            </div>
        </div>

        <div class="form-group col-md-12 col-lg-12">
            <label>Muuta huomioitavaa</label>
            <input class="form-control" id="txtmhuomioitavaa" name="txtmhuomioitavaa">
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
                            <input type="checkbox" id="chkliikkuvuso" name="chkliikkuvuso" data-size="mini" data-toggle="toggle" data-on="Rajoitt." data-off="Vap">
                        </td>
                        <td>
                            <input type="checkbox" id="chkliikkuvusv" name="chkliikkuvusv" data-size="mini" data-toggle="toggle" data-on="Rajoitt." data-off="Vap">
                        </td>
                    </tr>

                    <tr>
                        <td><label>Aristusta</label></td>
                        <td>
                            <input type="checkbox" id="chkaristustao" name="chkaristustao" data-size="mini" data-toggle="toggle" data-on="Rajoitt." data-off="Vap">
                        </td>
                        <td>
                            <input type="checkbox" id="chkaristustav" name="chkaristustav" data-size="mini" data-toggle="toggle" data-on="Rajoitt." data-off="Vap">
                        </td>
                    </tr>

                    <tr>
                        <td><label>Rahinaa, naksahtelua</label></td>
                        <td>
                            <input type="checkbox" id="chkrnaksahteluao" name="chkrnaksahteluao" data-size="mini" data-toggle="toggle" data-on="Rajoitt." data-off="Vap">
                        </td>
                        <td>
                            <input type="checkbox" id="chkrnaksahteluav" name="chkrnaksahteluav" data-size="mini" data-toggle="toggle" data-on="Rajoitt." data-off="Vap">
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
            
            <div class="col-md-12 col-lg-12">
                <label class="radio-inline">
                  <input type="radio" name="inlineSuuhygieniaOptions" id="rdosuuhygieniah" value="hyvää"> Hyvä
                </label>
                <label class="radio-inline">
                  <input type="radio" name="inlineSuuhygieniaOptions" id="rdosuuhygieniak" value="kohtalainen"> Kohtalainen
                </label>
                <label class="radio-inline">
                  <input type="radio" name="inlineSuuhygieniaOptions" id="rdosuuhygieniahu" value="option3"> Huono
                </label>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12 col-lg-12">
                <label>Limakalvot</label>
            </div>
            <div class="col-md-12 col-lg-12">
                <label class="radio-inline">
                  <input type="radio" name="inlineLimakalvotOptions" id="rdolimakalvott" value="hyvää"> Terveet
                </label>
                <label class="radio-inline">
                  <input type="radio" name="inlineLimakalvotOptions" id="rdolimakalvotm" value="kohtalainen"> Muutoksia
                </label>
            </div>
            <div class="col-md-12 col-lg-12 top10">
                <input class="form-control" id="txtlimakalvotm" name="txtlimakalvotm">
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
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdovahainenir" value="yl">
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdovahainenir" value="al">
                              </label>
                            </div>
                        </td>
                        <td>
                            <input class="form-control" id="txtvahainenir" name="txtvahainenir">
                        </td>
                    </tr>

                    <tr>
                        <td><label>Normaali ienvallin resortio</label></td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdonormaaliir" value="yl">
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdonormaaliir" value="al">
                              </label>
                            </div>
                        </td>
                        <td>
                            <input class="form-control" id="txtnormaaliir" name="txtnormaaliir">
                        </td>
                    </tr>

                    <tr>
                        <td><label>Voimakas ienvallin resortio</label></td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdovoimakasir" value="yl">
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdovoimakasir" value="al">
                              </label>
                            </div>
                        </td>
                        <td>
                            <input class="form-control" id="txtvoimakasir" name="txtvoimakasir">
                        </td>
                    </tr>

                    <tr>
                        <td><label>Kiinteä limakalvo</label></td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdokiintealimakalvo" value="yl">
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdokiintealimakalvo" value="al">
                              </label>
                            </div>
                        </td>
                        <td>
                            <input class="form-control" id="txtkiintealimakalvo" name="txtkiintealimakalvo">
                        </td>
                    </tr>

                    <tr>
                        <td><label>Paikallinen muutos</label></td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdopaikallinenmuutos" value="yl">
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdopaikallinenmuutos" value="al">
                              </label>
                            </div>
                        </td>
                        <td>
                            <input class="form-control" id="txtpaikallinenmuutos" name="txtpaikallinenmuutos">
                        </td>
                    </tr>

                    <tr>
                        <td><label>Laaja muutos</label></td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdolaajamuutos" value="yl">
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdolaajamuutos" value="al">
                              </label>
                            </div>
                        </td>
                        <td>
                            <input class="form-control" id="txtlaajamuutos" name="txtlaajamuutos">
                        </td>
                    </tr>

                    <tr>
                        <td><label>Terve limakalvo</label></td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdotervelimakalvo" value="yl">
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdotervelimakalvo" value="al">
                              </label>
                            </div>
                        </td>
                        <td>
                            <input class="form-control" id="txttervelimakalvo" name="txttervelimakalvo">
                        </td>
                    </tr>

                    <tr>
                        <td><label>Paikallinen stomatiitti</label></td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdopaikallinenstomatiitti" value="yl">
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdopaikallinenstomatiitti" value="al">
                              </label>
                            </div>
                        </td>
                        <td>
                            <input class="form-control" id="txtpaikallinenstomatiitti" name="txtpaikallinenstomatiitti">
                        </td>
                    </tr>

                    <tr>
                        <td><label>Yleinen stomatiitti</label></td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdoleinenstomatiitti" value="yl">
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="rdoyleinenstomatiitti" value="al">
                              </label>
                            </div>
                        </td>
                        <td>
                            <input class="form-control" id="txtyleinenstomatiitti" name="txtyleinenstomatiitti">
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