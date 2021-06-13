<?php
$title = 'Portfolio';
ob_start();
?>
<div class="anchor" id="portfolio">
  <h2 class="id-page">PROJETS</h2>
  <div class="card-columns">
  <div class="card border-warning shadow">
    <img src="pictures/projet1/projet1_1.png">
    <div class="card-body">
      <h3>Projet n°1<br>HTML5 & CSS3</h3>
      <p class="card-text">Intégrer une maquette</p>
    </div>
    <footer class="card-footer text-center">
      <a class="text-uppercase" href="index.php?action=projet1">Découvrir</a>
    </footer>
  </div>
  <div class="card border-warning shadow">
    <img src="pictures/projet2/projet2_1.png">
    <div class="card-body">
      <h3>Projet n°2<br>WORDPRESS</h3>
      <p class="card-text">Créer un site avec un CMS</p>
    </div>
    <footer class="card-footer text-center">
      <a class="text-uppercase" href="index.php?action=projet2">Découvrir</a>
    </footer>
  </div>
  <div class="card border-warning shadow">
    <img src="pictures/projet2/projet3_1.png">
    <div class="card-body">
      <h3>Projet n°3<br>JAVASCRIPT</h3>
      <p class="card-text">Créer un site dynamique</p>
    </div>
    <footer class="card-footer text-center">
      <a class="text-uppercase" href="index.php?action=projet3">Découvrir</a>
    </footer>
  </div>
  <div class="card border-warning shadow">
    <img src="pictures/projet2/projet4_1.png">
    <div class="card-body">
      <h3>Projet n°4<br>PHP & SQL</h3>
      <p class="card-text">Créer un site selon une architecture MVC</p>
    </div>
    <footer class="card-footer text-center">
      <a class="text-uppercase" href="index.php?action=projet4">Découvrir</a>
    </footer>
  </div>
  <div class="card border-warning shadow">
    <img src="pictures/projet2/projet5_1.png">
    <div class="card-body">
      <h3>Projet n°5<br>LE FINAL</h3>
      <p class="card-text">Projet libre</p>
    </div>
    <footer class="card-footer text-center">
      <a class="text-uppercase" href="index.php?action=projet5">Découvrir</a>
    </footer>
  </div>
  <div class="card border-warning shadow">
    <img src="pictures/projet2/projet6_v2-0_1.png">
    <div class="card-body">
      <h3>Projet n°6<br>PORTFOLIO</h3>
      <p class="card-text">Création de mon portfolio professionnel, en constante évolution !</p>
    </div>
    <footer class="card-footer text-center">
      <a class="text-uppercase" href="index.php?action=projet6">Découvrir</a>
    </footer>
  </div>
</div>
</div>
<?php
$content = ob_get_clean();
require('template/template.php');
?>
