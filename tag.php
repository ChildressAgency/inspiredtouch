<?php get_header(); ?>
  <main id="main">
    <div class="container shadow-box">
      <h1>Media Feed</h1>
      <div class="row">
        <?php 
          $current_tag = get_query_var('tag');

          $newest_post = new WP_Query(array(
            'post_per_page' => 1,
            'post_type' => 'post',
            'tag' => $current_tag
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
          $same_tag_posts = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'post',
            'tag' => $current_tag
          ));

          if($same_tag_posts->have_post()): ?>
            <div class="recent-posts">
              <?php while($same_tag_posts->have_posts()): $same_tag_posts->the_post(); ?>
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
          <?php get_template_part('partials/content', 'archive-sidebar'); ?>
        </div>
      </div><?php //row ?>
    </div>
  </main>
  <?php get_template_part('partials/content', 'stay-connected'); ?>
<?php get_footer(); ?>