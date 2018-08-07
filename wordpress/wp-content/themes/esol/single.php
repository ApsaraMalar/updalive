<?php get_header(); ?>
<!-- Page heading Section -->
<?php esol_breadcrumbs(); ?>
<!-- /Page Title Section -->
<section class="blog-section single-blog-page">
<div class="container ">
	<div class="row">
<!-- blog-area -->
		<div class="col-md-8">
			<div class="blog-post">
				<div class="row">
				<?php 
				if(have_posts()) :
					the_post(); ?>
					<div class="col-md-12">
						<div class="blog-item" data-aos="fade-up" data-aos-duration="1500">
						 <?php $esol_default_img = array('class' => "img-responsive");?>
								<?php if(has_post_thumbnail()) : ?>
										<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('',$esol_default_img);?> </a>
										<?php endif; ?>
							<div class="text-content">
								<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
								<span><?php the_author(); ?> / <?php the_date(); ?></span>
								<p><?php the_content(); ?></p>
								<?php wp_link_pages( array( 'before' => '<div class="blog-pagination wow animated fadeInLeft">' . __( 'Pages:', 'esol' ), 'after' => '</div>' ) ); ?>
							</div>
							
						</div>
					</div>
					<?php endif; comments_template( '', true );?>
				</div>
			</div>
		</div>	
<!-- Sidebar Section -->	
<?php get_sidebar(); ?>	
	</div>
</div>
</section>	
<?php get_footer(); ?>	