<?php
/*
***** esol Template Tags
	* Add Class Gravtar
*/
if(! function_exists('esol_gravatar_class')) :
	add_filter('get_avatar','esol_gravatar_class');
	function esol_gravatar_class($esol_class) {
    $esol_class = str_replace("class='avatar", "class='author-image", $esol_class);
    return $esol_class;
	}
 endif;
 
 /*
 * esol Archive Title
 */
if ( ! function_exists( 'esol_archive_title' ) ) :
function esol_archive_title( $esol_before = '<div class="page-title"><h1 data-aos="fade-left">', $esol_after = '</h1></div>' ) {
	if( is_archive() )
	{
	
	if ( is_category() ) {
		$esol_title = sprintf( __( 'Category Archives: %s', 'esol' ), '<span>' . single_cat_title( '', false ) . '</span>' );
	} elseif ( is_tag() ) {
		$esol_title = sprintf( __( 'Tag Archives: %s', 'esol' ), '<span>' . single_tag_title( '', false ) . '</span>' ); 
	} elseif ( is_author() ) {
		$esol_title = sprintf( __( 'Author Archives: %s', 'esol' ), '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a>' ); 
	} elseif ( is_year() ) {
		$esol_title = sprintf( __( 'Yearly Archives: %s', 'esol' ), get_the_date( _x( 'Y', 'yearly archives date format', 'esol' ) ) );
	} elseif ( is_month() ) {
		$esol_title = sprintf( __( 'Monthly Archives: %s', 'esol' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'esol' ) ) );
	} elseif ( is_day() ) {
		$esol_title = sprintf( __( 'Daily Archives: %s', 'esol' ), get_the_date( _x( 'F j, Y', 'daily archives date format', 'esol' ) ) );
	}  elseif ( is_post_type_archive() ) {
		$esol_title = sprintf( __( 'Archives: %s', 'esol' ), post_type_archive_title( '', false ) );
	}
	} elseif( is_search() )
	{
		$esol_title = sprintf( __( 'Search Results for : %s', 'esol' ), get_search_query() );
	}
	elseif( is_404() )
	{
		$esol_title = sprintf( __( 'Error 404  : Page Not Found', 'esol' ) );
	}
	else
	{
		echo '<div class="page-title"><h1 data-aos="fade-left">'.get_the_title().'</h1></div>';
	}	
	/**
	 * Filter the archive title.
	 *
	 * @param string $title Archive title to be displayed.
	 */
	//$title = apply_filters( 'get_the_archive_title', $title );

	if ( ! empty( $esol_title ) ) {
		$full_title = $esol_before . $esol_title . $esol_after;
		echo wp_kses_post( $full_title );
	}
}
endif;
 
