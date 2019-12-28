<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package softel
 */

get_header();
?>
 	<!-- Banner-->

 	<?php get_template_part( 'index-parts/banner', 'section'); ?>
     
    <!-- Our services-->
 
	<?php get_template_part( 'index-parts/services', 'section'); ?>
      
    <!-- Our technologies-->

    <?php get_template_part( 'index-parts/our', 'technologies'); ?>
      
    <!-- Recent Work-->
     
    <?php get_template_part( 'index-parts/recent-work', 'section'); ?>

    <!-- What people Say-->
      
    <?php //get_template_part( 'index-parts/what-people-say', 'section'); ?>



    <!-- Years of experience-->
    
    <?php //get_template_part( 'index-parts/experience', 'section'); ?>

    <!-- Our Team-->
      
    <?php //get_template_part( 'index-parts/our-team', 'section'); ?>

    <!-- You dream — we embody-->

    <?php get_template_part( 'index-parts/get-more', 'section'); ?>
      
    <!-- Latest blog posts-->
      
    <?php //get_template_part( 'index-parts/blog', 'section'); ?>

<?php
// get_sidebar();
get_footer();
