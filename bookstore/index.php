<?php get_header(); ?>
  <!--Common Banner Area-->
<section class="commone_banner text-center">
        <h3><?php the_title(); ?></h3>
        <ul>
            <li><a href="<?php echo site_url();?>">Home</a></li>
            <li><a href="#">/</a></li>
            <li><a href="#" class="active"><?php the_title(); ?></a></li>
        </ul>
    </section>
    <!--Common Banner Area-->

    <section class="innerpage_sec">
        <div class="container">
            <div class="row">                
                <div class="col-12 col-lg-12">
                    <div class="inner-content-text">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php the_content(__('(more...)')); ?>
                                    <?php endwhile; else: ?>
                            <?php _e('Sorry, no posts matched your criteria.'); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>