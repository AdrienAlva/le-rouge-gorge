

/* Suppression du margin-bottom sur les titres des news */

let newsTitle = document.querySelectorAll('.news-title');

let length = newsTitle.length;

for (let i = 0; i < length; i++) {
	newsTitle[i].style.setProperty("margin", "0", "important");
}//Eo for


/* Fonctionnement de la navbar mobile */



function openMenu() {
  document.getElementById("myDropdown").classList.toggle("show");
  document.getElementById("nav-icon3").classList.toggle("open");
}

// Close the dropdown if the user clicks outside of it

window.onclick = function(e) {
  if (!e.target.matches('.dropbtn') && !e.target.matches('.dropbtn-span')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }

    if (!e.target.matches('.dropbtn') && !e.target.matches('.dropbtn-span')) {
  var myButton = document.getElementById("nav-icon3");
    if (myButton.classList.contains('open')) {
      myButton.classList.remove('open');
    }
  }
}

/*window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myButton = document.getElementById("nav-icon3");
    if (myButton.classList.contains('open')) {
      myButton.classList.remove('open');
    }
  }
}*/
