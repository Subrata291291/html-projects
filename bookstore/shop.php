<?php
/* Template Name: shop */
?>

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

    <!--Shop Area-->
    <section class="shop_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop_area_left">
                        <div class="category_box">
                            <h3>CATEGORIES</h3>
                            <ul>
                                <li><a href="#">Coffee Crates <span class="count">(3)</span></a></li>
                                <li><a href="#">Crates & Boxes <span class="count">(3)</span></a></li>
                                <li><a href="#">Fresh Boxes <span class="count">(2)</span></a></li>
                                <li><a href="#">Meal Kits Crates <span class="count">(3)</span></a></li>
                                <li><a href="#">Past Crates <span class="count">(3)</span></a></li>
                            </ul>
                        </div>
                        <div class="price_filter">
                            <h3>PRICE FILTER</h3>
                            <div class="filter_bg"></div>
                            <div class="align-items-center">
                                <a href="#" class="filter_btn">Filter</a>
                                <span class="range_area">Price: $20 — $30</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="product_tag">
                            <h3>PRODUCT TAGS</h3>
                            <div class="shop_tag_links">
                                <a href="#">Anual</a>
                                <a href="#">Box</a>
                                <a href="#">Coffee</a>
                                <a href="#">Coffee Creates</a>
                                <a href="#">Fresh</a>
                                <a href="#">Fresh Box</a>
                                <a href="#">Gift Box</a>
                                <a href="#">Healthy Meal</a>
                                <a href="#">Coffee Creates</a>
                                <a href="#">Fresh</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop_area_right">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="product_box">
                                    <div class="product_pic">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/product1.png" alt="product_pic">
                                    </div>
                                    <div class="wishlist">
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="add_cart_btn">
                                        <a href="javascript:void(0)" class="addtocart">Add to cart</a>
                                    </div>
                                    <div class="rating_area text-center">
                                        <span>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <h5 class="product_title text-center">TheCrate Glamourous</h5>
                                    <span class="price text-center">
                                        <p>$29.00 / Month</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product_box">
                                    <div class="product_pic">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/product2.png" alt="product_pic">
                                    </div>
                                    <div class="wishlist">
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="add_cart_btn">
                                        <a href="javascript:void(0)" class="addtocart">Add to cart</a>
                                    </div>
                                    <div class="rating_area text-center">
                                        <span>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <h5 class="product_title text-center">TheCrate Glamourous</h5>
                                    <span class="price text-center">
                                        <p>$29.00 / Month</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product_box">
                                    <div class="product_pic">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/product3.png" alt="product_pic">
                                    </div>
                                    <div class="wishlist">
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="add_cart_btn">
                                        <a href="javascript:void(0)" class="addtocart">Add to cart</a>
                                    </div>
                                    <div class="rating_area text-center">
                                        <span>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <h5 class="product_title text-center">TheCrate Glamourous</h5>
                                    <span class="price text-center">
                                        <p>$29.00 / Month</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Shop Area-->

<?php get_footer(); ?>