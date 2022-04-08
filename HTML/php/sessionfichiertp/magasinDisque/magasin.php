<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>MAGASIN DE DISQUE</title>
</head>

<body>

<?php

if (isset($_POST['items']))
{
    
    if ($_POST['items'] == "")
    {
        echo "Il n'y a pas d'album dans le panier...";
        echo "appuyez <a href='magasinDisque.php'>ici</a> pour retourner au magasin.";
    }else{

    $commande = explode(",", $_POST['items']);
    $prix = 0;

    echo "<center><table border='1'>";
    echo "<tr><th colspan='2'>Récapitulatif de la commande</th></tr>";
    echo "<tr><td>Nom Album</td><td>Prix</td></tr>";
    for ($i=0; $i<count($commande);$i++)
    {
        echo "<tr><td>".$commande[$i]."</td><td> 7.5 euros</td>";
        $prix = $prix + 7.5;
    }
    echo "<tr><td>Prix total</td><td>".$prix." euros</td>";
    echo "</center><br>";
    echo "</table><br>";
    echo "appuyez <a href='magasinDisque.php'>ici</a> pour retourner au magasin.";
    }
    
}else{
    echo "Il n'y a une erreur dans la commande";
    echo "appuyez <a href='magasinDisque.php'>ici</a> pour retourner au magasin.";
}

?>

</body>


</html>
