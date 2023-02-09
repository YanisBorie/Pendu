<?php
    require_once('config.php');

    if(isset($_POST["joueur1"])) {
        $_SESSION["joueur1"] = $_POST["joueur1"];
    }

    if(isset($_POST["joueur2"])) {
        $_SESSION["joueur2"] = $_POST["joueur2"];
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Définir mot</title>
</head>
<body>
    <h2>Le joueur <?php echo $_SESSION["joueur1"] ?> choisit le mot !</h2>
    <form action="./jeu.php" method="post">
        <input name="mot" type="text" required>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>