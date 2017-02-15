<form id="form-update-tab2" method="post" class="form-horizontal">
<input type="hidden" id="nonce" name="nonce" value="<?php echo wp_create_nonce("update_patient_tab2_nonce"); ?>">
<input type="hidden" name="post_id" id="post_id" value="<?php echo get_the_ID(); ?>">
<input type="hidden" name="action" value="update_patient_tab2">

<div id="ajax_message"></div>

    <!-- start Esitiedot -->
    <div class="col-lg-6">

        <h3>Esitiedot</h3>

        <div class="form-group">
            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chkyliherkkyys" name="chkyliherkkyys" data-size="mini" data-toggle="toggle" data-on="Kyllä" data-off="Ei">
            </div>
            <label class="col-md-10 col-lg-10">Yliherkkyys</label>
        </div>

        <div class="form-group">
            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chkreuma" name="chkreuma" data-size="mini" data-toggle="toggle" data-on="Kyllä" data-off="Ei">
            </div>
            <label class="col-md-10 col-lg-10">Reuma</label>
        </div>

        <div class="form-group">
            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chksjverisuonisairaus" name="chksjverisuonisairaus" data-size="mini" data-toggle="toggle" data-on="Kyllä" data-off="Ei">
            </div>
            <label class="col-md-10 col-lg-10">Sydän- ja verisuonisairaus</label>
        </div>

        <div class="form-group">
            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chkvjverenvuototaudit" name="chkvjverenvuototaudit" data-size="mini" data-toggle="toggle" data-on="Kyllä" data-off="Ei">
            </div>
            <label class="col-md-10 col-lg-10">Veri- ja verenvuototaudit</label>
        </div>

        <div class="form-group">
            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chkpsadehoito" name="chkpsadehoito" data-size="mini" data-toggle="toggle" data-on="Kyllä" data-off="Ei">
            </div>
            <label class="col-md-10 col-lg-10">Päänalueen sädehoito</label>
        </div>

        <div class="form-group">
            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chkepilepsia" name="chkepilepsia" data-size="mini" data-toggle="toggle" data-on="Kyllä" data-off="Ei">
            </div>
            <label class="col-md-10 col-lg-10">Epilepsia</label>
        </div>

        <div class="form-group">
            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chkttauti" name="chkttauti" data-size="mini" data-toggle="toggle" data-on="Kyllä" data-off="Ei">
            </div>
            <label class="col-md-10 col-lg-10">Tarttuva tauti</label>
            <div class="col-md-2 col-lg-2"></div>
            <div class="col-md-8 col-lg-8">
                <input class="form-control" id="txtttauti" name="txtttauti">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chkmsairaudet" name="chkmsairaudet" data-size="mini" data-toggle="toggle" data-on="Kyllä" data-off="Ei">
            </div>
            <label class="col-md-10 col-lg-10">Muut sairaudet</label>
            <div class="col-md-2 col-lg-2"></div>
            <div class="col-md-8 col-lg-8">
                <input class="form-control" id="txtmsairaudet" name="txtmsairaudet">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chklaakitys" name="chklaakitys" data-size="mini" data-toggle="toggle" data-on="Kyllä" data-off="Ei">
            </div>
            <label class="col-md-10 col-lg-10">Lääkitys</label>
            <div class="col-md-2 col-lg-2"></div>
            <div class="col-md-8 col-lg-8">
                <input class="form-control" id="txtlaakitys" name="txtlaakitys">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-2 col-lg-2">
                <input type="checkbox" id="chksyljeneritys" name="chksyljeneritys" data-size="mini" data-toggle="toggle" data-on="Alentunut" data-off="Normaali">
            </div>
            <label class="col-md-10 col-lg-10">Syljeneritys</label>
        </div>
                    

    </div>
    <!-- end Esitiedot -->

    <!-- start Aikaisempi Hampaiden Hoito -->
    <div class="col-lg-6">

        <h3>Aikaisempi Hampaiden Hoito</h3>

        <div class="form-group col-md-12 col-lg-12">
            <textarea class="form-control" id="txtaahhoito" name="txtaahhoito" rows="3" class="col-md-12 col-lg-12"></textarea>
        </div>

        <div class="form-group col-md-12 col-lg-12">
            <label>Vuosi</label>
            <input class="form-control" id="txtvuosi" name="txtvuosi" maxlength="4">
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
                <input class="form-control" id="txtvalmistettuv" name="txtvalmistettuv" maxlength="4">
            </div>
        </div>

        <div class="form-group col-md-4 col-lg-4">
            <div class="col-md-12 col-lg-12">
                <label>Pohjattu v.</label>
                <input class="form-control" id="txtpohjattuv" name="txtpohjattuv" maxlength="4">
            </div>
        </div>

        <div class="form-group col-md-4 col-lg-4">
            <div class="col-md-12 col-lg-12">
                <label>Korjattu v.</label>
                <input class="form-control" id="txtkorjattuv" name="txtkorjattuv" maxlength="4">
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

        <div class="form-group col-md-12 col-lg-12">
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
    <!-- end Aikaisempi Hampaiden Hoito -->

    
    <div class="col-lg-12">

        <hr/>

        <button type="submit" class="btn btn-primary" id="btn-add-update" ><i class="fa fa-save"></i> Update</button>
        <button type="button" class="btn btn-default" onclick="window.location = '<?php echo get_the_permalink()."?t=2"; ?>'" ><i class="fa fa-arrow-left"></i> Back</button>

    </div>

</form>