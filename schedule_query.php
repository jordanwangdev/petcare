<?php
	session_start();
	
	require_once 'conn.php';
	
	$mealtime = $_POST['mealtime'];
	$playtime = $_POST['playtime'];

	if ($mealtime != "" && $playtime != ""){
		$sql1 = "INSERT INTO schedule (activity_name, activity_date) VALUES ('mealtime', CURRENT_TIMESTAMP());";
		$result1 = $conn->query($sql1);
		$sql2 = "INSERT INTO schedule (activity_name, activity_date) VALUES ('playtime', CURRENT_TIMESTAMP());";
		$result2 = $conn->query($sql2);

        header('location:schedule.php');
	} 
?>