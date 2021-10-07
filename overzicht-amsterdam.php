<?php
require_once 'database.php';
    include 'table_generator.php';
        $db = new database();
            session_start();
?>

<div class="card-header">
    <div class="card-body">

<?php

// SELECT DE BEPAALDE KOLOMMEN VAN DE TABEL PRODUCT EN FILIAAL
$act = $db->select("SELECT product.product_id, product.product_naam, product.type, product.fabriek, 
product.waarde_inkoop, product.waarde_verkoop,
filiaal.filiaal_naam, filiaal.aantal_product
 FROM product
 INNER JOIN filiaal ON product.product_id = filiaal.product_id");

 

        // AMSTERDAM TOTALE INKOOP WAARDE BEREKENEN
        $totaalProductAms = $db->select("SELECT SUM(product.waarde_inkoop * filiaal.aantal_product) FROM product 
        INNER JOIN filiaal ON product.product_id = filiaal.product_id 
        WHERE filiaal_naam ='AMSTERDAM'");

        foreach ($totaalProductAms as $productAms) {
            foreach ($productAms as $das) {
                        echo "<strong>AMSTERDAM totaal inkoop waarde = </strong>";
                        echo "<strong>$das</strong>";
                        echo "<br>";
                    }
        }
            // AMSTERDAM TOTALE VERKOOP WAARDE BEREKENEN
            $totaalProductAms = $db->select("SELECT SUM(product.waarde_verkoop * filiaal.aantal_product) FROM product 
            INNER JOIN filiaal ON product.product_id = filiaal.product_id 
            WHERE filiaal_naam ='AMSTERDAM'");

            foreach ($totaalProductAms as $productAms) {
                foreach ($productAms as $das) {
                            echo "<strong>AMSTERDAM totaal verkoop waarde = </strong>";
                            echo "<strong>$das</strong>";
                            echo "<br>";
                        }
            }
    echo "<br>";
                            // ROTTERDAM TOTALE INKOOP WAARDE BEREKENEN
                            $totaalProductRot = $db->select("SELECT SUM(product.waarde_inkoop * filiaal.aantal_product) FROM product 
                            INNER JOIN filiaal ON product.product_id = filiaal.product_id 
                            WHERE filiaal_naam ='ROTTERDAM'");

                            foreach ($totaalProductRot as $productRot) {
                                foreach ($productRot as $dasRo) {
                                            echo "<strong>ROTTERDAM totaal inkoop waarde = </strong>";
                                            echo "<strong>$dasRo</strong>";
                                            echo "<br>";
                                        }
                            }
                                // ROTTERDAM TOTALE VERKOOP WAARDE BEREKENEN
                                $totaalProductRot = $db->select("SELECT SUM(product.waarde_verkoop * filiaal.aantal_product) FROM product 
                                INNER JOIN filiaal ON product.product_id = filiaal.product_id 
                                WHERE filiaal_naam ='ROTTERDAM'");


                                foreach ($totaalProductRot as $productRot) {
                                    foreach ($productRot as $dasRo) {
                                                echo "<strong>ROTTERDAM totaal verkoop waarde = </strong>";
                                                echo "<strong>$dasRo</strong>";
                                                echo "<br>";
                                            }
                                }
        echo "<br>";
                                            // ZOUTERMEER TOTALE INKOOP WAARDE BEREKENEN
                                            $totaalProductZou = $db->select("SELECT SUM(product.waarde_inkoop * filiaal.aantal_product) FROM product 
                                            INNER JOIN filiaal ON product.product_id = filiaal.product_id 
                                            WHERE filiaal_naam ='ZOUTERMEER'");

                                            $totaalProductRot = $db->select("SELECT SUM(product.waarde_inkoop * filiaal.aantal_product) FROM product 
                                            INNER JOIN filiaal ON product.product_id = filiaal.product_id 
                                            WHERE filiaal_naam ='ZOUTERMEER'");

                                            foreach ($totaalProductZou as $productZou) {
                                                foreach ($productZou as $dasZo) {
                                                            echo "<strong>ZOUTERMEER totaal inkoop waarde = </strong>";
                                                            echo "<strong>$dasZo</strong>";
                                                            echo "<br>";
                                                        }
                                            }
                                
                                                // ZOUTERMEER TOTALE VERKOOP WAARDE BEREKENEN
                                                $totaalProductZou = $db->select("SELECT SUM(product.waarde_verkoop * filiaal.aantal_product) FROM product 
                                                INNER JOIN filiaal ON product.product_id = filiaal.product_id 
                                                WHERE filiaal_naam ='ZOUTERMEER'");

                                                $totaalProductRot = $db->select("SELECT SUM(product.waarde_verkoop * filiaal.aantal_product) FROM product 
                                                INNER JOIN filiaal ON product.product_id = filiaal.product_id 
                                                WHERE filiaal_naam ='ZOUTERMEER'");

                                                            foreach ($totaalProductZou as $productZou) {
                                                                foreach ($productZou as $dasZo) {
                                                                            echo "<strong>ZOUTERMEER totaal verkoop waarde = </strong>";
                                                                            echo "<strong>$dasZo</strong>";
                                                                            echo "<br>";
                                                                        }
                                                            }
    echo "<br>";


        $geheleWaarde = $db->select("SELECT SUM(product.waarde_verkoop * filiaal.aantal_product) FROM product 
        INNER JOIN filiaal ON product.product_id = filiaal.product_id");

        foreach ($geheleWaarde as $heel) {
            foreach ($heel as $dase) {
                        echo "<strong>GEHELE totaal verkoop waarde = </strong>";
                        echo "<strong>$dase</strong>";
                        echo "<br>";
                    }
        }

                $geheleWaardeInkoop = $db->select("SELECT SUM(product.waarde_inkoop * filiaal.aantal_product) FROM product 
                INNER JOIN filiaal ON product.product_id = filiaal.product_id");

                foreach ($geheleWaardeInkoop as $hele) {
                    foreach ($hele as $dase) {
                                echo "<strong>GEHELE totaal inkoop waarde = </strong>";
                                echo "<strong>$dase</strong>";
                                echo "<br>";
                            }
                }

?>

</div>
    </div>

<?php

create_table($act, 'filiaal');


 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 ?>

<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
</html>

    
    <a class="btn btn-secondary" href="nieuw-product.php">Nieuw product toevoegen</a>
        <br>
            <br>
                <a class="btn btn-danger" href="product-overzicht.php">Producten Overzicht</a>
                    <br>
                        <br>
                            <a class="btn btn-success" href="nieuw-product-filiaal.php">Nieuw product aan de filiaal toevoegen</a>


<div class="image">
    <a class="btn btn-secondary" href="nieuw-medewerker.php">Nieuw medewerker toevoegen</a>
        <img src="logo.png"> <br>
            <?PHP echo "Welkom: " . $_SESSION['username'];?>
                <a class="btn btn-danger" href="login.php">Log uit</a> <br>
</div>