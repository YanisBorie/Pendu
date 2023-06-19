<?php
    require_once('config.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../assets/css/accueil.css">
    <title>Liste Partie</title>
</head>
<body>
    <p>djdjdjj</p>

    <table>
        <tr>
            <th>Joueur Gagnant</th>
            <th>Joueur Perdant</th>
            <th>Mot</th>
            <th>Nombre de coups</th>
        </tr>
    <?php 
    $partieStatement = $bdd->prepare("SELECT * FROM partie");
    $partieStatement->execute();
    $parties = $partieStatement->fetchAll();

    foreach($parties as $partie) { ?>
        <tr>
            <td><?php if($partie['victoire'] == 1) { echo $partie['nom_joueur1']; } else { echo $partie['nom_joueur2']; } ?></td>
            <td><?php if($partie['victoire'] == 1) { echo $partie['nom_joueur2']; } else { echo $partie['nom_joueur1']; } ?></td>
            <td><?php echo $partie['mot'] ?></td>
            <td><?php echo $partie['nb_coup'] ?></td>
        </tr>
    <?php
    }
    ?>
    </table>

    <button><a href="joueurs.php">Page Suivante</a></button>
</body>
</html>