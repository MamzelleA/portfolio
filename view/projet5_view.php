<?php
$title = 'PROJET #5';
ob_start();
?>
<h3 class="mx-3">Projet #5 | Destination : Louvre</h3>
<hr class="mx-3">
<div class="row mt-3 mx-3">
  <div class="col-md mr-md-3">
    <h4>But du projet :</h4>
    <p>Projet libre qui doit intégrer tout ce qui a été vu lors de la formation</p>
    <p>Création d'un site qui va permettre à utilisateur de préparer sa visite au musée du Louvre et de devenir membre pour encore mieux profiter de sa visite.</p>
  </div>
  <div class="col-md mr-md-3">
    <h4>Compétences validées :</h4>
    <ul>
      <li>HTML5</li>
      <li>CSS 3</li>
      <li>Javascript</li>
      <li>PHP</li>
      <li>MySql</li>
      <li>Bootstrap</li>
      <li>jQuery</li>
      <li>Programmation Orientée Objet (POO)</li>
      <li>Architecture Model View Controller (MVC)</li>
      <li>Création et utilisation d'une API rest côté Front et Back</li>
      <li>Responsive design</li>
    </ul>
  </div>
  <div class="col-md">
    <h4>Lien vers le site :</h4>
    <p><a class="a-hover-style" href="https://www.projet5.mamzellea.fr" target="blank">Destination : Louvre</a></p>
  </div>
</div>
  <div id="carouselProjet4" class="carousel slide carousel-fade w-100" data-ride="carousel">
    <div class="carousel-inner text-center">
      <div class="carousel-item active">
        <img class="d-block w-100" src="public/pictures/projet5/projet_5-1.jpg" alt="page accueil">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="public/pictures/projet5/projet_5-2.jpg" alt="page présentation site">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="public/pictures/projet5/projet_5-3.jpg" alt="page présentation musée">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="public/pictures/projet5/projet_5-4.jpg" alt="page préparation">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="public/pictures/projet5/projet_5-5.jpg" alt="accueil membre">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="public/pictures/projet5/projet_5-6.jpg" alt="page visite">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="public/pictures/projet5/projet_5-7.jpg" alt="parcours responsive">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="public/pictures/projet5/projet_5-8.jpg" alt="accueil admin">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="public/pictures/projet5/projet_5-9.jpg" alt="liste entrées admin">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselProjet4" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselProjet4" role="button" data-slide="next">
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
