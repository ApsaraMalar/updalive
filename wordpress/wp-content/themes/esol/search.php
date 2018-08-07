<?php get_header(); ?>
<!-- Page heading Section -->
<?php esol_breadcrumbs(); ?>	
<!-- Page heading Section -->

<div class="clearfix"></div>
<section class="blog-section">
	<div class="container ">
		<div class="row">
			<!-- Sidebar Section -->	

			<!-- Blog Area Section -->	
				<div class="col-md-8">
					<?php
						if(have_posts()) :
							while(have_posts()) :
								the_post();
						get_template_part('content','post');
						endwhile;
						else :
						get_template_part('content','none');
						?>
						<?php get_search_form();  
						endif; ?><!--/.blog-item-->	
						<!-- Pagination -->	
						<div class="blog-pagination wow animated fadeInLeft">
							<?php echo wp_kses_post(the_posts_pagination(array( 
							'show_all' => true,
							'prev_text' => '<<', 
							'next_text' => '>>',
							))); ?>
						</div>
						<!---/Pagination------->
				</div>	
			<!-- /Blog Area Section -->
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>		
<?php get_footer(); ?>