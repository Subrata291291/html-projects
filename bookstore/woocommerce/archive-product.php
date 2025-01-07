<?php get_header(); ?>
<!--Common Banner Area-->
<section class="commone_banner text-center">
        <h3>Our Shop</h3>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">/</a></li>
            <li><a href="#" class="active">Shop</a></li>
        </ul>
    </section>
    <!--Common Banner Area-->

<section class="shop_page shop_area">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-4 col-md-3">
        <div class="shop_area_left">
                        <div class="category_sidebar">
                            <h3>CATEGORIES</h3>
                            <ul>
                                <?php

                                    $taxonomy     = 'product_cat';
                                    $orderby      = 'name';  
                                    $show_count   = 1;      // 1 for yes, 0 for no
                                    $pad_counts   = 1;      // 1 for yes, 0 for no
                                    $hierarchical = 1;      // 1 for yes, 0 for no  
                                    $title        = '';  
                                    $empty        = 0;
                                  
                                    $args = array(
                                       'taxonomy'     => $taxonomy,
                                       'orderby'      => $orderby,
                                       'show_count'   => $show_count,
                                       'pad_counts'   => $pad_counts,
                                       'hierarchical' => $hierarchical,
                                       'title_li'     => $title,
                                       'hide_empty'   => $empty
                                    );
                                   $all_categories = get_categories( $args );
                                   foreach ($all_categories as $cat) {
                                    if($cat->category_parent == 0) {
                                      $category_id = $cat->term_id;  
                                      
                                  ?>
                                      <li><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo '<a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a>'; ?></li>
                                       <?php
                                    }       
                            }
                            ?>
                            </ul>
                        </div>
                       
                        <div class="product_tag">
                            <h3>PRODUCT TAGS</h3>
                            <div class="shop_tag_links">
                              <?php 
                                $args = array(
                                    'number'     => $number,
                                    'orderby'    => 'title',
                                    'order'      => 'ASC',
                                    'hide_empty' => $hide_empty,
                                    'include'    => $ids
                                );
                                $product_tags = get_terms( 'product_tag', $args );
                                $count = count($product_tags);
                                if ( $count > 0 ){
                                    foreach ( $product_tags as $product_tag ) {
                                         echo '<a href="' . get_term_link( $product_tag ) . '">' . $product_tag->name . '</a>';
                                        $args = array(
                                            'posts_per_page' => -1,
                                            'tax_query' => array(
                                                'relation' => 'AND',
                                                array(
                                                    'taxonomy' => 'product_tag',
                                                    'field' => 'slug',
                                                    // 'terms' => 'white-wines'
                                                    'terms' => $product_tag->slug,
                                                    'product_tag'=> "latest-product"
                                                )
                                            ),
                                            'post_type' => 'product',
                                            'orderby' => 'title,'
                                        );
                                        $products = new WP_Query( $args );
                                        echo "<ul>";
                                        while ( $products->have_posts() ) {
                                            $products->the_post();
                                            ?>
                                                <!--<li>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_title(); ?>
                                                        <?php echo get_the_post_thumbnail( $post_id, 'thumbnail' ); ?>
                                                    </a>
                                                </li>-->
                                            <?php
                                        }
                                        echo "</ul>";
                                    }
                                }
                             ?>
                            </div>
                        </div>
                    </div>
      </div>
      <div class="col-12 col-sm-8 col-md-9">
        <div class="shop_right">
          <?php woocommerce_content(); ?>
          
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>