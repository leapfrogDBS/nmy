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
		
		?>

	</main><!-- #main -->

<?php
get_footer();
