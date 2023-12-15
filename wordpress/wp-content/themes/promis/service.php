<?php 
/**
 * 	Template Name: Service
 * 	Template Post Type: hub-service
 */

get_header(); // Affiche header.php
?>
<div class="news-detail">
<p class=""><?php the_content(); ?></p>
</div>

<?php
if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

//get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>