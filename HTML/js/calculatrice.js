function afficher(val) 
{ 
       document.getElementById("output").value+=val;
}



function effacer()
{
    document.getElementById("output").value = "";
}

function calculer(){
    var x = document.getElementById("output").value;
    var b = eval(x);
    document.getElementById("output").value = b;

}