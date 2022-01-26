<?php
    $servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "myresume";

	// $servername = "sql106.epizy.com";
	// $username = "epiz_27522861";
	// $password = "BUZZ615727";
	// $dbname = "epiz_27522861_myresume";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die($conn->connect_error);
	}
?>
