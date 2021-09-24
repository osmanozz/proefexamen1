<?php

include "database.php";

$sql = "INSERT INTO medewerker VALUES (:id, :naam, :username, :password)";
$placeholder = [
    'id'=> NULL,
    'naam'=> NULL,
    'username'=> 'medewerker',
    'password'=> password_hash('medewerker', PASSWORD_DEFAULT)
]; 

$db = new database();
$db->insert($sql, $placeholder);

?> 