<?php
	$servername = "localhost:3308";
	$username = "root";
	$password = "";
	$dbname = "tanmaya";
	
	$sic = $_POST["sic"];
	$name = $_POST["name"];
	$pw = $_POST["password"];
	$email = $_POST["email"];
	$branch = $_POST["branch"];
	$sem = $_POST["semester"];
	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO student (sic, name, password, email, branch, semester)
	VALUES ('$sic', '$name', '$pw', '$email', '$branch', '$sem')";

	if ($conn->query($sql) === TRUE) {
	  header("Location: index.php");
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>

