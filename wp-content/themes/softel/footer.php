<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package softel
 */

?>

    <!-- Page Footer-->
    <footer class="section section-fluid footer-classic">

        <div class="container bg-gray-15">
            <div class="row justify-content-center row-30">

                <div class="col-md-10 col-lg-3 wow fadeInRight" style="animation-name: none;">
                    <div class="box-footer">
                        <h4 class="font-weight-normal">Services</h4>
                        <?php $defaults = array(
                            'theme_location'  => 'footer_menu_left',
                            'menu'            => 'Footer Menu Left',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'footer-list-category',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          =>''
                        );
                        ?>

                            <?php wp_nav_menu( $defaults ); ?>
                    </div>
                </div>

                <div class="col-md-10 col-lg-3 wow fadeInRight" data-wow-delay=".1s" style="animation-delay: 0.1s; animation-name: none;">
                    <div class="box-footer">
                        <h4 class="font-weight-normal">Technologies</h4>
                        <?php $defaults = array(
                            'theme_location'  => 'footer_menu_center',
                            'menu'            => 'Footer Menu Center',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'footer-list-category',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          =>''
                        );
                        ?>

                            <?php wp_nav_menu( $defaults ); ?>
                    </div>
                </div>


                <div class="col-md-10 col-lg-3 wow fadeInRight" data-wow-delay=".1s" style="animation-delay: 0.1s; animation-name: none;">
                    <div class="box-footer">
                        <h4 class="font-weight-normal">About Us</h4>
                        <?php $defaults = array(
                            'theme_location'  => 'footer_menu_right',
                            'menu'            => 'Footer Menu Right',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'footer-list-category',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          =>''
                        );
                        ?>

                            <?php wp_nav_menu( $defaults ); ?>
                    </div>
                </div>

                <div class="col-md-10 col-lg-3 wow fadeInRight" data-wow-delay=".2s" style="animation-delay: 0.2s; animation-name: none;">
                    <div class="box-footer box-footer-small">
                        <h4 class="font-weight-normal">Follow Us</h4>
                        <ul class="list-inline list-inline-sm footer-social-list">
                            <li>
                                <a class="icon fa fa-facebook" href="#"></a>
                            </li>
                            <li>
                                <a class="icon fa fa-twitter" href="#"></a>
                            </li>
                            <li>
                                <a class="icon fa fa-linkedin" href="#"></a>
                            </li>
                            <li>
                                <a class="icon fa fa-instagram" href="#"></a>
                            </li>
                        </ul>

                        <div class="contact-classic">
                            <div class="contact-classic-item">
                                <div class="unit unit-spacing-md align-items-center">
                                   <!--  <div class="unit-left">
                                        <h4 class="font-weight-normal">Address</h4>
                                    </div> -->
                                    <div class="unit-body contact-classic-link">
                                        <p>4730 Crystal Springs Dr, Los Angeles, CA 90027</p>
                                    </div>
                                </div>
                            </div>
                            <div class="unit-body contact-classic-link">
                                <a href="mailto:contactus@softelevation.com"><i class="fa fa-envelope-o"></i>  contactus@softelevation.com</a>
                            </div>
                            <div class="logo_ftr">
                                <a class="brand" href="#">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/logo_ftr.png" alt="">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- <div class="row justify-content-center">
                <div class="col-md-10 col-lg-12 col-xl-4 wow fadeInRight" style="animation-name: none;">
                    <div class="logo-footer">
                        <a class="brand" href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/logo.png" alt="">
                        </a>
                    </div>
                </div>
            </div> -->

        </div>

        <div class="container footer-bottom-panel wow fadeInUp mt-0" style="animation-name: none; border-top: 1px solid #3d3b49;  margin-top: 16px;">
            <!-- Rights-->
            <p class="rights"><span>©&nbsp;</span><span class="copyright-year">2019</span> <span>Soft Elevation</span>. All rights reserved. <a href="#"> Privacy Policy.</a>
            </p>
        </div>
    </footer>
    </div>

    <!-- Javascript-->

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/js/core.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/js/script.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/js/slick.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/js/slick.min.js"></script>


    
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/js/slider/owl.carousel.js"></script>
    <!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/js/slider/highlight.js"></script> -->
    <!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/js/slider/app.js"></script> -->
   
    <script>
        jQuery(document).ready(function($) {
          $('.fadeOut').owlCarousel({
            items: 1,
            animateOut: 'fadeOut',
            loop: true,
            margin: 10,
          });
          $('.custom1').owlCarousel({
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items: 1,
            margin: 30,
            stagePadding: 30,
            smartSpeed: 40
          });
        });
    </script>

    <script>
        $(function() {
            $('.rd-navbar-dropdown li').addClass('rd-dropdown-item');
            $('.rd-navbar-dropdown li>a').addClass('rd-dropdown-link').removeClass('rd-nav-link');
        });

        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 2
                    }
                }]
            });
        });
    </script>

    <?php wp_footer(); ?>

        </body>

        </html>