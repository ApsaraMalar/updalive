<?php
add_action( 'customize_register', 'esol_header_customizer' );
function esol_header_customizer( $esol_wp_customize ) {
wp_enqueue_style('esol-customizr', get_template_directory_uri() .'/css/customizr.css');
$esol_wp_customize->remove_control('header_textcolor');

/* Header Section */
	$esol_wp_customize->add_panel( 'header_options', array(
		'priority'       => 1,
		'capability'     => 'edit_theme_options',
		'title'      => __('Theme Options Settings', 'esol'),
	) );
	
   	$esol_wp_customize->add_section( 'header_front_data' , array(
		'title'      => __('Custom Header Settings', 'esol'),
		'panel'  => 'header_options',
		'priority'   => 20,
   	) );
	
	//Show and hide Header Email and Phone
	$esol_wp_customize->add_setting(
	'esol_option[header_phone_email_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$esol_wp_customize->add_control(
    'esol_option[header_phone_email_enabled]',
    array(
        'label' => __('Enable/Disable Mobile and Email','esol'),
        'section' => 'header_front_data',
        'type' => 'checkbox',
    )
	);
	
	//Email and Mobile
	$esol_wp_customize->add_setting(
	'esol_option[header_info_phone]', array(
        'default'        => __('(2)245 23 68','esol'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $esol_wp_customize->add_control('esol_option[header_info_phone]', array(
        'label'   => __('Header Headline :', 'esol'),
        'section' => 'header_front_data',
        'type'    => 'text',
    ));
	$esol_wp_customize->add_setting('esol_option[header_info_mail]'
		, array(
        'default'        => 'info[at]asiathemes[dot]com',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $esol_wp_customize->add_control( 'esol_option[header_info_mail]', array(
        'label'   => __('Header Text :', 'esol'),
        'section' => 'header_front_data',
        'type'    => 'text',
    ));
	$esol_wp_customize->add_setting(
	'esol_option[slider_image_one1]', 
	array( 'default' => get_template_directory_uri().'/images/callout3.jpg',
	'capability'     => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',
	'type' => 'option',    ));
	
	$esol_wp_customize->add_control( new WP_Customize_Image_Control( $esol_wp_customize,'esol_option[slider_image_one1]',
	array( 'label' => __( 'Upload Title Strip bg Image', 'esol' ),
	'section' => 'header_front_data',
	//'priority'   => 150,			   
	)));
	//Show and hide Header Social Icons
	$esol_wp_customize->add_setting(
	'esol_option[header_social_media_enabled]'
    ,
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$esol_wp_customize->add_control(
    'esol_option[header_social_media_enabled]',
    array(
        'label' => __('Show Social icons','esol'),
        'section' => 'header_front_data',
        'type' => 'checkbox',
    )
	);
	
	// Facebook link
	$esol_wp_customize->add_setting(
    'esol_option[social_media_facebook_link]',
    array(
        'default' => '#',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    )
	
	);
	$esol_wp_customize->add_control(
    'esol_option[social_media_facebook_link]',
    array(
        'label' => __('Facebook URL','esol'),
        'section' => 'header_front_data',
        'type' => 'text',
    )
	);

	$esol_wp_customize->add_setting(
	'esol_option[facebook_media_enabled]',array(
	'default' => false,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$esol_wp_customize->add_control(
    'esol_option[facebook_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','esol'),
        'section' => 'header_front_data',
    )
);

//twitter link
	
	$esol_wp_customize->add_setting(
    'esol_option[social_media_twitter_link]',
    array(
        'default' => '#',
		'type' => 'theme_mod',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    )
	
	);
	$esol_wp_customize->add_control(
    'esol_option[social_media_twitter_link]',
    array(
        'label' => __('Twitter URL','esol'),
        'section' => 'header_front_data',
        'type' => 'text',
    )
	);

	$esol_wp_customize->add_setting(
	'esol_option[twitter_media_enabled]'
    ,array(
	'default' => false,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$esol_wp_customize->add_control(
    'esol_option[twitter_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','esol'),
        'section' => 'header_front_data',
    )
);
	//googlelink
	
	$esol_wp_customize->add_setting(
	'esol_option[social_media_google_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    )
	
	);
	$esol_wp_customize->add_control(
    'esol_option[social_media_google_link]',
    array(
        'label' => __('Google URL','esol'),
        'section' => 'header_front_data',
        'type' => 'text',
    )
	);

	$esol_wp_customize->add_setting(
	'esol_option[google_media_enabled]'
	,array(
	'default' => false,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$esol_wp_customize->add_control(
    	'esol_option[google_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','esol'),
        'section' => 'header_front_data',
    )
);



//Linkdin
	
	$esol_wp_customize->add_setting(
	'esol_option[social_media_likdin_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    )
	
	);
	$esol_wp_customize->add_control(
    'esol_option[social_media_likdin_link]',
    array(
        'label' => __('Linkdin URL','esol'),
        'section' => 'header_front_data',
        'type' => 'text',
    )
	);

	$esol_wp_customize->add_setting(
	'esol_option[linkdin_media_enabled]'
	,array(
	'default' => false,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$esol_wp_customize->add_control(
    	'esol_option[linkdin_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','esol'),
        'section' => 'header_front_data',
    )
);

	// Footer social Icon
	$esol_wp_customize->add_section(
        'header_social_icon',
        array(
            'title' => 'Footer Social Link ',
			'panel' => 'header_options',
			'priority' => 23,
        )
    );
	//Show and hide Footer Social Icons
	$esol_wp_customize->add_setting(
	'esol_option[footer_social_media_enabled]'
    ,
    array(
        'default' => false,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$esol_wp_customize->add_control(
    'esol_option[footer_social_media_enabled]',
    array(
        'label' => __('Show Social icons','esol'),
        'section' => 'header_social_icon',
        'type' => 'checkbox',
    )
	);
	
	// Facebook link
	$esol_wp_customize->add_setting(
    'esol_option[footer_social_media_facebook_link]',
    array(
        'default' => '#',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    )
	
	);
	$esol_wp_customize->add_control(
    'esol_option[footer_social_media_facebook_link]',
    array(
        'label' => __('Facebook URL','esol'),
        'section' => 'header_social_icon',
        'type' => 'text',
    )
	);

	$esol_wp_customize->add_setting(
	'esol_option[footer_facebook_media_enabled]',array(
	'default' => false,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$esol_wp_customize->add_control(
    'esol_option[footer_facebook_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','esol'),
        'section' => 'header_social_icon',
    )
);
	//twitter link
	
	$esol_wp_customize->add_setting(
    'esol_option[footer_social_media_twitter_link]',
    array(
        'default' => '#',
		'type' => 'theme_mod',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    )
	
	);
	$esol_wp_customize->add_control(
    'esol_option[footer_social_media_twitter_link]',
    array(
        'label' => __('Twitter URL','esol'),
        'section' => 'header_social_icon',
        'type' => 'text',
    )
	);

	$esol_wp_customize->add_setting(
	'esol_option[footer_twitter_media_enabled]'
    ,array(
	'default' => false,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$esol_wp_customize->add_control(
    'esol_option[footer_twitter_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','esol'),
        'section' => 'header_social_icon',
    )
);

	//googlelink
	
	$esol_wp_customize->add_setting(
	'esol_option[footer_social_media_google_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    )
	
	);
	$esol_wp_customize->add_control(
    'esol_option[footer_social_media_google_link]',
    array(
        'label' => __('Google URL','esol'),
        'section' => 'header_social_icon',
        'type' => 'text',
    )
	);

	$esol_wp_customize->add_setting(
	'esol_option[footer_google_media_enabled]'
	,array(
	'default' => false,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$esol_wp_customize->add_control(
    	'esol_option[footer_google_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','esol'),
        'section' => 'header_social_icon',
    )
);


	//Linkdin link
	
	$esol_wp_customize->add_setting(
	'esol_option[footer_social_media_linkedin_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    )
	
	);
	$esol_wp_customize->add_control(
    'esol_option[footer_social_media_linkedin_link]',
    array(
        'label' => __('Linkdin URL','esol'),
        'section' => 'header_social_icon',
        'type' => 'text',
    )
	);

	$esol_wp_customize->add_setting(
	'esol_option[footer_linkedin_media_enabled]'
	,array(
	'default' => false,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$esol_wp_customize->add_control(
    	'esol_option[footer_linkedin_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','esol'),
        'section' => 'header_social_icon',
    )
);
	
	//Flicker  link
	
	$esol_wp_customize->add_setting(
	'esol_option[footer_social_media_flicker_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    )
	
	);
	$esol_wp_customize->add_control(
    'esol_option[footer_social_media_flicker_link]',
    array(
        'label' => __('Flicker URL','esol'),
        'section' => 'header_social_icon',
        'type' => 'text',
    )
	);

	$esol_wp_customize->add_setting(
	'esol_option[footer_flicker_media_enabled]'
	,array(
	'default' => false,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$esol_wp_customize->add_control(
    	'esol_option[footer_flicker_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','esol'),
        'section' => 'header_social_icon',
    )
);

	//Youtube  link
	
	$esol_wp_customize->add_setting(
	'esol_option[footer_social_media_youtube_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    )
	
	);
	$esol_wp_customize->add_control(
    'esol_option[footer_social_media_youtube_link]',
    array(
        'label' => __('Youtube URL','esol'),
        'section' => 'header_social_icon',
        'type' => 'text',
    )
	);

	$esol_wp_customize->add_setting(
	'esol_option[footer_youtube_media_enabled]'
	,array(
	'default' => false,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$esol_wp_customize->add_control(
    	'esol_option[footer_youtube_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','esol'),
        'section' => 'header_social_icon',
    )
);


	//Vimeo square link
	
	$esol_wp_customize->add_setting(
	'esol_option[footer_social_media_vimeo_square_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    )
	
	);
	$esol_wp_customize->add_control(
    'esol_option[footer_social_media_vimeo_square_link]',
    array(
        'label' => __('Vimeo URL','esol'),
        'section' => 'header_social_icon',
        'type' => 'text',
    )
	);

	$esol_wp_customize->add_setting(
	'esol_option[footer_vimeo_square_media_enabled]'
	,array(
	'default' => false,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$esol_wp_customize->add_control(
    	'esol_option[footer_vimeo_square_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','esol'),
        'section' => 'header_social_icon',
    )
);


	//rss link
	
	$esol_wp_customize->add_setting(
	'esol_option[footer_social_media_rss_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    )
	
	);
	$esol_wp_customize->add_control(
    'esol_option[footer_social_media_rss_link]',
    array(
        'label' => __('rss URL','esol'),
        'section' => 'header_social_icon',
        'type' => 'text',
    )
	);

	$esol_wp_customize->add_setting(
	'esol_option[footer_rss_media_enabled]'
	,array(
	'default' => false,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$esol_wp_customize->add_control(
    	'esol_option[footer_rss_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Open Link New tab/window','esol'),
        'section' => 'header_social_icon',
    )
);	
	// Footer Copyright Option Settings
	$esol_wp_customize->add_section( 'footer_copyright_setting' , array(
		'title'      => __('Footer Customization', 'esol'),
		'panel'  => 'header_options',
		'priority' => 39,
   	) );
	$esol_wp_customize->add_setting(
	'esol_option[footer_customization_text]'
		, array(
        'default'        => __('@ 2017 Esol Theme powered by WordPress Developed by ASIATHEMES','esol'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=> 'option',
    ));
    $esol_wp_customize->add_control( 'esol_option[footer_customization_text]', array(
        'label'   => __('Footer Customization Text', 'esol'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    ));	
	
	$esol_wp_customize->add_setting(
	'esol_option[footer_customization_develop]'
		, array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=> 'option',
    ));
    $esol_wp_customize->add_control( 'esol_option[footer_customization_develop]', array(
        'label'   => __('Footer Customization Reserved By', 'esol'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    ));
	
	$esol_wp_customize->add_setting(
	'esol_option[develop_by_name]'
		, array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=> 'option',
    ));
    $esol_wp_customize->add_control( 'esol_option[develop_by_name]', array(
        'label'   => __('Theme Reserved By Content', 'esol'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    ));
	
	$esol_wp_customize->add_setting(
	'esol_option[develop_by_link]'
		, array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type'=> 'option',
    ));
    $esol_wp_customize->add_control( 'esol_option[develop_by_link]', array(
        'label'   => __('Theme Developed By Link', 'esol'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    ));
	
	$esol_wp_customize->add_section( 'esol_pro' , array(
				'title'      	=> __( 'Upgrade to esol Premium', 'esol' ),
				'priority'   	=> 999,
				'panel'=>'header_options',
			) );

			$esol_wp_customize->add_setting( 'esol_pro', array(
				'default'    		=> null,
				'sanitize_callback' => 'sanitize_text_field',
			) );

			$esol_wp_customize->add_control( new More_esol_Control( $esol_wp_customize, 'esol_pro', array(
				'label'    => __( 'esol Premium', 'esol' ),
				'section'  => 'esol_pro',
				'settings' => 'esol_pro',
				'priority' => 1,
			) ) );
} 
/* Custom Control Class */
if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'esol_Customize_Misc_Control' ) ) :
class esol_Customize_Misc_Control extends WP_Customize_Control {
    public $esol_settings = 'blogname';
    public $esol_description = '';
    public function render_content() {
        switch ( $this->type ) {
            default:
           
            case 'heading':
                echo '<span class="customize-control-title">' . esc_html( $this->label ) . '</span>';
                break;
 
            case 'line' :
                echo '<hr />';
                break;
			
        }
    }
}
endif;
if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'More_esol_Control' ) ) :
class More_esol_Control extends WP_Customize_Control {

	/**
	* Render the content on the theme customizer page
	*/
	public function render_content() {
		?>
		<label style="overflow: hidden; zoom: 1;">
			<div class="col-md-2 col-sm-6 content-btn">					
					<a style="margin-bottom:20px;margin-left:20px;" href="https://asiathemes.com/esol-details/" target="blank" class="btn pro-btn-success btn"><?php esc_html_e('Upgrade to esol Premium','esol'); ?> </a>
			</div>
			<div class="col-md-4 col-sm-6">
				<img class="esol_img_responsive " src="<?php echo esc_url(get_template_directory_uri()) .'/images/esol.jpg'?>">
			</div>			
			<div class="col-md-3 col-sm-6">
				<h3 style="margin-top:10px;margin-left: 20px;text-decoration:underline;color:#0099ff;"><?php echo esc_html_e( 'esol Premium - Features','esol'); ?></h3>
					<ul style="padding-top:20px">
						<li class="esol-content" style="color:#0099ff"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('One Year Free Support ','esol'); ?> </li>						
						<li class="esol-content"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('More than 10 Templates','esol'); ?> </li>
						<li class="esol-content"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('3 Types of Portfolio Templates','esol'); ?></li>
						<li class="esol-content"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('8 types Themes Colors Scheme','esol'); ?></li>
						<li class="esol-content"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Patterns Background','esol'); ?>   </li>
						<li class="esol-content"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible','esol'); ?>   </li>
						<li class="esol-content"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Ultimate Portfolio layout with Taxonomy Tab effect','esol'); ?> </li>
						<li class="esol-content"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Coming Soon Mode','esol'); ?>  </li>
						<li class="esol-content"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Google Fonts','esol'); ?>  </li>
					
					</ul>
			</div>
			<div class="col-md-2 col-sm-6 content-btn">					
					<a style="margin-bottom:20px;margin-left:20px;" href="https://asiathemes.com/esol-details/" target="blank" class="btn pro-btn-success btn"><?php esc_html_e('Upgrade to esol Premium','esol'); ?> </a>
			</div>
		</label>
		<?php
	}
}
endif;