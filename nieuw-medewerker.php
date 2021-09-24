<?php


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once 'database.php';
    $db = new database();

    $hashedpassword = md5($_POST['password']);
    $hashedusername = md5($_POST['username']);
    $sql = "INSERT INTO medewerker VALUES (:id, :naam, :username, :password)";
    $placeholder = [
    'id'=> NULL,
    'naam'=> $_POST['naam'],
    'username'=> $hashedusername,
    'password'=> $hashedpassword
];
$db->insert($sql, $placeholder, "overzicht-amsterdam.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuw medewerker toevoegen</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="naam" placeholder="Naam Optional">
        <input type="text" name="username" placeholder="Username" required>
        <input type="text" name="password" placeholder="Password" required>
        <input type="submit" value="Verzenden">
    </form>
</body>
</html>