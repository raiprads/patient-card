<form id="form-add-new" method="post">
                    <input type="hidden" id="mynonce" name="mynonce" value="<?php echo wp_create_nonce("add_new_patient_nonce"); ?>">
                    
                        <div class="col-lg-6">

                            <h3>Hoidon tuetetus ja jälkihoito</h3>

                            <div class="form-group col-md-12 col-lg-12">
                                <label class="required">Päivämäärä</label>
                                <input class="form-control" id="txtpvm" name="txtpvm" disabled="">
                            </div>

                            <div class="form-group col-md-6 col-lg-6">
                                <label class="required">Hoito/työ</label>
                                <input class="form-control" id="txthoitotyo" name="txthoitotyo">
                            </div>

                            <div class="form-group col-md-6 col-lg-6">
                                <label class="required">Koodi</label>
                                <input class="form-control" id="txtkoodi" name="txtkoodi">
                            </div>

                            <div class="form-group col-md-12 col-lg-12">
                                <label class="required">Toimenpide</label>
                                <textarea class="form-control" rows="3" id="txttoimenpide" name="txttoimenpide"></textarea>
                            </div>

                            <div class="form-group col-md-12 col-lg-12">
                                <label >Palkkio</label>
                                <input class="form-control" id="txtpalkkio" name="txtpalkkio">
                            </div>

                            <div class="form-group col-md-6 col-lg-6">
                                <label class="required">lvv 0%</label>
                                <input class="form-control" id="txtlvv0" name="txtlvv0">
                            </div>

                            <div class="form-group col-md-6 col-lg-6">
                                <label class="required">lvv 16%</label>
                                <input class="form-control" id="txtlvv16" name="txtlvv16">
                            </div>

                            <div class="form-group col-md-12 col-lg-12">
                                <label class="required">Suoritus</label>
                                <input class="form-control" id="txtsuoritus" name="txtsuoritus">
                            </div>                       

                        </div>

                        
                        <div class="col-lg-12">

                            <hr/>

                            <button type="submit" class="btn btn-lg btn-primary" id="btn-add-new" >Save</button>
                            <button type="reset" class="btn btn-lg btn-default"  >Reset</button>

                        </div>

                    </form>