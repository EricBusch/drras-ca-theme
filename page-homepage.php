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
						class="px-3 text-sm font-medium py-1.5 rounded-md bg-gray-800 opacity-100 mb-10 text-gray-400 uppercase">
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
						   class="w-full px-5 py-2 text-lg font-normal text-center text-gray-800 bg-gray-100 rounded-lg md:w-auto whitespace-nowrap">
							<?php drras_kses_e( drras_phrase( 'contact_us' ) ); ?>
						</a>
						<a href="<?php echo drras_get_permalink( 'treatments' ) ?>"
						   title="View available treatments"
						   class="w-full px-5 py-2 text-lg font-normal text-center text-white ring bg-transparent rounded-lg md:w-auto whitespace-nowrap">
							<?php drras_kses_e( drras_phrase( 'view_treatments' ) ); ?>
						</a>
					</div>
				</div>
				<div class="relative flex items-center justify-center w-full md:w-1/2 md:pt-0">
					<img
						src="<?php echo drras_get_acf_image_field_url( 'header_image', get_the_ID(), 'medium_large' ); ?>"
						class="relative w-full h-auto h-full max-w-sm md:w-96 rounded-xl shadow-xl"
						alt="Dr. Rassouli - Cosmetic Surgeon in Owen Sound, Ontario">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Hero -->

<section class="py-12">
	<div class="max-w-7xl mx-auto px-8 w-full">
		<div class="flex flex-col items-center">
			<div class="uppercase text-gray-600 font-light">
				<?php drras_kses_e( drras_get_post_field( 'treatment_pre_header_text', 'Schedule a Consultation' ) ); ?>
			</div>
			<h3 class="text-5xl font-extrabold gray-800 mt-2 mb-4">
				<?php drras_kses_e( drras_get_post_field( 'treatment_header_text', 'Cosmetic Treatments' ) ); ?>
			</h3>
			<p class="text-xl text-gray-500">
				<?php drras_kses_e( drras_get_post_field( 'treatment_description', 'We offer the following surgical and non-surgical cosmetic procedures.' ) ); ?>
			</p>


			<?php if ( have_rows( 'education', 'option' ) ) : ?>
				<?php while ( have_rows( 'education', 'option' ) ) : ?>
					<?php the_row(); ?>
					<?php if ( have_rows( 'items' ) ) : ?>
						<ul class="flex flex-col gap-4 list-none mt-12">
							<?php while ( have_rows( 'items' ) ) : ?>
								<?php the_row(); ?>
								<li class="flex flex-col space-y-0">
									<span class="text-gray-700">
										<?php drras_kses_e( get_sub_field( 'title' ) ); ?>
									</span>
									<?php if ( $desc = get_sub_field( 'description' ) ) : ?>
										<span class="text-sm text-gray-500">
											<?php drras_kses_e( $desc ); ?>
										</span>
									<?php endif; ?>
								</li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>


			<?php if ( have_rows( 'appointments', 'option' ) ) : ?>
				<?php while ( have_rows( 'appointments', 'option' ) ) : ?>
					<?php the_row(); ?>
					<?php if ( have_rows( 'items' ) ) : ?>
						<ul class="flex flex-col gap-4 list-none mt-12">
							<?php while ( have_rows( 'items' ) ) : ?>
								<?php the_row(); ?>
								<li class="flex flex-col space-y-0">
									<span class="text-gray-700">
										<?php drras_kses_e( get_sub_field( 'title' ) ); ?>
									</span>
									<?php if ( $desc = get_sub_field( 'description' ) ) : ?>
										<span class="text-sm text-gray-500">
											<?php drras_kses_e( $desc ); ?>
										</span>
									<?php endif; ?>
								</li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>


			<?php if ( have_rows( 'publications', 'option' ) ) : ?>
				<?php while ( have_rows( 'publications', 'option' ) ) : ?>
					<?php the_row(); ?>
					<?php if ( have_rows( 'items' ) ) : ?>
						<ul class="flex flex-col gap-4 list-none mt-12">
							<?php while ( have_rows( 'items' ) ) : ?>
								<?php the_row(); ?>
								<li class="flex flex-col space-y-0">
									<span class="text-gray-700">
										<?php drras_kses_e( drras_boldify_rassouli( get_sub_field( 'citation' ) ) ); ?>
									</span>
								</li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>


		</div>
	</div>
</section>


<section class="py-20 bg-gray-100 tails-selected-element">
	<div class="flex flex-col items-start px-10 mx-auto space-y-20 lg:space-y-0 lg:flex-row max-w-7xl">

		<div
			class="flex flex-col justify-center flex-shrink-0 w-full h-full max-w-lg space-y-5 text-gray-800 lg:max-w-none lg:w-5/12 xl:w-6/12">
			<div class="flex items-center space-x-5 text-blue-500" data-primary="blue-500">
				<div class="w-20 h-0.5 bg-blue-500" data-primary="blue-500"></div>
				<p class="text-sm font-bold tracking-wide uppercase">Dr. Rassouli</p>
			</div>
			<h2 class="text-4xl font-black xl:text-5xl">Certifications &amp; Memberships</h2>
			<div
				class="relative flex flex-col items-start w-full space-y-5 sm:items-center sm:flex-row sm:space-y-0 sm:space-x-3">
				<a href="#_"
				   class="inline-block w-full px-6 py-4 font-bold text-center text-white bg-blue-600 rounded sm:w-auto"
				   data-primary="blue-600" data-rounded="rounded">Learn More</a>
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


<?php get_footer(); ?>
