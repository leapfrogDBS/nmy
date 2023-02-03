<?php
$header_title = get_field('header_title');
$header_image = get_field('home_hero_background_image');

?>

<section id="hero" style="background: url(<?php echo esc_url($header_image['url']); ?>)" class="p-0 bg-cover bg-no-repeat bg-fixed bg-center relative">
    <div class="container">
        <div class="row">
            <div class="col flex items-center justify-center h-screen">
                <img id="hero-text" src="<?php echo get_template_directory_uri();?>/img//Newmarket-yards.svg" class="js-scroll fade-in-bottom header-text m-auto z-40 w-[80vw] max-w-7xl">
            </div>
            
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
  <polygon points="100 0 100 10 0 10" />
</svg>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/overlay.svg" class="absolute inset-0 w-full h-full object-cover">
</section>



    





