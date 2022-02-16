
function afficher(val) 
{
        document.getElementById("output").textContent+=val;
}

function effacer()
{
    document.getElementById("output").textContent = "";
}

function calculer()
{
    var sin = document.getElementById("output").textContent.indexOf("Math.sin(");
    var cos = document.getElementById("output").textContent.indexOf("Math.cos(");
    var tan = document.getElementById("output").textContent.indexOf("Math.tan(");
    var pui = document.getElementById("output").textContent.indexOf("Math.pow(");
    var exp = document.getElementById("output").textContent.indexOf("Math.exp(");
    var log = document.getElementById("output").textContent.indexOf("Math.log(");
    if (sin === 0 || cos === 0 || tan === 0 || exp ===0 || log ===0 || pui ===0){
        document.getElementById("output").textContent+=')';
    }

    var x = document.getElementById("output").textContent;
    var b = eval(x);
    document.getElementById("output").textContent = b;

}

function puissance(tmp)
{
    var x = document.getElementById("output").textContent;
    document.getElementById("output").textContent ='Math.pow('+x+',';

}

function supprimer(){
    var x  = document.getElementById("output").textContent.slice(0, -1);
    document.getElementById("output").textContent = x;
}
