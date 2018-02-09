<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <h1>Our Work</h1>
      <h2 style="color:#f59120; text-align:center;">TESTIMONIALS</h2>
    </div>
    <?php if(have_rows('testimonials')): ?>
      <div id="testimonial-carousel" class="carousel slide" data-ride="">
        <div class="carousel-inner" role="listbox">
          <?php $i=0; while(have_rows('testimonials')): the_row(); ?>
            <div class="item<?php if($i==0){ echo ' active'; } ?>">
              <div class="testimonial-wrapper">
                <div class="testimonial">
                  <?php the_sub_field('testimonial'); ?>
                </div>
                <?php if(get_sub_field('testimonial_image')): ?>
                  <img src="<?php the_sub_field('testimonial_image'); ?>" class="img-responsive center-block" alt="" />
                <?php endif; ?>
                <div class="testimonial-footer">
                  <p class="testimonial-author"><?php the_sub_field('testimonial_author'); ?></p>
                  <p class="testimonial-author-company"><?php the_sub_field('testimonial_author_company'); ?></p>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; ?>
        </div>

        <a href="#testimonial-carousel" class="left carousel-control" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a href="#testimonial-carousel" class="right carousel-control" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only"></span>
        </a>
      </div>
    <?php endif; ?>

    <?php get_template_part('partials/products-gallery','content'); ?>

    <section id="on-the-map">
      <div class="container shadow-box">
        <?php if(get_field('work_locations_intro')): ?>
          <?php the_field('work_locations_intro'); ?>
        <?php endif; ?>

        <?php if(have_rows('work_locations')): ?>
          <div class="google-map">
            <div class="work-locations-map">
              <?php while(have_rows('work_locations')): the_row();
                $location = get_sub_field('location'); ?>
                <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
                  <?php if(get_sub_field('location_image')): ?>
                    <img src="<?php the_sub_field('location_image'); ?>" class="" alt="" />
                  <?php endif; ?>
                  <div class="info-window-content">
                    <h3><?php the_sub_field('location_title'); ?></h3>
                    <p><?php the_sub_field('location_address'); ?><br /><?php the_sub_field('location_city_state_zip'); ?></p>
                    <p><?php the_sub_field('location_type_of_work'); ?></p>
                  </div>
                </div>                
              <?php endwhile; ?>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>