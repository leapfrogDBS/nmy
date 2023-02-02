<section>
    <div class="container">
        <div class="row">
            
            <?php 
                // Get the featured amenities posts
                $amenities = new WP_Query(array(
                    'post_type' => 'featured_amenities',
                    'posts_per_page' => -1,
                ));

                // Loop through the amenities
                if ($amenities->have_posts()):
                    while ($amenities->have_posts()): $amenities->the_post();
                        // Get the featured image
                        $image = get_the_post_thumbnail(get_the_ID(), 'full');

                        // Get the fa_content and fa_features custom fields
                        $fa_content = get_field('fa_content');
                        $fa_features = get_field('fa_features');

                        // Output the amenities
                        echo '<div class="amenity col-span-6">';
                            echo '<div class="amenity-image">' . $image . '</div>';
                            echo '<h4 class="headingFive">' . get_the_title() . '</h2>';
                            echo '<div class="grid grid-cols-3">';
                                echo '<div class="amenity-content col-span-2">' . $fa_content . '</div>';
                                echo '<div class="amenity-features">';
                                    echo '<ul>';
                                        // Loop through the fa_features repeater field
                                        if ($fa_features):
                                            foreach ($fa_features as $feature):
                                                echo '<li>' . $feature['fa_feature'] . '</li>';
                                            endforeach;
                                        endif;
                                    echo '</ul>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    endwhile;
                endif;

                // Reset the post data
                wp_reset_postdata();
            ?>

           
        </div>
    </div>
</section>


