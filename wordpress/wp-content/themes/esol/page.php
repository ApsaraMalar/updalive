 1<?php get_header(); ?>
<!-- Page heading Section -->
<?php esol_breadcrumbs(); ?>	
<!-- Page heading Section -->
<div class="clearfix"></div>

	<div class="container ">
		<div class="row"><!-- Blog Area Section -->	
			<div class="col-md-8">
				<?php
				if(have_posts()):
					the_post(); ?>
					<p><?php the_content(); ?></p>
				<div class="blog-area" data-aos="fade-up" data-aos-duration="200" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<h3 class="content_headings_black"><a href="<?php the_permalink(); ?>"><?php  ?></a></h3>	
				</div><!--/.blog-item-->	
				<?php endif; 								comments_template( '', true ); ?>
			</div>			
			<!-- /Blog Area Section -->
			<?php get_sidebar(); ?>
		</div>
	</div>
	
<?php get_footer(); ?>