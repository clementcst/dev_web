<?php require ('entete.html') ?>
<?php

session_start();


if (isset($_SESSION['time']))
       {$t=time()-$_SESSION['time'];
              
       	if ($t>6) 
           {
       		
       	    session_destroy();
            header("Location:login.php");
        }

          else
          {echo "<h1> Page A </h1>";
           echo "<a href='b.php'> Go to page B </a><br>";
           echo "<a href='c.php'> Go to page C </a><br>";
          $_SESSION['time']=time();
}          }

       
   	else
   		header("Location:login.php");
?>
<?php require ('Footer.html') ?>