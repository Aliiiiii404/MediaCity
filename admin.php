<?php
session_start();
if (isset($_SESSION['id_admin']) && !empty($_SESSION['id_admin']) && $_SESSION['admin'] == 'Ok') {
  include_once('include/constants.inc.php');
  include_once('include/database.class.php');
  include_once("include/panier.include.php");
  $mydb = new dataBase(HOST, DATA, USER, PASS);
  //recuperer le tableux des membres 
  try {
    $sql = 'SELECT * FROM members';
    $sqlProduct = 'SELECT * FROM product ORDER BY id DESC';
    $sql2 = 'SELECT * FROM `members`';
    $sql3 = 'SELECT * FROM `product`';
    $sql4 = 'SELECT * FROM `product` where product_type = "film"';
    $sql5 = 'SELECT * FROM `product` where product_type = "musique"';
    $sql6 = 'SELECT * FROM `product` where product_type = "serie"';
    $dataSel = $mydb->getMembre($sql);
    $dataSelProduct = $mydb->getMembre($sqlProduct);
    $dataCount = $mydb->getRows($sql2);
    $countAll = $mydb->getRows($sql3);
    $countFilm = $mydb->getRows($sql4);
    $countMusic = $mydb->getRows($sql5);
    $countSerie = $mydb->getRows($sql6);
  } catch (PDOException $err) {
    echo $err->getMessage();
  }
?>
  <!DOCTYPE html>
  <html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/57bce97453.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style/style.css">
    <title>Administration</title>
  </head>

  <body>
      <!-- Header -->
      <?php include_once('include/header.include.php'); ?>
    <span class="space"></span>
    <!-- bar de recherche-->
    <?php include_once('include/search.include.php'); ?>
    <?php include_once('include/json.names.php'); ?>
    <h1 class="h1_hello_admin">Monsieur <?php echo ucwords($_SESSION['last_name_admin']); ?>, Bienvenu dans la page admin</h1>
    <section class="info">
      <div class="compte-info">
        <h1>Mon Compte : </h1>
        <h2>Nom : <?php
                  echo ucwords($_SESSION['first_name_admin']);
                  ?></h2>
        <h2>Prenom : <?php
                      echo ucwords($_SESSION['last_name_admin']);
                      ?></h2>
        <h2>Mail : <?php
                    echo $_SESSION['email_admin'];
                    ?></h2>
        <h2>Categorie : Admin</h2>
        <h2>Admin depuis le : <?php echo $_SESSION['admin_date_admin']; ?></h2>
        <input class="danger-form-btn" type="submit" value="    Decoonexion   " onclick="leave()">
        <span class="space"></span>
      </div>
    </section>
    <span class="space"></span>
    <h2>Tous les membres dans la base de données : </h2>
    <select class="col-md-4" id="sel_members" name="sel_members">
      <?php
        for ($i = 0; $i < $dataCount; $i++) {
          $html = "<option>";
          $html .= $dataSel[$i]['first_name'];
          $html .= "</option>";
          echo $html;
        }
      ?>
    </select>
    <span class="space"></span>
    <div id='res'>
    </div>
    <span class="space"></span>
    <div class="produits">
      <h2>Les produits </h2>
      <select class="col-md-4" id="sel_product" name="sel_product">
        <?php
          for ($i = 0; $i < $countAll; $i++) {
            $html = "<option>";
            $html .= $dataSelProduct[$i]['product_name'];
            $html .= "</option>";
            echo $html;
          }
        ?>
    </select>
    <span class="space"></span>
    <div id='res2'>
    </div>
    <div>
      <p>Nombres de tous les produits dans la base de données : <?php echo $countAll?></p>
      <p>Nombres de tous les produits type Film : <?php echo $countFilm ?></p>
      <p>Nombres de tous les produits type Musique : <?php echo $countMusic ?> </p>
      <p>Nombres de tous les produits type Serie : <?php echo $countSerie ?> </p>
    </div>
    <div class="wrapper">
    </div>
    <!-- formulaire pour ajouter un admin-->
    <div id="add-admin-form" class="modal">
      <div class="modal__content">
        <form action="assets/admin-add.php" method="POST" oninput='password1.setCustomValidity(password1.value != password1.value ? "Les mot de pass ne sont pas les memes" : "")'>
          <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" name="nom" id="" placeholder="Nom" pattern="[A-Za-z0-9\u00ff-\u00ff]{4,20}" required>
          </div>
          <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" name="prenom" id="" pattern="[A-Za-z0-9\u00ff-\u00ff]{3,20}" placeholder="Prenom" required>
          </div>
          <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" name="password1" id="password1" placeholder="Password" required>
          </div>
          <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" name="password2" id="password2" placeholder="confirmation de password" required>
          </div>
          <div class="textbox">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <input type="email" name="email" id="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Email" required>
          </div>
          <input type="submit" class="connexion-form-btn" value="Valider">
        </form>
        <a href="#" class="modal__close">&times;</a>
      </div>
    </div>
    <script>
      var password = document.getElementById("password1"),
        confirm_password = document.getElementById("password2");

      function validatePassword() {
        if (password.value != confirm_password.value) {
          confirm_password.setCustomValidity("Les Mot-De-Pass ne sont pas les memes");
        } else {
          confirm_password.setCustomValidity('');
        }
      }
      password.onchange = validatePassword;
      confirm_password.onkeyup = validatePassword;
    </script>
    <!-- formulaire pour supprimer un compte -->
    <div id="delet-form" class="modal">
      <div class="modal__content">
        <div class="textbox">
          <i class="fa fa-user" aria-hidden="true"></i>
          <input type="number" id="id-member" name="id" placeholder="ID" required>
        </div>
        <input type="submit" id="delete-member-btn" class="connexion-form-btn" value="Valider">
        <a href="#" class="modal__close">&times;</a>
      </div>
    </div>
    <!--formulaire pour ajouter un produits-->
    <div id="add-product-form" class="modal">
      <div class="modal__content">
        <form action="assets/product-add.php" method="POST">
          <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" name="product_name" id="" placeholder="Le nom de Produits" required>
          </div>
          <div class="textbox">
            <i class="fa fa-book" aria-hidden="true"></i>
            <select name="product_type" id="product_type" aria-placeholder="Type de Produis" required>
              <option value="">Type de produits</option>
              <option value="film">Film</option>
              <option value="musique">Musique</option>
              <option value="serie">Serie</option>
            </select>
          </div>
          <div class="textbox">
            <i class="fa fa-book" aria-hidden="true"></i>
            <select name="categorie" id="" aria-placeholder="Categorie" required>
              <option value="">Categorie</option>
              <option value="Action/Aventure">Action/Aventure</option>
              <option value="Comedie">Comedie</option>
              <option value="Anime">Anime</option>
              <option value="ROCK">Rock</option>
              <option value="POP">Pop</option>
              <option value="RAP">Rap</option>
            </select>
          </div>
          <div class="textbox">
            <i class="fa fa-file" aria-hidden="true"></i>
            <input type="file" name="image-product" accept="image/png, image/gif, image/jpeg, image/jpg" />
          </div>
          <div class="textbox">
            <i class="fa fa-money" aria-hidden="true"></i>
            <input type="number" name="prix" id="" placeholder="Prix" step="0.01" required>
          </div>
          <div class="textbox">
            <i class="fa fa-star" aria-hidden="true"></i>
            <input type="number" name="score" id="" placeholder="Score" step="0.01" required>
          </div>
          <input type="submit" class="connexion-form-btn" value="Valider">
        </form>
        <a href="#" class="modal__close">&times;</a>
      </div>
    </div>
    <!-- formulaire pour supprimer un produits -->
    <div id="delet-product-form" class="modal">
      <div class="modal__content">
        <div class="textbox">
          <i class="fa fa-user" aria-hidden="true"></i>
          <input type="number" id="id-product" name="id_product" placeholder="ID de produits" required>
        </div>
        <input type="submit" id="delete-product-btn" class="connexion-form-btn" value="Valider">
        <a href="#" class="modal__close">&times;</a>
      </div>
    </div>
    <span class="space"></span>
    </div>
    <div class="btns-acount">
      <input class="connexion-form-btn" type="submit" value="Ajouter un admin" onclick="window.location.href='#add-admin-form'">
      <input class="connexion-form-btn" type="submit" value="Supprimer un Compte" onclick="window.location.href='#delet-form'">
      <input class="connexion-form-btn" type="submit" value="Ajouter un Produits" onclick="window.location.href='#add-product-form'">
      <input class="connexion-form-btn" type="submit" value="Supprimer un produits" onclick="window.location.href='#delet-product-form'">
    </div>
    <span class="space"></span>
    <style>
      .connexion-form-btn {
        margin-left: 50px;
      }
    </style>
  <!-- FOOTER -->
  <?php include_once('include/footer.php'); ?>
  </body>
  <script src="./js/select.js"></script>
  <script src="js/autocomplete.js" defer></script>
  <script src="./js/leave.js"></script>
  <script src="./js/search.js"></script>
  </html>
<?php } else header('Location:connexion.php'); ?>