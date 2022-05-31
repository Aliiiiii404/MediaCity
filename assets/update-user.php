<?php 
    session_start();
    //importer les info BDD
    include_once('../include/constants.inc.php');
    include_once('../include/database.class.php');
    $mydb = new dataBase(HOST, DATA, USER, PASS);

    $fName = isset($_POST['nom']) ? $_POST['nom'] : '';
    $lName = isset($_POST['prenom']) ? trim($_POST['prenom']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $country = isset($_POST['sel']) ? trim($_POST['sel']) : '';
    $password = isset($_POST['password1']) ? trim($_POST['password1']) : '';
    //netoiyer les donnes
    $fName = htmlspecialchars($fName);
    $lName = htmlspecialchars($lName);
    $email = htmlspecialchars($email);
    $phone = htmlspecialchars($phone);
    $country = htmlspecialchars($country);
    $password = htmlspecialchars($password);
    //crypter le mot de pass
    $password = password_hash($_POST['password1'], PASSWORD_DEFAULT);
    // chercher le mail de membe dans la BDD
    try{
        //verificattion si le membre existe dans la BDD
        $sql = 'SELECT * FROM members WHERE email=? and id != ?';
        $params = array($email, $_SESSION['id']);
        $row = $mydb->getRows($sql, $params);
        if($row===1){
          echo '
          <script>
          function RemoveProduct() {
            if (confirm("email deja utilisé")) {
              document.location = "../connexion-user.php#demo-modal";
            } else {
              document.location = "../connexion-user.php#demo-modal";
            }
          }
          RemoveProduct();
          </script>
          ';
        }else if($row===0){
          $oldId = $_SESSION['id'];
          $params = array($fName, $lName, $email, $password, $phone, $country, $oldId);
          $data = $mydb->updateMember($params);
          echo '
          <script>
          function RemoveProduct() {
            if (confirm("Vos modefication a bien etais faites")) {
              document.location = "deconnexion.php";
            } else {
              document.location = "deconnexion.php";
            }
          }
          RemoveProduct();
          </script>
          ';
        }
    }catch(PDOException $err){
        echo $err->getMessage();
  }
    ?>