<?php
$servername = "localhost";
$username = "f32ee";
$password = "f32ee";
$database = "f32ee";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);
	// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
	
		

	$cname = $_POST['name'];
	$ccontact = $_POST['contact'];
	$cmessage = $_POST['message'];
	
	
	
	$sql = "INSERT INTO f32ee.customer_enquiry (customer_id, customer_name,customer_phone,customer_message) VALUES (NULL,'$cname','$ccontact','$cmessage')";
	
	if (mysqli_query($conn,$sql)){
		echo "<script type='text/javascript'>alert('Successfully Submitted');</script>";
	} else{
		echo "Error: " . $sql . " " . mysqli_error($conn);
	}
	mysqli_close($conn);
	
	header("refresh:0;url=contactus.html");



	
?>
















