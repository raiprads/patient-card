<div class="col-lg-6">

<?php

	$comments_args = array(
 
        // change "Leave a Reply" to "Comment"
        'title_reply' 		=> 'Add a note',
        'class_submit' 		=> 'btn btn-primary',
        'label_submit'      => __( 'Post Note' ),
        //'fields' 			=> apply_filters( 'comment_form_default_fields', $fields ),
        'comment_field' 	=>  '<p class="comment-form-comment"><div class="form-group"><label for="comment">' . _x( 'Post your remarks, remiders or comments in here.', 'noun' ) .
            '</label><textarea id="comment" name="comment" class="form-control"  rows="8" aria-required="true">' .
            '</textarea></div></p>',
            'comment_notes_after' => ' '
    );

	comment_form($comments_args); ?>

</div>

<div class="col-lg-6 comment-lists">

	<?php if (post_password_required()) : ?>
		<div class="alert alert-warning">
		  <strong>Post is password protected!</strong> Enter the password to view any notes.
		</div>
	<?php return; endif; ?>

	<?php if (have_comments()) : ?>

		<h3><?php comments_number( 'No notes', '1 note', '% notes'); ?></h3>

		<ul>
			<?php wp_list_comments('type=comment&callback=html5blankcomments_revised'); // Custom callback in functions.php ?>
		</ul>

	<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p><?php _e( 'Comments are closed here.', 'html5blank' ); ?></p>
	
	<?php else: ?>
		
		<div class="alert alert-info" role="alert">
			<strong>Hey!</strong> You can post your remarks, remiders or comments in here.
		</div>

	<?php endif; ?>

</div>


