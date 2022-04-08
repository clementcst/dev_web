<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Echec de la commande</title>
</head>

<body>
    <p>Il y a eu un problème lors de votre commande, nous en sommes désolés.</p>
    <p> Le stock de crepe disponible est seulement de 
    <?php
    session_start();
    echo $_SESSION['stock'];
    ?>
    </p>
    <p>Appuyer  <a href="accueil_crepe.php">ici</a> pour revenir a l'accueil de la creperie</p>
</body>
</html>