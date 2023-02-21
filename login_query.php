<?php
	session_start();
	
	require_once 'conn.php';
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username != "" && $password != ""){
		$sql = "SELECT * FROM users WHERE `name`='$username' AND `password`='$password' ";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		if (!empty($result) && $result->num_rows > 0) {
			$_SESSION['user_id'] = $row['user_id'];
			$_SESSION['user_email'] = $row['email'];
			$_SESSION['user_phone'] = $row['phone'];
			echo "success";
		} else {
			echo "username and password is error";
		}
	} else{
		echo "username and password is required";
	}
?>