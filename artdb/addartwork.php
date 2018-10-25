<?php require 'connection.php'; ?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="css/modern-business.css" rel="stylesheet">

    </head>

    <body>
        <?php include 'navigation.php'; ?>
        <!-- Page Content -->
        <div class="container">

            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3">Add New Art</h1>

            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active">Add New Art</li>
            </ol>

            <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <form action="addartwork.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            Image:
                            <div class="custom-file">
                                <input type="file" name="artwork" class="custom-file-input">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                            </br>
                            Title: <input type="text" name="title" class="form-control"></br>
                            Description: <input type="text" name="description" class="form-control"></br>
                            Price: <input type="text" name="price" class="form-control"></br>
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </body>

</html>

<?php
$image = $_FILES['artwork']['tmp_name'];
$imgContent = addslashes(file_get_contents($image));
if (isset($_POST[title])) {
    $sql = "INSERT INTO ARTWORK (artworkID, title, image, description, price) VALUES (NULL,'$_POST[title]', '$imgContent', '$_POST[description]', '$_POST[price]')";
    queryMysql($sql);
}
?>

