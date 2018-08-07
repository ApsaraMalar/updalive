<div class="blog-area single-recent-blog" data-aos="fade-up" data-aos-duration="1500" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<figure class="blog_img" data-aos="zoom-in" data-aos-duration="1800">
		<?php $esole_default_img = array('class' => "img-responsive");
			if(has_post_thumbnail()) { ?>
				<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('',$esole_default_img);?> </a>
				<?php } else { ?>
					<a href="<?php the_permalink(); ?>"><?php echo '<img alt="" src="'. esc_url(get_template_directory_uri()) . '/images/placeholder.png' .'">';?></a>
				<?php } ?>	
		  <div class="blog-showcase-overlay">
			<div class="blog-showcase-overlay-inner">
				<div class="blog-showcase-icons">							
					<a href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
				</div>
			</div>
		  </div>
	</figure>
			 

</div>

	<?php wp_link_pages( array( 'before' => '<div class="blog-pagination" data-aos="fade-right" data-aos-duration="1200">' . __( 'Pages:', 'esol' ), 'after' => '</div>' ) ); ?>

