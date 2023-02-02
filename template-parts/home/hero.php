<div id="navbar" class="h-20 z-50">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
</div>


<?php
$header_title = get_field('header_title');
$header_image = get_field('home_hero_background_image');

?>

<section id="header" style="background: url(<?php echo esc_url($header_image['url']); ?>)" class="p-0 bg-cover bg-no-repeat bg-fixed bg-center">
    <div class="container">
        <div class="row">
            <div class="col flex items-center justify-center h-screen">
                <img src="<?php echo get_template_directory_uri();?>/img//Newmarket-yards.svg" class="header-text m-auto z-40">
            </div>
            
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
  <polygon points="100 0 100 10 0 10" />
</svg>
</section>



    





