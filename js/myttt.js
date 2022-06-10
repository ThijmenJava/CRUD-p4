const loginButton = document.querySelector("#login");
const signupButton = document.querySelector("#signup");
const divlogin = document.querySelector("#logindiv");
const divsignup = document.querySelector("#signupdiv");

loginButton.addEventListener("click", (event) => {
  event.preventDefault();
  divsignup.style.display = "none";
  divlogin.style.display = "block";
});

signupButton.addEventListener("click", (event) => {
  event.preventDefault();
  divsignup.style.display = "block";
  divlogin.style.display = "none";
});
