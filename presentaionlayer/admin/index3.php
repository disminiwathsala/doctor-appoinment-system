<!-- Backend  -->
<?php include('..\..\datalayer\bookserver.php') ?>
<!-- Backend  -->

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <link rel="stylesheet" href="style2.css">
        <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>

    </head>

<header>
	<h1>Doctor<span>Patient</span></h1>
		<div class="navbar">
		<ul> 
			<li><a class="active" href="index3.php">Add/Delete Doctor</a></li>
			<li><a href="viewdoctor.php">View Doctors</a></li>
			<li><a href=" viewpatients.php">View Patients</a></li>
			<li><a href="viewappointments.php">View Appointments</a></li>
			<li><a href="feedback.php">FeedBack</a></li>

  			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
		</ul>
</div>

</header>
<body>

		<div class="headerA">
			<h2>Add Doctor</h2>
		</div>

<form method="post" action="index3.php">

	<?php include ('..\..\datalayer\errors.php'); ?>
                            
	<div class="input-groupA">
		<input type="text" name="addID" placeholder="Doctor ID">
	</div>

	<div class="input-groupA">
		<input type="text" name="addname" placeholder="Doctor Name">
	</div>

	<div class="input-groupA">
		<input type="text" name="addAddress" placeholder="Address">
	</div>

	<div class="input-groupA">
		<input type="text" name="addContactNumber" placeholder="Contact Number">
	</div>

	<div class="input-groupA">
		<input type="text" name="addEmail" placeholder="Email Address">
	</div>


	<div class="input-groupA">
		<input type="password" name="addpassword" placeholder="Password">
	</div>

<div class="input-groupAA" >
	<label>Category</label>
	   	<select name="addcategory" class="xd">
	   		<option value="bone" >bones</option>
	   		<option value="heart">heart</option>
	   		<option value="Dentistry">Dentistry</option>
	   		<option value="MentalHealth">Mental Health</option>
	   		<option value="Surgery">Surgery</option>

	   	</select>
	   	</div>

	<div class="btn-field">
		<button type="submit" name="Add" class="btnA">Add Doctor</button>
	</div>

</form>
	<div class="headerAD">
	<h2>Delete Doctor</h2>
</div>

	<form method="post" action="index3.php" class="delete">

		<div class="input-groupA">
			<input type="text" name="deleteID" placeholder="Doctor ID">
		</div>

		<div class="btn-field">
			<button type="submit" name="Delete" class="btnA">Delete</button>
		</div>

	</form>

	</body>

</html>