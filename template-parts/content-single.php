<div class="flex flex-col justify-center space-x-0 lg:space-x-12 md:gap-10 xl:gap-16 lg:space-y-0 lg:flex-row lg:items-start lg:max-w-7xl mx-auto w-full px-6">

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'w-full order-2 lg:w-3/5 lg:order-1' ); ?>>

		<a href="<?php echo drras_get_permalink('blog'); ?>" class="uppercase text-sm text-opacity-80 flex flex-row items-center space-x-1 mt-6 md:mt-0"
		   title="View blog">
			<?php echo drras_get_svg( 'angles-right-regular' ); ?>
			<span>Blog</span>
		</a>

		<header class="entry-header mb-4">
			<?php the_title( sprintf( '<h1 class="entry-title text-2xl lg:text-5xl font-extrabold leading-tight mb-1"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
			<time datetime="<?php echo get_the_date( 'c' ); ?>"
			      itemprop="datePublished"
			      class="text-sm text-gray-700">
				<?php echo get_the_date(); ?>
			</time>
		</header>

		<div class="prose md:prose-lg lg:prose-xl max-w-none">
			<?php the_content(); ?>
		</div>

	</article>

	<div class="w-full order-1 lg:w-2/5 lg:order-2 flex flex-col gap-8">
		<?php echo get_the_post_thumbnail( get_the_ID(), 'post-thumbnail', [ 'class' => 'object-cover object-top rounded-3xl filter saturate-100 shadow' ] ) ?>
		<div class="hidden lg:flex flex-col gap-6">
			<hr>
			<div class="flex flex-col gap-4">
				<h3 class="font-bold text-xs uppercase">Available Treatments</h3>
				<div class="flex flex-col gap-6">
					<?php foreach ( drras_get_surgical_treatments() as $treatment ) : ?>
						<?php get_template_part( 'template-parts/surgicaltreatment', 'card', compact( 'treatment' ) ); ?>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>

</div>
