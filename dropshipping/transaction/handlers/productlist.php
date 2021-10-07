<?php
	include "../../db_connections/db_connection.php";
	
	$array_value = json_decode($_POST['usertype']);
	if(count($array_value) <= 0){
		?>
			<p>
				Search in the search bar the product that you wanted to add to your costumers' list
			</p>
		<?php
	}else{
		foreach ($array_value as $key => $value) {
			$sql = "SELECT name,idproducts, brand,price,available,file_path FROM products WHERE idproducts = $value";
			$query = mysqli_query($dbase, $sql);
			//echo "<div>$sql</div>";
			while($row = mysqli_fetch_row($query)){
				?>
				<div class="product_detail"> 
					<div class="img_container">
						<img src="../pictures/products/<?php echo $row[5];?>">
					</div>
					<div class="info_container">
						
						<button id="remove_product" value="<?php echo $row[1]; ?>">x</button>
						<br>
						<h4><?php echo strtoupper($row[0]); ?></h4>
						
						<h5>Brand: <?php echo $row[2]; ?></h5>
						<h5>Price: <?php echo $row[3]; ?></h5>
						<h5>Available?:
						<?php 
							if($row[4] == true){
								echo "Yes";
							} else echo "No";
						?>
						<br>
						<label>Enter Amount: </label><input type="number" id="<?php echo $row[1]; ?>" class="amount" name="">
					</h5> 		
					</div>
					 	
				</div>
				<br>
				<?php
			}
		}
	}
?>