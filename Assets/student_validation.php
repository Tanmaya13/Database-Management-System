<?php

$servername = "localhost:3308";
$username = "root";
$password = "";
$db = "tanmaya";

$mysqli = new mysqli($servername, $username,
				$password, $db);

if ($mysqli->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sic=$_POST['sic'];
$pwd=$_POST['password'];

$sql = "SELECT password FROM student where sic = '$sic'";
$result_stud = $mysqli->query($sql);
echo $result_stud;


$mysqli->close();
?>