<? session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/header.php'); ?>
    
	<?php
		$Username = null;
		$Role = $_GET["Role"];
		if(!empty($_SESSION["Username"]))
		{
			$Username = $_SESSION["Username"];
		}
	?>
</head>

<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">SNEAKSphere</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
            </ul>
        </div>
    </div>
</nav>

    <div class="container">

        <div class="row">
            <div class="box">
			
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Please Login</h2>
                    <hr>
                </div>

                <div class="col-md-6">
                 <form role="form" action="LoginDestination.php?Role=<?php echo $Role; ?>" method="POST">
				 
					<div class="form-group">
					  <label for="Username">Username:</label>
					  <input type="text" name="Username" class="form-control" id="Username" placeholder="Enter Username" required>
					</div>
					
					<div class="form-group">
					  <label for="Password">Password:</label>
					  <input type="password" name="Password" class="form-control" id="Password" placeholder="Enter password" required>
					</div>
					
					<button type="submit" class="btn btn-default">Submit</button>
					
				  </form>
                </div>
             
            </div>
        </div>

    </div>

    <?php include('partials/footer.php'); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
