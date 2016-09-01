<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Jeu de la fourchette</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Jeu de la fourchette</h1>
    <form action="index.php" method="post">
        <label for="text">Le jeu de la fourchette de nombre. Découvrez le nombre tiré au sort par l'ordinateur !</label>
        <div></div>
        <input type="text" placeholder="Entrer votre nombre.." name="nbr" maxlength="2">
        <!-- <button type="submit" name="envoyer">Envoyer</button>-->
    </form>

    <?php
    session_start();
        
    if (!isset($_SESSION['nombre_a_trouver'])) {
        $nombre_a_trouver = rand(0,100);
        $_SESSION['nombre_a_trouver'] = $nombre_a_trouver;
    } else{
        $nombre_a_trouver = $_SESSION['nombre_a_trouver'] ;
    }
    
    echo $nombre_a_trouver;
    $nombre = $_POST['nbr'];
    
    
    if (!isset($_SESSION["count"])) {
        $count = 0;
        $_SESSION["count"] = $count;
    } else{
        $_SESSION["count"] = $_SESSION["count"] + 1;
        $count = $_SESSION['count'] ;
    }

    
    if ($count <= 8)  {
        
        if ($nombre < $nombre_a_trouver) {
            echo "<label>Votre nombre est trop petit, tenter encore !</label>";
        } elseif ($nombre > $nombre_a_trouver) {
            echo "<label>Votre nombre est trop grand, tenter encore !</label>";
        } else {
            echo "<label>Bravo, vous avez trouver notre nombre !</label>";
            session_destroy();
        }
        
        
    }  else {
        
        echo "<label>Z'êtes un gros null !</label>";
        session_destroy();
    }
    
    
   
    ?>
</body>

</html>