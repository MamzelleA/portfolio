//creation des diaposotives

var slide1 = Object.create(Slide);
slide1.image = "pictures/projet3/projet3_1.png";
slide1.titre = "1/7 | Accueil du site et diaporama d'explications";
var slide2 = Object.create(Slide);
slide2.image = "pictures/projet3/projet3_2.png";
slide2.titre = "2/7 | Partie réservation";
var slide3 = Object.create(Slide);
slide3.image = "pictures/projet3/projet3_3.png";
slide3.titre = "3/7 | Détail d'une station";
var slide4 = Object.create(Slide);
slide4.image = "pictures/projet3/projet3_4.png";
slide4.titre = "4/7 | Signature pour confirmer la réservation";
var slide5 = Object.create(Slide);
slide5.image = "pictures/projet3/projet3_5.png";
slide5.titre = "5/7 | Confirmation de la réservation et compteur";
var slide6 = Object.create(Slide);
slide6.image = "pictures/projet3/projet3_6.png";
slide6.titre = "6/7 | Réservation expirée";
var slide7 = Object.create(Slide);
slide7.image = "pictures/projet3/projet3_7.png";
slide7.titre = "7/7 | Vues responsive"

//creation et actions du diaporama
var monDiapo = Object.create(Slider);
monDiapo.slides = [slide1, slide2, slide3, slide4, slide5, slide6, slide7];
monDiapo.init();
if (window.matchMedia("(min-device-width: 1024px)").matches) {
    var autoDiapo = setInterval("monDiapo.nextSlide()", 3000);
};
var chevronRight = document.getElementById("chevron_right");
chevronRight.addEventListener("click", monDiapo.diapoRight);
var chevronLeft = document.getElementById("chevron_left");
chevronLeft.addEventListener("click", monDiapo.diapoLeft);
document.onkeydown = function (e) {
    var code = e.keyCode;
    if (code === 39) {
        monDiapo.diapoRight();
    } else if (code === 37) {
        monDiapo.diapoLeft();
    };
};