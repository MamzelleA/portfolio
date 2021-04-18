//creation des diaposotives
var slide1 = Object.create(Slide);
slide1.image = "pictures/projet2/projet2_1.png";
slide1.titre = "1/8 | Accueil du site et diaporama";

var slide2 = Object.create(Slide);
slide2.image = "pictures/projet2/projet2_2.png";
slide2.titre = "2/8 | Bas de la page Accueil";

var slide3 = Object.create(Slide);
slide3.image = "pictures/projet2/projet2_3.png";
slide3.titre = "3/8 | Page Actualités";

var slide4 = Object.create(Slide);
slide4.image = "pictures/projet2/projet2_4.png";
slide4.titre = "4/8 | ¨Détail d'une actualité";

var slide5 = Object.create(Slide);
slide5.image = "pictures/projet2/projet2_5.png";
slide5.titre = "5/8 | Pages Info et Contact";

var slide6 = Object.create(Slide);
slide6.image = "pictures/projet2/projet2_6.png";
slide6.titre = "6/8 | Calendrier des activités";

var slide7 = Object.create(Slide);
slide7.image = "pictures/projet2/projet2_7.png";
slide7.titre = "7/8 | Détail d'une activité";

var slide8 = Object.create(Slide);
slide8.image = "pictures/projet2/projet2_8.png";
slide8.titre = "8/8 | Vues responsive";

//creation et actions du diaporama
var monDiapo = Object.create(Slider);
monDiapo.slides = [slide1, slide2, slide3, slide4, slide5, slide6, slide7, slide8];
monDiapo.init();
if (window.matchMedia("(min-device-width: 1024px)").matches) {
    var autoDiapo = setInterval("monDiapo.nextSlide()", 3000);
};
var chevronRight = document.getElementById("chevron_right");
chevronRight.addEventListener("click", monDiapo.diapoRight);
var chevronLeft = document.getElementById("chevron_left");
chevronLeft.addEventListener("click", monDiapo.diapoLeft);
document.onkeydown = function(e){
    var code = e.keyCode;
    if (code === 39){
        monDiapo.diapoRight();
    } else if (code === 37){
        monDiapo.diapoLeft();
    };
};