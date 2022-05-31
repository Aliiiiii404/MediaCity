<?php
session_start();
if(isset($_SESSION['id']) && !empty($_SESSION['id']) && empty($_SESSION['admin'])){
include_once('include/constants.inc.php');
include_once('include/database.class.php');
include_once("include/panier.include.php");

$mydb = new dataBase(HOST, DATA, USER, PASS);
// le produits commander en fonction de l'id de lutilisateur
$bdd = new PDO('mysql:host=' . HOST . ";dbname=" . DATA . ";port=" . PORT . ";charset=utf8", USER, PASS);
$sql = 'SELECT * FROM reservation WHERE id_membre=?';
$params = array($_SESSION['id']);
$data = $mydb->getProduct($sql, $params);
$prodMemberCount = $mydb->getRows($sql, $params);
//le nombre des colon reterner
$sqlCount = 'SELECT count(DISTINCT reser.id_product, prod.product_name , prod.price, prod.image) FROM members, reservation as reser JOIN product as prod ON reser.id_product = prod.id JOIN members as m on reser.id_membre = ?';
$reqCount = $bdd->prepare($sqlCount);
$reqCount->execute(array($_SESSION['id']));
$count = $reqCount->fetch();
$row = $reqCount->rowCount();

//selectioner l'image
if($row > 0){
  $sql2 = 'SELECT DISTINCT reser.id_product, prod.product_type, prod.product_name , prod.price, prod.image FROM members, reservation as reser JOIN product as prod ON reser.id_product = prod.id JOIN members as m on reser.id_membre = ?';
  $req2 = $bdd->prepare($sql2);
  $req3 = $bdd->prepare($sql2);
  $req2->execute(array($_SESSION['id']));
  $req3->execute(array($_SESSION['id']));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <script src="https://kit.fontawesome.com/57bce97453.js" defer crossorigin="anonymous"></script>
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
  <h1>Votre Panier : </h1>
  <span class="space"></span>
  <section class="commande">
    <?php
    $total = array();
    while ($data2 = $req3->fetch(PDO::FETCH_ASSOC)) : ?>
          <div class="grid-item">
            <span class="big-space"></span>
            <h2><?php echo $data2['product_name'] ?></h2>
            <h2>Type : <?php echo $data2['product_type'] ?></h2>
            <h2>Prix : <?php echo $data2['price'] ?> €</h2>
            <img class="panier-image" src="img-site-groupe/<?php echo $data2['image']; ?>" alt="film">
            <form action="assets/delete-one-product.php">
              <input type="hidden" name="id_product" id="delete-one-id" value="<?php echo $data2['id_product'] ?>">
              <input type="hidden" name="product_name" id="delete-one-id" value="<?php echo $data2['product_name'] ?>">
              <span class="space"></span>
              <input type="submit" value="Supprimer" class="danger delete-one-item">
            </form>
          </div>
          <?php array_push($total, $data2['price']); ?>
    <?php
    endwhile; ?>
  </section>
  <span class="space"></span>
  <hr>
  <span class="space"></span>
  <?php if (!empty($total)) {
    ?>
  <h2 class="total-prix">Total : <?php echo array_sum($total)?> € </h2>
  <input type="hidden" id="member-id-desc" name="idMmember" value="<?php echo $_SESSION['id'];?>">
  <div class="btn-pay">
  <button type="submit" id="add-fav" class="panier-btn">Valider et payer</button>
  </div>
    <?php
  }else{
    ?>
    <span class="big-space"></span>
    <h1>Votre panier est vide</h1>
    <style>
      footer {
        margin-top: 15%;
      }
    </style>
    <?php
  }
  ?>
  <span class="space"></span>
  <!-- FOOTER -->
  <?php include_once('include/footer.php'); ?>
</body>
<script src="js/delete-one-product.js" defer></script> 
<script src="js/autocomplete.js" defer></script>
<script src="js/pay.js" defer></script> 
<script src="./js/search.js" defer></script>
</html>
<?php 
}elseif ($_SESSION['admin'] = 'Ok') {
  header('Location:admin.php');
}else{
  header('Location:connexion.php');
}
?>