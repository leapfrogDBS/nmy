<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="headingTwo">Amenities</h2>
            </div>
        </div>
        <div class="row grid-cols-4">

                <?php 
                $amenities = new WP_Query( array( 
                    'post_type' => 'amenities', 
                    'posts_per_page' => -1 
                ) ); 
                if ( $amenities->have_posts() ) : 
                    while ( $amenities->have_posts() ) : $amenities->the_post(); 
                ?> 
                    <div class="amenity">
                        <?php the_post_thumbnail( 'large', array( 'class' => 'amenity-featured-image' ) ); ?>
                        <h2 class="amenity-title"><?php the_title(); ?></h2>
                        <div class="amenity-copy">
                            <?php echo get_field( 'amenities_copy' ); ?>
                        </div>
                    </div>
                    <?php 
                    endwhile; 
                endif; 
                wp_reset_postdata(); 
                ?>
            
        </div>
    </div>
</section>
