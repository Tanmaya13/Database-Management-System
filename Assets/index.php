<?php

$user = 'root';
$password = '';

$database = 'tanmaya';

$servername='localhost:3308';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}


$sql = "SELECT * FROM student ORDER BY sic";
$result_stud = $mysqli->query($sql);
$sql = "SELECT * FROM faculty ORDER BY fic";
$result_fac = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Faculty Student Database</title>
	
</head>
<body>
    <header class="header">
        <div class="mid">
			<div class="navbar">
				<a href="studentlogin.html">Student Login</a> 
  
				  <a href="facultylogin.html">Faculty Login</a>
				  
				  <a href="searchstudent.html">Browse Student</a>
				  
				  <a href="searchfaculty.html">Browse Faculty</a>
  
			</div>
        </div>
		
    </header>
	<p></p><br>
	<center><h1>STUDENT FACULTY DATABASE</h1></center>
    <table>
        <tr>
            <td class="table-left">
            <div class = container-multi>
                <div class="table">
                <center><h4><b>Student</b></h4></center><br>
                    <table>
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
                    </table>  
                </div>
            </td>
            <td class="table-right">
                    <div class="table">
                    <center><h4><b>Faculty</b></h4></center><br>
                    <table>
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
                    </table>
                </div>
            </div>           
            </td>
        </tr>
    </table>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>