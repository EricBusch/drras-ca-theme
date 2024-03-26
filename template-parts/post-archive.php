<li id="post-<?php the_ID(); ?>" <?php post_class( 'relative shadow transform transition-all hover:-translate-y-0.5 hover:shadow-lg duration-300 ease-in-out rounded-3xl bg-white' ); ?>>
	<a href="<?php echo get_permalink(); ?>" class="block h-128">
		<?php echo get_the_post_thumbnail( get_the_ID(), 'post-thumbnail', [ 'class' => 'h-[60vh] object-cover object-top rounded-3xl filter saturate-100 shadow' ] ) ?>
		<div class="px-4 py-4">
			<h2 class="text-xl text-center filter drop-shadow-m leading-5">
				<?php the_title(); ?>
			</h2>
			<time datetime="<?php echo get_the_date( 'c' ); ?>"
			      itemprop="datePublished"
			      class="block text-sm text-gray-600 text-center mt-2">
				<?php echo get_the_date(); ?>
			</time>
		</div>
	</a>
</li>
