<!-- Contact Button -->
<a href="<?php echo esc_url( drras_get_permalink( 'contact' ) ); ?>"
   role="button"
   title="Contact us today!"
   class="inline-flex items-center gap-x-2 rounded-md bg-gradient-to-b from-gray-700 to-gray-800 px-4 py-2.5 font-semibold text-gray-100 hover:text-white shadow hover:shadow-none transform duration-100 hover:translate-y-px">
	<?php echo drras_get_svg( 'calendar-plus-light', '-ml-0.5 h-5 w-5 fill-current' ); ?>
	<span><?php esc_html_e( drras_phrase( 'contact_us' ) ); ?></span>
</a>
<!-- /Contact Button -->