<?php
	include_once("db_config.php");
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die($conn->connect_error);
	}
?>
