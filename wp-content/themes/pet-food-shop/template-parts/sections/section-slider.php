<section id="slider-section" class="slider-area home-slider">
  <!-- start of hero --> 
  <section class="hero-slider hero-style">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php for($p=1; $p<6; $p++) { ?>
        <?php if( get_theme_mod('slider'.$p,false)) { ?>
        <?php $querycolumns = new WP_query('page_id='.get_theme_mod('slider'.$p,true)); ?>
        <?php while( $querycolumns->have_posts() ) : $querycolumns->the_post(); 
          $image = wp_get_attachment_image_src(get_post_thumbnail_id() , true); ?>
        <?php 
          if(has_post_thumbnail()){
            $img = esc_url($image[0]);
          }
          if(empty($image)){
            $img = get_template_directory_uri().'/assets/images/default.png';
          }
        ?>
        
        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image">
            <div class="row md-0">                      
              <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 pd-0">             
                <div class="sliderimg">
                  <div class="sliderimgshape1"> 
                    <img class="slide-mainimg slidershape1" src="<?php echo $img; ?>" alt="<?php the_title_attribute(); ?>">
                  </div>
                </div>
              </div>

              <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 pd-0">
                <div class="slidersvg1">
                  <svg width="781px" height="753px">
                            <path fill-rule="evenodd"  fill="#ffcd08"
                             d="M393.000,753.000 C345.734,717.909 301.042,679.891 259.000,639.000 C218.444,599.555 180.759,557.870 146.000,514.000 C113.128,472.512 82.924,429.205 64.813,396.000 C6.075,288.314 -4.057,182.622 2.000,144.000 C10.196,91.739 32.120,43.102 65.000,-0.000 C303.667,-0.000 542.333,-0.000 781.000,-0.000 C781.000,251.000 781.000,502.000 781.000,753.000 C651.667,753.000 522.333,753.000 393.000,753.000 Z"/>
                  </svg> 
                  <div class="slidersvg2">
                      <?php echo '<img class="slider-imgprint" src="'.get_template_directory_uri().'/assets/images/bgprint.png" />'; ?>
                      <?php echo '<img class="slider-imgcat" src="'.get_template_directory_uri().'/assets/images/catslider.png" />'; ?>
                       <svg width="781px" height="753px">
                        <path fill-rule="evenodd"  fill="#fff"
                         d="M393.000,753.000 C345.734,717.909 301.042,679.891 259.000,639.000 C218.444,599.555 180.759,557.870 146.000,514.000 C113.128,472.512 82.924,429.205 64.813,396.000 C6.075,288.314 -4.057,182.622 2.000,144.000 C10.196,91.739 32.120,43.102 65.000,-0.000 C303.667,-0.000 542.333,-0.000 781.000,-0.000 C781.000,251.000 781.000,502.000 781.000,753.000 C651.667,753.000 522.333,753.000 393.000,753.000 Z"/>
                        </svg>
                    <div class="container slidercontent">
                      <div data-swiper-parallax="300" class="slide-title">
                        <h2><?php the_title_attribute(); ?></h2>   
                      </div>    
                      <div data-swiper-parallax="400" class="slide-text" style="margin-bottom: 1em;">
                        <p><?php the_excerpt(); ?></p>
                      </div>
                      <div data-swiper-parallax="500" class="slide-btns">
                        <a class="ReadMore" href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e('Shop Now','pet-food-shop'); ?></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>                
        </div>
        <?php endwhile;
           wp_reset_postdata(); ?>
        <?php } } ?>
        <div class="clear"></div> 

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>
  <!-- end of hero slider -->
</section>


