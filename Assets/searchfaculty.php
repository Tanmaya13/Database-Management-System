<?php

$search = $_POST['search'];

$servername = "localhost:3308";
$username = "root";
$password = "";
$db = "tanmaya";

$mysqli = new mysqli($servername, $username,
				$password, $db);

if ($mysqli->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT * FROM faculty where name = '$search' or fic = '$search' or email = '$search' or subject = '$search'";
$result_fac = $mysqli->query($sql);

$mysqli->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Faculty Details</title>
	</head>
	<body>
		<center><table>
                        <tr>
                            <th scope="col">FIC</th>
                            <th scope="col">NAME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">SUBJECT</th>
							
                        </tr>
                        
                        <?php
                            while($rows=$result_fac->fetch_assoc())
                            {
                        ?>
                        <tr>
                            <td><?php echo $rows['fic'];?></td>
                            <td><?php echo $rows['name'];?></td>
                            <td><?php echo $rows['email'];?></td>
                            <td><?php echo $rows['subject'];?></td>
                        </tr>
                        <?php
                            }
                        ?>
        </table></center>
	</body>
</html>