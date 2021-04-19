<?php

session_start(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="stylesheet" href="css/style.css">


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
            <a href="index.php?page=home" class="title  ">Biblio-Book Pouzy-Mésangy</a>
        </div>

        <div class="navbar shadow-1 grey dark-1 justify-content-center">
            <a href="index.php?page=home" class="navbar-brand">La bibliothèque numérique de votre commune</a>
        </div>

        <nav>
            <ul class="navbar shadow-1 airforce dark-4">
                <li class="nav-item btn small rounded-2  blue press"><a class="nav-link" href="privatespace.php">Mon espace</a></li>
                <li class="nav-item btn small rounded-2  blue press"><a class="nav-link" href="index.php?page=maBibliotheque">Ma bibliothèque</a></li>
            </ul>
        </nav>

    </header>
    <div class="container">
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-header">Ajout</div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="users_id">Utilisateur</label>
                            <select class="custoGenre" id="users_id" name="name">
                                <option>-<?php foreach ($userList as $currentUserId => $currentUserName) : ?>
                                <option value="<?= $currentUserId ?>"><?= $currentUserName ?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="langue_id">Langue</label>
                            <select class="custoGenre" id="id" langue="langue_l">
                                <option>-<?php foreach ($langueList as $currentLangueId => $currentLangueLangue) : ?>
                                <option value="<?= $currentLangueId ?>"><?= $currentLangueLangue ?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="categorie_id">Catégorie</label>
                            <select class="custoGenre" id="id" name="categorie_id">
                                <option>-<?php foreach ($genreList as $currentGenreId => $currentGenreName) : ?>
                                <option value="<?= $currentGenreId ?>"><?= $currentGenreName ?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="titre_l">Titre</label>
                            <input type="text" class="form-control" name="titre_l" id="titre_l" placeholder="">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="nombre_pages_l">Nombre de pages</label>
                            <input type="text" class="form-control" name="nombre_pages_l" id="nombre_pages_l" placeholder="">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="edition_l">Edition</label>
                            <input type="text" class="form-control" name="edition_l" id="edition_l" placeholder="">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="auteur">Auteur</label>
                            <input type="text" class="form-control" name="edition_l" id="edition_l" placeholder="">
                            </input>
                        </div>

                        <button type="submit" class="btn btn-success btn-block">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <?php include 'templates/footer.php'; ?>
    </main>