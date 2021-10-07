<?php
	try{
		include "../../db_connections/db_connection.php";
		$id = $_POST["id"];
		$sql = "SELECT file_path from products WHERE idproducts = $id";
		$pic = mysqli_fetch_row(mysqli_query($dbase, $sql))[0];
		$sql = "DELETE FROM products WHERE idproducts = $id";
		unlink("../../pictures/products/".$pic);
		mysqli_query($dbase, $sql);
		echo json_encode("Success");
	}catch(Exception $e){
		echo json_encode($e);
	}
?>