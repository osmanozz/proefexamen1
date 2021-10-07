<?php

require_once 'database.php';
    include 'table_generator_product_overzicht.php';
        $db = new database();
            session_start();


$act = $db->select("SELECT * from product");

    create_table($act, 'product');

?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <a class="btn btn-success" href="nieuw-product.php">Nieuw product toevoegen</a>
            <br>
                <br>
                    <a class="btn btn-secondary" href="nieuw-product-filiaal.php">Nieuw product aan de filiaal toevoegen</a>

<div class="image">
    <?PHP echo "INGELOGD: " . $_SESSION['username'];?>
        <a class="btn btn-primary" href="login.php">Log uit</a>
            <img src="logo.png">
                <a class="btn btn-primary" href="overzicht-amsterdam.php">Ga Naar Voorraad Overzicht </a>
        
</div>
<br><br><br><br><br><br>