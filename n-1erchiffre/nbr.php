<link rel="stylesheet" href="style.css">

<?php

$nbr1 = $_POST['nombre1'];
$nbr2 = $_POST['nombre2'];

$nombre = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$tab_nombre = array();
$tab_length = count($nombre);

for ($i = $nbr1 + 1; $i < $nbr2; $i++) {
    if ($i % 2 == 0 && sqrt($i) == floor(sqrt($i))) {
        echo '<span class="gras" style="color:midnightblue";>'.$i." ".'</span>';
    } elseif ($i % 2 == 1 && sqrt($i) == floor(sqrt($i))) {
        echo '<span class="gras" style="color:orange";>'.$i." ".'</span>'; 
    } elseif ($i % 2 == 0) {
        echo '<span style="color:midnightblue";>'.$i." ".'</span>';        
    } else {
        echo '<span style="color:orange";>'.$i." ".'</span>';
    }
}

for ($i = 0; $i < $tab_length; $i++) {
    if ($nombre[$i] > $nbr1 && $nombre[$i] < $nbr2) {
        array_push($tab_nombre, $nombre[$i]);
    } 
}

echo "</br></br></br> Liste de nombre gérer avec tableau donnant une limite jusqu'à 10 :</br> ".implode(', ', $tab_nombre).".";

//is_numeric

?>