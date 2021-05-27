<?php

session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/axentix@1.0.0/dist/css/axentix.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2? family = Flavors & display = swap" rel="feuille de style ">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axentix@1.0.0/dist/js/axentix.min.js"></script>


    <title>Welcome to Pouzy-Mesangy!</title>


</head>


<body class="layout">
    <header>

        <div class="  navbar shadow-2 grey light-3 navbar shadow-1 grey light-3 justify-content-center" style="height:90px">
            <a href="../index.php?page=home" class="title  ">Biblio-Book Pouzy-Mésangy</a>
        </div>

        <div class="navbar shadow-1 grey dark-1 justify-content-center">
            <a href="../index.php?page=home" class="navbar-brand">La bibliothèque numérique de votre commune</a>
        </div>

        <nav>
            <ul class="navbar shadow-1 airforce dark-4">
                <li class="nav-item btn small rounded-2  blue press"><a class="nav-link" href="../index.php?page=ajoutLivre">Ajout d'un livre</a></li>
                <li class="nav-item btn small rounded-2  blue press"><a class="nav-link" href="../controller/mesLivresController.php?page=maBibliotheque">Mes livres</a></li>
                <li class="nav-item btn small rounded-2  blue press"><a class="nav-link" href="../index.php?page=laBibliotheque">La bibliothèque</a></li>
                <li class="nav-item btn small rounded-2  red press"><a class="nav-link" href="../deconnexionController.php">Se déconnecter</a></li>
        </nav>

<?php

var_dump($_SESSION);

if(!empty($_POST['password'])){
    
    $stmt = $pdo->prepare("SELECT * FROM `inscrit` WHERE email='".$_SESSION['utilisateur']['email']."' AND password='".$_POST['password']."'");
    $stmt->execute(); 
    $result = $stmt->fetchAll();
    if(empty($result)){
        echo 'existe pas';
        
    }
    else{
        if(!empty($_POST['name'])){
            $stmt = $pdo->prepare("UPDATE users SET name = '".$_POST['name']."' WHERE users.email = '".$_SESSION['user']['email']."' AND users.password='".$_POST['password']."'");
            $stmt->execute(); 
            
        }
        
        if(!empty($_POST['prenom'])){
            $stmt = $pdo->prepare("UPDATE users SET prenom = '".$_POST['prenom']."' WHERE users.email = '".$_SESSION['user']['email']."' AND users.password='".$_POST['password']."'");
            $stmt->execute();         }
        
        if(!empty($_POST['date_naissance'])){
            $stmt = $pdo->prepare("UPDATE users SET date_naissance = '".$_POST['date_naissance']."' WHERE users.email = '".$_SESSION['user']['email']."' AND users.password='".$_POST['password']."'");
            $stmt->execute();         }
        
        if(!empty($_POST['pass'])){
            $pass=['pass'];
        }
        
        if(!empty($_POST['email'])){
            $stmt = $pdo->prepare("UPDATE users SET email = '".$_POST['email']."' WHERE users.email = '".$_SESSION['user']['email']."' AND users.password='".$_POST['password']."'");
            $stmt->execute(); 
        }
        
        if(!empty($_POST['tel'])){
            $stmt = $pdo->prepare("UPDATE users SET tel = '".$_POST['tel']."' WHERE users.email = '".$_SESSION['user']['email']."' AND users.password='".$_POST['password']."'");
            $stmt->execute();        }
        
        if(!empty($_POST['nom_rue'])){
            $stmt = $pdo->prepare("UPDATE users SET nom_rue = '".$_POST['nom_rue']."' WHERE users.email = '".$_SESSION['user']['email']."' AND users.password='".$_POST['password']."'");
            $stmt->execute();    
        }
        
        if(!empty($_POST['ville'])){
            $stmt = $pdo->prepare("UPDATE users SET ville = '".$_POST['ville']."' WHERE users.email = '".$_SESSION['user']['email']."' AND users.password='".$_POST['password']."'");
            $stmt->execute();         
        }
        
        if(!empty($_POST['code_postal'])){
            $stmt = $pdo->prepare("UPDATE users SET code_postal = '".$_POST['code_postal']."' WHERE users.email = '".$_SESSION['user']['email']."' AND users.password='".$_POST['password']."'");
            $stmt->execute(); 
        }
    }
}
else{
    
}





?>