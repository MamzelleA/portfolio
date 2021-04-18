//DIAPOSITIVE
var Slide = {
    image: "",
    titre: "",
    
    afficher: function(){
        var image = document.getElementById("image");
        image.src = this.image; 
        image.setAttribute = ("alt", "Illustration du diaporama");
        var titre = document.getElementById("titre");
        titre.textContent = this.titre;
    }
};
//DIAPORAMA
var Slider = {
    slides: [],
    currentSlide: 0,
    init: function (){
        this.slides[0].afficher();
    },
    nextSlide: function(){
        if (this.currentSlide === this.slides.length-1){
            this.currentSlide = 0;
            this.slides[0].afficher();
        } else {
            this.currentSlide = this.currentSlide+1;
            this.slides[this.currentSlide].afficher();
        }
    },
    prevSlide: function(){
        if (this.currentSlide === 0){
                this.currentSlide = 0;
        } else {
                this.currentSlide = this.currentSlide-1;
                this.slides[this.currentSlide].afficher();
        }
    },
    diapoRight: function(){
        monDiapo.nextSlide();
        clearInterval(autoDiapo);
    },
    diapoLeft: function(){
        monDiapo.prevSlide();
        clearInterval(autoDiapo);
    }
};