<?php
function esol_scripts()
{
		
	wp_enqueue_style('esol-style', get_stylesheet_uri()); 
	wp_enqueue_style('esol-bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style('esol-media-responsive', get_template_directory_uri() . '/css/media-responsive.css');
	wp_enqueue_style('esol-font',get_template_directory_uri() . '/css/font/font.css');	
	wp_enqueue_style('esol-font-awesome',get_template_directory_uri() . '/css/font-awesome-4.0.3/css/font-awesome.min.css');
	
	/*------Js-------------*/
	wp_enqueue_script( 'esol-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) );
	wp_enqueue_script( 'esol-custom-js', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ) );
	wp_enqueue_script( 'esol-aos-js', get_template_directory_uri() . '/js/aos.js');
	wp_enqueue_script( 'esol-smoothscroll-js', get_template_directory_uri() . '/js/smoothscroll.js');
	
	if ( is_singular() ){ wp_enqueue_script( "comment-reply" );	}
}
add_action('wp_enqueue_scripts', 'esol_scripts');
?>