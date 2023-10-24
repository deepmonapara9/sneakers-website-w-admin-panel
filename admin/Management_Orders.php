<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('partials/header.php'); ?>

	<?php
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
						<h2 class="intro-text text-center">Orders</h2>
						<hr>
						<div class="table-responsive">
							<table border="5px" class="table">
								<tr style="text-align: center; color: Black; font-weight: bold;">
									<td>Order ID</td>
									<td>Customer ID</td>
									<td>Product Name</td>
									<td>Product Brand</td>
									<td>Product Size</td>
									<td>Product Color</td>
									<td>Product Price</td>
									<td>Date Ordered</td>
									<td>Action</td>
								</tr>
								
								<?php 
								require 'Connection.php';
								$sqlI = "SELECT tbl_orders.OrderID, tbl_orders.CustomerID, tbl_products.Productname, tbl_products.ProductBrand, tbl_orders.Size, " .
								" tbl_orders.Color, tbl_products.ProductPrice, tbl_orders.DateOrdered FROM tbl_products RIGHT JOIN " .
								" tbl_orders on tbl_orders.ProductID = tbl_products.ProductID ORDER BY tbl_orders.OrderID";
								$Resulta = mysqli_query($Conn,$sqlI);
								while($Rows = mysqli_fetch_array($Resulta)):; 
								?>
								<tr style="color: black">
								<td><?php echo $Rows[0]; ?></td>
								<td><?php echo $Rows[1]; ?></td>
								<td><?php echo $Rows[2]; ?></td>
								<td><?php echo $Rows[3]; ?></td>
								<td><?php echo $Rows[4]; ?></td>
								<td><?php echo $Rows[5]; ?></td>
								<td><?php echo $Rows[6]; ?></td>
								<td><?php echo $Rows[7]; ?></td>
								<td>
								<a href="#" onclick="CancelOrderOnclick(<?php echo $Rows[0]; ?>);">Delete</a>
								</td>
								<?php endwhile; ?>
								</tr>
							</table>
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
		function CancelOrderOnclick(ID)
		{
			if(confirm("Are you sure you want to Delete this order?")==true)
			{
				window.open("Management_Orders_Action.php?id="+ID,"",null,true);
			}
		}
	</script>

</body>

</html>
