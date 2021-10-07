<?php
	session_start();
	$id = $_SESSION["id"];
	include("../db_connections/db_connection.php");
	$sql = "SELECT name FROM `test_user` WHERE idtest_user = '$id' ";
	$query = mysqli_query($db->get_db(), $sql);
	$person = mysqli_fetch_assoc($query);
	$name = $person["name"];

?>

<link rel="stylesheet" type="text/css" href="css/header.css">
<div class="container head">
	<div class="container child">
		<div class="childmin">
			<img src="../pictures/cruise_ship_60px.png">
		</div>
		<div class="child">
			<p class="headlabel">DropShip</p>
		</div>
	</div>
	<div class="child">
		<div class="info">Welcome! <?php echo $name?></div>
		<div class="container">
			<div class="child select"><a href="../userseller/">Home</a></div>
			<div class="child select"><a href="../products/">Products</a></div>
			<div class="child select"><a href="">Bags</a></div>
			<div class="child select"><a href="../transaction/">Transactions</a></div>
			<div class="child select"><a href="">Account</a></div>
		</div>
	</div>
</div>
<hr>

