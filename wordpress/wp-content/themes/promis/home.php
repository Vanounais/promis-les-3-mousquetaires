<?php 
/**
 * 	Template Name: Accueil
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php
?>
<div class="swiper-container" id="hero-swiper">
  <div class="swiper mySwiper">
      <div class="swiper-wrapper">
      <?php
  $projects = new WP_Query('post_type=hero');
  while ($projects->have_posts()) : $projects->the_post(); 
?>
          <div class="swiper-slide"><?php the_post_thumbnail( 'medium', array("class" => "swiper-slide img" )); ?></div>
          
  <?php
  endwhile; 
  wp_reset_postdata(); 
?>
      </div>
      <div class="swiper-pagination"></div>
  </div>
</div>
<!--Section des services-->
    <div class="services">
<h2>Services Offerts</h2>
<div class="icons-alignment">
<div class="services-icons">

<?php
  $projects = new WP_Query('post_type=service');
  while ($projects->have_posts()) : $projects->the_post(); 
?>

  <div class="square"><p><?php the_title(); ?></p><?php the_post_thumbnail( 'thumbnail', array("class" => "icon" )); ?></div>
    
<?php
  endwhile; 
  wp_reset_postdata(); 
?>
</div>
</div>
</div>


<!--Section des nouvelles-->

<div class="container">
<div class="row">
    <div class="news">
      <h2>Dernières Nouvelles</h2>
      <?php
       $arguments = array( 
        'post_type' => 'nouvelle',
        'posts_per_page' => 3
      );
      $projects = new WP_Query($arguments);
  while ($projects->have_posts()) : $projects->the_post(); 
?>

      <a class="news-card" href="<?php the_permalink() ?>">
 	  <?php the_post_thumbnail("medium", array("class" => "news-image")); ?>
    <div class="card-desc">
        <h2 class="news-text"><?php the_title(); ?></h2>
        <p class="news date"><?php the_field("description_courte"); ?></p>
        <p class="news date"><?php the_field("date"); ?></p>
      </div>
    </a>

   
    <?php
  endwhile; 
  wp_reset_postdata(); 
?>
    </div> 
  </div> 
</div>
 
<!--Section des témoignages-->
<div class="container col-7 mt-4"><div class="row"></div>
<div class="Testimonials mb-3">
<h2 class="Testimonials-home-title">Témoignages</h2>
<div class="Testimonials-card"> 
<p class="Testimonials-text">Exposé par lequel on explique, on interprète, on juge un texte ; notes et éclaircissements destinés à faciliter l'intelligence d'un texte. Exposé par lequel on explique, on interprète, on juge un texte ; notes et éclaircissements destinés à faciliter l'intelligence d'un texte.</p>  
<img class="Testimonials-image" src="<?php bloginfo('template_url'); ?>/médias/writter.png">
<p class="Testimonials-writter">Craig Mckay</p>
</div>
</div>
</div>

<!--Section des donations-->
<div class="container mt-5">
  <div class="row">
<div class="section-donations">
<h2>Faire une donation</h2>
<h3>Soutenez les familles et notre organisation en fesant une donation!</h3>
  <div class="donation-anim">
    <img class="coin" src="<?php bloginfo('template_url'); ?>/médias/dollar.png" alt="coin">
    <img class="piggy" src="<?php bloginfo('template_url'); ?>/médias/piggybank.png" alt="piggy">
  </div>
<button class="donation-button col-4 mt-4">Faire une donation</button>
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