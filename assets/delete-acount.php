<?php
//importer les info BDD
include_once('../include/constants.inc.php');
include_once('../include/database.class.php');
$mydb = new dataBase(HOST, DATA, USER, PASS);

session_start();
try{
    $sql = 'DELETE FROM members WHERE email = ?';
    $params = array($_SESSION['email']);
    $data = $mydb->deleteMember($sql, $params);
    session_destroy();
    header('Location:../inscreption.php');
}catch(PDOException $err){
    echo $err->getMessage();
}