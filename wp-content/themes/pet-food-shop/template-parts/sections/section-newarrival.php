<section id="newarrival-section" class="ht-section">
<svg viewBox="0 0 1440 320">
<path fill-rule="evenodd" fill="rgb(255, 205, 8)" d="M0.005,7.916 C46.805,-3.674 93.935,-3.050 140.284,13.361 C201.485,35.031 230.090,77.772 287.577,105.910 C348.671,135.813 410.637,145.361 466.935,134.491 C512.534,125.687 544.455,99.677 584.168,85.495 C663.949,57.005 735.541,55.882 796.591,74.606 C838.173,87.360 868.107,112.674 904.807,129.047 C984.840,164.754 1065.888,175.770 1138.272,158.989 C1208.532,142.702 1281.976,85.385 1315.625,69.163 C1374.217,40.914 1436.221,24.270 1501.996,18.805 C1502.664,284.203 1503.332,549.601 1504.000,814.999 C1002.668,814.999 501.337,814.999 0.005,814.999 C0.005,545.971 0.005,276.944 0.005,7.916 Z"></path>
</svg>
<?php echo '<img class="newarrival-imgprint" src="'.get_template_directory_uri().'/assets/images/newArrival.png" />'; ?>
	<div class="container">
		<div class="newarrival-posts-box">
		<?php
			$newarrival_heading = get_theme_mod('newarrival_heading', 'New Arrival');
		?> 
			<div class="row justify-content-center">
				<div class="col-md-offset5 col-md-7">
				<?php if($newarrival_heading){ ?>	
					<div class="section-title">
					<?php if($newarrival_heading){ ?>	
						<div class="section-subtitle inner-area-title">
							<h2><?php echo ($newarrival_heading);  ?></h2>	
							<i class="fa fa-window-minimize" aria-hidden="true"></i>
		                    <i class="fa fa-paw" aria-hidden="true"></i><span><i class="fa fa-paw" aria-hidden="true"></i></span>
		                    <span><i class="fa fa-window-minimize" aria-hidden="true"></i></span>
						</div>
					<?php }?>
					</div>
				</div>
			<?php }?>
			</div> 
			<div class="row wow zoomIn">
				<div class="row">  
					<?php
					if(function_exists('woocommerce_template_loop_add_to_cart') && function_exists('WC')){
		    			$meta_query   = WC()->query->get_meta_query();
		    			$tax_query   = WC()->query->get_tax_query();
		    			
		    			$args = array(
		    				'post_type'   =>  'product',
		    				'stock'       =>  1,
		    				'posts_per_page' => 4, 
		    				'orderby'     =>  'date',
		    				'order'       =>  'DESC',
		    				'meta_query'  =>  $meta_query,
		    				'tax_query'   => $tax_query,
		    			);
						$loop = new WP_Query( $args );
						if($loop->post_count > 0){
							while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
					<div class="item col-lg-3 col-md-4 col-sm-12">  
						<div class="product-grid ">
							<!-- <div class="probg"></div> -->
							<div class="default_product_display product_view_<?php echo get_permalink( $loop->post->ID ); ?>group">
	                    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>"/>
		                    <?php if (has_post_thumbnail( $loop->post->ID )){ ?>         
		                    <div class="product-image-thumb"> 
		                        <img class="newarrival-imgboxshape" src="<?php echo the_post_thumbnail_url( $loop->post->ID );?>"/>
		                    </div>
		                    <?php
		                    } else 
		                    {?>
		                    <div class="product-image-thumb">		                       
		                            <img class="newarrival-imgboxshape" src="<?php echo woocommerce_placeholder_img_src();?>"/>                  
		                   </div>
	                   		 <?php } ?>
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
		</div>
	</div>
	<div class="clearfix"></div>
</section>
