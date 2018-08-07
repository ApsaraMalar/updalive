<?php
// theme sub header breadcrumb functions
function esol_cur_page_url() {
        if ( isset( $_SERVER['HTTP_HOST'] ) && isset( $_SERVER['REQUEST_URI'] ) ) { // Input var okay.
                $esol_root_relative_current = sanitize_text_field( wp_unslash( $_SERVER['REQUEST_URI'] ) ); // Input var okay.
                $sol_current_url = set_url_scheme( 'http://' . sanitize_text_field( wp_unslash( $_SERVER['HTTP_HOST'] ) ) . $esol_root_relative_current ); // Input var okay.
                return $sol_current_url;
        }
}

if( !function_exists('esol_breadcrumbs') ):
	function esol_breadcrumbs() { 
			
		global $esol_post;
		$esol_homeLink = home_url();
		$esol_home_name = esc_html__( 'Home', 'esol' );
	?>
		<!-- Page Title Section -->
<div class="page-heading-section">		
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
						   <?php if (is_home() || is_front_page()) :
									echo '<div class="page-title"><h1 data-aos="fade-left">'.$esol_home_name.'</h1></div>';
								else:
									esol_archive_title();
								endif;
						   ?>
				</div>
						<div class="col-md-6">
							<?php
								echo '<ul class="page-breadcrumb"  data-aos="fade-right">';
								
								 if (is_home() || is_front_page()) :
								    echo '<li><a href="'.esc_url($esol_homeLink).'">'.$esol_home_name.'</a></li>';
									echo '<li class="active"><a href="'.esc_url($esol_homeLink).'">'.esc_html(get_bloginfo( 'name' )).'</a></li>';
								 else:
									echo '<li><a href="'.esc_url($esol_homeLink).'">'.$esol_home_name.'</a></li>';
									// Blog Category
									if ( is_day() ) {
										echo '<li class="active"><a href="'. esc_html(get_year_link(get_the_time('Y'))) . '">'. esc_html(get_the_time('Y')) .'</a>';
										echo '<li class="active"><a href="'. esc_html(get_month_link(get_the_time('Y'),get_the_time('m'))) .'">'. esc_html(get_the_time('F')) .'</a>';
										echo '<li class="active"><a href="'. esc_url(esol_cur_page_url()) .'">'. esc_html(get_the_time('d')) .'</a></li>';

									// Blog Month
									} elseif ( is_month() ) {
										echo '<li class="active"><a href="' . esc_html(get_year_link(get_the_time('Y'))) . '">' . esc_html(get_the_time('Y')) . '</a>';
										echo '<li class="active"><a href="'. esc_url(esol_cur_page_url()) .'">'. esc_html(get_the_time('F')) .'</a></li>';

									// Blog Year
									} elseif ( is_year() ) {
										echo '<li class="active"><a href="'. esc_url(esol_cur_page_url()) .'">'. esc_html(get_the_time('Y')) .'</a></li>';

									// Single Post
									} 
									elseif( is_search() )
									{
										echo '<li class="active"><a href="' . esc_url(esol_cur_page_url()) . '">'. get_search_query() .'</a></li>';
									}
									elseif( is_404() )
									{
										echo '<li class="active"><a href="' . esc_url(esol_cur_page_url()) . '">404 Error</a></li>';
									}
									else { 
										// Default
										echo '<li class="active"><a href="' . esc_url(esol_cur_page_url()) . '">'. wp_kses_post(get_the_title()) .'</a></li>';
									}
								endif;
								
								echo '</ul>'
						?>
						</div>
			</div>
		</div>
	</div>
</div>
</div>
 <div class="bottom-shadow"></div>
		<!-- /Page Title Section -->

		<div class="clearfix"></div>
	<?php }
endif
?>