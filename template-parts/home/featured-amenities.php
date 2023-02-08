<section class="pb-8 lg:pb-14">
    <div class="container">
        <div class="row ">
            
            <?php 
                // Get the featured amenities posts
                $amenities = new WP_Query(array(
                    'post_type' => 'featured_amenities',
                    'posts_per_page' => -1,
                ));

                // Loop through the amenities
                if ($amenities->have_posts()):
                    $amenities->posts = array_reverse($amenities->posts);
                    while ($amenities->have_posts()): $amenities->the_post();
                        // Get the featured image
                        $image_id = get_post_thumbnail_id();
                        $image_url = wp_get_attachment_image_src( $image_id, 'full', true );
                        $image_url = $image_url[0];

                        // Get the fa_content and fa_features custom fields
                        $fa_content = get_field('fa_content');
                        $fa_features = get_field('fa_features');

                        // Output the amenities
                        echo '<div class="amenity mb-8 col-span-12 lg:col-span-6 lg:mb-0">';
                            echo '<div class="amenity-image"><img src="' . $image_url . '" class="m-auto"></div>';
                            echo '<h4 class="headingFive mt-3 mb-1  lg:mt-6 lg:mb-3">' . get_the_title() . '</h2>';
                            echo '<div class="grid grid-cols-3 gap-x-6 mb-6">';
                                echo '<div class="amenity-content bodyTwo col-span-3 lg:col-span-2">' . $fa_content . '</div>';
                                echo '<div class="amenity-features hidden lg:block">';
                                    echo '<ul>';
                                        // Loop through the fa_features repeater field
                                        if ($fa_features):
                                            foreach ($fa_features as $feature):
                                                echo '<li class="mb-2 font-happy italic">' . $feature['fa_feature'] . '</li>';
                                            endforeach;
                                        endif;
                                    echo '</ul>';
                                echo '</div>';
                            echo '</div>';
                            echo '<a class="bodyTwo font-bold" href="#">See more amenities ></a>';
                        echo '</div>';
                    endwhile;
                endif;

                // Reset the post data
                wp_reset_postdata();
            ?>

           
        </div>
    </div>
</section>


