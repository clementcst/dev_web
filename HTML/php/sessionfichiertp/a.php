<!DOCTYPE >
<html >
    <head>
        <title>A </title>
    
        <meta charset="utf-8" />
    </head>
    <body>

    <?php
    session_start();
    
    if (isset($_SESSION['time']))  
    {
    $temps  = time() - $_SESSION['time'];
    $_SESSION['time'] = time();   
    
    if ($temps>120){
        session_destroy();
        header("Location:Loginmdp.php");
    }else{
        echo 'Vous etes sur la page A';
        echo '<br>Derniere connexion : ', date('H:i:s', $_SESSION['time']);
        echo '<br /><br>La page B :<a href="b.php"> page B</a>';
        echo '<br />La page C :<a href="c.php"> page C</a>';
    } 
}  

 ?>
    </body>
</html>