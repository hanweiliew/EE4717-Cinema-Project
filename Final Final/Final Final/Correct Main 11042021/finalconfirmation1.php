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
	
	
	
	$fname = $_POST['finalname'];
	$fcontact = $_POST['finalcontact'];
	$femail = $_POST['finalemail'];
	
	$sql = "INSERT INTO f32ee.final_confirmation (final_id, final_name,final_phone,final_email) VALUES (NULL,'$fname','$fcontact','$femail')";
	if (mysqli_query($conn,$sql)){
		
		header("Location:home.php");
	} else{
		echo "Error: " . $sql . " " . mysqli_error($conn);
	}
		
		
		$sql = "SELECT * FROM f32ee.cinema_orders ORDER BY order_id DESC LIMIT 1";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
	
	function callseats(){	
	$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");
	$sql = "SELECT  ticket_seat FROM f32ee.cinema1 WHERE order_id = (SELECT MAX(order_id) FROM f32ee.cinema1)";
		if (mysqli_query($conn,$sql)){
			$result1 = mysqli_query($conn, $sql);
			$op  = NULL;
		while($row1 = mysqli_fetch_array($result1,MYSQL_ASSOC)){
			$op = $op.$row1["ticket_seat"]." ";
		}
		return $op;
		}
		
		else{
		echo "Error: " . $sql . " " . mysqli_error($conn);
		}
	}
		
		
		$to      = 'f32ee@localhost';
		$subject = 'Booking Confirmation for Venom';
		$message = 	"Hello  ".$fname." , 
		
Upon this booking confirmation, please print the tickets at the self-service kiosk or collect them from our counters. The tickets need to be presented during entry.
					
		Cinema: LiewTiahCinema
		Movie: Venom
		Date: 12 November 2021, Friday
		Time: 4:30pm
		Tickets: ".$row['quantity']." x Tickets 
		Tickets Seating: ".callseats()."
		Total payment: $".$row['current_sale']."
Thank you for choosing LiewTiahCinema. We look forward to serve you at your cinemas.";
		
					
		$headers = 'From: LiewTiahCinema' . "\r\n" .
		'Reply-To: f32ee@localhost' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers,'-ff32ee@localhost');
		
		

	mysqli_close($conn);

?>