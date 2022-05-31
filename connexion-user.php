<?php
session_start();
if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
  include_once("include/panier.include.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/style.css">
  <title>MEDIACITY-Espace Membre</title>
  <script src="https://kit.fontawesome.com/57bce97453.js" crossorigin="anonymous"></script>
</head>

<body>
      <!-- Header -->
      <?php include_once('include/header.include.php'); ?>
    <span class="space"></span>
    <!-- bar de recherche-->
    <?php include_once('include/search.include.php'); ?>
    <?php include_once('include/json.names.php'); ?>
  <section class="info">
    <div class="compte-info">
      <h1> Mon Compte : </h1>
      <h2>Nom : <?php echo ucwords($_SESSION['first_name']); ?></h2>
      <h2>Prenom : <?php echo ucwords($_SESSION['last_name']);?></h2>
      <h2>Mail : <?php echo $_SESSION['email'];?></h2>
      <h2>Telephone : <?php echo $_SESSION['phone'];?></h2>
      <h2>Pays : <?php echo $_SESSION['country'];?></h2>
      <h2>Categorie : <?php echo $_SESSION['community'];?></h2>
      <h2>Date d'inscreption : <?php echo $_SESSION['subscribe_date'];?></h2>
      <div class="user-btn">
        <br>
        <!-- formulaire de changment de cordonner -->
        <div class="wrapper">
          <input class="btn-blue" type="submit" value="Modifier Vos cordonner" onclick="window.location.href='#demo-modal'">
        </div>
        <div id="demo-modal" class="modal">
          <div class="modal__content">
            <form action="assets/update-user.php" method="POST" oninput='password1.setCustomValidity(password1.value != password1.value ? "Les mot de pass ne sont pas les memes" : "")'>
              <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" name="nom" id="" value= <?php echo ucwords($_SESSION['last_name']); ?> pattern="[A-Za-z0-9\u00ff-\u00ff]{4,20}" required>
              </div>
              <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" name="prenom" id="" pattern="[A-Za-z0-9\u00ff-\u00ff]{3,20}" value= <?php echo ucwords($_SESSION['first_name']); ?> required>
              </div>
              <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" name="password1" id="password1" placeholder="Password" required>
              </div>
              <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" name="password2" id="password2" placeholder="confirmation de password" required>
              </div>
              <div class="textbox">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input type="email" name="email" id="" value= <?php echo $_SESSION['email']; ?> required>
              </div>
              <div class="textbox">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <input type="tel" name="phone" id="" value= <?php echo $_SESSION['phone']; ?> pattern="^[033]\d{9,9}$" required>
              </div>
              <div class="textbox">
                <i class="fa fa-city" aria-hidden="true"></i>
                <select name="sel" id="sel" aria-placeholder="ville" required>
                </select>
              </div>
              <input type="submit" class="connexion-form-btn" value="Valider">
            </form>
            <a href="#" class="modal__close">&times;</a>
          </div>
        </div>
        <br>
      <input class="danger-form-btn" id="delete-acount" type="submit" value="Suppression de compte">
      <span class="space"></span>
      <input class="danger-form-btn" type="submit" value="Deconnexion   " onclick="leave()">
      </div>
      <br>
  </section>
  <span class="big-space"></span>
  <!-- FOOTER -->
  <?php include_once('include/footer.php'); ?>
</body>
<script src="./js/delete-acount.js" defer></script>
<script src="js/autocomplete.js" defer></script>
<script src="./js/leave.js" defer></script>
<script src="js/api-country.js" defer></script>
<script src="./js/search.js" defer></script>
</html>
<?php 
}elseif(isset($_SESSION['id_admin']) && !empty($_SESSION['id_admin']) && $_SESSION['admin'] == 'Ok') {
  header('Location:admin.php');
}else{
  header('Location:connexion.php');
}
?>