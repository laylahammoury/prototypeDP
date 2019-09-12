
<?php
include "Stationery.php";
include "Pen.php";
$redPen = new Pen("pointed pen 0.4", "Layla",
    new DateTime(),"red", "ADEL",
    false );
$copyOfRedPen =  clone $redPen;

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


    </body>
    <!-- Footer -->
    <footer class="page-footer font-small bg-dark pt-4">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-7 mt-md-0 mt-3">

                    <!-- Content -->
                    <h5 class="text-uppercase text-light">Footer Content</h5>
                    <p class="text-light"> Here you can use rows and columns to organize your footer content.</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase text-light">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->


            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
        </div>
    </footer>
    <!-- Footer -->
</html>
