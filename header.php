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

	<header x-data="{ open: false }" class="relative bg-white border-b border-gray-200">

		<div class="flex items-center justify-between h-24 md:h-32 mx-auto default-w default-px">

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
					'container_class' => 'hidden mt-4 p-4 sm:mt-0 sm:p-0 sm:bg-transparent sm:block text-sm text-gray-600 uppercase tracking-wider',
					'menu_class'      => 'sm:flex sm:-mx-4',
					'theme_location'  => 'primary',
					'li_class'        => 'sm:mx-2 md:mx-4',
					'fallback_cb'     => false,
				] );
				?>
				<!-- /Primary Menu -->

				<?php get_template_part( 'template-parts/button', 'contact' ); ?>

				<!-- Mobile Button -->
				<div @click="open = !open" class="flex items-center justify-center h-full text-gray-500 sm:hidden">
					<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
					     xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round"
						      stroke-linejoin="round"
						      stroke-width="2"
						      d="M4 8h16M4 16h16">
						</path>
					</svg>
				</div>
				<!-- /Mobile Button -->

			</div>
		</div>


		<!-- Mobile Menu -->
		<div x-show="open" x-cloak class="default-w default-px bg-white py-6">
			<?php
			$items = wp_get_nav_menu_items( 'primary-menu' );
			$phone = get_field( 'phone_number', 'options' );
			$email = get_field( 'email_address', 'options' );
			?>
			<div class="grid grid-cols-2">

				<nav
					class="flex flex-col gap-y-4">
					<?php foreach ( $items as $item ) : ?>
						<?php echo drras_get_menu_item_markup( $item, [ 'class' => 'text-sm text-gray-600 uppercase tracking-wider' ] ); ?>
					<?php endforeach; ?>
				</nav>

				<div class="flex flex-col space-y-2 text-xs">
					<strong class="mb-2">Contact Us</strong>
					<?php if ( $phone ) : ?>
						<a href="<?php echo drras_get_phone_href( $phone ); ?>"
						   class="flex flex-row items-center space-x-2 py-1"
						   title="Phone us">
							<?php echo drras_get_svg( 'phone-rotary-regular', 'w-4 h-4 fill-gray-300 shrink-0' ); ?>
							<span class="whitespace-nowrap"><?php esc_html_e( $phone ); ?></span>
						</a>
					<?php endif; ?>

					<?php if ( $email ) : ?>
						<a href="<?php echo drras_get_email_href( $email ); ?>"
						   class="flex flex-row items-center space-x-2 py-1"
						   title="Email us">
							<?php echo drras_get_svg( 'at-regular', 'w-4 h-4 fill-gray-300 shrink-0' ); ?>
							<span class="whitespace-nowrap"><?php esc_html_e( $email ); ?></span>
						</a>
					<?php endif; ?>

				</div>
			</div>
		</div>
		<!-- /Mobile Menu -->

	</header>

	<!-- div#content -->
	<div id="content" class="site-content flex-grow">
		<?php do_action( 'tailpress_content_start' ); ?>
		<main>
