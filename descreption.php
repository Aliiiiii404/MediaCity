<?php
session_start();
include_once('include/constants.inc.php');
include_once("include/panier.include.php");
include_once('include/database.class.php');
$mydb = new dataBase(HOST, DATA, USER, PASS);

$sql = 'SELECT * FROM product WHERE id=?';
$params = array($_GET['id']);
$data = $mydb->getProduct($sql, $params);
$row = $mydb->getRows($sql, $params);

//prposition
if ($row > 0) {
  $sql = 'SELECT * FROM product where category = ? and product_name != ?';
  $params = array($data[0]['category'], $data[0]['product_name']);
  $prposition = $mydb->getProduct($sql, $params);
}

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/style.css">
  <title>MEDIACITY</title>
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
  <?php
if ($row > 0) {
  ?>
  <h1 class="desc-h1">Vous avez choisi :</h1>
  <span class="space"></span>
  <div class="description-product">
    <span class="space"></span>
    <img class="disc-film-img" src="img-site-groupe/<?php echo $data[0]['image']; ?>" alt="film">
    <span class="space"></span>
    <figure class="figure-discreption-page">Titre : <?php echo $data[0]['product_name'] ?></figure>
    <figure class="figure-discreption-page">Type : <?php echo ucwords($data[0]['product_type']) ?></figure>
    <figure class="figure-discreption-page">Categorie : <?php echo $data[0]['category'] ?></figure>
    <?php 
    if($data[0]['score'] != ""){
      ?>
    <figure class="figure-discreption-page">Score : <?php echo $data[0]['score']?>⭐⭐⭐⭐</figure>
    <?php
    }elseif($data[0]['score'] == null or $data[0]['score'] == ""){
      ?>
    <figure class="figure-discreption-page">Score : Non disponible.</figure>
      <?php
    }
    ?>
    <figure class="figure-discreption-page">Prix : <?php echo $data[0]['price'] ?> €</figure>
    <?php
      if(!empty($data[0]["videos"])){
    ?>
    <figure class="figure-discreption-page">Extrait de la serie : </figure>
    <video controls="controls">
      <source src="" type="videos/mp4">
      <source src="./videos/ahiro-no-sora.mp4" type="video/mp4">
      <source src="./videos/ahiro-no-sora.mp4" type="video/ogg">
      Votre navigateur ne supporte pas les video!!!
    </video>
    <?php    
      }
    ?>
    <span class="space"></span>
    <div class="block-btns-desc">
<?php
if(isset($_SESSION['id']) && !empty($_SESSION['id']) && empty($_SESSION['admin'])){
?>
<form action="assets/add-panier.php" method="GET">
    <input type="hidden" id="member-id-desc" name="idMmember" value="<?php echo $_SESSION['id'];?>">
    <input type="hidden" id="member-id-desc" name="comunity" value="<?php echo $_SESSION['community'];?>">
    <input type="hidden" id="product-id-desc" name="idProduct" value="<?php echo $_GET['id'];?>">
    <input type="hidden" id="member-id-desc" name="priceProduct" value="<?php echo $data[0]['price'];?>">
    <button type="submit" id="add-fav" class="desc-btn">Ajouter au panier</button>

</form>
<?php 
}else if(empty($_SESSION['admin']) && empty($_SESSION['id'])){
?>
    <button class="danger-form-btn" onclick="window.location.href='connexion.php'">Il faut s'identifier pour pouvoir acheter cet article !!!</button>
<?php 
}
?>
    </div>
  </div>
  <h2 class="proposition-h2">Parceque vous avez choisi <?php echo $data[0]['product_name'] ?> :</h2>
  <span class="big-space"></span>
  <div class="proposition-div">
    <?php
      foreach ($prposition as $key => $value) {
        $html = '<a href="descreption.php?id=' . $value['id'] . '"><img src="img-site-groupe/' . $value['image'] . '" alt="film">';
        $html .= '<figure class="film2-figure">' . $value['product_name'] . '</figure><br><br>';
        $html .= '</a>';
        echo $html;
    }
    ?>
  </div>

<?php
}elseif($row == 0) {
      ?>
      <h1>Aucun resultat trouver</h1>
      <span class="big-space"></span>
      <div class="div-error">
        <img class="img-error" src="img-site-groupe/error.png" alt="">
      </div>
      <span class="big-space"></span>
    <button class="danger" onclick="window.location.href='index.php'">revenir à la page d'accueille</button>
      <?php
  }
  ?>
  <span class="space"></span>
  <!-- FOOTER -->
  <?php include_once('include/footer.php'); ?>
</body>
<script src="js/autocomplete.js" defer></script>
<script src="js/hover-effects.js" defer></script>
<script src="./js/search.js"></script>
</html>