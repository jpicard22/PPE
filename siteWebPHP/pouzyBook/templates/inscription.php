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
            <a href="index.php?page=home" class="navbar-brand">La bibliothèque numérique de votre commune</a>
        </div>

        <nav>
            <ul class="navbar shadow-1 airforce dark-4">
               
            </ul>
        </nav>

    </header>


  <div class="container">
      <?php //print_r(__DIR__);  
        ?>
      <form action="../controller/inscriptionController.php" method="POST">
          <h1>Inscription</h1>
          <label>Email de l'utilisateur</label>
          <input type="email" placeholder="Entrez l'identifiant" name="email" required>
          <label>Mot de passe</label>
          <input type="password" placeholder="Entrez le mot de passe" name="password" required>
          <label>Vérifiez le Mot de passe</label>
          <input type="password" placeholder="Vérifiez le mot de passe" name="password-check" required>
          <label>Date de naissance</label></br>
          <input type="date" placeholder="Entrez votre date de naissance" name="date_naissance" required></br>
          <label>Nom de l'utilisateur</label></br>
          <input type="text" placeholder="Entrez votre nom" name="name" required></br>
          <label>Prénom de l'utilisateur</label></br>
          <input type="text" placeholder="Entrez votre prénom" name="first_name" required></br>
          <label>Rue de l'utilisateur</label></br>
          <input type="text" placeholder="Entrez votre rue" name="rue" required size="20"></br>
          <label>Code postale de l'utilisateur</label></br>
          <input type="text" placeholder="Entrez votre code postale" name="cp" required size="10"></br>
          <input type="submit" value="INSCRIPTION">
      </form>
  </div>


  <?php include 'footer.php'; ?>

