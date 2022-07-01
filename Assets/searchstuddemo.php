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

$sql = "SELECT * FROM student where name = '$search' or sic = '$search' or email = '$search' or branch = '$search' or semester = '$search'";
$result_stud = $mysqli->query($sql);

$mysqli->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Student Details</title>
	</head>
	<body>
		<center><table>
                        <tr>
                            <th scope="col">SIC</th>
                            <th scope="col">Name</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">BRANCH</th>
							<th scope="col">SEMESTER</th>
                        </tr>
                        
                        <?php
                            while($rows=$result_stud->fetch_assoc())
                            {
                        ?>
                        <tr>
                            <td><?php echo $rows['sic'];?></td>
                            <td><?php echo $rows['name'];?></td>
                            <td><?php echo $rows['email'];?></td>
                            <td><?php echo $rows['branch'];?></td>
							<td><?php echo $rows['semester'];?></td>
                        </tr>
                        <?php
                            }
                        ?>
        </table></center>
	</body>
</html>