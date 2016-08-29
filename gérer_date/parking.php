<?php
$date = $_POST['date'];
list($jour, $mois, $annee) = explode('/', $date);
if(checkdate($mois,$jour,$annee))
{
 echo "date valide";
}
else
{
 echo "date non valide";
}?>