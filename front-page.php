<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nmy
 */

get_header();
?>

	<main id="primary" class="site-main">
        <?php

			include(locate_template('template-parts/home/hero.php'));
			include(locate_template('template-parts/home/meet-a-side.php'));
			include(locate_template('template-parts/home/what-is.php'));
			include(locate_template('template-parts/home/life-at.php'));
			include(locate_template('template-parts/home/featured-amenities.php'));

			include(locate_template('template-parts/home/extra.php'));
		
		?>

	</main><!-- #main -->

<?php
get_footer();

