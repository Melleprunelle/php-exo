<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Numérologie / Poids</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Entrer votre nom et prénom pour obtenir "le poids" de celui-ci.</h1>
    <form style="margin-left: 20px;" action="index.php" method="post">
        
        <input type="text" placeholder="Nom & Prénom" style="color:darkred" name="nomprenom">
        <button type="submit" style="color:darkred">Envoyer</button>
        
    </form>
</body>

<?php
  
if (isset($_POST['nomprenom'])) {
    
    $nomprenom = $_POST['nomprenom'];
    $result_nomprenom = "Poid de ".$nomprenom;
    $nomprenom = strtolower($nomprenom);
    $nomprenom_longueur = strlen($nomprenom);
    
    $tab_alphabet = array(
        "a" => 1,
        "b" => 2,
        "c" => 3,
        "d" => 4,
        "e" => 5,
        "f" => 6,
        "g" => 7,
        "h" => 8,
        "i" => 9,
        "j" => 10,
        "k" => 11,
        "l" => 12,
        "m" => 13,
        "n" => 14,
        "o" => 15,
        "p" => 16,
        "q" => 17,
        "r" => 18,
        "s" => 19,
        "t" => 20,
        "u" => 21,
        "v" => 22,
        "w" => 23,
        "x" => 24,
        "y" => 25,
        "z" => 26
    );
    
    $longueur_tab_alphabet = count($tab_alphabet);
    $compteur = 0;
    
            for ($i = 0; $i < $nomprenom_longueur; $i++) {
            $lettre = $nomprenom[$i];
            foreach ($tab_alphabet as $key_nbr => $value) {
                if ($lettre == $key_nbr) {
                    $compteur = $compteur + $value;
                }
            }
        }
    
    echo "<h2>".$result_nomprenom." : ".$compteur.".</h2>";
}  
?>
</html>