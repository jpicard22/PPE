<?php

require '../inc/db.php';

print_r($_POST);
//die;


session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {

    $dbConnexion = new DB;
    $pdo = $dbConnexion->getPdo();

    //print_r($_POST);
    //die;

    if ($_POST['email'] !== "" && $_POST['password'] !== "") {

        $pdoConnexionSecured = $pdo->prepare("SELECT * FROM users WHERE `email`=:email");
        $pdoConnexionSecured->bindValue(':email', $_POST['email']);
        //$pdoConnexionSecured->bindValue(':password', $_POST['password']);
        $pdoConnexionSecured->execute();
        $result = $pdoConnexionSecured->fetch(PDO::FETCH_ASSOC);
        //print_r($result);
        //var_dump($result);

        $passToCheck = $_POST['password'];
        $isPasswordCorrect = password_verify($passToCheck, $result['password']);

        if ($isPasswordCorrect != 0) {
            $_SESSION['user'] = $result;
            var_dump($_SESSION['user']);
            //die;
            header('Location: ../templates/privatespace.php');
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
