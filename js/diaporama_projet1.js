//creation des diaposotives
var slide1 = Object.create(Slide);
slide1.image = "pictures/projet1/projet1_1.png";
slide1.titre = "1/5 | Accueil du site et diaporama";

var slide2 = Object.create(Slide);
slide2.image = "pictures/projet1/projet1_2.png";
slide2.titre = "2/5 | Partie services";

var slide3 = Object.create(Slide);
slide3.image = "pictures/projet1/projet1_3.png";
slide3.titre = "3/5 | Partie projets";

var slide4 = Object.create(Slide);
slide4.image = "pictures/projet1/projet1_4.png";
slide4.titre = "4/5 | ¨Partie contact";

var slide5 = Object.create(Slide);
slide5.image = "pictures/projet1/projet1_5.png";
slide5.titre = "5/5 | Vues responsive";

//creation et actions du diaporama
var monDiapo = Object.create(Slider);
monDiapo.slides = [slide1, slide2, slide3, slide4, slide5];
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