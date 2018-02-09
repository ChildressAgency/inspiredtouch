<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <h1>General Information & FAQ</h1>
      <?php if(have_rows('info_faqs')): while(have_rows('info_faqs')): the_row(); ?>
        <div class="faq shadow-box">
          <?php the_sub_field('info_faq'); ?>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </main>
<?php get_footer(); ?>