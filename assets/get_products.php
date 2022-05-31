<?php
session_start();
//importer les info BDD
include_once('../include/constants.inc.php');
include_once('../include/database.class.php');
$mydb = new dataBase(HOST, DATA, USER, PASS);
$choix = $_GET['sel_product'];
if(isset($choix)){
    try{
        $sql = 'SELECT * FROM product WHERE product_name=?';
        $params = array($choix);
        $data = $mydb->getProduct($sql, $params);
        htmlTable($data[0]);
    }catch(PDOException $err){
        echo $err->getMessage();
    }
}else{
    echo '<div class="alert alert-danger" role="alert">
    Aucune donnes a afficher !!!
  </div>';
}
function htmlTable($data){
    $html = "<table class='member-table'>";
    $html .= '<thead><tr>
    <th>ID</th>
    <th>Type</th>
    <th>Nom de produits</th>
    <th>Category</th>
    <th>Image</th>
    <th>Score</th>
    <th>Prix</th>
    </tr></thead>';
    $html .= "<tbody><tr><td>";
    $html .= $data['id'];
    $html .= "</td>";
    $html .= "<td>";
    $html .= ucwords($data['product_type']);
    $html .= "</td>";
    $html .= "<td>";
    $html .= ucwords($data['product_name']);
    $html .= "</td>";
    $html .= "<td>";
    $html .= $data['category'];
    $html .= "</td>";
    $html .= "<td><img class=\"img-table\" src=\"img-site-groupe/";
    $html .= $data['image'];
    $html .= "\"alt=\"film\"></td>";
    $html .= "<td class='score-table'>";
    $html .= $data['score'];
    $html .= "</td>";
    $html .= "<td>";
    $html .= $data['price'];
    $html .= "</td></tr></tbody>";
    $html .= '</table><br/>';
    echo $html;
}