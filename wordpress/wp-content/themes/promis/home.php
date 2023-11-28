<?php 
/**
 * 	Template Name: Home
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<div class="swiper-container">
  <div class="swiper mySwiper">
      <div class="swiper-wrapper">
          <div class="swiper-slide"><img class="swiper-slide img" src="./sources/médias/article_1.jpeg" /></div>
          <div class="swiper-slide"><img class="swiper-slide img" src="./sources/médias/article_2.jpeg" /></div>
          <div class="swiper-slide"><img class="swiper-slide img" src="./sources/médias/article_4.jpeg" /></div>
      </div>
      <div class="swiper-pagination"></div>
  </div>
</div>

<!--Section des services-->

    <div class="services">
<h2>Services Offerts</h2>
<div class="icons-alignment">
<div class="services-icons">
<div class="square 1"><p>Accueil et intégration</p><img class="icon" src="./sources/médias/icon1.png" alt="icon1"></div>
<div class="square 2"><p>Service de francisation</p><img class="icon" src="./sources/médias/icon8.png" alt="icon2"></div>
<div class="square 3"><p>Soutien aux familles</p><img class="icon" src="./sources/médias/icon7.png" alt="icon3"></div>
<div class="square 4"><p>Soutien scolaire</p><img class="icon" src="./sources/médias/icon6.png" alt="icon4"></div>
<div class="square 5"><p>Aide à l’emploi</p><img class="icon" src="./sources/médias/icon5.png" alt="icon5"></div>
<div class="square 6"><p>Action alimentaire</p><img class="icon" src="./sources/médias/icon4.png" alt="icon6"></div>
<div class="square 7"><p>S’établir en région</p><img class="icon" src="./sources/médias/icon3.png" alt="icon7"></div>
<div class="square 8"><p>Résidence Maria-Goretti</p><img class="icon" src="./sources/médias/icon2.png" alt="icon8"></div>
</div>
</div>
    </div>

<!--Section des nouvelles-->

<div class="container">
<div class="row">
    <div class="news">
      <h2>Dernières Nouvelles</h2>
      <div class="news-card">
        <img class="news-image" src="sources/médias/article_1.jpeg">
        <p class="news-text">Début d'une nouvelle vie.</p>
        <p class="date">28/11/23</p>
      </div>
      <div class="news-card">
        <img class="news-image" src="sources/médias/article_2.jpeg">
        <p class="news-text">Merveilleuse rencontre.</p>
        <p class="date">15/05/23</p>
      </div>
      <div class="news-card">
        <img class="news-image" src="sources/médias/article_3.jpeg">
        <p class="news-text">Choix de carrières.</p>
        <p class="date">05/09/23</p>
      </div>  
      <div class="news-link-box">
      <a class="news-link" href="https://smnarnold.com/cours">Voir plus de nouvelles...</a>  
    </div>    
    </div>
   
    </div> 
   
  </div> 

 
<!--Section des témoignages-->
<div class="container col-7 mt-4"><div class="row"></div>
<div class="Testimonials mb-3">
<h2 class="Testimonials-home-title">Témoignages</h2>
<div class="Testimonials-card"> 
<p class="Testimonials-text">Exposé par lequel on explique, on interprète, on juge un texte ; notes et éclaircissements destinés à faciliter l'intelligence d'un texte. Exposé par lequel on explique, on interprète, on juge un texte ; notes et éclaircissements destinés à faciliter l'intelligence d'un texte.</p>  
<img class="Testimonials-image" src="sources/médias/writter.png">
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
    <img class="coin" src="./sources/médias/dollar.png" alt="coin">
    <img class="piggy" src="./sources/médias/piggybank.png" alt="piggy">
  </div>
<button class="donation-button col-4 mt-4">Faire une donation</button>
</div>
</div>
</div>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>