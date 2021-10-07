<?php


include "database.php";

// ER WORDT AUTOMATISCH EEN USER AANGEMAAKT IN DE DATABASE.
$sql = "INSERT INTO medewerker VALUES (:id, :username, :password)";
    $placeholder = [
        'id'=> NULL,
        'username'=> 'medewerker',
        'password'=> password_hash('medewerker', PASSWORD_DEFAULT),
    ]; 

            $db = new database();
                $db->insert($sql, $placeholder);

?> 