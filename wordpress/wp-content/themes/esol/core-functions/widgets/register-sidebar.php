<?php	
add_action( 'widgets_init', 'esol_widgets');
function esol_widgets() {

/*sidebar*/
register_sidebar( array(
		'name' => __( 'Sidebar Data', 'esol' ),
		'id' => 'sidebar-data',
		'description' => __( 'The primary widget area', 'esol' ),
		'before_widget' => '<div class="sidebar-widget" data-aos="fade-up"  data-aos-duration="1500">',
		'after_widget' => '</ul></div></div>',
		'before_title' => '<div class="sidebar-widget-title"><h2>',
		'after_title' => '</h2></div><div class="widget-content">
				  <ul class="post-content">',
	) );

register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'esol' ),
		'id' => 'footer-widget-area',
		'description' => __( 'footer widget area', 'esol' ),
		'before_widget' => ' <div class="col-md-3 col-sm-6 m-bottom3" data-aos="fade-up"  data-aos-duration="1500">',
		'after_widget' => '</ul></div>',
		'before_title' => '<h4 class="white font20 font-thin">',
		'after_title' =>'</h4><div class="title-line"></div><ul class="list-info one">',
	) );
	
}	                     
?>