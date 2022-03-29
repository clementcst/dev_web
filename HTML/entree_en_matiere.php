<?php
    echo "Bonjour tout le monde <br>";
    echo "On est le ".date('d/m/Y')." , et il est actuellement ".date('H')."h et ".date('i')."min <br><br><br>"; 

$Giroud = array("Giroud", "Olivier", "30/09/1986", "Attaquant");
$Griezmann = array("Griezmann", "Antoine", "21/03/1991", "Attaquant");
$Mbappe = array("Mbappé", "Kylian", "20/11/1998", "Attaquant");
$Kante = array("Kante", "N'Golo", "28/03/1991", "Milieu");
$Umtiti = array("Umtiti", "samuel", "14/09/1993", "Defenseur");
$LLoris = array("Lloris", "Hugo", "26/12/1986", "Gardien");


$tab=array($Giroud,$Greizmann,$Mbappe,$Kante,$Umtiti,$Lloris);

echo "<table border=collapse\"3\">";
echo "<th>Nom <th>Prénom <th>date de naissance <th>Poste";

$cpt = 0;
for ($i=0; $i<5; $i++){
    echo "<tr>";
    for ($j=0;$j<4;$j++){
        echo "<td>".$tab[$i][$j];
    }
}

?>