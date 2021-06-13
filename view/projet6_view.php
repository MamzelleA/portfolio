<?php
$title = 'PROJET #6';
ob_start();
?>
<h3 class="mx-3">Projet #6 | Portfolio</h3>
<hr class="mx-3">
<div class="row mt-3 mx-3">
  <div class="col-md mr-md-3">
    <h4>Version n°1 :</h4>
    <ul>
      <li>HTML5</li>
      <li>CSS 3</li>
      <li>Javascript</li>
      <li>PHP procédural</li>
      <li>Programmation Orientée Objet (POO)</li>
    </ul>
    <i>Les 3 premières diapos.</i>
  </div>
  <div class="col-md mr-md-3">
    <h4>Version n°2 :</h4>
    <ul>
      <li>HTML5</li>
      <li>CSS 3</li>
      <li>Javascript</li>
      <li>Bootstrap</li>
      <li>PHP procédural</li>
      <li>Programmation Orientée Objet (POO)</li>
      <li>Responsive design</li>
    </ul>
    <i>A partir de la diapo 4.</i>
  </div>
</div>
  <div id="carouselProjet6" class="carousel slide carousel-fade w-100" data-ride="carousel">
    <div class="carousel-inner text-center">
      <div class="carousel-item active">
        <img class="d-block w-100" src="public/pictures/projet6/projet_6-1.jpg" alt="ancien accueil">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="public/pictures/projet6/projet_6-2.jpg" alt="ancien partie portfolio">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="public/pictures/projet6/projet_6-3.jpg" alt="ancien page projet">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="public/pictures/projet6/projet_6-4.jpg" alt="ancien et actuel responsive">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="public/pictures/projet6/projet_6-5.jpg" alt="accueil">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="public/pictures/projet6/projet_6-6.jpg" alt="partie portfolio">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="public/pictures/projet6/projet_6-7.jpg" alt="partie projet">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselProjet6" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselProjet6" role="button" data-slide="next">
      <span class="carousel-control-next-icon text-dark" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<div class="text-center my-3">
  <button type="button" class="btn btn-success text-uppercase py-0 py-md-1"><a class="a-hover-style" href="index.php#projects">retour</a></button>
</div>

<?php
$content = ob_get_clean();
require ('template/template.php');
?>
<!--SCRIPT-->
<script src="js/diaporama_object.js"></script>
<script src="js/diaporama_projet5.js"></script>
