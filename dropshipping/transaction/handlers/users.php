<?php
	include "../../db_connections/db_connection.php";
	
	$key =  $_POST["usertype"];

	$sql = "SELECT fullname, costumerId FROM costumers WHERE firstname LIKE '$key%' OR lastname LIKE '$key%' OR middlename LIKE '$key%' OR fullname LIKE '%$key%'";

	$query = mysqli_query($dbase, $sql);
	while($row = mysqli_fetch_row($query)){
 ?>
		<div class="items">
			 <h4><?php echo $row[0];?></h4>
			 <h5 ><?php echo $row[1];?></h5>
		</div>
<?php
	}
?>