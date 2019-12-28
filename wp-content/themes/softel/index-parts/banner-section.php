<?php  $query = new WP_Query( array( 'post_type' => 'slider') ); ?>
 <section class="banner_section">
    <div>
        <div class="large-12">
            <div class="fadeOut owl-carousel owl-theme">
                <?php  
                if ( $query->have_posts() ) : 
                while ( $query->have_posts() ) : $query->the_post();  ?>
                    <div class="item">
                        <?php
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                            the_post_thumbnail( 'full', array( 'class'  => 'd-block w-100' ) ); // show featured image
                            } 
                        ?>
                       <!--  <div class="carousel-caption d-none d-md-block">
                           <h1 data-caption-animate="fadeInLeft" data-caption-delay="0" class="fadeIn"><?php the_title(); ?></h1>
                          <p class="not-animated" style="color:#000;" data-caption-animate="fadeInRight" data-caption-delay="100"><?php the_content(); ?></p>
                          <a class="button button-primary button-ujarak not-animated" href="#" target="_blank" data-caption-animate="fadeInUp" data-caption-delay="200">Get in touch</a> 
                        </div> -->
                    </div>
                    <?php 
                        endwhile;
                        wp_reset_postdata();
                        endif; 
                    ?>
           </div>
   <!--  <a class="button secondary play">Play</a> 
    <a class="button secondary stop">Stop</a>  -->
        </div>
    </div>
</section>