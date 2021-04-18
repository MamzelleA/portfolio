<!DOCTYPE html>
<html lang="fr">
<head>

	<meta charset="utf-8">
	<title>| <?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Développeur Web Junior * Présentation des différents projets que j'ai réalisé dans le cadre de ma formation Openclassrooms.">
	<meta name="author" content="Agnès Masetty">

	<link rel="shortcut icon" href="pictures/icones/favicon.png">

	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" media="screen and (max-width: 959px)" href="css/small_resolution.css" />
	<link rel="stylesheet" media="screen and (min-width: 1281px)" href="css/large_resolution.css" />

	<!--SCRIPT-->

	<!--FONTS-->
	<link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive|Cormorant+Upright|Didact+Gothic|Vibur" rel="stylesheet">

</head>
<body>
		<header>
			<div class="sidebar">
			<nav id="navbar">
				<div id="logo">
					<a href="index.php">
						<div id="title-site">
							<div id="logo-img"><img src="pictures/selfie.png"></div>
							<div id="site-name">
								<h3>Agnès Masetty</h3>
							</div>
						</div>
					</a>
				</div>
				<div id="menu hamburger">
					<div id="hamburger-content">
						<ul>
							<li><a href="index.php">Accueil</a></li>
							<li><a href="index.php?action=portfolio">Projets</a></li>
							<li><a href="index.php?action=resume">Parcours</a></li>
							<li><a href="index.php?action=skills">Compétences</a></li>
						</ul>
					</div>
				</div>
				<button id="hamburger-button"><img src="pictures/icones/sandwich.png"></button>
			</nav>
			</div>
		</header>
		<section><?= $content ?></section>
		<footer>
				<div id="other-link" >
					<div id="col-1">
						<h3>Contact</h3>
						<div><a href="mailto:contact@mamzellea.fr"><img src="pictures/icones/email.png" alt="email"></a></div>
					</div>
					<div id="col-2">
						<h3>Réseaux Sociaux</h3>
						<div><a href="https://www.linkedin.com/in/agn%C3%A8s-masetty-091b92173/"><img src="pictures/icones/linkedin.png" alt="linkdin"></a><a href="https://www.instagram.com/1shot1phot/?hl=fr"><img src="pictures/icones/instagram.png" alt="instagram"></a><a href="https://github.com/MamzelleA"><img src="pictures/icones/github.png" alt="github"></a></div>
					</div>
					<div id="col-3">
						<h3>Mentions légales</h3>
						<a href="index.php?action=legal"><img src="pictures/icones/legal.png" alt="linkdin"></a>
					</div>
					<div id="col-4">
    					<h3>Lien Icons8</h3>
    					<a href="https://icons8.com/"><img src="pictures/icones/icon8.png" alt="icone8"></a>
					</div>
				</div>
				<p id="footer-version">version 1.2 - Avril 2021</p>
		</footer>
</body>
</html>
