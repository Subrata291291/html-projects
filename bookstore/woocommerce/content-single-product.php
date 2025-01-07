<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>
  <!--Common Banner Area-->
<section class="commone_banner text-center">
        <h3><?php the_title(); ?></h3>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">/</a></li>
            <li><a href="#" class="active"><?php the_title(); ?></a></li>
        </ul>
    </section>
    <!--Common Banner Area-->
    <section class="product_details">
        <div class="container">
            <div class="row">
                <div class="product_details_left col-lg-6 col-md-6 col-12">
                    <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'full'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" />'; ?>
                
                </div>
                <div class="product_details_right col-lg-6 col-md-6 col-12">
                    <?php do_action( 'woocommerce_single_product_summary' ); ?>
                    <!--<p class="dettext"><?php the_content();?></p>-->
                </div>
            </div>
        </div>
    </section>
    <?php
    do_action( 'woocommerce_after_single_product_summary' );