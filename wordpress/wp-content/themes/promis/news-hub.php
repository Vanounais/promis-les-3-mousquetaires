<?php 
/**
 * 	Template Name: Hub de nouvelles
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php
?>

<h2 class="newsHub-H2">Nos articles les plus récents</h2>
  <div class="newsHub-container">
      <div class="newsHub-Picture-Container">

	  <?php
  $projects = new WP_Query('post_type=nouvelle');
  while ($projects->have_posts()) : $projects->the_post(); 
?>
<div class="center-card">
      <a class="news-card" href="<?php the_permalink() ?>">
 	  <?php the_post_thumbnail("medium-large", array("class" => "newsHub-Picture")); ?>
    <div class="newsHub-Text">
        <h3 class="newsHub-Text"><?php the_title(); ?></h3>
        <p class="newsHub-Text"><?php the_field("description_courte"); ?></p>
        <p class="newsHub-Text"><?php the_field("date"); ?></p>
      </div>
    </a>
</div>
   
    <?php
  endwhile; 
  wp_reset_postdata(); 
?>
	</div>
	</div>
	<!-- <img class="" src="sources/médias/article_1.jpeg">
      </div>
      <div class="">
        <h3>Début d'une nouvelle vie.</h3>
        <div>Exposé par lequel on explique, on interprète, on juge un texte ; notes et éclaircissements destinés à faciliter l'intelligence d'un texte. Exposé par lequel on explique, on interprète, on juge un texte ; notes et éclaircissements destinés à faciliter l'intelligence d'un texte.</div>
      </div>
      <div class="newsHub-Card-End"></div>
    </div>
  </div> -->

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