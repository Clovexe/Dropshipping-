<?php
	include "../../db_connections/db_connection.php";
	
	$key =  $_POST["usertype"];

	$sql = "SELECT name, brand, price, idproducts FROM products WHERE name LIKE '%$key%' OR brand LIKE '$key%'";

	$query = mysqli_query($dbase, $sql);
	while($row = mysqli_fetch_row($query)){
 	?>
		<div class="items">
			 <h4><?php echo $row[0];?></h4>
			 <h5 id="id" style="display: none;"><?php echo $row[3];?></h5>
			 <h5><?php echo $row[1];?></h5>
			 <h5>Php <?php echo $row[2];?></h5>
		</div>
<?php
	}
?>