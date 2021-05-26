<?php

session_start();

require '../inc/db.php';

$currentPage = 'maBibliotheque';


$dbConnexion = new DB;
$pdo = $dbConnexion->getPdo();

// Initialisation de variables (évite les "NOTICE - variable inexistante")
$livreList = array();

$currentOrder = 'ordermaBibliotheque';

if (isset($_GET['ordermaBibliotheque'])) {

  $currentOrdrer = $_GET['ordermaBibliotheque'];
}



$_SESSION['user']['id'];

$sql = 'SELECT * FROM `livre` join users on users.id = livre.users_id where users_id = ' .$_SESSION['user']['id'];
// Si un tri a été demandé, on réécrit la requête
if (!empty($_GET['ordermaBibliotheque'])) {
    // Récupération du tri choisi
    $ordermeslivres = trim($_GET['ordermaBibliotheque']);
    if ($ordermeslivres == 'titre') {
        // TODO #2 écrire la requête avec un tri par titre croissant
        $sql = 'SELECT * from `livre` WHERE `users_id`= ' .$_SESSION['user']['id'] .'
        ORDER BY `titre_l` ASC';
    }
    else if ($ordermeslivres == 'auteur') {
        // TODO #2 écrire la requête avec un tri par autheur croissant
        $sql = 'SELECT * from `livre` WHERE  `users_id` = ' .$_SESSION['user']['id'] .'
        ORDER BY `auteur` ASC';
    }
}

$pdo = $dbConnexion->getPdo();
$pdoStatement = $pdo->query($sql);
//var_dump($pdoStatement);
$livreList = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);




require __DIR__ . '/../templates/' . $currentPage . '.php';

?>




