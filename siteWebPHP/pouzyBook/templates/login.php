  <?php include 'templates/header.php'; ?>



  <form action="loginController.php" method="POST">
      <h1>Connexion</h1>
      <label>Nom d'utilisateur</label>
      <input type="email" placeholder="Entrez l'identifiant" name="email" required>
      <label>Mot de passe</label>
      <input type="password" placeholder="Entrez le mot de passe" name="password" required>
      <input type="submit" value="LOGIN">
  </form>

  <?php include 'templates/footer.php'; ?>


  <!-- <div id="container">
        <form action="" method="POST">
            <h1>Connexion</h1>
            <label><strong>Nom d'utilisateur</strong></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
            <label><strong>Mot de passe</strong></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>
            <input type="submit" value="LOGIN">
        </form>
    </div>
  </body>
</html>  -->