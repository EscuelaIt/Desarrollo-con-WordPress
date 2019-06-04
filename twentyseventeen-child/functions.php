<?php
function child_theme_enqueue_styles() {
    $parent_style = 'parent-style'; // Esta es la hoja de estilos del tema padre.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    // Load custom font Ostrich Sans
    if ( is_single() ) {
        wp_enqueue_style( 'custom-font-ostrich', get_stylesheet_directory_uri() . '/fonts/ostrich-sans.css', 1.0 );
    }

    // Load custom font marlyana
    wp_enqueue_style( 'custom-font-marlyana', get_stylesheet_directory_uri() . '/fonts/marlyana.css', 1.0 );
    
    
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version') );

    // add custom JS file
    if ( is_front_page() ) {
        wp_enqueue_script( 'child-js', get_stylesheet_directory_uri() . '/js/functions.js', array( 'jquery' ), '1.0', true );
    }

}
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );

function silocreativo_nuevo_css() { ?>
	<style type="text/css">
		.site-content-contain {
            background-color: #ccc;
        }
	</style>
<?php }
add_action( 'wp_head', 'silocreativo_nuevo_css' );

function silocreativo_custom_fonts() { ?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<?php }
add_action( 'wp_head', 'silocreativo_custom_fonts' );


?>
