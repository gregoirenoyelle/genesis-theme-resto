<?php

// pour enlever l'image à la une générée automatiquement
remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
// pour enlever le contenu de l'éditeur (contenu classique ou extrait)
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );

// Appeler contenu de la fiche cuisinier
get_template_part('contenu','cuisinier');

genesis();