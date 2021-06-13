<?php
$title = 'PORTFOLIO';
ob_start();
?>
<div id="home" class="jumbotron jumbotron-fluid mt-3 mb-5 bg-success-light shadow rounded mx-3">
  <div class="container">
    <h3 class="display-4 h3-jumbotron"><span class="bg-tricks">X</span>Bienvenue</h3>
    <p class="lead">Sur mon site portfolio professionnel, vous y trouverez tous les <span class="span-p-l">projets</span> que j'ai développés, mon <span class="span-p-l">parcours</span> professionnel et les différentes <span class="span-p-l">compétences</span> que j'ai pu développer tout au long de ma carrière.<br>Bonne visite !</p>
    <hr>
    <div class="row text-center mt-5">
      <a class="col-md shadow p-5 mx-3 mb-3 bg-success-medium rounded a-hover-style" href="index.php#projects">
        <h4 class="text-uppercase size-h3">projets</h4>
        <img class="img-s" src="public/pictures/icones/projects.png" alt="projects page" title="Projets">
      </a>
      <a class="col-md shadow p-5 mx-3 mb-3 bg-success-medium rounded a-hover-style" href="index.php#resume">
        <h4 class="text-uppercase size-h3">parcours</h4>
        <img class="img-s" src="public/pictures/icones/resume.png" alt="resume page" title="Parcours">
      </a>
      <a class="col-md shadow p-5 mx-3 mb-3 bg-success-medium rounded a-hover-style" href="index.php#skills">
        <h4 class="text-uppercase size-h3">compétences</h4>
        <img class="img-s" src="public/pictures/icones/skills.png" alt="skills page" title="Compétences">
      </a>
    </div>
  </div>
