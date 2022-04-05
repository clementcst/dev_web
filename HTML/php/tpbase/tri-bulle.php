<?php

function trier($tab,$n){
    do {
        $echange = FALSE;
        for ($j=0;$j<$n-2;$j++){
            if ($tab[$j] > $tab[$j+1]){
                $tmp = $tab[$j];
                $tab[$j] = $tab[$j+1];
                $tab[$j+1] = $tmp;
                $echange = TRUE;
            }
        }
        $n = $n -1;   
    } while($n>0 && $echange);
    return $tab;
}

/*function main(){
    include 'generation.php';

    $tab = generationDonnees(10);

    var_dump($tab);
    $tab = trier($tab,10);
    echo "<br>";
    var_dump($tab);
}
main();*/

?>
