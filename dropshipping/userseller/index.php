<?php
	
	include '../standard_includes/header.php';




?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dropship: Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<div class="panel">
		<div class="child ">
			<div class="half">
				hello
			</div>
			<div class="half">
				hi
			</div>
		</div>
		<div class="child">
			<div class="formcell">
				<img src="../pictures/purchase_order_60px.png">
				<h1>Insert Order</h1>
				<label>Name of Item:</label><input type="text" id="itemname" required><br>
				<label>Item Number :</label><input type="number" id="quantity" min=1 required><br>
				<label>Item Reciever :</label><input type="text" list="reciever" id="recievers" required>
				<datalist id="reciever">
    				<option value="small">$10 USD</option>
    				<option value="medium">$20 USD</option>
    				<option value="large">$25 USD</option>
				</datalist><br>
				<label>Address :</label><input type="text" id="address" required><br>
				<label>Contact :</label><input type="text" id="number"><br>
				<button>Submit</button>
			</div>

		</div>
	</div>	

</body>
</html>