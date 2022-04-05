var nbIMG = 0;

function deplacer(elementImg) {
	var panier = document.getElementById("panier");
	var vitrine = document.getElementById("vitrine");
	var fatherIMG = elementImg.parentElement;

	if (elementImg.closest("#vitrine")) {
		panier.appendChild(elementImg);
		nbIMG++;
	} else {
		vitrine.appendChild(elementImg);
		nbIMG--;
	}
	document.getElementById("prix").innerHTML = (nbIMG * 7.5) + " &#8364;";
}