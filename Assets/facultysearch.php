<?php
$search = $_POST['search'];

$servername = "localhost:3308";
$username = "root";
$password = "";
$db = "tanmaya";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from faculty where name = '$search'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["fic"]."  ".$row["name"]."  ".$row["email"]."  ".$row["subject"]."<br>";
}
} else {
	echo "no records found";
}

$conn->close();

?>