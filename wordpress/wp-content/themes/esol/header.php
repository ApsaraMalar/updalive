<?php 
session_start();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php 
	$esol_options=esol_theme_default_data(); 
	$esol_header_setting = wp_parse_args(  get_option( 'esol_option', array() ), $esol_options ); ?>	 
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />

	<?php wp_head(); ?>
  </head>
<body <?php body_class(); ?> ><style>.page-heading-section {    background: url('<?php  echo esc_url($esol_header_setting['slider_image_one1']); ?>') no-repeat fixed 0 0 / cover rgba(0, 0, 0, 0);    margin: 0 0 0px;    overflow: hidden;    padding: 0;    width: 100%;    margin-top: 0px !important;}</style>
<div class="wrapper">
<!--------Header--------->
   <!-------Header info------->
<div class="header-top">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<ul class="head-contact-info">
				<?php if($esol_header_setting['header_phone_email_enabled']== 1 ) { ?>
				    <li><i class="fa fa-envelope"></i><?php echo esc_html($esol_header_setting['header_info_mail']); ?></li>			
					<li ><i class="fa fa-phone"></i><?php echo esc_html($esol_header_setting['header_info_phone']); ?></li>	
				<?php } ?>
				</ul>
			</div>
			
			<div class="col-sm-6">
				<ul class="head-contact-social">
				<?php
				if($esol_header_setting['header_social_media_enabled']== 1 ) {
					
					if($esol_header_setting['social_media_facebook_link']!='') { ?> 
						<li class="facebook"><a href="<?php echo esc_url($esol_header_setting['social_media_facebook_link']); ?>"<?php if( $esol_header_setting['facebook_media_enabled'] ==1 ) { echo "target='_blank'"; } ?>><i class="fa fa-facebook"></i></a></li>
						<?php }
					if($esol_header_setting['social_media_twitter_link']!='') {?>
						<li class="twitter"><a href="<?php echo esc_url($esol_header_setting['social_media_twitter_link']); ?>"<?php if( $esol_header_setting['twitter_media_enabled'] ==1 ) { echo "target='_blank'"; } ?>><i class="fa fa-twitter"></i></a></li>
						<?php }
						
						if($esol_header_setting['social_media_google_link']!='') { ?> 
						<li class="googleplus"><a href="<?php echo esc_url($esol_header_setting['social_media_google_link']); ?>"<?php if( $esol_header_setting['google_media_enabled'] ==1 ) { echo "target='_blank'"; } ?>><i class="fa fa-google-plus"></i></a></li>
						<?php }
					  
						if($esol_header_setting['social_media_likdin_link']!='') { ?> 
						<li class="linkedin"><a href="<?php echo esc_url($esol_header_setting['social_media_likdin_link']); ?>"<?php if( $esol_header_setting['linkdin_media_enabled'] ==1 ) { echo "target='_blank'"; } ?>><i class="fa fa-linkedin"></i></a></li>
						<?php }
					
					
				}?>
			</ul>	
			</div>	
		</div>	

	</div>
</div>	
<!-------/Header info------->	 
<!------Menu section-------->
<!-- start header -->
<div class="header sticky-navigation">
     <span class="bottom-shadow1"></span>
    <div class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
				<div class="site-logo">
					<div class="site-branding">
							<?php esol_the_custom_logo(); ?>

							<?php if ( is_front_page() && is_home() ) : ?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html(bloginfo( 'name' )); ?></a></h1>
							<?php else : ?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html(bloginfo( 'name' )); ?></a></p>
							<?php endif;

							$esol_description = get_bloginfo( 'description', 'display' );
							if ( $esol_description || is_customize_preview() ) : ?>
								<p class="site-description"><?php echo esc_html($esol_description); ?></p>
							<?php endif; ?>
					</div>
				</div> 
		   </div>
			<div class="collapse navbar-collapse">
				<?php	
				wp_nav_menu( array(  
										'theme_location' => 'primary',
										'container'  => 'collapse navbar-collapse',
										'menu_class' => 'nav navbar-nav navbar-right',
										'fallback_cb' => 'esol_fallback_page_menu',
										'walker' => new esol_nav_walker()
										)
			);	?> 
			</div><!--/.nav-collapse -->
		</div>
    </div>
</div>
  <?php if ( get_header_image() ) : ?>
				<?php
					$esol_custom_header_sizes = apply_filters( 'esol_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $esol_custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>
