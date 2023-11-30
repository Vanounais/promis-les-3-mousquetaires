<?php 
/**
 * 	Template Name: FAQ
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php
?>


<div class="container">
  <div class="row">
    <div class="accordion accordion-flush" id="accordionFlushExample">
           <?php
  $projects = new WP_Query('post_type=faq');
  while ($projects->have_posts()) : $projects->the_post(); 
?>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php the_field("id"); ?>" aria-expanded="false" aria-controls="flush-collapseOne">
		  <?php the_field("question"); ?>
          </button>
        </h2>
        <div id="flush-collapse<?php the_field("id"); ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body"><?php the_field("reponse"); ?></div>
        </div>
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

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>


