<!DOCTYPE >
<html >
    <head>
        <title>A </title>
    
        <meta charset="utf-8" />
    </head>
    <body>

    <?php
    session_start();

    $_SESSION['time']=time();

    if (isset($_SESSION['time']))  
        {
        $temps  = time() - $_SESSION['time'];
        $_SESSION['time'] = time();   
        echo $_SESSION['connect'];
        
        if ($temps>120 || !isset($_SESSION['connect']) )
        {
            echo $_SESSION['connect'];
            session_destroy();
            header("Location:Loginmdp.php");
        }else
        {
            echo 'Vous etes sur la page A';
            echo '<br>Derniere connexion : ', date('H:i:s', $_SESSION['time']);
            echo '<br /><br>La page B :<a href="b.php"> page B</a>';
        }
        }else{
            session_destroy();
            header("Location:Loginmdp.php");
        } 
      
     

 ?>
    </body>
</html>