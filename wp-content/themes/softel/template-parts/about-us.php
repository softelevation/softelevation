<?php
/*
* Template Name: About Us
*/

get_header();
?>
    <!-- Breadcrumbs -->
    <?php echo do_shortcode('[breadcrumb]'); ?>
        <!-- Why choose us-->
        <section class="section section-sm section-first bg-default text-md-left">
            <div class="container">
                <div class="row row-50 justify-content-center align-items-xl-center">
                    <div class="col-md-10 col-lg-5 col-xl-6">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/about-1-519x564.jpg" alt="" width="519" height="564">
                    </div>
                    <div class="col-md-10 col-lg-7 col-xl-6">
                        <h2 class="text-spacing-25 font-weight-normal title-opacity-9">Why choose us</h2>
                        <!-- Bootstrap tabs-->
                        <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                            <!-- Nav tabs-->
                            <ul class="nav nav-tabs">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" href="#" data-toggle="tab">Experience</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" href="#" data-toggle="tab">Skills</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" href="#" data-toggle="tab">Mission</a>
                                </li>
                            </ul>
                            <!-- Tab panes-->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tabs-4-1">
                                    <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Cras ultricies ligula sed magna dictum porta. Nulla quis lorem ut libero malesuada feugiat. Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta.</p>
                                    <!-- Linear progress bar-->
                                    <article class="progress-linear animated">
                                        <div class="progress-header">
                                            <p>Windows Applications</p>
                                        </div>
                                        <div class="progress-bar-linear-wrap">
                                            <div class="progress-bar-linear" style="width: 79%;"><span class="progress-value">79</span><span class="progress-marker"></span></div>
                                        </div>
                                    </article>
                                    <!-- Linear progress bar-->
                                    <article class="progress-linear animated">
                                        <div class="progress-header">
                                            <p>iOS/MacOS Apps</p>
                                        </div>
                                        <div class="progress-bar-linear-wrap">
                                            <div class="progress-bar-linear" style="width: 72%;"><span class="progress-value">72</span><span class="progress-marker"></span></div>
                                        </div>
                                    </article>
                                    <!-- Linear progress bar-->
                                    <article class="progress-linear animated">
                                        <div class="progress-header">
                                            <p>Android Applications</p>
                                        </div>
                                        <div class="progress-bar-linear-wrap">
                                            <div class="progress-bar-linear" style="width: 88%;"><span class="progress-value">88</span><span class="progress-marker"></span></div>
                                        </div>
                                    </article>
                                </div>
                                <div class="tab-pane fade" id="tabs-4-2">
                                    <div class="row row-40 justify-content-center text-center inset-top-10">
                                        <div class="col-sm-4">
                                            <!-- Circle Progress Bar-->
                                            <div class="progress-bar-circle animated" data-value="0.87" data-gradient="#756aee" data-empty-fill="transparent" data-size="150" data-thickness="12" data-reverse="true">
                                                <canvas width="150" height="150"></canvas><span>87</span></div>
                                            <p class="progress-bar-circle-title">App development</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- Circle Progress Bar-->
                                            <div class="progress-bar-circle animated" data-value="0.74" data-gradient="#756aee" data-empty-fill="transparent" data-size="150" data-thickness="12" data-reverse="true">
                                                <canvas width="150" height="150"></canvas><span>74</span></div>
                                            <p class="progress-bar-circle-title">QA &amp; Testing</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- Circle Progress Bar-->
                                            <div class="progress-bar-circle animated" data-value="0.99" data-gradient="#756aee" data-empty-fill="transparent" data-size="150" data-thickness="12" data-reverse="true">
                                                <canvas width="150" height="150"></canvas><span>99</span></div>
                                            <p class="progress-bar-circle-title">Customer support</p>
                                        </div>
                                    </div>
                                    <div class="group-md group-middle">
                                        <a class="button button-width-xl-230 button-primary button-pipaluk" href="#">Get in touch</a>
                                        <a class="button button-width-xl-310 button-default-outline button-wapasha" href="#">Download presentation</a></div>
                                </div>
                                <div class="tab-pane fade" id="tabs-4-3">
                                    <p>Cras ultricies ligula sed magna dictum porta. Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                    <div class="text-center text-sm-left offset-top-30">
                                        <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                                            <li>iOS/MacOS Apps</li>
                                            <li>Applications</li>
                                            <li>QA &amp; Testing</li>
                                            <li>UX and Design</li>
                                            <li>Android Applications</li>
                                            <li>Database Management</li>
                                        </ul>
                                    </div>
                                    <div class="group-md group-middle">
                                        <a class="button button-width-xl-230 button-primary button-pipaluk" href="#">Get in touch</a>
                                        <a class="button button-width-xl-310 button-default-outline button-wapasha" href="#">Download presentation</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Latest Projects-->
        <section class="section section-sm section-fluid bg-default">
            <div class="container">
                <h2>HISTORY TIMELINE</h2>
            </div>
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-classic owl-timeline owl-loaded owl-drag" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-margin="30" data-autoplay="true" data-nav="true" data-dots="true" style="">

                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-2413px, 0px, 0px); transition: all 0.25s ease 0s; width: 4827px;">

                        <div class="owl-item cloned" style="width: 314.75px; margin-right: 30px;">
                            <div class="owl-item">
                                <!-- Thumbnail Classic-->
                                <article class="thumbnail thumbnail-mary thumbnail-md">
                                    <div class="thumbnail-mary-figure">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-3-420x308.jpg" alt="" width="420" height="308">
                                    </div>
                                    <div class="thumbnail-mary-caption">
                                        <a class="icon fl-bigmug-line-zoom60" href="#" data-lightgallery="item">
                                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-3-420x308.jpg" alt="" width="420" height="308">
                                        </a>
                                    </div>
                                </article>
                                <div class="thumbnail-mary-description">
                                    <h4 class="thumbnail-mary-project">
                                      <a href="#">Providing extensive online support</a>
                                    </h4>
                                    <span class="thumbnail-mary-decor"></span>
                                    <h5 class="thumbnail-mary-time">
                                      <time datetime="2015">2015</time>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="owl-item cloned" style="width: 314.75px; margin-right: 30px;">
                            <div class="owl-item">
                                <!-- Thumbnail Classic-->
                                <article class="thumbnail thumbnail-mary thumbnail-md">
                                    <div class="thumbnail-mary-figure"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-4-420x308.jpg" alt="" width="420" height="308">
                                    </div>
                                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="https://livedemo00.template-help.com/wt_prod-18959/images/timeline-4-1200x800-original.jpg" data-lightgallery="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-4-420x308.jpg" alt="" width="420" height="308"></a>
                                    </div>
                                </article>
                                <div class="thumbnail-mary-description">
                                    <h4 class="thumbnail-mary-project"><a href="#">Introducing New CRM to Our Customers</a></h4><span class="thumbnail-mary-decor"></span>
                                    <h5 class="thumbnail-mary-time">
                                      <time datetime="2016">2016</time>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="owl-item cloned" style="width: 314.75px; margin-right: 30px;">
                            <div class="owl-item">
                                <!-- Thumbnail Classic-->
                                <article class="thumbnail thumbnail-mary thumbnail-md">
                                    <div class="thumbnail-mary-figure"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-5-420x308.jpg" alt="" width="420" height="308">
                                    </div>
                                    <div class="thumbnail-mary-caption">
                                      <a class="icon fl-bigmug-line-zoom60" href="#" data-lightgallery="item">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-5-420x308.jpg" alt="" width="420" height="308"></a>
                                    </div>
                                </article>
                                <div class="thumbnail-mary-description">
                                    <h4 class="thumbnail-mary-project"><a href="#">Partnering with Freelance Developers</a></h4><span class="thumbnail-mary-decor"></span>
                                    <h5 class="thumbnail-mary-time">
                <time datetime="2017">2017</time>
              </h5>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 314.75px; margin-right: 30px;">
                            <div class="owl-item">
                                <!-- Thumbnail Classic-->
                                <article class="thumbnail thumbnail-mary thumbnail-md">
                                    <div class="thumbnail-mary-figure"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-6-420x308.jpg" alt="" width="420" height="308">
                                    </div>
                                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="#" data-lightgallery="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-6-420x308.jpg" alt="" width="420" height="308"></a>
                                    </div>
                                </article>
                                <div class="thumbnail-mary-description">
                                    <h4 class="thumbnail-mary-project"><a href="#">Becoming the Industry Leader</a></h4><span class="thumbnail-mary-decor"></span>
                                    <h5 class="thumbnail-mary-time">
                <time datetime="2019">2019</time>
              </h5>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 314.75px; margin-right: 30px;">
                            <div class="owl-item">
                                <!-- Thumbnail Classic-->
                                <article class="thumbnail thumbnail-mary thumbnail-md">
                                    <div class="thumbnail-mary-figure"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-1-420x308.jpg" alt="" width="420" height="308">
                                    </div>
                                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="#" data-lightgallery="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-1-420x308.jpg" alt="" width="420" height="308"></a>
                                    </div>
                                </article>
                                <div class="thumbnail-mary-description">
                                    <h4 class="thumbnail-mary-project"><a href="#">Establishment of DreamSoft</a></h4><span class="thumbnail-mary-decor"></span>
                                    <h5 class="thumbnail-mary-time">
                <time datetime="2008">2008</time>
              </h5>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 314.75px; margin-right: 30px;">
                            <div class="owl-item">
                                <!-- Thumbnail Classic-->
                                <article class="thumbnail thumbnail-mary thumbnail-md">
                                    <div class="thumbnail-mary-figure"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-2-420x308.jpg" alt="" width="420" height="308">
                                    </div>
                                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="#" data-lightgallery="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-2-420x308.jpg" alt="" width="420" height="308"></a>
                                    </div>
                                </article>
                                <div class="thumbnail-mary-description">
                                    <h4 class="thumbnail-mary-project"><a href="#">Mobile applications development</a></h4><span class="thumbnail-mary-decor"></span>
                                    <h5 class="thumbnail-mary-time">
                <time datetime="2013">2013</time>
              </h5>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 314.75px; margin-right: 30px;">
                            <div class="owl-item">
                                <!-- Thumbnail Classic-->
                                <article class="thumbnail thumbnail-mary thumbnail-md">
                                    <div class="thumbnail-mary-figure"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-3-420x308.jpg" alt="" width="420" height="308">
                                    </div>
                                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="#" data-lightgallery="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-3-420x308.jpg" alt="" width="420" height="308"></a>
                                    </div>
                                </article>
                                <div class="thumbnail-mary-description">
                                    <h4 class="thumbnail-mary-project"><a href="#">Providing extensive online support</a></h4><span class="thumbnail-mary-decor"></span>
                                    <h5 class="thumbnail-mary-time">
                <time datetime="2015">2015</time>
              </h5>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 314.75px; margin-right: 30px;">
                            <div class="owl-item">
                                <!-- Thumbnail Classic-->
                                <article class="thumbnail thumbnail-mary thumbnail-md">
                                    <div class="thumbnail-mary-figure"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-4-420x308.jpg" alt="" width="420" height="308">
                                    </div>
                                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="#" data-lightgallery="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-4-420x308.jpg" alt="" width="420" height="308"></a>
                                    </div>
                                </article>
                                <div class="thumbnail-mary-description">
                                    <h4 class="thumbnail-mary-project"><a href="#">Introducing New CRM to Our Customers</a></h4><span class="thumbnail-mary-decor"></span>
                                    <h5 class="thumbnail-mary-time">
                <time datetime="2016">2016</time>
              </h5>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 314.75px; margin-right: 30px;">
                            <div class="owl-item">
                                <!-- Thumbnail Classic-->
                                <article class="thumbnail thumbnail-mary thumbnail-md">
                                    <div class="thumbnail-mary-figure"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-5-420x308.jpg" alt="" width="420" height="308">
                                    </div>
                                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="#" data-lightgallery="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-5-420x308.jpg" alt="" width="420" height="308"></a>
                                    </div>
                                </article>
                                <div class="thumbnail-mary-description">
                                    <h4 class="thumbnail-mary-project"><a href="#">Partnering with Freelance Developers</a></h4><span class="thumbnail-mary-decor"></span>
                                    <h5 class="thumbnail-mary-time">
                <time datetime="2017">2017</time>
              </h5>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 314.75px; margin-right: 30px;">
                            <div class="owl-item">
                                <!-- Thumbnail Classic-->
                                <article class="thumbnail thumbnail-mary thumbnail-md">
                                    <div class="thumbnail-mary-figure"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-6-420x308.jpg" alt="" width="420" height="308">
                                    </div>
                                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="#" data-lightgallery="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-6-420x308.jpg" alt="" width="420" height="308"></a>
                                    </div>
                                </article>
                                <div class="thumbnail-mary-description">
                                    <h4 class="thumbnail-mary-project"><a href="#">Becoming the Industry Leader</a></h4><span class="thumbnail-mary-decor"></span>
                                    <h5 class="thumbnail-mary-time">
                <time datetime="2019">2019</time>
              </h5>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned active" style="width: 314.75px; margin-right: 30px;">
                            <div class="owl-item">
                                <!-- Thumbnail Classic-->
                                <article class="thumbnail thumbnail-mary thumbnail-md">
                                    <div class="thumbnail-mary-figure"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-1-420x308.jpg" alt="" width="420" height="308">
                                    </div>
                                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="#" data-lightgallery="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-1-420x308.jpg" alt="" width="420" height="308"></a>
                                    </div>
                                </article>
                                <div class="thumbnail-mary-description">
                                    <h4 class="thumbnail-mary-project"><a href="#">Establishment of DreamSoft</a></h4><span class="thumbnail-mary-decor"></span>
                                    <h5 class="thumbnail-mary-time">
                <time datetime="2008">2008</time>
              </h5>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 314.75px; margin-right: 30px;">
                            <div class="owl-item">
                                <!-- Thumbnail Classic-->
                                <article class="thumbnail thumbnail-mary thumbnail-md">
                                    <div class="thumbnail-mary-figure"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-2-420x308.jpg" alt="" width="420" height="308">
                                    </div>
                                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="#" data-lightgallery="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-2-420x308.jpg" alt="" width="420" height="308"></a>
                                    </div>
                                </article>
                                <div class="thumbnail-mary-description">
                                    <h4 class="thumbnail-mary-project"><a href="#">Mobile applications development</a></h4><span class="thumbnail-mary-decor"></span>
                                    <h5 class="thumbnail-mary-time">
                <time datetime="2013">2013</time>
              </h5>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 314.75px; margin-right: 30px;">
                            <div class="owl-item">
                                <!-- Thumbnail Classic-->
                                <article class="thumbnail thumbnail-mary thumbnail-md">
                                    <div class="thumbnail-mary-figure"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-3-420x308.jpg" alt="" width="420" height="308">
                                    </div>
                                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="#" data-lightgallery="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-3-420x308.jpg" alt="" width="420" height="308"></a>
                                    </div>
                                </article>
                                <div class="thumbnail-mary-description">
                                    <h4 class="thumbnail-mary-project"><a href="#">Providing extensive online support</a></h4><span class="thumbnail-mary-decor"></span>
                                    <h5 class="thumbnail-mary-time">
                <time datetime="2015">2015</time>
              </h5>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 314.75px; margin-right: 30px;">
                            <div class="owl-item">
                                <!-- Thumbnail Classic-->
                                <article class="thumbnail thumbnail-mary thumbnail-md">
                                    <div class="thumbnail-mary-figure"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-4-420x308.jpg" alt="" width="420" height="308">
                                    </div>
                                    <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="#" data-lightgallery="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/timeline-4-420x308.jpg" alt="" width="420" height="308"></a>
                                    </div>
                                </article>
                                <div class="thumbnail-mary-description">
                                    <h4 class="thumbnail-mary-project"><a href="#">Introducing New CRM to Our Customers</a></h4><span class="thumbnail-mary-decor"></span>
                                    <h5 class="thumbnail-mary-time">
                <time datetime="2016">2016</time>
              </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav">
                    <div class="owl-prev"></div>
                    <div class="owl-next"></div>
                </div>
                <div class="owl-dots">
                    <div class="owl-dot active"><span></span></div>
                    <div class="owl-dot"><span></span></div>
                </div>
            </div>
        </section>

        <!-- What people Say-->
        <section class="section section-sm section-last bg-default">
            <div class="container">
                <h2>What people Say</h2>
                <!-- Owl Carousel-->
                <div class="owl-carousel owl-modern owl-loaded owl-drag" data-items="1" data-stage-padding="15" data-margin="30" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay="true" style="">
                    <!-- Quote Lisa-->

                    <!-- Quote Lisa-->

                    <!-- Quote Lisa-->

                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-4800px, 0px, 0px); transition: all 0s ease 0s; width: 8430px; padding-left: 15px; padding-right: 15px;">

                            <div class="owl-item cloned" style="width: 1170px; margin-right: 30px;">
                                <article class="quote-lisa">
                                    <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/user-17-100x100.jpg" alt="" width="100" height="100"></a>
                                        <div class="quote-lisa-text">
                                            <p class="q">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        </div>
                                        <h5 class="quote-lisa-cite"><a href="#">John Smith</a></h5>
                                        <p class="quote-lisa-status">Regular Client</p>
                                    </div>
                                </article>
                            </div>

                            <div class="owl-item cloned" style="width: 1170px; margin-right: 30px;">
                                <article class="quote-lisa">
                                    <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/user-18-100x100.jpg" alt="" width="100" height="100"></a>
                                        <div class="quote-lisa-text">
                                            <p class="q">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus nibh. Donec rutrum congue leo eget malesuada.</p>
                                        </div>
                                        <h5 class="quote-lisa-cite"><a href="#">Ann McMillan</a></h5>
                                        <p class="quote-lisa-status">Regular Client</p>
                                    </div>
                                </article>
                            </div>

                            <div class="owl-item" style="width: 1170px; margin-right: 30px;">
                                <article class="quote-lisa">
                                    <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/user-16-100x100.jpg" alt="" width="100" height="100"></a>
                                        <div class="quote-lisa-text">
                                            <p class="q">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        </div>
                                        <h5 class="quote-lisa-cite"><a href="#">Catherine Williams</a></h5>
                                        <p class="quote-lisa-status">Regular Client</p>
                                    </div>
                                </article>
                            </div>

                            <div class="owl-item" style="width: 1170px; margin-right: 30px;">
                                <article class="quote-lisa">
                                    <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/user-17-100x100.jpg" alt="" width="100" height="100"></a>
                                        <div class="quote-lisa-text">
                                            <p class="q">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        </div>
                                        <h5 class="quote-lisa-cite"><a href="#">John Smith</a></h5>
                                        <p class="quote-lisa-status">Regular Client</p>
                                    </div>
                                </article>
                            </div>

                            <div class="owl-item active" style="width: 1170px; margin-right: 30px;">
                                <article class="quote-lisa">
                                    <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/user-18-100x100.jpg" alt="" width="100" height="100"></a>
                                        <div class="quote-lisa-text">
                                            <p class="q">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus nibh. Donec rutrum congue leo eget malesuada.</p>
                                        </div>
                                        <h5 class="quote-lisa-cite"><a href="#">Ann McMillan</a></h5>
                                        <p class="quote-lisa-status">Regular Client</p>
                                    </div>
                                </article>
                            </div>

                            <div class="owl-item cloned" style="width: 1170px; margin-right: 30px;">
                                <article class="quote-lisa">
                                    <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/user-16-100x100.jpg" alt="" width="100" height="100"></a>
                                        <div class="quote-lisa-text">
                                            <p class="q">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        </div>
                                        <h5 class="quote-lisa-cite"><a href="#">Catherine Williams</a></h5>
                                        <p class="quote-lisa-status">Regular Client</p>
                                    </div>
                                </article>
                            </div>

                            <div class="owl-item cloned" style="width: 1170px; margin-right: 30px;">
                                <article class="quote-lisa">
                                    <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/user-17-100x100.jpg" alt="" width="100" height="100"></a>
                                        <div class="quote-lisa-text">
                                            <p class="q">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        </div>
                                        <h5 class="quote-lisa-cite"><a href="#">John Smith</a></h5>
                                        <p class="quote-lisa-status">Regular Client</p>
                                    </div>
                                </article>
                            </div>
                            
                        </div>
                    </div>
                    <div class="owl-nav disabled">
                        <div class="owl-prev"></div>
                        <div class="owl-next"></div>
                    </div>
                    <div class="owl-dots">
                        <div class="owl-dot"><span></span></div>
                        <div class="owl-dot"><span></span></div>
                        <div class="owl-dot active"><span></span></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Counter Classic-->
        <section class="section section-fluid bg-default">
            <div class="container-fluid">
                <div class="parallax-container" data-parallax-img="images/bg-counter-2.jpg">
                    <div class="material-parallax parallax">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/bg-counter-2.jpg" alt="" style="display: block; transform: translate3d(-50%, 0px, 0px);">
                    </div>
                    <div class="parallax-content section-xl">
                        <div class="container">
                            <div class="row row-50 justify-content-center border-classic">
                                <div class="col-sm-6 col-md-5 col-lg-3">
                                    <div class="counter-classic">
                                        <div class="counter-classic-number"><span class="counter animated">12</span>
                                        </div>
                                        <h4 class="counter-classic-title">Awards won</h4>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-5 col-lg-3">
                                    <div class="counter-classic">
                                        <div class="counter-classic-number"><span class="counter animated">194</span>
                                        </div>
                                        <h4 class="counter-classic-title">Apps developed</h4>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-5 col-lg-3">
                                    <div class="counter-classic">
                                        <div class="counter-classic-number"><span class="counter animated">2</span><span class="symbol">k</span>
                                        </div>
                                        <h4 class="counter-classic-title">Satisfied customers</h4>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-5 col-lg-3">
                                    <div class="counter-classic">
                                        <div class="counter-classic-number"><span class="counter animated">25</span>
                                        </div>
                                        <h4 class="counter-classic-title">team members</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our clients-->
        <section class="section section-xl bg-default">
            <div class="container">
                <h2>Our clients</h2>
                <div class="row row-30 row-sm">
                    <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInDown" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
                        <a class="clients-classic" href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/clients-1-270x145.png" alt="" width="270" height="145"></a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">
                        <a class="clients-classic" href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/clients-2-270x145.png" alt="" width="270" height="145">
              </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInDown" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">
                        <a class="clients-classic" href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/clients-3-270x145.png" alt="" width="270" height="145">
              </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                        <a class="clients-classic" href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/clients-4-270x145.png" alt="" width="270" height="145">
              </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <a class="clients-classic" href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/clients-5-270x145.png" alt="" width="270" height="145">
              </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInUp" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <a class="clients-classic" href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/clients-6-270x145.png" alt="" width="270" height="145">
              </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <a class="clients-classic" href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/clients-7-270x145.png" alt="" width="270" height="145">
              </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <a class="clients-classic" href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/clients-8-270x145.png" alt="" width="270" height="145">
              </a>
                    </div>
                </div>
            </div>
        </section>
        <?php get_footer();