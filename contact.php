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
  <title>MEDIACITY-Contact</title>
  <script src="https://kit.fontawesome.com/57bce97453.js" defer crossorigin="anonymous"></script>
</head>
<body>
      <!-- Header-->
      <?php include_once('include/header.include.php'); ?>
<span class="space"></span>
    <!-- bar de recherche-->
      <?php include_once('include/search.include.php'); ?>
      <?php include_once('include/json.names.php'); ?>
    <!-- bar de recherche-->
  <h1>CONTACT:</h1>
  <p class="qui-somme-nous">VOUS AUSSI.</p>
  <p class="qui-somme-nous">REJOIGNEZ LA COMMUNAUTE DE L'ABO DES MAINTENANT</p>
  <span class="space"></span>
  <table class="table-contact">
    <tr>
      <th>Avantages</th>
      <th>Visiteurs</th>
      <th>Membres</th>
      <th>Premium</th>
    </tr>
    <tr>
      <td>Réservation</td>
      <td><img class="check" src="img-site-groupe/close.svg" alt=""></td>
      <td><img class="check" src="img-site-groupe/check.svg" alt=""></td>
      <td><img class="check" src="img-site-groupe/check.svg" alt=""></td>
    </tr>
    <tr>
      <td>Priorité sur les Reservation</td>
      <td><img class="check" src="img-site-groupe/close.svg" alt=""></td>
      <td><img class="check" src="img-site-groupe/close.svg" alt=""></td>
      <td><img class="check" src="img-site-groupe/check.svg" alt=""></td>
    </tr>
    <tr>
      <td>Possibilité de commander</td>
      <td><img class="check" src="img-site-groupe/close.svg" alt=""></td>
      <td><img class="check" src="img-site-groupe/close.svg" alt=""></td>
      <td><img class="check" src="img-site-groupe/check.svg" alt=""></td>
    </tr>
    <tr>
      <td>Possibilité de laisser des recommandation</td>
      <td><img class="check" src="img-site-groupe/close.svg"  alt=""></td>
      <td><img class="check" src="img-site-groupe/check.svg" alt=""></td>
      <td><img class="check" src="img-site-groupe/check.svg" alt=""></td>
    </tr>
    <tr>
      <td>Délais de retour des locations</td>
      <td class="tableau">48 heures</td>
      <td class="tableau">3 Jours</td>
      <td class="tableau">5 Jours</td>
    </tr>
    <tr>
      <td>Nombre de location</td>
      <td class="tableau">Paiement à l'unité</td>
      <td class="tableau">Paiement à l'unité</td>
      <td class="tableau">5 Par semaine</td>
    </tr>
  </table>
  <span class="big-space"></span>
  <div class="magasin">
    <img src="img-site-groupe/magasin.jpg" alt="">
    <p>retrouvez nous au
      <span class="magasin-space"></span>
      16 avenue de general de gaulle
    <span class="magasin-space"></span>
      59000 Lille
    <span class="magasin-space"></span>
      ou contactez nous
    <span class="magasin-space"></span>
      par <a href="mailto:alibencheikh212@gmail.com"> alibencheikh212@gmail.com</a>
    <span class="magasin-space"></span></p>
    <span class="magasin-space"></span>
  </div>
  <span class="big-space"></span>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2596.0019836088254!2d2.8264363158455743!3d49.40886816974235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e7d42fd350e39f%3A0xbce4f254cdcc97f2!2sGRETA%20Oise%2C%20Agence%20de%20Compi%C3%A8gne!5e0!3m2!1sfr!2sfr!4v1613035070407!5m2!1sfr!2sfr">
  </iframe>
  <span class="space"></span>
  <?php if(!isset($_SESSION['id']) && empty($_SESSION['id']) && empty($_SESSION['admin'])){ ?>
    <div class="quiz">
      <p class="para-quiz">VOUS VOULEZ AVOIR UN ABONMENT GRATUIT:</p>
      <button class="btn-quiz" onclick="window.location.href='quiz.php'">Passer le quiz</button>
    </div>
  <?php } ?>
  <span class="space"></span>
  <!-- FOOTER -->
  <?php include_once('include/footer.php'); ?>
</body>
<script src="js/autocomplete.js" defer></script>
<script src="./js/search.js"></script>
</html>
