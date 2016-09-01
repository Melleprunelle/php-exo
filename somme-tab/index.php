<?php

$tab = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$taille = count($tab);
$total = 0;

    for ($i = 0; $i < $taille; $i++) {
            $total = $total + $tab[$i]; 
    }

echo $total;
?>