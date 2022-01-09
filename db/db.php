<?php
$server = "localhost";
$username ="usersrv";
$password ="1234";

$db = "chat";
$conn = mysqli_connect($server,$username,$password,$db);
if(!$conn)
{
echo mysqli_connect_error();
}

?>