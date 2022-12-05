<?php
function petfoodshop_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'pet-food-shop'),
		) 
	);

	
	/*=========================================
	Pet Food Shop Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','pet-food-shop'),
			'panel'  		=> 'header_section',
		)
    );


	

	// // topheader Logo Width
 //    $wp_customize->add_setting('topheader_logowidth',array(
 //        'default' => 100,
 //        'sanitize_callback' => 'petfoodshop_sanitize_float'
 //    ));
 //    $wp_customize->add_control(new petfoodshop_Custom_Control( $wp_customize, 'topheader_logowidth',array(
	//     'label' => __('Logo Width','pet-food-shop'),
	//     'section' => 'title_tagline',
	//     'input_attrs' => array(
	//             'min' => 0,
	//             'max' => 500,
	//             'step' => 1,
	//         ),
 //    )));


    // top header Site Title Color
	$topheadersitetitlecol = esc_html__('#fff', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'topheader_sitetitlecol',
    	array(
			'default' => $topheadersitetitlecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'topheader_sitetitlecol',
		array(
		    'label'   		=> __('Site Title Color','pet-food-shop'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// top header Tagline Color
	$topheadertaglinecol = esc_html__('#fff', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'topheader_taglinecol',
    	array(
			'default' => $topheadertaglinecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_taglinecol',
		array(
		    'label'   		=> __('Tagline Color','pet-food-shop'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	
 
	/*=========================================
	Pet Food Shop header
	=========================================*/
	$wp_customize->add_section(
        'top_header',
        array(
        	'priority'      => 5,
            'title' 		=> __('Header','pet-food-shop'),
			'panel'  		=> 'header_section',
		)
    );	


    $wp_customize->add_setting('petfoodshop_reset_header_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new petfoodshop_Reset_Custom_Control($wp_customize, 'petfoodshop_reset_header_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Header Settings', 'pet-food-shop'),
	  'description' => 'petfoodshop_header_reset_settings',
	  'section' => 'top_header'
	)));



    $wp_customize->add_setting('petfoodshop_top_header_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new petfoodshop_Tab_Control($wp_customize, 'petfoodshop_top_header_tabs', array(
	   'section' => 'top_header',
	   'priority' => 1,
	   'buttons' => array(
	      array(
     		'name' => esc_html__('General', 'pet-food-shop'),
 			'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'hide_show_sticky',
            	'topheader_btntext',
            	'topheader_btntextlink'

            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'pet-food-shop'),
            'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'header_bgcolor1',
            	'header_bgcolor2',
            	'header_menu',
            	'header_menuhover',
            	'header_submenu',
            	'header_submenuhover',
            	'header_submenubg',
            	'header_submenuborder',
            	'header_carticoncolor',
            	'header_carticonhovercolor',
            	'header_carttextcolor',
            	'header_carttxtbgcolor',
            	'header_btnbgcolor',
            	'header_btnbghovercolor',
            	'header_btntxtcolor',
            	'header_btntxthovercolor',
            	'header_buttoniconcolor',
            	'header_buttoniconbgcolor',
            	'header_bordercolor'
            ),
         )
	    
    	),
	)));


	// general setting

	// sticky header
	$wp_customize->add_setting( 'hide_show_sticky',array(
        'default' => false,
        'sanitize_callback' => 'petfoodshop_switch_sanitization'
   	) );
   	$wp_customize->add_control( new petfoodshop_Toggle_Switch_Custom_Control( $wp_customize, 'hide_show_sticky',array(
        'label' => __( 'Show Sticky Header','pet-food-shop' ),
        'section' => 'top_header'
   	)));





	// btn text
	$topheaderbtntext = esc_html__('My Account', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'topheader_btntext',
    	array( 
			'default' => $topheaderbtntext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btntext',
		array(
		    'label'   		=> __('Button Text','pet-food-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// btn textlink
	$topheaderbtntextlink = esc_html__('#', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'topheader_btntextlink',
    	array(
			'default' => $topheaderbtntextlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btntextlink',
		array(
		    'label'   		=> __('Button Text Link','pet-food-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// Style setting

	// header bg Color1
	$headerbgcolor1 = esc_html__('#f3da15', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'header_bgcolor1',
    	array(
			'default' => $headerbgcolor1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_bgcolor1',
		array(
		    'label'   		=> __('BG Color','pet-food-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header bg Color2
	$headerbgcolor2 = esc_html__('#fece08', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'header_bgcolor2',
    	array(
			'default' => $headerbgcolor2,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_bgcolor2',
		array(
		    'label'   		=> __('BG Color','pet-food-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header menu
	$headermenu = esc_html__('#000', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'header_menu',
    	array(
			'default' => $headermenu,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menu',
		array(
		    'label'   		=> __('Menus Color','pet-food-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header menuhover
	$headermenuhover = esc_html__('#fe0101', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'header_menuhover',
    	array(
			'default' => $headermenuhover,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menuhover',
		array(
		    'label'   		=> __('Menus Hover Color','pet-food-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header submenu
	$headersubmenu = esc_html__('#fff', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'header_submenu',
    	array(
			'default' => $headersubmenu,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenu',
		array(
		    'label'   		=> __('SubMenus Color','pet-food-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header submenuhover
	$headersubmenuhover = esc_html__('#FBFA02', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'header_submenuhover',
    	array(
			'default' => $headersubmenuhover,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenuhover',
		array(
		    'label'   		=> __('SubMenus Hover Color','pet-food-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header submenubg
	$headersubmenubg = esc_html__('#000', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'header_submenubg',
    	array(
			'default' => $headersubmenubg,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenubg',
		array(
		    'label'   		=> __('SubMenus BG Color','pet-food-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header bsubmenuborder
	$headersubmenuborder = esc_html__('#fff', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'header_submenuborder',
    	array(
			'default' => $headersubmenuborder,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenuborder',
		array(
		    'label'   		=> __('SubMenus Border Color','pet-food-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);




	// header cart icon Color
	$headercarticoncolor = esc_html__('#b802fc', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'header_carticoncolor',
    	array(
			'default' => $headercarticoncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_carticoncolor',
		array(
		    'label'   		=> __('Cart Icon Color','pet-food-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header cart iconhover Color
	$headercarticonhovercolor = esc_html__('#fe0101', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'header_carticonhovercolor',
    	array(
			'default' => $headercarticonhovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_carticonhovercolor',
		array(
		    'label'   		=> __('Cart Icon Hover Color','pet-food-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header carttext Color
	$headercarttextcolor = esc_html__('#000', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'header_carttextcolor',
    	array(
			'default' => $headercarttextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_carttextcolor',
		array(
		    'label'   		=> __('Cart Text Color','pet-food-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header carttxtbg Color
	$headercarttxtbgcolor = esc_html__('#edfc03', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'header_carttxtbgcolor',
    	array(
			'default' => $headercarttxtbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_carttxtbgcolor',
		array(
		    'label'   		=> __('Cart Text BG Color','pet-food-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header btnbg Color
	$headerbtnbgcolor = esc_html__('#edfc03', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'header_btnbgcolor',
    	array(
			'default' => $headerbtnbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btnbgcolor',
		array(
		    'label'   		=> __('Button BG Color','pet-food-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header btnbghover Color
	$headerbtnbghovercolor = esc_html__('#fd0101', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'header_btnbghovercolor',
    	array(
			'default' => $headerbtnbghovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btnbghovercolor',
		array(
		    'label'   		=> __('Button BG Hover Color','pet-food-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header btntxt Color
	$headerbtntxtcolor = esc_html__('#000', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'header_btntxtcolor',
    	array(
			'default' => $headerbtntxtcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btntxtcolor',
		array(
		    'label'   		=> __('Button Text Color','pet-food-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header btntxthover Color
	$headerbtntxthovercolor = esc_html__('#fff', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'header_btntxthovercolor',
    	array(
			'default' => $headerbtntxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btntxthovercolor',
		array(
		    'label'   		=> __('Button Text Hover Color','pet-food-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header btntxthover Color
	$headerbtntxthovercolor = esc_html__('#fff', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'header_btntxthovercolor',
    	array(
			'default' => $headerbtntxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btntxthovercolor',
		array(
		    'label'   		=> __('Button Text Hover Color','pet-food-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header buttonicon Color
	$headerbuttoniconcolor = esc_html__('#000', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'header_buttoniconcolor',
    	array(
			'default' => $headerbuttoniconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_buttoniconcolor',
		array(
		    'label'   		=> __('Button Icon Color','pet-food-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header buttoniconbg Color
	$headerbuttoniconbgcolor = esc_html__('#edfc03', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'header_buttoniconbgcolor',
    	array(
			'default' => $headerbuttoniconbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_buttoniconbgcolor',
		array(
		    'label'   		=> __('Button Icon BG Color','pet-food-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header border Color
	$headerbordercolor = esc_html__('#fdb303', 'pet-food-shop' );
	$wp_customize->add_setting(
    	'header_bordercolor',
    	array(
			'default' => $headerbordercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_bordercolor',
		array(
		    'label'   		=> __('Border Color','pet-food-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);




	$wp_customize->register_control_type('petfoodshop_Tab_Control');
	$wp_customize->register_panel_type( 'petfoodshop_WP_Customize_Panel' );
	$wp_customize->register_section_type( 'petfoodshop_WP_Customize_Section' );



	

}
add_action( 'customize_register', 'petfoodshop_header_settings' );



if ( class_exists( 'WP_Customize_Panel' ) ) {
  	class petfoodshop_WP_Customize_Panel extends WP_Customize_Panel {
	   public $panel;
	   public $type = 'petfoodshop_panel';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;
	      return $array;
    	}
  	}
}

if ( class_exists( 'WP_Customize_Section' ) ) {
  	class petfoodshop_WP_Customize_Section extends WP_Customize_Section {
	   public $section;
	   public $type = 'petfoodshop_section';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;

	      if ( $this->panel ) {
	        $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );
	      } else {
	        $array['customizeAction'] = 'Customizing';
	      }
	      return $array;
    	}
  	}
}






