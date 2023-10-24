<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

<?php include('partials/header.php'); ?>

	<?php
		$Username = null;
		if(!empty($_SESSION["Username"])){$Username = $_SESSION["Username"];}
		if(empty($_SESSION['Admin'])){echo '<script>window.open("index.php","_self",null,true);</script>';}
	?>
</head>

<body>

    <?php include('partials/navbar.php'); ?>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
					<hr>
					<h2 class="intro-text text-center">Product List</h2>
					<hr>
					<div class="col-lg-12">
						<div class="table-responsive">
							<table border="5px" class="table">
								<tr style="text-align: center; color: Black; font-weight: bold;">
									<td>Image</td>
									<td>Product ID</td>
									<td>Product Name</td>
									<td>Product Brand</td>
									<td>Product Size</td>
									<td>Product Color</td>
									<td>Product Price</td>
									<td>Product Category</td>
									<td>Action</td>
								</tr>
								
								<?php 
									require 'Connection.php';
									$sql = "select * from tbl_products";
									$Resulta = mysqli_query($Conn,$sql);
									while($Rows = mysqli_fetch_array($Resulta)):; 
								?>
								<tr style="color: black">
									<td><img style="width: 50px; height: 50px;" src="data:image;base64,<?php echo $Rows[8];?>"></td>
									<td><?php $cid = $Rows[0]; echo $cid; ?></td>
									<td><?php echo $Rows[1]; ?></td>
									<td><?php echo $Rows[2]; ?></td>
									<td><?php echo $Rows[3]; ?></td>
									<td><?php echo $Rows[4]; ?></td>
									<td><?php echo $Rows[5]; ?></td>
									<td><?php echo $Rows[6]; ?></td>
									<td>
									<a href="#" onclick="ProductOnlick('Edit',<?php echo $Rows[0]; ?>)">Edit</a> | 
									<a href="#" onclick="ProductOnlick('Delete',<?php echo $Rows[0]; ?>)">Delete</a>
									</td>
									<?php endwhile; ?>
								</tr>
							</table>
						</div>
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
		function ProductOnlick(action,pid)
		{
			if(action == "Edit")
			{
				if(confirm("Are you sure you want to edit this product?")==true)
				{
					window.open("Management_Products.php?ProdID="+pid+"&ProductAction="+action,"_self",null,true);
				}
			}else if(action == "Delete")
			{
				if(confirm("Are you sure you want to Delete this product?")==true)
				{
					window.open("Management_Products_Action.php?ProdID="+pid+"&ProductAction="+action,"_self",null,true);
				}
			}
		}
	</script>

</body>

</html>
