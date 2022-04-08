<!doctype html>
<html lang="fr">

<head>
	<title>Exemple de manipulation du DOM</title>
	<link rel="stylesheet" href="style.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="content-language" content="FR" />
	<script type="text/javascript" src="magasinDisque2.js"> </script>
</head>

<body>
	<div id="titre">
		<h1>Magasin de disques</h1>
		Tous les disques &agrave; 7&#8364;50 !!!<br />
		cliquez sur l'image pour (d&eacute;)s&eacute;lectionner un album<br />
		Montant du panier : <span id="prix">0 &#8364;</span>
	</div>
	
	<div id="cadre">
		<div id="source">
			<h3>Albums disponibles</h3>
			<hr>
			<br>
			<div id="vitrine">
			<?php
			$img = scandir('img/');
			unset($img[0]);unset($img[1]);
			foreach ($img as $nom_img)
			{
				$position = strpos($nom_img, ".");
				$alt=substr($nom_img,0,$position);
				echo "<img onclick='deplacer(this)' src=./img/".$nom_img." alt=".$alt." />";
			}
			?>
			</div>
		</div>
		<div>
			<form action="magasin.php" method="POST" onsubmit="acheter()">
				<input type="hidden" name="items" id="items">
				<input type="submit" value="Acheter" class="form-submit-button">
			</form>
		</div>
		<div id="destination">
			<h3>Albums choisis</h3>
			<hr>
			<br>
			<div id="panier">
			</div>
		</div>
	</div>
</body>

</html>