<?php
	$servername = "localhost";
	$username = 'root';
	$password = '';
	$dbname = "utm";

	$conn = new mysqli( $servername, $username, $password, $dbname );
	if(!$conn){
		die("Fatal Error: Connection Failed!");
	}
?>