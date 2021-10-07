<?php

function FunctionName()
{
	echo "hellow";
}

class DatabaseConnection 
{
	private $db;
	private $dbname;
	function __construct($dbname){
		$user = "root";
		$pass = "root";
		$db = "dropshipdb";
		$this->dbname = $dbname;	
		$this->db = new mysqli('localhost', $user, $pass, $db) or die("Can't Connect to database");
	}



	public function take_columns($tablename){
        $sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '$this->dbname' AND TABLE_NAME = '$tablename';";
        $query = $this->db->query($sql);
        while($row =$query->fetch_assoc()){
            $result[] = $row; 
        }
        $columns = array_column($result, "COLUMN_NAME");
        return $columns;
    }
    public function get_db(){
    	return $this->db;
    }
    public function get_dbname(){
    	return $this->dbname;
    }

	
}


$db = new DatabaseConnection("dropshipdb");
if(!$db->get_db()){
	die("Can't Connect to database");
}

$dbase = $db->get_db();

?>