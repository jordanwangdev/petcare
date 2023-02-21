<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="css/custom.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
	<div class="well app-size bg-login">
		<h3 style="color: white">Login</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div style="text-align:center;height:300px;"><img src="./img/man.png" style="width:300px; height:212px;margin-top:54px;"></div>
		<div>
			<h4 class="text-primary err_msg" >Login here...</h4>
			<hr style="border-top:1px groovy #000;">
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="username" id="username"/>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password" id="password"/>
			</div>
			<br />
			<div class="form-group">
				<button class="btn btn-primary form-control" name="login" id="login">Login</button>
			</div>
			<a href="registration.php">registeration</a>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="./js/auth.js"></script>
</body>
</html>