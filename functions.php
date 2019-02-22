<?php

// Register Navigation Menus
function custom_navigation_menus() {

	$locations = array(
		'menu-topo' => __( 'Primeiro Menu do site', 'text_domain' ),
		'menu-rodape' => __( 'Último Menu do Site', 'text_domain' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'custom_navigation_menus' );


// adicionando suporte à thumbnails

add_theme_support( 'post-thumbnails');

?>