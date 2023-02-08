<?php 
//import acf fields 
$dub8_subheading = get_field('dub8_subheading', 'options');
$dub8_copy = get_field('dub8_copy', 'options');
$dub8_image = get_field('dub8_image', 'options');
$dub8_link =  get_field('dub8_link', 'options');
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="headingOne text-center mb-0 lg:mb-10">Dublin 8</h3>
                <div class="relative h-10 my-6 lg:h-16 lg:mt-12">
                    <div class="vl vl-top border-black"></div>
                </div>
            </div>
            <div class="col max-w-3xl text-center mx-auto mb-10">
                <p class="bodyText"><?php echo $dub8_subheading; ?></p>
            </div>
        </div>
        <div class="row md:gap-x-8">
            <div class="col md:col-span-6 mb-6 md:mb-0">
                <img class="w-full h-auto" src="<?php echo $dub8_image['url']; ?>" alt="<?php echo $dub8_image['alt']; ?>">
            </div>
            <div class="col md:col-span-6">    
                <p class="bodyText"><?php echo $dub8_copy; ?></p>
                <a href="#" class="bodyText font-bold mt-8 block">Read more ></a>
            </div>
        </div>
    </div>
</section>