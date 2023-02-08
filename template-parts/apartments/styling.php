<section class="pb-8 lg:pb-14">
    <div class="container">
        <div class="row ">
            
            <?php 
                // Get the featured amenities posts
                $styles = new WP_Query(array(
                    'post_type' => 'styles',
                    'posts_per_page' => -1,
                ));

                // Loop through the styles
                if ($styles->have_posts()):
                    $styles->posts = array_reverse($styles->posts);
                    while ($styles->have_posts()): $styles->the_post();
                        // Get the featured image
                        $image_id = get_post_thumbnail_id();
                        $image_url = wp_get_attachment_image_src( $image_id, 'full', true );
                        $image_url = $image_url[0];

                        
                        // Output the styles
                        echo '<div class="style mb-8 col-span-12 lg:col-span-4 lg:mb-0">';
                            echo '<div class="style-image"><img src="' . $image_url . '" class="m-auto"></div>';
                            echo '<h4 class="headingFive mt-3 mb-1  lg:mt-6 lg:mb-3">' . get_the_title() . '</h4>';                              
                        echo '</div>';
                    endwhile;
                endif;

                // Reset the post data
                wp_reset_postdata();
            ?>

           
        </div>
    </div>
</section>


