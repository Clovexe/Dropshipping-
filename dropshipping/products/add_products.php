<?php
	include '../standard_includes/header.php';
	//include '../db_connections/db_connection.php';
	$active = 2;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dropship: Products</title>
	<link rel="stylesheet" type="text/css" href="css/add.css">
	<script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="js/add.js"></script>
</head>
<body>
<div class="parent">
	<div class="navigation">
		<?php include 'navigation.php';?>
	</div>
	<div class="content"id="content">
		<div>
			<div class="formcell">
				<h1>Add Product</h1>
				<label>Insert Image: </label>
				<div class="image">
					<div id="img_container"><img id="blah" src="../pictures/download_52px.png" alt="Product" /></div>
					<div class="container_input">
						<div class="button-wrap">
								<label class="fileupload" for="imgInp">Upload File</label>
    						<input id="imgInp" type="file">
  						</div>
					</div>
				</div>
				<table>
					<tr>
						<td width="20%">
							<label>Product Name: </label>
						</td>
						<td width="80%">
							<input type="text" name="name" id="name">
						</td>
					</tr>
					<tr>
						<td>
							<label>Brand: </label>
						</td>
						<td><input type="text" name="brand" id="brand">
						</td>
					</tr>
					<tr>
						<td>
							<label>Price: </label>
						</td>
						<td>
							<input type="number" name="price" id="price">
						</td>
					</tr>
				</table>
				
				<label>Available?</label><input type="checkbox" name="avail" id="avail" >
				<div class="button">
					<button id="button_hey">Add Product</button>
				</div>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>

