<?php 
$la_title = get_field('la_title');
$la_gallery = get_field('la_gallery');

?>


<section class="bg-white text-black">
    <div class="row">
        <div class="col">
            <h2 class="headingTwo text-center"><?php echo $la_title; ?></h2>
            <?php if ($la_gallery) { ?>
                <div class="life-at-swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($la_gallery as $la_image) { ?> 
                            <div class="swiper-slide">
                                <img class="w-full h-[50vw] object-cover" src="<?php echo $la_image['url']; ?>"  alt="<?php echo esc_attr($la_image['alt']); ?>">       
                            </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-button-next text-black mr-12"></div>
                    <div class="swiper-button-prev text-black ml-12"></div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<script>
var swiper = new Swiper('.life-at-swiper', {
    slidesPerView: 1.3,
    centeredSlides: true,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
  // Add any additional options here
});
</script>

<section>
    <div class="row">
        <div class="col">
        <?php 
  $amenities = new WP_Query( array( 
    'post_type' => 'amenities', 
    'posts_per_page' => -1 
  ) ); 
  if ( $amenities->have_posts() ) : 
    while ( $amenities->have_posts() ) : $amenities->the_post(); 
?> 
  <div class="amenity">
    <h2 class="amenity-title"><?php the_title(); ?></h2>
    <?php the_post_thumbnail( 'large', array( 'class' => 'amenity-featured-image' ) ); ?>
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