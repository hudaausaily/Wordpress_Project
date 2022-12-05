<?php
function petfoodshop_general_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'petfoodshop_general', array(
			'priority' => 31,
			'title' => esc_html__( 'General', 'pet-food-shop' ),
		)
	);
	
	/*=========================================
	Clip Art
	=========================================*/
	$wp_customize->add_section(
		'clipart', array(
			'title' => esc_html__( 'Clip Art', 'pet-food-shop' ),
			'priority' => 2,
			'panel' => 'petfoodshop_general',
		)
	);
	
	$wp_customize->add_setting( 
		'hs_clipart' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'petfoodshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 1,
		) 
	);
	
	$wp_customize->add_control(
	'hs_clipart', 
		array(
			'label'	      => esc_html__( 'Hide / Show Clip Art', 'pet-food-shop' ),
			'section'     => 'clipart',
			'type'        => 'checkbox'
		) 
	);
	
	/*=========================================
	Breadcrumb  Section
	=========================================*/
	$wp_customize->add_section(
		'breadcrumb_setting', array(
			'title' => esc_html__( 'Breadcrumb Section', 'pet-food-shop' ),
			'priority' => 1,
			'panel' => 'petfoodshop_general',
		)
	);
	
	// Settings
	$wp_customize->add_setting(
		'breadcrumb_settings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'petfoodshop_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'breadcrumb_settings',
		array(
			'type' => 'hidden',
			'label' => __('Settings','pet-food-shop'),
			'section' => 'breadcrumb_setting',
		)
	);
	
	// Breadcrumb Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'hs_breadcrumb' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'petfoodshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'hs_breadcrumb', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'pet-food-shop' ),
			'section'     => 'breadcrumb_setting',
			'settings'    => 'hs_breadcrumb',
			'type'        => 'checkbox'
		) 
	);
	
		
	// Background // 
	$wp_customize->add_setting(
		'breadcrumb_bg_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'petfoodshop_sanitize_text',
			'priority' => 9,
		)
	);

	$wp_customize->add_control(
	'breadcrumb_bg_head',
		array(
			'type' => 'hidden',
			'label' => __('Background','pet-food-shop'),
			'section' => 'breadcrumb_setting',
		)
	);
	
	// Background Image // 
    $wp_customize->add_setting( 
    	'breadcrumb_bg_img' , 
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'petfoodshop_sanitize_url',	
			'priority' => 10,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'breadcrumb_bg_img' ,
		array(
			'label'          => esc_html__( 'Background Image', 'pet-food-shop'),
			'section'        => 'breadcrumb_setting',
		) 
	));
	
	// Background Attachment // 
	$wp_customize->add_setting( 
		'breadcrumb_back_attach' , 
			array(
			'default' => 'scroll',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'petfoodshop_sanitize_select',
			'priority'  => 10,
		) 
	);
	
	$wp_customize->add_control(
	'breadcrumb_back_attach' , 
		array(
			'label'          => __( 'Background Attachment', 'pet-food-shop' ),
			'section'        => 'breadcrumb_setting',
			'type'           => 'select',
			'choices'        => 
			array(
				'inherit' => __( 'Inherit', 'pet-food-shop' ),
				'scroll' => __( 'Scroll', 'pet-food-shop' ),
				'fixed'   => __( 'Fixed', 'pet-food-shop' )
			) 
		) 
	);
}

add_action( 'customize_register', 'petfoodshop_general_setting' );
