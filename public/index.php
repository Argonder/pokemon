<?php
// Entête HTML ce require permet de charger toutes les balises d'en-tête de la page HTML
require_once('header.php');

// Fonctions de bases
require_once('../resources/function.php');

$errors = [];
?>

<div class="container">
  <form class="form-signin">
    <h2 class="form-signin-heading">Se connecter</h2>
    <label for="inputEmail" class="sr-only">Adresse Email</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Adresse email" required autofocus>
    <label for="inputPassword" class="sr-only">Mot de passe</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
    <div class="checkbox">
      <label>
        <input type="checkbox" value="remember-me">Se souvenir
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
  </form>

</div> <!-- /container -->

<?php
// Fin du HTML
require_once('footer.php');
