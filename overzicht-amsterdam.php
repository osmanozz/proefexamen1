<?php

require_once 'database.php';
include 'table_generator.php';
$db = new database();
session_start();


$act = $db->select("SELECT * FROM amsterdam ");

    $prijs = $db->select("SELECT sum(voorraad_amsterdam * inkoop_waarde) AS totaal FROM amsterdam");
    $prijs2 = $db->select("SELECT sum(voorraad_rotterdam * inkoop_waarde) AS totaal2 FROM amsterdam");
    $prijs3 = $db->select("SELECT sum(voorraad_zoutermeer * inkoop_waarde) AS totaal3 FROM amsterdam");

        $prijs4 = $db->select("SELECT sum(voorraad_amsterdam * verkoop_waarde) AS totaal4 FROM amsterdam");
        $prijs5 = $db->select("SELECT sum(voorraad_rotterdam * verkoop_waarde) AS totaal5 FROM amsterdam");
        $prijs6 = $db->select("SELECT sum(voorraad_zoutermeer * verkoop_waarde) AS totaal6 FROM amsterdam");

create_table($act, 'product');

// INKOOP
$columns = array_keys($prijs[0]);
$data = array_values($prijs);

    $columns2 = array_keys($prijs2[0]);
    $data2 = array_values($prijs2);

        $columns3 = array_keys($prijs3[0]);
        $data3 = array_values($prijs3);
?>

    <div class="containerinkoop"> 
        
<?php
foreach ($data as $datas) {
    foreach ($datas as $das) {
        echo "<strong>Amsterdam totaal inkoop waarde = </strong>";
        echo "<strong>$das</strong>";
        echo "<br>";
    }
}
    foreach ($data2 as $datas2) {
        foreach ($datas2 as $das2) {
            echo "<strong>Rotterdam totaal inkoop waarde= </strong>";
            echo "<strong>$das2</strong>";
            echo "<br>";
        }
    }
        foreach ($data3 as $datas3) {
            foreach ($datas3 as $das3) {
                echo "<strong> Zoetermeer totaal inkoop waarde= </strong>";
                echo "<strong>$das3</strong>";
                echo "<br>";
            }
        }

echo "<br>";
echo "<br>";
?>
</div>

<div class="containerverkoop"> 

<?php
// VERKOOP
$columns4 = array_keys($prijs4[0]);
$data4 = array_values($prijs4);

    $columns5 = array_keys($prijs5[0]);
    $data5 = array_values($prijs5);

        $columns6 = array_keys($prijs6[0]);
        $data6 = array_values($prijs6);


foreach ($data4 as $datas4) {
    foreach ($datas4 as $das4) {
        echo "<strong>Amsterdam totaal verkoop waarde = </strong>";
        echo "<strong>$das4</strong>";
        echo "<br>";
    }
}
foreach ($data5 as $datas5) {
    foreach ($datas5 as $das5) {
        echo "<strong>Rotterdam totaal verkoop waarde= </strong>";
        echo "<strong>$das5</strong>";
        echo "<br>";
    }
}
foreach ($data6 as $datas6) {
    foreach ($datas6 as $das6) {
        echo "<strong> Zoetermeer totaal verkoop waarde= </strong>";
        echo "<strong>$das6</strong>";
        echo "<br>";
    }
}
echo "<br>";

?>
</div>



<link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <a class="btn btn-primary" href="nieuw-product.php">Nieuw product toevoegen</a>
        <br>
        <br>
        <a class="btn btn-primary" href="nieuw-medewerker.php">Nieuw medewerker toevoegen</a>

<div class="image">
    <?PHP echo "INGELOGD: " . $_SESSION['username'];?>
    <a class="btn btn-primary" href="login.php">Log uit</a>
        <img src="logo.png">
</div>