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