<?php
    $wi_title = get_field('wi_title');
    $wi_copy = get_field('wi_copy');
    $wi_image = get_field('wi_image');

?>

<section class="bg-black text-white py-0">
    <div class="row">
        <div class="col bg-cover bg-no-repeat bg-left mb-0 z-30 h-80 md:-mb-8 md:h-[105%] md:col-span-7 md:order-2" style="background-image: url('<?php echo $wi_image['url']; ?>')">

        </div>
        <div id="what-is-col" class="col py-6 px-4 sm:py-16 md:pr-6 md:pb-72 md:pt-40 md:pl-[10vw] md:col-span-5 md:order-1 lg:pr-12">
            <h2 class="headingOne"><?php echo $wi_title; ?></h2>
            <p class="bodyText mt-6"><?php echo $wi_copy; ?></p>
        </div>
        
    </div>
</section>