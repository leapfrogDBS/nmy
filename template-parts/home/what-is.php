<?php
    $wi_title = get_field('wi_title');
    $wi_copy = get_field('wi_copy');
    $wi_image = get_field('wi_image');

?>

<section class="bg-black text-white pb-0">
    <div class="row">
        <div class="col col-span-6 py-12 px-36">
            <h2 class="headingTwo"><?php echo $wi_title; ?></h2>
            <p class="bodyText"><?php echo $wi_copy; ?></p>
        </div>
        <div class="col col-span-6 bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo $wi_image['url']; ?>')">

        </div>
    </div>

</section>