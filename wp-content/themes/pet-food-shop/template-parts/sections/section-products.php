<section id="featured-product-section" class="ht-section">
	<img class="dog-top-img" src="https://www.wpthemesdemo.com/pet-food-shop/wp-content/themes/pet-food-shop-pro/images/bgdog.png">
	<div class="container">
		<div class="featured-posts-box">
		<?php
			$popularproducts_heading = get_theme_mod('popularproducts_heading', 'Popular Products');

			$popularproducts_bannertext1 = get_theme_mod('popularproducts_bannertext1', 'BEST DEAL OF THE DAY');
			$popularproducts_bannertext2 = get_theme_mod('popularproducts_bannertext2', 'Save 10%');
			$popularproducts_bannertext3 = get_theme_mod('popularproducts_bannertext3', 'On Dogs Food');
			$popularproducts_bannertext4 = get_theme_mod('popularproducts_bannertext4', '100% Organic Food For Your Pet!');
        	$popularproducts_bannerimage = get_theme_mod('popularproducts_bannerimage');


		?> 
			<div class="row justify-content-center">
				<div class="col-md-offset5 col-md-7">
				<?php if($popularproducts_heading){ ?>	
					<div class="section-title">
					
					<?php if($popularproducts_heading){ ?>	
						<div class="section-subtitle inner-area-title">
							<h2><?php echo ($popularproducts_heading);  ?></h2>
							<i class="fa fa-window-minimize" aria-hidden="true"></i>
		                    <i class="fa fa-paw" aria-hidden="true"></i><span><i class="fa fa-paw" aria-hidden="true"></i></span>
		                    <span><i class="fa fa-window-minimize" aria-hidden="true"></i></span>
						</div>
					<?php }?>
					</div>
				</div>
				
			<?php }?>
			</div> 

			<div class="row">  

				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 padding-right">
					<div class="row">  
						<?php
						if(function_exists('woocommerce_template_loop_add_to_cart') && function_exists('WC')){
							$meta_query   = WC()->query->get_meta_query();
							$tax_query   = WC()->query->get_tax_query();
							$tax_query[] = array(
								'taxonomy' => 'product_visibility',
								'field'    => 'name',
								'terms'    => 'featured',
								'operator' => 'IN',
							);
							$args = array(
								'post_type'   =>  'product',
								'stock'       =>  1,
								'posts_per_page' => 8, 
								'orderby'     =>  'date',
								'order'       =>  'DESC',
								'meta_query'  =>  $meta_query,
								'tax_query'   => $tax_query,
							);
							$loop = new WP_Query( $args );
							if($loop->post_count > 0){
								while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
						<div class="item col-lg-3 col-md-6 col-sm-12">  
							<div class="product-grid ">
								<!-- <div class="probg"></div> -->
								<div class="product-image">
									<a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php if (has_post_thumbnail( $loop->post->ID )) 
										echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
										else
											echo '<img class="pic-1" src="'.get_template_directory_uri().'/assets/images/default.png" alt="Placeholder" />'; ?>
										
									</a>
								</div>
								<div class="productcontent-wrap">
									<?php
										$productbutton = get_theme_mod('product_txt', 'Add to cart'); 
									?>

									<div class="pcontent">
										
										<a class="add-to-cart" id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">	
											<h3><?php the_title(); ?></h3>
										</a>
										<span class="price"><?php echo $product->get_price_html(); ?></span>
										<?php if( get_theme_mod('product_button_display','show' ) == 'show') :
											?>	
											<div class="add-to-cart">
												<a href="<?php echo esc_url(get_permalink()); ?>" class="more-button"><span></span><?php echo ($productbutton );  ?><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
											</div>
										<?php endif ?>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div> 
						<?php
							endwhile; 
								}else{ ?>
							<div class="alert alert-warning text-center">
								<strong>Sorry, no featured products to show.</strong>
							</div>
							<?php
									}
									?>
							<?php
								wp_reset_query(); 
							}else{ ?>
							<div class="alert alert-warning text-center">
								Kindly Install or Activate the WooCommerce plugin.
							</div>
						<?php
						}?>
					</div> 
				</div>

				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<div class="right-cont">
						<div class="productsvg1">
<svg 
 width="4.75in" height="9.264in">
