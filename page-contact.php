<?php get_header(); ?>


<!-- Hero -->
<section>
	<div class="relative w-full overflow-hidden">
		<div class="bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900">
			<div class="relative px-8 py-6 mx-auto max-w-6xl">
				<div class="flex flex-col items-center justify-between w-full">
					<div class="flex flex-col items-center justify-center w-full py-5 md:py-6">
						<h1 class="text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-gray-200 via-gray-50 to-gray-400 text-center">
							<?php the_title(); ?>
						</h1>
						<p class="text-lg text-gray-400 my-7 text-center max-w-lg">
							<?php drras_kses_e( drras_get_post_field( 'page_description', 'Do you have some questions or want to set up your consultation. Contact us today to begin your new journey!' ) ); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Hero -->

<section class="py-12 lg:py-24">
	<div class="max-w-6xl mx-auto default-px">

		<div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:divide-x divide-gray-200">

			<div class="prose">

				<p><strong>Contact</strong></p>

				<?php the_content(); ?>
			</div>


			<div>

				<?php
				$address = nl2br( get_field( 'business_address', 'options' ) );
				$map_url = get_field( 'google_map_url', 'options' );
				$phone   = get_field( 'phone_number', 'options' );
				$email   = get_field( 'email_address', 'options' );
				?>

				<div
					class="flex flex-col space-y-3 text-gray-800 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-md shadow md:ml-12">

					<?php if ( $phone ) : ?>
						<a href="<?php echo drras_get_phone_href( $phone ); ?>"
						   class="flex flex-row items-center space-x-2 py-1"
						   title="Phone us">
							<?php echo drras_get_svg( 'phone-rotary-regular', 'w-4 h-4 fill-gray-700' ); ?>
							<span><?php esc_html_e( $phone ); ?></span>
						</a>
					<?php endif; ?>

					<?php if ( $email ) : ?>
						<a href="<?php echo drras_get_email_href( $email ); ?>"
						   class="flex flex-row items-center space-x-2 py-1"
						   title="Email us">
							<?php echo drras_get_svg( 'at-regular', 'w-4 h-4 fill-gray-700' ); ?>
							<span><?php esc_html_e( $email ); ?></span>
						</a>
					<?php endif; ?>


					<?php if ( $map_url ) : ?>
						<a href="<?php echo esc_url( $map_url ); ?>"
						   target="_blank"
						   rel="noopener"
						   class="flex flex-row items-center space-x-2 py-1"
						   title="Map us">
							<?php echo drras_get_svg( 'location-dot-regular', 'w-4 h-4 fill-gray-700' ); ?>
							<span>Map</span>
						</a>
					<?php endif; ?>

					<?php if ( $address ) : ?>
						<div>

							<div class="font-bold">Address</div>
							<address class="not-italic text-gray-800">
								<?php echo $address; ?>
							</address>
						</div>
					<?php endif; ?>


				</div>

				<div class="flex flex-col md:ml-12 mt-12">
					<div class="rounded-md overflow-hidden">
						<?php echo do_shortcode( '[google_map_embed width="100%" height="300"]' ); ?>
					</div>
				</div>

			</div>
		</div>


	</div>
</section>


<?php get_footer(); ?>
