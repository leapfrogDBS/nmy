<?php 
$la_title = get_field('la_title');
$la_gallery = get_field('la_gallery');

?>


<section class="bg-white text-black pt-0 sm:pt-6 md:pt-12 lg:pt-24 pb-10">
    <div class="row">
        <div class="col">
            <h2 class="headingOne px-6 lg:px-0 text-center mb-7 lg:mb-16"><?php echo $la_title; ?></h2>
            <?php if ($la_gallery) { ?>
                <div class="life-at-swiper overflow-hidden relative">
                    <div class="swiper-wrapper">
                        <?php foreach ($la_gallery as $la_image) { ?> 
                            <div class="swiper-slide">
                                <img class="w-full h-64 sm:h-96 lg:h-[50vw] lg:max-h-[800px] object-cover" src="<?php echo $la_image['url']; ?>"  alt="<?php echo esc_attr($la_image['alt']); ?>">       
                            </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-pagination lg:hidden absolute bottom-2 left-0 right-0"></div>
                    <div class="swiper-button-next hidden md:block text-black mr-12"></div>
                    <div class="swiper-button-prev hidden md:block text-black ml-12"></div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<script>
var swiper = new Swiper('.life-at-swiper', {
    slidesPerView: 1,
    centeredSlides: true,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 1.3,
      },
    },
  // Add any additional options here
});
</script>


