<?php get_header(); ?>

<!-- Hero -->
<div class="relative w-full overflow-hidden">
	<div class="bg-gray-900">
		<div class="relative px-8 py-10 mx-auto max-w-7xl">
			<div
				class="absolute top-0 right-0 hidden w-full h-full -ml-32 transform scale-100 translate-x-1/2 translate-y-20 bg-gray-800 md:block -rotate-12 opacity-90"></div>
			<div class="flex flex-col items-center justify-between w-full md:flex-row">
				<div
					class="flex flex-col items-start justify-center w-full pt-10 pb-10 -mt-10 md:w-1/2 md:pb-24 md:pr-16">
					<div
						class="px-3 text-sm font-medium py-1.5 rounded-md bg-gray-800 mb-4 mt-6 text-gray-400 uppercase">
						<?php drras_kses_e( drras_get_post_field( 'pre_header_text', 'Meet Dr. Rassouli' ) ); ?>
					</div>
					<h1 class="text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-gray-200 via-gray-50 to-gray-400 pb-2">
						<?php drras_kses_e( drras_get_post_field( 'header_text', 'Facial Cosmetic & Reconstructive Surgery Specialist' ) ); ?>
					</h1>
					<p class="text-lg text-gray-400 my-7">
						<span class="">
							<?php echo drras_get_post_field( 'header_description', 'As a facial cosmetic surgeon, Dr. Rassouli balances his patient\'s vision with modern cosmetic surgery techniques to achieve a natural and desired look.' ); ?>
						</span>
					</p>
					<div class="flex flex-row items-center space-x-4 mx-auto md:mx-0">
						<a href="<?php echo drras_get_permalink( 'contact' ) ?>"
						   title="Contact us"
						   class="w-full px-5 py-2 text-lg font-normal text-center text-black text-opacity-90 bg-profile-yellow-light rounded-lg md:w-auto whitespace-nowrap">
							<?php drras_kses_e( drras_phrase( 'contact_us' ) ); ?>
						</a>
						<a href="<?php echo drras_get_permalink( 'treatments' ) ?>"
						   title="View available treatments"
						   class="w-full px-5 py-2 text-lg font-normal text-center text-profile-yellow-light ring-1 ring-profile-yellow-light bg-transparent rounded-lg md:w-auto whitespace-nowrap">
							<?php drras_kses_e( drras_phrase( 'view_treatments' ) ); ?>
						</a>
					</div>
				</div>
				<div class="relative flex items-center justify-center w-full md:w-1/2 md:pt-0">
					<img
						src="<?php echo drras_get_acf_image_field_url( 'header_image', get_the_ID(), 'medium_large' ); ?>"
						class="relative w-full h-auto max-w-sm md:w-96 rounded-xl shadow-xl"
						alt="Dr. Rassouli - Cosmetic Surgeon in Owen Sound, Ontario">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Hero -->

<!-- Featured Treatments -->
<section class="py-12 lg:py-24">
	<div class="max-w-7xl mx-auto px-8 w-full">
		<div class="flex flex-col items-center">
			<div class="uppercase text-gray-600 font-light text-center">
				<?php drras_kses_e( drras_get_post_field( 'treatment_pre_header_text', 'Schedule a Consultation' ) ); ?>
			</div>
			<h3 class="text-5xl font-extrabold gray-800 mt-2 mb-4 text-center">
				<?php drras_kses_e( drras_get_post_field( 'treatment_header_text', 'Cosmetic Treatments' ) ); ?>
			</h3>
			<p class="text-xl text-gray-500 text-center">
				<?php drras_kses_e( drras_get_post_field( 'treatment_description', 'We offer the following surgical and non-surgical cosmetic procedures.' ) ); ?>
			</p>
			<?php if ( $treatments = get_field( 'featured_treatments' ) ) : ?>
				<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 lg:gap-12 mt-12">
					<?php foreach ( $treatments as $key => $treatment ) : ?>
						<a href="<?php echo get_permalink( $treatment->ID ); ?>"
						   title="Learn more about <?php esc_attr_e( $treatment->post_title ); ?>"
						   class="flex flex-row items-center justify-center aspect-square shadow-lg rounded overflow-hidden p-4 bg-gradient-to-b from-white via-white to-gray-50/70 hover:to-white border border-gray-100 hover:shadow-sm transition duration-200 group">
							<div class="flex flex-col items-center">
								<img
									src="<?php echo wp_get_attachment_image_url( get_field( 'header_image', $treatment->ID )['ID'] ); ?>"
									alt="Image for <?php esc_attr_e( $treatment->post_title ); ?>"
									class="aspect-square w-36 h-36 lg:w-24 lg:h-24 rounded shadow group-hover:shadow-lg transition"
								/>
								<h4 class="font-bold text-center mt-4"><?php drras_kses_e( get_field( 'treatment_short_name', $treatment->ID ) ); ?></h4>
								<p class="text-center text-sm text-gray-600"><?php drras_kses_e( $treatment->post_title ); ?></p>
							</div>
						</a>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
			<div
				class="relative flex flex-col justify-center mt-12">
				<a href="<?php echo drras_get_permalink( 'treatments' ); ?>"
				   role="button"
				   title="View all available treatments"
				   class="inline-flex items-center gap-x-2 rounded-md bg-gradient-to-b from-profile-yellow-light to-profile-yellow-dark px-6 py-5 font-semibold text-black text-opacity-80 hover:text-opacity-95 shadow hover:shadow-none transform duration-100 hover:translate-y-px leading-none">
					<?php drras_kses_e( drras_get_post_field( 'treatment_see_all_link_text', 'See all available treatments' ) ); ?>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- /Featured Treatments -->

