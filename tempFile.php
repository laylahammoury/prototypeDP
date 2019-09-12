

<?php

use function Sodium\add;

include "Stationery.php";
include "Pen.php";

$pens =  array();

$redPen = new Pen("pointed pen 0.4", "Layla",
    new DateTime(),"red", "ADEL");
$copyOfRedPen =  clone $redPen;
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
    <?php echo $redPen->getDescription();?>
</p> <p>
    <?php
    echo"purchase date is :". $redPen->getPurchaseDate()->format('Y-m-d');
    ?>
</p>

<br><br><br>
<p><?php
    echo "The company name is :" . $copyOfRedPen->getCompanyName() ?></p>
<p>
    <?php echo "the color is " . $copyOfRedPen->getColor();
    echo "the owner is " . $copyOfRedPen->getOwner();
    echo  $copyOfRedPen->getDescription();?>

</p> <p>
    <?php
    echo"purchase date is :". $copyOfRedPen->getPurchaseDate()->format('Y-m-d');
    ?>
</p>
</body>
