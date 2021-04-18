//creation des diaposotives

var slide1 = Object.create(Slide);
slide1.image = "pictures/projet3/projet5_1.jpg";
slide1.titre = "1/9 | Accueil du site";
var slide2 = Object.create(Slide);
slide2.image = "pictures/projet3/projet3_2.jpg";
slide2.titre = "2/9 | Explication du site";
var slide3 = Object.create(Slide);
slide3.image = "pictures/projet3/projet3_3.jpg";
slide3.titre = "3/9 | Explication du musée";
var slide4 = Object.create(Slide);
slide4.image = "pictures/projet3/projet3_4.jpg";
slide4.titre = "4/9 | Se préparer : connaître son entrée";
var slide5 = Object.create(Slide);
slide5.image = "pictures/projet3/projet3_5.jpg";
slide5.titre = "5/9 | Accueil partie Membre";
var slide6 = Object.create(Slide);
slide6.image = "pictures/projet3/projet3_6.jpg";
slide6.titre = "6/9 | Page exclusive pour les membres pour bien organiser sa visite";
var slide7 = Object.create(Slide);
slide7.image = "pictures/projet3/projet3_7.jpg";
slide7.titre = "7/9 | Vue d'un parcours (responsive)";
var slide8 = Object.create(Slide);
slide8.image = "pictures/projet3/projet3_8.jpg";
slide8.titre = "8/9 | Accueil partie Admin"
var slide9 = Object.create(Slide);
slide9.image = "pictures/projet3/projet3_9.jpg";
slide9.titre = "9/9 | Modification des entrées"

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