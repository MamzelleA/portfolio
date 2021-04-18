<?php
$title = 'Projet 4 | PHP & MySql';
ob_start();
?>
	<div class="anchor">
		<h2 class="id-page">PROJET n�4 | Billet simple pour l'Alaska</h2>
		<div id="projet3">
			<div id="partie_diaporama">
                <input type="button" id="chevron_left" value="<" title="pr�c�dent (utilisez aussi la fl�che gauche du clavier)">
                <div id="diaporama">
                    <div><img id="image" name="image"></div>
                    <h3 id="titre"></h3>
                </div>    
                <input type="button" id="chevron_right" value=">" title="suivant (utilisez aussi la fl�che droite du clavier)")>
            	</div>
			<div>
				<h3 class="title-project">But du projet :</h3>
				<p class="explanation">R�aliser un site d'un �crivain (type blog) Donner la possibilit� aux utilisateurs de laisser un commentaire. Cr�er une partie Admin o� l'auteur peut : ajouter de nouveaux articles et mod�rer les commentaires.</p>
				<h3 class="title-project">Comp�tences valid�es :</h3>
				<ul class="explanation">
					<li>HTML5</li>
					<li>CSS 3</li>
					<li>Javascript</li>
					<li>Bootstrap</li>
					<li>PHP</li>
					<li>MySql</li>
					<li>POO</li>
					<li>WYSIWYG</li>
					<li>MVC</li>
				</ul>
				<h3 class="title-project">Lien vers le site :</h3>
				<p class="explanation"><a href="http://www.projet4.mamzellea.fr">Billet simple pour l'Alaska</a></p>
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

