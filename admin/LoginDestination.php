<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "smss_db");
if (!$conn) {
	die("Connection Failed" . mysqli_connect_error());
}
$_un = $_POST['Username'];
$_pass = $_POST['Password'];
$_Role = $_GET['Role'];

$query = "SELECT * FROM `admin` WHERE `Username` = '" . $_un . "' and `PASSWORD` = '" . $_pass . "' and `Role` = '" . $_Role . "'";
$res = mysqli_query($conn, $query);
if ($res === false) {
	die("Error" . mysqli_error($conn));
}
$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
if ($row) {
	if ($_Role == "Admin") {
		$_SESSION['Admin'] = "Logged";
		echo "<script>window.open('Management_Orders.php','_self',null,true)</script>";
	}
} else {
	die("Wrong username or password");
}
?>
// if (isset($_REQUEST["ad_login"])) {
// $getuser = mysqli_query($conn, "select * from admin where name='" . $_REQUEST["unm"] . "' AND password='" . $_REQUEST["psw"] . "'");
// $res = mysqli_fetch_row($getuser);
// $nores = mysqli_num_rows($getuser);
// if ($nores > 0) {
// $_SESSION["ad_session"] = $res[1];
// echo "<script>
	window.location = 'index.php';
</script>";
// } else
// echo "<script>
	window.location = 'Login.php';
</script>";
// } else
// echo "<script>
	window.location = 'Login.php';
</script>";