<!-- Certifications and Memberships -->
<section class="py-20 bg-gray-100 tails-selected-element">
	<div class="flex flex-col items-start px-10 mx-auto space-y-20 lg:space-y-0 lg:flex-row max-w-7xl">

		<div
			class="flex flex-col justify-center flex-shrink-0 w-full h-full max-w-lg space-y-5 text-gray-800 lg:max-w-none lg:w-5/12 xl:w-6/12">
			<div class="flex items-center space-x-5 text-gray-500" data-primary="blue-500">
				<div class="w-20 h-0.5 bg-gray-400"></div>
				<p class="text-sm font-bold tracking-wide uppercase">
					<?php drras_kses_e( drras_get_post_field( 'certification_pre_header_text', 'Dr. Rassouli' ) ); ?>
				</p>
			</div>
			<h2 class="text-4xl font-black xl:text-5xl">
				<?php drras_kses_e( drras_get_post_field( 'certification_header_text', 'Certifications & Memberships' ) ); ?>
			</h2>
			<div
				class="relative flex flex-col items-start w-full space-y-5 sm:items-center sm:flex-row sm:space-y-0 sm:space-x-3">
				<a href="<?php echo drras_get_post_field( 'certification_learn_more_page', '#' ); ?>"
				   role="button"
				   title="Learn more about Dr. Rassouli"
				   class="inline-flex items-center gap-x-2 rounded-md bg-gradient-to-b from-gray-800 to-gray-900 px-5 py-4 font-semibold text-gray-50 hover:text-white shadow hover:shadow-none transform duration-100 hover:translate-y-px leading-none">
					<?php drras_kses_e( drras_get_post_field( 'certification_button_text', 'Learn More' ) ); ?>
				</a>
			</div>
		</div>

		<div class="max-w-lg lg:max-w-none lg:w-7/12 lg:pl-8 xl:w-6/12">
			<?php if ( have_rows( 'certifications', 'option' ) ) : ?>
				<?php while ( have_rows( 'certifications', 'option' ) ) : ?>
					<?php the_row(); ?>
					<?php if ( have_rows( 'items' ) ) : ?>
						<div class="grid grid-cols-3 text-gray-400 gap-8">
							<?php
							$max = 9;
							$i   = 0;
							?>
							<?php while ( have_rows( 'items' ) ) : ?>
								<?php the_row(); ?>
								<div
									class="flex flex-row items-center justify-center bg-white shadow-md rounded-md aspect-square p-6"
									title="<?php esc_attr_e( get_sub_field( 'title' ) ); ?>">
									<img src="<?php echo drras_get_acf_image_sub_field_url( 'image', 'medium' ) ?>"
									     alt="<?php esc_attr_e( get_sub_field( 'title' ) ); ?>"
									     class=""
									/>
								</div>
								<?php $i ++; ?>
								<?php
								if ( $max === $i ) {
									break;
								}
								?>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<!-- /Certifications and Memberships -->

<?php get_footer(); ?>
