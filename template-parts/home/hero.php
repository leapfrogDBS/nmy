<div id="navbar">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
</div>
<div class="curtain">
  <div class="curtain-inner"></div>
</div>

<?php
$header_title = get_field('header_title');
$header_image = get_field('home_hero_background_image');

?>

<section id="header" style="background: url(<?php echo esc_url($header_image['url']); ?>)">
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="<?php echo get_template_directory_uri();?>/img//Newmarket-yards.svg" class="header-text">
            </div>
            
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
  <polygon points="100 0 100 10 0 10" />
</svg>
</section>

<div class="flex flex-col mt-10">
  <ul class="flex">
    <li class="mr-6 cursor-pointer font-bold text-lg text-gray-800" onclick="displayTab(1)">Tab 1</li>
    <li class="mr-6 cursor-pointer font-bold text-lg text-gray-800" onclick="displayTab(2)">Tab 2</li>
    <li class="mr-6 cursor-pointer font-bold text-lg text-gray-800" onclick="displayTab(3)">Tab 3</li>
  </ul>
  <div id="tab-1" class="py-6 border-t border-gray-300">
    Tab 1 Content
  </div>
  <div id="tab-2" class="hidden py-6 border-t border-gray-300">
    Tab 2 Content
  </div>
  <div id="tab-3" class="hidden py-6 border-t border-gray-300">
    Tab 3 Content
  </div>
</div>

<script>
  function displayTab(tab) {
    let tabs = [1, 2, 3];
    tabs.forEach(function (t) {
      let tabId = "tab-" + t;
      if (t === tab) {
        document.getElementById(tabId).classList.remove("hidden");
      } else {
        document.getElementById(tabId).classList.add("hidden");
      }
    });
  }
</script>


<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- HTML for tabs and content -->
<div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      Lorem ipsum dolor sit amet.
    </div>
    <div class="swiper-slide">
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat debitis quaerat aliquam eligendi accusantium beatae voluptatum recusandae exercitationem alias nobis.
    </div>
    <!-- More slides for additional tabs -->
  </div>
</div>

<!-- Include Swiper JS -->


<!-- Initialize Swiper -->
<script>
var swiper = new Swiper('.swiper-container', {
  slidesPerView: 'auto',
  // Add any additional options here
});
</script>


