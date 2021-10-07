<?php
	include "../../db_connections/db_connection.php";
	$id = $_POST['id'];
	$sql = "SELECT * from products where idproducts = $id";
	$query = mysqli_query($dbase, $sql);
	$row = mysqli_fetch_row($query);
	


?>


<link rel="stylesheet" type="text/css" href="css/add.css">
<div class="formcell">
	<h1>Update Product</h1>
	<label>Update Image: </label>
	<div class="image">
		<div id="img_container"><img id="blah" src="../pictures/products/<?php echo $row[9]?>" alt="Product" /></div>
		<input accept="image/*" type='file' id="imgInp" value="" />
	</div>
	
	<table>
		<tr>
			<td width="20%">
				<label>Product ID: </label>
			</td>
			<td width="80%">
				<input type="text" name="name" id="id" value="<?php echo $row[0]?>" readonly>
			</td>
		</tr>
		<tr>
			<td width="20%">
				<label>Product Name: </label>
			</td>
			<td width="80%">
				<input type="text" name="name" id="name" value="<?php echo $row[1]?>">
			</td>
		</tr>
		<tr>
			<td>
				<label>Brand: </label>
			</td>
			<td><input type="text" name="brand" id="brand" value="<?php echo $row[2]?>">
			</td>
		</tr>
		<tr>
			<td>
				<label>Price: </label>
			</td>
			<td>
				<input type="number" name="price" id="price" value="<?php echo $row[4]?>">
			</td>
		</tr>
	</table>
	
	<label>Available?</label><input type="checkbox" name="avail" id="avail" checked="
	<?php 
		if ($row[6] == 1){
			echo "checked"; 
		}
	?>">
	<div class="button">
		<button class="" id="update_button">
			Update Product
		</button>
	</div>
	
</div>