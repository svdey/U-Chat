<?php
include("../db/db.php");
$id = $_POST['id'];	
$edit = mysqli_query($conn,"DELETE FROM login WHERE id='$id'");
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