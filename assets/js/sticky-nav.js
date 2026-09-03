// setTimeout(function () {
  window.onscroll = function() {navStick()};
// },400);

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function navStick() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}