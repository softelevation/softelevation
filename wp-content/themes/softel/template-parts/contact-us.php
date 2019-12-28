<?php
/*
* Template Name: Contact Us
*/

get_header();
?>
  <!-- Breadcrumbs -->
  <?php echo do_shortcode('[breadcrumb]'); ?>
      <!-- Contact information-->
      <section class="section section-sm section-first bg-default">
          <div class="container">
              <div class="row row-30 justify-content-center">
                  <div class="col-sm-8 col-md-6 col-lg-4">
                      <article class="box-contacts">
                          <div class="box-contacts-body">
                              <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                              <div class="box-contacts-decor"></div>
                              <p class="box-contacts-link"><a href="tel:#">+1 323-913-4688</a></p>
                              <p class="box-contacts-link"><a href="tel:#">+1 323-888-4554</a></p>
                          </div>
                      </article>
                  </div>
                  <div class="col-sm-8 col-md-6 col-lg-4">
                      <article class="box-contacts">
                          <div class="box-contacts-body">
                              <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                              <div class="box-contacts-decor"></div>
                              <p class="box-contacts-link"><a href="https://livedemo00.template-help.com/wt_prod-18959/contact-us-2.html#">4730 Crystal Springs Dr, Los Angeles, CA 90027</a></p>
                          </div>
                      </article>
                  </div>
                  <div class="col-sm-8 col-md-6 col-lg-4">
                      <article class="box-contacts">
                          <div class="box-contacts-body">
                              <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                              <div class="box-contacts-decor"></div>
                              <p class="box-contacts-link"><a href="mailto:#">mail@demolimk.org</a></p>
                              <p class="box-contacts-link"><a href="mailto:#">info@demolimk.org</a></p>
                          </div>
                      </article>
                  </div>
              </div>
          </div>
      </section>

      <!-- Contact Form and Gmap-->
      <section class="section section-sm section-last bg-default text-md-left">
          <div class="container">
              <div class="row row-50">
                  <div class="col-lg-6 section-map-small">
                      <!--Google Map-->
                      <section class="section" id="contacts">
                          <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
                          <!--Please note that YOUR_API_KEY should replaced with your key.-->
                          <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
                          <ul class="google-map-markers">
                              <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
                          </ul>
                      </section>
                  </div>
                  <div class="col-lg-6">
                      <h4 class="text-spacing-50">Contact Form</h4>
                      <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="https://livedemo00.template-help.com/wt_prod-18959/bat/rd-mailform.php" novalidate="novalidate">
                          <div class="row row-14 gutters-14">
                              <div class="col-sm-6">
                                  <div class="form-wrap">
                                      <input class="form-input form-control-has-validation" id="contact-first-name" type="text" name="name" data-constraints="@Required"><span class="form-validation"></span>
                                      <label class="form-label rd-input-label" for="contact-first-name">First Name</label>
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-wrap">
                                      <input class="form-input form-control-has-validation" id="contact-last-name" type="text" name="name" data-constraints="@Required"><span class="form-validation"></span>
                                      <label class="form-label rd-input-label" for="contact-last-name">Last Name</label>
                                  </div>
                              </div>
                              <div class="col-12">
                                  <div class="form-wrap">
                                      <input class="form-input form-control-has-validation" id="contact-email" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span>
                                      <label class="form-label rd-input-label" for="contact-email">E-mail</label>
                                  </div>
                              </div>
                              <div class="col-12">
                                  <div class="form-wrap">
                                      <label class="form-label rd-input-label" for="contact-message">Message</label>
                                      <textarea class="form-input form-control-has-validation form-control-last-child" id="contact-message" name="message" data-constraints="@Required"></textarea><span class="form-validation"></span>
                                  </div>
                              </div>
                          </div>
                          <button class="button button-primary button-pipaluk" type="submit">Send Message</button>
                      </form>
                  </div>
              </div>
          </div>
      </section>
<?php get_footer();