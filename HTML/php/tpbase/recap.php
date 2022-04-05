
  <p>Vos informations ont bien été envoyé, voici un récapitulatif de vos informations :</p> <br>
<?php
    echo 'Nom : ' .$_GET['nom'];
    echo "<br>";
    echo 'Prénom : ' .$_GET['prenom'];
    echo "<br>";
    echo 'Email : ' .$_GET['email'];
    echo "<br>";
    echo 'Date de naissance : ' .$_GET['birthday'];
    echo "<br>";
    echo 'Adresse : ' .$_GET['adresse'];
    echo "<br>";
    echo 'Dernier diplome: ' .$_GET['diplome'];
?>
<p><a href="Formulaire.php">&laquo;Cliquez ici pour retourner au formulaire</a></p>