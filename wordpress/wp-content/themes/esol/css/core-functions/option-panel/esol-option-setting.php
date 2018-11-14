<?php add_action('admin_menu','ESOL_add_opiotn_page');
function ESOL_add_opiotn_page(){
$page = add_theme_page( __('Esol','esol'), __('About Pro Theme','esol'), 'edit_theme_options', 'esol', 'ESOL_option_panal_function' );
add_action('admin_print_styles-'.$page, 'ESOL_admin_enqueue_scripts');
} 

 function ESOL_admin_enqueue_scripts()
{
		/*====esol Option Panel Style====*/
		wp_enqueue_style('thickbox');	
		wp_enqueue_style('esol-style', get_template_directory_uri().'/core-functions/option-panel/css/style.css');
		wp_enqueue_style('esol-bootstrap', get_template_directory_uri().'/core-functions/option-panel/css/bootstrap.css');
		wp_enqueue_style('esol-font-awesome-4.2.0', get_template_directory_uri().'/core-functions/option-panel/css/font-awesome-4.2.0/css/font-awesome.min.css');//enqueu option panel font-awesome-4.2.0
}
 
function ESOL_option_panal_function()
{ $theme_data = wp_get_theme();	 ?>
<div class="wrapper">
   <div class="at-notify text-center" id="at-notify">
    <a href="https://asiathemes.com" target= _blank ><img src="https://asiathemes.com/wp-content/themes/crazy/images/logo.png"></a>
   </div>
	<div class="at-notify" id="at-notify">
		  <div class="col-md-6">
				<h1><?php _e('Esol','esol');?> <span> <?php _e('Premium','esol');?></span></h1>
				<div class="about-image">
				
				  <a href="https://asiathemes.com/esol-details/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/core-functions/option-panel/images/h.png"></a>
				 	<div class="gallery-grid"  style="margin-top:15px;">
					   <figure>
					   	<img src="<?php echo get_template_directory_uri(); ?>/core-functions/option-panel/images/home.png" class="img-responsive">
					   <div class="overlay-background">
                            <div class="inner"></div>
                        </div>
						 <div class="overlay">
                            <div class="inner-overlay">
                                <div class="inner-overlay-content with-icons">
                                   <h2><?php _e('Home Page','esol'); ?></h2>
								   <a href="https://asiathemes.asia/?item=esol" target= _blank class="hover_thumb gallery-icon"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
					  </figure>
					</div>	
				</div>
			</div>
            <div class="col-md-6">
			  <h1><?php _e('Our Latest','esol'); ?> <span> <?php _e('Features','esol');?></span></h1>
			  <h4><a href="https://asiathemes.asia/?item=esol" target="_blank"><?php _e('Get Our','esol'); ?> <span><?php _e('Premium Theme','esol'); ?></span> <span class="price">Only $35</span></a></h4>
					<ul>
						<li><b><?php _e('We have provide All Templates of 2 Variations in our Premium theme.','esol'); ?></b> </li>
						<li><b> <?php _e('More then 20 Templates pages.','esol'); ?> </b></li>	
	                    <li><b><?php _e('Awesome 2 Types Home page Template.','esol'); ?> </b> </li>						
						<li><b><?php _e('8 types Colours Schemes.','esol'); ?> </b> </li>
						<li><b><?php _e('6 types Awesome Portfolio Page Templates.','esol'); ?></b>  </li>
						<li><b><?php _e('Portfolio Page Templates with awesome Photo-box.','esol'); ?> </b> </li>
						<li><b><?php _e('One Latest GALLERY page portfolio template"Coming Soon".','esol'); ?> </b> </li>
						<li><b><?php _e('Awesome Team pages Template.','esol'); ?> </b> </li>
					</ul>
					<ul>
						<li><b><?php _e('2 Types Of Service Pages Templates.','esol'); ?> </b> </li>
						<li><b> <?php _e('2 Types Of Blog Templates.','esol'); ?></b> </li>
						<li><b><?php _e('One Year Free Support.','esol'); ?> </b></li>
						<li><b> <?php _e('Google Fonts.','esol'); ?> </b> </li>
						<li><b> <?php _e('Ultimate Portfolio layout with Taxonomy Tab effect.','esol'); ?> </b> </li>
						<li><b> <?php _e('Awesome Portfolio Template With Isotope Effect.','esol'); ?> </b> </li>
						<li><b> <?php _e('Ultimate Masonry Gallery.','esol'); ?> </b> </li>
						<li><b> <?php _e('Translation Ready.','esol'); ?> </b></li>
						<li><b> <?php _e('Coming Soon Mode.','esol'); ?></b>  </li>
						<li><b><?php _e('Responsive Design.','esol'); ?></b> </li>
						<li><b><?php _e('Patterns Background.','esol'); ?> </b>  </li>
						<li><b><?php _e('Full Width & Boxed Layout.','esol'); ?> </b> </li>
						<li><b><?php _e('Woo-commerce Plug-in compatible is coming soon.','esol'); ?> </b> </li>
						<li><b><?php _e('Awesome Shortcodes is coming soon.','esol'); ?> </b> </li>					
					</ul>

                   <div class="notify-btn">
					<a href="https://asiathemes.asia/?item=esol" target="_blank" class="at-btn hvr-s-b"><?php _e('View esol Pro Demo','esol'); ?> </a>
					<a href="https://asiathemes.com/esol-details/" target="_blank" class="at-btn hvr-s-b" ><?php _e('Upgrade to Pro Version','esol'); ?></a>
			       </div>					
             </div>				
			
	</div>
<div class="clearfix"></div>


<!-------Header------------>
<div class="header1">
  <div class="logo">
	<h1><?php printf(__('Welcome to %1s %2s', 'esol'), $theme_data->Name, $theme_data->Version ); ?></h1>
	<h2><?php printf(__('Getting Started with %s', 'esol'), $theme_data->Name); ?>:</h2>
	<p class="faq-text"><?php printf('How to set-up Home page ?.','esol'); ?></p>
	<p class="page-text"><?php printf('1. Go to <b>Admin Dashboard >> Pages >> Add new Page</b>. Now select the <b style="color:#2896df;"> " Home-page " </b>template from right sidebar Template select option and publish the page.', 'esol'); ?></p>
	<p class="page-text"><?php printf('2. After that Go to <b>Admin Dashboard >> Settings >> Reading</b>. Now select Static Page and set Front Page and Post Page as your choice.', 'esol'); ?></p>
	<p class="page-text"><?php printf(__('3. %s Theme Customizer for all settings of theme . Click <b style="color:#2896df;"> "Customize Theme" </b> or Click on given below strip <b style="color:#2896df;">"View Customizer"</b> Button to open the Customizer now.',  'esol'), $theme_data->Name); ?></p>
	<h2><?php printf('FAQ.','esol'); ?></h2>
	<p class="page-text"><?php printf('1. Child Theme:','esol'); ?></p>
	<p class="page-text"><?php printf('If you modify the theme and it upgrade with next updated version. Then your modifications will be lost. <br>If you want to protect your modifications then you create child theme. Child theme you will ensure your modifications and speed up your development time ','esol'); ?></p>
	<p class="page-text"><?php printf('For child theme to click on' ,'esol'); ?><span class="notify-btn"><a href="https://codex.wordpress.org/Child_Themes" target="_blank" class="at-btn hvr-s-b"> <?php _e(' Child Theme', 'esol'); ?></a></span>  <?php printf('Button.','esol'); ?> </p>
  </div>
</div>
<br />

<div class="header1">
  <div class="logo">
    <h2><?php _e('We have add all the option Settings inside the customiser, this is powerfull utility of WordPress, with the help of this you can create your site with live preview, ie customizer will provide you the current time preview. We have not changed any structure so you will still be able to access the previously configured data.','esol');?></h2> 
   </div>
</div>
<br />
<div class="clearfix"></div>
<div class="header1">
  <div class="logo">
  <div class="notify-btn">
		<a href="<?php bloginfo ( 'url' );?>/wp-admin/customize.php" target="_blank" class="at-btn hvr-s-b pull-right"><?php _e('View Customizer','esol'); ?></a>
	</div>
	<h2><a href="https://asiathemes.com"><img src="<?php echo get_template_directory_uri();?>/core-functions/option-panel/images/asialogo.png"></a></h2>
	
   </div>
</div>
<div class="clearfix"></div>

<div class="at-notify" id="at-notify">
      <h1 class="text-center"><?php _e('esol Latest Awesome pages','esol');?> </h1>
		  <div class="col-md-6">
				<div class="about-image">
					<div class="gallery-grid"  style="margin-top:15px;">
					   <figure>
					   	<img src="<?php echo get_template_directory_uri(); ?>/core-functions/option-panel/images/home2.png" class="img-responsive">
					   <div class="overlay-background">
                            <div class="inner"></div>
                        </div>
						 <div class="overlay">
                            <div class="inner-overlay">
                                <div class="inner-overlay-content with-icons">
                                   <h2><?php _e('Home Page','esol'); ?></h2>
								   <a href="https://asiathemes.asia/preview/esol/home2/" target= _blank class="hover_thumb gallery-icon"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
					  </figure>
					</div>	
		
				</div>
				
				<h1 class="text-center"><?php _e('Esol Home page 2','esol');?> </h1>
			</div>
    				
			 <div class="col-md-6">
				<div class="about-image">
					<div class="gallery-grid"  style="margin-top:15px;">
					   <figure>
					   	<img src="<?php echo get_template_directory_uri(); ?>/core-functions/option-panel/images/port.png" class="img-responsive">
					   <div class="overlay-background">
                            <div class="inner"></div>
                        </div>
						 <div class="overlay">
                            <div class="inner-overlay">
                                <div class="inner-overlay-content with-icons">
                                   <h2><?php _e('Portfolio Page','esol'); ?></h2>
								   <a href="https://asiathemes.asia/preview/esol/portfolio-3-column/" target= _blank class="hover_thumb gallery-icon"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
					  </figure>
					</div>	
		
				</div>
			 <h1 class="text-center"><?php _e('Esol Portfolio page','esol');?> </h1>	
				
			</div>		
         </div>				
			
	</div>
	<div class="clearfix"></div>
	<div class="at-notify" id="at-notify">
	  <h1 class="text-center"><?php _e('Our Popular Premium Themes','esol');?> </h1>
		  <div class="col-md-6">
				<div class="about-image">
					 <a href="https://asiathemes.com/businessodetail/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/core-functions/option-panel/images/b.png"></a>
				</div>
				<h1 class="text-center"><?php _e('Businesso Premium Theme','esol');?> </h1>
				<div class="notify-btn text-center"><a href="https://asiathemes.com/businessodetail/" target="_blank" class="at-btn hvr-s-b"><?php _e('More Details','esol'); ?> </a></div>
			</div>
			
    		 <div class="col-md-6">
				<div class="about-image">
					 <a href="https://asiathemes.com/hotel-details/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/core-functions/option-panel/images/c.png"></a>
				</div>
				<h1 class="text-center"><?php _e('Hotel-Melbourne Premium Theme','esol');?> </h1>
				<div class="notify-btn text-center"><a href="https://asiathemes.com/hotel-details/" target="_blank" class="at-btn hvr-s-b"><?php _e('More Details','esol'); ?> </a></div>
			</div>	
        </div>				
			
	</div>
	
<div class="clearfix"></div>	

</div>
<div class="clearfix"></div>
<?php }
?>