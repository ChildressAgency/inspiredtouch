<?php get_header(); ?>
  <main id="main">
    <div class="container shadow-box">
      <article>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </article>
    </div>
    <?php 
      $sign_services = get_field('sign_services');
      if($sign_services):
        $count_sign_services = count($sign_services);
        $halfway_point = floor($count_sign_services / 2);
        $i=0; ?>
        <div class="container sign-types">
          <div class="row">
            <div class="col-sm-6">
              <?php foreach($sign_services as $service): ?>
                <?php if($i == $halfway_point){ echo '</div><div class="col-sm-6">'; } ?>
                <div class="sign-type">
                  <div class="title-img">
                    <img src="<?php echo $service['sign_service_image']; ?>" class="img-responsive center-block" alt="" />
                    <h3><?php echo $service['sign_service_title']; ?></h3>
                  </div>
                  <?php if($service['sign_service_description']): ?>
                    <div class="sign-description">
                      <?php echo $service['sign_service_description']; ?>
                    </div>
                  <?php endif; ?>
                </div>
              <?php $i++; endforeach; ?>
            </div>
          </div>
        </div>
    <?php endif; ?>
    <div class="container shadow-box">
      <article>
        <?php the_field('second_content_section'); ?>
      </article>
    </div>
  </main>
<?php get_template_part('partials/content', 'contact'); ?>
<?php get_footer(); ?>