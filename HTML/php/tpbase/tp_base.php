<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    
    
    <?php
        echo "Bonjour tout le monde <br>";
        echo "On est le ".date('d/m/Y')." , et il est actuellement ".date('H')."h et ".date('i')."min <br><br><br>";
    ?>
    <br><br>
    <h2>Voici le tableau des joueurs de foot !</h2>
    <table border='1'>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Date de naissance</th>
        <th>Poste</th>
        <th>Age</th>
    </tr>
    <?php 

    function trouveage($agr1){
        $aujourdhui = date("Y-m-d");
        $diff = date_diff(date_create($agr1),date_create($aujourdhui));
        return $diff->format('%y');
   }


    $personne=array(array("Nom" => "Giroud","Prenom" => "Olivier","Date" => "30/09/1986", "Poste" =>"Attaquant", "Age" => trouveage("30-09-1986") ),
    array("Nom" => "Griezmann","Prenom" => "Antoine","Date" => "21/03/1991", "Poste" =>"Attaquant", "Age" =>  trouveage("21-03-1991") ),
    array("Nom" => "Mbappé","Prenom" => "Kylian","Date" => "20/11/1991", "Poste" =>"Attaquant", "Age" =>  trouveage("20-11-1998") ),
    array("Nom" => "Kante","Prenom" => "N'Golo","Date" => "28/03/1991", "Poste" =>"Milieu", "Age" =>  trouveage("28-03-1991") ),
    array("Nom" => "Umtiti","Prenom" => "samuel","Date" => "14/09/1993", "Poste" =>"Defenseur", "Age" =>  trouveage("14-09-1993") ),
    array("Nom" => "Lloris","Prenom" => "Hugo","Date" => "26/12/1986", "Poste" =>"Gardien", "Age" =>  trouveage("26-12-1986") ));

    for ($i=0;$i<sizeof($personne);$i++){
        echo "<tr>";
        foreach($personne[$i] as $key => $j){
            echo "<td>".$j."</td>";
        }
        echo "</tr>";
    }
    ?>

    </table>

    <h2>Maintenant passons aux tables de multiplications:</h2>

    <table id="multi" border='1'">

    <?php 
        
        echo "<tr>";
    
        for ($j=1;$j<11;$j++){
            if ($j == 6){ 
                echo "</tr> <tr>";
            };
            echo"<td>";
            echo "<table border='1' id=multi".$j."  >";
            echo "<tr>";
            echo "<th>Chiffre</th>";
            echo "<th>Opération</th>";
            echo "<th>Résultat</th> </tr>";
            
            for($i=1;$i<13;$i++){
                echo "<tr>";
                echo "<td>".$j."</td>";
                echo "<td>".$j." x ".$i." = </td>";
                echo "<td> <input type='text' id='".$j."_".$i."' name='".$j."_".$i."' size='3'> </td></tr>";
            }
            echo " </table> </td>";
        }
          
    ?>
    </table>

    <script>
       
    function verifier(){
        var res=0;
        for (var j=1;j<11;j++){
            for(var i=1;i<13;i++){
                var id = j+"_"+i;
                var valeur = document.getElementById(id).value;
                if (valeur == i*j) {
                    document.getElementById(id).style.backgroundColor = "green";
                    res++;
                }else {
                    if (valeur == ''){
                        document.getElementById(id).style.backgroundColor = "white";
                    }else {
                        document.getElementById(id).style.backgroundColor = "red";
                        res--;
                    }
                }

            }
        }
        document.getElementById("resultat").innerHTML ="Votre score est de "+res+" points sur un maximum de 120";
    }

    function reset(){
        for (var j=1;j<11;j++){
            for(var i=1;i<13;i++){
                var id = j+"_"+i;
                document.getElementById(id).style.backgroundColor = "white";
                document.getElementById(id).value ='';
            }
        }

    }
   
    
    </script>

    <h3>Appuyer pour valider vos réponses <button type="button" onclick="verifier()">VALIDER</button></h3>
    <h3>Appuyer pour reset vos réponses <button type="button" onclick="reset()">RESET</button></h3>
    <h3 id="resultat" ></h3>


</body>

</html>