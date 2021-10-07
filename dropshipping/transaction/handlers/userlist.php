<?php
	include "../../db_connections/db_connection.php";
	
	$array_value = json_decode($_POST['usertype']);
	if(count($array_value) <= 0){
		?>
			<p>
				Search in the search bar the costumer that you would want to have a transaction with
			</p>
		<?php
	}else{
		foreach ($array_value as $key => $value) {
			$sql = "SELECT fullname,costumerId, address,cellphoneNumber,email FROM costumers WHERE costumerId = $value";
			$query = mysqli_query($dbase, $sql);
			
			while($row = mysqli_fetch_row($query)){
				?>
				<div class="user_detail"> 
					<button id="remove_user" value="<?php echo $row[1]; ?>">x</button>
					<h3><?php echo $row[0]; ?></h3>
					<h6><?php echo $row[1]; ?></h6>
					<h6><?php echo $row[2]; ?></h6>
					<h6><?php echo $row[3]; ?></h6>
					<h6><?php echo $row[4]; ?></h6> 	
				</div>
				<br>
				<?php
			}
		}
	}


?>