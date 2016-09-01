<?php 

$tab = array(1,5,10,9,3,4,8,2,6,7, 45);
sort($tab);

$longueur = count($tab);
    for ($i=0; $i < $longueur; $i++) {
        if ($i = $longueur -1){
            echo $tab[0]." / ".$tab[$i];
        }
    }
?>