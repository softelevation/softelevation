<section class="section section-sm section-first bg-default text-center">
    <div class="container">

        <div class="row row-30 justify-content-center">
            <div id="h3_title">
                <h3 class="box-icon-modern-big-title inner_title">Our <span>Services</span></h3>
                <p class="quote-jean wow fadeInRight" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
            </div>
        </div>

        <div class="row row-30 justify-content-center">
            <div class="col-lg-12">
                <div class="row row-30">
                    <?php  $query = new WP_Query( array( 'post_type' => 'services') ); 
                if ( $query->have_posts() ) : 
                while ( $query->have_posts() ) : $query->the_post();  ?>
                    <div class="col-lg-4 col-sm-6 wow fadeInRight" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                        <article class="box-icon-modern box-icon-modern-2">
                            <div class="box-icon">
                               <?php
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                            the_post_thumbnail( 'full', array( 'class'  => '' ) ); // show featured image
                            } 
                        ?>
                            </div>
                            <h5 class="box-icon-modern-title"><a href="#"><?php the_title(); ?></a></h5>
                            <div class="box-icon-modern-decor"></div>
                            <p class="box-icon-modern-text"><?php the_content(); ?></p>
                        </article>
                    </div>
<?php 
                        endwhile;
                        wp_reset_postdata();
                        endif; 
                    ?>
                  

                </div>
            </div>
        </div>
    </div>
</section>