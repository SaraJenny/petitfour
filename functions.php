<?php
// Ladda in meny
add_action('init', 'register_my_menus');

// Registrera menyer
function register_my_menus() {
	register_nav_menus(array(
		'main-menu' => 'Top menu'
	));
}

/* Funktion där excerptlängden kan justeras efter behov */
function excerptLimit( $limit ) {
    return wp_trim_words(get_the_excerpt(), $limit, excerpt_more());
}

/* Ändrar excerpt-texters slut */
function excerpt_more() {
	return ' ... <span class="link"> Läs mer »</span>';
}

/* Lägger till stöd för utvalda bilder */
add_theme_support( 'post-thumbnails' );
// Skapar olika bildstorlekar
add_image_size( 'thumb_small', 120, 154, true );
add_image_size( 'thumb_medium', 260, 308, true );
add_image_size( 'thumb_large', 520 );

/**
 * Registrerar sidebars och widgetized områden
 * https://codex.wordpress.org/Widgetizing_Themes
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
