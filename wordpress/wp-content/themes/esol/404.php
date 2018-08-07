<?php get_header();
esol_breadcrumbs();
?>
<!-- Page heading Section -->

<!-- /Page heading Section -->
<div class="clearfix"></div>

<div class="section-lg">
  <div class="container">
    <div class="row">
     <div class="col-md-6 col-md-offset-3 text-center error-content-1">
			<h1 class="wow fadeInUp" data-wow-duration="1s">4<span>0</span>4</h1>
			
			<h5 class="wow fadeInUp" data-wow-duration="1s"><?php esc_html_e('page not found','esol'); ?></h5>
			
			<h6 class="wow fadeInUp" data-wow-duration="3s"><?php esc_html_e('Ooops, The page you were looking for couldnt be found.','esol'); ?></h6>
			
			<p class="wow fadeInUp" data-wow-duration="6s"><?php esc_html_e('Try searching for the best match or browse the links below:','esol');?></p>
			
			<div class="blog-form top-forty">
				<!-- Contact Form -->                            
				<form class="form">
					<div class="clearfix">
						<div id="contact_message"></div>
					</div>
					<!-- Send Button -->
					<a  href="<?php echo esc_url(home_url());?>" class="error-submit_btn btn btn-large top-forty wow fadeInUp" data-wow-duration="1s"><?php esc_html_e('GO HOMEPAGE','esol'); ?></a>
				</form>
			</div>
		</div>

    </div>
  </div>
</div>
<div class="clearfix"></div>

<?php get_footer(); ?>	