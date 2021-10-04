<?php
include "database.php";
$db = new database();

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $sql = "DELETE FROM product WHERE product_id=:product_id";
    $placeholder = [
        'product_id'=> $id
    ];
    $db->delete($sql, $placeholder, "product-overzicht.php");
}
?>
