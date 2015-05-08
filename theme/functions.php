<?php 

/**
 * ---------------------------------------------------------------------------
 * Agregar soporte de thumbnails al tema
 * ---------------------------------------------------------------------------
 */
add_theme_support( 'post-thumbnails' );


/**
 * ---------------------------------------------------------------------------
 * Cambio de la función except a 20 caracteres
 * ---------------------------------------------------------------------------
 */
function custom_excerpt_length( $length ) 
{
	return 20;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

