<?php
    $mas_title = get_field('mas_title');
    $mas_subtitle = get_field('mas_subtitle');
?>

<section class="bg-black text-white text-center">
    <div class="container">
        <div class="row">
            <div class="col max-w-xl m-auto">
                <h3 class="headingThree"><?php echo $mas_title; ?></h3>
                <h4 class="headingFour mt-12"><?php echo $mas_subtitle; ?></h4>
            </div>
        </div>
    </div>
</section>