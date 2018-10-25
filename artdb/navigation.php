<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/modern-business.css" rel="stylesheet">
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">Reinvent Art</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Browse
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                                <a class="dropdown-item" href="artwork.php">Artwork</a>
                                <a class="dropdown-item" href="portfolio-2-col.html">Categories</a>
                                <a class="dropdown-item" href="browseartists.php">Artists</a>
                            </div>
                        </li>
                        <?php
                        session_start();
                        if (!isset($_SESSION[user])) {
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                        <?php } ?>

                        <?php
                        session_start();
                        if (isset($_SESSION[user])) {
                            ?>
                            <li class="nav-item">
                                <a class="nav-link">Welcome, <?php echo $_SESSION["user"] ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="cart.php">Cart</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="account.php">Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="addartwork.php">Sell Art</a>
                            </li> 
                        <?php } ?>
                    </ul>
                </div>

            </div>
        </nav>

        <?php include 'script.php'; ?>  
    </body>
</html>  