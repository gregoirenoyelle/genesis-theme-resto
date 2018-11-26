<?php

// pour enlever les info du post, après le titre de l'article
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );


// Afficher le contenu de la ficher cuisinier
add_action('genesis_entry_content','gob_contenu_fiche_cuisinier');
function gob_contenu_fiche_cuisinier() { 

// Variables pour les images
$image = get_field('gob_photo'); // Identifiant de l'image (ID)
$taille = 'large'; // Taille d'image 
$img = wp_get_attachment_image($image, $taille);

?>

	<?php 
		if ($image) {
			// Afficher image
			echo '<div class="image">';
			echo $img;
			echo '</div>';
		}
	?>

	<div class="bio">
		<?php 
			// Voir si c'est la single-cuisinier.php
			if ( is_singular('cuisinier') )     { 
			 	the_field('gob_biographie'); 
			} 
			else {
				the_field('gob_biographie_extrait');
				echo '...'; 
				printf('<br><a href="%s">Lire la suite</a>', get_permalink() );
			}
		?>
	</div>

	<div class="references">
		<ul class="liste-reference">
			<li><a href="<?php the_field('gob_site'); ?>" target="_blank">Site Internet</a></li>
			<li><a href="mailto:<?php the_field('gob_email'); ?>">Envoyer un message</a></li>
			<li><a href="<?php the_field('gob_cv'); ?>">Télécharger le CV</a></li>
		</ul>
	</div>
	
<?php } // function gob_contenu_fiche_cuisinier()