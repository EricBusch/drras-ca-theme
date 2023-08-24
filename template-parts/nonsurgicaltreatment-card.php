<?php
/**
 * @var array $args Data passed in from parent template.
 */
$treatment = $args['treatment'];
?>
<a href="<?php echo esc_url( get_field( 'treatment_external_link', $treatment->ID ) ); ?>" target="_blank" rel="noopener"
   class="flex flex-row space-x-4 items-center overflow-hidden rounded-xl shadow-md hover:shadow transform duration-100 hover:translate-y-0.5 group bg-white">
	<div class="bg-cover bg-no-repeat bg-center w-1/2 h-36"
	     style="background-image: url(<?php echo drras_get_acf_image_field_url( 'content_image', $treatment->ID, 'medium_large' ); ?>)">
	</div>
	<div class="flex flex-col w-1/2 space-y-1.5 pr-4">
		<span class="uppercase text-xs text-gray-600">Non-surgical</span>
		<h3 class="font-medium text-2xl leading-6"><?php esc_html_e( $treatment->post_title ); ?></h3>
		<div class="flex flex-row items-center space-x-1 text-sm text-gray-500">
			<span class="italic"><span class="hidden sm:inline-block">Learn more at </span> <span class="underline">ProfileMC.ca</span></span>
			<?php echo drras_get_svg( 'arrow-right-regular', 'w-3 h-3 fill-current transform duration-100 group-hover:translate-x-0.5' ); ?>
		</div>
	</div>
</a>