<path fill-rule="evenodd"  fill="rgb(253, 179, 3)"
 d="M324.052,667.000 C328.673,660.162 332.354,652.787 335.020,644.999 C338.559,634.663 340.105,624.566 340.006,615.000 C339.871,601.984 336.758,590.759 334.023,585.000 C331.841,580.404 328.082,574.713 323.055,568.999 C317.763,562.984 311.437,557.589 304.111,552.999 C298.800,549.673 286.327,544.524 274.198,541.000 C268.128,539.236 261.713,537.643 257.248,536.999 C247.176,535.549 239.320,536.077 228.332,536.999 C219.545,537.738 210.756,538.515 204.402,537.999 C193.482,537.114 182.296,534.136 171.499,529.000 C161.928,524.446 152.473,517.922 143.580,509.000 C135.660,501.052 128.870,491.631 123.638,480.999 C120.162,473.935 116.318,462.272 113.668,449.999 C110.829,436.856 110.054,427.244 102.700,414.999 C100.080,410.639 96.793,406.325 92.729,402.000 C83.797,392.495 74.912,386.915 67.802,384.000 C61.700,381.497 50.963,379.228 38.886,378.999 C35.842,378.942 32.958,379.029 29.912,378.999 C28.216,378.983 26.303,378.967 24.927,378.999 C20.689,379.099 16.710,379.428 12.962,379.999 C8.582,380.666 4.258,381.668 -0.000,383.000 C-0.000,258.000 -0.000,132.999 -0.000,7.999 C-0.045,6.131 0.676,4.322 1.994,3.000 C3.312,1.677 5.116,0.953 6.979,1.000 C115.994,0.666 225.009,0.333 334.023,-0.000 C335.853,0.131 337.597,0.825 339.009,2.000 C340.544,3.276 341.594,5.041 342.000,6.999 C342.000,224.333 342.000,441.666 342.000,658.999 C341.358,660.860 340.342,662.560 339.009,664.000 C337.868,665.230 336.519,666.244 335.020,667.000 C331.364,667.000 327.708,667.000 324.052,667.000 Z"/>
</svg></div>
<div class="productsvg2">
<svg 
 width="4.778in" height="9.278in">
<path fill-rule="evenodd"  fill="rgb(253, 3, 3)"
 d="M308.000,668.000 C319.422,654.059 325.918,636.887 326.000,619.000 C326.110,595.085 314.696,575.704 303.000,564.000 C292.285,553.278 259.036,539.798 213.000,538.000 C190.487,537.121 176.421,538.739 159.000,531.000 C129.954,518.096 112.183,491.080 104.000,471.000 C97.303,454.566 98.105,435.628 86.000,416.000 C72.568,394.220 57.541,385.469 46.000,382.000 C31.283,377.576 15.547,378.944 1.000,385.000 C0.667,259.333 0.333,133.667 -0.000,8.000 C2.333,5.333 4.667,2.667 7.000,0.000 C116.333,0.000 225.667,0.000 335.000,0.000 C338.000,2.667 341.000,5.333 344.000,8.000 C344.000,224.333 344.000,440.667 344.000,657.000 C344.000,660.667 344.000,664.333 344.000,668.000 C332.000,668.000 320.000,668.000 308.000,668.000 Z"/>
</svg></div> 
					<?php echo '<img class="right-img" alt="right-img" src="'.get_template_directory_uri().'/assets/images/pet1.png" />'; ?>
					<div class="right-t">
					<h1><?php echo ($popularproducts_bannertext1);  ?></h1>	
					<h2><?php echo ($popularproducts_bannertext2);  ?></h2>	
					<h3><?php echo ($popularproducts_bannertext3);  ?></h3>	
					<h4><?php echo ($popularproducts_bannertext4);  ?></h4>
					</div>	
					<div class="dogimage">
				        <?php 
				            if(!empty($popularproducts_bannerimage)){
				              echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($popularproducts_bannerimage).'" class="dogshapeimg" />';
				            }else{
				              echo '<img src="'.get_template_directory_uri().'/assets/images/default.png" class="dogshapeimg"  />';
				            } 
				        ?>
			      	</div>
			      </div>
				</div>
         </div>
		</div>
	</div>
	<div class="clearfix"></div>
</section>
