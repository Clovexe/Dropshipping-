<?php
	include "../../db_connections/db_connection.php";
	
	try{
	
		$name = $_POST["name"];
		$brand = $_POST["brand"];
		$price = $_POST["price"];
		$avail = $_POST["avail"];
		$id = $_POST["id"];
		if($avail == "on") $avail = 1;
		else $avail = 0;
		//$sql = "INSERT INTO products (name,brand,price,available,file_path) VALUES ('$name','$brand',$price, $avail, '$pic_name');";
		$sql = "UPDATE products set name='$name', brand='$brand', price='$price', available=$avail where idproducts =$id; ";
		//echo $sql;
		mysqli_query($dbase, $sql);
		echo json_encode("Success");
	}catch(Exception $e){
		echo json_encode($e);
	}
?>