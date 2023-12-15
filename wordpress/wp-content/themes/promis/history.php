<?php 
/**
 * 	Template Name: History
 *  Template Post Type: evenement
 */

 get_header(); // Affiche header.php
 ?>
 
 <?php
  $projects = new WP_Query('post_type=evenement');
  while ($projects->have_posts()) : $projects->the_post(); 
?>
 <?php the_post_thumbnail("medium-large", array("class" => "img-news")); ?>
 <?php the_title(); ?>
 <?php the_content(); ?>
 <p class=""><?php the_field(""); ?></p>
 <?php endwhile; wp_reset_postdata(); ?>
 
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
 