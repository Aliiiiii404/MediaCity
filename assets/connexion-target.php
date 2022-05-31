<?php 
    session_start();
    include_once('../include/constants.inc.php');
    include_once('../include/database.class.php');
    $mydb = new dataBase(HOST, DATA, USER, PASS);
    
    if(isset($_POST['email']) && isset($_POST['password'])){
      $email = htmlspecialchars($_POST['email']);
      $password = htmlspecialchars($_POST['password']);
      // chercher le mail de membe dans la BDD
      // getUser et getRows pour membre 
      $sql = 'SELECT * FROM members WHERE email=?';
      $params = array($email);
      $data = $mydb->getMembre($sql, $params);
      $row = $mydb->getRows($sql, $params);
      // chercher le mail d'admin dans la BDD
      // getUser et getRows pour admin 
      $sql2 = 'SELECT * FROM admins WHERE email=?';
      $data2 = $mydb->getMembre($sql2, $params);
      $row2 = $mydb->getRows($sql2, $params);
      //member verif
      if($row === 1){
        if(password_verify($password, $data[0]['password'])){
          $_SESSION['id'] = $data[0]['id'];
          $_SESSION['first_name'] = $data[0]['first_name'];
          $_SESSION['last_name'] = $data[0]['last_name'];
          $_SESSION['email'] = $data[0]['email'];
          $_SESSION['phone'] = $data[0]['phone'];
          $_SESSION['country'] = $data[0]['country'];
          $_SESSION['community'] = $data[0]['community'];
          $_SESSION['subscribe_date'] = $data[0]['subscribe_date'];
          if (isset($_SESSION['admin'])) {
            unset($_SESSION['admin']);
          }
          header('Location:../connexion-user.php');
        }else{
            echo '
            <script>
            function user() {
                document.location = "../connexion.php?error=1";
            }
            user();
            </script>';
          }
      // admin verif
      }else if($row2 === 1){
        $password2 = sha1(md5($email) . md5($password));
        if($data2[0]['password'] === $password2){
          $_SESSION['id_admin'] = $data2[0]['id'];
          $_SESSION['first_name_admin'] = $data2[0]['first_name'];
          $_SESSION['last_name_admin'] = $data2[0]['last_name'];
          $_SESSION['email_admin'] = $data2[0]['email'];
          $_SESSION['admin_date_admin'] = $data2[0]['admin_date'];
          $_SESSION['admin'] = 'Ok';
          header('Location:../admin.php');
        }else{
          echo '
          <script>
          function user() {
            document.location = "../connexion.php?error=1";
          }
          user();
          </script>';
        }
      }else{
        echo '
        <script>
        function user() {
          document.location = "../connexion.php?error=1";
        }
        user();
        </script>';
      }
    }else{
      header("Location:../connexion.php?error=1");
    }
?>