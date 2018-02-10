<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="">

  <meta http-equiv="cache-control" content="public">
  <meta http-equiv="cache-control" content="private">

  <title>Inspired Touch Signs</title>

  <?php wp_head(); ?>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <div class="masthead">
    <div class="container-fluid">
      <a href="<?php echo home_url('contact'); ?>" class="get-a-quote">Get A Quote</a>
      <div class="contact-info hidden-xs">
        <div class="location">
          <p><?php the_field('address', 'option'); ?><br /><?php the_field('city_state_zip', 'option'); ?></p>
        </div>
        <div class="phone">
          <a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
        </div>
      </div>
      <?php get_template_part('partials/content', 'social'); ?>
    </div>
  </div>
  <nav id="header-nav" class="navbar">
    <div class="container">
      <div class="navbar-header">
        <a href="<?php echo home_url(); ?>" class="header-logo">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" id="logo-lg" class="img-responsive" alt="Inspired Touch Signs Logo" />
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-icon.png" id="logo-icon" alt="Inspired Touch Signs Logo Icon" />
        </a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="expanded" aria-controls="navbar">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <?php
        $header_nav_args = array(
          'theme_location' => 'header-nav',
          'menu' => '',
          'container' => 'div',
          'container_class' => 'navbar-collapse collapse',
          'container_id' => 'navbar',
          'menu_class' => 'nav navbar-nav navbar-right',
          'menu_id' => '',
          'echo' => true,
          'fallback_cb' => 'inspiredtouch_header_fallback_menu',
          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth' => 2,
          'walker' => new wp_bootstrap_navwalker()
        );
        wp_nav_menu($header_nav_args); ?>
    </div>
  </nav>
  <?php if(is_front_page()): ?>
    <div id="hero" class="hp-hero">
      <a href="#products-gallery" id="scroll">Scroll<i class="fa fa-angle-down"></i></a>

      <div id="hero-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <?php if(have_rows('hero_slider')): $i=0; while(have_rows('hero_slider')): the_row(); ?>
            <div class="item<?php if($i==0){ echo ' active'; } ?>" style="background-image:url(<?php the_sub_field('hero_slider_image'); ?>); <?php the_sub_field('hero_slider_image_css'); ?>"></div>
          <?php $i++; endwhile; endif; ?>
        </div>
        <span id="hex-overlay"></span>
        <?php if($i > 1): ?>
          <div class="slider-nav">
            <a href="#hero-carousel" class="slider-arrow left-slider-nav fa-stack fa-lg" role="button" data-slide="prev">
                <i class="fa fa-stop fa-stack-2x fa-inverse"></i>
                <i class="fa fa-chevron-left fa-stack-1x"></i>
            </a>
            <a href="#hero-carousel" class="slider-arrow right-slider-nav fa-stack fa-lg" role="button" data-slide="next">
                <i class="fa fa-stop fa-stack-2x fa-inverse"></i>
                <i class="fa fa-chevron-right fa-stack-1x"></i>
            </a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  <?php else: ?>
    <?php
      $hero_image = get_field('default_hero_image','option');
      $hero_image_css = '';
      if(get_field('hero_image')){
        $hero_image = get_field('hero_image');
        if(get_field('hero_image_css')){
          $hero_image_css = get_field('hero_image_css');
        }
      }
      else{
        if(get_field('default_hero_image_css', 'option')){
          $hero_image_css = get_field('default_hero_image_css', 'option');
        }
      }
    ?>
    <div id="hero" style="background-image:url(<?php echo $hero_image; ?>); <?php echo $hero_image_css; ?>"></div>
  <?php endif; ?>