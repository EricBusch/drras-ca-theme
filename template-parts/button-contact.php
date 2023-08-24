<!-- Contact Button -->
<a href="<?php echo esc_url( drras_get_permalink( 'contact' ) ); ?>"
   role="button"
   title="Contact us today!"
   class="inline-flex items-center gap-x-2 rounded-md bg-gradient-to-b from-profile-yellow-light to-profile-yellow-dark px-4 md:px-6 py-2.5 whitespace-nowrap md:py-3.5 font-semibold text-black text-opacity-80 hover:text-opacity-95 shadow hover:shadow-none transform duration-100 hover:translate-y-px">
	<?php echo drras_get_svg( 'calendar-plus-light', '-ml-0.5 h-5 w-5 fill-current hidden sm:block' ); ?>
	<span class="leading-none"><?php esc_html_e( drras_phrase( 'contact_us' ) ); ?></span>
</a>
<!-- /Contact Button -->