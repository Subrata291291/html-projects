<?php ob_start(); ?>
<!DOCTYPE html>
<html <?php  language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta property="og:title" content="<?php bloginfo('name'); ?><?php wp_title(); ?>">
     <meta property="og:description" content="<?php bloginfo('name'); ?><?php wp_title(); ?>">
     <meta property="og:image:width" content="1200">
     <meta property="og:image:height" content="630">
     <meta property="og:image" content="<?php bloginfo('template_directory'); ?>/images/book7.png">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Bootstrap 5 -->
    <!--font aswome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--font aswome -->

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/header.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/shop.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/index.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/common.css">
    <!-- Stylesheets -->
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/fancybox.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/gallery.css">
    <!-- Stylesheets -->
    <!--Slick css-->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/slick-theme.css">
    <!--Slick css-->
    <!--aos css-->
    <link href="<?php bloginfo('template_directory'); ?>/css/aos.css" rel="stylesheet">
    <!--aos css-->

<?php wp_head(); ?>

</head>


<body>

<!--Header Area-->
    <section class="top_header">
      <div class="container">
        <div class="row bg-mb">
          <div class="col-lg-6 col-md-7 col-12">
            <div class="top_left">
              <ul>
                <li>
                  <a href="#"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span> Brooklyn, NY 10036, United States</a>
                </li>
                <li>
                  <a href="tel:1-800-123-1234"><span><i class="fa fa-mobile" aria-hidden="true"></i></span> 1-800-123-1234</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-5 col-12">
            <div class="top_right">
              <ul>
                <li>
                  <a href="<?php echo site_url();?>/wishlist">
                    Wishlist
                  </a>
                </li>
                <li>
                  <a>
                    |
                  </a>
                </li>
                <li>
                  <a href="<?php echo site_url();?>/my-account">
                    My Account
                  </a>
                </li>
                <li>
                  <a>
                    |
                  </a>
                </li>
                <li>
                  <a href="<?php echo site_url();?>/checkout">
                    Checkout
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row mt-20 mb-20 align-items-center">
          <div class="col-lg-6 col-md-6 col-6">
            <div class="logo_area">
              <!-- <img src="images/logo.png" alt="logo"> -->
              <!--  Image based logo  -->
                <?php if ( get_theme_mod( 'riz_logo' ) ) : ?>
                <a class="" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'riz_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'/>
                </a>

                <?php else : ?>
                  <?php bloginfo('name'); ?>
                <?php endif; ?>
                <!--  Image based logo  -->
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-6">
            <div class="cart_area">
              <a href="<?php echo site_url();?>/cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <span id="cart_counter"><?php echo WC()->cart->get_cart_contents_count(); ?></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <header class="header_area green-bg">
      <nav class="navbar navbar-expand-md  shadow">
        <div class="container position-relative">
          <div class="logo d-lg-none d-md-none d-block">
            <!--  Image based logo  -->
                <?php if ( get_theme_mod( 'riz_logo' ) ) : ?>
                <a class="" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'riz_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'/>
                </a>

                <?php else : ?>
                  <?php bloginfo('name'); ?>
                <?php endif; ?>
                <!--  Image based logo  -->
            </div>
          <button class="navbar-toggler p-0 border-0" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="navbar_icon" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
              <i class="fa fa-bars" aria-hidden="true"></i>
              <!-- <span class="line1"></span>
              <span class="line2"></span>
              <span class="line3"></span> -->
            </div>
          </button>

          <div class="collapse navbar-collapse d-lg-block d-md-block d-none"  id="navbarSupportedContent">
            <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0 primary_nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">
                  <div class="menu-text">
                    <span>h</span>
                    <span>o</span>
                    <span>m</span>
                    <span>e</span>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.html">
                  <div class="menu-text">
                    <span>a</span>
                    <span>b</span>
                    <span>o</span>
                    <span>u</span>
                    <span>t</span>
                    <span style="width: 5px;"></span>
                    <span>u</span>
                    <span>s</span>
                  </div>
                </a>
              </li>
              <li class="nav-item dropdown dropdown-mega mega_menu position-static">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="menu-text">
                    <span>b</span>
                    <span>l</span>
                    <span>o</span>
                    <span>g</span>
                  </div>
                </a>
                <ul class="dropdown-menu shadow">
                  <li>
                    <a class="dropdown-item" href="index.html">
                      <div class="menu-text">
                        <span>g</span>
                        <span>a</span>
                        <span>l</span>
                        <span>l</span>
                        <span>e</span>
                        <span>r</span>
                        <span>y</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="index.html">
                      <div class="menu-text">
                        <span>b</span>
                        <span>l</span>
                        <span>0</span>
                        <span>g</span>
                      </div>
                    </a>
                  </li>
                  <li class="dropstart">
                    <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown">Submenu Left</a>
                    <ul class="dropdown-menu shadow">
                      <li>
                        <a class="dropdown-item" href="index.html">
                          <div class="menu-text">
                            <span>b</span>
                            <span>l</span>
                            <span>0</span>
                            <span>g</span>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="index.html">
                          <div class="menu-text">
                            <span>b</span>
                            <span>l</span>
                            <span>0</span>
                            <span>g</span>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="index.html">
                          <div class="menu-text">
                            <span>b</span>
                            <span>l</span>
                            <span>0</span>
                            <span>g</span>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="index.html">
                          <div class="menu-text">
                            <span>b</span>
                            <span>l</span>
                            <span>0</span>
                            <span>g</span>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="index.html">
                          <div class="menu-text">
                            <span>b</span>
                            <span>l</span>
                            <span>0</span>
                            <span>g</span>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropend">
                    <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Submenu Right</a>
                    <ul class="dropdown-menu shadow">
                      <li>
                        <a class="dropdown-item" href="index.html">
                          <div class="menu-text">
                            <span>b</span>
                            <span>l</span>
                            <span>0</span>
                            <span>g</span>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="index.html">
                          <div class="menu-text">
                            <span>b</span>
                            <span>l</span>
                            <span>0</span>
                            <span>g</span>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="index.html">
                          <div class="menu-text">
                            <span>b</span>
                            <span>l</span>
                            <span>0</span>
                            <span>g</span>
                          </div>
                        </a>
                      </li>
                      <li class="dropend">
                        <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown">Let's go deeper!</a>
                        <ul class="dropdown-menu dropdown-submenu shadow">
                          <li>
                            <a class="dropdown-item" href="index.html">
                              <div class="menu-text">
                                <span>b</span>
                                <span>l</span>
                                <span>0</span>
                                <span>g</span>
                              </div>
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="index.html">
                              <div class="menu-text">
                                <span>b</span>
                                <span>l</span>
                                <span>0</span>
                                <span>g</span>
                              </div>
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="index.html">
                              <div class="menu-text">
                                <span>b</span>
                                <span>l</span>
                                <span>0</span>
                                <span>g</span>
                              </div>
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="index.html">
                              <div class="menu-text">
                                <span>b</span>
                                <span>l</span>
                                <span>0</span>
                                <span>g</span>
                              </div>
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="index.html">
                              <div class="menu-text">
                                <span>b</span>
                                <span>l</span>
                                <span>0</span>
                                <span>g</span>
                              </div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a class="dropdown-item" href="index.html">
                          <div class="menu-text">
                            <span>b</span>
                            <span>l</span>
                            <span>0</span>
                            <span>g</span>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown dropdown-mega shop_mega_menu position-static">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="menu-text">
                    <span>s</span>
                    <span>h</span>
                    <span>o</span>
                    <span>p</span>
                  </div>
                </a>
                <ul class="dropdown-menu shadow">
                  <li>
                    <a class="dropdown-item" href="index.html">
                      <div class="menu-text">
                        <span>g</span>
                        <span>a</span>
                        <span>l</span>
                        <span>l</span>
                        <span>e</span>
                        <span>r</span>
                        <span>y</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="index.html">
                      <div class="menu-text">
                        <span>b</span>
                        <span>l</span>
                        <span>0</span>
                        <span>g</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item contact_page">
                <a class="nav-link" href="#">
                  <div class="menu-text">
                    <span>c</span>
                    <span>o</span>
                    <span>n</span>
                    <span>t</span>
                    <span>a</span>
                    <span>c</span>
                    <span>t</span>
                  </div>
                </a>
              </li>
            </ul> -->
            <?php wp_nav_menu( array(
                                  'container' =>'',
                                  'theme_location' => 'main-menu',
                                  'menu_class'      => '',
                                  'items_wrap'      => '<ul class="navbar-nav me-auto mb-lg-0 primary_nav">%3$s</ul>',
                                  ) ); 
                                ?> 
          </div>
          <ul class="right_menu d-lg-block d-md-block d-none">
            <li class="search_form position-relative">
              <!-- <input type="search" class="field" name="s" value="" id="custom-search" placeholder="Search …"> -->
              <?php echo do_shortcode('[fibosearch]'); ?>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!--Mobile menu-->
    <div class="mobile_menu d-lg-none d-md-none d-block">
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel"><!--  Image based logo  -->
                <?php if ( get_theme_mod( 'riz_logo' ) ) : ?>
                <a class="" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'riz_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'/>
                </a>

                <?php else : ?>
                  <?php bloginfo('name'); ?>
                <?php endif; ?>
                <!--  Image based logo  --></h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <?php wp_nav_menu( array(
                  'container' =>'',
                  'theme_location' => 'mob-menu',
                  'menu_class'      => '',
                  'items_wrap'      => '<ul class="navbar-nav me-auto mb-2 mb-lg-0 primary_nav">%3$s</ul>',
                  ) ); 
                ?>
                <?php echo do_shortcode('[fibosearch]'); ?>
              </div>
              </div>
            </div>
          </div>
    <!--Mobile menu-->
<!--Header Area-->
