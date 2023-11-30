<?php 
/**
 * 	Template Name: Détails de nouvelles
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php
?>

<div class="detail-news-title"><h2><?php the_title(); ?></h2>
<p class="detail-news-text"><?php the_content(); ?></p>
<p class="newsHub-Text"><?php the_field("date"); ?></p>
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

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>


