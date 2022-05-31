<?php
session_start();
 include_once("include/panier.include.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/style.css">
  <script src="https://kit.fontawesome.com/57bce97453.js" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>
  <!-- Header -->
  <?php include_once('include/header.include.php'); ?>
    <span class="space"></span>
    <!-- bar de recherche-->
    <?php include_once('include/search.include.php'); ?>
    <?php include_once('include/json.names.php'); ?>
    <!-- bar de recherche-->
<!-- MAIN -->
  <main>
    <h1>Bien venu dans la page de quiz:</h1>
    <section>
      <article>
        <h2 class="h2-text-quiz"><span class="span-text-quiz">Q</span>uiz <i class="far fa-question-circle"></i></h2>
        <h3 id="question">1 : Dans le seigneur des anneaux: quelle objet Frodon doit détruire?</h3>
        <h3 id="score"></h3>
        <div class="choices">
          <button class="guess1">
            la fourchette
          </button>
          <button class="guess1">
            Les clees
          </button>
          <button class="guess0">
            l'anneaux
          </button>
          <button class="guess1">
            son epee
          </button>
        </div>
      </article>
      <article>
        <h3 id="question">2 : Dans le pari: quel est le pari en question?</h3>
        <h3 id="score"></h3>
        <div class="choices">
          <button class="guess0">
            arréter de fumer
          </button>
          <button class="guess1">
            taguer la maison de famille
          </button>
          <button class="guess1">
            faire le tour du monde en vélo
          </button>
          <button class="guess1">
          se baigner nue dans la piscine
          </button>
        </div>
      </article>
      <article>
        <h3 id="question">3 : Dans titanic: à cause de quoi le bateau a coulé?</h3>
        <h3 id="score"></h3>
        <div class="choices">
          <button class="guess1">
            le bateau n'a jamais coulé
          </button>
          <button class="guess0">
            à cause d'un iceberg
          </button>
          <button class="guess1">
            à cause du hollandais volant
          </button>
          <button class="guess1">
            à cause de quelqu'un qui a vidé sa baignoire
          </button>
        </div>
      </article>
      <article>
        <h3 id="question">4 : De quelle couleur est Shrek?</h3>
        <h3 id="score"></h3>
        <div class="choices">
          <button class="guess1">
            rouge
          </button>
          <button class="guess1">
            bleu
          </button>
          <button class="guess1">
            jaun
          </button>
          <button class="guess0">
            vert
          </button>
        </div>
      </article>

      <article>
        <h3 id="question">5 : Quelle est la particularité de Hulk?</h3>
        <h3 id="score"></h3>
        <div class="choices">
          <button class="guess1">
            il peut monter aux murs
          </button>
          <button class="guess0">
            il devient incroyablement fort et vert
          </button>
          <button class="guess1">
            il vole
          </button>
          <button class="guess1">
            il est elastique
          </button>
        </div>
      </article>
    </section>
  </main>
  <span class="space"></span>
  <!-- FOOTER -->
  <?php include_once('include/footer.php'); ?>
</body>
<script src="./js/quiz.js" defer></script>
<script src="./js/autocomplete.js" defer></script>
<script src="./js/search.js" defer></script>
</html>