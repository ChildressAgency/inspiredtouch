<?php get_header(); ?>
  <main id="main">
    <?php get_template_part('partials/products-gallery', 'content'); ?>
  </main>
  <?php echo do_shortcode('[contact form]'); ?>
  <section id="work-feedback">
    <div class="container">
      <h1>Recent Work & Client Feedback</h1>
      <div class="row">
        <div class="col-sm-7">
          <div class="row">
            <div class="col-xs-6">
              <div id="recent-work1" class="carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                  <?php 
                    $recent_work1 = get_field('recent_work1'); $rw1 = 0;
                    foreach($recent_work1 as $recent_work1_img): ?>
                      <div class="item<?php if($rw1 == 0){ echo ' active'; } ?>">
                        <img src="<?php echo $recent_work1_img['url']; ?>" class="img-responsive center-block" alt="" />
                      </div>
                  <?php $rw1++; endforeach; ?>
                </div>
              </div>
            </div>
            <div class="col-xs-6">
              <div id="recent-work2" class="carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                  <?php
                    $recent_work2 = get_field('recent_work2'); $rw2 = 0;
                    foreach($recent_work2 as $recent_work2_img): ?>
                      <div class="item<?php if($rw2 == 0){ echo ' active'; ?>">
                        <img src="<?php echo $recent_work2_img['url']; ?>" class="img-responsive center-block" alt="" />
                      </div>
                  <?php $rw2++; endforeach; ?>
                </div>
              </div>
            </div>
          </div>
          <div id="recent-work-large" class="carousel slide carousel-fade">
            <div class="carousel-inner" role="listbox">
              <?php
                $recent_work_lg = get_field('recent_work_large'); $rwl = 0;
                foreach($recent_work_lg as $recent_work_lg_img): ?>
                  <div class="item<?php if($rwl == 0){ echo ' active'; ?>">
                    <img src="<?php echo $recent_work_lg_img['url']; ?>" class="img-responsive center-block" alt="" />
                  </div>
              <?php $rwl++; endforeach; ?>
            </div>
          </div>
        </div>
        <div class="col-sm-5">
          <?php
            $testimonials = get_field('testimonials');
            array_chunk($testimonials, 3, true);
            for($i = 0; $i < 3; $i++): ?>
              <div id="testimonial-box<?php echo $i; ?>" class="testimonial-slider carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                  <?php $c = 0; foreach($testimonials[$i] as $testimonial): ?>
                    <div class="item<?php if($c == 0){ echo ' active'; } ?>">
                      <?php echo $testimonial['testimonial']; ?>
                      <div class="testimonial-footer">
                        <p class="testimonial-author"><?php echo $testimonial['testimonial_author']; ?></p>
                        <p class="testimonial-author-company"><?php echo $testimonial['testimonial_author_company']; ?></p>
                      </div>
                    </div>
                  <?php $c++; endforeach; ?>
              </div>
            </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  </section>
  <section id="stay-connected">
    <div class="container">
      <h1>Stay connected & Follow us</h1>
      <?php get_template_part('partials/content', 'social'); ?>
      <div class="row">
        <div class="col-sm-6">
          <div class="social-feed">
            <?php echo do_shortcode('[instagram_feed]'); ?>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="social-feed">
            <?php echo do_shortcode('[facebook_feed]'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="blog">
    <div class="container shadow-box narrow">
      <div class="our-blog">
        <h1>Our Blog</h1>
        <div class="row">
          <div class="col-sm-6 col-sm-push-6">
            <div class="featured-post">
              <?php
                $blog_page = get_page_by_path('blog');
                $blog_page_id = $blog_page->ID;
                $featured_post_id = get_field('featured_post', $blog_page_id);
                if($featured_post_id){
                  $featured_post_args = array(
                    'p' => $featured_post_id
                  );
                }
                else{
                  $featured_post_args = array(
                    'posts_per_page' => 1
                  );
                }

                $featured_post = new WP_Query($featured_post_args);
                if($featured_post->have_posts()): while($featured_post->have_posts()): $featured_post->the_post();
                  $featured_post_id = get_the_ID(); 
                  if(has_post_thumbnail()){
                    the_post_thumbnail('full', array('class' => 'img-responsive center-block'));
                  } ?>
                  <p class="post-date"><?php echo get_the_date('m/d/Y'); ?></p>
                  <?php the_excerpt(); ?>
                  <?php
                    if(get_the_tag_list()){
                      echo get_the_tag_list('<ul class="list-unstyled list-inline post-tags"><li>', '</li><li>', '</li></ul>');
                    }
                  ?>
                  <a href="<?php the_permalink(); ?>" class="read-more">Learn More ></a>
            </div>
          </div>
          <div class="col-sm-6 col-sm-pull-6">
            <div class="recent-posts">
              <?php
                $recent_posts = new WP_Query(array('posts_per_page' => 7, 'post__not_in' => array($featured_post_id)));
                if($recent_posts->have_posts()): while($recent_posts->have_posts()): $recent_posts->the_post(); ?>
                  <a href="<?php the_permalink(); ?>" class="recent-post">
                    <h3><?php the_title(); ?></h3>
                    <p class="post-date"><?php echo get_the_date('F j, Y'); ?></p>
                  </a>
              <?php endwhile; endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>