<?php
  $products = get_field('products_gallery');
  if($products): ?>
    <section id="products-gallery">
      <div class="container shadow-box">
        <h1><?php echo is_front_page() ? 'Products' : 'Our Recent Work'; ?></h1>
        <div class="row">
          <div class="col-sm-8">
            <div class="tab-content">
              <?php
                $i=0;
                foreach($products as $product): ?>
                  <div role="tabpanel" class="tab-pane fade<?php if($i==0){ echo ' in active'; } ?>" id="<?php echo sanitize_title($product['gallery_name']; ?>">
                    <div class="product-gallery">
                      <?php
                        $gallery_images = $product['gallery_images'];
                        if($gallery_images): ?>
                          <ul id="first" class="light-slider gallery-thumbs">
                            <?php foreach($gallery_images as $image): ?>
                              <li data-thumb="<?php echo $image['sizes']['thumbnail']; ?>">
                                <img src="<?php echo $image['url']; ?>" class="img-responsive center-block" alt="" />
                              </li>
                            <?php endforeach; ?>
                          </ul>
                      <?php endif; ?>
                      <?php if(is_front_page()): ?>
                        <div class="gallery-caption">
                          <h2><?php echo $product['gallery_name']; ?></h2>
                          <?php 
                            if($product['gallery_caption']){
                              echo $product['gallery_caption'];
                            }
                          ?>
                        </div>
                      <?php endif; ?>
                    </div><!-- .product-gallery -->
                  </div><!-- .tab-pane -->
              <?php $i++; endforeach; reset($products); ?>
            </div><!-- .tab-content -->
          </div><!-- .col-sm-8 -->
          <div class="col-sm-4">
            <div class="gallery-nav">
              <ul class="list-unstyled" role="tablist">
                <?php $c=0; foreach($products as $product): ?>
                  <li role="presentation"<?php if($c==0){ echo ' class="active"'; } ?>>
                    <a href="#<?php echo sanitize_title($product['gallery_name']; ?>" aria-controls="<?php echo sanitize_title($product['gallery_name']; ?>" role="tab" data-toggle="tab"><?php echo $product['gallery_name']; ?></a>
                  </li>
                <?php $c++; endforeach; ?>
              </ul>
              <?php if(is_front_page()): ?>
                <a href="<?php echo home_url('products'); ?>" class="btn-main">All Products</a>
                <a href="<?php echo home_url('sign-services'); ?>" class="btn-main">Our Services</a>
                <a href="<?php echo home_url('contact'); ?>" class="btn-main">Request A Quote</a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php endif; ?>
