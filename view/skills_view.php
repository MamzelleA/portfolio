<?php
$title = 'Compétences';
ob_start();
?>
	<div class="anchor">
		<h2 class="id-page">COMPETENCES</h2>
			<div id="knowing">
				<div id="logo-skills">
				<h3>Développement Web</h3>
				<ul>
					<li><img src="pictures/icones/html.png" alt="html5" title="html5"><img src="pictures/icones/css.png" alt="css3" title="css3"></li>
					<li><img src="pictures/icones/js.png" alt="javascript" title="javascript"><img src="pictures/icones/php.png" alt="php" title="php"></li>
					<li><img src="pictures/icones/jquery.png" alt="jquery" title="jquery"><img src="pictures/icones/wordpress.png" alt="wordpress" title="wordpress"></li>
					<li><img src="pictures/icones/mysql.png" alt="mysql" title="mysql"><img src="pictures/icones/ps.png" alt="phpmyadmin" title="photoshop"></li>
					<li><img src="pictures/icones/api.png" alt="api rest" title="api rest"><img src="pictures/icones/github.png" alt="github" title="github"></li>
				</ul>
				</div>
				<div id="being">
					<h3>Savoir-être</h3>
					<ul>
						<li>Autonome</li>
						<li>Capacité D’Adaptation</li>
						<li>Capacité D’Ecoute</li>
						<li>Créative</li>
						<li>Esprit D’Equipe</li>
						<li>Esprit De Synthèse</li>
						<li>Minutieuse</li>
						<li>Sens De L’Analyse</li>
					</ul>
				</div>
				<div id="doing">
					<h3>Savoir-faire</h3>
					<ul>
						<li>Accueillir</li>
						<li>Animer Un Groupe</li>
						<li>Argumenter</li>
						<li>Gérer Une Equipe</li>
						<li>Gérer Un Conflit
						<li>Planifier </li>
						<li>Réactivité
						<li>Rédiger</li>
						<li>Rendre Compte</li>
					</ul>
				</div>
				<div id="speaking">
					<h3>Langues</h3>
					<ul>
						<li><b>Anglais</b> :</li>
						<li>Niveau B2</li>
						<li><b>Italien</b> :</li>
						<li>Niveau B1</li>
						<li><b>Espagnol</b> :</li>
						<li>Niveau A1</li>
					</ul>
				</div>
				<div id="hobbies">
					<h3>Loisirs</h3>
					<ul>
						<li>Cinéma</li>
						<li>Course à pied</li>
						<li>Couture</li>
						<li>Dessin</li>
						<li>Exposition</li>
						<li>Lecture</li>
						<li>Natation</li>
						<li>Photographie</li>
					</ul>
				</div>
			</div>
	</div>
<?php
$content = ob_get_clean();
require('template/template.php');
?>
