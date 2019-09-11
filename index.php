
<?php
include "Stationery.php";
include "Pen.php";
$redPen = new Pen("pointed pen 0.4", "Layla",
    new DateTime(),"red", "ADEL",
    false );


?>

<!DOCTYPE html>
<html lang = "en-us">

    <body>
        <h1>header 1</h1>
        <p><?php
            echo "The company name is :" . $redPen->getCompanyName() ?></p>
    <p>
       <?php echo "the color is " . $redPen->getColor();?>
       <?php echo "the owner is " . $redPen->getOwner();?>
    </p> <p>
       <?php
       echo"purchase date is :". $redPen->getPurchaseDate()->format('Y-m-d');
       ?>
    </p>
    </body>
