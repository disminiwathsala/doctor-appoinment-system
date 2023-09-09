
<?php include ('../../datalayer/server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet"  href="style2.css">
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Doctor<span>Patient</span></h1>
		<div class="navbar">	
		<ul> 
			<li><a href=" index.php">MyInfo</a></li>
			<li><a href=" book.php">Book Appointment</a></li>
			<li><a href=" view.php">View Appointment</a></li>
			<li><a href="cancel.php">Cancel Booking</a></li>
			<li><a href=" searchdoctor.php">Search Doctor</a></li>

			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
			
		</ul>
</div>

</header>
<body >
		<div class="headerP" style="width: 40%;margin-top: 60px;color: white;background: #39ca74;
		text-align: center; border-radius: 10px 10px 0px 0px;border-bottom: none; border :1px solid #39ca74;
		padding: 10px; margin-left:10px   ">
	<h2>My Information</h2>
</div>

<form method="post" action="myinfo.php" class="infoP" style="margin-left:10px; margin-top:0px ;
width: 40%;padding: 20px;border :3px solid #39ca74 ;background: white; border-radius: 0px 0px 10px 10px;">


<div class="contentP" style="font-weight: bold;">


	<label>ID: <?php echo "" .$_SESSION["UserID"];?></label>

	 	   <br>
	 	   <br>
	 	   <label> Email : <?php echo $col['Email']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Name : <?php echo $col['Name']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Address : <?php echo $col['Address']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Contact Number : <?php echo $col['ContactNumber']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Blood Type : <?php echo $col['Bloodtype']; ?></label>
	 	   	 	   <br>
	 	   <br>

	 	   	<div class="input-group">
		<button type="submit" name="treatmentHistory" class="btn">My Treatment History</button>
	</div>
	 	   	
</div>

  
</form>


<?php  if (isset($_POST['treatmentHistory'])) {
			 ?>
		
         	<table class="table2">
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="mys">Treatment History</caption>
		<tr>
		<th>DoctorID</th>  ?>
		<th>DoctorName</th>
		<th>Treatment</th>
		<th>Doctor's Note</th>	


		</tr> 
		
		<?php

		$PID =$mysqli -> real_escape_string($_POST['UserID']);

		$sqlP2="SELECT  * FROM  description   WHERE descID=('$PID') OR descName=('$PID') " ;
		$resultP2=$mysqli->query($sqlP2);
		if(mysqli_num_rows($resultP2)>1){
			while ($rowP2=$resultP2->fetch_assoc()) {

				echo "<tr><td>".$rowP2["descID"]."</td><td>".$rowP2["descName"]."</td><td>".$rowP2["treatment"]."</td><td>".$rowP2['Note']."</td></tr>";
			}


			echo "</table";
	


		}
	}?>

 </table>









 












	






</body>
</html>

<!--<?php if (isset($_SESSION['success'])) : ?> 
            <div class="error success" > 
                <h3> 
                    <?php
                         
                        unset($_SESSION['success']); 
                    ?> 
                </h3> 
            </div> 
        <?php endif ?> 
   
        <!-- information of the user logged in -->
        <!-- welcome message for the logged in user -->