<div class="social<?php if(is_front_page()){ echo ' hidden-xs'; } ?>">
  <?php if(get_field('instagram', 'option')): ?>
    <a href="<?php the_field('instagram', 'option'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
  <?php endif; if(get_field('linkedin', 'option')): ?>
    <a href="<?php the_field('linkedin', 'option'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
  <?php endif; if(get_field('snapchat', 'option')): ?>
    <a href="<?php the_field('snapchat', 'option'); ?>" target="_blank"><i class="fa fa-snapchat-ghost"></i></a>
  <?php endif; if(get_field('facebook', 'option')): ?>
    <a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><i class="fa fa-facebook-official"></i></a>
  <?php endif; if(get_field('twitter', 'option')): ?>
    <a href="<?php the_field('twitter', 'option'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
  <?php endif; ?>
</div>