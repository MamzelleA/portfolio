<?php
$title = 'PROJET #4';
ob_start();
?>
	<h3 class="mx-3">Projet #4 | Billet simple pour l'Alaska</h3>
	<hr class="mx-3">
	<div class="row mt-3 mx-3">
		<div class="col-md mr-md-3">
			<h4>But du projet :</h4>
			<p class="mb-0">Réaliser le site d'un écrivain (type blog)<br>
				Donner la possibilité aux utilisateurs de laisser ou signaler un commentaire.<br>
				Créer une partie Admin où l'auteur peut :</p>
				<ul class="mt-0">
					<li>ajouter de nouveaux articles.</li>
					<li>modifier des articles.</li>
					<li>supprimer des articles.</li>
					<li>modérer des commentaires.</li>
					<li>supprimer des commentaires.</li>
				</ul>
		</div>
		<div class="col-md mr-md-3">
			<h4>Compétences validées :</h4>
			<ul>
				<li>HTML5</li>
				<li>CSS3</li>
				<li>Javascript</li>
				<li>Bootstrap</li>
				<li>PHP</li>
				<li>MySQL</li>
				<li>Programmation Orientée Objet (POO)</li>
				<li>Architecture Model View Controller (MVC)</li>
				<li>TinyMCE (What You See Is What You Get)</li>
				<li>responsive design</li>
			</ul>
		</div>
		<div class="col-md">
			<h4>Lien vers le site :</h4>
			<p><a class="a-hover-style" href="https://www.projet4.mamzellea.fr/wp" target="blank">Billet simple pour l'Alaska</a></p>
		</div>
	</div>
		<div id="carouselProjet4" class="carousel slide carousel-fade w-100" data-ride="carousel">
			<div class="carousel-inner text-center">
				<div class="carousel-item active">
					<img class="d-block w-100" src="public/pictures/projet4/projet_4-1.jpg" alt="page accueil">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="public/pictures/projet4/projet_4-2.jpg" alt="liste chapitres">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="public/pictures/projet4/projet_4-3.jpg" alt="lire un chapitre">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="public/pictures/projet4/projet_4-4.jpg" alt="accueil admin">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="public/pictures/projet4/projet_4-5.jpg" alt="liste chapitres admin">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="public/pictures/projet4/projet_4-6.jpg" alt="WYSIWG">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="public/pictures/projet4/projet_4-7.jpg" alt="liste des commentaires">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="public/pictures/projet4/projet_4-8.jpg" alt="corbeille">
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
