<?php 
// page1.php
session_start(); 
echo 'Bienvenue à la page numéro 1'; 
$_SESSION['favcolor'] = 'green'; 
$_SESSION['animal'] = 'cat'; 
$_SESSION['time'] = time(); 
?> 
