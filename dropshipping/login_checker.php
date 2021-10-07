<?php
	session_start();
	
	include("db_connections/db_connection.php");
	include("db_connections/functions.php");
	
	$name = $_POST['uname'];
	$pass = $_POST['pass'];
	$person = "";
	$sql = "SELECT idtest_user,name FROM `test_user` WHERE login = '$name' and password = '$pass'";
	$query = mysqli_query($db->get_db(), $sql);
	if(mysqli_num_rows($query) > 0){
		$person = mysqli_fetch_assoc($query);
		$_SESSION['id'] = $person["idtest_user"];
	}
	$data = array();
	$data["name"] = $person["name"];
	echo json_encode($data);

?>