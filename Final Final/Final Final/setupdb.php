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

	$sql = "use f32ee";
	if (!mysqli_query($conn, $sql)) {
		echo "Failed to switch tables, check use statement.";
		mysqli_close($conn);
	}
	 //Change Make Ticket ID the Selector.
		$sql = "CREATE TABLE IF NOT EXISTS cinema_movies (
		ticket_id INT UNSIGNED PRIMARY KEY,  
		ticket_name VARCHAR(30) NOT NULL,
		ticket_price DOUBLE NOT NULL
		)";
		if (!mysqli_query($conn, $sql)) {
			echo "Error creating Movies table: " . mysqli_error($conn);
			mysqli_close($conn);
		}
		
		$sql = "CREATE TABLE IF NOT EXISTS customer_enquiry (	
			customer_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			customer_name VARCHAR(30) NOT NULL,
			customer_phone INT UNSIGNED,
			customer_message VARCHAR(30) NOT NULL
			
			)";

		if (!mysqli_query($conn, $sql)) {
			echo "Error creating Customer table: " . mysqli_error($conn);
			mysqli_close($conn);
		}



		$sql = "CREATE TABLE IF NOT EXISTS cinema_orders (	
			order_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			ticket_id INT UNSIGNED,
			quantity INT,
			current_sale DOUBLE,
			FOREIGN KEY (ticket_id) REFERENCES cinema_movies(ticket_id)
			)";

		if (!mysqli_query($conn, $sql)) {
			echo "Error creating Orders table: " . mysqli_error($conn);
			mysqli_close($conn);
		}

		$sql = "CREATE TABLE IF NOT EXISTS cinema_total_sales (
										  ticket_id INT UNSIGNED PRIMARY KEY, 
										  totals DOUBLE,
										  FOREIGN KEY (ticket_id) REFERENCES cinema_movies(ticket_id)
										  )";
		if (!mysqli_query($conn, $sql)) {
			echo "Error creating Total sales table: " . mysqli_error($conn);
			mysqli_close($conn);
		}
		$sql = "CREATE TABLE IF NOT EXISTS cinema1(
											order_id INT UNSIGNED ,
											ticket_id INT UNSIGNED,
											ticket_seat VARCHAR(30),
											FOREIGN KEY (ticket_id) REFERENCES cinema_movies(ticket_id))";
		if (!mysqli_query($conn, $sql)) {
			echo "Error creating Total sales table: " . mysqli_error($conn);
			mysqli_close($conn);
		}
				$sql = "CREATE TABLE IF NOT EXISTS cinema2(
											order_id INT UNSIGNED ,
											ticket_id INT UNSIGNED,
											ticket_seat VARCHAR(30),
											FOREIGN KEY (ticket_id) REFERENCES cinema_movies(ticket_id))";
		if (!mysqli_query($conn, $sql)) {
			echo "Error creating Total sales table: " . mysqli_error($conn);
			mysqli_close($conn);
		}
				$sql = "CREATE TABLE IF NOT EXISTS cinema3(
											order_id INT UNSIGNED ,
											ticket_id INT UNSIGNED,
											ticket_seat VARCHAR(30),
											FOREIGN KEY (ticket_id) REFERENCES cinema_movies(ticket_id))";
		if (!mysqli_query($conn, $sql)) {
			echo "Error creating Total sales table: " . mysqli_error($conn);
			mysqli_close($conn);
		}
		$sql = "CREATE TABLE IF NOT EXISTS final_confirmation (	
			final_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			final_name VARCHAR(30) NOT NULL,
			final_phone INT UNSIGNED,
			final_email TEXT(30) NOT NULL
			)";

		if (!mysqli_query($conn, $sql)) {
			echo "Error creating final confirmation table: " . mysqli_error($conn);
			mysqli_close($conn);
		}


			$sql = "INSERT INTO cinema_movies (ticket_id, ticket_name, ticket_price)
			VALUES (1, 'Venom', 13.50);";
			$sql .= "INSERT INTO cinema_movies (ticket_id, ticket_name, ticket_price)
			VALUES (2, 'Spiderman', 13.50);";
			$sql .= "INSERT INTO cinema_movies (ticket_id, ticket_name, ticket_price)
			VALUES (3, 'Avengers', 13.50);";

			$sql .= "INSERT INTO cinema_total_sales (ticket_id, totals)
			VALUES (1, 0.0);";
			$sql .= "INSERT INTO cinema_total_sales (ticket_id, totals)
			VALUES (2, 0.0);";
			$sql .= "INSERT INTO cinema_total_sales (ticket_id, totals)
			VALUES (3, 0.0);";

			if (!mysqli_multi_query($conn, $sql)) {
				echo "Failed to fill tables with data: " . mysqli_error($conn);
				mysqli_close($conn);
			}
			
mysqli_close($conn);
?>










