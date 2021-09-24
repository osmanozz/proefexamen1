<?php


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once 'database.php';
    $db = new database();

    $sql = "INSERT INTO amsterdam VALUES (:product_code, :naam, :inkoop_waarde, :verkoop_waarde, :voorraad_zoutermeer, 
    :voorraad_amsterdam, :voorraad_rotterdam)";
    $placeholder = [
    'product_code'=> NULL,
    'naam'=> $_POST['naam'],
    'inkoop_waarde'=> $_POST['inkoop'],
    'verkoop_waarde'=> $_POST['verkoop'],
    'voorraad_zoutermeer'=> $_POST['zouter'],
    'voorraad_amsterdam'=> $_POST['ams'],
    'voorraad_rotterdam'=> $_POST['rotter'],
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
        <input type="int" name="inkoop" placeholder="inkoop" required>
        <input type="int" name="verkoop" placeholder="verkoop" required>
        <input type="int" name="zouter" placeholder="zoutermeer">
        <input type="int" name="ams" placeholder="amsterdam" >
        <input type="int" name="rotter" placeholder="rotterdam">
        <input type="submit" value="Verzenden">
    </form>
</body>
</html>