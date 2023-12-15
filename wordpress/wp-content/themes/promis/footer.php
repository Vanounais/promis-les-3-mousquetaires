<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

<footer>
  <div class="page-footer accueil-footer">
    <a href="https://viknic.tim-momo.com/wordpress/accueil/">
      <img class="logo-bottom" src="<?php bloginfo('template_url'); ?>/médias/Logo.png" alt="logo">   
    </a>
    <!-- afficher le menu du footer -->
      <?php wp_nav_menu(array(
            'theme_location' => 'menu-footer',
            'menu_class' => 'bottom-nav'
          )); ?>
    <!-- assigner les liens au medias -->
  <div class="links">
      <a class="donation" href="https://www.canadahelps.org/fr/organismesdebienfaisance/promis/">Dons</a>
      <a href="https://www.facebook.com/promisimmigration/?ref=br_rs">
        <img src="<?php bloginfo('template_url'); ?>/médias/instagram.png" alt="instagram">
      </a>
      <a href="https://www.facebook.com/promisimmigration/?ref=br_rs">
      <img src="<?php bloginfo('template_url'); ?>/médias/facebook.png" alt="instagram">
      </a>
      <a href="https://www.linkedin.com/company/promis-immigration/">
      <img src="<?php bloginfo('template_url'); ?>/médias/linkedin.png" alt="instagram">
      </a>
  </div>
</div>
  <div class="footer-line"></div>
  <div class="contact-info">
      <a style="text-decoration:none;" href="https://maps.app.goo.gl/mA2fRUvRsfmivS3t9" class="address">3333 Côte Ste-Catherine Rd. Montreal (Quebec), H3T 1C8</a>
      <p class="phone-number">Téléphone: (514) 345-1615</p>
      <p class="fax">Fax: (514) 345-1088</p>
  </div>
  <div class="crediting ">
      <h1>Merci à nos partenaires</h1>
      <div class="logos ">
        <!-- afficher les logos de partenaires -->
          <?php
            $args = array('post_type' => 'sponsor', 'orderBy' => 'date','order' => 'asc');
            $projects = new WP_Query($args);
            while ($projects->have_posts()) : $projects->the_post(); 
          ?>
          <a href="<?php the_field("sponsor_link"); ?>">
            <?php the_post_thumbnail("small", array("class" => "credits")); ?>
          </a>
          <?php
            endwhile; 
            wp_reset_postdata(); 
          ?>  
      </div>
      <h5>Droits d'auteurs: 3 Mousquetaires ©2023 </h2>
  </div>

</footer>


<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
// YYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEETTTTTTTTTTTT
?> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
	<script src="main.js"></script>
</body>
</html>