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

        <!--<?php //var_dump($_SESSION); 
            ?>-->
        <?php if (empty($_SESSION)) : ?>
            <h1>Vous n'êtes pas autorisé à voir cette page</h1>
        <?php else : ?>


            <div class="content-message">
                <h5>Bonjour <?= $_SESSION['user']['email']; ?></h5>
                <p> bienvenue dans votre espace privé </p>
                <?=var_dump($_SESSION['user']);?>
                
               
            </div>

    </header>


    <main style="width:auto">

    <div class="container">

<div class="card mt-4">
    <div class="card-header text-center">
    <h1>Mon profil</h1>
    </div>
    <div class="card-body">
        <form method="post" action="modificationInfosPerso.php">
            <div class="input-group m-2">
                <div class="input-group-prepend">
                <span class="input-group-text">Prenom</span>
                </div>
                <input type="text" class="form-control" name="prenom" placeholder=" <?php echo $_SESSION['user']['first_name'] ?>">
            </div>

            <div class="input-group m-2">
                <div class="input-group-prepend">
                <span class="input-group-text">nom</span>
                </div>
                <input type="text" class="form-control" name="nom" placeholder=" <?php echo $_SESSION['user']['name'] ?>">
            </div>
            <div class="input-group m-2">
                <div class="input-group-prepend">
                <span class="input-group-text">Date de naissance</span>
                </div>
                <input type="date" class="form-control" name="date_naissance" placeholder=" <?php echo $_SESSION['user']['date_naissance'] ?>">
            </div>
            
            <div class="input-group m-2">
                <div class="input-group-prepend">
                <span class="input-group-text">Email</span>
                </div>
                <input type="text" class="form-control" name="email" placeholder=" <?php echo $_SESSION['user']['email'] ?>">
            </div>
           
            <div class="input-group m-2">
                <div class="input-group-prepend">
                <span class="input-group-text">Adresse</span>
                </div>
                <input type="text" class="form-control" name="nom_rue" placeholder=" <?php echo $_SESSION['user']['rue'] ?>">
            </div>
            <div class="input-group m-2">
                <div class="input-group-prepend">
                <span class="input-group-text">Code Postale</span>
                </div>
                <input type="text" class="form-control" name="code_postal" placeholder=" <?php echo $_SESSION['user']['cp'] ?>">
            </div>

            <div class="input-group m-2">
                <div class="input-group-prepend">
                <span class="input-group-text">Mot de passe actuel</span>
                </div>
                <input type="password" name="motDePasseActuel" class="form-control" required>
            </div>

            <button class="button2" type="submit">Modifier Mes informations</button>
        </form>
    </div>
</div>
</div>



        <div class="blue">

            <div class="row">
                <div class="col-sm-4">
                    <p class="article">Pouzy-Mésangy, petite commune de 2500 habitants met en place grâce à l’initiative de Madame Guili (mairesse) cette plate-forme qui vous permet de louer des livres entres habitants. Ils doivent être ensuite déposé à la mairie pour être disponible via chacun des utilisateurs. Il suffit juste de s’inscrire en cliquant sur le bouton à droite. </p>
                </div>
                <div class="col-sm">
                    <img class="eglise" style="float:center" src="../images/Eglise2.PNG" alt="eglise">
                </div>
                <div class="col-sm-2 horaires">
                    <p> <strong>Les horaires d’ouvertures :</strong></p>

                    <p>Lundi : 8h30 – 12h / 14h – 16h30</p>
                    <p>Mardi : 8h30 – 12h / 14h – 16h30</p>
                    <p>Mercredi : 8h30 – 12h / 14h – 16h30</p>
                    <p>Jeudi : fermé / 14h – 16h30</p>
                    <p>Vendredi : 8h30 – 12h / 14h – 16h30</p>
                    <p>Samedi : 8h30 – 12h</p>

                </div>
            </div>
        </div>
        </div>
        <!-- je veux tester si mon utilisateur est bien connecté et que donc la super global $_SESSION existe et que  la clé name existe aussi et est bien renseignée -->


        <!-- <img src="">-->




    <?php endif; ?>


    <?php include 'footer.php'; ?>