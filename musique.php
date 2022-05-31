<?php
session_start();
include_once('include/constants.inc.php');
include_once("include/panier.include.php");
include_once('include/database.class.php');

$mydb = new dataBase(HOST, DATA, USER, PASS);

try {
  $sql = 'SELECT * FROM product where product_type = "musique" and category = "ROCK"';
  $sql2 = 'SELECT * FROM product where product_type = "musique" and category = "POP"';
  $sql3 = 'SELECT * FROM product where product_type = "musique" and category = "RAP"';
  $dataRock = $mydb->getProduct($sql);
  $dataPop = $mydb->getProduct($sql2);
  $dataRap = $mydb->getProduct($sql3);
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
  <title>MEDIACITY-Musique</title>
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
  <span class="big-space"></span>
  <h1>MUSIQUES</h1>
  <p class="qui-somme-nous">Bienvenu dans la page Musique.</p>
  <span class="space"></span>
  <p class="Bientot">Populaire en ce moment</p>
  <div class="film2s-affiche">
    <div class="box">
      <div class="imgBx">
        <img class="musique2" src="img-site-groupe/damso.jpg" alt="film">
      </div>
      <div class="content">
        <span class="space"></span>
        <span class="space"></span>
        <h2>911</h2>
      </div>
    </div>

    <div class="box">
      <div class="imgBx">
        <img class="musique2" src="img-site-groupe/blind.png" alt="film">
      </div>
      <div class="content">
        <span class="space"></span>
        <span class="space"></span>
        <h2>Blinding lights</h2>
      </div>
    </div>

    <div class="box">
      <div class="imgBx">
        <img class="musique2" src="img-site-groupe/mood.png" alt="film">
      </div>
      <div class="content">
        <span class="space"></span>
        <span class="space"></span>
        <h2>Mood</h2>
      </div>
    </div>
  </div>
  <hr>
  <span class="big-space"></span>
  <h1 id="Rock">ROCK</h1>
  <div class="container-product">
        <ul id="autoWidth" class="cs-hidden">
          <?php
          foreach ($dataRock as $key => $value) {
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
  <h1 id="Pop">POP</h1>
  <div class="container-product">
        <ul id="autoWidth1" class="cs-hidden">
          <?php
          foreach ($dataPop as $key => $value) {
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
  <h1 id="Rap">RAP</h1>
  <div class="container-product">
        <ul id="autoWidth2" class="cs-hidden">
          <?php
          foreach ($dataRap as $key => $value) {
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
<script src="./js/search.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="./js/lightslider.js"></script>
<script src="./js/responsive-slider.js" defer></script>
</html>