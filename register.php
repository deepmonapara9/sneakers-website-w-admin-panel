<?php 
	session_start(); 
	$ActionType = $_GET['ActionType'];
	if($ActionType == "Edit"){
		$ID = $_GET['ID'];
		$Loc = $_GET['Loc'];
	}
?>
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

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
						<hr>
						<h2 class="intro-text text-center"><?php if($ActionType == "Register"){echo "Register";}else echo "Edit Account Information"; ?></h2>
						<hr>
					<div class="col-md-6">	
							<form role="form" action="RegisterAction.php?ActionType=<?php echo $ActionType; if($ActionType == "Edit"){ echo "&Loc=" . $Loc . "&ID=" .$ID;} ?>" 
							method="POST">
							
							<div class="form-group">
							  <label for="username">Username:</label>
							  <input type="text" name="Username" class="form-control" id="Username" placeholder="Enter Username">
							</div>
							
							<div class="form-group">
							  <label for="Password">Password:</label>
							  <input type="Password" name="Password" class="form-control" id="Password" placeholder="Enter Password">
							</div>

							<div class="form-group">
							  <label for="Firstname">Firstname:</label>
							  <input type="text" name="Firstname" class="form-control" id="Firstname" placeholder="Enter Firstname">
							</div>
							
							<div class="form-group">
							  <label for="Middlename">Middlename:</label>
							  <input type="text" name="Middlename" class="form-control" id="Middlename" placeholder="Enter Middlename">
							</div>
							
							<div class="form-group">
							  <label for="Lastname">Lastname:</label>
							  <input type="text" name="Lastname" class="form-control" id="Lastname" placeholder="Enter Lastname">
							</div>
							
							<div class="form-group">
							  <label for="Address">Address:</label>
							  <input type="text" name="Address" class="form-control" id="Address" placeholder="Enter Address">
							</div>
							
							<div class="form-group">
							  <label for="EmailAddress">Email Address:</label>
							  <input type="email" name="EmailAddress" class="form-control" id="EmailAddress" placeholder="Enter Email Address">
							</div>
							
							<button type="submit" class="btn btn-default">Submit</button><br><br>
						</form>
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
                    <p>Copyright &copy; SNEAKSpherer 2023</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
