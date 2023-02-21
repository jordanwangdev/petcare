<?php
	require 'conn.php';
	session_start();

	if(!ISSET($_SESSION['user_id'])){
		header('location:index.php');
	}
?>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/custom.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	</head>
<body>
	<div class="app-well app-size bg-home">
		<div class="home-header">
			<h3 style="color: white; float: left">Pet care guide</h3>
			<div class="dropdown section">
				<div class="dropdown-toggle section-btn" data-toggle="dropdown">☰</div>
				<ul class="dropdown-menu" style="left:auto; right:0; min-width:auto;">
				<li><a href="./petinfo.php" id="petinfo">Set pet info</a></li>
					<li><a href="./guide.php" id="guide">Pet care guide</a></li>
					<li><a href="./schedule.php" id="schedule">Schedule</a></li>
					<li><a href="./clinic_list.php" id="help">clinic_list</a></li>
					<li><a href="./logout.php">Logout</a></li>
				</ul>
			</div>

		</div>
		<div class="content">
			<div style="text-align:center;"><img src="./img/dog.png" style="width:200px; height:200px;"></div>
			<div class="guide-content">Nutrition: 
                <?php 
					require 'guide_query.php'; 
				?>
            </div>
			<div class="form-group" style="display:flex; padding: 0 27px;">
				<button class="btn btn-primary form-control" id="nutrition_btn" style="margin-right:20px;">Nutrition</button>
				<button class="btn btn-primary form-control" id="tip_btn">Tips</button>
            </div>
		</div>
		<div class="home-footer">
		</div>
	</div>
	<script src="./js/global.js"></script>
</body>
</html>