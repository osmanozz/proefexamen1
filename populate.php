<?php

include "database.php";

$sql = "INSERT INTO medewerker VALUES (:id, :username, :password)";
$placeholder = [
    'id'=> NULL,
    'username'=> 'medewerker',
    'password'=> password_hash('medewerker', PASSWORD_DEFAULT)
]; 

$db = new database();
$db->insert($sql, $placeholder);

?> 