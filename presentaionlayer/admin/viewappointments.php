<?php include '../../datalayer/bookserver.php'; ?>

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
			<li><a href="viewdoctor.php">View Doctors</a></li>
			<li><a href=" viewpatients.php">View Patients</a></li>
			<li><a class="active" href="viewappointments.php">View Appointments</a></li>
			<li><a href="feedback.php">FeedBack</a></li>

			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>

		</ul>
</div>
</header>

<body>
	<h1 style="margin-left:40% ;margin-top:80px"   class="asd"> Appointments </h1>
	<table class="table4" style="background-color: white;">
		<tr>
		<th>Appointments ID</th>
		<th>Doctor ID</th>
		<th>Patient ID</th>
		<th>Date</th>
		<th>Time</th>
		
		</tr>

		<?php $sql3="SELECT  * FROM  bookapp " ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["AppoID"]."</td><td>".$row3["docID"]."</td><td>".$row3["patientID"]."</td><td>".$row3["Date"]."</td><td>".$row3['Time']."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>
	   <h1 style="margin-left:37% ;margin-top:50px"   class="asd">Send Confirmation Email </h1>

    <form role="form" method="post" enctype="multipart/form-data" class="form1" style="width: 100%;  border-radius: 0px;
	margin-top:120px; margin-left: 0px;">

    
    <div classs="xa" style="margin: 0px 20px 0px 50px;" >
        <label for="email" style="width:40px;">Email</label>
		
        <input type="email"  id="email" name="email" maxlength="50" style="width:400px; border-radius: 3px; border: 0;  
		outline: 0; padding: 18px 15px; background: transparent; background: #eaeaea; border-radius: 3px;
		align-items: center; overflow: hidden; max-height: 65px; margin: 15px 0; transition: max-height 0.5s;"  placeholder="XAXAXA@gmail.com">
        
        <label for="subject" style="margin:10px ;display: inline-block;">Subject</label>
        <input type="text"  id="subject" name="subject" maxlength="50" style="width:400px; background: transparent; background: #eaeaea; border-radius: 3px;
		align-items: center; overflow: hidden; max-height: 65px; margin: 15px 0; transition: max-height 0.5s;" placeholder="Appointment Confirmation">
		<br>
        
        <label for="name" style="margin:0px ;display:inline-block;" >Message</label>
        <input type="text" placeholder="this is a Confirmation email for your appointment ID:" 
		type="textarea"  id="message" name="message" rows="4" style="width:70%; height: 65px; padding-top: 10px;
		background: transparent; background: #eaeaea; border-radius: 3px;
		align-items: center; overflow: hidden; margin: 15px 0;" maxlength="2000">
               
               
        <button type="submit"  id="message" name="sendemail" 
		style="width:200px; height:30px; border-radius: 10px; border: none; cursor: pointer; transition: background 1s;
		background: #3c00a0; text-align: center; margin-left:50%; color: white ">Send
        </button>

        </div>
        </form>
    
    
    <?php 
    if (isset($_POST['sendmail'])){
        if(mail($_POST['email'], $_POST['subject'], $_POST['message'],'FROM:shafeenrock2927@gmail.com')){
            echo "success";
        }else{
            echo "failed";
        }
    }
    
    ?>
</body>
</html>