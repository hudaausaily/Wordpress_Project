<?php
function petfoodshop_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'petfoodshop_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '646464',
		'width'                  => 2000, 
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'petfoodshop_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'petfoodshop_custom_header_setup' );

if ( ! function_exists( 'petfoodshop_header_style' ) ) :

function petfoodshop_header_style() {
	$header_text_color = get_header_textcolor();


	// $topheader_logowidth = esc_attr(get_theme_mod('topheader_logowidth','100'));
	$topheader_sitetitlecol = esc_attr(get_theme_mod('topheader_sitetitlecol','#fff'));
	$topheader_taglinecol = esc_attr(get_theme_mod('topheader_taglinecol','#fff'));




	$header_bgcolor1 = esc_attr(get_theme_mod('header_bgcolor1','#f3da15'));
	$header_bgcolor2 = esc_attr(get_theme_mod('header_bgcolor2','#fece08'));

	$header_menu = esc_attr(get_theme_mod('header_menu','#000'));
	$header_menuhover = esc_attr(get_theme_mod('header_menuhover','#fe0101'));
	$header_submenu = esc_attr(get_theme_mod('header_submenu','#fff'));
	$header_submenuhover = esc_attr(get_theme_mod('header_submenuhover','#FBFA02'));
	$header_submenubg = esc_attr(get_theme_mod('header_submenubg','#000'));
	$header_submenuborder = esc_attr(get_theme_mod('header_submenuborder','#fff'));



	$header_carticoncolor = esc_attr(get_theme_mod('header_carticoncolor','#b802fc'));
	$header_carticonhovercolor = esc_attr(get_theme_mod('header_carticonhovercolor','#fe0101'));
	$header_carttextcolor = esc_attr(get_theme_mod('header_carttextcolor','#000'));
	$header_carttxtbgcolor = esc_attr(get_theme_mod('header_carttxtbgcolor','#edfc03'));
	$header_btnbgcolor = esc_attr(get_theme_mod('header_btnbgcolor','#edfc03'));
	$header_btnbghovercolor = esc_attr(get_theme_mod('header_btnbghovercolor','#fd0101'));
	$header_btntxtcolor = esc_attr(get_theme_mod('header_btntxtcolor','#000'));
	$header_btntxthovercolor = esc_attr(get_theme_mod('header_btntxthovercolor','#fff'));

	$header_buttoniconcolor = esc_attr(get_theme_mod('header_buttoniconcolor','#000'));

	$header_buttoniconbgcolor = esc_attr(get_theme_mod('header_buttoniconbgcolor','#edfc03'));

	$header_bordercolor = esc_attr(get_theme_mod('header_bordercolor','#fdb303'));





  	$slider_section_show_content = esc_attr(get_theme_mod('slider_section_show_content','YES'));
  	$slider_service_show_content = esc_attr(get_theme_mod('slider_service_show_content','YES'));
  	$blog_disable_section = esc_attr(get_theme_mod('blog_disable_section','YES'));

  	$slider_bgcolor = esc_attr(get_theme_mod('slider_bgcolor','#fff'));
  	$slider_titlecolor = esc_attr(get_theme_mod('slider_titlecolor','#000'));
  	$slider_descriptioncolor = esc_attr(get_theme_mod('slider_descriptioncolor','#000'));
  	$slider_btntxt1color = esc_attr(get_theme_mod('slider_btntxt1color','#000'));
  	$slider_btnbg1color = esc_attr(get_theme_mod('slider_btnbg1color','#f3da15'));
  	$slider_btnbg1hovercolor = esc_attr(get_theme_mod('slider_btnbg1hovercolor','#fd0101'));
  	$slider_btntext1hovercolor = esc_attr(get_theme_mod('slider_btntext1hovercolor','#fff'));
  	$slider_bgcolor = esc_attr(get_theme_mod('slider_bgcolor','#f3da15'));




  	$popularproducts_headingcolor = esc_attr(get_theme_mod('popularproducts_headingcolor','#000'));
  	$popularproducts_bordercolor = esc_attr(get_theme_mod('popularproducts_bordercolor','#000'));
  	$popularproducts_iconcolor = esc_attr(get_theme_mod('popularproducts_iconcolor','#fe0101'));
  	$popularproducts_titlecolor = esc_attr(get_theme_mod('popularproducts_titlecolor','#000'));
  	$popularproducts_pricecolor = esc_attr(get_theme_mod('popularproducts_pricecolor','#fd0101'));
  	$popularproducts_btnbgcolor = esc_attr(get_theme_mod('popularproducts_btnbgcolor','#f3da15'));
  	$popularproducts_btntxtcolor = esc_attr(get_theme_mod('popularproducts_btntxtcolor','#000'));
  	$popularproducts_btntxthovercolor = esc_attr(get_theme_mod('popularproducts_btntxthovercolor','#fff'));
  	$popularproducts_btnbghovercolor = esc_attr(get_theme_mod('popularproducts_btnbghovercolor','#fd0101'));
  	$popularproducts_bannertxtcolor = esc_attr(get_theme_mod('popularproducts_bannertxtcolor','#000'));
  	$popularproducts_bannertxtoffercolor = esc_attr(get_theme_mod('popularproducts_bannertxtoffercolor','#fd1901'));
  	$popularproducts_bannerbgcolor = esc_attr(get_theme_mod('popularproducts_bannerbgcolor','#fdb303'));
  	$popularproducts_bannerbordercolor = esc_attr(get_theme_mod('popularproducts_bannerbordercolor','#fd1901'));




  	$newarrival_bgcolor = esc_attr(get_theme_mod('newarrival_bgcolor','#ffcd08'));
  	$newarrival_headingcolor = esc_attr(get_theme_mod('newarrival_headingcolor','#000'));
  	$newarrival_bordercolor = esc_attr(get_theme_mod('newarrival_bordercolor','#000'));
  	$newarrival_icon = esc_attr(get_theme_mod('newarrival_icon','#fe0101'));
  	$newarrival_title = esc_attr(get_theme_mod('newarrival_title','#000'));
  	$newarrival_price = esc_attr(get_theme_mod('newarrival_price','#fe0101'));
  	$newarrival_buttonbg = esc_attr(get_theme_mod('newarrival_buttonbg','#fff'));
  	$newarrival_buttontext = esc_attr(get_theme_mod('newarrival_buttontext','#000'));
  	$newarrival_buttonbghover = esc_attr(get_theme_mod('newarrival_buttonbghover','#fd0101'));
  	$newarrival_buttontexthover = esc_attr(get_theme_mod('newarrival_buttontexthover','#fff'));



  	$footer_copyrightcolor = esc_attr(get_theme_mod('footer_copyrightcolor','#fff'));
  	$footer_copyrightauthor = esc_attr(get_theme_mod('footer_copyrightauthor','#FBFA02'));
  	$footer_bg = esc_attr(get_theme_mod('footer_bg','#000'));
  	$footer_heading = esc_attr(get_theme_mod('footer_heading','#fff'));
  	$footer_text = esc_attr(get_theme_mod('footer_text','#fff'));
  	$footer_list = esc_attr(get_theme_mod('footer_list','#fff'));
  	$footer_listicon = esc_attr(get_theme_mod('footer_listicon','#FBFA02'));
  	$footer_listhover = esc_attr(get_theme_mod('footer_listhover','#FBFA02'));
  	$footer_border = esc_attr(get_theme_mod('footer_border','#fff'));




	?>
	<style type="text/css">


		<?php 
		
		?>

		header.site-header .site-title {
			color: <?php echo apply_filters('petfoodshop_topheader', $topheader_sitetitlecol); ?>;
		}

		p.site-description {
			color: <?php echo apply_filters('petfoodshop_topheader', $topheader_taglinecol); ?>;

		}
		
		
		header.site-header {
	    	background-image: linear-gradient(to bottom,<?php echo apply_filters('petfoodshop_header', $header_bgcolor1); ?>,<?php echo apply_filters('petfoodshop_header', $header_bgcolor2); ?>) !important;
		}

		.main svg path {
			fill: <?php echo apply_filters('petfoodshop_header', $header_bgcolor2); ?> !important;
		}


		.main-header .navbar .navbar-menu ul li a {
			color: <?php echo apply_filters('petfoodshop_header', $header_menu); ?> !important;
		}

		.main-header .navbar .navbar-nav > li:hover a {
			color: <?php echo apply_filters('petfoodshop_header', $header_menuhover); ?> !important;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu a:not(.remove) {
			color: <?php echo apply_filters('petfoodshop_header', $header_submenu); ?> !important;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu a:hover {
			color: <?php echo apply_filters('petfoodshop_header', $header_submenuhover); ?> !important;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu {
			color: <?php echo apply_filters('petfoodshop_header', $header_submenubg); ?> !important;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu {
			outline-color: <?php echo apply_filters('petfoodshop_header', $header_submenuborder); ?> !important;
		}





		header.site-header i.fa.fa-shopping-cart {
			color: <?php echo apply_filters('petfoodshop_header', $header_carticoncolor); ?>;
		}

		header.site-header .h-cart span {
			color: <?php echo apply_filters('petfoodshop_header', $header_carttextcolor); ?>;
		}

		header.site-header .h-cart span {
			background: <?php echo apply_filters('petfoodshop_header', $header_carttxtbgcolor); ?>;
		}

		
		header.site-header a.myaccount {
			background: <?php echo apply_filters('petfoodshop_header', $header_btnbgcolor); ?>;
		}

		header.site-header a.myaccount:hover {
			background: <?php echo apply_filters('petfoodshop_header', $header_btnbghovercolor); ?>;
		}

		header.site-header a.myaccount {
			color: <?php echo apply_filters('petfoodshop_header', $header_btntxtcolor); ?>;
		}

		header.site-header a.myaccount:hover {
			color: <?php echo apply_filters('petfoodshop_header', $header_btntxthovercolor); ?>;
		}

		header.site-header i.fa-user {
			color: <?php echo apply_filters('petfoodshop_header', $header_buttoniconcolor); ?>;
		}

		header.site-header i.fa-user {
			background: <?php echo apply_filters('petfoodshop_header', $header_buttoniconbgcolor); ?>;
		}

		.header-svg2 svg path {
			fill: <?php echo apply_filters('petfoodshop_header', $header_bordercolor); ?> !important;
		}

		.hero-style .slide-title h2 {
			color: <?php echo apply_filters('petfoodshop_slider', $slider_titlecolor); ?> !important;
		}

		.hero-style .slide-text p {
			color: <?php echo apply_filters('petfoodshop_slider', $slider_descriptioncolor); ?>;
		}

		.hero-style a.ReadMore {
			color: <?php echo apply_filters('petfoodshop_slider', $slider_btntxt1color); ?> !important;
		}

		.hero-style a.ReadMore {
			background: <?php echo apply_filters('petfoodshop_slider', $slider_btnbg1color); ?>;
		}

		.hero-style a.ReadMore:hover {
			background: <?php echo apply_filters('petfoodshop_slider', $slider_btnbg1hovercolor); ?>;
		}

		.hero-style a.ReadMore:hover {
			color: <?php echo apply_filters('petfoodshop_slider', $slider_btntext1hovercolor); ?> !important;
		}

		.hero-slider .slide-inner {
			background: <?php echo apply_filters('petfoodshop_slider', $slider_bgcolor); ?> !important;
		}

		




		#featured-product-section .section-subtitle h2 {
			color: <?php echo apply_filters('petfoodshop_popularproducts', $popularproducts_headingcolor); ?>;
		}

		#featured-product-section i.fa.fa-window-minimize {
			background: <?php echo apply_filters('petfoodshop_popularproducts', $popularproducts_bordercolor); ?>;
		}

		#featured-product-section i.fa.fa-paw {
			color: <?php echo apply_filters('petfoodshop_popularproducts', $popularproducts_iconcolor); ?>;
		}

		#featured-product-section .product-grid h3 {
			color: <?php echo apply_filters('petfoodshop_popularproducts', $popularproducts_titlecolor); ?>;
		}

		#featured-product-section .product-grid {
			color: <?php echo apply_filters('petfoodshop_popularproducts', $popularproducts_pricecolor); ?>;
		}

		#featured-product-section .add-to-cart a {
			background: <?php echo apply_filters('petfoodshop_popularproducts', $popularproducts_btnbgcolor); ?>;
		}

		#featured-product-section .add-to-cart a {
			color: <?php echo apply_filters('petfoodshop_popularproducts', $popularproducts_btntxtcolor); ?>;
		}


		#featured-product-section .add-to-cart a:hover {
			color: <?php echo apply_filters('petfoodshop_popularproducts', $popularproducts_btntxthovercolor); ?>;
		}


		#featured-product-section .add-to-cart a:hover {
			background: <?php echo apply_filters('petfoodshop_popularproducts', $popularproducts_btnbghovercolor); ?>;
		}


		#featured-product-section .right-cont h1,
		#featured-product-section .right-cont h3,
		#featured-product-section .right-cont h4 {
			color: <?php echo apply_filters('petfoodshop_popularproducts', $popularproducts_bannertxtcolor); ?>;
		}

		#featured-product-section .right-cont h2 {
			color: <?php echo apply_filters('petfoodshop_popularproducts', $popularproducts_bannertxtoffercolor); ?>;
		}

		#featured-product-section .right-cont {
			background: <?php echo apply_filters('petfoodshop_popularproducts', $popularproducts_bannerbgcolor); ?>;
		}

		.productsvg1 svg path {
			fill: <?php echo apply_filters('petfoodshop_popularproducts', $popularproducts_bannerbgcolor); ?> !important;
		}

		#featured-product-section .productsvg2 svg path {
			fill: <?php echo apply_filters('petfoodshop_popularproducts', $popularproducts_bannerbordercolor); ?> !important;
		}





		section#newarrival-section {
			background: <?php echo apply_filters('petfoodshop_newarrival', $newarrival_bgcolor); ?>;
		}

		section#newarrival-section svg path {
			fill: <?php echo apply_filters('petfoodshop_newarrival', $newarrival_bgcolor); ?> !important;
		}

		section#newarrival-section .section-subtitle.inner-area-title h2 {
			color: <?php echo apply_filters('petfoodshop_newarrival', $newarrival_headingcolor); ?>;
		}

		section#newarrival-section i.fa.fa-window-minimize {
			background: <?php echo apply_filters('petfoodshop_newarrival', $newarrival_bordercolor); ?>;
		}

		section#newarrival-section span i.fa.fa-paw {
			color: <?php echo apply_filters('petfoodshop_newarrival', $newarrival_icon); ?>;
		}

		section#newarrival-section .pcontent h3 {
			color: <?php echo apply_filters('petfoodshop_newarrival', $newarrival_title); ?>;
		}

		section#newarrival-section .product-grid {
			color: <?php echo apply_filters('petfoodshop_newarrival', $newarrival_price); ?>;
		}

		section#newarrival-section a.more-button:hover {
			color: <?php echo apply_filters('petfoodshop_newarrival', $newarrival_buttontexthover); ?>;
		}

		section#newarrival-section a.more-button:hover {
			background: <?php echo apply_filters('petfoodshop_newarrival', $newarrival_buttonbghover); ?>;
		}

		section#newarrival-section a.more-button {
			color: <?php echo apply_filters('petfoodshop_newarrival', $newarrival_buttontext); ?>;
		}

		section#newarrival-section a.more-button {
			background: <?php echo apply_filters('petfoodshop_newarrival', $newarrival_buttonbg); ?>;
		}



		.copy-right p {
			color: <?php echo apply_filters('petfoodshop_footer', $footer_copyrightcolor); ?>;
		}

		.copy-right p a {
			color: <?php echo apply_filters('petfoodshop_footer', $footer_copyrightauthor); ?>;
		}


		.footer-area .footer-top, .copy-right {
			background: <?php echo apply_filters('petfoodshop_footer', $footer_bg); ?>;
		}

		.footer-area .widget_block h1, .footer-area .widget_block h2, .footer-area .widget_block h3, .footer-area .widget_block h4, .footer-area .widget_block h5, .footer-area .widget_block h6 {
			color: <?php echo apply_filters('petfoodshop_footer', $footer_heading); ?>;
		}

		.footer-area .widget_text, .footer-area .widget_text p{
			color: <?php echo apply_filters('petfoodshop_footer', $footer_text); ?>;
		}

		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a {
			color: <?php echo apply_filters('petfoodshop_footer', $footer_list); ?>;
		}

		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li:before {
			color: <?php echo apply_filters('petfoodshop_footer', $footer_listicon); ?>;
		}

		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a:hover {
			color: <?php echo apply_filters('petfoodshop_footer', $footer_listhover); ?>;
		}

		.footer-area .footer-top {
			border-color: <?php echo apply_filters('petfoodshop_footer', $footer_border); ?>;
		}

		<?php  ?>


	<?php
        if ($slider_section_show_content == 1):
	?>
		.slider-outer-box {
			display: none;
		}
	<?php
		else :
	?>
		.slider-outer-box {
			display: block;
		}
	<?php endif; ?>


	<?php
        if ($slider_service_show_content == 1):
	?>
		#service-section {
			display: none;
		}
	<?php
		else :
	?>
		#service-section {
			display: block;
		}
	<?php endif; ?>


	<?php
        if ($blog_disable_section == 1):
	?>
		.blog-area {
			display: none;
		}
	<?php
		else :
	?>
		.blog-area {
			display: block;
		}
	<?php endif; ?>



	<?php
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		else :
	?>
		h4.site-title{
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>

	</style>
	<?php
}
endif;
