<?php
/* Template Name: Home Page */
?>

<?php get_header(); ?>
 
    <!--Banner Area-->
    <section class="banner_area">
      <div class="banner_slider p-0">
        <div class="slider position-relative">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-7 col-md-7 col-12">
                <div class="slider_content animate__animated animate__fadeInUp">
                  <h3>Lorem Ipsum is simply <span class="theme-hover-color">dummy</span> printing</h3>
                  <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit sedeiu tempor inci ut labore et dolore magna aliqua.</p>
                  <button type="button" class="buy_now_btn mt-20">View More</button>
                </div>
              </div>
              <div class="col-lg-5 col-md-5 col-12">
                <div class="slider_pic animate__animated animate__wobble">
                  <img src="<?php bloginfo('template_directory'); ?>/images/book7.png" class="w-100">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="slider position-relative">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-7 col-md-7 col-12">
                <div class="slider_content animate__animated animate__fadeInUp">
                  <h3>Lorem Ipsum is simply <span class="theme-hover-color">dummy</span> printing</h3>
                  <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit sedeiu tempor inci ut labore et dolore magna aliqua.</p>
                  <button type="button" class="buy_now_btn mt-20">Food Menu</button>
                </div>
              </div>
              <div class="col-lg-5 col-md-5 col-12">
                <div class="slider_pic">
                  <img src="<?php bloginfo('template_directory'); ?>/images/book17.png" class="w-100">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="slider position-relative">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-7 col-md-7 col-12">
                <div class="slider_content animate__animated animate__fadeInUp">
                  <h3>Lorem Ipsum is simply <span class="theme-hover-color">dummy</span> printing</h3>
                  <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit sedeiu tempor inci ut labore et dolore magna aliqua.</p>
                  <button type="button" class="buy_now_btn mt-20">View More</button>
                </div>
              </div>
              <div class="col-lg-5 col-md-5 col-12">
                <div class="slider_pic">
                  <img src="<?php bloginfo('template_directory'); ?>/images/book5.png" class="w-100">
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
    <!--Banner Area-->
    <!--Support Area-->
    <section class="support_area" data-aos="fade-up">
      <div class="container">
        <div class="row theme-bg p30">
          <div class="col-lg-4 col-md-4 col-12">
            <div class="support_box">
              <div class="row align-items-center">
                <div class="col-lg-2 col-md-2 col-2">
                  <div class="support_pic">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="col-lg-10 col-md-10 col-10">
                  <div class="support_content">
                    <h5>24/7 CUSTOMER SUPPORT</h5>
                    <a href="tel:+ 0123 456 789">Call: + 0123 456 789</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="support_box">
              <div class="row align-items-center">
                <div class="col-lg-2 col-md-2 col-2">
                  <div class="support_pic">
                    <i class="fa fa-plane" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="col-lg-10 col-md-10 col-10">
                  <div class="support_content">
                    <h5>FREE SHIPPING WORLD WIDE</h5>
                    <a href="">On Order Over $99</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="support_box">
              <div class="row align-items-center">
                <div class="col-lg-2 col-md-2 col-2">
                  <div class="support_pic">
                    <i class="fa fa-usd" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="col-lg-10 col-md-10 col-10">
                  <div class="support_content">
                    <h5>MONEY BACK GUARANTEE</h5>
                    <a href="">45 Days Return Service</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Support Area-->
    <!--Category Area-->
    <section class="category_area mt-20" data-aos="fade-up">
      <div class="cat_slider p-0 container">
        <?php   $args = array( 'post_type' => 'product', 'order' => 'DESC' , 'posts_per_page' =>  12);
          $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
        <div class="slider position-relative">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-4 col-md-4 col-4">
                  <div class="cat_right">
                    <!-- <img src="<?php bloginfo('template_directory'); ?>/images/book5.png" alt="book8" class="img-fluid"> -->
                    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                     <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" />'; ?>
                   </a>
                  </div>
              </div>
              <div class="col-lg-8 col-md-8 col-8">
                  <div class="cat_left">
                    <h5>Shop Category</h5>
                      <!-- <h4>E-Books</h4> -->
                      <h4><?php echo get_the_term_list( get_the_ID(), 'product_cat', '', ', ' ); ?></h4>
                      <!-- <a href="#">Shop Now <span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a> -->
                      <div class="cart_btn">
                      <?php global $product;
                            echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                                sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="add_cart_btn button %s product_type_%s">%s</a>',
                                    esc_url( $product->add_to_cart_url() ),
                                    esc_attr( $product->get_id() ),
                                    esc_attr( $product->get_sku() ),
                                    $product->is_purchasable() ? 'add_to_cart_button' : '',
                                    esc_attr( $product->get_type() ),
                                    esc_html( $product->add_to_cart_text() )
                                ),
                            $product );
                      ?>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>
    </section>
    <!--Category Area-->
    <!--Tab Area-->
    <section class="tab_area mt-100" data-aos="fade-up">
      <div class="container">
        <div class="menu_list">
          <div class="row">
            <div class="col-lg-12">
              <div class="container">
                <ul class="tabs">
                  <li class="tab-link current" data-tab="all">All</li>
                  <li class="tab-link" data-tab="creative">Creative Thinking</li>
                  <li class="tab-link" data-tab="fantacy">fantacy</li>
                  <li class="tab-link" data-tab="romance">romance</li>
                </ul>
                <div id="all" class="tab-content current">
                  <ul>
                    <li class="row">
                      <?php   $args = array( 'post_type' => 'product', 'order' => 'DESC' , 'posts_per_page' =>  12);
                        $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                      <div class="col-lg-3 col-md-4 col-6">
                        <a href="
                          <?php echo get_permalink( $loop->post->ID ) ?>" title="
                          <?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                        <div class="menu_grid">
                          <div class="menu-img">
                            <!-- <a href="shop-detail.html">
                               <img src="<?php bloginfo('template_directory'); ?>/images/book5.png" alt="book8" class="img-fluid">
                            </a> -->
                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" />'; ?>
                          </div>
                          <div class="sale_percentage"><p><?php echo do_shortcode('[percentage]'); ?></p></div>
                          <a href="<?php echo get_permalink( $loop->post->ID ) ?>" class="menu-title text-uppercase"><h5 class="text-truncate"><?php the_title(); ?></h5></a>
                          <p class="menu-des text-truncate"><?php echo wp_trim_words( get_the_excerpt(), 12); ?></p>
                          <span class="menu-price"><?php echo $product->get_price_html(); ?></span>
                          <div class="cart_button">
                            <?php global $product;
                            echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                                sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="add_cart_btn button %s product_type_%s">%s</a>',
                                    esc_url( $product->add_to_cart_url() ),
                                    esc_attr( $product->get_id() ),
                                    esc_attr( $product->get_sku() ),
                                    $product->is_purchasable() ? 'single_add_to_cart_button' : '',
                                    esc_attr( $product->get_type() ),
                                    esc_html( $product->add_to_cart_text() )
                                ),
                            $product );
                            ?>
                          </div>
                        </div>
                      </a>
                      </div>
                      <?php endwhile; wp_reset_query(); ?>
                    </li>
                  </ul>
                </div>
                <div id="creative" class="tab-content">
                  <ul>
                    <li class="row">
                      <?php $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => 'creative-thinking', 'orderby' => 'rand' );
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                      <div class="col-lg-3 col-md-4 col-6">
                        <a href="
                          <?php echo get_permalink( $loop->post->ID ) ?>" title="
                          <?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                        <div class="menu_grid">
                          <div class="menu-img">
                            <!-- <a href="shop-detail.html">
                               <img src="<?php bloginfo('template_directory'); ?>/images/book5.png" alt="book8" class="img-fluid">
                            </a> -->
                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" />'; ?>
                          </div>
                          <div class="sale_percentage"><p><?php echo do_shortcode('[percentage]'); ?></p></div>
                          <a href="<?php echo get_permalink( $loop->post->ID ) ?>" class="menu-title text-uppercase"><h5 class="text-truncate"><?php the_title(); ?></h5></a>
                          <p class="menu-des text-truncate"><?php echo wp_trim_words( get_the_excerpt(), 12); ?></p>
                          <span class="menu-price"><?php echo $product->get_price_html(); ?></span>
                          <div class="cart_button">
                            <?php global $product;
                            echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                                sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="add_cart_btn button %s product_type_%s">%s</a>',
                                    esc_url( $product->add_to_cart_url() ),
                                    esc_attr( $product->get_id() ),
                                    esc_attr( $product->get_sku() ),
                                    $product->is_purchasable() ? 'single_add_to_cart_button' : '',
                                    esc_attr( $product->get_type() ),
                                    esc_html( $product->add_to_cart_text() )
                                ),
                            $product );
                      ?>
                          </div>
                        </div>
                      </a>
                      </div>
                      <?php endwhile; wp_reset_query(); ?>
                    </li>
                  </ul>
                </div>
                <div id="fantacy" class="tab-content">
                  <ul>
                    <li class="row">
                      <?php $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => 'fantacy', 'orderby' => 'rand' );
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                      <div class="col-lg-3 col-md-4 col-6">
                        <a href="
                          <?php echo get_permalink( $loop->post->ID ) ?>" title="
                          <?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                        <div class="menu_grid">
                          <div class="menu-img">
                            <!-- <a href="shop-detail.html">
                               <img src="<?php bloginfo('template_directory'); ?>/images/book5.png" alt="book8" class="img-fluid">
                            </a> -->
                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" />'; ?>
                          </div>
                          <div class="sale_percentage"><p><?php echo do_shortcode('[percentage]'); ?></p></div>
                          <a href="<?php echo get_permalink( $loop->post->ID ) ?>" class="menu-title text-uppercase"><h5 class="text-truncate"><?php the_title(); ?></h5></a>
                          <p class="menu-des text-truncate"><?php echo wp_trim_words( get_the_excerpt(), 12); ?></p>
                          <span class="menu-price"><?php echo $product->get_price_html(); ?></span>
                          <div class="cart_button">
                            <?php global $product;
                            echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                                sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="add_cart_btn button %s product_type_%s">%s</a>',
                                    esc_url( $product->add_to_cart_url() ),
                                    esc_attr( $product->get_id() ),
                                    esc_attr( $product->get_sku() ),
                                    $product->is_purchasable() ? 'single_add_to_cart_button' : '',
                                    esc_attr( $product->get_type() ),
                                    esc_html( $product->add_to_cart_text() )
                                ),
                            $product );
                      ?>
                          </div>
                        </div>
                      </a>
                      </div>
                      <?php endwhile; wp_reset_query(); ?>
                    </li>
                  </ul>
                </div>
                <div id="romance" class="tab-content">
                  <ul>
                    <li class="row">
                      <?php $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => 'romance', 'orderby' => 'rand' );
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                      <div class="col-lg-3 col-md-4 col-6">
                        <a href="
                          <?php echo get_permalink( $loop->post->ID ) ?>" title="
                          <?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                        <div class="menu_grid">
                          <div class="menu-img">
                            <!-- <a href="shop-detail.html">
                               <img src="<?php bloginfo('template_directory'); ?>/images/book5.png" alt="book8" class="img-fluid">
                            </a> -->
                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" />'; ?>
                          </div>
                          <div class="sale_percentage">
                            <p><?php echo do_shortcode('[percentage]'); ?></p>
                          </div>
                          <a href="<?php echo get_permalink( $loop->post->ID ) ?>" class="menu-title text-uppercase"><h5 class="text-truncate"><?php the_title(); ?></h5></a>
                          <p class="menu-des text-truncate"><?php echo wp_trim_words( get_the_excerpt(), 12); ?></p>
                          <span class="menu-price"><?php echo $product->get_price_html(); ?></span>
                          <div class="cart_button">
                            <?php global $product;
                            echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                                sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="add_cart_btn button %s product_type_%s">%s</a>',
                                    esc_url( $product->add_to_cart_url() ),
                                    esc_attr( $product->get_id() ),
                                    esc_attr( $product->get_sku() ),
                                    $product->is_purchasable() ? 'single_add_to_cart_button' : '',
                                    esc_attr( $product->get_type() ),
                                    esc_html( $product->add_to_cart_text() )
                                ),
                            $product );
                      ?>
                          </div>
                        </div>
                      </a>
                      </div>
                      <?php endwhile; wp_reset_query(); ?>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Tab Area-->
    <!--Signup Area-->
    <section class="signup_area mb-100" id="counter" data-aos="fade-up">
      <div class="container">
        <div class="signup_box text-center">
          <h5>
            Join <span class="counter animated fadeInDownBig count" data-count="10321 ">0</span> Happy readers And Get Access To Our Entire Collection Of <span class="counter animated fadeInDownBig count" data-count="1000 ">0</span> ebooks For The Price Of One
          </h5>
          <h3>
            We offer a 45 Days Money Back Guarantee, so joining is risk-free!
          </h3>
          <button type="submit">Signup Today <span><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
        </div>
      </div>
    </section>
    <!--Signup Area-->
    <!--Exclusive Area-->
    <section class="exclusive_area mb-100" data-aos="fade-up">
      <div class="container p-0">
        <div class="title_area text-center">
          <h4 class="title">Executive This Month</h4>
          <p class="description">Top selling books of the month</p>
        </div>
              <div class="exclusive_slider p-0 container">
        <?php   $args = array( 'post_type' => 'product', 'order' => 'DESC' , 'posts_per_page' =>  12);
          $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
        <div class="slider position-relative">
          <div class="menu_grid">
                          <div class="menu-img">
                            <!-- <a href="shop-detail.html">
                               <img src="<?php bloginfo('template_directory'); ?>/images/book5.png" alt="book8" class="img-fluid">
                            </a> -->
                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" />'; ?>
                          </div>
                          <div class="sale_percentage"><p><?php echo do_shortcode('[percentage]'); ?></p></div>
                          <a href="<?php echo get_permalink( $loop->post->ID ) ?>" class="menu-title text-uppercase"><h5 class="text-truncate"><?php the_title(); ?></h5></a>
                          <p class="menu-des text-truncate"><?php echo wp_trim_words( get_the_excerpt(), 12); ?></p>
                          <span class="menu-price"><?php echo $product->get_price_html(); ?></span>
                          <div class="cart_button">
                            <?php global $product;
                            echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                                sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="add_cart_btn button %s product_type_%s">%s</a>',
                                    esc_url( $product->add_to_cart_url() ),
                                    esc_attr( $product->get_id() ),
                                    esc_attr( $product->get_sku() ),
                                    $product->is_purchasable() ? 'single_add_to_cart_button' : '',
                                    esc_attr( $product->get_type() ),
                                    esc_html( $product->add_to_cart_text() )
                                ),
                            $product );
                            ?>
                          </div>
                        </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>
      </div>
    </section>
    <!--Exclusive Area-->
    <!--Blog Area-->
    <section class="blog_area mb-100" data-aos="fade-up" id="news">
              <div class="container">
                <div class="title_area text-center">
                  <h4 class="title">LATEST FROM OUR BLOG</h4>
                  <p class="description">We love to share our thoughts</p>
                </div>
                <div class="row">
                  <?php
            $fx_get_posts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'order'=>'DESC', 'posts_per_page'=>-3));
            if ( $fx_get_posts -> have_posts() ) : ?>
            <?php while ( $fx_get_posts -> have_posts() ) : $fx_get_posts -> the_post(); ?>
                  <div class="col-lg-4 col-md-4 col-12">
                    <div class="blox_box">
                      <!-- <img src="<?php bloginfo('template_directory'); ?>/images/blog-01.jpg" alt="blog-1"> -->
                      <div class="blog-thumb">
                         <a class="blogpgimg" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                      </div>
                      <div class="blog_content">
                        <h5 class="blog-date">
                          <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo get_the_date(); ?>
                        </h5>
                        <h3 class="blog-title text-truncate"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 4); ?></a></h3>
                        <p class="blog-title text-truncate"><?php echo wp_trim_words( get_the_excerpt(), 12); ?></p>
                        <a href="<?php the_permalink(); ?>">Read More <span>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                            <?php endwhile; ?>
               <?php wp_reset_postdata();
                  else : ?>
            <p><?php _e( 'There are no posts to display at the moment' ); ?></p>
         <?php endif; ?>
                </div>
              </div>
            </section>
            <!--Blog Area-->

<?php get_footer(); ?>