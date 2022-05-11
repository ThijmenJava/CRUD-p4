const slideShow = document.querySelector("#slideshow");
var i = 0;
var images = [];
var slideTime = 4000; // 3 seconds

images[0] = "img/vacation.jpeg";
images[1] = "img/vacation2.jpeg";
images[2] = "img/vacation3.jpg";
images[3] = "img/vacation4.jpeg";
images[4] = "img/vacation6.jpeg";
images[5] = "img/vacation7.jpeg";
images[6] = "img/vacation8.jpeg";
images[7] = "img/vacation9.jpeg";
images[8] = "img/vacation10.jpeg";
images[9] = "img/vacation11.jpeg";

function changePicture() {
  slideShow.style.backgroundImage = "url(" + images[i] + ")";

  if (i < images.length - 1) {
    i++;
  } else {
    i = 0;
  }
  setTimeout(changePicture, slideTime);
}

window.onload = changePicture;
