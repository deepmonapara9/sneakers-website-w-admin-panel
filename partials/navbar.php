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
					<li><a href="bestseller.php">Best Sellers</a></li>
					<li><a href="shop.php">Shop</a></li>
                    <li><a href="about.php">About</a></li>
					<!-- <li><a href="#" onclick="ManagementOnclick();">Management</a></li> -->
					<?php if($Username == null){echo '<li><a href="register.php?ActionType=Register">Register</a></li>';} ?>
					<?php if($Username == null){echo '<li><a href="Login.php?Role=User">Login</a></li>';} else {echo '<li><a href="Logout.php">Logout</a></li>';} ?>
                </ul>
            </div>
        </div>
</nav>