</div>
  <article id="projects" class="mb-5 mx-3">
      <h3 class="mb-3 bg-success-light shadow rounded p-3 h3-article"><span class="bg-tricks">X</span>PROJETS</h3>
      <div class="card-columns">
      <div class="card border-success rounded shadow">
        <div class="card-body">
          <h4>Projet n°1<br>HTML5 & CSS3</h4>
          <p class="card-text">Intégrer une maquette</p>
        </div>
        <img class="img-fluid" src="public/pictures/projet1/projet_1-0.jpg" alt="page accueil projet 1">
        <footer class="card-footer text-center border-top border-success p-1 p-md-3">
          <a class="text-uppercase a-hover-style" href="index.php?action=projet1">Découvrir</a>
        </footer>
      </div>
      <div class="card border-success shadow">
        <div class="card-body">
          <h4>Projet n°2<br>WORDPRESS</h4>
          <p class="card-text">Créer un site avec un CMS</p>
        </div>
        <img class="img-fluid" src="public/pictures/projet2/projet_2-0.jpg">
        <footer class="card-footer text-center border-top border-success p-1 p-md-3">
          <a class="text-uppercase a-hover-style" href="index.php?action=projet2">Découvrir</a>
        </footer>
      </div>
      <div class="card border-success shadow">
        <div class="card-body">
          <h4>Projet n°3<br>JAVASCRIPT</h4>
          <p class="card-text">Créer un site dynamique</p>
        </div>
        <img class="img-fluid" src="public/pictures/projet3/projet_3-0.jpg">
        <footer class="card-footer text-center border-top border-success p-1 p-md-3">
          <a class="text-uppercase a-hover-style" href="index.php?action=projet3">Découvrir</a>
        </footer>
      </div>
      <div class="card border-success shadow">
        <div class="card-body">
          <h4>Projet n°4<br>PHP & SQL</h4>
          <p class="card-text">Créer un site selon une architecture MVC</p>
        </div>
        <img class="img-fluid" src="public/pictures/projet4/projet_4-0.jpg">
        <footer class="card-footer text-center border-top border-success p-1 p-md-3">
          <a class="text-uppercase a-hover-style" href="index.php?action=projet4">Découvrir</a>
        </footer>
      </div>
      <div class="card border-success shadow">
        <div class="card-body">
          <h4>Projet n°5<br>LE FINAL</h4>
          <p class="card-text">Projet libre</p>
        </div>
        <img class="img-fluid" src="public/pictures/projet5/projet_5-0.jpg">
        <footer class="card-footer text-center border-top border-success p-1 p-md-3">
          <a class="text-uppercase a-hover-style" href="index.php?action=projet5">Découvrir</a>
        </footer>
      </div>
      <div class="card border-success shadow">
        <div class="card-body">
          <h4>Projet n°6<br>PORTFOLIO</h4>
          <p class="card-text">Création de mon portfolio professionnel<br>En constante évolution !</p>
        </div>
        <img class="img-fluid" src="public/pictures/projet6/projet_6-0.jpg">
        <footer class="card-footer text-center border-top border-success p-1 p-md-3">
          <a class="text-uppercase a-hover-style" href="index.php?action=projet6">Découvrir</a>
        </footer>
      </div>
    </div>
  </article>
  <article id="resume" class="mb-5">
    <h3 class="mb-3 mx-3 bg-success-light shadow rounded p-3 h3-article"><span class="bg-tricks">X</span>PARCOURS</h3>
			<div class="row mx-3 my-3 py-1 rounded shadow">
				<div class="col-1">
					<a id="resume-link" href="file/CV_agnes-masetty.pdf"><img class="img-xs" src="public/pictures/icones/download.png" alt="téléchargement"></a>
				</div>
				<div class="col">
					<p>Télécharger <a class=" a-hover-style" id="resume-link" href="public/file/CV_agnes-masetty.pdf"><span class="span-p-s">mon CV</span></a> au format PDF.</p>
				</div>
			</div>
      <div class="row mx-3 my-3 py-1 rounded shadow">
				<div class="col-1">
					<a id="resume-link" href="file/portfolio_agnes-masetty.pdf"><img class="img-xs" src="public/pictures/icones/download.png" alt="téléchargement"></a>
				</div>
				<div class="col">
					<p>Télécharger <a class=" a-hover-style" id="resume-link" href="public/file/portfolio_agnes-masetty.pdf"><span class="span-p-s">mon portfolio</span></a> au format PDF.</p>
				</div>
			</div>
			<div class="row mx-3 mb-1 mt-3 border-white rounded shadow">
				<div class="col-1 border-right border-success">
					<img class="img-xs" src="public/pictures/icones/code.png">
				</div>
				<div class="col">
					<p>2019-... <br>Projet développé à titre personnel : Portfolio : <span class="span-p-s">design et développement de mon site portfolio professionnel</span></p>
				</div>
			</div>
      <p class="mt-3 mx-3"><img class="img-logo" src="public/pictures/logo/oc_logo.jpg"></p>
			<div class="row mx-3">
				<div class="col-1 border-right border-success">
					<img class="img-xs" src="public/pictures/icones/graduation.png">
				</div>
				<div class="col">
					<p>2021<br>Diplôme de <span class="span-p-s">Développeur Intégrateur en réalisation d’applications Web</span></p>
				</div>
			</div>
			<div class="row mb-1 mx-3 border-white rounded shadow">
				<div class="col-1 border-right border-success">
					<img class="img-xs" src="public/pictures/icones/code.png">
				</div>
				<div class="col">
					<p>2017-2021<br><span class="span-p-s">5 projets développés</span> dans le cadre de la formation Développeur Web Junior</p>
				</div>
			</div>
      <p class="mt-3 mx-3"><img class="img-logo" src="public/pictures/logo/louvre_logo.jpg"></p>
			<div class="row mx-3">
				<div class="col-1 border-right border-success">
					<img class="img-xs" src="public/pictures/icones/chef.png">
				</div>
				<div class="col">
					<p>2020-...<br><span class="span-p-s">Chef d’équipe</span>, Service de la surveillance muséographique, équipe mobile d’intervention</p>
					<p>2013-2020<br><span class="span-p-s">Chef d’équipe</span>, Service de l’accueil</p>
				</div>
			</div>
			<div class="row mx-3">
				<div class="col-1 border-right border-success">
					<img class="img-xs" src="public/pictures/icones/garden.png">
				</div>
				<div class="col">
					<p>2012-...<br><span class="span-p-s">Animatrice des "Visites insolites"</span>, jardin des Tuileries</p>
				</div>
			</div>
			<div class="row mx-3">
				<div class="col-1 border-right border-success">
					<img class="img-xs" src="public/pictures/icones/information.png">
				</div>
				<div class="col">
					<p>2011-2013<br><span class="span-p-s">Chargée d'accueil</span>, Service de l’accueil</p>
				</div>
			</div>
			<div class="row mb-1 mx-3 border-white rounded shadow">
				<div class="col-1 border-right border-success">
					<img class="img-xs" src="public/pictures/icones/museum.png">
				</div>
				<div class="col">
					<p>2008-2011<br><span class="span-p-s"> Agent d’accueil et surveillance muséographique</span>, Service de la surveillance muséographique</p>
				</div>
			</div>
      <p class="mt-3 mx-3"><img class="img-logo" src="public/pictures/logo/onet_logo.jpg"></p>
			<div class="row mx-3">
				<div class="col-1 border-right border-success">
					<img class="img-xs" src="public/pictures/icones/graduation.png">
				</div>
				<div class="col">
					<p>2007<br>Diplôme d'agent de <span class="span-p-s">Service de Sécurité Incendie et d’Assistance à Personne</span> niveau 1 (remis à niveau en 2018)</p>
				</div>
			</div>
			<div class="row mb-1 mx-3 border-white rounded shadow">
				<div class="col-1 border-right border-success">
					<img class="img-xs" src="public/pictures/icones/security.png">
				</div>
				<div class="col">
					<p>2006-2008<br><span class="span-p-s">Hôtesse de sécurité</span></p>
				</div>
			</div>
      <p class="mt-3 mx-3"><img class="img-logo" src="public/pictures/logo/nov-ap_logo.jpg"></p>
			<div class="row mx-3">
				<div class="col-1 border-right border-success">
					<img class="img-xs" src="public/pictures/icones/secretary.png">
				</div>
				<div class="col">
					<p>2005-2006<br><span class="span-p-s">Assistante d'agence</span></p>
				</div>
			</div>
			<div class="row mb-1 mx-3 border-white rounded shadow">
				<div class="col-1 border-right border-success">
					<img class="img-xs" src="public/pictures/icones/standard.png">
				</div>
				<div class="col">
					<p>2003-2005<br><span class="span-p-s">Hôtesse d'accueil</span></p>
				</div>
			</div>
      <p class="mt-3 mx-3"><img class="img-logo" src="public/pictures/logo/cnrs_logo.jpg"></p>
			<div class="row mb-1 mx-3 border-white rounded shadow-sm">
				<div class="col-1 border-right border-success">
						<img class="img-xs" src="public/pictures/icones/research.png">
				</div>
				<div class="col">
					<p>2001-2003<br><span class="span-p-s">Technnicienne de recherche</span></p>
				</div>
			</div>
      <p class="mt-3 mx-3"><img class="img-logo" src="public/pictures/logo/estba_logo.jpg"></p>
			<div class="row mx-3 mb-1 border-white rounded shadow">
				<div class="col-1 border-right border-success">
						<img class="img-xs" src="public/pictures/icones/graduation.png">
				</div>
				<div class="col">
					<p>2001<br>Certificat d’aptitude en <span class="span-p-s">Recherche Biomédicale option génétique moléculaire</span></p>
				</div>
			</div>
      <p class="mt-3 mx-3"><img class="img-logo" src="public/pictures/logo/encpb_logo.jpg"></p>
			<div class="row mb-1 mx-3 border-white rounded shadow">
				<div class="col-1 border-right border-success">
						<img class="img-xs" src="public/pictures/icones/graduation.png">
				</div>
				<div class="col">
					<p>2000<br>Brevet de Technicien Supérieur en <span class="span-p-s">Biochimie</span></p>
				</div>
			</div>
			<div class="row mb-1 mt-3 mx-3 border-white rounded shadow">
				<div class="col-1 border-right border-success">
						<img class="img-xs" src="public/pictures/icones/cigogn.png">
				</div>
				<div class="col">
					<p>1980<br><span class="span-p-s">Naissance</span> (41 ans)</p>
				</div>
			</div>
  </article>
  <article id="skills" class="mb-5">
        <h3 class="mb-3 mx-3 bg-success-light shadow rounded p-3 h3-article"><span class="bg-tricks">X</span>COMPETENCES</h3>
  			<div class="text-center shadow p-1 rounded mx-3">
  				<div class="border-white rounded p-3" id="technic-skills">
            <h4>Web</h4>
            <figure class="figure mx-1">
              <img class="img-xs" src="public/pictures/icones/html.png" alt="html5">
              <figcaption class="figure-caption text-uppercase text-center">html</figcaption>
            </figure>
            <figure class="figure mx-1">
              <img class="img-xs" src="public/pictures/icones/css.png" alt="css3">
              <figcaption class="figure-caption text-uppercase text-center">css</figcaption>
            </figure>
            <figure class="figure mx-1">
              <img class="img-xs" src="public/pictures/icones/js.png" alt="javascript">
              <figcaption class="figure-caption text-uppercase text-center">javascript</figcaption>
            </figure>
            <figure class="figure mx-1">
              <img class="img-xs" src="public/pictures/icones/php.png" alt="php">
              <figcaption class="figure-caption text-uppercase text-center">php</figcaption>
            </figure>
            <figure class="figure mx-1">
              <img class="img-xs" src="public/pictures/icones/mysql.png" alt="mysql">
              <figcaption class="figure-caption text-uppercase text-center">mysql</figcaption>
            </figure>
            <figure class="figure mx-1">
              <img class="img-xs" src="public/pictures/icones/api.png" alt="api">
              <figcaption class="figure-caption text-uppercase text-center">api rest</figcaption>
            </figure>
            <figure class="figure mx-1">
              <img class="img-xs" src="public/pictures/icones/jquery.png" alt="jquery">
              <figcaption class="figure-caption text-uppercase text-center">jquery</figcaption>
            </figure>
            <figure class="figure mx-1">
              <img class="img-xs" src="public/pictures/icones/wordpress.png" alt="wordpress">
              <figcaption class="figure-caption text-uppercase text-center">wordpress</figcaption>
            </figure>
            <figure class="figure mx-1">
              <img class="img-xs" src="public/pictures/icones/bootstrap.png" alt="bootstrap">
              <figcaption class="figure-caption text-uppercase text-center">bootstrap</figcaption>
            </figure>
            <figure class="figure mx-1">
              <img class="img-xs" src="public/pictures/icones/git.png" alt="git">
              <figcaption class="figure-caption text-uppercase text-center">git</figcaption>
            </figure>
            <figure class="figure mx-1">
              <img class="img-xs" src="public/pictures/icones/github.png" alt="github">
              <figcaption class="figure-caption text-uppercase text-center">github</figcaption>
            </figure>
            <figure class="figure mx-1">
              <img class="img-xs" src="public/pictures/icones/ps.png" alt="photoshop">
              <figcaption class="figure-caption text-uppercase text-center">photoshop</figcaption>
            </figure>
  				</div>
          <div class="border-white rounded p-3" id="being-skills">
              <h4>Savoir-être</h4>
              <figure class="figure mx-1">
                <img class="img-xs" src="public/pictures/icones/analyse.png" alt="analyse">
                <figcaption class="figure-caption text-uppercase text-center">analyse</figcaption>
              </figure>
              <figure class="figure mx-1">
                <img class="img-xs" src="public/pictures/icones/autonomie.png" alt="autonome">
                <figcaption class="figure-caption text-uppercase text-center">autonomie</figcaption>
              </figure>
              <figure class="figure mx-1">
                <img class="img-xs" src="public/pictures/icones/adapt.png" alt="adaptation">
                <figcaption class="figure-caption text-uppercase text-center">adaptabilité</figcaption>
              </figure>
              <figure class="figure mx-1">
                <img class="img-xs" src="public/pictures/icones/creative.png" alt="créativité">
                <figcaption class="figure-caption text-uppercase text-center">créativité</figcaption>
              </figure>
              <figure class="figure mx-1">
                <img class="img-xs" src="public/pictures/icones/listen.png" alt="écoute">
                <figcaption class="figure-caption text-uppercase text-center">écoute</figcaption>
              </figure>
              <figure class="figure mx-1">
                <img class="img-xs" src="public/pictures/icones/empathy.png" alt="empathie">
                <figcaption class="figure-caption text-uppercase text-center">empathie</figcaption>
              </figure>
              <figure class="figure mx-1">
                <img class="img-xs" src="public/pictures/icones/synthese.png" alt="synthèse">
                <figcaption class="figure-caption text-uppercase text-center">synthèse</figcaption>
              </figure>
              <figure class="figure mx-1">
                <img class="img-xs" src="public/pictures/icones/precision.png" alt="précision">
                <figcaption class="figure-caption text-uppercase text-center">précision</figcaption>
              </figure>
  					</div>
    				<div class="border-white rounded p-3" id="doing-skills">
    					<h4>Savoir-faire</h4>
              <figure class="figure mx-1">
                <img class="img-xs" src="public/pictures/icones/groupe.png" alt="animation de groupe">
                <figcaption class="figure-caption text-uppercase text-center">animation de groupe</figcaption>
              </figure>
              <figure class="figure mx-1">
                <img class="img-xs" src="public/pictures/icones/equipe.png" alt="esprit d'équipe">
                <figcaption class="figure-caption text-uppercase text-center">esprit d'équipe</figcaption>
              </figure>
              <figure class="figure mx-1">
                <img class="img-xs" src="public/pictures/icones/conflit.png" alt="gestion de conflit">
                <figcaption class="figure-caption text-uppercase text-center">gestion de conflit</figcaption>
              </figure>
              <figure class="figure mx-1">
                <img class="img-xs" src="public/pictures/icones/chef.png" alt="gestion d'équipe">
                <figcaption class="figure-caption text-uppercase text-center">gestion d'équipe</figcaption>
              </figure>
              <figure class="figure mx-1">
                <img class="img-xs" src="public/pictures/icones/planif.png" alt="planification">
                <figcaption class="figure-caption text-uppercase text-center">planification</figcaption>
              </figure>
              <figure class="figure mx-1">
                <img class="img-xs" src="public/pictures/icones/redaction.png" alt="rédaction">
                <figcaption class="figure-caption text-uppercase text-center">rédaction</figcaption>
              </figure>
            </div>
    				<div class="border-white rounded p-3" id="speaking-skills">
    					<h4>Langues</h4>
                <figure class="figure mx-1">
                  <img class="img-xs" src="public/pictures/icones/english.png" alt="anglais">
                  <figcaption class="figure-caption text-uppercase text-center">
                    Anglais<br>
                    niveau C1 / lu, écrit, parlé
                  </figcaption>
                </figure>
                <figure class="figure mx-1">
                  <img class="img-xs" src="public/pictures/icones/italian.png" alt="italien">
                  <figcaption class="figure-caption text-uppercase text-center">
                    Italien<br>
                    niveau B2 / lu, écrit, parlé
                  </figcaption>
                </figure>
                <figure class="figure mx-1">
                  <img class="img-xs" src="public/pictures/icones/spanish.png" alt="espagnol">
                  <figcaption class="figure-caption text-uppercase text-center">
                    Espagnol<br>
                    niveau A2 / notions
                  </figcaption>
                </figure>
    				</div>
    				<div class="border-white rounded p-3" id="hobbies-skills">
    					<h4>Loisirs</h4>
              <figure class="figure mx-1">
                <img class="img-xs" src="public/pictures/icones/sew.png" alt="couture">
                <figcaption class="figure-caption text-uppercase text-center">couture</figcaption>
              </figure>
              <figure class="figure mx-1">
                <img class="img-xs" src="public/pictures/icones/museum.png" alt="expositions">
                <figcaption class="figure-caption text-uppercase text-center">exposition</figcaption>
              </figure>
              <figure class="figure mx-1">
                <img class="img-xs" src="public/pictures/icones/swim.png" alt="natation">
                <figcaption class="figure-caption text-uppercase text-center">natation</figcaption>
              </figure>
              <figure class="figure mx-1">
                <img class="img-xs" src="public/pictures/icones/photo.png" alt="photographie">
                <figcaption class="figure-caption text-uppercase text-center">photographie</figcaption>
              </figure>
    				</div>
          </div>
  			</div>
  	</div>
  </article>
<?php
$content = ob_get_clean();
require ('template/template.php');
?>
