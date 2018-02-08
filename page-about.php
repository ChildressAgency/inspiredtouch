<?php get_header(); ?>
  <main id="main">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <div class="container shadow-box">
        <article>
          <h1><?php the_field('page_title'); ?></h1>
          <?php the_content(); ?>
        </article>
      </div>
    <?php endwhile; endif; ?>
  </main>
  <?php if(get_field('our_mission_section')): ?>
    <section id="our-mission">
      <div class="container">
        <?php the_field('our_mission_section'); ?>
      </div>
    </section>
  <?php endif; ?>
  <?php if(get_field('our_process_section')): ?>
    <section id="our-process">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-7 col-sm-offset-5">
            <article>
              <?php the_field('our_process_section'); ?>
            </article>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>
<?php get_footer(); ?>