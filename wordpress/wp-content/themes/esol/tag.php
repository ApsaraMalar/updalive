<?php get_header(); ?>
<?php esol_breadcrumbs(); ?>
<div class="clearfix"></div>
<section class="blog-section">
	<div class="container ">
		<div class="row">
			<div class="col-md-8">
			<?php
				if(have_posts()) :
					while(have_posts()) :
						the_post();
				get_template_part('content','post');
				endwhile; endif; ?>		
				<div class="blog-pagination" data-aos="fade-right" data-aos-duration="1200">
					<?php echo wp_kses_post(the_posts_pagination(array( 
					'show_all' => true,
					'prev_text' => '<<', 
					'next_text' => '>>',
					))); ?>
				</div>
			</div>	
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>		
<?php get_footer(); ?>