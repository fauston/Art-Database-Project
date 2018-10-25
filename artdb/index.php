<?php include 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/modern-business.css" rel="stylesheet">

    </head>

    <body>

        <?php
        include_once 'navigation.php';?>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('images/pic1.jpg')">
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('images/pic2.jpg')">
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('images/pic3.jpg')">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="container">
            <h1 class="my-4">Welcome to Reinvent Art</h1>
            <div class="row">
                <div class="col-lg-6">
                    <h2>Support Small Artists</h2>
                    <p>Features of our website:</p>
                    <ul>
                        <li>Learn about small artists</li>
                        <li>Collect art</li>
                        <li>Unique creations</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <?php
                    session_start();
                    if (!isset($_SESSION['user'])) {
                        ?>
                        <a href="register.php">Register Here!</a></h3></br>
                    <?php } ?>
                </div>
            </div>
            <hr>
        </div>
        <!-- /.container -->
    </body>
</html>