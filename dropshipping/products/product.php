<?php

	include("../db_connections/db_connection.php");
	 function take_columns($db, $dbname, $tablename){
        $sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '$dbname' AND TABLE_NAME = '$tablename';";
        $query = $db->query($sql);
        while($row =$query->fetch_assoc()){
            $result[] = $row; 
        }
        $columns = array_column($result, "COLUMN_NAME");
        return $columns;
    }



	$connection = new DatabaseConnection("dropshipdb");


	$query = mysqli_query($connection->get_db(),"select * from products");



	$columns = $connection->take_columns("products");
	foreach ($columns as $key => $value) {
		echo $value;
	}
	while($row = mysqli_fetch_assoc($query)){		
		echo "<div>".$row[$columns[1]]."</div>";
	}


?>