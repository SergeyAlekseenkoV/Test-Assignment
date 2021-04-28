<?php
class DBController {
	private $conn = "";
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "demo";

	function __construct() {
		$conn = $this->connectDB();
		if(!empty($conn)) {
			$this->conn = $conn;			
		}
	}
// create db connection
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	// if no connection -> connection error	
		if($conn === false){
			die("ERROR:Could't connect!".$this->connect_error);
		}
	}
// running select query
	function runSelectQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}
		if(!empty($resultset))
			return $resultset;
	}
// executing insert into db	
	function executeInsert($query) {
        $result = mysqli_query($this->conn,$query);
        $insert_id = mysqli_insert_id($this->conn);
		return $insert_id;
    }
// 	executing update db
	function executeUpdate($query) {
        $result = mysqli_query($this->conn,$query);
        return $result;	
    }
// executing query
	function executeQuery($sql) {
		$result = mysqli_query($this->conn,$sql);
		return $result;	
    }

	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;
	}
}
?>
