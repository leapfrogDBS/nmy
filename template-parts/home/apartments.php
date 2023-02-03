<section>
    <div class="container">
        <div class="row grid-cols-4">
        <?php 
            $args = array(
            'post_type' => 'apartments',
            'posts_per_page' => -1
            );

            $apartments = new WP_Query($args);

            if($apartments->have_posts() ) : 
            while($apartments->have_posts() ) : $apartments->the_post(); 
                $apartments_copy = get_field('apartments_copy');
                ?>
                <div class="apartment">
                <?php the_post_thumbnail('medium'); ?>
                <h2><?php the_title(); ?></h2>
                <p><?php echo $apartments_copy; ?></p>
                <a href="<?php the_permalink(); ?>">Read more</a>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>


