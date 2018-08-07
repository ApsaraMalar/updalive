<div class="col-md-4">
		<div class="sidebar sidebar-section">
			<!--Search-->
			<?php if ( is_active_sidebar( 'sidebar-data' ) )
				{ dynamic_sidebar( 'sidebar-data' );	} else { 
				$esol_default_widget= array(
				'before_widget' => '<div class="sidebar-widget" data-aos="fade-up" data-aos-duration="1500">',
		'after_widget' => '</ul></div></div>',
		'before_title' => '<div class="sidebar-widget-title"><h2>',
		'after_title' => '</h2></div><div class="widget-content">
				  <ul class="post-content">');
					the_widget('WP_Widget_Search', 'title=Search', $esol_default_widget);
					the_widget('WP_Widget_Calendar', 'title=Calendar', $esol_default_widget);
					the_widget('WP_Widget_Categories', null, $esol_default_widget);
					the_widget('WP_Widget_Archives', null, $esol_default_widget);
					the_widget('WP_Widget_Tag_Cloud', null, $esol_default_widget);
					}
				
				?>
			<!--/Tags Widget-->
		</div>
	</div>