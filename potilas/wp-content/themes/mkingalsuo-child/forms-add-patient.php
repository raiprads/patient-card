<?php 

/**
 * Template Name: Add new patient template
 *
 * @package Patient Card
 * @subpackage mkingalsuo-child
 * @since mkingalsuo-child 1.0
 */

get_header(); ?>

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
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Add New Patient
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">

                    <form role="form">
                    
                        <div class="col-lg-6">

                            <h3>Personal Information</h3>

                            <div class="form-group col-md-12 col-lg-12">
                                <label>Henkilötunnus</label>
                                <input class="form-control" id="txthktunnus" name="txthktunnus">
                            </div>

                            <div class="form-group col-md-6 col-lg-6">
                                <label>Sukunimi</label>
                                <input class="form-control" id="txtsukunimi" name="txtsukunimi">
                            </div>

                            <div class="form-group col-md-6 col-lg-6">
                                <label>Etunimi</label>
                                <input class="form-control" id="txtetunimi" name="txtetunimi">
                            </div>

                            <div class="form-group col-md-12 col-lg-12">
                                <label>Puhelinnumero</label>
                                <input class="form-control" id="txtpnumero" name="txtpnumero">
                            </div>

                            <div class="form-group col-md-12 col-lg-12">
                                <label>Sähköposti</label>
                                <input class="form-control" id="txtsposti" name="txtsposti">
                            </div>

                            <h3>Address</h3>

                            <div class="form-group col-md-12 col-lg-12">
                                <label>Kadunnimi</label>
                                <input class="form-control" id="txtkadunnimi" name="txtkadunnimi">
                            </div>

                            <div class="form-group col-md-6 col-lg-6">
                                <label>Paikkakunta</label>
                                <input class="form-control" id="txtpaikkakunta" name="txtpaikkakunta">
                            </div>

                            <div class="form-group col-md-6 col-lg-6">
                                <label>Postinumero</label>
                                <input class="form-control" id="txtpostinumero" name="txtpostinumero">
                            </div>

                            <div class="form-group">
                                
                            </div>                        

                        </div>

                        
                        <div class="col-lg-12">

                            <hr/>

                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="reset" class="btn btn-default">Reset</button>

                        </div>

                    </form>



                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php get_footer(); ?>
