<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

<footer>
  <div class="page-footer accueil-footer">
      <img class="logo-bottom" src="<?php bloginfo('template_url'); ?>/médias/Logo.png" alt="logo">   
  <!--<div class="bottom-nav">
      <a href="index.html">Accueil</a>
      <a href="index.html">Hub de nouvelles</a>
      <a href="index.html">Hub de services</a>
      <a href="index.html">Équipe</a>
      <a href="index.html">À propos</a>
      <a href="index.html">Histoire</a>
      <a href="index.html">FAQ</a>-->
      <?php wp_nav_menu(array(
            'theme_location' => 'menu-footer',
            'menu_class' => 'bottom-nav',
            'list_item_class'  => 'nav-item',
            'link_item_class' => 'nav-link'
          )); ?>
  <!--</div>-->
  <div class="links">
      <a class="donation" href="https://www.canadahelps.org/fr/organismesdebienfaisance/promis/">Dons</a>
      <img src="<?php bloginfo('template_url'); ?>/médias/instagram.png" alt="instagram">
      <img src="<?php bloginfo('template_url'); ?>/médias/facebook.png" alt="instagram">
      <img src="<?php bloginfo('template_url'); ?>/médias/linkedin.png" alt="instagram">
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
          <img class="credits " src="https://promis.qc.ca/wp-content/uploads/2023/05/Fondation-Cogir-315x200.png " alt="cogir ">
          <img class="credits " src="https://promis.qc.ca/wp-content/uploads/2018/09/Immigration_Quebec.png " alt="quebec_1 ">
          <img class="credits " src="https://promis.qc.ca/wp-content/uploads/2018/09/CSS-Montreal.png " alt="quebec_2 ">
          <img class="credits " src="https://promis.qc.ca/wp-content/uploads/2018/09/centraide_blanc2-300x200.png " alt="centreaide ">
          <img class="credits " src="https://promis.qc.ca/wp-content/uploads/2018/09/CSS-MargueriteBourgeon.png " alt="quebec_3 ">
          <img class="credits " src="https://promis.qc.ca/wp-content/uploads/2018/09/StateStreet2.png " alt="StateStreet ">
          <img class="credits " src="https://promis.qc.ca/wp-content/uploads/2018/09/service-canada_blanc-340x190.png " alt="ServiceCanada ">
          <img class="credits " src="https://promis.qc.ca/wp-content/uploads/2018/09/investissement_quebec_logo-340x73.png " alt="investissement_quebec ">
          <img class="credits " src="https://promis.qc.ca/wp-content/uploads/2018/09/Montreal_blanc-340x73.png " alt="Montreal_blanc ">
          <img class="credits " src="https://promis.qc.ca/wp-content/uploads/2018/09/Fudicie-340x81.png " alt="Fiducie ">
          <img class="credits " src="https://promis.qc.ca/wp-content/uploads/2018/09/BRASSEUR_DU_MONDE_BLANC-180x200.png " alt="Brasseurs_Monde ">
          <img class="credits " src="https://promis.qc.ca/wp-content/uploads/2018/09/BREBEUF_BLANC-340x78.png " alt="brefebeuf ">
          <img class="credits " src="https://promis.qc.ca/wp-content/uploads/2019/09/logo_reseau_reussite_mtl-340x123.png " alt="logo_reseau_reussite_mtl ">
          <img class="credits " src="https://promis.qc.ca/wp-content/uploads/2023/04/Logo_MAC.svg " alt="Mac ">
          <img class="credits " src="https://promis.qc.ca/wp-content/uploads/2023/04/Logo_Le-Depots.svg " alt="Depot ">
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