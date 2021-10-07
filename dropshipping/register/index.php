<?php
	
	//include '../db_connections/db_connection.php';
	
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
	
	<div class="parent">
		<div class="modal hidden" id="modal">
			<br>
			<div class="alert">
				<img src="../pictures/error_80px.png" alt="Error">
				<h1 id="error_type">Alert</h1>
				<p id="error_message">There was an error!</p>
				<button id="error">Okay</button>
			</div>
		</div>
		<div class="form">
			<div class="header">Register</div>
			<p>Hello New User to our new service to provide for you. Please provide necessary details below
			</p>
			<hr>
			<h2> Information </h2>
			<label> Name :</label> <input type="text" id="name" name="Name" placeholder="Ex Juan Dela Cruz" required>
			<label> Email:</label> <input type="email" id="email" name="Email" placeholder="Ex juandlcruz@email.extension" required>
			<label> Username: </label> <input type="text" id="user" name="Username" placeholder="Ex JuanDLCruz" required>
			<label> Contact :</label> <input type="number"id="contact" name="Contact" placeholder="Ex 9XXXXXXX" required>
			<h2>Security</h2>
			<label> Password: </label> <input type="password"  id="password" name="Password">
			<label> Confirm : </label> <input type="password" id="confirmpassword" name="Confirm">
			<h2> Personality </h2>
			<textarea>
				Tell Us Something About you
			</textarea>
			<button id="button">Submit</button>
		</div>
	</div>	
</body>


</html>

