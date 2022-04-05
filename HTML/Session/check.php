<?php
session_start();
$password=$_GET['password'];

if (isset($password) && $password=="abc")
     { 
       
       $_SESSION['time']=time();
      
       }
  else
  header("Location:login.php");

?>
<a href="a.php"> Go to page  A </a> <br>
<a href="b.php"> Go to page B </a><br>
<a href="c.php"> Go to page C </a><br>