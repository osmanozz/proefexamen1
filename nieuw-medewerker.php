<?php


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once 'database.php';
    $db = new database();

    // USERNAME AND PASSWORD WORDEN GEHASHED 

    $username = hash("md5",$_POST['username']);
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

    $sql = "INSERT INTO medewerker VALUES (:id, :username, :password)";
    $placeholders = [
    'id'=> NULL,
    'username'=> $username,
    'password'=> $password,
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Nieuw medewerker toevoegen</title>
</head>
<body>
<div class="card text-center">
  <div class="card-header">
    <div class="card-body">
    <form method="POST">
    USERNAME : <input type="text" name="username" placeholder="USERNAME" required><br> <br>
    PASSWORD : <input type="password" name="password" placeholder="PASSWORD" required><br><br>
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