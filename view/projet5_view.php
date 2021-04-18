<?php
$title = 'Projet 5 | Le finale !';
ob_start();
?>
<div class="anchor">
    <h2 class="id-page">PROJET n°5 | Destination : Louvre</h2>
    <div id="projet3">
        <div id="partie_diaporama">
            <input type="button" id="chevron_left" value="<" title="précédent (utilisez aussi la flêche gauche du clavier)">
            <div id="diaporama">
                <div><img id="image" name="image"></div>
                <h3 id="titre"></h3>
            </div>
            <input type="button" id="chevron_right" value=">" title="suivant (utilisez aussi la flêche droite du clavier)" )>
        </div>
        <div>
            <h3 class="title-project">But du projet :</h3>
            <p class="explanation">Projet libre qui doit intégrer tout ce qui a été vu lors de la formation</p>
            <p class="explanation">Création d'un site qui va permettre à utilisateur de préparer sa visite au musée du Louvre et de devenir membre pour encore mieux profiter de sa visite.</p>
            <h3 class="title-project">Compétences validées :</h3>
            <ul class="explanation">
                <li>HTML5</li>
                <li>CSS 3</li>
                <li>Javascript</li>
                <li>PHP</li>
                <li>MySql</li>
                <li>Bootstrap</li>
                <li>jQuery</li>
                <li>responsive</li>
                <li>API rest</li>
                <li>POO</li>
                <li>MVC</li>
            </ul>
            <h3 class="title-project">Lien vers le site :</h3>
            <p class="explanation"><a href="http://www.projet5.mamzellea.fr">Destination : Louvre</a></p>
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

