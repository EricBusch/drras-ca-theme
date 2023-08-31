</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>
<!-- div#content -->

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="relative">

	<?php do_action( 'tailpress_footer' ); ?>

	<div class="bg-gray-900 text-white">
		<div class="md:border-b border-gray-700">
			<div class="default-w default-px border-x border-gray-700">
				<div class="grid grid-cols-1 md:grid-cols-2 md:divide-x divide-gray-700">

					<div class="flex flex-col space-y-6 px-6 py-8 md:py-12">
						<a href="/" class="text-white font-extrabold uppercase">
							<?php esc_html_e( get_field( 'about_heading', 'options' ) ); ?>
						</a>
						<p class="leading-5 text-gray-200 text-base">
							<?php esc_html_e( get_field( 'about_text', 'options' ) ); ?>
						</p>
						<?php $items = wp_get_nav_menu_items( 'primary-menu' ); ?>
						<nav
							class="flex flex-col flex-wrap sm:items-center space-y-4 text-xs font-medium text-gray-200 sm:flex-row sm:space-x-3 lg:space-x-4 sm:space-y-0">
							<?php foreach ( $items as $item ) : ?>
								<?php echo drras_get_menu_item_markup( $item, [ 'class' => 'hover:text-white' ] ); ?>
							<?php endforeach; ?>
						</nav>
					</div>

					<div class="flex flex-col space-y-6 px-6 py-8 md:py-12 text-sm ">
						<h4 class="text-white font-extrabold uppercase">
							<?php esc_html_e( get_field( 'contact_heading', 'options' ) ); ?>
						</h4>
						<p class="my-3 leading-5 text-gray-200 text-base">
							<?php esc_html_e( get_field( 'contact_text', 'options' ) ); ?>
						</p>

						<?php
						$address    = nl2br( get_field( 'business_address', 'options' ) );
						$map_url    = get_field( 'google_map_url', 'options' );
						$phone      = get_field( 'phone_number', 'options' );
						$email      = get_field( 'email_address', 'options' );
						$fine_print = get_field( 'fine_print', 'options' );
						?>


						<div class="grid grid-cols-1 lg:grid-cols-2">

							<div class="flex flex-col space-y-1 text-gray-300">

								<?php if ( $phone ) : ?>
									<a href="<?php echo drras_get_phone_href( $phone ); ?>"
									   class="flex flex-row items-center space-x-2 py-1"
									   title="Phone us">
										<?php echo drras_get_svg( 'phone-rotary-regular', 'w-4 h-4 fill-gray-300' ); ?>
										<span><?php esc_html_e( $phone ); ?></span>
									</a>
								<?php endif; ?>

								<?php if ( $email ) : ?>
									<a href="<?php echo drras_get_email_href( $email ); ?>"
									   class="flex flex-row items-center space-x-2 py-1"
									   title="Email us">
										<?php echo drras_get_svg( 'at-regular', 'w-4 h-4 fill-gray-300' ); ?>
										<span><?php esc_html_e( $email ); ?></span>
									</a>
								<?php endif; ?>


								<?php if ( $map_url ) : ?>
									<a href="<?php echo esc_url( $map_url ); ?>"
									   target="_blank"
									   rel="noopener"
									   class="flex flex-row items-center space-x-2 py-1"
									   title="Map us">
										<?php echo drras_get_svg( 'location-dot-regular', 'w-4 h-4 fill-gray-300' ); ?>
										<span>Map</span>
									</a>
								<?php endif; ?>
							</div>

							<?php if ( $address ) : ?>
								<address class="not-italic text-gray-300 mt-6 lg:mt-0">
									<?php echo $address; ?>
								</address>
							<?php endif; ?>

						</div>

					</div>
				</div>
			</div>
		</div>

		<div>
			<div class="default-w default-px border-x border-gray-700 text-gray-300 text-sm">
				<div class="grid grid-cols-1 md:grid-cols-2 md:divide-x divide-gray-700">
					<div class="flex flex-col space-y-6 p-6">
						<p>
							© <?php esc_html_e( date_i18n( 'Y' ) ); ?>
							<?php esc_html_e( drras_phrase( 'dr_rassouli' ) ); ?>
						</p>
					</div>
					<div class="flex flex-row items-center space-x-3 p-6">
						<?php if ( $fine_print ) : ?>
							<div class="text-xs">
								<?php drras_kses_e( $fine_print ); ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

</footer>


</div>
<!-- /div#page -->

<?php wp_footer(); ?>

</body>
</html>
