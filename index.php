<?php
session_start();
include_once('include/constants.inc.php');
include_once("include/panier.include.php");

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<!-- Tete de la page -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/style.css">
  <title>MEDIACITY</title>
  <script src="https://kit.fontawesome.com/57bce97453.js" crossorigin="anonymous"></script>
</head>
<body>
  <!-- Header -->
  <?php include_once('include/header.include.php'); ?>
    <span class="space"></span>
  <!-- bar de recherche-->
  <?php include_once('include/search.include.php'); ?>
  <?php include_once('include/json.names.php'); ?>
  <!-- MAIN -->
  <h1>MEDIACITY:</h1>
  <p class="qui-somme-nous">Nous sommes une des dernieres médiathèque resistant encore et toujours a l'envahisseur.</p>
  <span class="space"></span>
  <div class="flex-button-h2">
    <h2>LES FILMS:</h2>
    <button class="plus" type="button" name="button" onclick="window.location.href='films.php'">Plus...</button>
  </div>

  <span class="space"></span>

  <section id="section__card--one">
    <div class="card">
      <div class="card__inner">
        <div class="card__face card__face--front">
          <img class="demon" src="" alt="">
        </div>
        <div class="card__face card__face--back">
          <div class="card__content">
            <div class="card__header">
              <img src="" alt="" class="pp" />
              <h2 class="card--title"></h2>
            </div>
            <div class="card__body">
              <h3>Discription</h3>
              <p class="card--desc">.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card__inner">
        <div class="card__face card__face--front">
          <img class="demon" src="" alt="">
        </div>
        <div class="card__face card__face--back">
          <div class="card__content">
            <div class="card__header">
              <img src="" alt="" class="pp" />
              <h2  class="card--title"></h2>
            </div>
            <div class="card__body">
              <h3>Discription</h3>
              <p class="card--desc"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card__inner">
        <div class="card__face card__face--front">
          <img class="demon" src="" alt="">
        </div>
        <div class="card__face card__face--back">
          <div class="card__content">
            <div class="card__header">
              <img src="" alt="" class="pp" />
              <h2  class="card--title"></h2>
            </div>
            <div class="card__body">
              <h3>Discription</h3>
              <p class="card--desc"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <span class="space-contact"></span>
  <div class="flex-button-h2">
    <h2>LES SERIES:</h2>
    <button class="plus" type="button" name="button" onclick="window.location.href='serie.php'">Plus...</button>
  </div>
  <span class="space"></span>

  <section id="section__card--two">
    <div class="card">
      <div class="card__inner">
        <div class="card__face card__face--front">
          <img class="demon" src="" alt="">
        </div>
        <div class="card__face card__face--back">
          <div class="card__content">
            <div class="card__header">
              <img src="" alt="" class="pp" />
              <h2  class="card--title"></h2>
            </div>
            <div class="card__body">
              <h3>Discription</h3>
              <p class="card--desc"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card__inner">
        <div class="card__face card__face--front">
          <img class="demon" src="" alt="">
        </div>
        <div class="card__face card__face--back">
          <div class="card__content">
            <div class="card__header">
              <img src="" alt="" class="pp" />
              <h2 class="card--title"></h2>
            </div>
            <div class="card__body">
              <h3>Discription</h3>
              <p class="card--desc"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card__inner">
        <div class="card__face card__face--front">
          <img class="demon" src="" alt="">
        </div>
        <div class="card__face card__face--back">
          <div class="card__content">
            <div class="card__header">
              <img src="" alt="" class="pp" />
              <h2 class="card--title"></h2>
            </div>
            <div class="card__body">
              <h3>Discription</h3>
              <p class="card--desc"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <span class="space-contact"></span>
  <div class="flex-button-h2">
    <h2>LES MUSIQUES:</h2>
    <button class="plus" type="button" name="button" onclick="window.location.href='musique.php'">Plus...</button>
  </div>
  <span class="space"></span>
  <section id="section__card--tree">
    <div class="card">
      <div class="card__inner">
        <div class="card__face card__face--front">
          <img class="demon" src="img-site-groupe/pnl.jpg" alt="">
        </div>
        <div class="card__face card__face--back">
          <div class="card__content">
            <div class="card__header">
              <img src="img-site-groupe/pnl.jpg" alt="" class="pp" />
              <h2>PNL</h2>
            </div>
            <div class="card__body">
              <h3>Discription</h3>
              <p class="card--desc">PNL est un groupe de rap français, composé de deux frères, Ademo et N.O.S, de leurs vrais noms Tarik et Nabil Andrieu,
                originaires de la cité des Tarterêts à Corbeil-Essonnes. Le groupe se caractérise par une absence totale d'interviews dans la presse.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card__inner">
        <div class="card__face card__face--front">
          <img class="demon" src="img-site-groupe/blind.png" alt="">
        </div>
        <div class="card__face card__face--back">
          <div class="card__content">
            <div class="card__header">
              <img src="img-site-groupe/blind.png" alt="" class="pp" />
              <h2>The Weeknd</h2>
            </div>
            <div class="card__body">
              <h3>Discription</h3>
              <p class="card--desc">The Weeknd, de son vrai nom Abel Makkonen Tesfaye, né le 16 février 1990 à Toronto,
                au Canada, est un auteur-compositeur-interprète,
                musicien et producteur de musique canadien d'origine éthiopienne</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card__inner">
        <div class="card__face card__face--front">
          <img class="demon" src="img-site-groupe/mood.png" alt="">
        </div>
        <div class="card__face card__face--back">
          <div class="card__content">
            <div class="card__header">
              <img src="img-site-groupe/mood.png" alt="" class="pp" />
              <h2>24KGoldn ft Iann Dior "mood"</h2>
            </div>
            <div class="card__body">
              <h3>Discription</h3>
              <p class="card--desc">Golden Landis Von Jones, known professionally as 24kGoldn,
                is an American rapper, singer, songwriter, and former child actor.
                He rose to fame with his single "Valentino".</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
    if(isset($_SESSION['id']) && !empty($_SESSION['id']) || isset($_SESSION['id_admin']) && !empty($_SESSION['id_admin'])){
?>
  <span class="space"></span>
<?php 
  }else if(empty($_SESSION['id_admin']) && empty($_SESSION['id'])){
    include_once("include/abonnes.include.php");
  }
?>
  <!-- FOOTER -->
  <?php include_once('include/footer.php'); ?>
</body>
<script src="js/notification.js" defer></script>
<script src="js/script.js" defer></script>
<script src="js/search.js" defer></script>
<script src="js/autocomplete.js" defer></script>
</html>