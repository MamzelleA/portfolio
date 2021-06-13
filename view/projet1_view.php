<?php
$title = 'PROJET #1';
ob_start();
?>
	<h3 class="mx-3">Projet #1 | La Web Agency</h3>
	<hr class="mx-3">
	<div class="row mt-3 mx-3">
		<div class="col-md mr-md-3">
			<h4>But du projet :</h4>
			<p>A partir d'une maquette existante, réaliser un site internet fonctionnel et responsive</p>
		</div>
		<div class="col-md mr-md-3">
			<h4>Compétences validées :</h4>
			<ul>
				<li>HTML5</li>
				<li>CSS 3</li>
				<li>utilisation d'une maquette</li>
				<li>media queries</li>
			</ul>
		</div>
		<div class="col-md">
			<h4>Lien vers le site :</h4>
			<p><a class="a-hover-style" href="http://www.projet1.mamzellea.fr" target="blank">Web Agency</a></p>
		</div>
	</div>
		<div id="carouselProjet1" class="carousel slide carousel-fade w-100" data-ride="carousel">
			<div class="carousel-inner text-center">
				<div class="carousel-item active">
					<img class="d-block w-100" src="public/pictures/projet1/projet_1-1.jpg" alt="page accueil">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="public/pictures/projet1/projet_1-2.jpg" alt="page services">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="public/pictures/projet1/projet_1-3.jpg" alt="page projets">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="public/pictures/projet1/projet_1-4.jpg" alt="page contact">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="public/pictures/projet1/projet_1-5.jpg" alt="vue responsive">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselProjet1" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselProjet1" role="button" data-slide="next">
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
