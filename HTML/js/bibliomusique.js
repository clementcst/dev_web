function ajouter() {
    
    //var artiste = document.getElementsById('add').value;
    /*var taille = artiste.length-1;
    artiste=artiste.substr(0,1).toUpperCase()+artiste.substr(1,taille).toLowerCase();
    var select = document.getElementById('liste');
        for (i=0; i<select.taille;i++){
            if (artiste == select.children[i].text){
                
            }
        }*/
    
    var ajout = document.getElementById('add').value;
    var node = document.createElement("option");
    var texte = document.createTextNode(ajout);
    node.appendChild(texte);
    document.getElementById("liste").appendChild(node);
    //document.getElementById('add').value="";
    
}


function sup() {

    alert("ou");
    var artiste = document.getElementById('supprimer').value;
    //var taille = artiste.length-1;

    //artiste=artiste.substr(0,1).toUpperCase()+artiste.substr(1,taille).toLowerCase();
    var select = document.getElementById('liste');
    
    for(i=0; i<select.length;i++){
        if (artiste == select.children[i].text && select.children[i].value !=0){
            select.removeChild(select.children[i]);
            alert('Artiste sup');
            document.getElementById('supprimer').velue="";
        return;
        }
    alert("Artistes pas dans le liste");
    }
}

function Openimage(image){
    var image = document.getElementById(image);
    var source = image.src;
    window.open(source);
}
