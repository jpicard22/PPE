  <?php include 'templates/header.php'; ?>



  <form action="inscriptionController.php" method="POST">
    <h1>Inscription</h1>
    <label>Nom d'utilisateur</label>
    <input type="email" placeholder="Entrez l'identifiant" name="email" required>
    <label>Mot de passe</label>
    <input type="password" placeholder="Entrez le mot de passe" name="password" required>
    <label>Vérifier le Mot de passe</label>
    <input type="password" placeholder="Vérifier le mot de passe" name="password-check" required>
    <input type="submit" value="INSCRIPTION">
  </form>

  <?php include 'templates/footer.php'; ?>