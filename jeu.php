<?php
    require_once('config.php');

    if(isset($_POST["mot"])) {
        $erreur = 0;
        $_SESSION["solution"] = array();
        $_SESSION["erreur"] = $erreur;
        $_SESSION["mot"] = $_POST["mot"];
        $_SESSION["victoire"] = 0;

        $solution = "";
        for($i = 0; $i < strlen($_SESSION["mot"]); $i++) {
            $_SESSION["solution"][$i] = "_ ";
        }
    }

    $etat = true;
    if(isset($_POST["lettre"])) {
        for($i =0; $i <= strlen($_SESSION["mot"]); $i++) {
            if($_POST["lettre"] == $_SESSION["mot"][$i]) {
                $_SESSION["solution"][$i] = $_POST["lettre"];
                $_SESSION["victoire"]+=1;
                $etat = false;
            }
        }
        if($etat) {
            $_SESSION["erreur"]+=1;
        }
    }

    if($_SESSION["erreur"] == 10) {
        header("Location: ./final.php");
        exit();
    }

    if($_SESSION["victoire"] == strlen($_SESSION["mot"])) {
        header("Location: ./final.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jeu</title>
</head>
<body>
    <h2>C'est au tour du joueur <?php echo $_SESSION["joueur2"] ?> !</h2>
    <p>Mot : <?php for($i = 0; $i < count($_SESSION["solution"]); $i++) { echo $_SESSION["solution"][$i]; } ?></p>
    <p>Nombre d'erreurs : <?php echo $_SESSION["erreur"] ?>/10</p>
    <form action="" method="post">
        <input name="lettre" type="text" maxlength="1" required>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>