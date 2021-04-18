<?php
$title = 'Parcours';
ob_start();
?>
	<div id="resume" class="anchor">
		<h2 class="id-page">PARCOURS</h2>
			<div id="experience">
				<div class="part" id="downloading">
				<a id="resume-link" href="file/CV_agnes_masetty.pdf"><img src="pictures/icones/download.png" alt="téléchargement"></a>
				<p>Télécharger <a id="resume-link" href="file/CV_agnes_masetty.pdf"><span class="date">mon CV</span></a> au format PDF.</p>
				</div>
				<div class="part">
					<div>
						<img class="icon" src="pictures/icones/code.png">
					</div>
					<div>
						<p>2019- Projet développé à titre personnel : <span class="date">Portfolio : design et développement de mon site portfolio professionnel</span></p>
					</div>
				</div>
				<p><img class="logo" src="pictures/logo/oc_logo.jpg"></p>
				<div class="part">
					<div>
						<img class="icon" src="pictures/icones/graduation.png">
					</div>
					<div>
						<p>2021 Diplôme de <span class="date">Développeur Intégrateur en réalisation d’applications Web</span></p>
					</div>
				</div>
				<div class="part">
					<div>
						<img class="icon" src="pictures/icones/code.png">
					</div>
					<div>
						<p>2017-2021 <span class="date">5 projets développés</span> dans le cadre de la formation Développeur Web Junior</p>
					</div>
				</div>
				<p><img class="logo" src="pictures/logo/louvre_logo.jpg"></p>
				<div class="part">
					<div>
						<img class="icon" src="pictures/icones/chef.png">
					</div>
					<div>
						<p>
							2020- <span class="date">Chef d’équipe</span>, Service de la surveillance muséographique, équipe mobile d’intervention<br>
							2013-2020 <span class="date">Chef d’équipe</span>, Service de l’accueil
						</p>
					</div>
				</div>
				<div class="part">
					<div>
						<img class="icon" src="pictures/icones/information.png">
					</div>
					<div>
						<p>2011-2013 <span class="date">Chargée d'accueil</span>, Service de l’accueil</p>
					</div>
				</div>
				<div class="part">
					<div>
						<img class="icon" src="pictures/icones/garden.png">
					</div>
					<div>
						<p>2012 <span class="date">Animatrice</span>, "Visites insolites", jardin des Tuileries</p>
					</div>
				</div>
				<div class="part">
					<div>
						<img class="icon" src="pictures/icones/museum.png">
					</div>
					<div>
						<p>2008-2011<span class="date"> Agent d’accueil et surveillance muséographique</span>, Service de la surveillance muséographique</p>
					</div>
				</div>
				<p><img class="logo" src="pictures/logo/onet_logo.jpg"></p>
				<div class="part">
					<div>
						<img class="icon" src="pictures/icones/graduation.png">
					</div>
					<div>
						<p>2007 Diplôme d'agent de<span class="date">Service de Sécurité Incendie et d’Assistance à Personne</span> niveau 1 (remis à niveau en 2018)</p>
					</div>
				</div>
				<div class="part">
					<div>
						<img class="icon" src="pictures/icones/security.png">
					</div>
					<div>
						<p>2006-2008 <span class="date"> Hôtesse de sécurité</span></p>
					</div>
				</div>
				<p><img class="logo" src="pictures/logo/nov-ap_logo.jpg"></p>
				<div class="part">
					<div>
						<img class="icon" src="pictures/icones/secretary.png">
					</div>
					<div>
						<p>2005-2006 <span class="date">Assistante d'agence</span></p>
					</div>
				</div>
				<div class="part">
					<div>
						<img class="icon" src="pictures/icones/standard.png">
					</div>
					<div>
						<p>2003-2005 <span class="date">Hôtesse d'accueil</span></p>
					</div>
				</div>
				<p><img class="logo" src="pictures/logo/cnrs_logo.jpg"></p>
				<div class="part">
					<div>
						<img class="icon" src="pictures/icones/research.png">
					</div>
					<div>
						<p>2001-2003 <span class="date">Technnicienne de recherche</span></p>
					</div>
				</div>
				<p><img class="logo" src="pictures/logo/estba_logo.jpg"></p>
				<div class="part">
					<div>
						<img class="icon" src="pictures/icones/graduation.png">
					</div>
					<div>
						<p>2001 Certificat d’aptitude en <span class="date">Recherche Biomédicale option génétique moléculaire</span></p>
					</div>
				</div>
				<p><img class="logo" src="pictures/logo/encpb_logo.jpg"></p>
				<div class="part">
					<div>
						<img class="icon" src="pictures/icones/graduation.png">
					</div>
					<div>
						<p>2000 Brevet de Technicien Supérieur en <span class="date">Biochimie</span></p>
					</div>
				</div>
				<div class="part">
					<div>
						<img class="icon" src="pictures/icones/cigogn.png">
					</div>
					<div>
						<p>1980 <span class="date">Naissance</span> (41 ans)</p>
					</div>
				</div>
		</div>
	</div>
<?php
$content = ob_get_clean();
require ('template/template.php');
?>
