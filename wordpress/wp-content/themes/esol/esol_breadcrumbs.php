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
<div class="page-heading-section"></div>
	<?php }
endif
?>