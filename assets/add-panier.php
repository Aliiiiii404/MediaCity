<?php 
  session_start();
  include_once('../include/constants.inc.php');
  include_once('../include/database.class.php');
  $mydb = new dataBase(HOST, DATA, USER, PASS);

  $idMmember = isset($_GET['idMmember']) ? trim($_GET['idMmember']) : '';
  $comunity = isset($_GET['comunity']) ? trim($_GET['comunity']) : '';
  $idProduct = isset($_GET['idProduct']) ? $_GET['idProduct'] : '';
  $priceProduct = isset($_GET['priceProduct']) ? $_GET['priceProduct'] : '';
  //netoiyage des donnees
  $idMmember = htmlspecialchars($idMmember);
  $comunity = htmlspecialchars($comunity);
  $idProduct = htmlspecialchars($idProduct);
  $priceProduct = htmlspecialchars($priceProduct);
  // verfifier commbien de produits le client as deja commander
  $sqlCount = 'SELECT DISTINCT reser.id_product, prod.product_name , prod.price, prod.image FROM members, reservation as reser JOIN product as prod ON reser.id_product = prod.id JOIN members as m on reser.id_membre = ?';
  $params = array($_SESSION['id']);
  $row = $mydb->getRows($sqlCount, $params);
  if ($row >= 7) {
    echo '
    <script>
        function cBon() {
          if (confirm("Vous pouvez pas commander plus de 7 produits veuillez vider votre panier d\'abord !! ")) {
              document.location = "../panier.php";
            }else{
              document.location = "../panier.php";
            }
        }
        cBon();
        </script>
        ';
  }else if($row < 7){
  //verifier si l'utilisateur a deja commander ce produits
  $sql = 'SELECT * FROM reservation where id_membre = ? AND id_product = ?';
  $params = array($idMmember, $idProduct);
  $data = $mydb->getProduct($sql, $params);
  $row = $mydb->getRows($sql, $params);
  if($row===1){
    echo '
    <script>
        function cBon() {
          if (confirm("Vous avez deja commander ce produits !!! ")) {
            window.history.go(-2);
            }else{
              window.history.go(-2);
            }
        }
        cBon();
        </script>
        ';
  }else{
    try{
      $params = array($idMmember, $comunity, $idProduct, $priceProduct);
      $data = $mydb->addproductPanier($params);
      echo '
        <script>
            function cBon() {
                if(confirm("Le produits a bien été ajouter")) {
                  window.history.go(-2);
                }else{
                  window.history.go(-2);
                }
            };
            cBon();
            </script>
            ';
    }catch(PDOException $err){
      echo $err->getMessage();
    }
  }
  }
    ?>


