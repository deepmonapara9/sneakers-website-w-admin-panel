<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('partials/header.php'); ?>

<?php
		$Username = null;
		if(!empty($_SESSION["Username"]))
		{$Username = $_SESSION["Username"];}
?>
</head>

<body>

    <?php include('partials/navbar.php'); ?>

    <div class="container">

			<div class="row">
				<div class="box" style="border-radius: 10px;">
					<div class="col-lg-12">
						<hr>
						<h2 class="intro-text text-center">Top 5 <strong>BEST</strong>sellers</h2>
						<hr>
					</div><br></br>
				</div>
			</div>

			<?php
				$num = 5;
				require 'Connection.php';
				$sql = "SELECT * FROM `tbl_products` Limit 5";
				$Resulta = mysqli_query($Conn,$sql);
				while($Rows = mysqli_fetch_array($Resulta)){
					echo '	
						<div class="row">
							<div class="box" style="border-radius: 10px;">
								<div class="col-lg-12">
									<hr>
									<h2 class="intro-text text-center">Top '. $num.'</h2>
									<hr>
									<img class="img-responsive img-border img-left" src="data:image;base64,'.$Rows[8].'" alt="">
									<hr class="visible-xs">
									<p><strong>Product Name:</strong> '.$Rows[1].'</p>
									<p><strong>Product Brand:</strong> '.$Rows[2].'</p>
									<p><strong>Size Available:</strong> '.$Rows[3].'</p>
									<p><strong>Colors Available:</strong> '.$Rows[4].'</p>
									<p><b>Price</b> 2999</p>
									<a onclick="addToCartOnclick('.$Rows[0].');" href="#"  style="margin-bottom: 5px;" class="btn btn-primary">Add to Cart</a>
								</div>
							</div>
						</div>';
					$num--;
				}
			?>
	</div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; SNEAKSpherer 2023</p>
                </div>
            </div>
        </div>
    </footer>

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
