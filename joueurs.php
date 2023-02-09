<?php
    require_once('config.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Joueurs</title>
</head>
<body>
    <form action="./def-mot.php" method="post">
        <label for="joueur1">Joueur 1 :</label>
        <input name="joueur1" type="text" required>
        <label for="joueur1">Joueur 2 :</label>
        <input name="joueur2" type="text" required>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>