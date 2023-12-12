<?php 
/**
 * 	Template Name: Équipe
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php
?>


<div class="team-description"><div class="team-bloc">
<?php
  $projects = new WP_Query('post_type=equipe');
  while ($projects->have_posts()) : $projects->the_post(); 
?>	

<div class="card mb-3 card-team col-5 mb-5 pt-4 align-cards">
        <img src="<?php bloginfo('template_url'); ?>/médias/blank-person.jpg" class="card-img-top team-image" alt="...">
        <div class="card-body">
          <h3 class="card-title"><?php the_title(); ?></h3>
          <p class="card-text-team"><?php the_field("description-courte"); ?></p>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary btn-team" data-bs-toggle="modal" data-bs-target="#exampleModal">
            En savoir plus
          </button>
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
              <div class="modal-content team-card-info">
                <div class="modal-header team-title">
                  <h1 class="modal-title fs-5" id="exampleModalLabel"><?php the_title(); ?></h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body team-cards">
                  <?php the_content(); ?>
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