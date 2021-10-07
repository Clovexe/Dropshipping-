<?php
	include "../../db_connections/db_connection.php";
	$sql = "SELECT * from products";
	$query = mysqli_query($dbase, $sql);
	while($row = mysqli_fetch_row($query)){
		?>
			<div class="product">
				<div class="img">
					<img src="../pictures/products/<?php echo $row[9];?>">
					
				</div>
				<h2><?php echo strtoupper($row[1]);?></h2>
				<p>Brand: <?php echo $row[2];?></p>
				<p>Price: <?php echo $row[4];?></p>
				<p>Available? : 
					<?php 
						if ($row[6] == 1){
							echo "Yes"; 
						}else{
							echo "No";
						}
					?>	
				</p>
				<div class="button">
					<button id="update" value="<?php echo $row[0];?>">Update</button>
					<button id="delete" value="<?php echo $row[0];?>">Delete</button>
				</div>
				
			</div>

		<?php
	}

?>