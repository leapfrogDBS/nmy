<?php 
$home_apartments_copy = get_field('home_apartments_copy');
$home_apartments_button_text = get_field('home_apartments_button_text');
$home_apartment_button_link = get_field('home_apartment_button_link');
?>

<section class="pt-10 pb-0 lg:py-20">
    <div class="container">
        <div class="row mb-6 sm:mb-12 lg:mb-24">
            <div class="col max-w-3xl mx-auto">
                <h3 class="headingOne text-center mb-10">Apartments</h3>
                <p class="bodyText mb-5 lg:mb-8  text-center"><?php echo $home_apartments_copy; ?></p>
                <div class="text-center">
                    <a href="<?php echo $home_apartment_button_link; ?>" class="ctaButtonBlack"><?php echo $home_apartments_button_text; ?></a>
                </div>
            </div>
        </div>
        <div class="row grid-cols-4 gap-x-8 lg:mb-16">
        <?php 
            $args = array(
            'post_type' => 'apartments',
            'posts_per_page' => -1
            );

            $apartments = new WP_Query($args);
            $apartments->posts = array_reverse($apartments->posts);

            if($apartments->have_posts() ) : 
            while($apartments->have_posts() ) : $apartments->the_post(); 
                $apartments_copy = get_field('apartments_copy');
                $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                ?>
                <div class="apartment flex flex-col col-span-4 sm:col-span-2 lg:col-span-1 mb-8 lg:mb-0">
                    <img class="w-full h-48 object-contain sm:object-cover" src="<?php echo $image_url; ?>" alt="<?php the_title(); ?>">
                    <div class="flex flex-col justify-between flex-1">
                        <h2 class="mt-4 mb-2 bodyText"><?php the_title(); ?></h2>
                        <p class="text-sm"><?php echo $apartments_copy; ?></p>
                        <a class="font-bold text-sm mt-4" href="<?php the_permalink(); ?>">Read more ></a>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>


