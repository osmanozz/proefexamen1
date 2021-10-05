  
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit product</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        
            
        <?php

        function create_table($dataset, $from){
       
        if(is_array($dataset) && !empty($dataset)){ 
            // naam van de id kolom per table
            $key = $from."_id";
            ?>

            <table class="table table-striped">
            <caption style="caption-side:top"><h2>Overzicht Product</h2></caption>
            
            
            <?php 
            // haal de keys van de array op; dit zijn de kolomnamen
            $columns = array_keys($dataset[0]);
            ?>
            
            <tr>
                <?php foreach($columns as $column){ ?>
                    <th>
                        <h3>
                            <?php echo $column?>
                        </h3>
                    </th>
                <?php } ?>
                <th colspan="2"><h2>Action</h2></th>
            </tr>
                <?php foreach($dataset as $rows=>$row){ 
                    $row_id = $row[$key]; ?>
                    <tr>
                    <?php foreach($row as $rowdata){ ?>
                        
                        <td><?php echo $rowdata; ?></td>
                    <?php } ?>

                    <td>
                        <a href="edit-<?php echo $from?>.php?id=<?php echo $row_id; ?>" class="btn btn-secondary" >Edit</a>
                    </td>
                    
                    <td>
                        <a href="delete-<?php echo $from?>.php?id=<?php echo $row_id; ?>" class="btn btn-danger" >Delete</a>
                    </td>
                    </tr>
            <?php }
         }
    }?>
    </table>

    <br>
    
    </body>
    
</html>