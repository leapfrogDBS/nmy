<?php
    $apartment_hero_title = get_field('apartment_hero_title');
    $apartment_hero_subtitle = get_field('apartment_hero_subtitle');
    $apartment_hero_image = get_field('apartment_hero_image');
    $apartment_hero_copy = get_field('apartment_hero_copy');
    $apartment_hero_button_text = get_field('apartment_hero_button_text');
    $apartment_hero_button_link = get_field('apartment_hero_button_link');
?>
  
<section class="bg-black text-white py-0">
    <div class="row">
        <div class="col bg-cover bg-no-repeat bg-left mb-0 z-30 h-80 md:-mb-8 md:h-[105%] md:col-span-7 md:order-2" style="background-image: url('<?php echo $apartment_hero_image['url']; ?>')">

        </div>
        <div id="what-is-col" class="col py-6 px-4 sm:py-16 md:pr-6 md:pb-72 md:pt-40 md:pl-[10vw] md:col-span-5 md:order-1 lg:pr-12">
            <h2 class="headingOne"><?php echo $apartment_hero_title; ?></h2>
            <h2 class="headingFour font-happy italic mt-6"><?php echo $apartment_hero_subtitle; ?></h2>
            <p class="bodyText mt-6"><?php echo $apartment_hero_copy; ?></p>
            <a href="<?php echo $apartment_hero_button_link['url']; ?>" class="ctaButtonWhite mt-6"><?php echo $apartment_hero_button_text; ?></a>
        </div>
            
        

    </div>
</section>

