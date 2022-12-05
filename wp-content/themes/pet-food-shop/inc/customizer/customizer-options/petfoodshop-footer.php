<?php
function petfoodshop_footer( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	// Footer Panel // 
	$wp_customize->add_panel( 
		'footer_section', 
		array(
			'priority'      => 34,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Footer', 'pet-food-shop'),
		) 
	);


	// Footer top // 
	$wp_customize->add_section(
        'footer_top',
        array(
            'title' 		=> __('Footer Top','pet-food-shop'),
			'panel'  		=> 'footer_section',
			'priority'      => 1,
		)
    );
	


	// top color // 
    
	// footer bg color 
	$footerbg = esc_html__('#000', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'footer_bg',
    	array(
			'default' => $footerbg,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'footer_bg',
		array(
		    'label'   		=> __('BG Color','pet-food-shop'),
		    'section'		=> 'footer_top',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer heading color 
	$footerheading = esc_html__('#fff', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'footer_heading',
    	array(
			'default' => $footerheading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'footer_heading',
		array(
		    'label'   		=> __('Heading Color','pet-food-shop'),
		    'section'		=> 'footer_top',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer text color 
	$footertext = esc_html__('#fff', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'footer_text',
    	array(
			'default' => $footertext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'footer_text',
		array(
		    'label'   		=> __('Text Color','pet-food-shop'),
		    'section'		=> 'footer_top',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer list color 
	$footerlist = esc_html__('#fff', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'footer_list',
    	array(
			'default' => $footerlist,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'footer_list',
		array(
		    'label'   		=> __('List Color','pet-food-shop'),
		    'section'		=> 'footer_top',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer listicon color 
	$footerlisticon = esc_html__('#FBFA02', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'footer_listicon',
    	array(
			'default' => $footerlisticon,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'footer_listicon',
		array(
		    'label'   		=> __('List Icon Color','pet-food-shop'),
		    'section'		=> 'footer_top',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer listhover color 
	$footerlisthover = esc_html__('#FBFA02', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'footer_listhover',
    	array(
			'default' => $footerlisthover,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'footer_listhover',
		array(
		    'label'   		=> __('listhover Color','pet-food-shop'),
		    'section'		=> 'footer_top',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer border color 
	$footerborder = esc_html__('#fff', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'footer_border',
    	array(
			'default' => $footerborder,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'footer_border',
		array(
		    'label'   		=> __('Border Color','pet-food-shop'),
		    'section'		=> 'footer_top',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

    

	// Footer Bottom // 
	$wp_customize->add_section(
        'footer_bottom',
        array(
            'title' 		=> __('Footer Bottom','pet-food-shop'),
			'panel'  		=> 'footer_section',
			'priority'      => 3,
		)
    );
	
	// Footer Copyright Head
	$wp_customize->add_setting(
		'footer_btm_copy_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'petfoodshop_sanitize_text',
			'priority'  => 3,
		)
	);

	$wp_customize->add_control(
	'footer_btm_copy_head',
		array(
			'type' => 'hidden',
			'label' => __('Copyright','pet-food-shop'),
			'section' => 'footer_bottom',
		)
	);
	
	// Footer Copyright 
	$petfoodshop_foo_copy = esc_html__('Copyright &copy; [current_year] [site_title] | Powered by [theme_author]', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'footer_copyright',
    	array(
			'default' => $petfoodshop_foo_copy,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyright',
		array(
		    'label'   		=> __('CopyRight','pet-food-shop'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'textarea',
			'transport'         => $selective_refresh,
		)  
	);	


	// footer copyright color 
	$footercopyrightcolor = esc_html__('#fff', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'footer_copyrightcolor',
    	array(
			'default' => $footercopyrightcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyrightcolor',
		array(
		    'label'   		=> __('Copyright Color','pet-food-shop'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer copyrightauthor color 
	$footercopyrightauthor = esc_html__('#FBFA02', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'footer_copyrightauthor',
    	array(
			'default' => $footercopyrightauthor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyrightauthor',
		array(
		    'label'   		=> __('Copyright Author Color','pet-food-shop'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


}
add_action( 'customize_register', 'petfoodshop_footer' );
// Footer selective refresh
function petfoodshop_footer_partials( $wp_customize ){	
	// footer_copyright
	$wp_customize->selective_refresh->add_partial( 'footer_copyright', array(
		'selector'            => '.copy-right .copyright-text',
		'settings'            => 'footer_copyright',
		'render_callback'  => 'petfoodshop_footer_copyright_render_callback',
	) );
	
	}
add_action( 'customize_register', 'petfoodshop_footer_partials' );


// copyright_content
function petfoodshop_footer_copyright_render_callback() {
	return get_theme_mod( 'footer_copyright' );
}