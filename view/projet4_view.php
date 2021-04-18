<?php

$title = 'Projet 3 | Javascript';
ob_start();
?>
	<div class="anchor">
		<h2 class="id-page">PROJET n°3 | Book me</h2>
		<div id="projet3">
			<div id="partie_diaporama">
                <input type="button" id="chevron_left" value="<" title="précédent (utilisez aussi la flêche gauche du clavier)">
                <div id="diaporama">
                    <div><img id="image" name="image"></div>
                    <h3 id="titre"></h3>
                </div>    
                <input type="button" id="chevron_right" value=">" title="suivant (utilisez aussi la flêche droite du clavier)")>
            	</div>
			<div>
				<h3 class="title-project">But du projet :</h3>
				<p class="explanation">Réaliser un site de réservation de vélos</p>
				<h3 class="title-project">Compétences validées :</h3>
				<ul class="explanation">
					<li>HTML5</li>
					<li>CSS 3</li>
					<li>Javascript</li>
					<li>media queries</li>
					<li>API web</li>
					<li>POO</li>
				</ul>
				<h3 class="title-project">Lien vers le site :</h3>
				<p class="explanation"><a href="http://www.projet3.mamzellea.fr">Book me</a></p>
				<div class="button"><a href="index.php?action=portfolio">RETOUR</a></div>
			</div>
		</div>
	</div>
<?php
$content = ob_get_clean();
require ('template/template.php');
?>
<!--SCRIPT-->
	<script src="js/diaporama_object.js"></script>
	<script src="js/diaporama_projet3.js"></script>

