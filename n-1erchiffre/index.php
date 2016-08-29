<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta author="Lise">
    <title>Nombre en liste</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="nbr.php" method="post">

        <p>Veuillez choisir deux nombre entre 1 et 10.</p>
 
        <div style="height:15px"></div>

        <label for="nombre1">Nombre numéro 1 :</label>
        <input type="text" placeholder="nombre1" name="nombre1" maxlength="2">

        <div style="height:15px"></div>

        <label for="nombre1">Nombre numéro 2 :</label>
        <input type="text" placeholder="nombre2" name="nombre2" maxlength="2">

        <div style="height:15px"></div>

        <button type="submit" name="Envoyer">Envoyer</button>
    </form>
</body>

</html>