<?php
	session_start();
	
	require_once 'conn.php';
	
	$name = $_POST['name'];
	$age = $_POST['age'];
	$type = $_POST['type'];
	$breed = $_POST['breed'];

	if ($name != "" && $age != "" && $type != "" && $breed != ""){
		$sql = "INSERT INTO pets (pet_name, pet_age, pet_type, pet_breed) VALUES ('$name', '$age', '$type', '$breed');";
		$result = $conn->query($sql);

        header('location:petinfo.php');
	} 
?>