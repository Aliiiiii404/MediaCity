<?php
  session_start();
  include_once('include/constants.inc.php');
  include_once("include/panier.include.php");
  include_once('include/database.class.php');
  $mydb = new dataBase(HOST, DATA, USER, PASS);

try {
  $sql = 'SELECT * FROM product where product_type = "serie" and category = "Action/Aventure"';
  $sql2 = 'SELECT * FROM product where product_type = "serie" and category = "Comedie"';
  $sql3 = 'SELECT * FROM product where product_type = "serie" and category = "Anime"';
  $dataAventure = $mydb->getProduct($sql);
  $dataComedie = $mydb->getProduct($sql2);
  $dataAnime = $mydb->getProduct($sql3);
} catch (PDOException $err) {
  echo $err->getMessage();
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/style.css">
  <link rel="stylesheet" href="./style/slider.css">
  <link rel="stylesheet" href="./style/lightslider.css">
  <title>MEDIACITY-Serie</title>
  <script src="https://kit.fontawesome.com/57bce97453.js" defer crossorigin="anonymous"></script>
</head>

<body>
  <!-- Header -->
  <?php include_once('include/header.include.php'); ?>
    <span class="space"></span>
    <!-- bar de recherche-->
    <?php include_once('include/search.include.php'); ?>
    <?php include_once('include/json.names.php'); ?>
    <!-- bar de recherche-->
  <h1>SERIES</h1>
  <p class="qui-somme-nous">Bienvenu dans la page Series.</p>
  <span class="space"></span>
  <p class="Bientot">Populaire en ce moment</p>
  <div class="film2s-affiche">

    <div class="box">
      <div class="imgBx">
        <img class="bande-serie" src="" alt="film">
      </div>
      <div class="content score-serie">
        <span class="space"></span>
        <h2 class="content-serie"></h2>
        <h3 class="date-serie"></h3>
      </div>
    </div>

    <div class="box">
      <div class="imgBx">
        <img class="bande-serie" src="" alt="film">
      </div>
      <div class="content score-serie">
        <span class="space"></span>
        <h2 class="content-serie"></h2>
        <h3 class="date-serie"></h3>
      </div>
    </div>

    <div class="box">
      <div class="imgBx">
        <img class="bande-serie" src="" alt="film">
      </div>
      <div class="content score-serie">
        <span class="space"></span>
        <h2 class="content-serie"></h2>
        <h3 class="date-serie"></h3>
      </div>
    </div>
  </div>
  <hr>
  <span class="big-space"></span>
  <h1 id="action">ACTION/AVENTURE</h1>
  <div class="container-product">
        <ul id="autoWidth" class="cs-hidden">
          <?php
          foreach ($dataAventure as $key => $value) {
          ?>
            <li class="item-a">
                <div class="box-product">
                    <p class="product-name"><?php echo $value['product_name']; ?></p>
                    <img src="./img-site-groupe/<?php echo $value['image'];?>" alt="product" class="product-img">
                    <a class="product-details" href="descreption.php?id=<?php echo $value['id']; ?>">Plus de détails</a>
                </div>
            </li>
            <?php
                }
            ?>
        </ul>
    </div>
  <span class="big-space"></span>
  <h1 id="comedie">COMEDIE</h1>
  <div class="container-product">
        <ul id="autoWidth1" class="cs-hidden">
          <?php
          foreach ($dataComedie as $key => $value) {
          ?>
            <li class="item-a">
                <div class="box-product">
                    <p class="product-name"><?php echo $value['product_name']; ?></p>
                    <img src="./img-site-groupe/<?php echo $value['image'];?>" alt="product" class="product-img">
                    <a class="product-details" href="descreption.php?id=<?php echo $value['id']; ?>">Plus de détails</a>
                </div>
            </li>
            <?php
                }
            ?>
        </ul>
    </div>
  <span class="big-space"></span>
  <h1 id="Anime/Manga">ANIME/MANGA</h1>
  <div class="container-product">
        <ul id="autoWidth2" class="cs-hidden">
          <?php
          foreach ($dataAnime as $key => $value) {
          ?>
            <li class="item-a">
                <div class="box-product">
                    <p class="product-name"><?php echo $value['product_name']; ?></p>
                    <img src="./img-site-groupe/<?php echo $value['image'];?>" alt="product" class="product-img">
                    <a class="product-details" href="descreption.php?id=<?php echo $value['id']; ?>">Plus de détails</a>
                </div>
            </li>
            <?php
                }
            ?>
        </ul>
    </div>
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
<script src="js/lettre-by-lettre.js" defer></script>
<script src="js/autocomplete.js" defer></script>
<script src="js/api-serie.js" defer></script>
<script src="./js/search.js" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="./js/lightslider.js"></script>
<script src="./js/responsive-slider.js" defer></script>
</html>