<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

	<?php include('partials/header.php'); ?>

	<?php
	$Username = null;
	if (!empty($_SESSION["Username"])) {
		$Username = $_SESSION["Username"];
	}
	$ProductAction = $_GET["ProductAction"];
	if (empty($_SESSION['Admin'])) {
		echo '<script>window.open("index.php","_self",null,true);</script>';
	}
	?>
</head>

<body>

	<?php include('partials/navbar.php'); ?>

	<div class="container">

		<div class="row">
			<div class="box">
				<div class="col-lg-12">
					<hr>
					<h2 class="intro-text text-center">Products</h2>
					<hr>

					<div class="col-md-12">
						<div class="col-md-6">
							<form role="form" action="Management_Products_Action.php?ProductAction=
							<?php echo $ProductAction;
							if ($ProductAction == "Edit") {
								echo "&ProductID=" . $_GET['ProdID'];
							} ?>" method="POST" enctype="multipart/form-data">

								<div class="form-group">
									<label for="ProductName">Product Name:</label>
									<input type="text" name="ProductName" class="form-control" id="ProductName" placeholder="Enter Product Name" required>
								</div>

								<div class="form-group">
									<label for="ProductBrand">Product Brand:</label>
									<input type="text" name="ProductBrand" class="form-control" id="ProductBrand" placeholder="Enter Product Brand" required>
								</div>

								<div class="form-group">
									<label for="ProductPrice">Product Price:</label>
									<input type="text" name="ProductPrice" class="form-control" id="ProductPrice" placeholder="Enter Product Price" required>
								</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="ProductSize">Size Available:</label>
								<select name="ProductSize" class="form-control" id="ProductSize" placeholder="Enter Product Size" required>
									<option value="" disabled selected>SELECT SIZE</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
								</select>
							</div>

							<div class="form-group">
								<label for="ProductColor">Colors Available:</label>
								<select name="ProductColor" class="form-control" id="ProductColor" placeholder="Enter Product Color" required>
									<option value="" disabled selected>SELECT COLOUR</option>
									<option value="WHITE">WHITE</option>
									<option value="BLACK">BLACK</option>
									<option value="BLACK">RED</option>
									<option value="BLACK">BLUE</option>
								</select>
							</div>

							<div class="form-group">
								<label for="ProductCategory">Category:</label>
								<select name="ProductCategory" class="form-control" id="ProductCategory" placeholder="Enter Product Category" required>
									<option value="" disabled selected>SELECT CATEGORY</option>
									<option value="WHITE">SNEAKER</option>
								</select>
							</div>

							<div class="form-group">
								<label for="ProductImage">Product Image:</label>
								<input type="file" name="ProductImage">
							</div>

							<div class="form-group">
								<button type="submit" style="float: right;" class="btn btn-default">Submit</button>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- /.container -->

	<?php include('partials/footer.php'); ?>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function() {

		});
	</script>

</body>

</html>