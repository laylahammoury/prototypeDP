<?php
include "Stationery.php";
include "Pen.php";
session_start();
$pens = array();
if(isset($_SESSION['pens'])) {
    $result = array_merge( $_SESSION['pens'], $pens);
    $_SESSION['pens'] = $result;
}else{
    $_SESSION['pens'] = $pens;
}

if (isset ($_REQUEST['createPen']))
{
    $desc = $_REQUEST['desc'];
    $owner = $_REQUEST['owner'];
    $color = $_REQUEST['color'];
    $company = $_REQUEST['company'];
    $pen = new Pen($desc, $owner, new DateTime(), $color, $company );
    array_push($pens, $pen);
    $result = array_merge($_SESSION['pens'], $pens);
    $_SESSION['pens'] = $result;
}

if(isset($_GET['copyingPen']))
{
    $desc = $_GET['desc'];
    $owner = $_GET['owner'];
    $color = $_GET['color'];
    $company = $_GET['company'];
    $pen = new Pen($desc, $owner, new DateTime(), $color, $company );
    $temp = clone($pen);
    array_push($pens, $temp);
    $result = array_merge($_SESSION['pens'], $pens);
    $_SESSION['pens'] = $result;
}
?>

<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>Stationary</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body class="bg-info">
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#"> Stationary </a>
</nav>

<div class="container  p-2">
    <div class="clearfix">
        <div class="card col-md-5 float-left pt-2 bg-light">
            <div class="card-header bg-primary text-light">
                Your stationary
            </div>
            <div class="card-body ">
                <h5 class="card-title">These are the pens you have</h5>
                <?php
                $tempArr = array();
                $tempresult = array_merge( $_SESSION['pens'], $tempArr);
                foreach ($tempresult as  $pen ){
                    echo "<form action='' method='get'>
                                    <input type='hidden'  name='desc' value='$pen->description'>
                                    <input type='hidden'  name='owner' value='$pen->owner'>
                                    <input type='hidden' name='color' value='$pen->color'>
                                    <input type='hidden' name='company' value='$pen->companyName'>

                                    <div class=\"card border-info mb-3\" style=\"max-width: 18rem;\">
                                        <div class=\"card-header\">$pen->companyName</div>
                                        <div class=\"card-body text-info\">
                                        <h5 class=\"card-title\">$pen->description</h5>
                                        <p class=\"card-text\"> $pen->owner bought this  nice $pen->color pen. </p>";
                    echo "purchase date : ". $pen->getPurchaseDate()->format('Y-m-d');
                    echo " <button type=\"submit\" class=\"btn btn-primary mb-2 mt-4\" name='copyingPen'>Get another one</button>
                                        </div>
                                    </div>
                            </form>";
                }
                ?>
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
                    <input class="form-control" type="text" placeholder="Description" name="desc">
                    <br>
                    <input class="form-control" type="text" placeholder="Your name" name="owner">
                    <br>
                    <input class="form-control" type="text" placeholder="Color" name="color">
                    <br>
                    <input class="form-control" type="text" placeholder="Manufacturer company name" name="company">
                    <br>
                    <button type="submit" class="btn btn-primary mb-2" name="createPen">Add pen</button>
                </form>
            </div>
        </div>
    </div>
</div>
<footer class="page-footer font-small bg-dark pt-4">

    <div class="container-fluid text-center text-md-left">

        <div class="row">
            <div class="col-md-7 mt-md-0 mt-3">
                <h5 class=" text-light">Stationary organizer</h5>
                <p class="text-light"> In this organizer you can find manage your stationary easily</p>

            </div>
            <div class="col-md-3 mb-md-0 mb-3">
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
        </div>
    </div>
</footer>
</body>

</html>