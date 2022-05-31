<?php
session_start();
include_once("include/panier.include.php");
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/style.css">
  <title>Inscreption</title>
  <script src="https://kit.fontawesome.com/57bce97453.js" crossorigin="anonymous"></script>
</head>

<body class="body-insc">
  <!-- Header -->
  <?php include_once('include/header.include.php'); ?>
    <span class="space"></span>
    <!-- bar de recherche-->
    <?php include_once('include/search.include.php'); ?>
    <?php include_once('include/json.names.php'); ?>
    <!-- bar de recherche-->
  <section class="section-connexion">
  <div class="eurors">
    <?php
      if (isset($_GET['email']) && $_GET['email'] == "error") {
    ?>
       <p class="incorrect-user">le mail est déjà utiliser par quelqu'un d'autre</p>
    <?php
      }elseif(isset($_GET["error"]) && $_GET["error"] == "none"){
    ?>
        <p class="desconnected">Votre inscription est terminer Vous pouvez maintenant vous connecter</p>
    <?php    
      }
    ?>
    </div>
    <article class="article-connexion">
      <form action="assets/inscreption-add-form.php" method="post">
        <h2 class="h2-sinscrire">Inscription</h2>
        <span class="space"></span>
          <div class="textbox">   
            <input type="text" name="nom" id="nom" placeholder="Nom" pattern="[A-Za-z]{3,20}" required >
          </div>
          <span class="space-inscreption"></span>
          <div class="textbox">         
            <input type="text" name="prenom" id="prenom" pattern="[A-Za-z]{3,20}" placeholder="Prenom" required>
          </div>
          <span class="space-inscreption"></span>
          <div class="textbox">        
            <input type="password" class="password-connexion" name="password1" id="password1" placeholder="Mot-De-Passe" required>
          </div>
          <span class="space-inscreption"></span>
          <div class="textbox">
            <input type="password" class="password-connexion" name="password2" id="password2" placeholder="Confirmation de mot-de-passe" required>
          </div>
          <span class="space-inscreption"></span>
          <div class="textbox">
            <input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Email" required>
          </div>
          <span class="space-inscreption"></span>
          <div class="textbox">          
            <input type="tel" name="phone" id="phone" placeholder="0123456789" pattern="^[033]\d{9,9}$" title="0712345678" required>
          </div>
          <span class="space-inscreption"></span>
          <div class="textbox">
            <select name="sel" id="sel" aria-placeholder="ville" required>
              <option value="France">France</option>
              <option value="Maroc">Maroc</option>
              <option value="Algerie">Algerie</option>
              <option value="U.S.A">U.S.A</option>
            </select>
          </div>
          <span class="space-inscreption"></span>
          <div class="textbox">
            <select name="categorie" id="categorie" aria-placeholder="Categorie" required>
              <option value="Visiteurs">Visiteurs</option>
              <option value="Membres">Membres</option>
              <option value="Premium">Premium</option>
            </select>
          </div>
          <span class="space"></span>
          <input type="submit" class="connexion-form-btn" value="Valider">
      </form>
    <span class="space"></span>
    <a href="connexion.php">
      <h4 class="h4-sinscrire">Vous avez déjà un compte? Connexion</h4>
    </a>
    </article>
  </section>
  <!-- FOOTER -->
  <?php include_once('include/footer.php'); ?>
</body>
<script src="js/api-country.js"></script>
<script src="js/autocomplete.js" defer></script>
<script src="js/search.js"></script>
</html>