/*function verifie(x){
    if (invaid_x(x.value)){
        login.style.border="1px solid red";
        document.getElementById("Erreur Login").innerHTML=x+" invalide ou vide";
        erreur=true;
    }else{
        login.style.border="solid 1px gray";
        document.getElementById("Erreur Login").innerHTML="";
    }
}*/

function controle(){var erreur=false;
    var prenom = document.getElementById("prenom");
    /*var nom = document.getElementById("nom");
    var email = document.getElementById("email");
    var email2 = document.getElementById("email2");
*/
    if (invalid_prenom(prenom.value)){
        prenom.style.border="1px solid red";
        document.getElementById("erreurprenom").innerHTML="prenom invalide ou vide";
        erreur=true;
    }else{
        prenom.style.border="solid 1px gray";
        document.getElementById("erreurprenom").innerHTML="";
    }/*

    if (invalid_nom(nom.value)){
        nom.style.border="1px solid red";
        document.getElementById("erreurnom").innerHTML="Nom invalide ou vide";
        erreur=true;
    }else{
        nom.style.border="solid 1px gray";
        document.getElementById("erreurnom").innerHTML="";
    }

    if (invalid_email(email.value)){
        email.style.border="1px solid red";
        document.getElementById("erreuremail").innerHTML="l'email invalide ou vide";
        erreur=true;
    }else{
        email.style.border="solid 1px gray";
        document.getElementById("erreuremail").innerHTML="";
    }

    if (invalid_email2(email2.value)){
        email2.style.border="1px solid red";
        document.getElementById("erreuremail2").innerHTML="l'email  invalide ou vide";
        erreur=true;
    }else{
        email2.style.border="solid 1px gray";
        document.getElementById("erreuremail2").innerHTML="";
    }
    */
    //verifie(prenom);verifie(nom);verifie(email); verifie(email2);

    return !erreur;

}