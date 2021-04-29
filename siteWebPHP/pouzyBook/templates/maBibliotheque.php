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
            <li class="nav-item btn small rounded-2  blue press"><a class="nav-link" href="privatespace.php">Mon espace</a></li>
            <li class="nav-item btn small rounded-2  blue press"><a class="nav-link" href="index.php?page=ajoutLivre">Ajout d'un livre</a></li>
            </ul>
        </nav>

    </header>

    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Ma bibliothèque</h1>
           
        </div>
        <h1></h1>
        <div class="row">
        <div class="col-12 col-md-8">

                <a href="index.php?order=titre_l&amp;page=ajoutLivre" class="btn btn-primary">Trier par titre</a>&nbsp;
                <a href="index.php?order=auteur&amp;page=ajoutLivre" class="btn btn-info">Trier par auteur</a>&nbsp;
                

                <?php if (isset($_GET['order'])) :?>

                <a href="index.php?page=ajoutLivre" class="btn btn-dark">Annuler le tri</a><br> 

                <?php endif;?>   

                <br>
                <table class="table table-striped">
                <thead>
                    <tr>
                      
                        <th scope="col">Utilisateur</th>
                        <th scope="col">Langue</th>
                        <th scope="col">Categorie</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Nombre de pages</th>
                        <th scope="col">Edition</th>
                        <th scope="col">Auteur</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- TODO #1 boucler sur le tableau $bookList contenant tous les livres
                    (supprimez ces 2 lignes d'exemple) -->
                    <?php foreach ($livreList as $livre) :?>
                    <tr>
                       
                        <td><?= $livre['users_id'];?></td>
                        <td><?= $livre['langue_id'];?></td>
                        <td><?= $livre['categorie_id'];?></td>
                        <td><?= $livre['titre_l'];?></td>
                        <td><?= $livre['nombre_pages_l'];?></td>
                        <td><?= $livre['edition_l'];?></td>
                        <td><?= $livre['auteur'];?></td>
                        <!--<td><?= $langueList[$livre['categorie_id']];?></td>-->
                    </tr>
                    <?php endforeach;?>
                </tbody>
                </table>
            </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 

</div>
</main>


<?php include 'templates/footer.php'; ?>