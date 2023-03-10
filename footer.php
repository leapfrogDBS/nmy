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

	<footer id="colophon" class="site-footer bg-cover pt-12 pb-6 text-white relative" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/footer-background.svg)">
		<div class="container">
			<div class="row grid-cols-5 gap-x-6">
				<div class="col flex flex-col gap-y-6 col-span-5 lg:col-span-1">
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

				<div class="col col-span-5 flex mt-8 pb-8 border-b-[1px] border-white border-opacity-10 lg:border-0 lg:col-span-2 lg:pl-16 lg:mt-0 lg:pb-0	">
					<div>
					<p class="bodyTwo mb-4">Apartments</p>
						<p class="bodyTwo">Location</p>
					</div>
					<div class="pl-24">
						<p class="bodyTwo mb-4">Amenities & Spaces</p>
						<p class="bodyTwo">Contact</p>
					</div>
				</div>
				<div class="col col-span-5 py-8 lg:col-span-1 lg:py-0">
					<div class="lg:border-l-[1px] flex lg:flex-col lg:border-white lg:border-opacity-10 lg:pl-6">
						<p class="bodyTwo mb-4"><i class="fa-solid fa-circle-info mr-2"></i> FAQ</p>
						<p class="bodyTwo pl-24 lg:pl-0"><i class="fa-solid fa-download mr-2"></i> Brochure</p>
					</div>
				</div>
				<div class="col col-span-5 lg:col-span-1">
					<p class="bodyTwo mb-4 lg:font-happy lg:italic text-sm">Start your application here.</p>
					<a href="#" class="ctaButtonWhite text-black bg-white">Apply Now</a>
				</div>				
			</div>
			<div class="row mt-12">
				<div class="col flex flex-col lg:flex-row justify-between gap-y-4">
					<p class="subtitleTwo">?? 2023 Newmarket Yards. All right reserved. Designed by Rowdy Studio. CGIs are for illustrative purposes only.</p>
					<p class="subtitleTwo">Privacy Policy</p>
				</div>
			</div>		
		</div>	
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mobile-footer.svg" class="absolute bottom-0 right-0 lg:hidden" alt="footer background">
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
