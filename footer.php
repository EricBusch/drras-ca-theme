</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>
<!-- div#content -->

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="relative border bg-gray-900">

	<?php do_action( 'tailpress_footer' ); ?>

	<div class="border-b border-gray-700">
		<div class="default-w default-px text-white">
			<div class="grid grid-cols-1 md:grid-cols-2 divide-x divide-gray-700 border-x border-gray-700">
				<div class="flex flex-col space-y-6 px-6 py-8 md:py-12">
					<a href="/" class="text-white font-extrabold uppercase">
						<?php esc_html_e( get_field( 'about_heading', 'options' ) ); ?>
					</a>
					<p class="sm:text-center text-sm leading-5 text-gray-200 md:text-left">
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
				<div class="flex flex-col space-y-6 px-6 py-8 md:py-12">
					<h4 class="text-white font-extrabold uppercase">
						<?php esc_html_e( get_field( 'contact_heading', 'options' ) ); ?>
					</h4>
					<p class="sm:text-center my-3 text-sm leading-5 text-gray-200 md:text-left">
						<?php esc_html_e( get_field( 'contact_text', 'options' ) ); ?>
					</p>
					<div class="flex w-full space-x-2">
						<button type="submit"
						        class="inline-flex w-auto flex-shrink-0 cursor-pointer select-none appearance-none items-center justify-center space-x-1 rounded bg-blue-700 px-3 py-2 text-sm font-medium text-white transition focus:outline-none focus:ring-2 focus:ring-purple-700">
							<?php esc_html_e( drras_phrase( 'book_consultation' ) ); ?>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="default-w default-px text-gray-300">
		<div class="grid grid-cols-1 md:grid-cols-2 divide-x divide-gray-700 border-x border-gray-700 text-xs py-4">
			<div class="flex flex-col space-y-6 px-6 py-1 md:py-4">
				<p>
					© <?php esc_html_e( date_i18n( 'Y' ) ); ?>
					<?php esc_html_e( drras_phrase( 'dr_rassouli' ) ); ?>
				</p>
			</div>
			<div class="flex flex-col items-start md:items-end space-y-6 px-6 py-1 md:py-4">
				<nav class="flex flex-row  md:mt-0 mt-4  sm:space-y-0 space-x-3">
					<a href="#" class="transition hover:text-white">
						<?php esc_html_e( drras_phrase( 'terms_of_service' ) ); ?>
					</a>
					<a href="#" class="transition hover:text-white">
						<?php esc_html_e( drras_phrase( 'privacy_policy' ) ); ?>
					</a>
				</nav>
			</div>
		</div>
	</div>

</footer>


</div>
<!-- /div#page -->

<?php wp_footer(); ?>

</body>
</html>