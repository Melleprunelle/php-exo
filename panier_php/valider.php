<?php

$prix_produit1 = $_POST['prixHT1'] + ($_POST['prixHT1'] * $_POST['tva1'] / 100) * $_POST['nombre1'];

$prix_produit2 = $_POST['prixHT2'] + ($_POST['prixHT2'] * $_POST['tva2'] / 100) * $_POST['nombre2'];

$prix_produit3 = $_POST['prixHT3'] + ($_POST['prixHT3'] * $_POST['tva3'] / 100) * $_POST['nombre3'];

echo 'produit1 = '.$prix_produit1.'euros <br/>';
echo 'produit2 = '.$prix_produit2.'euros <br/>';
echo 'produit3 = '.$prix_produit3.'euros <br/><br/>';
echo $prix_produit1 + $prix_produit2 + $prix_produit3." euros est le montant total de vos achats.";
?>