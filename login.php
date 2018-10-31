<?php
	$host = 'localhost';
	$dbusername = 'root';
	$dbPassword  = '';
	$dbname = 'project';
	$conn = mysqli_connect($host,$dbusername,$dbPassword,$dbname);
	$username =  $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
if ($conn)
	echo'connected successfully';
$sql = "insert into users(name,email,password) values('$username','$email','$password')";
$query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	if ($query)
	header('Location: second.php');
?>
