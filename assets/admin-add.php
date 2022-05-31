<?php 
    session_start();
    include_once('../include/constants.inc.php');
    include_once('../include/database.class.php');
    $mydb = new dataBase(HOST, DATA, USER, PASS);

    $fName = isset($_POST['nom']) ? $_POST['nom'] : '';
    $lName = isset($_POST['prenom']) ? trim($_POST['prenom']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password1']) ? trim($_POST['password1']) : '';
    //netoiyer les donnes
    $fName = htmlspecialchars($fName);
    $lName = htmlspecialchars($lName);
    $email = htmlspecialchars($email);
    $password = htmlspecialchars($password);
    //crypter le mot de pass
    $password = sha1(md5($email) . md5($password));
    try{
        //verificattion si le membre existe dans la BDD
        $sql = 'SELECT * FROM admins WHERE email=?';
        $params = array($email);
        $row = $mydb->getRows($sql, $params);
        if($row===1){
          echo '
          <script>
          function already() {
            if (confirm("email deja utilisé")) {
              document.location = "../admin.php";
            } else {
              document.location = "../admin.php";
            }
          }
          already();
          </script>
          ';
        }else if($row===0){
          $params = array($fName, $lName, $email, $password);
          $data = $mydb->creatAdmin($params);
          echo '
          <script>
          function cBon() {
            if (confirm("Le ajoute a bien etais fait")) {
                document.location = "../admin.php";
              }else{
                document.location = "../admin.php";
              }
          }
          cBon();
          </script>
          ';
        }
    }catch(PDOException $err){
        echo $err->getMessage();
  }
    ?>