<?php
/* Database connection start */
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "grrovy";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	#connection checking
	if ($conn->connect_error) {
	    die("Connection failed :".$conn->connect_error);
	}
?>