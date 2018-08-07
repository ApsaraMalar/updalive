<?php 
function esol_theme_default_data()
  	{
	return $esol_option=array(
	
	//Header Settings
	'header_phone_email_enabled' => true,
	'header_info_phone' =>__('(2)245 23 68','esol'),
	'header_info_mail'=> 'info[at]asiathemes[dot]com',	'slider_image_one1'=> get_template_directory_uri().'/images/callout3.jpg',
	'header_social_media_enabled' => true,
	'social_media_twitter_link' => '#',
	'social_media_facebook_link' => '#',
	'social_media_google_link' => '#',
	'social_media_likdin_link' => '#',
	
	'facebook_media_enabled' => false,
	'twitter_media_enabled' => false,
	'linkdin_media_enabled' => false,
	'google_media_enabled' => false,
	
	// Footer Social Icon Settings
	'footer_social_media_enabled' => false,
	'footer_social_media_facebook_link' => '#',
	'footer_social_media_twitter_link' => '#',
	'footer_social_media_google_link' => '#',
	'footer_social_media_linkedin_link' => '#',
	'footer_social_media_flicker_link' => '#',
	'footer_social_media_youtube_link' => '#',
	'footer_social_media_vimeo_square_link' => '#',
	'footer_social_media_rss_link' => '#',
	
	'footer_facebook_media_enabled' => false,
	'footer_twitter_media_enabled' => false,
	'footer_google_media_enabled' => false,
	'footer_linkedin_media_enabled' => false,
	'footer_flicker_media_enabled' => false,
	'footer_youtube_media_enabled' => false,
	'footer_vimeo_square_media_enabled' => false,
	'footer_rss_media_enabled' => false,
	
	//header logo setting
	'upload_image_logo'=> get_template_directory_uri().'/images/logo.png',
	'upload_image_favicon' => get_template_directory_uri().'/images/favicon.png',
	'text_title' => '' ,
	'height' => '50',
	'width' => '250',
	
	// Fooetr Customization
	'footer_customization_text' => __('@ 2017 Esol Theme powered by WordPress Developed by ASIATHEMES','esol'),
	'footer_customization_develop' =>'',
	'develop_by_name' => '',
	'develop_by_link' => ''	);
  	}
  ?>