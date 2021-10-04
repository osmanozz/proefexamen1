<?php
include "database.php";
$db = new database();

if (isset($_GET['filiaal_naam'])) {

    $filiaal_naam = $_GET['filiaal_naam'];
    $sql = "DELETE FROM filiaal WHERE filiaal_naam=:filiaal_naam";
    $placeholder = [
        'filiaal_naam'=> $filiaal_naam
    ];
    $db->delete($sql, $placeholder, "overzicht-amsterdam.php");
}
?>
