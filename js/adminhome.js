const vakantieButton = document.querySelector("#vakantie");
const geboekteButton = document.querySelector("#geboekte");
const reviewsButton = document.querySelector("#reviews");
const contactButton = document.querySelector("#contact");
const vakantiediv = document.querySelector("#vakantie-c");
const geboektediv = document.querySelector("#geboekte-c");
const reviewsdiv = document.querySelector("#reviews-c");
const contactdiv = document.querySelector("#contact-c");

const createVakantieButton = document.querySelector("#vakantie-knop");
const vakantiesection = document.querySelector("#create-section");
const vakantieformplek = document.querySelector("#form-plek");

vakantieButton.addEventListener("click", (event) => {
  event.preventDefault();
  vakantiediv.style.display = "block";
  geboektediv.style.display = "none";
  reviewsdiv.style.display = "none";
  contactdiv.style.display = "none";
});

geboekteButton.addEventListener("click", (event) => {
  event.preventDefault();
  vakantiediv.style.display = "none";
  geboektediv.style.display = "block";
  reviewsdiv.style.display = "none";
  contactdiv.style.display = "none";
});

reviewsButton.addEventListener("click", (event) => {
  event.preventDefault();
  vakantiediv.style.display = "none";
  geboektediv.style.display = "none";
  reviewsdiv.style.display = "block";
  contactdiv.style.display = "none";
});

contactButton.addEventListener("click", (event) => {
  event.preventDefault();
  vakantiediv.style.display = "none";
  geboektediv.style.display = "none";
  reviewsdiv.style.display = "none";
  contactdiv.style.display = "block";
});

createVakantieButton.addEventListener("click", (event) => {
  event.preventDefault();
  vakantiesection.style.display = "flex";
  vakantieformplek.style.display = "block";
});

window.onclick = (event) => {
  if (event.target === vakantiesection) {
    vakantiesection.style.display = "none";
    vakantieformplek.style.display = "none";
  }
};
