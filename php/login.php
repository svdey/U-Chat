<?php
include("../db/db.php");

$email= $_POST["email"];
$pass = md5($_POST['pass']);


$sql= "SELECT * FROM login WHERE email = '$email' AND password = '$pass' ";
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if ($count == 1 && $check["status"] == 0) {
	session_start();
	$_SESSION['$email'] =$check["email"];
	$_SESSION['$name']=$check["name"];
	$_SESSION['$status']=$check["status"];
	// header('location:../verify.php');
	mysqli_close($conn);
	echo "login";
}else if ($count == 1 && $check["status"] == 1) {
	session_start();
	$_SESSION['$email']=$check["email"];
	$_SESSION['$name']=$check["name"];
	$_SESSION['$status']=$check["status"];
	mysqli_close($conn);
	echo "user";
}else if ($count == 1 && $check["status"] == 2) {
	session_start();
	$_SESSION['$email']=$check["email"];
	$_SESSION['$name']=$check["name"];
	$_SESSION['$status']=$check["status"];
	mysqli_close($conn);
	echo "admin";
}
else{
	echo "email or password not valid";
}
?>