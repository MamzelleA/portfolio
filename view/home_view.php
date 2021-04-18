<?php
$title = 'Accueil';
ob_start();
?>
<div class="anchor">
    <h1 id="third" class="home-h2-last">Développeuse & Intégratrice d'application web</h1>
    <h2 class="id-page">BIENVENUE</h2>
    <div id="links">
        <div class="link" id="link-project"><a href="index.php?action=portfolio">PROJETS</a></div>
        <div class="link" id="link-resume"><a href="index.php?action=resume">PARCOURS</a></div>
        <div class="link" id="link-skills"><a href="index.php?action=skills">COMPETENCES</a></div>
    </div>
</div>
<?php
$content = ob_get_clean();
require ('template/template.php');
?>
