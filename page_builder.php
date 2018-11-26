<?php
// Template Name: Page Builder

// Maquette Pleine largeur
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

// Fil d'Ariane
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
add_action( 'genesis_entry_footer', 'genesis_do_breadcrumbs' );

// pour enlever les balises HTML5 autour du titre
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
// pour enlever le titre
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

genesis();
?>