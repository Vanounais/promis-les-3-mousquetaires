<?php 
/**
 * 	Template Name: Détails de nouvelles
 *  Template Post Type: post, page, nouvelle
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php
?>

<div class="news-detail">
<?php the_post_thumbnail("medium-large", array("class" => "img-news")); ?>
<p class="detail-news-text"><?php get_template_part( 'partials/description' ); ?></p>
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

//get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>


