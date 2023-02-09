<?php
    require_once('config.php');

    if($_SESSION["erreur"] == 10) {
        echo "Le joueur " .$_SESSION["joueur2"]. " a perdu, victoire du joueur " .$_SESSION["joueur1"]. " ! Le mot était " .$_SESSION["mot"]. " !";
        $ajout = array($_SESSION["joueur1"], $_SESSION["joueur2"], $_SESSION["mot"], 1, 0);
        $count = $bdd->query("INSERT INTO partie (nom_joueur1, nom_joueur2, mot, victoire, nb_coup) VALUES (?, ?, ?, ?, ?)", $ajout);
    } else {
        echo "Le joueur " .$_SESSION["joueur1"]. " a perdu, victoire du joueur " .$_SESSION["joueur2"]. " ! Le mot était " .$_SESSION["mot"]. " !";
        $count = $bdd->exec("INSERT INTO partie (nom_joueur1, nom_joueur2, mot, victoire, nb_coup) VALUES (?, ?, ?, ?, ?)", $_SESSION["joueur1"], $_SESSION["joueur2"], $_SESSION["mot"], 2, 0);
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat</title>
</head>
<body>
    
</body>
</html>