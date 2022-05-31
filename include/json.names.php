<?php
  include_once('constants.inc.php');
  include_once('database.class.php');
  $mydb = new dataBase(HOST, DATA, USER, PASS);

  $sql = "SELECT product_name from product";
  $dataJson = $mydb->getProduct($sql);
  ?>
  <p id="json-data">
      <?php  echo json_encode($dataJson);  ?>
  </p>