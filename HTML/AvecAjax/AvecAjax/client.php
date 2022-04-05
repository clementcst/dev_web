
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#res{background: gray;
		     border:1px solid white;
		     width:; }
		label{width:90px;
			display:inline-block;
		}  
		#form,#res{
			padding:10px;
			margin-left:20%;
			border:1px solid black;
			background:#ECF0F1;
			width:60%;
		} 
		button{background-color:#3498DB;
		color:white; }  
	</style>
</head>
<body>

<center><h4>Calcul du prix avec toutes taxes comprises </h4></center>
<div id="form">
<label> Prix </label> <input type="text" id="price" placeholder="Entrez un prix"><br>
<label> La tva </label> <input type="text" id="tva" placeholder="Entrez la tva"><br><br>
<button type="button" onclick="calculer()">Envoyez</button>
</div>
<br><br>
<div id="res">
	<label> Le prix ht : </label><span id="pht"></span><br>
<label> Le prix ttc: </label><span id="ptt"></span><br>
</div>



<script>
function calculer() {
    var xhttp = new XMLHttpRequest();
  
xhttp.onreadystatechange=function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ptt").innerHTML = this.responseText;
      var price=document.getElementById('price').value;
      document.getElementById("pht").innerHTML = price;
    }
  };
  var price=document.getElementById('price').value;
  var tva=document.getElementById('tva').value;
  xhttp.open("GET", "serveur.php?price=" +price+"&tva="+tva, true);
  xhttp.send();
}
</script>

</body>
</html>
