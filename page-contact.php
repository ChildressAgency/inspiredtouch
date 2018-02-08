<?php get_header(); ?>
  <main id="main">
    <div class="container shadow-box">
      <article>
        <h1>Contact Us</h1>
        <div class="row">
          <div class="col-sm-5">
            <div class="contact-info">
              <p id="address" class="contact-item"><?php the_field('address', 'option'); ?>,<br /><?php the_field('city_state_zip', 'option'); ?></p>
              <p id="phone" class="contact-item"><?php the_field('phone', 'option'); ?></p>
              <p id="email" class="contact-item"><?php the_field('email', 'option'); ?></p>
              <p id="print" class="contact-item"><?php the_field('fax', 'option'); ?></p>
              <p id="hours" class="contact-item"><?php the_field('hours', 'option'); ?></p>
            </div>
          </div>
          <div class="col-sm-7">
            <?php 
              $location = get_field('location', 'option');
              if(!empty($location)): ?>
                <div class="google-map">
                  <div class="contact-map">
                    <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
                      <?php if(get_field('location_image', 'option')): ?>
                        <img src="<?php the_field('location_image', 'option'); ?>" class="" alt="" />
                      <?php endif; ?>
                      <div class="info-window-content">
                        <h3>Inspired Signs & Graphics</h3>
                        <p><?php the_field('address', 'option'); ?><br /><?php the_field('city_state_zip', 'option'); ?></p>
                        <p><?php the_field('phone', 'option'); ?><br /><?php the_field('email', 'option'); ?></p>
                        <p><?php the_field('hours', 'option'); ?></p>
                      </div>
                    </div>                    
                  </div>
                </div>
            <?php endif; ?>
            <img src="images/map-placeholder2.jpg" class="img-responsive center-block" alt="" />
          </div>
        </div>
      </article>
    </div>
  </main>
  <?php get_template_part('partials/contact', 'content'); ?>
<?php get_footer(); ?>