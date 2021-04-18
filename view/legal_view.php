<?php
$title = 'Mentions légales';
ob_start();
?>
    <div class="anchor" id="portofolio">
		<h2 class="id-page">MENTIONS LEGALES</h2>
		<h3>Editeur et responsable éditorial</h3>
        <p>Agnès Masetty <br>
        2 rue Archereau <br>
        Paris 19<br>
        contact@mamzellea.fr<br>
        </p>

        <h3>Hébergeur</h3>
        <p>OBAMBU SARL<br>
        RCS Paris 80398875700016<br>
        10 rue de Penthièvre<br>
        75008 Paris<br>
        <a href="www.obambu.com">www.obambu.com</a><br>
        </p>

        <h3>Propriété intellectuelle</h3>
        <p>Tout le contenu du présent site, incluant, de façon non limitative, les graphismes, images, textes, vidéos, animations, sons, logos, gifs et icônes ainsi que leur mise en forme sont la propriété exclusive d'Agnès Masetty à l'exception des marques, logos ou contenus appartenant à d'autres sociétés partenaires ou auteurs. En particulier, toutes les icônes présentent sur le site proviennent du site internet <span class="date"><a href="https://icones8.fr/">ICONS8</a></span>.<br>
        Toute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite sans l'accord exprès par écrit de Agnès Masetty. Cette représentation ou reproduction, par quelque procédé que ce soit, constitue une contrefaçon sanctionnée par les articles L.3335-2 et suivants du Code de la propriété intellectuelle. Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur. En outre, les propriétaires des Contenus copiés pourraient intenter une action en justice à votre encontre.</p>
    </div>
<?php
$content = ob_get_clean();
require('template/template.php');
?>
