<?php
function panier(){
    if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
        $html =  '<li><a href="panier.php"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>';
        return $html;
    }
}
function panierSummary(){
    if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
        $html = '<a class="nav--transition" href="panier.php"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>';
        return $html;
    }
}
?>