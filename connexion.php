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
  <title>MEDIACITY-Connexion</title>
  <script src="https://kit.fontawesome.com/57bce97453.js" crossorigin="anonymous"></script>
</head>

<body class="body-connexion">
      <!-- Header -->
      <?php include_once('include/header.include.php'); ?>
    <span class="space"></span>
    <!-- bar de recherche-->
    <?php include_once('include/search.include.php'); ?>
    <?php include_once('include/json.names.php'); ?>
  <section class="section-connexion">
    <article class="article-connexion">
    <div class="eurors">
    <?php
      if (isset($_GET['error']) && $_GET['error'] == "1") {
        $html = "Le compte indiqué n'existe pas ou le mot-de-passe entré est incorrect";
    ?>
          <p class="incorrect-user">
            <?php
             echo $html;
            ?>
          </p>
    <?php
      }elseif(isset($_GET['error']) && $_GET['error'] == "0") {
        $html = "Vous vous êtes bien déconnecté de site";
    ?>
          <p class="desconnected">
            <?php
            echo $html;
            ?>
          </p>
          <?php } ?>
    </div>
      <h2 class="h2-sinscrire">Connexion</h2>
      <span class="space"></span>
      <form action="assets/connexion-target.php" method="post">
        <div class="textbox">
          <input type="email" name="email" id="email-connexion" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Email" autocomplete="off" required>
        </div>
        <span class="space-connexion"></span>
        <div class="textbox"> 
          <input type="password" name="password" id="password-connexion" class="password-connexion" placeholder="Password" required>
        </div>
        <span class="space-connexion"></span>
        <input type="submit" class="connexion-form-btn" value="Valider">
      </form>
    <span class="space"></span>
      <a href="inscreption.php">
        <h4 class="h4-sinscrire">Nouveau sur MediaCity? Créez un compte.</h4>
      </a>
    </article>
  </section>
  <!-- FOOTER -->
  <?php include_once('include/footer.php'); ?>
</body>
<script src="js/autocomplete.js" defer></script>
<script src="./js/search.js"></script>
<script src="./js/show-password.js"></script>
</html>