<?php 

$validation = isset($_POST['validation']) ? $_POST['validation'] : '';

if (isset($validation)) {
    $choix = $_POST['select'];
    
        if ($choix=="janvier" ||
            $choix=="mars" ||
            $choix=="mai" ||
            $choix=="juillet" ||
            $choix=="aout" ||
            $choix=="octobre" ||
            $choix=="Decembre")
        { 
            echo "il y a 31 jours dans ce mois";
            
        } elseif ($choix=="avril" ||
                  $choix=="juin" ||
                  $choix=="septembre" ||
                  $choix=="novembre") 
        {   
            echo "Il y a 30 jours dans ce mois";
            
        } else {
            echo "Il y a 28 jours dans ce mois";
        }
}
    
?>


<!--Cadeau, c'était à cause de tes copier/coller (copier coller c'est mal!), en effet au cours du process il crée un mini espace appeler Non Break Point (avec un code unicode chelou que tu pourras retrouver dans tes logs), tu ne voyais pas ce non break point, mais ton code le prenait en compte. Il devait probablement se trouver dans le $choix (que tu copiais coller à chaque fois).

Et pour finir, neva give up! même quand ça semble insurmontable ou inexplicable, sache qu'une machine a toujours ses raisons, et que tu trouveras pourquoi parce que t'es pas plus con qu'elle :).


Sinon le film s'appelle "Les enquêtes du département V" c'est le deuxième film d'une trilogie, n'hésite pas à regarder le premier ;).-->