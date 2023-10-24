<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>
					<?php echo '<strong>'.$Username.'</strong>'; ?>
					<br>
					<strong>
					<?php if($Username != null){echo '<a href="ManageAccount.php?Role=User">Manage Account</a> |';} ?> 
					<?php if($Username == null){echo '<a href="Login.php?Role=User">Login</a>';} else {echo '<a href="Logout.php">Logout</a>';} ?> | 
					<a href="#">Back to top</a>
					</strong><br>
					Copyright &copy; SNEAKSphere 2023
					</p>
					
                </div>
            </div>
        </div>
    </footer>