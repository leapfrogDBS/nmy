<?php 
$la_title = get_field('la_title');
$la_gallery = get_field('la_gallery');

?>


<section class="bg-white text-black">
    <div class="row">
        <div class="col">
            <h2 class="headingTwo text-center"><?php echo $la_title; ?></h2>
            <?php if ($la_gallery) { ?>
                <div class="life-at-swiper overflow-hidden">
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


