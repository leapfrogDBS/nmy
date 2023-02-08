<section class="pt-16 pb-20">
    <div class="container">
        <div class="row">
            <div class="col mb-5">
                <h2 class="headingOne">Amenities</h2>
            </div>
        </div>
        <div class="hidden row sm:flex flex-wrap justify-center gap-x-6">

                <?php 
                $amenities = new WP_Query( array( 
                    'post_type' => 'amenities', 
                    'posts_per_page' => -1 
                ) ); 
                if ( $amenities->have_posts() ) : 
                    $amenities->posts = array_reverse( $amenities->posts );
                    while ( $amenities->have_posts() ) : $amenities->the_post(); 
                ?> 
                    <div class="amenity">
                        <?php the_post_thumbnail( 'large', array( 'class' => 'amenity-featured-image' ) ); ?>
                        <h2 class="amenity-title headingFour text-2xl mb-2"><?php the_title(); ?></h2>
                        <div class="amenity-copy min-w-[160px]">
                            <?php echo get_field( 'amenities_copy' ); ?>
                        </div>
                    </div>
                    <?php 
                    endwhile; 
                endif; 
                wp_reset_postdata(); 
                ?>
        </div>

        <div class="row sm:hidden">
            <div class="col">
                <div class="amenities-swiper overflow-hidden relative">
                    <div class="swiper-wrapper">
                        <?php 
                        $amenities = new WP_Query( array( 
                            'post_type' => 'amenities', 
                            'posts_per_page' => -1 
                        ) ); 
                        if ( $amenities->have_posts() ) : 
                            $amenities->posts = array_reverse( $amenities->posts );
                            while ( $amenities->have_posts() ) : $amenities->the_post(); 
                        ?> 
                            <div class="swiper-slide">
                                <div class="amenity">
                                    <?php the_post_thumbnail( 'large', array( 'class' => 'amenity-featured-image' ) ); ?>
                                    <h2 class="amenity-title headingFour text-2xl mb-2"><?php the_title(); ?></h2>
                                    <div class="amenity-copy min-w-[160px]">
                                        <?php echo get_field( 'amenities_copy' ); ?>
                                    </div>
                                </div>
                            </div>
                            <?php 
                            endwhile; 
                        endif; 
                        wp_reset_postdata(); 
                        ?>
                    </div>
                    <div class="swiper-pagination lg:hidden absolute bottom-2 left-0 right-0"></div>
                    <div class="swiper-button-next hidden md:block text-black mr-12"></div>
                    <div class="swiper-button-prev hidden md:block text-black ml-12"></div>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
var swiper = new Swiper('.amenities-swiper', {
    slidesPerView: 1.35,
    centeredSlides: false,
    spaceBetween: 40,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    });
</script>
