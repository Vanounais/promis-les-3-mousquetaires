<?php 
/**
 * 	Template Name: Hub de services
 * 	Template Post Type: hub-service
 */

get_header(); // Affiche header.php
?>

<div class="nos-services">
  <h2 class="services-title"><?php get_template_part( 'partials/description' ); ?></h2>
  <div class="services-alignment">
  <div class="services-cards">
<?php
  $args = array('post_type' => 'hub-service', 'orderBy' => 'date','order' => 'asc');
  $projects = new WP_Query($args);
  while ($projects->have_posts()) : $projects->the_post();
?>	
	<div class="icon-service" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>');">
    <a class="service-mini-cards" href="<?php echo the_permalink($the_post); ?>">
      <div class="service">
        <h3><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
      </div>
    </a>
  </div>
	
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

//get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>