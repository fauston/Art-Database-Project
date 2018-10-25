<?php include 'connection.php'?>
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
        <?php include_once("navigation.php"); ?>
        <div class="container">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" name="username" type="text" placeholder="Enter username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" name="password" type="password" placeholder="Password">
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="admin/vendor/jquery/jquery.min.js"></script>
        <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    </body>
</html>

<?php
if (isset($_POST[username]) && isset($_POST[password])) {
    $result = queryMysql("SELECT username, pass FROM USERS WHERE username='$_POST[username]' AND pass='$_POST[password]'");
    if ($result->num_rows == 0) {
        echo 'Incorrect username or password. Try again! <a href="index.php">Click Here</a>';
        exit();
    } else {
        echo 'You are logged in. Click <a href="index.php">here</a> to continue';
        $_SESSION[user] = $_POST[username];
        $_SESSION[password] = $_POST[password];
        queryMysql("INSERT INTO CART(totalqty, totalprice) VALUES (0, 0)");
        exit();
    }
}
?>