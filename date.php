<?php get_header(); ?>
  <main id="main">
    <div class="container shadow-box">
      <h1>Media Feed</h1>
      <div class="row">
        <?php 
          $post_year = get_the_date('Y');
          $post_month = get_the_date('m');

          $newest_post = new WP_Query(array(
            'posts_per_page' => 1,
            'post_type' => 'post',
            'date_query' => array(
              array(
                'year' => $post_year,
                'month' => $post_month
              )
            )
          ));
          if($newest_post->have_posts()): while($newest_post->have_posts()): $newest_post->the_post(); ?>
            <div class="col-sm-12 col-md-5 col-md-push-4">
              <div class="post">
                <article>
                  <h2 class="post-title"><?php the_title(); ?></h2>
                  <p class="post-date"><?php echo get_the_date('m/d/Y'); ?></p>
                  <?php the_content(); ?>
                </article>
                <ul class="pager">
                  <li><?php previous_post_link('%link', '<i class="fa fa-angle-left"></i>', true); ?></li>
                  <li><?php next_post_link('%link', '<i class="fa fa-angle-right"></i>', true); ?></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-md-pull-5">
            <div id="left-sidebar">
              <?php 
                if(has_post_thumbnail()){
                  the_post_thumbnail('full', array('class' => 'img-responsive center-block'));
                } ?>
        <?php endwhile; endif; wp_reset_postdata(); ?>

        <?php 
          $same_month_posts = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'post',
            'date_query' => array(
              array(
                'year' => $post_year,
                'month' => $post_month
              )
            )
          ));

          if($same_month_posts->have_posts()): ?>
            <div class="recent-posts">
              <?php while($same_month_posts->have_posts()): $same_month_posts->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="recent-post">
                  <h3><?php the_title(); ?></h3>
                  <p class="post-date"><?php echo get_the_date('F j, Y'); ?></p>
                </a>
              <?php endwhile; ?>
            </div> 
        <?php endif; wp_reset_postdata(); ?>         
          </div><?php //left-sidebar ?>
        </div>
        <div class="col-sm-6 col-md-3">
          <?php get_template_part('partials/archive-sidebar', 'content'); ?>
        </div>
      </div><?php //row ?>
    </div>
  </main>
  <?php get_template_part('partials/stay-connected', 'content'); ?>
<?php get_footer(); ?>