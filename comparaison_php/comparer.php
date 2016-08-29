<?php

$tableau = array(
    $_POST['libelle1'] => $_POST['prix1'],
    $_POST['libelle2'] => $_POST['prix2'],
    $_POST['libelle3'] => $_POST['prix3'],
    $_POST['libelle4'] => $_POST['prix4'],
);

asort($tableau);  
echo '<pre>';
print_r ($tableau);
echo '</pre>';

$longueurtableau = count($tableau);
$compteur = 0;

foreach ($tableau as $key => $value) {
    if ($compteur == 0) {
       
        echo $key.' est votre produit le moins cher et coute '.$value.'euros.<br/>';
    }
    if ($compteur == $longueurtableau - 1) {
        echo $key.' est votre produit le plus cher et coute '.$value.'euros.<br/>';
    }
     $compteur++;
}
?>