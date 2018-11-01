<?php
add_action('wp_head', 'wpb_add_googleanalytics');
function wpb_add_googleanalytics() { ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123354611-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123354611-1');
</script> 
<?php } ?>
<?php
function register_my_session()
{
	session_start();
}
add_action('init', 'register_my_session',1);
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

add_filter( 'wp_nav_menu_items', 'wti_loginout_menu_link', 10, 2 );

function wti_loginout_menu_link( $items, $args ) {
   if ($args->theme_location == 'primary') {
	   $link = mysqli_connect("localhost", "nirupan_admin", "niru@2089", "nirupan_updamech");
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

      if (isset($_SESSION['token'])) {
         $items .= '<li class="right"><a href="https://www.updatraining.com/wp-admin/logout.php">'. __("LOGOUT") .'</a></li>';
} 
else {
         $items .= '<li class="right"><a href="https://www.updatraining.com/wp-admin/loginIndex.php">'. __("LOGIN") .'</a></li>';
      }
   }
   return $items;
}

function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//[html5_video] Short code to add HTML5 video to a post
function gen_html_vid($atts, $content=null) {
    $vid_ret='<video controls';
    extract( shortcode_atts( array(
        'poster' => 'no',
        'preload' => 'metadata',
        'mp4' => 'no',
        'webm' => 'no',
        'ogg' => 'no',
        'resize' => 'no',
        'width' => '200',
        'height' => '150',
        'muted' => 'no'
    ), $atts ) );
    if($resize <> 'no') {
        $vid_ret .= ' width="' . $width . '"';
        $vid_ret .= ' height="' . $height . '"';
    }
    if($poster <> 'no')
        $vid_ret .= ' poster="' . $poster . '"';
    if($muted <> 'no')
        $vid_ret .= ' muted';
    $vid_ret .= ' preload="';
    $vid_ret .= $preload . '">';
    if($mp4 <> 'no')
        $vid_ret .= '<source src="' . $mp4 . '" type="video/mp4"/>';
    if($webm <> 'no')
        $vid_ret .= '<source src="' . $webm . '" type="video/webm"/>';
    if($ogg <> 'no')
        $vid_ret .= '<source src="' . $ogg . '" type="video/ogg"/>';
    $vid_ret .= "Video not supported.";
    $vid_ret .= '</video>';
    return $vid_ret;
}
add_shortcode('html5_video', 'gen_html_vid');
?>