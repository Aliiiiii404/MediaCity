<?php 
    session_start();
    //importer les info BDD
    include_once('../include/constants.inc.php');
    include_once('../include/database.class.php');
    $mydb = new dataBase(HOST, DATA, USER, PASS);

    $product_name = isset($_POST['product_name']) ? trim($_POST['product_name']) : '';
    $product_type = isset($_POST['product_type']) ? trim($_POST['product_type']) : '';
    $category = isset($_POST['categorie']) ? trim($_POST['categorie']) : '';
    $image = isset($_POST['image-product']) ? trim($_POST['image-product']) : '';
    $price = isset($_POST['prix']) ? trim($_POST['prix']) : '';
    $score = isset($_POST['score']) ? trim($_POST['score']) : '';
    //netoiyer les donnes
    $product_name = htmlspecialchars($product_name);
    $product_type = htmlspecialchars($product_type);
    $category = htmlspecialchars($category);
    $image = htmlspecialchars($image);
    $price = htmlspecialchars($price);
    $score = htmlspecialchars($score);
    //chercher si le produits est deja present
    $sql = 'SELECT * FROM product WHERE image = ?';
    $params = array($image);
    $row = $mydb->getRows($sql, $params);

    if ($row===1) {
      echo '
      <script>
      function cBon() {
        if (confirm("Ce produits est deja present dans la base de donnes")) {
            document.location = "../admin.php";
          }else{
            document.location = "../admin.php";
          }

      }
      cBon();
      </script>
      ';
    }elseif($row===0){
      try{
        $sql = 'INSERT INTO product (product_type, product_name, image, category, score, price) values(?, ?, ?, ?, ?, ?)';
        $params = array($product_type, $product_name, $image, $category, $score, $price);
        $data = $mydb->addProduct($sql, $params);
        echo '
        <script>
        function productAdd() {
          if (confirm("Le produits a bien été Ajouter")) {
              document.location = "../admin.php";
            }else{
              document.location = "../admin.php";
            }
        }
        productAdd();
        </script>
        ';
      }catch(PDOException $err){
          echo $err->getMessage();
      }
    }
    ?>