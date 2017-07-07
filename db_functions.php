<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "invoicebook";
	
	$db = NULL;
	session_start();
	
	
	function connect_db()
	{
		global $db;
		global $servername;
		global $username;
		global $password;
		global $database;
		
		$db = new mysqli($servername, $username,$password,$database);
		$_SESSION['db']=$db;
		
		if($db->connect_error)
		{
			die('Can\`t connect to mysql server'. $db->connect_error);
		}
		
	}
	
	function disconnect_db()
	{
		global $db;
		mysqli_close($db);
		
	}
	
	function get_all_rows_db()
	{
		global $db;
		$sql = "SELECT id,date,consultation,premium_packet,outcome,description_outcome FROM incomes";
		$results = $db -> query($sql);
		
		if($results){
		}
		else {
			echo $db->error;
		}
		return $results;
	}
	
	function add_row_db($date, $consultation, $premium_packet, $outcome, $description_outcome)
	{
		global $db;
		$sql = "INSERT INTO incomes(id,date,consultation,premium_packet,outcome,description_outcome) VALUES (NULL,\"".$date."\",".$consultation.",".$premium_packet.",".$outcome.",\"".$description_outcome."\")";
		//echo $sql;
		if( $db->query($sql) === TRUE){
		}
		else
		{
			echo $db->error;
		}
	}
	
	
	
?>