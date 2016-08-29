<?php

$solde_compte = $_POST['solde'];

if ($solde_compte < 0) {
    echo 'Vous êtes dans la panade totale.';
} elseif ($solde_compte == 0) {
    echo 'Vous êtes dans un état critique.';
} else {
    echo 'Houhou, pour une fois !';
}

?>