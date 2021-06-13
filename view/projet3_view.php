<?php
$title = 'PROJET #3';
ob_start();
?>
	<h3 class="mx-3">Projet #3 | Book me</h3>
	<hr class="mx-3">
	<div class="row mt-3 mx-3">
		<div class="col-md mr-md-3">
			<h4>But du projet :</h4>
			<p>Réaliser un site permettant de savoir le nombre de vélos en libre service disponibles à une station et d'en réserver un.</p>
		</div>
		<div class="col-md mr-md-3">
			<h4>Compétences validées :</h4>
			<ul>
				<li>Javascript</li>
				<li>Programmation Orientée Objet (POO)</li>
				<li>Utilisation d'une API</li>
			</ul>
		</div>
		<div class="col-md">
			<h4>Lien vers le site :</h4>
			<p><a class="a-hover-style" href="https://www.projet3.mamzellea.fr/wp" target="blank">Book me</a></p>
		</div>
	</div>
		<div id="carouselProjet3" class="carousel slide carousel-fade w-100" data-ride="carousel">
			<div class="carousel-inner text-center">
				<div class="carousel-item active">
					<img class="d-block w-100" src="public/pictures/projet3/projet_3-1.jpg" alt="page accueil">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="public/pictures/projet3/projet_3-2.jpg" alt="partie carte">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="public/pictures/projet3/projet_3-3.jpg" alt="faire réservation">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="public/pictures/projet3/projet_3-4.jpg" alt="réservation en cours">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="public/pictures/projet3/projet_3-5.jpg" alt="vue responsive">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselProjet3" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselProjet3" role="button" data-slide="next">
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
