<?php

// Ajout de contenu avant le titre
add_action('genesis_entry_header','gob_contenu_avant_titre', 9);
function gob_contenu_avant_titre() {
	// Affichage du titre de l'article
	the_title('<h3>Le titre est: ', '</h3>');
	// Affichage de l'image à la une de l'article
	the_post_thumbnail('large');
}

genesis();
?>