<?php 
/**
 * 	Template Name: Équipe
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php
?>


<div class="team-description">
  <?php get_template_part( 'partials/description' ); ?>
</div>
<div class="team-bloc">
<?php
  $index = 1;
  $projects = new WP_Query('post_type=equipe');
  while ($projects->have_posts()) : $projects->the_post(); 
?>	
<!-- afficher la membres d'equipe-->
<div class="card mb-3 card-team col-5 mb-5 pt-4 align-cards">
<?php the_post_thumbnail("medium-large", array("class" => "card-img-top team-image")); ?>
        <div class="card-body">
          <h3 class="card-title"><?php the_title(); ?></h3>
          <p class="card-text-team"><?php the_field("description-courte"); ?></p>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary btn-team" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $index; ?>">
            En savoir plus
          </button>
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModal<?php echo $index; ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?php echo $index; ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
              <div class="modal-content team-card-info">
                <div class="modal-header team-title">
                  <h1 class="modal-title fs-5" id="exampleModalLabel<?php echo $index; ?>"><?php the_title(); ?></h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body team-cards">
                  <div><?php the_field("profession"); ?></div>
                  <div><?php the_content(); ?></div>
                </div>
              </div>
            </div>
          </div>
          <p class="card-text-team"><small class="text-body-secondary">2023</small></p>
        </div>
      </div>
	  </div>
	  </div>
<?php
  $index++;
  endwhile; 
  wp_reset_postdata(); 
?>  
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