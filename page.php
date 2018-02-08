<?php get_header(); ?>
  <main id="main">
    <div class="container shadow-box">
      <?php if(have_posts()): ?>
        <article>
          <?php while(have_posts()): the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
          <?php endwhile; ?>
        </article>
      <?php endif; ?>
    </div>
  </main>
<?php get_footer(); ?>