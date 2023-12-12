<?php 
/**
 * 	Template Name: Hub de services
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php
?>

<div class="nos-services">
  <div class="services-alignment">
  <div class="services-cards">
<?php
  $projects = new WP_Query('post_type=hub-service');
  while ($projects->have_posts()) : $projects->the_post(); 
?>	
	 <div class="icon-service" style="background-image:url(<?php get_the_post_thumbnail_url();?>);"><a class="service-mini-cards" href="<?php the_post_thumbnail(); ?>">
   <div class="service"><h3><?php the_title(); ?></h3><p><?php the_content(); ?></p></div></a></div>
	

<?php
  endwhile; 
  wp_reset_postdata(); 
?>  
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

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>