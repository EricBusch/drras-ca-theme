<?php get_header(); ?>
<?php the_post(); ?>


	<!-- Hero -->
	<section>
		<div class="relative w-full overflow-hidden">
			<div class="bg-gray-900">
				<div class="relative px-8 py-10 mx-auto max-w-7xl">
					<div
						class="absolute top-0 right-0 hidden w-full h-full -ml-32 transform scale-100 translate-x-1/2 translate-y-20 bg-gray-800 md:block -rotate-12 opacity-90"></div>
					<div class="flex flex-col items-center justify-between w-full md:flex-row">
						<div
							class="flex flex-col items-start justify-center w-full py-10 md:w-1/2 md:py-16 md:pr-16">
							<a href="<?php echo drras_get_permalink( 'treatments' ); ?>"
							   title="View all treatments"
							   class="px-3 text-sm font-medium py-1.5 rounded-md bg-gray-800 opacity-100 mb-6 text-gray-400 uppercase">
								Treatments
							</a>
							<h1 class="text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-gray-200 via-gray-50 to-gray-400 pb-2">
								<?php esc_html_e( get_the_title() ); ?>
							</h1>
							<p class="text-lg text-gray-400 my-7">
						<span class="">
							<?php esc_html_e( get_the_excerpt() ); ?>
						</span>
							</p>
						</div>
						<div class="relative flex items-center justify-center w-full md:w-1/2 md:pt-0">
							<img
								src="<?php echo drras_get_acf_image_field_url( 'header_image', get_the_ID(), 'medium_large' ); ?>"
								class="relative w-full h-auto max-w-sm md:w-80 rounded-xl shadow-xl aspect-square object-cover saturate-[.85]"
								alt="<?php esc_attr_e( get_the_title() ); ?>">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Hero -->

	<!-- Single Treatment Info -->
	<section class="py-12 lg:py-24">
		<div class="default-w default-px">
			<div class="grid grid-cols-1 md:grid-cols-12 gap-12">
				<div
					class="flex flex-row items-center justify-center border border-gray-200 aspect-video rounded-lg shadow-xl md:col-span-6 lg:col-span-4 h-auto overflow-hidden">
					<img src="<?php echo drras_get_acf_image_field_url( 'content_image', get_the_ID(), 'large' ); ?>"
					     alt="Image for <?php esc_attr_e( get_the_title() ); ?>"
					     class="object-contain"
					/>
				</div>
				<div class="prose md:col-span-6 lg:col-span-8">
					<h2 class="font-bold text-lg"><?php esc_html_e( get_the_title() ); ?></h2>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
	<!-- /Single Treatment Info -->


	<!-- Prev/Next Treatment -->
<?php
$prev_treatment = drras_get_prev_surgicaltreatment( get_the_ID() );
$next_treatment = drras_get_next_surgicaltreatment( get_the_ID() );
?>
<?php if ( $prev_treatment && $next_treatment ) : ?>
	<section class="mb-px border-t border-gray-200">
		<div class="default-w md:default-px">
			<div class="flex flex-col md:flex-row items-center gap-x-px">

				<a href="<?php echo esc_url( get_permalink( $prev_treatment->ID ) ); ?>"
				   title="View <?php esc_attr_e( $prev_treatment->post_title ); ?> treatment"
				   class="w-full md:w-1/2 group flex flex-row items-center h-36 md:h-64 bg-gradient-to-r from-white to-gray-100">
					<div class="flex flex-col items-end mr-6 lg:mr-12 gap-2 w-full">
						<img
							src="<?php echo drras_get_acf_image_field_url( 'header_image', $prev_treatment->ID ) ?>"
							alt="Image for <?php esc_attr_e( $prev_treatment->post_title ); ?>"
							class="rounded-md w-16 h-16 aspect-square object-contain ring-2 ring-offset-2 ring-gray-200 group-hover:ring-gray-300 transition duration-300">

						<div class="w-full font-bold flex flex-row items-center justify-end text-xs md:text-sm lg:text-lg space-x-1 md:space-x-2">
							<span class="group-hover:translate-x-0.5 duration-200">
								<?php echo drras_get_svg( 'angles-left-regular' ); ?>
							</span>
							<span class="whitespace-nowrap"><?php esc_html_e( $prev_treatment->post_title ); ?></span>
						</div>
					</div>
				</a>

				<a href="<?php echo esc_url( get_permalink( $next_treatment->ID ) ); ?>"
				   title="View <?php esc_attr_e( $next_treatment->post_title ); ?> treatment"
				   class="w-full md:w-1/2 group flex flex-row items-center h-36 md:h-64 bg-gradient-to-l from-white to-gray-100">
					<div class="flex flex-col items-start ml-6 lg:ml-12 gap-2 w-full">
						<img
							src="<?php echo drras_get_acf_image_field_url( 'header_image', $next_treatment->ID ) ?>"
							alt="Image for <?php esc_attr_e( $next_treatment->post_title ); ?>"
							class="rounded-md w-16 h-16 aspect-square object-contain ring-2 ring-offset-2 ring-gray-200 group-hover:ring-gray-300 transition duration-300">

						<div class="w-full font-bold flex flex-row items-center justify-start text-xs md:text-sm lg:text-lg space-x-1 md:space-x-2">
							<span class="whitespace-nowrap"><?php esc_html_e( $next_treatment->post_title ); ?></span>
							<span class="group-hover:translate-x-0.5 duration-200">
								<?php echo drras_get_svg( 'angles-right-regular' ); ?>
							</span>
						</div>
					</div>
				</a>

			</div>
		</div>
	</section>
<?php endif; ?>
	<!-- /Prev/Next Treatment -->

<?php get_footer(); ?>