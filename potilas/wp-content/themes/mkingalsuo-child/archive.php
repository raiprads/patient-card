<?php get_header(); 

include_once('functions/encryption.php');
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">


                        <h1 class="page-header">
                            <i class="fa fa-users"></i> List of Patients
                        </h1>

                    </div>
                </div>
                <!-- /.row -->

                <div class="row">

                    <!-- start loop -->

                    <div class="col-lg-12">
                    	
                    	<!-- start bs-example -->
                    	<div class="bs-example">

	                    	<table class="table table-hover"> 
	                    		<thead> 
	                    			<tr> 
	                    				<th>#</th>
	                    				<th>Sukunimi</th> 
	                    				<th>Etunimi</th>
	                    				<th>Henkilötunnus</th> 
	                    				<th>Postitoimipaikka</th>
	                    			</tr> 
	                    		</thead> 
	                    		<tbody>


	                    			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

										<tr> 
		                    				<th scope=row><?php the_ID(); ?></th> 
		                    				<td><a href="<?php the_permalink(); ?>" title="Click here to view the profile."><?php echo get_post_meta( get_the_ID(), 'patient_sukunimi', true ); ?></a></td> 
		                    				<td><?php echo get_post_meta( get_the_ID(), 'patient_etunimi', true ); ?></td> 
		                    				<td>
			                    				<?php 
			                    					$hash = get_the_content();
			                    					$hktunnus = get_post_meta( get_the_ID(), 'patient_hktunnus', true ); 
			                    					echo decrypt_data($hktunnus, $hash);
			                    				?>
		                    				</td>
		                    				<td><?php echo get_post_meta( get_the_ID(), 'patient_postitoimipaikka', true ); ?></td>  
		                    			</tr>
		                    			

									<?php endwhile; ?>

									<?php else: ?>

											<h4><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h4>

									<?php endif; ?>

                     
	                    		</tbody> 
	                    	</table>

                    	</div> 
                    	<!-- end bs-example -->

                    </div>
                    <!-- end loop -->
                    

                    <?php get_template_part('pagination'); ?>

                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


<?php get_footer(); ?>
