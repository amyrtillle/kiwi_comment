// Sélectionner toutes les slides
const slides = document.querySelectorAll(".slide");

// parcourir les slides en boucle et définir la propriété translateX de chaque slides sur index * 100% 
slides.forEach((slide, indx) => {
  slide.style.transform = `translateX(${indx * 100}%)`;
});

// bouton de slide suivante
const nextSlide = document.querySelector(".btn-next");

// compteur de slide
let curSlide = 0;
// nombre maxixum de slides
let maxSlide = slides.length - 1;

// event listener et fonctionnalité de navigation
nextSlide.addEventListener("click", function () {
  // vérifier si la slide actuelle est la dernière et réinitialiser la slide actuelle
  if (curSlide === maxSlide) {
    curSlide = 0;
  } else {
    curSlide++;
  }

//   déplacer la slide par -100%
  slides.forEach((slide, indx) => {
    slide.style.transform = `translateX(${100 * (indx - curSlide)}%)`;
  });
});

// bouton de sélection de la slide précédente
const prevSlide = document.querySelector(".btn-prev");

//  event listener et fonctionnalité de navigation
prevSlide.addEventListener("click", function () {
  // vérifier si la slide actuelle est la première et réinitialiser la slide actuelle à la dernière
  if (curSlide === 0) {
    curSlide = maxSlide;
  } else {
    curSlide--;
  }

  //   déplacer la slide par 100%
  slides.forEach((slide, indx) => {
    slide.style.transform = `translateX(${100 * (indx - curSlide)}%)`;
  });
});