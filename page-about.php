<?php get_header(); ?>



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
