<?php
	
	//include '../db_connections/db_connection.php';
	$active = 1;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dropship: Products</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
</head>
<body>

	<?php include '../standard_includes/header.php'; ?>
	<div class="parent">
		<div class="content users">
			<input type="text" id="users" class="search"name=""><button class="search_btn">search</button>
			<div id="suggestion"></div>
			<h1>User List</h1>
			<div id="userlist">

			</div>
		</div>
		<div class="content product">
			<input type="text" id="products"class="search" name=""><button class="search_btn">search</button>

			<div id="user_suggestion"></div>
			<h1>Product List</h1>
			<div id="productlist"></div>
		</div>
	</div>



</body>


</html>

