<?php


require __DIR__.'/inc/db.php';

$currentPage = 'home';

if (isset ($_GET['page'])){
  
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


    // TODO #3 (optionnel) valider les données reçues (ex: donnée non vide)
    
    // TO DO #3 Insertion en DB d'un livre
    $insertQuery = "INSERT INTO `livre` (users_id, langue_id, categorie_id, titre_l, nombre_pages_l, edition_l, auteur)
    VALUES ('{$user}', '{$langue}', '{$categorie}', '{$titre}', '{$nombrePages}', '{$edition}', '{$auteur}');
    
    ";
    // TODO #3 exécuter la requête qui insère les données
    $pdoStatement = $pdo ->exec(($insertQuery));
    var_dump($insertQuery);

    // TODO #3 une fois inséré, faire une redirection vers la page "index.php" (fonction header : https://www.php.net/manual/fr/function.header.php)
    header('location', 'index.php');


    }

// Liste des Genres
// TODO #4 récupérer cette liste depuis la base de données
/*
$genreList = array(
    1 => 'Drame',
    2 => 'Poésie',
    3 => 'Je suis un genre statique',
    4 => 'Salut'
);
*/

$sqlGenre = 'SELECT `id`, `categorie_c` from `categorie`;
';
$pdoStatement = $pdo->query($sqlGenre);



$sqlLangue = 'SELECT `id`, `langue_l` from `langue`;
';
$pdoStatement1 = $pdo->query($sqlLangue);



$sqlUser = 'SELECT `id`, `name` from `users`;
';
$pdoStatement3 = $pdo->query($sqlUser);



/* avec ma nouvelle requête sql si je laisse le paramètre PDO::FETCH_COLUMN à mon fetchAll, et que je dump $genreList ça me renvoie ce tableau :
  0 => string '1' (length=1)
  1 => string '2' (length=1)
  2 => string '3' (length=1)
  3 => string '4' (length=1)
  !!! ça me va pas du tout. Je cherche donc le bon paramètre que me permet d'associer en clé l'id et en valeur le name correspondant ... Je sais pas comment faire => je fais une recherche en anglais sur google, je tombe sur cette ressource https://stackoverflow.com/questions/7451126/pdo-fetchall-group-key-value-pairs-into-assoc-array, je teste donc le paramètre FETCH_KEY_PAIR et ça me renvoie ça : 
  1 => string 'Drame' (length=5)
  2 => string 'Poésie' (length=7)
  3 => string 'Thriller' (length=8)
  4 => string 'Théâtre' (length=9)

  => je sors le champagne : c'est exactement ce que je voulais :-)
*/ 

$langueList = $pdoStatement1->fetchAll(PDO::FETCH_KEY_PAIR);

$userList = $pdoStatement3->fetchAll(PDO::FETCH_KEY_PAIR);

$genreList = $pdoStatement->fetchAll(PDO::FETCH_KEY_PAIR);
//var_dump($genreList);

$currentOrder = 'order';

if (isset ($_GET['order'])){
  
  $currentOrdrer = $_GET['order'];
}


$sql = 'SELECT * FROM `livre` ';

// Si un tri a été demandé, on réécrit la requête
if (!empty($_GET['order'])) {
    // Récupération du tri choisi
    $order = trim($_GET['order']);
    if ($order == 'titre_l') {
        // TODO #2 écrire la requête avec un tri par nom croissant
        $sql = 'SELECT * from `livre`
        ORDER BY `titre_l` ASC
        ';
    }
    else if ($order == 'auteur') {
        // TODO #2 écrire la requête avec un tri par autheur croissant
        $sql = 'SELECT * from `livre`
        ORDER BY `auteur` ASC 
        ';
    }
}
// TODO #1 exécuter la requête contenue dans $sql et récupérer les valeurs dans la variable $BookList
$pdo = $dbConnexion->getPdo();
$pdoStatement = $pdo->query($sql);
//var_dump($pdoStatement);
$livreList = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
//var_dump($bookList);

// Inclusion du fichier s'occupant d'afficher le code HTML


//$requetePrepared = $pdoDBConnexion->prepare($sql);
//$requetePrepared->bindValue(':title', $title);
//$requetePrepared->bindValue(':author', $author);
//$result = $requetePrepared->execute();
//var_dump($result);


require __DIR__.'/templates/'.$currentPage.'.php';

require __DIR__.'/classes/delta.php';










?> 