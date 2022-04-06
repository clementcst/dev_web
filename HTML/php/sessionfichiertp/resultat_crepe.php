<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>terrasse de la creperie de CY !</title>
</head>
<body>
    <p>Voici le détail de votre commande :
    <?php
    session_start();
    echo $_SESSION['commande'].' ';
    $file=fopen('stock_crepe','w+');
    $new_stock=$_SESSION['stock']-$_SESSION['commande'];
    fwrite($file,$new_stock);
    fclose($file);
    ?>
    crepe(s), que nous pouvons faire au sucre, au nutella ou à la confiture ! !
    </p><br>
    <p>Appuyer  <a href="accueil_crepe.php">ici</a> pour revenir a l'accueil de la creperie</p>
</body>
</html>
