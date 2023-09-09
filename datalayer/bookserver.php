<?php  

$errors=array();
include ('server.php');

$mysqli = new mysqli("localhost","root","","registration");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

if (isset($_POST['Book'])) {

	$AppoID = 	$mysqli -> real_escape_string($_POST['AppoID']);
	$Date 	=	 $mysqli -> real_escape_string($_POST['Date']);
	$Time 	= 	$mysqli -> real_escape_string($_POST['Time']);
	
	if (empty($AppoID)) {
	array_push($errors,"Appointment ID is required");
}

if (empty($Date)) {
	array_push($errors,"Date is required");
	# code...
}

if (empty($Time)) {
	array_push($errors,"Time is required");
	# code...
}

if(count($errors)==0){

    $docID = $_REQUEST['docID'];
	$sql = "INSERT INTO  bookapp (AppoID, Date, Time, patientID,docID) VALUES ('$AppoID','$Date','$Time','$userprofile','$docID') ";
	$result99=$mysqli ->query($sql);

		if ($result99) {
  printf("%d Booked .\n", $mysqli->affected_rows);

}

	elseif (!$mysqli -> query($sql)) {
  printf("%d Can't Book At The Moment.\n", $mysqli->affected_rows);
	 } 
	  $_SESSION['AppoID']=$AppoID;
  $_SESSION['success']="you are now logged in";
  header('location:book.php');

}

}

if (isset($_POST['cancel'])) {

		$AppoID2 =$mysqli -> real_escape_string($_POST['AppoID2']);

	if (empty($AppoID2)) {
	array_push($errors,"Appointment ID is required");
}
 if (count($errors)==0) {
 
	$query5="DELETE FROM bookapp WHERE AppoID='$AppoID2' AND patientID=('$userprofile') ";
	if ($mysqli -> query($query5)) {

		if ($mysqli->affected_rows==0) {
			 array_push($errors,"Wrong Appointment ID");
			
			# code...
		}

	}
	  else {
	  
	  echo 'Book is Canceled';
	  
	  }

}
}

if(isset($_POST['Add'])) {

    // Retrieve form data
    $doctorID = $_POST['addID'];
    $doctorName = $_POST['addname'];
    $address = $_POST['addAddress'];
    $contactNumber = $_POST['addContactNumber'];
    $email = $_POST['addEmail'];
    $password = $_POST['addpassword'];
    $category = $_POST['addcategory'];

    // Validate form data
    if(empty($doctorID)) {
        array_push($errors, "Doctor ID is required");
    }
    if(empty($doctorName)) {
        array_push($errors, "Doctor name is required");
    }
    if(empty($address)) {
        array_push($errors, "Address is required");
    }
    if(empty($contactNumber)) {
        array_push($errors, "Contact number is required");
    }
    if(empty($email)) {
        array_push($errors, "Email address is required");
    }
    if(empty($password)) {
        array_push($errors, "Password is required");
    }

    // If there are no validation errors, insert data into database
    if(count($errors) == 0) {
        $sqladd= "INSERT INTO `doctor` (`DoctorID`, `Doctorname`, `email`, `Address`, `ContactNumber`, `password`, `categorey`) VALUES ('$doctorID', '$doctorName', '$email', '$address', '$contactNumber', '$password', '$category')";
	$mysqli -> query($sqladd);
        // Redirect to success page
        header('location: index3.php');
    }
}

if (isset($_POST['Delete'])) {

		$deleteID =$mysqli -> real_escape_string($_POST['deleteID']);

	if (empty($deleteID)) {
	array_push($errors,"Doctor ID is required");
}
 if (count($errors)==0) {
 
	$querydelete="DELETE FROM doctor WHERE DoctorID='$deleteID' ";
	if ($mysqli -> query($querydelete)) {

		if ($mysqli->affected_rows==0) {
			 array_push($errors,"Wrong Doctor ID");
			
			# code...
		}
	
	}
	  else {
	  
	  echo 'Book is Canceled';

	  }

	}
}

?>

<!-- $query1="SELECT categorey FROM doctor";
   $result1= mysqli_query($mysqli, $query1);
   $opt="<select name='Categorey'>";
   while ($row= mysqli_fetch_assoc($result1)) {
   	$opt.="<option value ='{$row['categorey']}'>{$row['categorey']}</option>";
   }
   	$opt.="</select>";
  
   }

}
-->


