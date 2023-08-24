<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script src="//cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js" defer></script>
	<script src="//unpkg.com/alpinejs" defer></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<!-- div#page -->
<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	<header class="relative bg-white border-b border-gray-200">

		<div class="flex items-center justify-between h-32 mx-auto default-w default-px">

			<!-- Logo -->
			<a href="/"
			   class="relative z-10 flex items-center w-auto text-2xl font-extrabold leading-none text-white select-none"
			   title="Return to homepage">
				<img class="max-h-12"
				     src="/wp-content/uploads/2023/08/dr-rassouli-facial-cosmetic-surgery-logo.jpg"
				     alt="Dr. Rassouli Cosmetic Surgery Logo"/>
			</a>
			<!-- /Logo -->

			<div class="flex flex-row items-center space-x-8">

				<!-- Primary Menu -->
				<?php
				wp_nav_menu( [
					'container_id'    => 'primary-menu',
					'container_class' => 'hidden mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block text-sm text-gray-600 uppercase tracking-wider',
					'menu_class'      => 'lg:flex lg:-mx-4',
					'theme_location'  => 'primary',
					'li_class'        => 'lg:mx-4',
					'fallback_cb'     => false,
				] );
				?>
				<!-- /Primary Menu -->

				<?php get_template_part( 'template-parts/button', 'contact' ); ?>

				<!-- Mobile Button -->
				<div class="flex items-center justify-center h-full text-gray-200 md:hidden">
					<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
					     xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						      d="M4 8h16M4 16h16"></path>
					</svg>
				</div>
				<!-- /Mobile Button -->

			</div>

		</div>
	</header>

	<!-- div#content -->
	<div id="content" class="site-content flex-grow">
		<?php do_action( 'tailpress_content_start' ); ?>
		<main>
