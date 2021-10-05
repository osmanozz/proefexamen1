<?php


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once 'database.php';
    $db = new database();

    $sql = "INSERT INTO product VALUES (:product_id, :product_naam, :type, :fabriek, :waarde_inkoop, :waarde_verkoop)"; 
    $placeholder = [
    'product_id'=> NULL,
    'product_naam'=> $_POST['naam'],
    'type' => $_POST['type'],
    'fabriek'=> $_POST['fabriek'],
    'waarde_inkoop'=> $_POST['inkoop'],
    'waarde_verkoop'=> $_POST['verkoop']
];
$db->insert($sql, $placeholder, "overzicht-amsterdam.php");

if($db) {
    header("Location:overzicht-amsterdam.php");
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Nieuw product toevoegen</title>
</head>
<body>
<div class="card text-center">
  <div class="card-header">
    <div class="card-body">
    <h2 class="text-muted">NIEUW PRODUCT</h2>
</div>
    <form method="POST">
       NAAM : <input type="text" name="naam" placeholder="naam" required> <br><br>
       TYPE : <input type="text" name="type" placeholder="type" required><br><br>
       FABRIEK : <input type="text" name="fabriek" placeholder="fabriek"required><br><br>
       INKOOP WAARDE : <input type="int" name="inkoop" placeholder="inkoop" required><br><br>
       VERKOOP WAARDE : <input type="int" name="verkoop" placeholder="verkoop" required><br><br>
        <input class="btn btn-primary" type="submit" value="Toevoegen">
    </form>
    <br>
    <br>
    <a class="btn btn-danger" href="product-overzicht.php">Terug</a>
    </div>
    </div>
  </div>
</body>
</html>