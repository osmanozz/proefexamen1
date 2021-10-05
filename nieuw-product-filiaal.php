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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Nieuw product aan een filiaal toevoegen</title>
</head>
<body>

<div class="card text-center">
  <div class="card-header">
    <div class="card-body">
    <h2 class="text-muted">PRODUCT TOEVOEGEN</h2>
</div>
    <form method="POST">
        <input type="text" name="naam" placeholder="FILIAAL NAAM" required> <br> <br>
        <input type="int" name="product_id" placeholder="PRODUCT ID" required><br><br>
        <input type="int" name="aantal" placeholder="PRODUCT AANTAL" required> <br><br>
        <input type="submit" value="Toevogen">
    </form>
    </div>
    </div>
  </div>
    <br>
    <br>
    <br>
</body>
</html>