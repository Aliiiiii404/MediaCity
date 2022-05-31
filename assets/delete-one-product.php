<?php
session_start();
//importer les info BDD
include_once('../include/constants.inc.php');
include_once('../include/database.class.php');
$mydb = new dataBase(HOST, DATA, USER, PASS);

$idProd = isset($_GET['id_product']) ? trim($_GET['id_product']) : '';
$product_name = isset($_GET['product_name']) ? trim($_GET['product_name']) : '';

try{
    $sql = 'DELETE from reservation WHERE id_membre = ? AND id_product = ?';
    $params = array($_SESSION['id'], $idProd);
    $data = $mydb->deleteProduct($sql, $params);
    echo '
    <script>
    function user() {
        alert("'.$product_name.' as été supprimer!!");
        document.location = "../panier.php";
    }
    user();
    </script>';
}catch(PDOException $err){
    echo $err->getMessage();
}