<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

		<header class="relative  bg-white">
			<div class="flex items-center justify-between h-24 mx-auto default-w default-px">
				<a href="#"
				   class="relative z-10 flex items-center w-auto text-2xl font-extrabold leading-none text-white select-none">
					<img class="max-h-12"
					     src="https://drrassouli.ca/static/c4ca84e66123312cdeae1f4f1f4f29e2/00f6e/dr-rassouli-facial-cosmetic-surgery-logo.png">
				</a>
				<nav class="items-center justify-center hidden space-x-8 font-light text-gray-200 md:flex">
					<a href="#_"
					   class="relative inline-block text-base text-gray-400 transition duration-150 ease hover:text-gray-200">
						<span class="block">Home</span>
					</a>
					<a href="#_"
					   class="relative inline-block text-base text-gray-400 transition duration-150 ease hover:text-gray-200">
						<span class="block">Treatments</span>
					</a>
					<a href="#_"
					   class="relative inline-block text-base text-gray-400 transition duration-150 ease hover:text-gray-200">
						<span class="block">About</span>
					</a>
					<a href="#_"
					   class="inline-flex items-center justify-center px-4 py-2 text-base leading-6 text-white whitespace-no-wrap bg-gray-700 border border-gray-700 rounded-md shadow-sm hover:bg-gray-600">
						Contact Us
					</a>
				</nav>
				<!-- Mobile Button -->
				<div class="flex items-center justify-center h-full text-gray-200 md:hidden">
					<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
					     xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						      d="M4 8h16M4 16h16"></path>
					</svg>
				</div>
			</div>

	</header>


	<div>
		<div class="lg:flex lg:justify-between lg:items-center border-b py-6">
			<div class="flex justify-between items-center">
				<div>
					<?php if ( has_custom_logo() ) : ?>
						<?php the_custom_logo(); ?>
					<?php else: ?>
						<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold text-lg uppercase">
							<?php echo get_bloginfo( 'name' ); ?>
						</a>
						<p class="text-sm font-light text-gray-600">
							<?php echo get_bloginfo( 'description' ); ?>
						</p>
					<?php endif; ?>
				</div>

				<div class="lg:hidden">
					<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
						<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
						     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
								<g id="icon-shape">
									<path
										d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
										id="Combined-Shape"></path>
								</g>
							</g>
						</svg>
					</a>
				</div>
			</div>

			<?php
			wp_nav_menu(
				array(
					'container_id'    => 'primary-menu',
					'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
					'menu_class'      => 'lg:flex lg:-mx-4',
					'theme_location'  => 'primary',
					'li_class'        => 'lg:mx-4',
					'fallback_cb'     => false,
				)
			);
			?>
		</div>
	</div>
	</header>

	<div id="content" class="site-content flex-grow">

		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
