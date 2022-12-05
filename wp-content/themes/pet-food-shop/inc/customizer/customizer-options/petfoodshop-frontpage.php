<?php
function petfoodshop_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'petfoodshop_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'pet-food-shop' ),
		)
	);
	


	/*=========================================
	Slider Section
	=========================================*/
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Slider Section', 'pet-food-shop' ),
			'priority' => 1,
			'panel' => 'petfoodshop_frontpage_sections',
		)
	);


	$wp_customize->add_setting('petfoodshop_reset_slider_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new petfoodshop_Reset_Custom_Control($wp_customize, 'petfoodshop_reset_slider_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Slider Settings', 'pet-food-shop'),
	  'description' => 'petfoodshop_slider_reset_settings',
	  'section' => 'slider_setting'
	)));
	

	$wp_customize->add_setting('petfoodshop_slider_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new petfoodshop_Tab_Control($wp_customize, 'petfoodshop_slider_tabs', array(
	   'section' => 'slider_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'pet-food-shop'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'slider1',
            	'slider2',
            	'slider3',
            	'slider4',
            	'slider5',
            	'slider6'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'pet-food-shop'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
                'slider_titlecolor',
                'slider_descriptioncolor',
                'slider_btntxt1color',
                'slider_btnbg1color',
                'slider_btnbg1hovercolor',
                'slider_btntext1hovercolor',
                'slider_bgcolor'

            ),
     	)
	    
    	),
	))); 


	

	// General Tab

	// Slider 1
	$wp_customize->add_setting( 
    	'slider1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider1',
		array(
		    'label'   		=> __('Slider 1','pet-food-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		



	// Slider 2
	$wp_customize->add_setting(
    	'slider2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider2',
		array(
		    'label'   		=> __('Slider 2','pet-food-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 3
	$wp_customize->add_setting(
    	'slider3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'slider3',
		array(
		    'label'   		=> __('Slider 3','pet-food-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 4
	$wp_customize->add_setting(
    	'slider4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'slider4',
		array(
		    'label'   		=> __('Slider 4','pet-food-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);



	// Slider 5
	$wp_customize->add_setting(
    	'slider5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider5',
		array(
		    'label'   		=> __('Slider 5','pet-food-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// Slider 6
	$wp_customize->add_setting(
    	'slider6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider6',
		array(
		    'label'   		=> __('Slider 6','pet-food-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);


	// Style setting

	// slider title Color
	$slidertitlecolor = esc_html__('#000', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'slider_titlecolor',
    	array(
			'default' => $slidertitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_titlecolor',
		array(
		    'label'   		=> __('Title Color','pet-food-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// slider description Color
	$sliderdescriptioncolor = esc_html__('#000', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'slider_descriptioncolor',
    	array(
			'default' => $sliderdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_descriptioncolor',
		array(
		    'label'   		=> __('Description Color','pet-food-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btntxt1 Color
	$sliderbtntxt1color = esc_html__('#000', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'slider_btntxt1color',
    	array(
			'default' => $sliderbtntxt1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btntxt1color',
		array(
		    'label'   		=> __('Button Text Color','pet-food-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btnbg1 Color
	$sliderbtnbg1color = esc_html__('#f3da15', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'slider_btnbg1color',
    	array(
			'default' => $sliderbtnbg1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btnbg1color',
		array(
		    'label'   		=> __('Button BG Color','pet-food-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// slider btnbg1hover Color
	$sliderbtnbg1hovercolor = esc_html__('#fd0101', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'slider_btnbg1hovercolor',
    	array(
			'default' => $sliderbtnbg1hovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btnbg1hovercolor',
		array(
		    'label'   		=> __('Button BG Hover Color','pet-food-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btntext1hover Color
	$sliderbtntext1hovercolor = esc_html__('#fff', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'slider_btntext1hovercolor',
    	array(
			'default' => $sliderbtntext1hovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btntext1hovercolor',
		array(
		    'label'   		=> __('Button Text Hover Color','pet-food-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// slider bg Color
	$sliderbgcolor = esc_html__('#f3da15', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'slider_bgcolor',
    	array(
			'default' => $sliderbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_bgcolor',
		array(
		    'label'   		=> __('BG Color','pet-food-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	/*=========================================
	Popular Products Section
	=========================================*/
	$wp_customize->add_section(
		'popularproducts_setting', array(
			'title' => esc_html__( 'Popular Products Section', 'pet-food-shop' ),
			'priority' => 4,
			'panel' => 'petfoodshop_frontpage_sections',
		)
	);


	$wp_customize->add_setting('petfoodshop_reset_popularproducts_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new petfoodshop_Reset_Custom_Control($wp_customize, 'petfoodshop_reset_popularproducts_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Products Settings', 'pet-food-shop'),
	  'description' => 'petfoodshop_popularproducts_reset_settings',
	  'section' => 'popularproducts_setting'
	)));
	

	$wp_customize->add_setting('petfoodshop_popularproducts_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new petfoodshop_Tab_Control($wp_customize, 'petfoodshop_popularproducts_tabs', array(
	   'section' => 'popularproducts_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'pet-food-shop'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'popularproducts_heading',
            	'popularproducts_bannertext1',
            	'popularproducts_bannertext2',
            	'popularproducts_bannertext3',
            	'popularproducts_bannertext4',
            	'popularproducts_bannerimage'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'pet-food-shop'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'popularproducts_headingcolor',
            	'popularproducts_bordercolor',
            	'popularproducts_iconcolor',
            	'popularproducts_titlecolor',
            	'popularproducts_pricecolor',
            	'popularproducts_btnbgcolor',
            	'popularproducts_btntxtcolor',
            	'popularproducts_btntxthovercolor',
            	'popularproducts_btnbghovercolor',
            	'popularproducts_bannertxtcolor',
            	'popularproducts_bannertxtoffercolor',
            	'popularproducts_bannerbgcolor',
            	'popularproducts_bannerbordercolor'

            ),
     	)
	    
    	),
	))); 



	// popularproducts heading
	$popularproductsheading = esc_html__('Popular Products', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'popularproducts_heading',
    	array(
			'default' => $popularproductsheading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_heading',
		array(
		    'label'   		=> __('Heading','pet-food-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// popularproducts heading
	$popularproductsbannertext1 = esc_html__('BEST DEAL OF THE DAY', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'popularproducts_bannertext1',
    	array(
			'default' => $popularproductsbannertext1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_bannertext1',
		array(
		    'label'   		=> __('Banner Text 1','pet-food-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// popularproducts heading
	$popularproductsbannertext2 = esc_html__('Save 10%', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'popularproducts_bannertext2',
    	array(
			'default' => $popularproductsbannertext2,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_bannertext2',
		array(
		    'label'   		=> __('Banner Text 2','pet-food-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// popularproducts heading
	$popularproductsbannertext3 = esc_html__('On Dogs Food', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'popularproducts_bannertext3',
    	array(
			'default' => $popularproductsbannertext3,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_bannertext3',
		array(
		    'label'   		=> __('Banner Text 3','pet-food-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// popularproducts heading
	$popularproductsbannertext4 = esc_html__('100% Organic Food For Your Pet!', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'popularproducts_bannertext4',
    	array(
			'default' => $popularproductsbannertext4,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_bannertext4',
		array(
		    'label'   		=> __('Banner Text 4','pet-food-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	$wp_customize->add_setting(
    	'popularproducts_bannerimage',
	    array(
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'popularproducts_bannerimage',
	        array(
			    'label'   		=> __('Banner Image','pet-food-shop'),
	            'section' => 'popularproducts_setting',
	            'settings' => 'popularproducts_bannerimage',
	            'description' => __('Recommended Image Size: 106X106px', 'pet-food-shop')
	        )
	    )
	);


	// popularproducts heading
	$popularproductsheadingcolor = esc_html__('#000 ', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'popularproducts_headingcolor',
    	array(
			'default' => $popularproductsheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_headingcolor',
		array(
		    'label'   		=> __('Heading Color','pet-food-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// popularproducts border1
	$popularproductsborder1color = esc_html__('#000 ', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'popularproducts_bordercolor',
    	array(
			'default' => $popularproductsborder1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_bordercolor',
		array(
		    'label'   		=> __('Border Color','pet-food-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// popularproducts icon
	$popularproductsicon1color = esc_html__('#fe0101 ', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'popularproducts_iconcolor',
    	array(
			'default' => $popularproductsicon1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_iconcolor',
		array(
		    'label'   		=> __('Icon Color','pet-food-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// popularproducts title
	$popularproductstitlecolor = esc_html__('#000 ', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'popularproducts_titlecolor',
    	array(
			'default' => $popularproductstitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_titlecolor',
		array(
		    'label'   		=> __('Title Color','pet-food-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// popularproducts price
	$popularproductspricecolor = esc_html__('#fd0101 ', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'popularproducts_pricecolor',
    	array(
			'default' => $popularproductspricecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_pricecolor',
		array(
		    'label'   		=> __('Price Color','pet-food-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// popularproducts btnbg
	$popularproductsbtnbgcolor = esc_html__('#f3da15 ', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'popularproducts_btnbgcolor',
    	array(
			'default' => $popularproductsbtnbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_btnbgcolor',
		array(
		    'label'   		=> __('Button BG Color','pet-food-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// popularproducts btntxt
	$popularproductsbtntxtcolor = esc_html__('#000 ', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'popularproducts_btntxtcolor',
    	array(
			'default' => $popularproductsbtntxtcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_btntxtcolor',
		array(
		    'label'   		=> __('Button Text Color','pet-food-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// popularproducts btntxthover
	$popularproductsbtntxthovercolor = esc_html__('#fff ', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'popularproducts_btntxthovercolor',
    	array(
			'default' => $popularproductsbtntxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_btntxthovercolor',
		array(
		    'label'   		=> __('Button Text Hover Color','pet-food-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// popularproducts btnbghover
	$popularproductsbtnbghovercolor = esc_html__('#fd0101 ', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'popularproducts_btnbghovercolor',
    	array(
			'default' => $popularproductsbtnbghovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_btnbghovercolor',
		array(
		    'label'   		=> __('Button BG Hover Color','pet-food-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// popularproducts bannertxt
	$popularproductsbannertxtcolor = esc_html__('#000 ', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'popularproducts_bannertxtcolor',
    	array(
			'default' => $popularproductsbannertxtcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_bannertxtcolor',
		array(
		    'label'   		=> __('Banner Text Color','pet-food-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// popularproducts bannertxtoffer
	$popularproductsbannertxtoffercolor = esc_html__('#fd1901 ', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'popularproducts_bannertxtoffercolor',
    	array(
			'default' => $popularproductsbannertxtoffercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_bannertxtoffercolor',
		array(
		    'label'   		=> __('Banner Offer Color','pet-food-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// popularproducts bannerbg
	$popularproductsbannerbgcolor = esc_html__('#fdb303 ', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'popularproducts_bannerbgcolor',
    	array(
			'default' => $popularproductsbannerbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_bannerbgcolor',
		array(
		    'label'   		=> __('Banner BG Color','pet-food-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// popularproducts bannerborder
	$popularproductsbannerbordercolor = esc_html__('#fd1901 ', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'popularproducts_bannerbordercolor',
    	array(
			'default' => $popularproductsbannerbordercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_bannerbordercolor',
		array(
		    'label'   		=> __('Banner Border Color','pet-food-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	/*=========================================
	New Arrival Section
	=========================================*/
	$wp_customize->add_section(
		'newarrival_setting', array(
			'title' => esc_html__( 'New Arrival Section', 'pet-food-shop' ),
			'priority' => 4,
			'panel' => 'petfoodshop_frontpage_sections',
		)
	);


	$wp_customize->add_setting('petfoodshop_reset_newarrival_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new petfoodshop_Reset_Custom_Control($wp_customize, 'petfoodshop_reset_newarrival_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset New Arrival Settings', 'pet-food-shop'),
	  'description' => 'petfoodshop_newarrival_reset_settings',
	  'section' => 'newarrival_setting'
	)));
	

	$wp_customize->add_setting('petfoodshop_newarrival_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new petfoodshop_Tab_Control($wp_customize, 'petfoodshop_newarrival_tabs', array(
	   'section' => 'newarrival_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'pet-food-shop'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'newarrival_heading'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'pet-food-shop'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'newarrival_bgcolor',
            	'newarrival_headingcolor',
            	'newarrival_bordercolor',
            	'newarrival_icon',
            	'newarrival_title',
            	'newarrival_price',
            	'newarrival_buttonbg',
            	'newarrival_buttontext',
            	'newarrival_buttonbghover',
            	'newarrival_buttontexthover'

            ),
     	)
	    
    	),
	))); 


	// general
	// newarrival heading
	$newarrivalheading = esc_html__('New Arrival', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'newarrival_heading',
    	array(
			'default' => $newarrivalheading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'newarrival_heading',
		array(
		    'label'   		=> __('Heading','pet-food-shop'),
		    'section'		=> 'newarrival_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// style
	// newarrival bg
	$newarrivalbgcolor = esc_html__('#ffcd08 ', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'newarrival_bgcolor',
    	array(
			'default' => $newarrivalbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'newarrival_bgcolor',
		array(
		    'label'   		=> __('BG Color','pet-food-shop'),
		    'section'		=> 'newarrival_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// newarrival heading
	$newarrivalheadingcolor = esc_html__('#000 ', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'newarrival_headingcolor',
    	array(
			'default' => $newarrivalheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'newarrival_headingcolor',
		array(
		    'label'   		=> __('Heading Color','pet-food-shop'),
		    'section'		=> 'newarrival_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// newarrival border
	$newarrivalbordercolor = esc_html__('#000 ', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'newarrival_bordercolor',
    	array(
			'default' => $newarrivalbordercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'newarrival_bordercolor',
		array(
		    'label'   		=> __('Border Color','pet-food-shop'),
		    'section'		=> 'newarrival_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// newarrival icon
	$newarrivalicon = esc_html__('#fe0101 ', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'newarrival_icon',
    	array(
			'default' => $newarrivalicon,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'newarrival_icon',
		array(
		    'label'   		=> __('Icon Color','pet-food-shop'),
		    'section'		=> 'newarrival_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// newarrival title
	$newarrivaltitle = esc_html__('#000 ', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'newarrival_title',
    	array(
			'default' => $newarrivaltitle,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'newarrival_title',
		array(
		    'label'   		=> __('Title Color','pet-food-shop'),
		    'section'		=> 'newarrival_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// newarrival price
	$newarrivalprice = esc_html__('#fe0101 ', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'newarrival_price',
    	array(
			'default' => $newarrivalprice,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'newarrival_price',
		array(
		    'label'   		=> __('Price Color','pet-food-shop'),
		    'section'		=> 'newarrival_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// newarrival buttonbg
	$newarrivalbuttonbg = esc_html__('#fff ', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'newarrival_buttonbg',
    	array(
			'default' => $newarrivalbuttonbg,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'newarrival_buttonbg',
		array(
		    'label'   		=> __('Button BG Color','pet-food-shop'),
		    'section'		=> 'newarrival_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// newarrival buttontext
	$newarrivalbuttontext = esc_html__('#000 ', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'newarrival_buttontext',
    	array(
			'default' => $newarrivalbuttontext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'newarrival_buttontext',
		array(
		    'label'   		=> __('Button Text Color','pet-food-shop'),
		    'section'		=> 'newarrival_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// newarrival buttonbghover
	$newarrivalbuttonbghover = esc_html__('#fd0101 ', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'newarrival_buttonbghover',
    	array(
			'default' => $newarrivalbuttonbghover,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'newarrival_buttonbghover',
		array(
		    'label'   		=> __('Button BG Hover Color','pet-food-shop'),
		    'section'		=> 'newarrival_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// newarrival buttontexthover
	$newarrivalbuttontexthover = esc_html__('#fff ', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'newarrival_buttontexthover',
    	array(
			'default' => $newarrivalbuttontexthover,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'newarrival_buttontexthover',
		array(
		    'label'   		=> __('Button Text Hover Color','pet-food-shop'),
		    'section'		=> 'newarrival_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	$wp_customize->register_control_type('petfoodshop_Tab_Control');

}

add_action( 'customize_register', 'petfoodshop_blog_setting' );

// service selective refresh
function petfoodshop_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'petfoodshop_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'petfoodshop_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'petfoodshop_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'petfoodshop_blog_section_partials' );

// blog_title
function petfoodshop_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function petfoodshop_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// service description
function petfoodshop_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}


