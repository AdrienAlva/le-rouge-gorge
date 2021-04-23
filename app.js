/* Pour version mobile déplacement du titre du produit avant l'image sur single product. */

jQuery( function($) {

  mobile = $(window).width();
  if ( mobile <= 480 ){
    jQuery( ".product_title.entry-title" ).insertBefore( ".images" );
  }

} );

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
  document.getElementById("mobile-search-bar").classList.toggle("show-mobile");/* for click bug on "mon compte" which trigger searching */

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

  if (!e.target.matches('.dropbtn') && !e.target.matches('.dropbtn-span')) {
    var myButton = document.getElementById("mobile-search-bar");
    if (!myButton.classList.contains('show-mobile')) {
      myButton.classList.toggle('show-mobile');
    }
  }
}