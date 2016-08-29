<?php

$nbr1 = $_POST['nombre1'];
$nbr2 = $_POST['nombre2'];

$nombre = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$tab_nombre = array();
$tab_length = count($nombre);

for ($i = 0; $i < $tab_length; $i++) {
    if ($nombre[$i] > $nbr1 && $nombre[$i] < nbr2) {
        array_push($tab_nombre, $nombre[$i]);
    } 
}

print_r($tab_nombre);


?>