<?php
session_start();
//include le fichier qui contient les info sur la BDD
include_once('../include/constants.inc.php');
include_once('../include/database.class.php');
$mydb = new dataBase(HOST, DATA, USER, PASS);

//les variable
$fName = isset($_POST['nom']) ? $_POST['nom'] : '';
$lName = isset($_POST['prenom']) ? trim($_POST['prenom']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$country = isset($_POST['sel']) ? trim($_POST['sel']) : '';
$password = isset($_POST['password1']) ? trim($_POST['password1']) : '';
$community = isset($_POST['categorie']) ? trim($_POST['categorie']) : "";
//netoiyer les donnes
$fName = htmlspecialchars($fName);
$lName = htmlspecialchars($lName);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
$country = htmlspecialchars($country);
$password = htmlspecialchars($password);
$community = htmlspecialchars($community);
//crypter le mot de pass
$password = password_hash($_POST['password1'], PASSWORD_DEFAULT);
//ajout dans la BDD table membre
  try{
    //verificattion si le membre existe dans la BDD
    $sql = 'SELECT * FROM members WHERE email=?';
    $params = array($email);
    $row = $mydb->getRows($sql, $params);
    if($row === 1){
      header("Location:../inscreption.php?email=error");
    }else if($row === 0){
      $params = array($fName, $lName, $email, $password, $phone, $country, $community);
      $data = $mydb->createMembre($params);
      header("Location:../inscreption.php?error=none");
    }
  }catch(PDOException $err){
      echo $err->getMessage();
}
?>