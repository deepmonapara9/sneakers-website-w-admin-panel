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
					<div class="table-responsive">
						<h4 style="text-align:center;">Customers</h4>
						<table border="5px" class="table">
							<tr style="text-align: center; color: Black; font-weight: bold;">
								<td>Customer ID</td>
								<td>UserName</td>
								<td>Password</td>
								<td>Firstname</td>
								<td>Middlename</td>
								<td>Lastname</td>
								<td>Address</td>
								<td>Email Address</td>
								<td>Action</td>
							</tr>
							<?php
							require 'Connection.php';
							$sql = "select CustomerID,Username,Password,Firstname,Middlename,Lastname,Address,EmailAddress from tbl_customers";
							$Resulta = mysqli_query($Conn, $sql);
							while ($Rows = mysqli_fetch_array($Resulta)) :;
							?>
								<tr style="color: black">
									<td><?php $cid = $Rows[0];
										echo $cid; ?></td>
									<td><?php echo $Rows[1]; ?></td>
									<td><?php echo $Rows[2]; ?></td>
									<td><?php echo $Rows[3]; ?></td>
									<td><?php echo $Rows[4]; ?></td>
									<td><?php echo $Rows[5]; ?></td>
									<td><?php echo $Rows[6]; ?></td>
									<td><?php echo $Rows[7]; ?></td>
									<td>
										<a href="#" onclick="actionOnclick('Edit',<?php echo $cid; ?>)">Edit</a> |
										<a href="#" onclick="actionOnclick('Delete',<?php echo $cid; ?>)">Delete</a>
									</td>
								<?php endwhile; ?>
								</tr>
						</table>
					</div>
				</div>
			</div>
		</div>

	</div>

	<?php include('partials/footer.php'); ?>


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		function actionOnclick(Action, CustomerID) {
			if (Action == "Edit") {
				if (confirm("Are you sure you want to edit this information?") == true) {
					window.open("Register.php?ActionType=Edit&Loc=MC&ID=" + CustomerID, "_self", null, true);
				}
			} else if (Action == "Delete") {
				if (confirm("Are you sure you want to Delete this information?") == true) {
					window.open("Management_Customers_Action.php?ID=" + CustomerID, "_self", null, true);
				}
			}
		}
	</script>

</body>

</html>