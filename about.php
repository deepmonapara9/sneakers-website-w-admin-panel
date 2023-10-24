<?php session_start(); ?>
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
                    <h2 class="intro-text text-center">"Unveiling Our Sole-Driven Journey: <strong>Meet SneakSphere"</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive img-border-left" src="imgs/logo.png" alt="">
                </div>
                <div class="col-md-6">
                    <p>Welcome to SneakSphere!<br><br>

                    At SneakSphere, we are passionate about all things sneakers. Our journey began with a simple idea – to create a vibrant community where sneaker enthusiasts from all walks of life could come together to celebrate their love for these iconic pieces of footwear. Whether you're a seasoned sneakerhead or just starting to explore the world of kicks, you've come to the right place!<br><br>

                    What sets SneakSphere apart is our commitment to delivering top-notch content, curated just for you. We believe that sneakers are not just a fashion statement; they are a form of self-expression and cultural significance. Our team of dedicated experts and contributors work tirelessly to bring you the latest news, in-depth reviews, and thought-provoking features that capture the essence of sneaker culture.<br><br>

                    But we're more than just a website – we're a community-driven platform. We encourage you to join the conversation, share your unique stories, and engage with fellow sneaker enthusiasts from around the globe. SneakSphere is a place where you can learn, inspire, and be inspired, all while fostering meaningful connections.<br><br>

                    Explore our extensive sneaker database, discover the history behind your favorite kicks, and stay up-to-date with the hottest releases in the industry. Whether it's classic silhouettes or cutting-edge collaborations, we've got you covered.<br><br>

                    As we grow and evolve, our mission remains clear: to be the ultimate destination for sneaker lovers worldwide. So, lace up your favorite pair, and let's embark on this exciting journey together!<br><br>

                    Thank you for being a part of SneakSphere. Together, we'll keep the sneaker culture alive, one step at a time.<br><br>

                    Stay fresh,<br><br>

                    The SneakSphere Team</p>
                
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <?php include('partials/footer.php'); ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
