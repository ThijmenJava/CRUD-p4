var i = 0;
var images = [];
var slideTime = 3000; // 3 seconds

images[0] = "https://via.placeholder.com/150/300AAA";
images[1] = "https://via.placeholder.com/150/000300";
images[2] = "https://via.placeholder.com/150/AAA300";

function changePicture() {
  document.body.style.backgroundImage = "url(" + images[i] + ")";

  if (i < images.length - 1) {
    i++;
  } else {
    i = 0;
  }
  setTimeout(changePicture, slideTime);
}

window.onload = changePicture;
