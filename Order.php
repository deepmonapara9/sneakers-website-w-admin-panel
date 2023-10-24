<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/header.php'); ?>
	<style>
		#pdetails span{
			float: right;
		}
	</style>
</head>

<body>

<?php include('partials/navbar.php'); ?>
	
	<?php
		require 'Connection.php';
		$UN = $_SESSION['Username'];
		$PASS = $_SESSION['Password'];
		$ProductID = $_GET['ProductID'];
		
		if(empty($UN)){echo '<script>window.open("Login.php?Role=User","_self",null,true);</script>';}
		
		$sql = "SELECT * FROM `tbl_customers` WHERE `Username` = '".$UN."' and `Password` = '".$PASS."' and `Role` = 'User'";
		$res = mysqli_query($Conn,$sql);
		while($Rows = mysqli_fetch_array($res)){
			$CustomerID = $Rows[0];
		}
	?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Order</h2>
                    <hr><br>
                </div>

                <div class="col-md-6">
                 <form role="form" action="OrderAction.php?ProductID=<?php echo $ProductID; ?>&CustomerID=<?php echo $CustomerID; ?>" method="POST">
					<div class="form-group">
					  <label for="ProductID">Product ID:</label>
					  <input type="text" name="ProductID" class="form-control" id="ProductID" value="<?php echo $ProductID; ?>" disabled>
					</div>
					<div class="form-group">
					  <label for="CustomerID">Customer ID:</label>
					  <input type="text" name="CustomerID" class="form-control" id="CustomerID" value="<?php echo $CustomerID; ?>" disabled>
					</div>
                    <div class="form-group">
					  <label for="CustomerID">Payment:</label>
					  <input type="text" name="Payment" class="form-control" id="Payment" value="COD" disabled>
					</div>
				
					<div class="form-group">
						<label for="ProductColor">Product Color:</label>
						<input type="text" name="ProductColor" class="form-control" id="ProductColor">
					</div>
					<div class="form-group">
						<label for="ProductSize">Product Size:</label>
                        <select name="ProductSize" class="form-control" id="ProductSize">
     							 <option value="" disabled selected>SELECT SIZE</option>
								 <option value="8">8</option>
								 <option value="9">9</option>
								 <option value="10">10</option>
							     </select> 
                    </div>
						<button type="submit" style="float: right;" class="btn btn-default">Submit</button>
					</form>
				</div>
                
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; SNEAKSphere 2023 </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
