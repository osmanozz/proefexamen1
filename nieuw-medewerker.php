<?php


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once 'database.php';
    $db = new database();

    $sql = "INSERT INTO medewerker VALUES (:id, :username, :password)";
    $placeholders = [
    'id'=> NULL,
    'username'=> $_POST['username'],
    'password'=> password_hash($_POST['password'],PASSWORD_DEFAULT),
];
$db->insert($sql, $placeholders, "overzicht-amsterdam.php");
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
    <title>Nieuw medewerker toevoegen</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="username" placeholder="USERNAME" required> <br> <br>
        <input type="password" name="password" placeholder="PASSWORD" required> <br><br>
        <input type="submit" value="Toevogen">

    </form>
    <br>
    <br>
    <br>
</body>
</html>