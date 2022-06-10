const vakantieButton = document.querySelector("#vakantie");
const reviewsButton = document.querySelector("#reviews");
const contactButton = document.querySelector("#contact");
const vakantiediv = document.querySelector("#vakantie-c");
const reviewsdiv = document.querySelector("#reviews-c");
const contactdiv = document.querySelector("#contact-c");

vakantieButton.addEventListener("click", (event) => {
  event.preventDefault();
  vakantiediv.style.display = "block";
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
