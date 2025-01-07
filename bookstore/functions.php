<?php 
function my_wp_nav_menu_args( $args = '' ) {
$args['container'] = false;
return $args;
}
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'mob-menu' => __( 'Mob Menu' ),
      'footer-menu' => __( 'footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );



if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
}

function add_id_and_classes_to_page_menu( $ulclass ) {
  return preg_replace( '/<ul>/', '<ul class="main_menu">', $ulclass, 1 );
}
add_filter( 'wp_page_menu', 'add_id_and_classes_to_page_menu' );

//Main Logo
function rizrazor_theme_customizer( $wp_customize ) {
    $wp_customize->add_section( 'riz_logo_section' , array(
    'title'       => __( 'Main Logo Image', 'rizlogo' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
    ) );
    
    $wp_customize->add_setting( 'riz_logo' );
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'riz_logo', array(
    'label'    => __( 'Logo Upload', 'rizlogo' ),
    'section'  => 'riz_logo_section',
    'settings' => 'riz_logo',
    ) ) );

}
add_action('customize_register', 'rizrazor_theme_customizer');

//Footer Logo
function rizrazor_footer_logo_customizer( $wp_customize ) {
    $wp_customize->add_section( 'foot_logo_section' , array(
    'title'       => __( 'Footer Logo Image', 'footlogo' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
    ) );
    
    $wp_customize->add_setting( 'foot_logo' );
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'foot_logo', array(
    'label'    => __( 'Logo Upload', 'footlogo' ),
    'section'  => 'foot_logo_section',
    'settings' => 'foot_logo',
    ) ) );

}
add_action('customize_register', 'rizrazor_footer_logo_customizer');

//Breadcrumb

function the_breadcrumb() {
    global $post;
    echo '<ul>';
    if (!is_home()) {
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        echo 'Home';
        echo '</a></li><li class="separator"> &raquo; </li>';
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li class="separator"> &raquo; </li><li> ');
            if (is_single()) {
                echo '</li><li class="separator"> &raquo; </li><li>';
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            if($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
                $title = get_the_title();
                foreach ( $anc as $ancestor ) {
                    $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator">/</li>';
                }
                echo $output;
                echo '<strong title="'.$title.'"> '.$title.'</strong>';
            } else {
                echo '<li><strong> '.get_the_title().'</strong></li>';
            }
        }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ul>';
}
//Breadcrumb

//Widgets
function wpb_widgets_init() {
 
    register_sidebar( array(
        'name' => __( 'category Sidebar', 'wpb' ),
        'id' => 'sidebar-category',
        'description' => __( 'The main sidebar appears on the left on the shop page', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'wpb_widgets_init' );
//Widgets end


//Woocommerce Support Theme
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
}
//Woocommerce Support Theme

//ajax cart count
function iconic_cart_count_fragments( $fragments ) {
    
    $fragments['#cart_counter'] = '<span id="cart_counter">' . WC()->cart->get_cart_contents_count() . '</span>';
    
    return $fragments;
    
}
//ajax cart count


//Discount
add_action( 'woocommerce_sale_flash', 'sale_badge_percentage', 25 );
 
function sale_badge_percentage() {
   global $product;
   if ( ! $product->is_on_sale() ) return;
   if ( $product->is_type( 'simple' ) ) {
      $max_percentage = ( ( $product->get_regular_price() - $product->get_sale_price() ) / $product->get_regular_price() ) * 100;
   } elseif ( $product->is_type( 'variable' ) ) {
      $max_percentage = 0;
      foreach ( $product->get_children() as $child_id ) {
         $variation = wc_get_product( $child_id );
         $price = $variation->get_regular_price();
         $sale = $variation->get_sale_price();
         if ( $price != 0 && ! empty( $sale ) ) $percentage = ( $price - $sale ) / $price * 100;
         if ( $percentage > $max_percentage ) {
            $max_percentage = $percentage;
         }
      }
   }
   if ( $max_percentage > 1 ) echo "<span class='onsale'>-" . round($max_percentage) . "%</span>"; // If you would like to show -40% off then add text after % sign
}

add_shortcode('percentage','sale_badge_percentage');



