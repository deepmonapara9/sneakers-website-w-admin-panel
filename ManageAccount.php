<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('partials/header.php'); ?>
	<?php	
		require 'Connection.php';
		$Username = null;
		if(!empty($_SESSION["Username"]))
		{
			$Username = $_SESSION["Username"];
		}
		$sql = "select * from tbl_customers where Username = '".$Username."' and Password = '".$_SESSION['Password']."'";
		$Res = mysqli_query($Conn,$sql);
		while($Rows = mysqli_fetch_array($Res))
		{
			$C_ID = $Rows[0];
			$C_Username = $Rows[1];
			$C_Password = $Rows[2];
			$C_Firstname = $Rows[4];
			$C_Middlename = $Rows[5];
			$C_Lastname = $Rows[6];
			$C_Address = $Rows[7];
			$C_Email = $Rows[8];
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
						<h2 class="intro-text text-center">Manage Account</h2>
						<hr>
					<div class="col-md-6">	
							<form role="form" action="Register.php?ActionType=Edit&Loc=MA&ID=<?php echo $C_ID; ?>" method="POST">
							<h4 style="text-align: center">Account Information</h4>
							<div class="form-group">
							  <label for="username">Username:</label>
							  <input type="text" name="Username" class="form-control" id="Username" value="<?php echo $C_Username; ?>" disabled>
							</div>
							
							<div class="form-group">
							  <label for="Password">Password:</label>
							  <input type="Password" name="Password" class="form-control" id="Password" value="<?php echo $C_Password; ?>" disabled>
							</div>

							<div class="form-group">
							  <label for="Firstname">Firstname:</label>
							  <input type="text" name="Firstname" class="form-control" id="Firstname" value="<?php echo $C_Firstname; ?>" disabled>
							</div>
							
							<div class="form-group">
							  <label for="Middlename">Middlename:</label>
							  <input type="text" name="Middlename" class="form-control" id="Middlename" value="<?php echo $C_Middlename; ?>" disabled>
							</div>
							
							<div class="form-group">
							  <label for="Lastname">Lastname:</label>
							  <input type="text" name="Lastname" class="form-control" id="Lastname" value="<?php echo $C_Lastname; ?>" disabled>
							</div>
							
							<div class="form-group">
							  <label for="Address">Address:</label>
							  <input type="text" name="Address" class="form-control" id="Address" value="<?php echo $C_Address; ?>" disabled>
							</div>
							
							<div class="form-group">
							  <label for="EmailAddress">Email Address:</label>
							  <input type="email" name="EmailAddress" class="form-control" id="EmailAddress" value="<?php echo $C_Email; ?>" disabled>
							</div>
							
							<button type="submit" class="btn btn-default">Edit Info</button>
						</form>
					</div>
					
					<div class="col-md-6">	
						<h4 style="text-align: center">My Orders</h4>
						<div class="table-responsive">
							<table border="5px" class="table">
								<tr style="text-align: center; color: Black; font-weight: bold;">
									<td>Order ID</td>
									<td>Product Name</td>
									<td>Product Brand</td>
									<td>Product Size</td>
									<td>Product Color</td>
									<td>Product Price</td>
									<td>Date Ordered</td>
									<td>Action</td>
								</tr>
								
								<?php 
								$sqlI = "SELECT tbl_orders.OrderID, tbl_products.Productname, tbl_products.ProductBrand, tbl_orders.Size, " .
								" tbl_orders.Color, tbl_products.ProductPrice, tbl_orders.DateOrdered FROM tbl_products RIGHT JOIN " .
								" tbl_orders on tbl_orders.ProductID = tbl_products.ProductID WHERE tbl_orders.CustomerID = $C_ID ORDER BY tbl_orders.OrderID";
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
								<td>
								<a href="#" onclick="OrderOnclick(<?php echo $Rows[0]; ?>);">Cancel</a>
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

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Sole Mates Shoe Store 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script>
		function OrderOnclick(OrderID)
		{
			if(confirm("Are you sure you want to cancel this order?") == true)
			{
				window.open("ManageAccountAction.php?oID="+OrderID,"_self",null,true);
			}
		}
	</script>

</body>

</html>














