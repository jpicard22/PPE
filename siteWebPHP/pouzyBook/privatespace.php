<?php

session_start();?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  <link rel="stylesheet" href="css/style.css">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/axentix@1.0.0/dist/css/axentix.min.css">

  <link rel = "preconnect" href = "https://fonts.gstatic.com">
  <link href = "https://fonts.googleapis.com/css2? family = Flavors & display = swap" rel = "feuille de style ">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/axentix@1.0.0/dist/js/axentix.min.js"></script>

  
    <title>Welcome to Pouzy-Mesangy!</title>
      
  
  </head>
  

  <body class="layout">
    <header>
        
        <div class="  navbar shadow-2 grey light-3 navbar shadow-1 grey light-3 justify-content-center" style="height:90px">
            <a href="index.php?page=home" class="title  ">Biblio-Book Pouzy-Mésangy</a>
        </div>

        <div class="navbar shadow-1 grey dark-1 justify-content-center">
            <a href="index.php?page=home" class="navbar-brand">La bibliothèque numérique de votre commune</a>
        </div>

        <nav>
            <ul class="navbar shadow-1 airforce dark-4"> 
                <li class="nav-item btn small rounded-2  blue press"><a class="nav-link" href="index.php?page=ajoutLivre">Ajout d'un livre</a></li>
                <li class="nav-item btn small rounded-2  blue press"><a class="nav-link" href="index.php?page=maBibliotheque">Ma bibliothèque</a></li>
        </nav>

    </header>

<div id="content"> 
        <!-- je veux tester si mon utilisateur est bien connecté et que donc la super global $_SESSION existe et que  la clé name existe aussi et est bien renseignée -->
        <?php var_dump($_SESSION);?>
        <?php if (empty($_SESSION)) : ?>
        <h1>Vous n'êtes pas autorisé à voir cette page</h1>        
        <?php else :?>
        <div class="content-message">
            <h1>Bonjour <?=$_SESSION['email'];?></h1>
            <p> bienvenue, vous êtes connecté </p>
        </div>
        <img src="">
        <a href="deconnexionController.php" class="btn btn-dark offset-md-4 mt-3"> Se déconnecter </a>
        <?php endif;?>
      </div>




<?php include 'templates/footer.php'; ?>
