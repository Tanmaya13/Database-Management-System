<?php
	$servername = "localhost:3308";
	$username = "root";
	$password = "";
	$dbname = "tanmaya";
	
	$fic = $_POST["fic"];
	$name = $_POST["name"];
	$pw = $_POST["password"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO faculty (fic, name, password, email, subject)
	VALUES ('$fic', '$name', '$pw', '$email', '$subject')";

	if ($conn->query($sql) === TRUE) {
	  header("Location: index.php");
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>

