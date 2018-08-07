<?php  add_action( 'wp_enqueue_scripts', 'corporate_activity_enqueue_styles' );
function corporate_activity_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
?>