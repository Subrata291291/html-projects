<?php get_header(); ?>

<style>

.custom_calender {
/*   width: 450px; */
  margin-top: 5.5rem;
}
.calender_box {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.12);
	margin-top: 30px;
}
.custom_calender .calender_heead{
  display: flex;
  align-items: center;
  padding: 25px 30px 10px;
  justify-content: space-between;
}
.calender_heead .icons{
  display: flex;
}
.calender_heead .icons span{
  height: 38px;
  width: 38px;
  margin: 0 1px;
  cursor: pointer;
  color: #878787;
  text-align: center;
  line-height: 38px;
  font-size: 1.9rem;
  user-select: none;
  border-radius: 50%;
}
.icons span:last-child{
  margin-right: -10px;
}
.calender_heead .icons span:hover{
  background: #f2f2f2;
}
.calender_heead .current-date{
  font-size: 1.45rem;
  font-weight: 500;
}
.calendar{
  padding: 20px;
}
.calendar ul{
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  text-align: center;
}
.calendar .days{
  margin-bottom: 20px;
}
.calendar li{
  color: #333;
  width: calc(100% / 7);
  font-size: 1.4rem;
}
.calendar .weeks li{
  font-weight: 500;
  cursor: default;
}
.calendar .days li{
  z-index: 1;
  cursor: pointer;
  position: relative;
  margin-top: 30px;
}
.days li.inactive{
  color: #aaa;
}
.days li.active{
  color: #fff;
}
.days li::before{
  position: absolute;
  content: "";
  left: 50%;
  top: 50%;
  height: 40px;
  width: 40px;
  z-index: -1;
  border-radius: 50%;
  transform: translate(-50%, -50%);
}
.days li.active::before{
  background: #229955;
}
.days li:not(.active):hover::before{
  background: #f2f2f2;
}
.single_blog_area_right h3:before {
    height: 0.2rem;
    width: 3em;
    background-image: linear-gradient(to right, #229955, transparent);
    margin: 0 auto;
    position: absolute;
    content: "";
    bottom: -8px;
}
.single_blog_area_right h3 {
    position: relative;
    text-transform: capitalize;
    margin-bottom: 3rem;
	font-size: 1.8rem;
}
	.post_img img {
    width: 150px;
    height: auto;
}
.single_blog_area_left h2 {
    font-size: 2rem;
}
.recent_post_box {
    display: flex;
    align-items: center;
    justify-content: space-around;
	margin-bottom: 3rem;
}
	.post_content h5 a {
    color: #000;
    font-size: 1.6rem;
}
.post_blog_description {
    margin-top: 1rem;
    color: #A3A3A3;
    font-size: 1.5rem;
}
.post_content {
    margin-left:30px;
}
.recent_post_box {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.single_blog_area_left {
    max-width: 95%;
}
.category-name ul li {
    color: #666;
    font-size: 16px;
    margin-bottom: 10px;
    position: relative;
    padding-left: 14px;
}
.category-name ul li a {
    color: #666;
}
.category-name ul li a:hover {
    color: #229955;
}
	
.recent_post {
    margin-top: 5.5rem;
}
.category-name ul li::before {
    content: "\f105";
    position: absolute;
    font-family: 'FontAwesome';
    font-size: 2rem;
    left: 0px;
    top: -3px;
}
	
@media (max-width: 767px) {	
	.single_blog_area_left {
    max-width: 100%;
}
.post_img img {
    width: 300px;
}
.post_content {
    margin-left: 20px;
}
	}
	
</style>
        <!--Common Banner Area-->
<section class="commone_banner text-center">
        <h3>Our Blog</h3>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">/</a></li>
            <li><a href="#" class="active">Blog</a></li>
        </ul>
    </section>
    <!--Common Banner Area-->
	<section class="single_blog_area mb-40 mt-40">
		<div class="container">
			<div class="row">
            	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="col-md-7">
					<div class="single_blog_area_left">
						<?php the_post_thumbnail(); ?>
						<h2 class="pt-25 pb-25"><?php the_title(); ?></h2>
							<?php the_content(__('(more...)')); ?>
							<?php endwhile; else: ?>
                            <?php _e('Sorry, no posts matched your criteria.'); ?>
                            <?php endif; ?> 
					</div>
				</div>

				<div class="col-md-5">
					<div class="single_blog_area_right m-l-r-auto">
                        <div class="blog_category_sidebar">
                            <h3>Blog Categories</h3>
                            <?php

$film_timeline = new WP_Query( array('post_type' => '') );

if ( $film_timeline->have_posts() ) : while ( $film_timeline->have_posts() ) : $film_timeline->the_post();


?>

<h5 class="category-name"><?php the_category(); ?></h5>

<?php wp_reset_postdata(); ?>

<?php endwhile; else: ?>

<?php //Insert Error Message ?>

<?php endif; ?>

<?php wp_reset_query(); ?>
                        </div>
                       
                        <div class="recent_post">
                            <h3>Recent Posts</h3>
							<?php
            $fx_get_posts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'order'=>'DESC', 'posts_per_page'=>-3));
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
						<div class="custom_calender">
							<h3>Calender</h3>
							<div class="calender_box">
								<div class="calender_heead">
							<p class="current-date"></p>
							<div class="icons">
							  <span id="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
</span>
							  <span id="next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
</span>
							</div>
						  </div>
						  <div class="calendar">
							<ul class="weeks">
							  <li>Sun</li>
							  <li>Mon</li>
							  <li>Tue</li>
							  <li>Wed</li>
							  <li>Thu</li>
							  <li>Fri</li>
							  <li>Sat</li>
							</ul>
							<ul class="days"></ul>
						  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
<style>
.single_blog_area_left img {
    width: 100%;
    height: auto;
}
</style>
<?php get_footer(); ?>