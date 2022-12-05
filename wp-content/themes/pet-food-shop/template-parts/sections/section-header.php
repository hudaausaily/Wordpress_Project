<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="custom-header" rel="home">
		<img src="<?php esc_url(header_image()); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'title' )); ?>">
	</a>	
<?php endif;  ?>
<!-- Header Area -->

	<?php 

		// header
		$topheader_btntext = esc_attr(get_theme_mod('topheader_btntext','My Account'));
		$topheader_btntextlink = esc_attr(get_theme_mod('topheader_btntextlink','#'));


		$stickyheader = esc_attr(petfoodshop_sticky_menu());
	?>

	<div class="main">
 
	
    <header class="main-header site-header <?php echo esc_attr(petfoodshop_sticky_menu()); ?>">
		<div class="container">
						<div style="width: 100%;height: 90px;">
							<div class="hed row row-eq-height md-1">
								<div class="col-md-3 col-lg-3 col-sm-12 site-logo box-info">
									<?php
									if(has_custom_logo())
										{	
											the_custom_logo();
										}
										else { 
										?>
										<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">
											
											<!-- <span class="site-title"> -->
												<?php 
													echo esc_html(bloginfo('name'));
												?>
											<!-- </span> -->
										</a>	
									<?php 						
										}
									?>

									<?php
										$petfoodshop_site_desc = get_bloginfo( 'description');
										if ($petfoodshop_site_desc) : ?>
											<p class="site-description"><?php echo esc_html($petfoodshop_site_desc); ?></p>
									<?php endif; ?>


								</div>
									<div class="<?php
									if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
										?> col-md-6 col-lg-6 col-sm-12 menus pd-0<?php } else { ?> col-md-8 col-lg-8 col-sm-12 menus pd-0 <?php } ?> ">
										<nav class="navbar navbar-expand-lg navbaroffcanvase">
											<div class="navbar-menubar">
							                    <!-- Small Divice Menu-->
							                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"  aria-label="<?php echo esc_attr_e('Toggle navigation','pet-food-shop'); ?>"> 
							                        <i class="fa fa-bars"></i>
							                    </button>
							                    <div class="collapse navbar-collapse navbar-menu">
								                    <button class="navbar-toggler navbar-toggler-close" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"  aria-label="<?php echo esc_attr_e('Toggle navigation','pet-food-shop'); ?>"> 
								                        <i class="fa fa-times"></i>
								                    </button> 
													<?php 
														wp_nav_menu( 
															array(  
																'theme_location' => 'primary_menu',
																'container'  => '',
																'container_id'    => '',
																'menu_class' => 'navbar-nav main-nav',
																'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
																'walker' => new WP_Bootstrap_Navwalker()
																 ) 
															);
													?>
							                    </div>
							                </div>
										</nav>
									</div>
									<?php
									if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
										?>
									<div class="col-md-1 col-lg-1 col-sm-12 h-cart">
										<a class="h-cart" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" >
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>
											<?php 
												
													$count = WC()->cart->cart_contents_count;
													$cart_url = wc_get_cart_url();
													if ( $count > 0 ) {
													?>
														 <span><?php echo esc_html( $count ); ?></span>
													<?php 
													}
													else {
														?>
														<span><?php echo esc_html_e('0','pet-food-shop'); ?></span>
														<?php 
													}
												
											?>
										</a>
									</div>
									<div class="col-md-2 col-lg-2 col-sm-12  myacc">
										<i class="fa fa-user" aria-hidden="true"></i>
										<a class="myaccount" href="<?php echo apply_filters('petfoodshop_topheader', $topheader_btntextlink); ?>">
											<?php echo apply_filters('petfoodshop_topheader', $topheader_btntext); ?>
										</a>
									</div>
									<?php } ?>
							</div>
						</div>
		</div>
    </header>
<div class="clearfix"></div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffcd08" fill-opacity="1" d="M0,160L40,154.7C80,149,160,139,240,133.3C320,128,400,128,480,138.7C560,149,640,171,720,181.3C800,192,880,192,960,181.3C1040,171,1120,149,1200,138.7C1280,128,1360,128,1400,128L1440,128L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
<div class="header-svg2">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fdb303" fill-opacity="1" d="M0,160L40,154.7C80,149,160,139,240,133.3C320,128,400,128,480,138.7C560,149,640,171,720,181.3C800,192,880,192,960,181.3C1040,171,1120,149,1200,138.7C1280,128,1360,128,1400,128L1440,128L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
</div>
    </div>

