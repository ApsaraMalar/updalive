<?php
/*
	*Theme Name	: Esol
	*Theme Core Functions and Codes
*/
	/**Includes required resources here**/
	define('ESOL_TEMPLATE_DIR_URI',get_template_directory_uri());
	define('ESOL_TEMPLATE_DIR',get_template_directory());
	define('ESOL_THEME_FUNCTIONS_PATH',ESOL_TEMPLATE_DIR.'/core-functions');
	define('ESOL_THEME_OPTIONS_PATH' , ESOL_TEMPLATE_DIR_URI.'/core-functions/option-panel');
	require( ESOL_THEME_FUNCTIONS_PATH . '/menu/default_menu_walker.php' ); // for Default Menus
	require( ESOL_THEME_FUNCTIONS_PATH . '/menu/esol_nav_walker.php' ); // for Custom Menus		
	require( ESOL_THEME_FUNCTIONS_PATH . '/scripts/scripts.php' );
	require( ESOL_THEME_FUNCTIONS_PATH . '/comment-section/comment-function.php' ); //for comments sections
	require( ESOL_THEME_FUNCTIONS_PATH . '/widgets/register-sidebar.php' ); //for widget register
	
	//Customizer
	require( ESOL_THEME_FUNCTIONS_PATH . '/customizer/customizer-header.php');
	require_once('esol_breadcrumbs.php');

add_action( 'after_setup_theme', 'esol_setup' ); 	
		function esol_setup()
		{	// Load text domain for translation-ready
			load_theme_textdomain( 'esol', ESOL_THEME_FUNCTIONS_PATH . '/lang' );
			add_theme_support( 'title-tag' );
			
			$header_args = array(
				 'flex-height' => true,
				 'height' => 100,
				 'flex-width' => true,
				 'width' => 1200,
				 'admin-head-callback' => 'mytheme_admin_header_style',
				 );
				 add_theme_support( 'custom-logo', array(
				'height'      => 240,
				'width'       => 240,
				'flex-height' => true,
			) );
				 
				 add_theme_support( 'custom-header', apply_filters( 'esol_custom_header_args', array(
				'width'                  => 1200,
				'height'                 => 280,
				'flex-height'            => true,
				'wp-head-callback'       => 'esol_header_style',
			) ) );
				 
				 add_theme_support( 'custom-header', $header_args );
			// This theme uses wp_nav_menu() in one location.
				add_theme_support('post-thumbnails');
				set_post_thumbnail_size( 1200, 9999 );
			// This theme uses wp_nav_menu() in one location.
				register_nav_menu( 'primary', __( 'Primary Menu', 'esol' ) );
			// theme Background support
				add_theme_support( 'custom-background');
				add_theme_support( 'automatic-feed-links');
			//Default Data
			if ( ! isset( $content_width ) ) $content_width = 900;
			require_once('theme_default_data.php');
			$esol_option=esol_theme_default_data();
			
		    $melbourne_option=esol_theme_default_data();
			require( ESOL_THEME_FUNCTIONS_PATH . '/option-panel/esol-option-setting.php' ); // for Option Panel
			
}
			/****--- Navigation for Author, Category , Tag , Archive ---***/
				function esol_theme_navigation() { ?>
				<div class="row">
				<div class="blog-pagination">
				<?php posts_nav_link(); ?>
				</div>
				</div>
				<?php }
	
			require('template-tags.php');
			
if ( ! function_exists( 'esol_header_style' ) ) :

function esol_header_style() {
	if ( display_header_text() ) {
		return;
	}
	?>
	<style type="text/css" id="esol-header-css">
		.site-branding {
			margin: 0 auto 0 0;
		}

		.site-branding .site-title,
		.site-description {
			clip: rect(1px, 1px, 1px, 1px);
			position: absolute;
			margin:0 10px 0;
		}
	</style>
	<?php
}
endif; 

function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
?>