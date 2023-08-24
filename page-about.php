<?php get_header(); ?>


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
						<h1 class="text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-gray-200 via-gray-50 to-gray-400 pb-2">
							<?php drras_kses_e( drras_get_post_field( 'header_title', 'About Dr. Rassouli' ) ); ?>
						</h1>
						<p class="text-lg text-gray-400 my-7">
						<span class="">
							<?php drras_kses_e( drras_get_post_field( 'header_description', 'Dr. Rassouli believes we should all have the opportunity to become who we want to be, who we envision ourselves to be.' ) ); ?>
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

<section class="py-12 lg:py-24">
	<div class="default-w default-px">
		<div class="prose mb-12">
			<?php the_content(); ?>
		</div>

		<h2 class="uppercase font-bold text-sm text-gray-600">Curriculum Vitae</h2>

		<div
			x-data="{activeAccordion: '', setActiveAccordion(id) { this.activeAccordion = (this.activeAccordion == id) ? '' : id }}"
			class="relative w-full mt-6">

			<div x-data="{ id: $id('accordion') }"
			     :class="{ 'text-neutral-900': activeAccordion==id, '': activeAccordion!=id }"
			     class="group">
				<h3 @click="setActiveAccordion(id)" class="flex flex-row items-center select-none cursor-pointer">
					<svg class="w-5 h-5 duration-300 ease-out" :class="{ '-rotate-[45deg]': activeAccordion==id }"
					     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
					     stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"/>
					</svg>
					<span class="font-light text-xl tracking-wide">Education</span>
				</h3>
				<div x-show="activeAccordion==id" x-collapse x-cloak>
					<div class="pl-2">
						<?php if ( have_rows( 'education', 'option' ) ) : ?>
							<?php while ( have_rows( 'education', 'option' ) ) : ?>
								<?php the_row(); ?>
								<?php if ( have_rows( 'items' ) ) : ?>
									<ul class="flex flex-col gap-4 list-none mt-4 border-l border-gray-200 pl-4">
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
					</div>
				</div>
			</div>
		</div>


		<div
			x-data="{activeAccordion: '', setActiveAccordion(id) { this.activeAccordion = (this.activeAccordion == id) ? '' : id }}"
			class="relative w-full mt-6">

			<div x-data="{ id: $id('accordion') }"
			     :class="{ 'text-neutral-900': activeAccordion==id, '': activeAccordion!=id }"
			     class="group">
				<h3 @click="setActiveAccordion(id)" class="flex flex-row items-center select-none cursor-pointer">
					<svg class="w-5 h-5 duration-300 ease-out" :class="{ '-rotate-[45deg]': activeAccordion==id }"
					     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
					     stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"/>
					</svg>
					<span class="font-light text-xl tracking-wide">Appointments, Licensures & Memberships</span>
				</h3>
				<div x-show="activeAccordion==id" x-collapse x-cloak>
					<div class="pl-2">
						<?php if ( have_rows( 'appointments', 'option' ) ) : ?>
							<?php while ( have_rows( 'appointments', 'option' ) ) : ?>
								<?php the_row(); ?>
								<?php if ( have_rows( 'items' ) ) : ?>
									<ul class="flex flex-col gap-4 list-none mt-4 border-l border-gray-200 pl-4">
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
					</div>
				</div>
			</div>
		</div>


		<div
			x-data="{activeAccordion: '', setActiveAccordion(id) { this.activeAccordion = (this.activeAccordion == id) ? '' : id }}"
			class="relative w-full mt-6">

			<div x-data="{ id: $id('accordion') }"
			     :class="{ 'text-neutral-900': activeAccordion==id, '': activeAccordion!=id }"
			     class="group">
				<h3 @click="setActiveAccordion(id)" class="flex flex-row items-center select-none cursor-pointer">
					<svg class="w-5 h-5 duration-300 ease-out" :class="{ '-rotate-[45deg]': activeAccordion==id }"
					     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
					     stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"/>
					</svg>
					<span class="font-light text-xl tracking-wide">Publications</span>
				</h3>
				<div x-show="activeAccordion==id" x-collapse x-cloak>
					<div class="pl-2">
						<?php if ( have_rows( 'publications', 'option' ) ) : ?>
							<?php while ( have_rows( 'publications', 'option' ) ) : ?>
								<?php the_row(); ?>
								<?php if ( have_rows( 'items' ) ) : ?>
									<ul class="flex flex-col gap-4 list-none mt-4 border-l border-gray-200 pl-4">
										<?php while ( have_rows( 'items' ) ) : ?>
											<?php the_row(); ?>
											<li class="flex flex-col space-y-0">
												<span class="text-gray-700 text-sm">
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
			</div>
		</div>

		<h2 class="uppercase font-bold text-sm text-gray-600 mt-8">Certification & Membership</h2>

		<?php if ( have_rows( 'certifications', 'option' ) ) : ?>
			<?php while ( have_rows( 'certifications', 'option' ) ) : ?>
				<?php the_row(); ?>
				<?php if ( have_rows( 'items' ) ) : ?>
					<div class="grid grid-cols-6 text-gray-400 gap-8 mt-6">
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
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>

	</div>
</section>


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