// Site Footer Function
// Contains the closing of the #content div and all content after
function esol_footer () { ?>
	<div class="clearfix"></div>
 <!-------Footer Section----->  
  <footer class="footer-bg m-top0">
    <div class="container">
      <div class="row">
	  <?php if ( is_active_sidebar( 'footer-widget-area' ) )
			{?>
			<div>
				<?php dynamic_sidebar( 'footer-widget-area' ); ?>
			</div>	
			<?php } else {				$footer_widget = array('name' => __( 'Footer Widget Area', 'esol' ),							'id' => 'footer-widget-area',							'description' => __( 'footer widget area', 'esol' ),							'before_widget' => ' <div class="col-md-3 col-sm-6 m-bottom3" data-aos="fade-up"  data-aos-duration="1500">',							'after_widget' => '</ul></div>',							'before_title' => '<h4 class="white font20 font-thin">',							'after_title' =>'</h4><div class="title-line"></div><ul class="list-info one">',);							the_widget('WP_Widget_Tag_Cloud', 'title=Tags', $footer_widget);							the_widget('WP_Widget_Categories', null, $footer_widget);							the_widget('WP_Widget_Pages', null, $footer_widget);							the_widget('WP_Widget_Archives', null, $footer_widget);			} ?> 
	  </div>
    </div>
	
  </footer><?php wp_footer(); ?>
  <?php 
	$esol_options=esol_theme_default_data(); 
	$footer_setting = wp_parse_args(  get_option( 'esol_option', array() ), $esol_options ); ?>	 
<div class="copyrights">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-top1"><p> <?php if($footer_setting['footer_customization_text'] !='') { echo esc_attr($footer_setting['footer_customization_text']); } ?> <a target="_blank" href="<?php if($footer_setting['develop_by_link'] !='') { echo esc_url($footer_setting['develop_by_link']); } ?>"><?php if($footer_setting['footer_customization_develop'] !='') { echo "-" .esc_attr($footer_setting['footer_customization_develop']); } ?></a> <?php if($footer_setting['develop_by_name'] !='') { echo "-" .esc_attr($footer_setting['develop_by_name']); }  ?> </p></div>
        <div class="col-md-6">
          <ul class="social-icons style-three">
		  <?php if($footer_setting['footer_social_media_enabled'] == 1) { ?>
		  
		  <?php if($footer_setting['footer_social_media_facebook_link']!='') { ?> 
            <li><a href="<?php echo esc_url($footer_setting['footer_social_media_facebook_link']); ?>" <?php if( $footer_setting['footer_facebook_media_enabled'] ==1 ) { echo "target='_blank'"; } ?>><i class="fa fa-facebook"></i></a></li>
			<?php } 
			
			 if($footer_setting['footer_social_media_twitter_link']!='') { 
			?>
			<li><a href="<?php echo esc_url($footer_setting['footer_social_media_twitter_link']); ?>" <?php if( $footer_setting['footer_twitter_media_enabled'] ==1 ) { echo "target='_blank'"; } ?>><i class="fa fa-twitter"></i></a></li>
            <?php } 
			
			 if($footer_setting['footer_social_media_google_link']!='') { 
			?>
			<li><a href="<?php echo esc_url($footer_setting['footer_social_media_google_link']); ?>" <?php if( $footer_setting['footer_google_media_enabled'] ==1 ) { echo "target='_blank'"; } ?>><i class="fa fa-google-plus"></i></a></li>
            <?php } 
			
			 if($footer_setting['footer_social_media_linkedin_link']!='') { 
			?>
			<li><a href="<?php echo esc_url($footer_setting['footer_social_media_linkedin_link']); ?>" <?php if( $footer_setting['footer_linkedin_media_enabled'] ==1 ) { echo "target='_blank'"; } ?>><i class="fa fa-linkedin"></i></a></li>
            <?php } 
			 if($footer_setting['footer_social_media_flicker_link']!='') { 
			?>
			<li><a href="<?php echo esc_url($footer_setting['footer_social_media_flicker_link']); ?>" <?php if( $footer_setting['footer_flicker_media_enabled'] ==1 ) { echo "target='_blank'"; } ?>><i class="fa fa-flickr"></i></a></li>
          <?php } 
			 if($footer_setting['footer_social_media_youtube_link']!='') { 
			?>
		  <li><a href="<?php echo esc_url($footer_setting['footer_social_media_youtube_link']); ?>" <?php if( $footer_setting['footer_youtube_media_enabled'] ==1 ) { echo "target='_blank'"; } ?>><i class="fa fa-youtube"></i></a></li>
           <?php } 
			 if($footer_setting['footer_social_media_vimeo_square_link']!='') { 
			?>
		   <li><a href="<?php echo esc_url($footer_setting['footer_social_media_vimeo_square_link']); ?>" <?php if( $footer_setting['footer_vimeo_square_media_enabled'] ==1 ) { echo "target='_blank'"; } ?>><i class="fa fa-vimeo-square"></i></a></li>
           <?php } 
			 if($footer_setting['footer_social_media_rss_link']!='') { 
			?>
		   <li><a href="<?php echo esc_url($footer_setting['footer_social_media_rss_link']); ?>"  target="<?php if( $footer_setting['footer_rss_media_enabled'] == 1 ) { echo '_blank'; } ?>"><i class="fa fa-rss"></i></a></li>
			<?php } 
			}
			?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  

 
<!--Scroll To Top--> 

<!--/Scroll To Top-->
<?php
} // end of esol_wp_footer

if ( ! function_exists( 'esol_the_custom_logo' ) ) :

function esol_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

	// code to change length of service two column excerpt
function esol_blog_excerpt(){
	global $post;
	$excerpt = get_the_content();
	$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$original_len = strlen($excerpt);
	$excerpt = substr($excerpt, 0, 250);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	$len=strlen($excerpt);
	 if($original_len>150)
	return $excerpt;
	return $excerpt;
}
?>