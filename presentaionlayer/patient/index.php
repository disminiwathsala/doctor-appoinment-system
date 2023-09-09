
<?php include ('..\..\datalayer\server.php'); ?>

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
			<li><a class="active" href=" index.php">MyInfo</a></li>
			<li><a href=" book.php">Book Appointment</a></li>
			<li><a href=" view.php">View Appointment</a></li>
			<li><a href="cancel.php">Cancel Booking</a></li>
			<li><a href=" searchdoctor.php">Search Doctor</a></li>
			
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
			
		</ul>
</div>

</header>
<body >
		<div class="headerP" style="width: 40%; margin-top: 60px; color: white; background: #39ca74; text-align: center; 
		border-radius: 10px 10px 0px 0px; border-bottom: none; border :1px solid #39ca74; padding: 10px; margin-left:10px   ">
	<h2>My Information</h2>
</div>

<form method="post" action="index.php"  class="infoP" style="margin-left:10px; margin-top:0px ;width: 40%; 
padding: 20px;border :3px solid #39ca74 ; background: white; border-radius: 0px 0px 10px 10px;">

<div class="contentP" style="font-weight: bold;">

	<label>ID:  <?php echo $col['UserID']; ?></label>

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
	 	   <label> Gender : <?php echo $col['Gender']; ?></label>
	 	   	 	   <br>
	 	   <br>

	 	   </div>
    
	 		<div class="input-group">
				<button type="submit" name="treatmentHistory" class="btnx" style=" border-radius: 5px;margin-left: 0%; backround-color:white; border:none;padding: 10px 20px 10px 20px">MyTreatment History</button>
			</div>

			<div class="input-group">
				<button type="submit" name="feedback" class="btnx" style=" border-radius: 5px;margin-left: 0%; 
				border:none; padding: 10px 30px 10px 30px">Send Feedback</button>
			</div>

  
</form>

	<?php  


	  if (isset($_POST['feedback'])) {
?>
<form1 method="post" action="index.php" class="infoP" style="margin-left:500px; margin-top:0px ;width: 40%">

<div class="input-group">
	
		<div  class="header" style="width: 499px; height: 50%; margin-top:-550px;
		color: white; background: #39ca74; text-align: center; border-radius: 10px 10px 0px 0px; 
		border-bottom: none; border :1px solid #39ca74; padding: 10px 13px 10px 13px; margin-left:60%  ">

	<h2>Feed Back</h2>
</div>
<textarea name="feedx" placeholder="Write something.." style="height:300px;width: 499px ; 
margin-top:0px; align-items: center; padding: 5px 10px; margin-left: 60%; border:2px solid #39ca74; 
border-radius: 0px 0px 10px 10px;" ></textarea>

<button type="submit" name="sendfeedback" class="btn" style=" border-radius: 10px; margin-left: 60%; 
margin-top: 1px; border:1px solid #80DA9D ;padding: 10px 230px 10px 230px ; text-align: center;" >Send</button>

</div>

 <?php  }
 

?>
</form>

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

        $Patientsearch = mysqli_real_escape_string($mysqli,$_POST['Patientsearch']);
	
	$query="SELECT * FROM patients WHERE UserID=('$Patientsearch')";
	$result2=mysqli_query($mysqli,$query);

   
        <!-- information of the user logged in -->
        <!-- welcome message for the logged in user -->