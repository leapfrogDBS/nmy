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

			include(locate_template('template-parts/apartments/hero.php'));
            include(locate_template('template-parts/apartments/styling.php'));
			
			include(locate_template('template-parts/dublin.php'));
			
			include(locate_template('template-parts/contact.php'));

		
			
		
		?>

	</main><!-- #main -->

<?php
 get_footer(); 

