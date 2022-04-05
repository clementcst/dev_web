
<?php
function generationDonnees($n) {
    $tab =array();
    for($i=0;$i<$n;$i++){
        array_push($tab,rand(0,1000));
     }
     return $tab;
    }
?>
