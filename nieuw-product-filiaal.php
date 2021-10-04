<?php


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once 'database.php';
    $db = new database();

    $sql = "INSERT INTO filiaal VALUES (:filiaal_id, :filiaal_naam, :product_id, :aantal_product)";
    $placeholders = [
    'filiaal_id'=> NULL,
    'filiaal_naam'=> $_POST['naam'],
    'product_id'=> $_POST['product_id'],
    'aantal_product'=> $_POST['aantal']
];
$db->insert($sql, $placeholders, "overzicht-amsterdam.php");
if($db) {
    header("Location:overzicht-amsterdam.php");
}
}



require_once 'database.php';
include 'table_generator_product_overzicht.php';
$db = new database();
session_start();


$act = $db->select("SELECT * from product");

create_table($act, 'product');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuw product aan een filiaal toevoegen</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="naam" placeholder="FILIAAL NAAM" required> <br> <br>
        <input type="int" name="product_id" placeholder="PRODUCT ID" required> <br><br>
        <input type="int" name="aantal" placeholder="PRODUCT AANTAL" required> <br><br>
        <input type="submit" value="Toevogen">

    </form>
    <br>
    <br>
    <br>
</body>
</html>