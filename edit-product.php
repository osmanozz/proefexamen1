    
    <?php
    include_once "database.php";
    $db = new database();
   
  
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            // $product_code = $_POST['product_code'];
            // $naam = $_POST['naam'];
            // $inkoop_waarde = $_POST['inkoop_waarde'];
            // $verkoop_waarde = $_POST['verkoop_waarde'];
            // $voorraad_zoutermeer = $_POST['voorraad_zoutermeer'];
            // $voorraad_amsterdam = $_POST['voorraad_amsterdam'];
            // $voorraad_rotterdam = $_POST['voorraad_rotterdam'];
        
           
            $sql = "UPDATE amsterdam SET naam=:naam,inkoop_waarde=:inkoop_waarde,
            verkoop_waarde=:verkoop_waarde,voorraad_zoutermeer=:voorraad_zoutermeer,
            voorraad_amsterdam=:voorraad_amsterdam,vorraad_rotterdam=:voorraad_rotterdam
            WHERE productcode=:productcode";

            $placeholders = [
                'productcode' => $_POST['productcode'],
                'naam' => $_POST['naam'],
                'inkoop_waarde'=> $_POST['inkoop_waarde'],
                'verkoop_waarde' => $_POST['verkoop_waarde'],
                'voorraad_zoutermeer' => $_POST['voorraad_zoutermeer'],
                'voorraad_amsterdam'=> $_POST['voorraad_amsterdam'],
                'voorraad_rotterdam'=> $_POST['voorraad_rotterdam'],
            ];
            $db->edit($sql,$placeholders, "overzicht-amsterdam.php");
        }
        ?>

<form method="POST">         
        <input type="hidden" name="productcode" value="<?php echo $_GET['id'] ?>">
        <input type="text" name="naam" placeholder="Naam" required>
        <input type="int" name="inkoop_waarde" placeholder="inkoop waarde" required>
        <input type="int" name="verkoop_waarde" placeholder="verkoop waarde" required>
        <input type="int" name="voorraad_zoutermeer" placeholder="voorraad Zoutermeer" required>
        <input type="int" name="voorraad_amsterdam" placeholder='voorraad Amsterdam' required>
        <input type="int" name="voorraad_rotterdam" placeholder='voorraad Rotterdam' required>
        <input type="submit" name="submit" value="Wijzig">
</form>