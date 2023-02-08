<?php
    $mas_title = get_field('mas_title');
    $mas_subtitle = get_field('mas_subtitle');
?>

<section class="bg-black text-white text-center py-12 lg:py-16">
    <div class="container">
        <div class="row">
            <div class="col w-3/4 sm:w-auto max-w-xl m-auto">
                <h3 class="headingTwo"><?php echo $mas_title; ?></h3>
                <h4 class="headingFour font-happy italic mt-3 lg:mt-8"><?php echo $mas_subtitle; ?></h4>
            </div>
        </div>
    </div>
</section>