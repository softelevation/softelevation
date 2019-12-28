<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package softel
 */

?>
    <!doctype html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">

        <!-- Stylesheets-->
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/css/css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/css/fonts.css">
        <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/css/carousel.css"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    
        <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/css/slider/docs.theme.min.css"> -->

        <!-- Owl Stylesheets -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/css/slider/owl.carousel.min.css">
        <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/css/slider/owl.theme.default.min.css"> -->
        <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/css/slider/animate.css"> -->
        
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div class="page animated" style="animation-duration: 500ms;">
            <!-- Page Header-->
            <header class="section page-header">
                <!-- RD Navbar-->
                <div class="rd-navbar-wrap" style="height: 82.1094px;">
                    <nav class="rd-navbar rd-navbar-classic rd-navbar-original rd-navbar-static" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                        <div class="rd-navbar-main-outer">
                            <div class="rd-navbar-main">
                                <!-- RD Navbar Panel-->
                                <div class="rd-navbar-panel">
                                    <!-- RD Navbar Toggle-->
                                    <button class="rd-navbar-toggle toggle-original" data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                                        <span></span>
                                    </button>
                                    <!-- RD Navbar Brand-->
                                    <div class="rd-navbar-brand">
                                        <a class="brand" href="#">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom_assets/images/logo.png" alt="">
                                    </a>
                                    </div>
                                </div>
                                <div class="rd-navbar-main-element">
                                    <div class="rd-navbar-nav-wrap toggle-original-elements">
                                        <!-- RD Navbar Search-->
                                        <?php $defaults = array(
                                        'theme_location'  => 'header_menu',
                                        'menu'            => 'Header Menu',
                                        'container'       => '',
                                        'container_class' => '',
                                        'container_id'    => '',
                                        'menu_class'      => 'rd-navbar-nav',
                                        'menu_id'         => '',
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'before'          => '',
                                        'after'           => '',
                                        'link_before'     => '',
                                        'link_after'      => '',
                                        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                                        'depth'           => 0,
                                        'walker'          => ''
                                    );

                                     wp_nav_menu( $defaults ); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>