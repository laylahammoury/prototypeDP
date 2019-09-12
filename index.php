
<?php

use function Sodium\add;

include "Stationery.php";
include "Pen.php";

$pens = array();

$redPen = new Pen("pointed pen 0.4", "Layla",
    new DateTime(),"red", "ADEL");
$copyOfRedPen =  clone $redPen;

array_push($pens, $redPen , $copyOfRedPen);
if (isset ($_REQUEST['createPen']))
{
    $desc = $_REQUEST['desc'];
    $owner = $_REQUEST['owner'];
    $color = $_REQUEST['color'];
    $company = $_REQUEST['company'];
    $pen = new Pen($desc, $owner, new DateTime(), $color, $company );
    array_push($pens, $pen);

}
if(isset($_REQUEST['copyPen']))
{
    $copyOfPen =  clone $_REQUEST['pen'];
    array_push($pens, $copyOfPen);

}


?>
<!--
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
-->
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Stationary</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    </head>
    <body class="bg-info">
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#"> Stationary </a>
        </nav>


<div class="container  p-2">
    <div class ="clearfix">
        <div class="card col-md-5 float-left pt-2 bg-light">
            <div class="card-header bg-primary text-light">
                Your stationary
            </div>
            <div class="card-body ">
                <h5 class="card-title">These are the pens you have</h5>
                <?php

               // echo sizeof($pens);
               foreach ($pens as $pen ){
                   echo "<div class=\"card border-info mb-3\" style=\"max-width: 18rem;\">
          <div class=\"card-header\">$pen->companyName</div>
          <div class=\"card-body text-info\">
            <h5 class=\"card-title\">$pen->description</h5>
           <p class=\"card-text\"> $pen->owner bought this  nice $pen->color pen  in '    '         </p>
           <button type=\"submit\" class=\"btn btn-primary mb-2\" name=\"copyPen\">Get another one</button>
          </div>
        </div>";
               }


                ?>
<!--                <a href="#" class="btn btn-primary">Add</a>-->
            </div>
        </div>
            <div class="card col-md-5 float-right pt-2 bg-light">
                <div class="card-header bg-primary text-light">
                    Add Pen
                </div>
                <div class="card-body">
                    <h5 class="card-title">Add a pen to stationary</h5>
                    <p class="card-text">In order to add the pen ypu have to your stationary enter the following information .</p>
                    <form action="">

                        <input class="form-control" type="text" placeholder="Description" name="desc"><br>
                        <input class="form-control" type="text" placeholder="Your name" name="owner"><br>
                        <input class="form-control" type="text" placeholder="Color" name="color"><br>
                        <input class="form-control" type="text" placeholder="Manufacturer company name" name="company"><br>
                        <button type="submit" class="btn btn-primary mb-2" name="createPen">Add pen</button>

                    </form>

                </div>
            </div>

    </div>
    </body>
    <!-- Footer -->
    <footer class="page-footer font-small bg-dark pt-4">

        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-7 mt-md-0 mt-3">

                    <!-- Content -->
                    <h5 class=" text-light">Stationary organizer</h5>
                    <p class="text-light"> In this organizer you can find manage your stationary easily</p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class=" text-light">Share</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">facebook</a>
                        </li>
                        <li>
                            <a href="#!">twitter</a>
                        </li>
                        <li>
                            <a href="#!">pinterest</a>
                        </li>

                    </ul>

                </div>
                <!-- Grid column -->
        </div>
        <!-- Grid row -->
        </div>
    </footer>
    <!-- Footer -->
</html>
