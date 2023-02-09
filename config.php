<?php
    //Lancement de la session
    session_start();

    //Connection à la base de données
    define('BD_HOST', 'localhost');
    define('BD_DBNAME', 'pendu');
    define('BD_USER', 'root');
    define('BD_PWD', '');
    
    try {
        $bdd = new PDO('mysql:host ='. BD_HOST .'; dbname ='. BD_DBNAME .'; charset = utf8 ', BD_USER, BD_PWD);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(Exception $e) {
        die('Erreur : '. $e->getMessage()) ;
    }