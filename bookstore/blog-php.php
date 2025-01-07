<?php
/* Template Name: Blog Page */
?>

<?php get_header(); ?>
 
<style>
/*Blog page*/
.featured_area {
    margin-top: 4rem;
}
.featured_left img {
    width: 100%;
    margin-top: 1.8rem;
}
.featured_left h2 br {
    display: none;
}
.recent_post1 h2 br {
    display: none;
}
.recent_post2 h2 br {
    display: none;
}
.post-categories li a {
    color: #27AE61;
    text-transform: uppercase;
}
.featured_left h2 {
    font-size: 2.5rem;
    color: #429937;
    font-weight: 500;
    margin: 2.2rem 0rem;
}
.featured_right img {
    width: 100%;
    margin-top: 1.8rem;
}
.featured_area h3 {
    color: #262525;
    font-size: 4rem;
    font-weight: 500;
    padding-bottom: 2.4rem;
}
.featured_right {
    padding-left: 3rem;
}
.recent_post_box {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
}
.recent_post_box img {
    max-width: 15rem;
    max-height: 10rem;
    margin-right: 2rem;
}
.post_content h5 {
    margin-bottom: 1rem;
}
.post_content a {
    color: #27AE61;
}
.featured_left .read_more_btn a {
    color: #27AE61;
}
.featured_left span {
    color: #262525;
    font-size: 1.8rem;
}
.leftbox {
    margin-top: 4rem;
}
.featured_right span {
    color: #262525;
    font-size: 1.8rem;
}
.recent_post1 h2 {
    color: #429937;
    font-size: 2rem;
    padding-top: 2.2rem;
    font-weight: 500;
}
.recent_post2 h2 {
    color: #429937;
    font-size: 2rem;
    padding-top: 2.2rem;
    font-weight: 500;
}
.recent_post2 {
    margin-top: 1rem;
}
.featured_left p {
    color: #262525;
    font-size: 1.6rem;
    padding-top: 1rem;
}
.read_more_btn a {
    color: #262525;
    font-size: 1.8rem;
    font-weight: bold;
}
.read_more_btn{
    margin-top: 1rem;
}
/*Blog Gallery*/
.gallery img{
    width: 100%;    
}
.blog_box {
  display: none;
  margin-bottom: 3.8rem;
}

#loadMore {
  display: inline-block;
  border: 1px solid transparent;
  transition: .3s;
}

.noContent {
  color: #000 !important;
  background-color: transparent !important;
  pointer-events: none;
}
.blog_box {
    margin-bottom: 2rem;
}
.blog_content h2 {
    color: #429937;
    font-size: 2.5rem;
    font-weight: 500;
    padding: 2rem 0rem;
}
.blog_content p {
    font-size: 1.6rem;
    padding-bottom: 2rem;
}
.blog_read_btn a {
    color: #262525;
    font-size: 1.6rem;
    font-weight: bold;
}
.blog_gallery {
    margin-top: 4rem;
    background: #F8F8F8;
    padding: 3.5rem 0rem;
}
#loadMore span {
    color: #429937;
    font-size: 2.5rem;
}
/*Blog Gallery*/
</style>
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
<!--Featured post Area-->
<section class="featured_area">
  <div class="container">
    <div class="row">
      <?php
            $fx_get_posts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'order'=>'DESC', 'posts_per_page'=>1));
            if ( $fx_get_posts -> have_posts() ) : ?>
            <?php while ( $fx_get_posts -> have_posts() ) : $fx_get_posts -> the_post(); ?>
      <div class="col-lg-8">
        <div class="featured_left">
          <!-- <span>Featured Article</span> -->
          <span><?php the_category(); ?></span>
          <!-- <img src="images/featured.png" alt=""/> -->
          <a class="blogpgimg" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          <!-- <h2>Get The Most Out Of<br> Your Fruits And<br> Vegetables</h2> -->
          <h2><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 4); ?></a></h2>
          <!-- <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem.</p> -->
          <p><?php echo wp_trim_words( get_the_excerpt(), ); ?></p>
          <div class="read_more_btn">
            <a href="<?php the_permalink(); ?>">Read More</a>
          </div>
        </div>
      </div>
            <?php endwhile; ?>
               <?php wp_reset_postdata();
                  else : ?>
            <p><?php _e( 'There are no posts to display at the moment' ); ?></p>
         <?php endif; ?>

      <div class="col-lg-4">
                 <?php
            $fx_get_posts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'order'=>'DESC', 'posts_per_page'=>4));
            if ( $fx_get_posts -> have_posts() ) : ?>
            <?php while ( $fx_get_posts -> have_posts() ) : $fx_get_posts -> the_post(); ?>
        <div class="recent_post_box">
                              <div class="post_img">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                </div>
                <div class="post_content">
                  <h5 class="text-truncate"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 4); ?></a></h5>
                  <p class="post_blog_description"><?php echo wp_trim_words( get_the_excerpt(), 10); ?></p>
                </div>
                          </div>
                          <?php endwhile; ?>
               <?php wp_reset_postdata();
                  else : ?>
            <p><?php _e( 'There are no posts to display at the moment' ); ?></p>
         <?php endif; ?>
      </div>

    </div>
  </div>
</section>
<!--Featured post Area-->


<!--Blog Gallery-->
<section class="blog_gallery">
    <div class="container">
      <div class="gallery">
        <div class="row">
          <?php
            $fx_get_posts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'order'=>'DESC', 'posts_per_page'=>10));
            if ( $fx_get_posts -> have_posts() ) : ?>
            <?php while ( $fx_get_posts -> have_posts() ) : $fx_get_posts -> the_post(); ?>
          <div class="col-md-4">
            <div class="blog_box">
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

      <div class="text-center leftbox">
        <a href="#" id="loadMore"><img src="<?php bloginfo('template_directory'); ?>/images/down.png" alt=""/><br></a>
      </div>
    </div>
  </section>
<!--Blog Gallery-->


<?php get_footer(); ?>