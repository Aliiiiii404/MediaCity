<?php
session_start();
//importer les info BDD
include_once('../include/constants.inc.php');
include_once('../include/database.class.php');
$mydb = new dataBase(HOST, DATA, USER, PASS);

$choix = $_GET['sel_members'];
if(isset($choix)){
    try{
        $sql = 'SELECT * FROM members WHERE first_name=?';
        $params = array($choix);
        $data = $mydb->getMembre($sql, $params);
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
    <th>Prenom</th>
    <th>Nom</th>
    <th>Mail</th>
    <th>Telephone</th>
    <th>Pays</th>
    <th>Categorie</th>
    </tr></thead>';

    $html .= "<tbody><tr><td>";
    $html .= $data['id'];
    $html .= "</td>";

    $html .= "<td>";
    $html .= ucwords($data['first_name']);
    $html .= "</td>";
    
    $html .= "<td>";
    $html .= ucwords($data['last_name']);
    $html .= "</td>";

    $html .= "<td>";
    $html .= $data['email'];
    $html .= "</td>";
    
    $html .= "<td>";
    $html .= $data['phone'];
    $html .= "</td>";
    
    $html .= "<td>";
    $html .= $data['country'];
    $html .= "</td>";

    $html .= "<td>";
    $html .= $data['community'];
    $html .= "</td></tr></tbody>";
    $html .= '</table>';
    echo $html;
}