<?php
	
		$sql = "SELECT * FROM cliniclists";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		if (!empty($result) && $result->num_rows > 0) {
            // echo $row;
            $data = array(array());
            while($row = $result->fetch_assoc()) {
                
            }
		} else {
			echo "There is no data";
		}
?>