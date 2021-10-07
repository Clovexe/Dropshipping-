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
<div class="modal" id="modal">
	
		<img id="exit" src="../pictures/close_window_60px.png">
		<div class="updateform" id="updateform"> 
		
	</div>
</div>
<?php include '../standard_includes/header.php'; ?>
<div class="parent">
	<div class="navigation">
		<?php include 'navigation.php';?>
	</div>
	<div class="content" id="content">

	</div>

</div>



</body>


</html>

