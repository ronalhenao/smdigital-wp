<?php

// Includes
require get_template_directory() . '/includes/cpt-pilares.php';
require get_template_directory() . '/includes/cpt-logos.php';
require get_template_directory() . '/includes/queries.php';

function smdigital_setup() {
	// Imagenes destacadas
	add_theme_support('post-thumbnails');
	// Títulos para SEO 
	add_theme_support('title-tag');
	// Otros soportes aquí
}

add_action('after_setup_theme', 'smdigital_setup');

function smdigital_enqueue_styles() {
	// Tailwind compilado
	wp_enqueue_style(
		'smdigital-tailwind',
		get_template_directory_uri() . '/assets/css/main.css',
		[],
		filemtime(get_template_directory() . '/assets/css/main.css')
);

	// Css custom
	wp_enqueue_style(
		'smdigital-custom',
		get_template_directory_uri() . '/assets/css/style-custom.css',
		['smdigital-tailwind'], // se carga después del Tailwind
		filemtime(get_template_directory() . '/assets/css/style-custom.css')
);
}
add_action('wp_enqueue_scripts', 'smdigital_enqueue_styles');

function smdigital_menus() {
	register_nav_menus( array(
		'menu-principal' => __('Menu Principal', 'smdigital'),
		'menu-footer' => __('Menu Footer', 'smdigital'),
		'menu-superior' => __('Menu Superior', 'smdigital'),
	) );
}

add_action('init', 'smdigital_menus');

// Agrega clases a los <a>
add_filter('nav_menu_link_attributes', function($atts, $item, $args, $depth) {
	switch ($args->theme_location) {
		case 'menu-principal':
			$atts['class'] = 'text-white text-sm font-semibold';
			break;
		case 'menu-footer':
			$atts['class'] = 'text-base text-white underline';
			break;
		case 'menu-superior':
			$atts['class'] = 'text-white text-xs font-semibold';
			break;
}
	return $atts;
}, 10, 4);

function smdigital_slider_assets() {
	// Swiper.js desde CDN
	wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
	wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], null, true);

	// Tu script personalizado
	wp_enqueue_script(
			'gymfitness-script',
			get_template_directory_uri() . '/assets/js/scripts.js',
			['swiper-js'],
			filemtime(get_template_directory() . '/assets/js/scripts.js'),
			true
	);
}
add_action('wp_enqueue_scripts', 'smdigital_slider_assets');


// Definir zona de widgets
function smdigital_widgets() {
	register_sidebar( array(
			'name' => 'Social',
			'id' => 'social',
			'before_widget' => '<div class="flex items-center space-x-4">',
			'after_widget' => '</div>',
	) );

	register_sidebar( array(
			'name' => 'Linea Atención',
			'id' => 'linea',
			'before_widget' => '<div class="text-white uppercase text-center">',
			'after_widget' => '</div>',
	) );
}
add_action('widgets_init', 'smdigital_widgets');


// Social shortcode
function mostrar_iconos_sociales_tailwind() {
	ob_start(); // Inicia el almacenamiento en búfer de salida
	?>
		<a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="text-white hover:text-gray-300 transition-colors duration-200">
			<svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
					<path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33V22C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
			</svg>
		</a>

		<a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer" class="text-white hover:text-gray-300 transition-colors duration-200">
			<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
					<path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.574-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
			</svg>
		</a>
	<?php
	return ob_get_clean(); // Devuelve el contenido del búfer
}
add_shortcode( 'iconos_sociales', 'mostrar_iconos_sociales_tailwind' );
?>
