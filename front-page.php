<?php get_header(); ?>
  <main id="main">
    <?php get_template_part('partials/products-gallery', 'content'); ?>
  </main>
  <?php get_template_part('partials/contact', 'content'); ?>
  <section id="contact">
    <div class="container">
      <h1>Request A Quote</h1>
      <div class="quote-form">
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="fname" class="sr-only">First Name</label>
              <input type="text" id="fname" name="fname" class="form-control input-sm" placeholder="FIRST NAME" />
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="lname" class="sr-only">Last Name</label>
              <input type="text" id="lname" class="form-control input-sm" placeholder="LAST NAME" />
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="email" class="sr-only">Email</label>
          <input type="email" id="your-email" name="your-email" class="form-control input-sm" placeholder="EMAIL" />
        </div>
        <div class="form-group">
          <label for="phone" class="sr-only">Phone</label>
          <input type="text" id="phone" name="phone" class="form-control input-sm" placeholder="PHONE" />
        </div>
        <div class="form-group">
          <label for="type-of-print" class="sr-only">Type of Print</label>
          <input type="text" id="type-of-print" name="type-of-print" class="form-control input-sm" placeholder="TYPE OF PRINT" />
        </div>

        <div class="form-group">
          <span class="wpcf7-form-control-wrap wrap-type">
            <span class="wpcf7-form-control wpcf7-checkbox">
              <span class="wpcf7-list-item first last">
                <label>
                  <input type="checkbox" name="wrap-type" value="Half" />
                  <span class="wpcf7-list-item-label">HALF</span>
                </label>
              </span>
            </span>
          </span>
          <span class="wpcf7-form-control-wrap wrap-type">
            <span class="wpcf7-form-control wpcf7-checkbox">
              <span class="wpcf7-list-item first last">
                <label>
                  <input type="checkbox" name="wrap-type" value="Full" />
                  <span class="wpcf7-list-item-label">FULL</span>
                </label>
              </span>
            </span>
          </span>
          <span class="wpcf7-form-control-wrap wrap-type">
            <span class="wpcf7-form-control wpcf7-checkbox">
              <span class="wpcf7-list-item first last">
                <label>
                  <input type="checkbox" name="wrap-type" value="Partial" />
                  <span class="wpcf7-list-item-label">PARTIAL</span>
                </label>
              </span>
            </span>
          </span>
          <span class="wpcf7-form-control-wrap wrap-type">
            <span class="wpcf7-form-control wpcf7-checkbox">
              <span class="wpcf7-list-item first last">
                <label>
                  <input type="checkbox" name="wrap-type" value="Letter" />
                  <span class="wpcf7-list-item-label">LETTER</span>
                </label>
              </span>
            </span>
          </span>          
        </div>
        
        <div class="form-group">
          <h4>BUDGET:</h4>
          <span class="wpcf7-form-control-wrap wrap-type">
            <span class="wpcf7-form-control wpcf7-radio">
              <span class="wpcf7-list-item first last">
                <label>
                  <input type="radio" name="budget" value="0-500" />
                  <span class="wpcf7-list-item-label">0-500</span>
                </label>
              </span>
            </span>
          </span>
          <span class="wpcf7-form-control-wrap wrap-type">
            <span class="wpcf7-form-control wpcf7-radio">
              <span class="wpcf7-list-item first last">
                <label>
                  <input type="radio" name="budget" value="500-1000" />
                  <span class="wpcf7-list-item-label">500-1000</span>
                </label>
              </span>
            </span>
          </span>
          <span class="wpcf7-form-control-wrap wrap-type">
            <span class="wpcf7-form-control wpcf7-radio">
              <span class="wpcf7-list-item first last">
                <label>
                  <input type="radio" name="budget" value="1000-1500" />
                  <span class="wpcf7-list-item-label">1000-1500</span>
                </label>
              </span>
            </span>
          </span>
          <span class="wpcf7-form-control-wrap wrap-type">
            <span class="wpcf7-form-control wpcf7-radio">
              <span class="wpcf7-list-item first last">
                <label>
                  <input type="radio" name="budget" value="1500-2000" />
                  <span class="wpcf7-list-item-label">1500-2000</span>
                </label>
              </span>
            </span>
          </span>
          <span class="wpcf7-form-control-wrap wrap-type">
            <span class="wpcf7-form-control wpcf7-radio">
              <span class="wpcf7-list-item first last">
                <label>
                  <input type="radio" name="budget" value="2000-2500" />
                  <span class="wpcf7-list-item-label">2000-2500</span>
                </label>
              </span>
            </span>
          </span>
          <span class="wpcf7-form-control-wrap wrap-type">
            <span class="wpcf7-form-control wpcf7-radio">
              <span class="wpcf7-list-item first last">
                <label>
                  <input type="radio" name="budget" value="2500+" />
                  <span class="wpcf7-list-item-label">2500+</span>
                </label>
              </span>
            </span>
          </span>
        </div>
        <div class="form-group">
          <label for="message" class="sr-only">Message</label>
          <textarea id="message" rows="6" name="message" class="form-control input-sm" placeholder="MESSAGE"></textarea>
        </div>
        <div class="form-group text-right">
          <input type="submit" class="btn-main" value="SEND" />
        </div>
      </div>
    </div>
  </section>
  <section id="work-feedback">
    <div class="container">
      <h1>Recent Work & Client Feedback</h1>
      <div class="row">
        <div class="col-sm-7">
          <div class="row">
            <div class="col-xs-6">
              <div id="recent-work1" class="carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="images/backdrop-medium.jpg" class="img-responsive center-block" alt="" />
                  </div>
                  <div class="item">
                    <img src="images/honda-banners-medium.jpg" class="img-responsive center-block" alt="" />
                  </div>
                  <div class="item">
                    <img src="images/backdrop-medium.jpg" class="img-responsive center-block" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-6">
              <div id="recent-work2" class="carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="images/honda-banners-medium.jpg" class="img-responsive center-block" alt="" />
                  </div>
                  <div class="item">
                    <img src="images/backdrop-medium.jpg" class="img-responsive center-block" alt="" />
                  </div>
                  <div class="item">
                    <img src="images/honda-banners-medium.jpg" class="img-responsive center-block" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="recent-work-large" class="carousel slide carousel-fade">
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="images/medical-sign.jpg" class="img-responsive center-block" alt="" />
              </div>
              <div class="item">
                <img src="http://placehold.it/435x325" class="img-responsive center-block" alt="" />
              </div>
              <div class="item">
                <img src="images/medical-sign.jpg" class="img-responsive center-block" alt="" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-5">
          <div id="testimonial-box1" class="testimonial-slider carousel slide carousel-fade">
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <p>You will not find a cheaper solution for your graphic needs. Inspired Touch walked me through every step of the process. I was very pleased with my signInspired Touch walked me through every step of the process. I was very pleased with my sign</p>
                <div class="testimonial-footer">
                  <p class="testimonial-author">Josh Lamont</p>
                  <p class="testimonial-author-company">True Destiny Media</p>
                </div>
              </div>
              <div class="item">
                <p>Inspired Touch walked me through every step of the process. I was very pleased with my sign.</p>
                <div class="testimonial-footer">
                  <p class="testimonial-author">Craig Johnson</p>
                  <p class="testimonial-author-company">C4 Power Washing</p>
                </div>
              </div>
              <div class="item">
                <p>The got it right the first time!</p>
                <div class="testimonial-footer">
                  <p class="testimonial-author">Kaylah Rodriguez</p>
                  <p class="testimonial-author-company">Yogarobics</p>
                </div>
              </div>
            </div>
          </div>
          <div id="testimonial-box2" class="testimonial-slider carousel slide carousel-fade">
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <p>The got it right the first time!</p>
                <div class="testimonial-footer">
                  <p class="testimonial-author">Kaylah Rodriguez</p>
                  <p class="testimonial-author-company">Yogarobics</p>
                </div>
              </div>
              <div class="item">
                <p>You will not find a cheaper solution for your graphic needs.</p>
                <div class="testimonial-footer">
                  <p class="testimonial-author">Josh Lamont</p>
                  <p class="testimonial-author-company">True Destiny Media</p>
                </div>
              </div>
              <div class="item">
                <p>Inspired Touch walked me through every step of the process. I was very pleased with my sign.</p>
                <div class="testimonial-footer">
                  <p class="testimonial-author">Craig Johnson</p>
                  <p class="testimonial-author-company">C4 Power Washing</p>
                </div>
              </div>
            </div>
          </div>
          <div id="testimonial-box2" class="testimonial-slider carousel slide carousel-fade">
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <p>Inspired Touch walked me through every step of the process. I was very pleased with my sign.</p>
                <div class="testimonial-footer">
                  <p class="testimonial-author">Craig Johnson</p>
                  <p class="testimonial-author-company">C4 Power Washing</p>
                </div>
              </div>
              <div class="item">
                <p>You will not find a cheaper solution for your graphic needs.</p>
                <div class="testimonial-footer">
                  <p class="testimonial-author">Josh Lamont</p>
                  <p class="testimonial-author-company">True Destiny Media</p>
                </div>
              </div>
              <div class="item">
                <p>The got it right the first time!</p>
                <div class="testimonial-footer">
                  <p class="testimonial-author">Kaylah Rodriguez</p>
                  <p class="testimonial-author-company">Yogarobics</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="stay-connected">
    <div class="container">
      <h1>Stay connected & Follow us</h1>
      <div class="social">
        <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
        <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
        <a href="#" target="_blank"><i class="fa fa-snapchat-ghost"></i></a>
        <a href="#" target="_blank"><i class="fa fa-facebook-official"></i></a>
        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="social-feed">
            <img src="images/instagram-feed-placeholder.jpg" class="img-responsive center-block" alt="" />
          </div>
        </div>
        <div class="col-sm-6">
          <div class="social-feed">
            <img src="images/facebook-feed-placeholder.jpg" class="img-responsive center-block" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="blog">
    <div class="container shadow-box narrow">
      <div class="our-blog">
        <h1>Our Blog</h1>
        <div class="row">
          <div class="col-sm-6 col-sm-push-6">
            <div class="featured-post">
              <img src="images/olde-shoppe-sign-medium.jpg" class="img-responsive center-block" alt="" />
              <h3>Truck'n America</h3>
              <p class="post-date">06/28/17</p>
              <p>Thinking about purchasing a trailer or vehicle that you want to add some flair to? We went & measured a few trailers for a customer requesting a wrap and</p>
              <ul class="list-unstyled list-inline post-tags">
                <li><a href="#">#InspiredTouchSigns</a></li>
                <li><a href="#">#GiveMeASign</a></li>
                <li><a href="#">#GoingTheExtraMile</a></li>
                <li><a href="#">#WrapsAndGraphics</a></li>
              </ul>
              <a href="#" class="read-more">Learn More ></a>
            </div>
          </div>
          <div class="col-sm-6 col-sm-pull-6">
            <div class="recent-posts">
              <a href="#" class="recent-post">
                <h3>Banners Banners Banners</h3>
                <p class="post-date">June 29, 2017</p>
              </a>
              <a href="#" class="recent-post">
                <h3>Big Chris and Little Chris</h3>
                <p class="post-date">June 29, 2017</p>
              </a>
              <a href="#" class="recent-post">
                <h3>Lovey's Candle Company</h3>
                <p class="post-date">June 29, 2017</p>
              </a>
              <a href="#" class="recent-post">
                <h3>Flowers by Val</h3>
                <p class="post-date">June 28, 2017</p>
              </a>
              <a href="#" class="recent-post">
                <h3>Corplast Yard Sign</h3>
                <p class="post-date">June 28, 2017</p>
              </a>
              <a href="#" class="recent-post">
                <h3>Stafford Baseball League</h3>
                <p class="post-date">June 28, 2017</p>
              </a>
              <a href="#" class="recent-post">
                <h3>Another Blog Post title</h3>
                <p class="post-date">June 28, 2017</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>