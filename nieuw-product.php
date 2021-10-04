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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuw product toevoegen</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="naam" placeholder="naam" required>
        <input type="text" name="type" placeholder="type" required>
        <input type="text" name="fabriek" placeholder="fabriek"required>
        <input type="int" name="inkoop" placeholder="inkoop" required>
        <input type="int" name="verkoop" placeholder="verkoop" required>
        <input type="submit" value="Verzenden">
    </form>
</body>
</html>