// Nav que se esconde en mobile 
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("header").style.top = "0";
    document.querySelector(".wp").style.left = "0.5rem";
    document.getElementById("mySidenav").style.width = "0";
  } else {
    document.getElementById("header").style.top = "-20rem";
    document.querySelector(".wp").style.left = "-8rem";
  }
  prevScrollpos = currentScrollPos;
}


// Menú desplegable en mobile
function openNav() {
    document.getElementById("mySidenav").style.width = "45vw";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
