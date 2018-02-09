<?php get_header(); ?>
  <main id="main">
    <div class="container shadow-box" style="max-width:unset;">
      <h1>Products</h1>
      <?php
        $products = get_field('products'); 
        if($products): ?>
      <div class="row">
        <div class="col-sm-8 col-md-9">
          <div id="interactive-map">
            <img src="<?php the_field('interactive_image'); ?>" class="img-responsive center-block" alt="Interactive Map" />
            <?php foreach($products as $product): ?>
              <a href=".<?php echo sanitize_title($product['product_name']); ?>" title="<?php echo $product['product_name']; ?>" data-toggle="tab" style="position: absolute; <?php $product['position_on_interactive_image']; ?>" aria-controls="<?php echo sanitize_title($product['product_name']); ?>" role="tab"></a>
            <?php endforeach; reset($products); ?>
          </div>

          <div class="tab-content interactive-signs-info">
            <?php $i=0; foreach($products as $product): ?>
              <div id="" class="tab-pane fade<?php if($i==0){ echo ' in active'; } ?> sign-info <?php echo sanitize_title($product['product_name']); ?>">
                <h3><?php echo $product['product_name']; ?></h3>
                <?php echo $product['product_description']; ?>
              </div>
            <?php $i++; endforeach; reset($products); ?>
          </div>
          <p class="view-examples">View Examples Below</p>
        </div>

        <div class="col-sm-4 col-md-3">
          <div id="map-nav">
            <ul class="list-unstyled" role="tablist">
              <?php foreach($products as $product): ?>
                <li role="presentation">
                  <a href=".<?php echo sanitize_title($product['product_name']); ?>" data-toggle="tab" role="tab"><?php echo $product['product_name']; ?></a>
                </li>
              <?php endforeach; reset($products); ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="tab-content interactive-map-examples">
        <h1>Client Products</h1>
        <?php $c=0; foreach($products as $product): ?>
          <div id="" class="tab-pane fade<?php if($c==0){ echo ' in active'; } ?> <?php echo sanitize_title($product['product_name']); ?>">
            <?php
              $product_examples = $product['product_examples']; 
              if($product_examples): ?>
                <div class="row">
                  <?php $r=0; foreach($product_examples as $example):
                    if($r%3==0){ echo '<div class="clearfix"></div>'; } ?>
                      <div class="col-sm-4">
                        <div class="sign-example">
                          <img src="<?php echo $example['product_example_image']; ?>" class="img-responsive center-block" alt="" />
                          <h4><?php echo $example['product_example_title']; ?></h4>
                        </div>
                      </div>
                  <?php $r++; endforeach; ?>
                </div>
            <?php endif; ?>
          </div>
        <?php $c++; endforeach; ?>
      </div>
    </div>
  </main>
<?php get_template_part('partials/contact', 'content'); ?>
<?php get_footer(); ?>