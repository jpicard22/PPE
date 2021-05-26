<?php

require __DIR__ . '/inc/db.php';

session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {

    $dbConnexion = new DB;
    $pdo = $dbConnexion->getPdo();

    print_r($_POST);
    //die;

    if ($_POST['email'] !== "" && $_POST['password'] !== "") {

        $pdoConnexionSecured = $pdo->prepare("SELECT * FROM users WHERE `email`=:email and `password`=:password");
        $pdoConnexionSecured->bindValue(':email', $_POST['email']);
        $pdoConnexionSecured->bindValue(':password', $_POST['password']);
        $pdoConnexionSecured->execute();
        $result = $pdoConnexionSecured->fetch(PDO::FETCH_ASSOC);
        print_r($result);
        var_dump($result);

        if ($result != 0) {
            $_SESSION['email'] = $result['email'];
            var_dump($_SESSION['email']);
            //die;
            header('Location: privatespace.php');
        } else {
            header('Location: connexion.php?erreur=1');
        }
    } else {
        // fonction header me permet de faire une redirection cf la documentation : https://www.php.net/manual/fr/function.header.php
        header('Location: connexion.php?erreur=1');
    }
} else {
    header('Location: connexion.php');
}
