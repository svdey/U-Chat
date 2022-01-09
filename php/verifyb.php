<?php
include("../db/db.php");

$code= $_POST["code"];
session_start();
$email = $_SESSION['$email'];

$sql= "SELECT * FROM login WHERE email  = '$email'";
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

$vkey = $check["vkey"];
if ($code == $vkey) {
	$sql2 ="UPDATE login SET status=1 WHERE vkey = '$vkey'";
	$up = mysqli_query($conn,$sql2);
	mysqli_close($conn);
		echo "user";
}
else{
	echo "code not valid!!";
}	
?>