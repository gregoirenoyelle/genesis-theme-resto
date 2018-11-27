<?php


// pour enlever les info du post, après le titre de l'article
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );

// pour enlever l'image à la une générée automatiquement
remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
// pour enlever le contenu de l'éditeur (contenu classique ou extrait)
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
