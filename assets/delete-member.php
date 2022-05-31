<?php
//importer les info BDD
include_once('../include/constants.inc.php');
include_once('../include/database.class.php');
$mydb = new dataBase(HOST, DATA, USER, PASS);

session_start();
$id_member = $_GET['id'];
if(isset($id_member)){
    $sql = 'SELECT * FROM members WHERE id=?';
    $params = array($id_member);
    $data = $mydb->getMembre($sql, $params);
    $row = $mydb->getRows($sql, $params);

    if($row===1){
        try{
            $sql = 'DELETE FROM members WHERE email = ?';
            $params = array($id_member);
            $data = $mydb->deleteMember($sql, $params);

        }catch(PDOException $err){
            echo $err->getMessage();
        }
    }else if($row===0){
        echo '
        <script>
        alert("cet utilisateurs nexsiste pas dans la base de donnes");
        </script>
        ';
    }
}else{
    echo '<div class="alert alert-danger" role="alert">
    la supprission a rencontrer une erreur!!
  </div>';
}