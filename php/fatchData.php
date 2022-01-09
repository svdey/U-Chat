<?php
header('Content-Type: application/json');
include("../db/db.php");
	$selectQuery = "SELECT * FROM login ORDER BY id ASC";
    $result = mysqli_query($conn,$selectQuery);
    if(mysqli_num_rows($result) > 0){
    	$result_array = array();
        while($row = mysqli_fetch_assoc($result)){
            array_push($result_array, $row);
        }
        mysqli_close($conn);
    }
    echo json_encode($result_array);
?>