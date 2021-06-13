<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Développeur Web Junior * Présentation des différents projets que j'ai réalisé dans le cadre de ma formation Openclassrooms.">
		<meta name="author" content="Agnès Masetty">

		<title><?=$title?></title>

		<!--reecriture d'url -> éviter les répertoires virtuels -->
		<!--<base href="http://localhost/portfolio/repertoire" />-->

		<link rel="shortcut icon" href="public/pictures/icones/favicon.png">

		<!-- CSS -->
		<link href="public/css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="public/css/style.css" rel="stylesheet" type="text/css">

		<!--SCRIPT-->
		<script src="public/js/jquery_prod.js"></script>
		<script src="public/js/bootstrap.js"></script>
		<!--<script src="public/js/function.js"></script>-->

		<!-- FONTS -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Didact+Gothic&family=Vibur&display=swap" rel="stylesheet">
		<link href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" rel="stylesheet" crossorigin="anonymous">
	</head>
<body>
	<header class="container-fluid m-0 p-0">

			<nav class="navbar px-0 border-bottom border-success bg-success-medium mb-3">
		<div class="p-1 row w-100">
			<div class="col">
				<div class="row">
					<div class="col-2 text-right"
						<a href="index.php" title="accueil"><span class=""><img class="img-fluid text-center img-a-nav" src="public/pictures/icones/selfie.png" alt="logo brand"></span></a>
					</div>
					<div class="col text-left"
						<h1 id="header-h1"><span id="author-span">Agnès Masetty</span></h1>
						<h2>Développeuse - intégratrice web</h2>
					</div>
				</div>
		</div>
			<div class="col-md-1 col-2 text-right">
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMarkup" aria-controls="navbarMarkup" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fas fa-bars" title="Ouvrir Menu" id="menu-sandwich"></i>
						<!--<i class="fas fa-times" title="Fermer Menu" id="menu-close"></i>-->
				  </button>
					<div class="collapse navbar-collapse" id="navbarMarkup">
						<div class="navbar-nav">
							<a class="nav-link" data-toggle="tooltip" title="Accueil" href="index.php#home"><img class="img-xs" src="public/pictures/icones/home.png" alt="home page"></a>
							<a class="nav-link" href="index.php#projects"><img class="img-xs" src="public/pictures/icones/projects.png" alt="projects page" title="Projets"></a>
							<a class="nav-link" href="index.php#resume"><img class="img-xs" src="public/pictures/icones/resume.png" alt="resume page" title="Parcours"></a>
							<a class="nav-link" href="index.php#skills"><img class="img-xs" src="public/pictures/icones/skills.png" alt="skills page" title="Compétences"></a>
						</div>
					</div>
		</div>
	</div>
</nav>
	<!-- HTML to write -->
	</header>

	<section class="container-fluid p-0">
		<?=$content?>
	</section>
	<footer class="page-footer container-fluid py-1 border-top border-success bg-success-medium">
		<div class="row w-100 text-center my-3" id="other-link" >
			<div class="col-md mb-3 mb-md-0">
				<h3>Contact</h3>
				<div><a href="mailto:contact@mamzellea.fr"><img class="img-xs" src="public/pictures/icones/email.png" alt="email"></a></div>
			</div>
			<div class="col-md mb-3 mb-md-0">
				<h3>Réseaux Sociaux</h3>
				<div><a href="https://www.linkedin.com/in/agn%C3%A8s-masetty-091b92173/"><img class="img-xs" src="public/pictures/icones/linkedin.png" alt="linkdin"></a><a href="https://www.instagram.com/1shot1phot/?hl=fr"><img class="img-xs" src="public/pictures/icones/instagram.png" alt="instagram"></a><a href="https://github.com/MamzelleA"><img class="img-xs" src="public/pictures/icones/github.png" alt="github"></a></div>
			</div>
			<div class="col-md mb-3 mb-md-0">
				<h3>Mentions légales</h3>
				<a href="index.php?action=legal"><img class="img-xs" src="public/pictures/icones/legal.png" alt="legal"></a>
			</div>
			<div class="col-md mb-3 mb-md-0">
				<h3>Lien Icons8</h3>
				<a href="https://icons8.com/"><img class="img-xs" src="public/pictures/icones/icon8.png" alt="icone8"></a>
			</div>
		</div>
		<p class="text-center" id="footer-version">version 2.1 - Mai 2021</p>
	</footer>
</body>
</html>
