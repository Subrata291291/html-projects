<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
  return;
}
?> <div class="col-md-4 col-lg-3 col-6">
  <div class="product_box text-center">
    <a href="
      <?php echo get_permalink( $loop->post->ID ) ?>" title="
      <?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>"> <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '
      <img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" />'; ?> <div class="product_content">
        <h3 class="category_name"><?php echo get_the_term_list( get_the_ID(), 'product_cat', '', ', ' ); ?></h3>
        <h4 class="product_title text-truncate"> <?php the_title(); ?> </h4>
        <h5 class="product_price"> <?php echo $product->get_price_html(); ?> </h5> <?php
                  global $product;
                            echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                                sprintf( '
        <a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="add_cart_btn button %s product_type_%s">%s</a>',
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
    </a>
  </div>
</div>