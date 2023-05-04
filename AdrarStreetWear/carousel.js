const slides = document.querySelectorAll(".Image"); // Sélectionne tous les éléments avec la classe "Image"
const nextSlide = document.querySelector(".btn-next"); // Sélectionne le bouton "suivant" et le bouton "précédent"
const prevSlide = document.querySelector(".btn-prev");

let curSlide = 0; // Initialise les variables pour la position de la slide courante et la dernière slide
let maxSlide = slides.length -2;

slides.forEach((slide, index) => {
  slide.style.transform = `translateX(${index * 100}%)`; // Aligne les slides horizontalement en leur attribuant une position basée sur leur index
});

nextSlide.addEventListener("click", function () { // Ajoute un événement pour le bouton "suivant"
  
  if (curSlide === maxSlide) { // Vérifie si la slide courante est la dernière dans le tableau
    curSlide = 0; // Si oui, revient à la première slide
  } else {
    curSlide++; // Sinon, avance d'une slide
  }
  
  slides.forEach((slide, index) => {
    slide.style.transform = `translateX(${100 * (index - curSlide)}%)`; // Ajuste la position de chaque slide pour la faire défiler vers la gauche
  });

});


prevSlide.addEventListener("click", function () { // Ajoute un événement pour le bouton "précédent"
  
  if (curSlide === 0) { // Vérifie si la slide courante est la première dans le tableau
    curSlide = maxSlide; // Si oui, revient à la dernière slide
  } else {
    curSlide--;// Sinon, recule d'une slide
  }
  
  slides.forEach((slide, index) => {
    slide.style.transform = `translateX(${100 * (index - curSlide)}%)`; // Ajuste la position de chaque slide pour la faire défiler vers la gauche
  });

});
