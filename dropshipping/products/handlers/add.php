<?php
	include "../../db_connections/db_connection.php";
	


	try{
	
		$dir = "../../pictures/products/";
		$sql = "select MAX(idproducts) from products";
		$numq = mysqli_fetch_row(mysqli_query($dbase, $sql));
		$num = $numq[0];
		$name = $_POST["name"];
		$brand = $_POST["brand"];
		$price = $_POST["price"];
		$avail = $_POST["avail"];
		$pic_name = "hello".$num;
		if($avail == "on") $avail = 1;
		else $avail = 0;
		$pic_name = $num.$_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'], $dir.$pic_name);
		$sql = "INSERT INTO products (name,brand,price,available,file_path) VALUES ('$name','$brand',$price, $avail, '$pic_name');";

		//echo $sql;
		mysqli_query($dbase, $sql);
		echo json_encode("Success");
	}catch(Exception $e){
		echo json_encode($e);
	}
?>