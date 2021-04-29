<?php


require __DIR__ . '/inc/db.php';

$currentPage = 'home';

if (isset($_GET['page'])) {

  $currentPage = $_GET['page'];
}


$dbConnexion = new DB;
$pdo = $dbConnexion->getPdo();

// Initialisation de variables (évite les "NOTICE - variable inexistante")
$livreList = array();
$categorieList = array();
$user = '';
$langue = '';
$exemplaire = '';
$categorie = '';
$titre = '';
$nombrePages = '';
$edition = '';
$auteur = '';


// Si le formulaire a été soumis
if (!empty($_POST)) {
  // Récupération des valeurs du formulaire dans des variables
  $user = isset($_POST['users_id']) ? $_POST['users_id'] : '';
  $langue = isset($_POST['langue_id']) ? $_POST['langue_id'] : '';
  $exemplaire = isset($_POST['exemplaire_id']) ? $_POST['exemplaire_id'] : '';
  $categorie = isset($_POST['categorie_id']) ? $_POST['categorie_id'] : '';
  $titre = isset($_POST['titre_l']) ? $_POST['titre_l'] : '';
  $nombrePages = isset($_POST['nombre_pages']) ? $_POST['nombre_pages'] : '';
  $edition = isset($_POST['edition_l']) ? $_POST['edition_l'] : '';
  $auteur = isset($_POST['auteur']) ? intval($_POST['auteur']) : 0;


  // Insertion en DB d'un livre
  $insertQuery = "INSERT INTO `livre` (users_id, langue_id, categorie_id, titre_l, nombre_pages_l, edition_l, auteur)
    VALUES ('{$user}', '{$langue}', '{$categorie}', '{$titre}', '{$nombrePages}', '{$edition}', '{$auteur}');
    
    ";
  // requête qui insère les données
  $pdoStatement = $pdo->exec(($insertQuery));
  var_dump($insertQuery);

  // redirection vers la page "index.php" (fonction header : https://www.php.net/manual/fr/function.header.php)
  header('location', 'index.php');
}

$sqlGenre = 'SELECT `id`, `categorie_c` from `categorie`;
';
$pdoStatement = $pdo->query($sqlGenre);



$sqlLangue = 'SELECT `id`, `langue_l` from `langue`;
';
$pdoStatement1 = $pdo->query($sqlLangue);



$sqlUser = 'SELECT `id`, `name` from `users`;
';
$pdoStatement3 = $pdo->query($sqlUser);


$langueList = $pdoStatement1->fetchAll(PDO::FETCH_KEY_PAIR);

$userList = $pdoStatement3->fetchAll(PDO::FETCH_KEY_PAIR);

$genreList = $pdoStatement->fetchAll(PDO::FETCH_KEY_PAIR);
//var_dump($genreList);

$currentOrder = 'order';

if (isset($_GET['order'])) {

  $currentOrdrer = $_GET['order'];
}


$sql = 'SELECT * FROM `livre` ';

// Si un tri a été demandé, on réécrit la requête
if (!empty($_GET['order'])) {
  // Récupération du tri choisi
  $order = trim($_GET['order']);
  if ($order == 'titre_l') {
    // requête avec un tri par nom croissant
    $sql = 'SELECT * from `livre`
        ORDER BY `titre_l` ASC
        ';
  } else if ($order == 'auteur') {
    // requête avec un tri par autheur croissant
    $sql = 'SELECT * from `livre`
        ORDER BY `auteur` ASC 
        ';
  }
}

$pdo = $dbConnexion->getPdo();
$pdoStatement = $pdo->query($sql);
//var_dump($pdoStatement);
$livreList = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);


require __DIR__ . '/templates/' . $currentPage . '.php';

