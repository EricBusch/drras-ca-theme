<?php

/**
 * Theme setup.
 */
function tailpress_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'tailpress' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );
}

add_action( 'after_setup_theme', 'tailpress_setup' );

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'tailpress', tailpress_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'tailpress', tailpress_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts' );

/**
 * Get asset path.
 *
 * @param string $path Path to asset.
 *
 * @return string
 */
function tailpress_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(), get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string $classes String of classes.
 * @param mixed $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string $classes String of classes.
 * @param mixed $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3 );

/**
 * Get SVG from /svg directory.
 *
 * @param string $name
 * @param string $class
 * @param array $attributes
 *
 * @return string
 */
function drras_get_svg( string $name, string $class = 'w-4 h-4 fill-current', array $attributes = [] ): string {

	$filename = drras_get_svg_path( $name );

	if ( ! file_exists( $filename ) ) {
		return '';
	}

	$svg = file_get_contents( $filename );

	if ( ! $svg ) {
		return '';
	}

	$attributes = wp_parse_args( $attributes, [
		'class'       => $class,
		'aria-hidden' => 'true',
	] );

	$attribute_html = '';

	foreach ( $attributes as $key => $value ) {
		$attribute_html .= esc_attr( $key ) . '="' . esc_attr( $value ) . '" ';
	}

	return str_ireplace( '<svg ', '<svg ' . $attribute_html, $svg );
}

/**
 * Get path to SVG.
 *
 * @param string $name
 *
 * @return string
 */
function drras_get_svg_path( string $name ): string {
	if ( ! str_ends_with( $name, '.svg' ) ) {
		$name = $name . '.svg';
	}

	return get_template_directory() . '/svg/' . $name;
}

/**
 * Get SVG URL.
 *
 * @param string $name
 *
 * @return string
 */
function drras_get_svg_url( string $name ): string {
	if ( ! str_ends_with( $name, '.svg' ) ) {
		$name = $name . '.svg';
	}

	return get_template_directory_uri() . '/svg/' . $name;
}


/**
 * Add support for banner across the top of the page.
 */
add_action( 'tailpress_header', function (): void {

	$display = get_field( 'display_banner', 'option' );

	if ( $display !== 'yes' ) {
		return;
	}

	$label    = esc_html( trim( get_field( 'banner_label', 'option' ) ) );
	$text     = esc_html( trim( get_field( 'banner_text', 'option' ) ) );
	$has_link = get_field( 'banner_has_link', 'option' ) === 'yes';
	$url      = esc_url( trim( (string) get_field( 'banner_page_url', 'option' ) ) );
	$color    = trim( get_field( 'banner_colour', 'option' ) );

	if ( ! $label && ! $text ) {
		return;
	}

	$colors = [
		'gray'    => 'bg-gray-600',
		'red'     => 'bg-red-600',
		'orange'  => 'bg-orange-600',
		'amber'   => 'bg-amber-600',
		'yellow'  => 'bg-yellow-600',
		'lime'    => 'bg-lime-600',
		'green'   => 'bg-green-600',
		'emerald' => 'bg-emerald-600',
		'teal'    => 'bg-teal-600',
		'cyan'    => 'bg-cyan-600',
		'sky'     => 'bg-sky-600',
		'blue'    => 'bg-blue-600',
		'indigo'  => 'bg-indigo-600',
		'violet'  => 'bg-violet-600',
		'purple'  => 'bg-purple-600',
		'fuchsia' => 'bg-fuchsia-600',
		'pink'    => 'bg-pink-600',
		'rose'    => 'bg-rose-600',
	];

	$bg_color = $colors[ $color ] ?? 'bg-orange-600';

	$label_html = $label ? '<strong class="font-semibold">' . $label . '</strong>' : '';
	$text_html  = $text ? '<span>' . $text . '</span>' : '';
	$sep_html   = $label_html && $text_html ? '<span aria-hidden="true">&bull;</span>' : '';

	if ( $has_link && $url ) {
		$content = sprintf(
			'<a href="%s" class="flex flex-row items-center justify-center space-x-2">%s%s%s</a>',
			$url, $label_html, $sep_html, $text_html
		);
	} else {
		$content = sprintf(
			'<div class="flex flex-row items-center justify-center space-x-2">%s%s%s</div>',
			$label_html, $sep_html, $text_html
		);
	}

	printf(
		'<div class="%s px-6 py-2.5 sm:px-3.5 text-sm leading-6 text-white text-center">%s</div>',
		$bg_color,
		$content
	);

} );

/**
 * Returns relative path to theme's directory. Untrailinshlashed!
 *
 * @return string
 */
function tailpress_relative_dir(): string {
	$path = '/' . trim( str_replace( site_url(), '', get_stylesheet_directory_uri() ), '/' );

	return untrailingslashit( $path );
}
