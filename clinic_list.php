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
			<h3 style="color: white; float: left">Clinic_list</h3>
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
		<div class="content" style="padding:19px 10px;">
            <table>
                <tr>
                    <th style="width:10%;">No</th>
                    <th style="width:30%;">Name</th>
                    <th style="width:10%;">Distance</th>
                    <th style="width:30%;">Adress</th>
                    <th style="width:20%;">Phone</th>
                </tr>
            <?php 
                $sql = "SELECT * FROM cliniclists";
                $result = $conn->query($sql);
                if (!empty($result) && $result->num_rows > 0) {
                    // echo $row;
                    $cnt = 0;
                    while($row = $result->fetch_assoc()) {
                        $cnt++;
            ?>
                    <tr>
                        <td><?php echo $cnt; ?></td>
                        <td><?php echo $row['clinic_name']; ?></td>
                        <td><?php echo $row['clinic_distance']; ?></td>
                        <td><?php echo $row['clinic_address']; ?></td>
                        <td><?php echo $row['clinic_phone']; ?></td>
                    </tr>
                        
            <?php
                    }
                } else {
                    echo "There is no data";
                }
            ?>
            </table>
		</div>
		<div class="home-footer">
		</div>
	</div>
	<script src="./js/global.js"></script>
</body>
</html>