//exercice 1

/*var prenom=prompt('Entrez votre prénom');
alert('Bonjour '+prenom);/*

//exercice 2

/*var x= prompt('Entrez le premier nombre');
var y= prompt('Entrez le deuxième nombre');
var z = parseInt(x) + parseInt(y);
alert('Voici le resultat de la somme des deux nombres :'+z);*/

function entierAleatoit(min,max){
    return Math.floor(Math.random() * (max - min +1)) + min;
}

//Exercice 3

//Jeu trouvé le bon nombre
/*
var x = parseInt(prompt('Introduisez un nombre'));
var y = entierAleatoit(1,5);
if (x == y){
    alert('Vous avez gagné');
}else {
    alert('Vous avez perdu, le nombre était :'+y);
}*/

//Exercice 4

/*var age = parseInt(prompt('Veuillez entrer votre âge'));
while( isNaN(age) || age < 0 || age > 150){
    var age = parseInt(prompt('Veuillez entrer votre âge'));
    alert('L information entrée est éronnée, veuillez recommencer.')
} 
alert('L âge a bien été pris en compte');*/

//Exercie 5

/*
var x = parseInt(prompt('Veuillez entrer un nombre :'));
for(i=0;i<x;i++){
    alert('Nombre :'+i);
}*/

//Exercice 6 

/*
var x = parseInt(prompt('Veuillez entrer un nombre :'));
alert('Voici la table de multiplication de '+x +':');
for(i=0;i<10;i++){
    var z = i * x;
    alert(i+' x '+x+' = '+z);
}*/

//Exercice 7

//dans les fichiers calcuatrices

//Autres test, début js

//Test sur les premieres fonctions du cours en JS
/*var cars = ["Saan", "Volvo", "BMW"];
alert(cars); 
var clement=cars.length;

alert("Voici la taille du tableau : "+clement);

cars.sort();
alert(cars);


for (var i=0;i<10;i++)
alert("Voici le nombre : "+i);*/

/*
var perso=new Object();
perso.name="Clement";
perso.age=19;
perso.like="Poker";
perso.fan="Bob Dylan";

alert(perso.age + perso.like);*/
/*
function moimeme(a, l, n){
    this.age = a;
    this.like = l;
    this.name = n;
}

var perso = new moimeme(19,"Poker","Clément");

alert(perso.name+"  "+ perso.age+"  "+ perso.like);
*/
//Test sur les fonctions déjà existantes 
/*
var d = new Date();
alert(d);

var moi = prompt();
alert('Voici la donnée que l user vient de rentrer'+moi);*/


