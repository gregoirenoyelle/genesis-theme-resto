<?php

// Afficher le contenu de la ficher cuisinier
add_action('genesis_entry_content','gob_contenu_fiche_cuisinier');
function gob_contenu_fiche_cuisinier() {

	// Variables pour les images
	$image = get_field('gob_photo'); // Identifiant de l'image (ID)
	$taille = 'large'; // Taille d'image
	$img = wp_get_attachment_image($image, $taille);

	// Mise en mémoire du fichier qui affiche le HTML
	ob_start();
	// Appel du fichier view. Attention, utiliser include et non include_once dans une boucle.
	include( get_stylesheet_directory() . '/view/view-cuisinier.php' );
	// Affichage du HTML et nettoyage de la mémoire
	echo ob_get_clean();



} // function gob_contenu_fiche_cuisinier()