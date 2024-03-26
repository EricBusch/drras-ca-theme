<?php get_header(); ?>

<section>
	<div class="default-w default-px">

		<div class="container mx-auto my-8 lg:max-w-6xl">

			<div class="relative flex flex-col py-8">
				<h1 class="text-4xl text-custom-black leading-tight">Blog</h1>
			</div>

			<?php if ( have_posts() ) : ?>
				<ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-10 py-10">
					<?php while ( have_posts() ) : ?>
						<?php the_post(); ?>
						<?php get_template_part( 'template-parts/post', 'archive' ); ?>
					<?php endwhile; ?>
				</ul>
				<div class="flex flex-row space-x-3 w-full text-center mx-auto justify-center text-lg">
					<?php echo paginate_links(); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
