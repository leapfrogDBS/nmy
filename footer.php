<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nmy
 */

?>



	<footer id="colophon" class="site-footer bg-cover py-24 text-white" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/footer-background.svg)">
		<div class="container">
			<div class="row grid-cols-5 gap-x-6">
				<div class="col flex flex-col gap-y-12 col-span-1">
					<?php
					// get custom field footer_logo image and display
					$footer_logo = get_field('footer_logo', 'option');
					if( !empty( $footer_logo ) ): ?>
						<img class="w-48" src="<?php echo esc_url($footer_logo['url']); ?>" alt="<?php echo esc_attr($footer_logo['alt']); ?>" />
					<?php endif; ?>
								
					<p class="bodyText">Newmarket Yards,<br>Dublin 8</p>

					<?php
					// loop social_media_account custom field repeater and get sm_icon and sm_link
					if( have_rows('social_media_account', 'option') ): ?>
						<div class="flex gap-x-4">
					<?php
						while ( have_rows('social_media_account', 'option') ) : the_row();
							$sm_icon = get_sub_field('sm_icon');
							$sm_link = get_sub_field('sm_link'); ?>
							
							<a href="<?php echo $sm_link; ?>" target="_blank">
								<p class="text-2xl text-white"><?php echo $sm_icon; ?></p>
							</a>
							<?php
						endwhile; ?>
						</div>
					<?php
					endif;
					?>
				</div>
				<div class="col col-span-1">
					<p class="bodyText mb-8">Apartments</p>
					<p class="bodyText">Location</p>
				</div>
				<div class="col col-span-1">
					<p class="bodyText mb-8">Apartments</p>
					<p class="bodyText">Location</p>
				</div>
				<div class="col col-span-1">
					<p class="bodyText mb-8"><i class="fa-solid fa-circle-info"></i> Apartments</p>
					<p class="bodyText"><i class="fa-solid fa-download"></i> Location</p>
				</div>
				<div class="col col-span-1">
					<p class="bodyText mb-4 font-happy italic">Start your application here.</p>
					<a href="#" class="whiteCtaButton text-black bg-white py-2 px-4">Apply Now</a>
				</div>
				
			</div>
			<div class="row mt-12">
				<div class="col flex justify-between">
					<p class="subtitleTwo">© 2023 Newmarket Yards. All right reserved. Designed by Rowdy Studio. CGIs are for illustrative purposes only.</p>
					<p class="subtitleTwo">Privacy Policy</p>
				</div>
			</div>

			
		</div>			
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
