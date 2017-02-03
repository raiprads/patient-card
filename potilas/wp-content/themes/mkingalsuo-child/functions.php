<?php

function theme_enqueue_styles() {

    //enqueue sb admin css

    wp_enqueue_style( 'bootstrap-style', 
        get_stylesheet_directory_uri() . '/css/bootstrap.min.css'
    );

    wp_enqueue_style( 'bootstrap-toggle-style', 
        get_stylesheet_directory_uri() . '/css/bootstrap-toggle.min.css'
    );

    wp_enqueue_style( 'sb-admin', 
        get_stylesheet_directory_uri() . '/css/sb-admin.css'
    );

    wp_enqueue_style( 'font-awesome', 
        get_stylesheet_directory_uri() . '/font-awesome/css/font-awesome.min.css'
    );

    wp_enqueue_style( 'daterangepicker-css', 
        get_stylesheet_directory_uri() . '/css/daterangepicker.css'
    );

    //wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 11);

function theme_enqueue_scripts() {

    //enqueue sb admin scripts
    
    //duplicate with wordpress
    //wp_register_script('jquery-script', get_stylesheet_directory_uri(). '/js/jquery.js', array(), '1.1');
    //wp_enqueue_script('jquery-script');

    wp_register_script('bootstrap-script', get_stylesheet_directory_uri(). '/js/bootstrap.min.js', array('jquery'), '1.1');
    wp_enqueue_script('bootstrap-script');

    wp_register_script('moment-script', get_stylesheet_directory_uri(). '/js/moment.min.js', array('jquery'), '1.1');
    wp_enqueue_script('moment-script');

    wp_register_script('bootstrap-toggle-script', get_stylesheet_directory_uri(). '/js/bootstrap-toggle.min.js', array('jquery'), '1.1');
    wp_enqueue_script('bootstrap-toggle-script');

    wp_register_script('jquery-validate-script', get_stylesheet_directory_uri(). '/js/jquery.validate.min.js', array('jquery'), '1.1');
    wp_enqueue_script('jquery-validate-script');


    if ( get_permalink() == home_url() . '/add-new-patient/' ) {
        
        // add new patient js
        wp_register_script('patient-ajax', get_stylesheet_directory_uri(). '/js/add-new.patient.js', array('jquery'), '1.1');

    }elseif(is_single()) {
        
        //get selected tabs
        $selected_tab = $_GET['t'];
        
        if($selected_tab == 5) {
            wp_register_script('daterangepicker-script', get_stylesheet_directory_uri(). '/js/daterangepicker.js', array('jquery'), '1.1');
            wp_enqueue_script('daterangepicker-script');
        }

        // add custom js for each tab
        wp_register_script('patient-ajax', get_stylesheet_directory_uri(). '/js/view.patient-t'. $selected_tab .'.js', array('jquery'), '1.1');

    }

    wp_localize_script( 'patient-ajax', 'doAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));        
    wp_enqueue_script('patient-ajax');

}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );


include_once("functions/add-patient.php");
add_action( 'wp_ajax_add_new_patient', 'add_new_patient' );
//add_action( 'wp_ajax_nopriv_add_new_patient', 'add_new_patient' );

include_once("functions/update_patient.php");
// TAB 1
add_action( 'wp_ajax_update_patient_tab1', 'update_patient_tab1' );

include_once("functions/patient-teeth.php");
add_action( 'wp_ajax_view_patient_teeth', 'view_patient_teeth' );
add_action( 'wp_ajax_save_patient_teeth_values', 'save_patient_teeth_values' );

// Custom Comments Callback
function html5blankcomments_revised($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ( 'div' == $args['style'] ) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    }
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="panel panel-default">
    <?php endif; ?>
    

    <div class="panel-heading">
        <?php printf(__('<i class="fa fa-user"></i> <strong>%s</strong>'), get_comment_author_link()) ?>

        <small class="pull-right">
            <?php
                printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
            ?>
        </small>
    </div>

    <div class="panel-body">

        <?php if ($comment->comment_approved == '0') : ?>
            <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
            <br />
        <?php endif; ?>

        

        <?php comment_text() ?>

        <div class="reply">
        <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>

    </div>

    <?php if ( 'div' != $args['style'] ) : ?>
    </div>
    <?php endif; ?>

<?php }


// dont redirect the comment form
add_filter('comment_post_redirect', 'redirect_after_comment');

function redirect_after_comment($location)
{
    return $_SERVER["HTTP_REFERER"];
}