<?php
session_start();
//importer les info BDD
include_once('../include/constants.inc.php');
include_once('../include/database.class.php');
$mydb = new dataBase(HOST, DATA, USER, PASS);

$id_product = $_GET['id'];
$bdd = new PDO('mysql:host='.HOST.";dbname=".DATA.";port=".PORT.";charset=utf8", USER, PASS);
if(isset($id_product)){
        try{
            $sql = 'DELETE from product WHERE id = ?';
            $params = array($id_product);
            $data = $mydb->deleteProduct($sql, $params);
        }catch(PDOException $err){
            echo $err->getMessage();
        }
}else{
    echo '<div class="alert alert-danger" role="alert">
    la supprission a rencontrer une erreur!!
  </div>';
}