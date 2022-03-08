function ajouter() {
    
    var artiste=document.getElementById('add').value.trim();
    var lg=artiste.length;
    artiste=artiste.substr(0,1).toUpperCase()+artiste.substr(1,lg).toLowerCase();
    var select=document.getElementById('liste');
        for (i=0; i<select.length;i++){
            if (artiste == select.children[i].text){
                alert("l'artiste existe déja dans la liste");
                document.getElementById('add').value="";
                return;
            }
        }
    
    var node = document.createElement("option");
    var texte = document.createTextNode(artiste);
    node.appendChild(texte);
    select.appendChild(node);
    document.getElementById('add').value="";
    alert('L artiste a bien été ajouter de la liste ');
    
}


function sup() {

    var artiste = document.getElementById('supprimer').value.trim();
    var taille = artiste.length-1;
    artiste=artiste.substr(0,1).toUpperCase()+artiste.substr(1,taille).toLowerCase();
    var select = document.getElementById('liste');
    
    for(i=0; i<select.length;i++){
        if (artiste == select.children[i].text && select.children[i].value!=0){
            select.removeChild(select.children[i]);
            alert('L artiste a bien été supprimé de la liste ');
            document.getElementById('supprimer').value="";
        return;
        }
    }
    alert("L artistes n'est pas dans la liste");
    document.getElementById('supprimer').value="";
}

function affiche(){
    var select=document.getElementById('liste');
    var index=select.selectedIndex;
    var artiste =select.children[index].text;

    var win = window.open("","_blank","width=800,heigth=800");
    win.document.write('<h1>'+artiste+'</h1>');
    artiste='img/'+artiste+".jpg";

    var c="<img src='";
    c+=artiste+"'"+" id='photo'    ' />";
    win.document.write(c);

    var image= win.document.getElementById('photo');
    image.addEventListener("error", function(){image.src="img/user-male.jng";});
    win.document.close();
}
