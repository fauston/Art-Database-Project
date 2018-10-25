<?php include 'connection.php'; ?>
<?php
$sql = "SELECT * FROM ARTWORK";
$display = queryMysql($sql);
?>

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
        <?php include 'navigation.php'; ?>
        <!-- Page Content -->
        <div class="container">

            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3">Browse Art</h1>

            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active">Browse Art</li>
            </ol>

            <div class="row">
                <?php while ($artwork = mysqli_fetch_assoc($display)): ?>
                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="data:image/jpeg;base64,<?php echo base64_encode($artwork[image]); ?>" alt=""></a>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $artwork[title] ?></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><?php echo $artwork[description] ?></li>
                                <li class="list-group-item">Price: <?php echo $artwork[price] ?></li>
                            </ul>
                            <div class="card-body">
                                <?php
                                session_start();
                                if(isset($_SESSION['user'])){?>
                                <form method="post" action="shoppingcart.php">
                                    <input type="hidden" name="artid" value="<?php echo $artwork[artworkID]; ?>"/>
                                    <input type="hidden" name="title" value="<?php echo $artwork[title]; ?>"/>
                                    <input type="submit" name="addtocart" class="btn btn-info" value="Add to Cart"/>
                                </form>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>


        </div>
        <!-- /.container -->
    </body>

</html>

<?php 
if (isset($_GET['id'])) {
    include "connection.php"; 
	$sql = queryMysql("SELECT * FROM ARTWORK WHERE id='$id' LIMIT 1");
	$productCount = mysqli_num_rows($sql); 
    if ($productCount > 0) {
		while($row = mysqli_fetch_array($sql)){ 
			 $product_name = $row["product_name"];
			 $price = $row["price"];
			 $details = $row["details"];
			 $category = $row["category"];
			 $subcategory = $row["subcategory"];
			 $date_added = strftime("%b %d, %Y", strtotime($row["date_added"]));
         }
		 
	} else {
		echo "That item does not exist.";
	    exit();
	}
		
} else {
	echo "Data to render this page is missing.";
	exit();
}
mysqli_close($con);
?>