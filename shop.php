<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('partials/header.php'); ?>
	
	<?php
		$Username = null;
		if(!empty($_SESSION["Username"]))
		{
			$Username = $_SESSION["Username"];
		}
	?>
</head>

<body>

    <?php include('partials/navbar.php'); ?>

    <div class="container">
		<?php 
			$conn = mysqli_connect("localhost","root","","smss_db");
			$sql = "SELECT * FROM `tbl_products` order by ProductPrice";
			$Resulta = mysqli_query($conn,$sql);
		?>
		
		
		<?php while($Rows = mysqli_fetch_array($Resulta)){
		echo '	
		<div class="col-sm-4 col-lg-4 col-md-4">
             <div class="thumbnail">
				<h4 style="text-align: center;">'.$Rows[2].'</h4>
                <img style="border: 2px solid gray; border-radius: 10px; height: 229px; width: 298px;" src="data:image;base64,'.$Rows[8].'" alt="">
                <div class="caption">
					<p><strong>Product Name:</strong> '.$Rows[1].'</p>
					<p><strong>Size Available:</strong> '.$Rows[3].'</p>
					<p><strong>Colors Available:</strong> '.$Rows[4].'</p>
					<p><strong>P '.$Rows[5].'.00</strong></p>
                </div>
				<center><a onclick="addToCartOnclick('.$Rows[0].');" href="#"  style="margin-bottom: 5px;" class="btn btn-primary">Add to Cart</a></center>
            </div>
        </div>
		';
		}?>
		
	</div>

    <?php include('partials/footer.php'); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
		function addToCartOnclick(ProductID)
		{	
			if(confirm("Are you sure you want to add this product to your cart?") == true){
			window.open("Order.php?ProductID="+ProductID,"_self",null,true);
			}
		}
    </script>
</body>

</html>
