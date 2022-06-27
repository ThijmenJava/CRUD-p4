const vakantieButton = document.querySelector("#vakantie");
const reviewsButton = document.querySelector("#reviews");
const contactButton = document.querySelector("#contact");
const vakantiediv = document.querySelector("#vakantie-c");
const reviewsdiv = document.querySelector("#reviews-c");
const contactdiv = document.querySelector("#contact-c");

const createreviewbutton = document.querySelector("#button-review-create");
const reviewsection = document.querySelector("#review-section");
const reviewdiv = document.querySelector("#review-div");

vakantieButton.addEventListener("click", (event) => {
  event.preventDefault();
  vakantiediv.style.display = "flex";
  reviewsdiv.style.display = "none";
  contactdiv.style.display = "none";
});

reviewsButton.addEventListener("click", (event) => {
  event.preventDefault();
  vakantiediv.style.display = "none";
  reviewsdiv.style.display = "block";
  contactdiv.style.display = "none";
});

contactButton.addEventListener("click", (event) => {
  event.preventDefault();
  vakantiediv.style.display = "none";
  reviewsdiv.style.display = "none";
  contactdiv.style.display = "block";
});

createreviewbutton.addEventListener("click", (event) => {
  event.preventDefault();
  reviewsection.style.display = "flex";
  reviewdiv.style.display = "block";
});

window.onclick = (event) => {
  if (event.target === reviewsection) {
    reviewsection.style.display = "none";
    reviewdiv.style.display = "none";
  }
};
