<?php include "..\..\datalayer\bookserver.php"; ?>


<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <link rel="stylesheet" href="style5.css">
        <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>

    </head>

<header>
	<h1>Doctor<span>Patient</span></h1>
		<div class="navbar">
		<ul> 
		
			<li><a href="index3.php">Add/Delete Doctor</a></li>
			<li><a class="active" href="viewdoctor.php">View Doctors</a></li>
			<li><a href=" viewpatients.php">View Patients</a></li>
			<li><a href="viewappointments.php">View Appointments</a></li>
			<li><a href="feedback.php">FeedBack</a></li>

			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>

		</ul>
	</div>




</header>

<body>
	<h1 style="margin-left:35% ;margin-top:80px"   class="asd">Doctors Information</h1>

	<table class="table5" style="background-color: white;">
		<tr>
		<th>Doctor ID</th>
		<th>Doctor Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Password</th>
		<th>Category</th>

		</tr>

		<?php $sql3="SELECT  * FROM  doctor " ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["DoctorID"]."</td><td>".$row3["Doctorname"]."</td><td>".$row3["email"]."</td><td>".$row3["Address"]."</td><td>".$row3['ContactNumber']."</td><td>".$row3['password']."</td><td>".$row3["categorey"]."</td></tr>";
			}

			echo "</table";
	
		}

		?>
		
	</table>
</body>
</html>