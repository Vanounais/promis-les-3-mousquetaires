<?php 
/**
 * 	Template Name: À propos
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php
?>
<div class="history-video">
<!-- afficher la video -->
<iframe class="history-video-frame" width="800px" height="450px" src="<?php the_field("lien"); ?>" title="PROMIS à vol d&#39;oiseau." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
<div class="container col-8">
<div class="row">
<div class="about-description">
<!-- prendre la description de a propos -->
<?php get_template_part( 'partials/description' ); ?>
</div>
</div>
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