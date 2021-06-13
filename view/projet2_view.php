<?php
$title = 'PROJET #2';
ob_start();
?>

	<h3 class="mx-3">Projet n°2 | Office du tourisme de la ville de Strasbourg</h3>

	<hr class="mx-3">
	<div class="row mt-3 mx-3">
		<div class="col-md mr-md-3">
			<h4>But du projet :</h4>
			<p>Réaliser le site de l'office du tourisme de la ville de Strasbourg en utilisant un CMS</p>
		</div>
		<div class="col-md mr-md-3">
			<h4>Compétences validées :</h4>
			<ul>
				<li>Wordpress</li>
			</ul>
		</div>
		<div class="col-md">
			<h4>Lien vers le site :</h4>
			<p><a class="a-hover-style" href="https://www.projet2.mamzellea.fr/wp" target="blank">Office du tourisme de la ville de Strasbourg</a></p>
		</div>
	</div>
		<div id="carouselProjet2" class="carousel slide carousel-fade w-100" data-ride="carousel">
			<div class="carousel-inner text-center">
				<div class="carousel-item active">
					<img class="d-block w-100" src="public/pictures/projet2/projet_2-1.jpg" alt="page accueil">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="public/pictures/projet2/projet_2-2.jpg" alt="page services">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="public/pictures/projet2/projet_2-3.jpg" alt="page projets">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="public/pictures/projet2/projet_2-4.jpg" alt="page contact">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="public/pictures/projet2/projet_2-5.jpg" alt="vue responsive">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselProjet2" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselProjet2" role="button" data-slide="next">
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
