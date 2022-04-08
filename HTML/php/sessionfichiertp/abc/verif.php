<?php
session_start();

if ( isset($_POST['mdp']) && $_POST['mdp']=="abc"){   
  $_SESSION['time']=time();
  $_SESSION['connect'] = 1;

  header("Location:a.php");

}else{
  header("Location:Loginmdp.php");
}

?>
