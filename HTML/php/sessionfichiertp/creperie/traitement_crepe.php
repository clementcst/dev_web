<?php

session_start();
if (isset($_POST['valider']) && isset($_POST['nombre_crepe']) && is_numeric($_POST['nombre_crepe']) && $_POST['nombre_crepe'] > 0 && $_POST['nombre_crepe'] < 100 )
{
    $_SESSION['commande']=$_POST['nombre_crepe'];
    $file=fopen('stock_crepe.txt','r+');
    $_SESSION['stock']=fgets($file);
    fclose($file);
    if ($_SESSION['commande'] <= $_SESSION['stock'])
    {
        header('Location:resultat_crepe.php');
    } else{
        header('Location:echec_commande.php');
    }


}else
{
    header("Location:accueil_crepe.php");
}


?>