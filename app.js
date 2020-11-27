

/* Suppression du margin-bottom sur les titres des news */

let newsTitle = document.querySelectorAll('.news-title');

let length = newsTitle.length;

for (let i = 0; i < length; i++) {
	newsTitle[i].style.setProperty("margin", "0", "important");
}//Eo for



