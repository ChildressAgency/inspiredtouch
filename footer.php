  <footer>
    <?php if(!is_page('contact')): ?>
      <div id="footer-top">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <?php 
                $location = get_field('location', 'option');
                if(!empty($location)): ?>
                  <div class="google-map">
                    <div class="footer-map">
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
            </div>
            <div class="col-sm-6">
              <div class="contact-info">
                <h1>Contact</h1>
                <p id="address" class="contact-item"><?php the_field('address', 'option'); ?>,<br /><?php the_field('city_state_zip', 'option'); ?></p>
                <p id="phone" class="contact-item"><?php the_field('phone', 'option'); ?></p>
                <p id="email" class="contact-item"><?php the_field('email', 'option'); ?></p>
                <p id="hours" class="contact-item"><?php the_field('hours', 'option'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <div id="footer-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-3">
            <a href="<?php echo home_url(); ?>" class="footer-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-small.png" class="img-responsive" alt="Inspired Signs & Graphics Logo" /></a>
          </div>
          <div class="col-sm-6">
            <?php 
              $footer_nav_args = array(
                'theme_location' => 'footer-nav',
                'menu' => '',
                'container' => 'nav',
                'container_class' => '',
                'container_id' => 'footer-nav',
                'menu_class' => 'nav navbar-nav',
                'menu_id' => '',
                'echo' => true,
                'fallback_cb' => 'inspiredtouch_footer_fallback_menu',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new wp_bootstrap_navwalker()
              );
              wp_nav_menu($footer_nav_args); ?>
          </div>
          <div class="col-sm-3">
            <?php get_template_part('partials/social', 'content'); ?>
          </div>
        </div>
        <div class="copyright">
          <p>&copy;<?php echo date('Y'); ?> Inspired Signs & Graphics</p>
          <p>website created by <a href="https://childressagency.com" target="_blank">The Childress Agency</a></p>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>