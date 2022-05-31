<?php
session_start();
//importer les info BDD
include_once('../include/constants.inc.php');
include_once('../include/database.class.php');
$mydb = new dataBase(HOST, DATA, USER, PASS);

$idMember = isset($_GET['idMmember']) ? trim($_GET['idMmember']) : '';
try{
    $sql = 'DELETE from reservation WHERE id_membre = ?';
    $params = array($idMember);
    $data = $mydb->deleteProduct($sql, $params);
}catch(PDOException $err){
    echo $err->getMessage();
}