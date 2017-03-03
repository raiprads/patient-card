<?php get_header(); 

include_once('functions/encryption.php');
?>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>    

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">


                        <h1 class="page-header">
                            <i class="fa fa-user"></i> <?php the_title(); ?>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->

                <div class="row">

                    <!-- start loop -->

                    <div class="col-lg-12">
                    	
                    	<!-- tabs -->
                    	<?php get_template_part('profile-tabs'); ?>

                    	<!-- tab content -->
                    	<?php

                    		$ptabs = $_GET['t'];
                            $action = $_GET['action'];
                    		
                    		if($ptabs == "") { $ptabs = 1; }
                            if($action != "") { $action = 'edit/'; }

                    		get_template_part('tabs/' . $action . 'tab-' . $ptabs );

                    	?>

                    </div>
                    <!-- end loop -->
                    

                    <?php get_template_part('pagination'); ?>

                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

        <?php endwhile; ?>

		<?php else: ?>

			<!-- article -->

				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

			<!-- /article -->

		<?php endif; ?>


<?php get_footer(); ?>