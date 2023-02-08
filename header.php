<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nmy
 */

?>
<?php 
$menu_items = wp_get_nav_menu_items('Main Menu');
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	
	<header class="fixed w-full z-50 left-0 transition-all duration-500 ease-in-out py-3 sm:py-5 lg:py-9 header">
    <div class="container2 flex items-center justify-between gap-x-4">
    <div class="w-1/4 lg:w-5/12 text-white text-left lg:text-right lg:order-3">
        <a href="#" class="lg:ctaButtonWhite">Apply now</a>
      </div>
      <div class="w-1/2 lg:w-2/12 text-center md:text-center lg:text-center lg:order-2">
        <?php
          $logo = get_field('header_logo', 'option');
          ?>
        <a href="<?php echo get_home_url(); ?>"><img class="m-auto w-24 lg:w-40" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"></a>          
        
      </div>
      <div class="w-1/4 lg:w-5/12 text-white text-right lg:text-left">
        <nav class="hidden lg:flex">
          <ul class="flex items-center gap-x-6">
            <?php 
              foreach ($menu_items as $menu_item) {
                echo '<li><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
              }
            ?>
          </ul>
        </nav>
        <div class="hamburger lg:order-1 mr-0 ml-auto lg:hidden relative w-8 h-[22px] cursor-pointer transition-all duration-[0.25s] z-[999] md:w-[40px]" id="hamburger">
          <span class="hamburger-top w-8 h-[3px] absolute top-0 left-0 rotate-0 transition-all duration-500 translate-y-0 md:w-[40px] bg-white"></span>
          <span class="hamburger-middle w-8 h-[3px] absolute top-0 left-0 rotate-0 transition-all duration-500 translate-y-[10px] md:w-[40px] bg-white"></span>
          <span class="hamburger-bottom w-8 h-[3px] absolute top-0 left-0 rotate-0 transition-all duration-500 translate-y-[20px] md:w-[40px] bg-white"></span>
        </div>
      </div>
      
    </div>
    <div class="mobile-menu z-40 lg:hidden" id="mobile-menu">
    <nav class="flex flex-col items-center justify-center h-full text-white">
      <?php 
        foreach ($menu_items as $menu_item) {
          echo '<a class="headingThree text-xl mb-2" href="' . $menu_item->url . '">' . $menu_item->title . '</a>';
        }
      ?>
    </nav>
  </div>
</header>

<style>
	.header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 100;
  background-color: transparent;
  transition: background-color 0.3s ease-in-out;
  }

.header.scrolled {
  background-color: black;
}

.header-logo {
  font-size: 1.5rem;
  font-weight: bold;
  color: white;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.header-menu {
  display: flex;
  align-items: center;
  color: white;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-size: 0.875rem;
  font-weight: bold;
  list-style: none;
  margin: 0;
  padding: 0;
}

.header-menu-item {
  margin-left: 1.5rem;
}

.header-cta {
  background-color: white;
  color: black;
  padding: 0.75rem 1.5rem;
  border-radius: 5px;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-size: 0.875rem;
  font-weight: bold;
  transition: background-color 0.3s ease-in-out;
}

.header-cta:hover {
  background-color: black;
  color: white;
  cursor: pointer;
}

.header-toggle {
  display: none;
  cursor: pointer;
  margin-left: 1rem;
}

@media (max-width: 780px) {
  .header {
    padding: 1rem;
  }

  .header-menu {
    display: none;
  }

  .header-toggle {
    display: block;
  }

  .header-cta {
    margin-right: 1rem;
  }
}


.mobile-menu {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: #000;
  z-index: 99999;
  transform: translateX(100%);
  transition: transform 0.3s ease-in-out;
}

.mobile-menu.open {
  transform: translateX(0);
}




</style>

<script>



const header = document.querySelector('header');
let prevScrollPos = window.pageYOffset;

window.onscroll = function() {
  let currentScrollPos = window.pageYOffset;
  if (currentScrollPos > 100 && prevScrollPos > currentScrollPos) {
    header.style.top = "0";
    header.style.backgroundColor = "black";
  } else {
		if (currentScrollPos < 100) {
    	header.style.top = "0";
	} else {
		header.style.top = "-110px";
	}
	
    header.style.backgroundColor = "transparent";
  }
  prevScrollPos = currentScrollPos;
}

const hamburger = document.querySelector("#hamburger");
const mobileMenu = document.querySelector("#mobile-menu");

hamburger.addEventListener("click", function () {
  hamburger.classList.toggle("open");
  mobileMenu.classList.toggle("open");
});

</script>

<?php include(locate_template('template-parts/preloader.php')); ?>
