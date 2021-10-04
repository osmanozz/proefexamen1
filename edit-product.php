
    <?php
    include_once "database.php";
    $db = new database();
   
        
  
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $product_id = $_POST['product_id'];
            $product_naam = $_POST['product_naam'];
            $type = $_POST['type'];
            $fabriek = $_POST['fabriek'];
            $waarde_inkoop= $_POST['waarde_inkoop'];
            $waarde_verkoop = $_POST['waarde_verkoop'];
           
            $sql = "UPDATE product SET naam=:naam,type=:type,
            fabriek=:fabriek,waarde_inkoop=:waarde_inkoop,
            waarde_verkoop=:waarde_verkoop
            WHERE product_id=:product_id";

            $placeholders = [
                'product_id' => $product_id,
                'product_naam' => $product_naam,
                'type'=> $type,
                'fabriek' => $fabriek,
                'waarde_inkoop' => $waarde_inkoop,
                'waarde_verkoop'=>$waarde_verkoop
            ];
            $db->edit($sql,$placeholders, "product-overzicht.php");
        }
        ?>

<form method="POST">         
        <input type="hidden" name="product_id" value="<?php echo $_GET['id'] ?>">
        <input type="text" name="product_naam" placeholder="naam" required>
        <input type="text" name="type" placeholder="type" required>
        <input type="text" name="fabriek" placeholder="fabriek" required>
        <input type="text" name="waarde_inkoop" placeholder="waarde_inkoop" required>
        <input type="text" name="waarde_verkoop" placeholder='waarde_verkoop' required>
        <input type="submit" name="submit" value="Wijzig">
</form>