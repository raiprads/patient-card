<form id="form-add-new" method="post" class="form-horizontal">
<input type="hidden" id="mynonce" name="mynonce" value="<?php echo wp_create_nonce("add_new_patient_nonce"); ?>">

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
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="chkvahaineniryl" id="chkvahaineniryl">
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="chkvahaineniral" id="chkvahaineniral">
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
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="chknormaaliiryl" id="chknormaaliiryl">
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="chknormaaliiral" id="chknormaaliiral">
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
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="chkvoimakasiryl" id="chkvoimakasiryl">
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="chkvoimakasiral" id="chkvoimakasiral">
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
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="chkkiintealimakalvoyl" id="chkkiintealimakalvoyl">
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="chkkiintealimakalvoal" id="chkkiintealimakalvoal">
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
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="chkpaikallinenmuutosyl" id="chkpaikallinenmuutosyl">
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="chkpaikallinenmuutosal" id="chkpaikallinenmuutosal">
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
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="chklaajamuutosyl" id="chklaajamuutosyl">
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="chklaajamuutosal" id="chklaajamuutosal">
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
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="chktervelimakalvoyl" id="chktervelimakalvoyl">
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="chktervelimakalvoal" id="chktervelimakalvoal">
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
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="chkpaikallinenstomatiittiyl" id="chkpaikallinenstomatiittiyl">
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="chkpaikallinenstomatiittial" id="chkpaikallinenstomatiittial">
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
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="chkyleinenstomatiittiyl" id="chkyleinenstomatiittiyl">
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="chkyleinenstomatiittial" id="chkyleinenstomatiittial">
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

        <button type="submit" class="btn btn-lg btn-primary" id="btn-add-new" >Save</button>
        <button type="reset" class="btn btn-lg btn-default"  >Reset</button>

    </div>

</form>