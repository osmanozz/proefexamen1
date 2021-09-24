<?php
include "database.php";
$db = new database();

if (isset($_GET['id'])) {

    $product_code = $_GET['id'];
    $sql = "DELETE FROM amsterdam WHERE productcode=:id";
    $placeholder = [
        'id'=> $product_code
    ];
    $db->delete($sql, $placeholder, "overzicht-amsterdam.php");
}



?>