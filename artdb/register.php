<?php include 'connection.php'?>
<!DOCTYPE html>

<html lang="en">
    <chead>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="css/modern-business.css" rel="stylesheet">
    </head>
    <body>
        <?php include_once("navigation.php"); ?>
        <div class="container">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">Artist Registration:</div>
                <div class="card-body">
                    <form action="register.php" method="POST">
                        <div class="form-group">
                            <label>First name</label>
                            <input class="form-control" name="fname" type="text" placeholder="Enter first name">
                        </div>
                        <div class="form-group">
                            <label>Last name</label>
                            <input class="form-control" name="lname" type="text" placeholder="Enter last name">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" name="username" type="text" placeholder="Enter username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" name="pass" type="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>Born</label>
                            <input class="form-control" name="bd" type="date">
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <input class="form-control" name="loc" type="text" placeholder="City, State">
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Register</button>
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
if (isset($_POST[username])) {
    $result = queryMysql("SELECT * FROM USERS WHERE username='$_POST[username]'");
    if ($result->num_rows > 0) {
        echo "</br><div class='alert alert-primary' role='alert'>" .
        "<strong>This username is already taken.</strong> Try again!" .
        "<a href='register.php'>click here</a></div>";
        exit();
    }
    queryMysql("INSERT INTO USERS (username, pass, fname, lname) VALUES('$_POST[username]','$_POST[pass]', '$_POST[fname]', '$_POST[lname]')");
    queryMysql("INSERT INTO USERS_ROLES (rolelevel, username) VALUES('2','$_POST[username]')");
    queryMysql("INSERT INTO ARTISTS (fname, lname, born, location) VALUES('$_POST[fname]','$_POST[lname]', '$_POST[bd]', '$_POST[loc]')");
    exit();
    
}
?>