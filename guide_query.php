<?php
	require_once 'conn.php';

    $sql = "SELECT * FROM guides";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if (!empty($result) && $result->num_rows > 0) {
        if(!empty($_POST['guide_type']) && $_POST['guide_type'] == 'tip') {
            echo $row['guide_tip'];
        } else {
            echo $row['guide_nutrition'];
        }
    } else {
        echo "There are no archived materials.";
    }
	
?>