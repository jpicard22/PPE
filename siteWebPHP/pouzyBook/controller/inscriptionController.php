<?php

require '../inc/db.php';

var_dump($_POST);


if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password-check']) && isset($_POST['date_naissance']) && isset($_POST['name']) && isset($_POST['first_name']) && isset($_POST['rue']) && isset($_POST['cp'])) {

    if ($_POST['email'] !== "" && $_POST['password'] !== "" && $_POST['date_naissance'] !== "" && $_POST['name'] !== "" && $_POST['first_name'] !== "" && $_POST['rue'] !== "" && $_POST['cp'] !== "") {

        if ($_POST['password'] ===  $_POST['password-check']) {

            $dbConnexion = new DB;
            $pdo = $dbConnexion->getPdo();

            $newUserName = $_POST['email'];
            $newPass = $_POST['password'];
            $newPassSecured = password_hash($newPass, PASSWORD_DEFAULT);
          
            $newDateNaissance = $_POST['date_naissance'];
            $newName = $_POST['name'];
            $newFirtName = $_POST['first_name'];
            $newRue = $_POST['rue'];
            $newCp = $_POST['cp'];

            //var_dump($newPassSecured);
            $pdoConnexionSecured = $pdo->prepare('INSERT INTO users(email, password, date_naissance, name, first_name, rue, cp) VALUES (:email, :password, :date_naissance, :name, :first_name, :rue, :cp)');
            $pdoConnexionSecured->bindValue(':email', $newUserName);
            $pdoConnexionSecured->bindValue(':password', $newPassSecured);
          
            $pdoConnexionSecured->bindValue(':date_naissance', $newDateNaissance);
            $pdoConnexionSecured->bindValue(':name', $newName);
            $pdoConnexionSecured->bindValue(':first_name', $newFirtName);
            $pdoConnexionSecured->bindValue(':rue', $newRue);
            $pdoConnexionSecured->bindValue(':cp', $newCp);
            $result = $pdoConnexionSecured->execute();
            var_dump($result);
            //die;

            if ($result != 0) {
                header('Location: ../templates/login.php');
            } else {
                header('Location: ../templates/inscription.php/?erreur=3');
                // une erreur est survenue, nous n'avons pas pu vous enregister, merci de recommencer
            }
        } else {
            header('Location: inscription.php/?erreur=2');
            // les mots de passe ne sont pas identiques
        }
    } else {
        header('Location: inscription.php/?erreur=1');
        // erreur1 = Nom d'utilisateur ou mot de passe vide
    }
} else {
    header('Location: inscription.php');
}
