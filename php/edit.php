<?php
include("../db/db.php");
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$status = $_POST['status'];
	
$edit = mysqli_query($conn,"update login set name='$name', email='$email', status='$status' where id='$id'");
if($edit)
    {
        mysqli_close($conn);
        echo "success";
        exit;
    }
    else
    {
        echo mysqli_error();
    }
?>