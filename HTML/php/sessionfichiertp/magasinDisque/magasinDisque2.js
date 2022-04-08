var nbIMG = 0;
var album = new Array();
var i;

function deplacer(elementImg) {
	var panier = document.getElementById("panier");
	var vitrine = document.getElementById("vitrine");
	var fatherIMG = elementImg.parentElement;
	
	if (elementImg.closest("#vitrine")) {
		panier.appendChild(elementImg);
		nbIMG++;
		album.push(elementImg.alt);
	} else {
		vitrine.appendChild(elementImg);
		nbIMG--;
		album.splice(album.indexOf(elementImg.alt),1);
	}
	
	document.getElementById('items').value = album.join();
	document.getElementById("prix").innerHTML = (nbIMG * 7.5) + " &#8364;";
}