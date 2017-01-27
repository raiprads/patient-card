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
            <textarea class="form-control" id="txtaahhoito" name="txtaahhoito" rows="3" class="col-md-12 col-lg-12"></textarea>
        </div>

        <div class="form-group">
            <label>Vuosi</label>
            <input class="form-control" id="txtvuosi" name="txtvuosi">
        </div>

        <div class="form-group">
            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chkaproteesit" name="chkaproteesit" data-size="mini" data-toggle="toggle" data-on="On" data-off="Ei">
            </div>
            <label class="col-md-10 col-lg-10">Aikaisemmat proteesit</label>
        </div>

        <div class="form-group">
            <div class="col-md-12 col-lg-12">
                <h4>Millaiset</h4>
            </div>
            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chkmillaisetyl" name="chkmillaisetyl" data-size="mini" data-toggle="toggle" data-on="Kyllä" data-off="Ei">
            </div>
            <label class="col-md-10 col-lg-10">YL</label>

            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chkmillaisetal" name="chkmillaisetal" data-size="mini" data-toggle="toggle" data-on="Kyllä" data-off="Ei">
            </div>
            <label class="col-md-10 col-lg-10">AL</label>
        </div>

        <div class="form-group col-md-4 col-lg-4">
            <div class="col-md-12 col-lg-12">
                <label>Valmistettu v.</label>
                <input class="form-control" id="txtvalmistettuv" name="txtvalmistettuv">
            </div>
        </div>

        <div class="form-group col-md-4 col-lg-4">
            <div class="col-md-12 col-lg-12">
                <label>Pohjattu v.</label>
                <input class="form-control" id="txtpohjattuv" name="txtpohjattuv">
            </div>
        </div>

        <div class="form-group col-md-4 col-lg-4">
            <div class="col-md-12 col-lg-12">
                <label>Korjattu v.</label>
                <input class="form-control" id="txtkorjattuv" name="txtkorjattuv">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12 col-lg-12">
                <h4>Potilaan mielipide proteeseitaan</h4>
            </div>
            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chkpmptulkonakoon" name="chkpmptulkonakoon" data-size="mini" data-toggle="toggle" data-on="Kyllä" data-off="Ei">
            </div>
            <label class="col-md-10 col-lg-10">Tyytyväinen ulkonäköön</label>

            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chkpmptpureskelukykyyn" name="chkpmptpureskelukykyyn" data-size="mini" data-toggle="toggle" data-on="Kyllä" data-off="Ei">
            </div>
            <label class="col-md-10 col-lg-10">Tyytyväinen pureskelukykyyn</label>
        </div>

        <div class="form-group">
            <label>Havainnot entisistä proteeseistä</label>
            <textarea class="form-control" id="txtaheproteeseista" name="txtaheproteeseista" rows="3" class="col-md-12 col-lg-12"></textarea>
        </div>

        <div class="form-group">
            <div class="col-md-12 col-lg-12">
                <h4>Purenta</h4>
            </div>
            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chkpurentaant" name="chkpurentaant" data-size="mini" data-toggle="toggle" data-on="Kyllä" data-off="Ei">
            </div>
            <label class="col-md-10 col-lg-10">Ant.</label>

            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chkpurentapost" name="chkpurentapost" data-size="mini" data-toggle="toggle" data-on="Kyllä" data-off="Ei">
            </div>
            <label class="col-md-10 col-lg-10">Post.</label>

            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chkpurentaristipur" name="chkpurentaristipur" data-size="mini" data-toggle="toggle" data-on="Kyllä" data-off="Ei">
            </div>
            <label class="col-md-10 col-lg-10">Ristipur.</label>
        </div>

        <div class="form-group col-md-6 col-lg-6">
            <div class="col-md-12 col-lg-12">
                <label>Vapaaväli mm.</label>
                <input class="form-control" id="txtvapaavalimm" name="txtvapaavalimm">
            </div>
        </div>

        <div class="form-group col-md-6 col-lg-6">
            <div class="col-md-12 col-lg-12">
                <label>Purentakorkeus mm.</label>
                <input class="form-control" id="txtpurentakorkeusmm" name="txtpurentakorkeusmm">
            </div>
        </div>

        

    </div>
    <!-- end Intraoraalitutkimus -->

    
    <div class="col-lg-12">

        <hr/>

        <button type="submit" class="btn btn-lg btn-primary" id="btn-add-new" >Save</button>
        <button type="reset" class="btn btn-lg btn-default"  >Reset</button>

    </div>

</form>