<?php
//Ensure that database connection is good before any code is executed. 
$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	return;
}	

$selectedSeats = preg_split ("/\,/", $_GET["seats"]); 
$array = array();
 $i = 0;
foreach ($selectedSeats as $seat) {
	
  $array[$i] = $seat; 
	$i++;
}
$quanSeats = count($array);

if($quanSeats == 0 ) {
	echo "Select choose your seatings before submitting.<br>";
	return;
}

if($quanSeats > 0){
	var_dump($quanSeats);
	foreach ($selectedSeats as $seat){	
		updateOrderTable(1,$seat,1);
		updateSeatTable($seat,1);
	}
	updateSalesTable(getCurrentTotals(1) + ($quanSeats * 13.5),1);
	$totalprice = $quanSeats * 13.5;
}
mysqli_close($conn);

function updateOrderTable($quantity,$seats,$ticket_id ) {
	$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");
	
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		return;
	}
	$sql = "INSERT INTO f32ee.cinema_orders (ticket_id, quantity,ticket_seat) VALUES ($ticket_id, $quantity,'$seats');";
	if (!mysqli_query($conn, $sql)) {
		echo "Failed to update database: " . mysqli_error($conn);
		mysqli_close($conn);
	}
}
function updateSeatTable($seats,$ticket_id ) {
	$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");
	
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		return;
	}
	$sql = "INSERT INTO f32ee.cinema1 (ticket_id, ticket_seat) VALUES ($ticket_id,'$seats');";
	if (!mysqli_query($conn, $sql)) {
		echo "Failed to update database: " . mysqli_error($conn);
		mysqli_close($conn);
	}
}
	
function getCurrentTotals($ticket_id) {
	$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		return;
	}
	$sql = "SELECT totals FROM f32ee.cinema_total_sales WHERE ticket_id = $ticket_id;";
	if (!$result = mysqli_query($conn, $sql)) {
		echo "Failed to get totals for Movies $ticket_id : " . mysqli_error($conn);
	}
	$result = mysqli_fetch_row($result);
	return $result[0];
}
function updateSalesTable($total, $ticket_id) {
	$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		return;
	}

	$sql = "UPDATE f32ee.cinema_total_sales SET totals = $total WHERE ticket_id = $ticket_id;";
	if (!mysqli_query($conn, $sql)) {
		echo "Failed to update value for ticket id $ticket_id : " . mysqli_error($conn);
	}
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Movie Seat Booking</title>
    <link rel="stylesheet" href="stylesheet.css">
	<script type="text/javascript" src="script.js"></script>
</head>

<body>
	
	<h3>
	<div class="confirmtable" border="1">
		<table>
			<tr>
				<th>Ticket</th>
				<th>Seating</th>
				<th>Price</th>
				<th>Qty</th>
				<th>Sub-Total</th>
			</tr>
			<tr>
				<th>Venom</th>
				<th>$selectedSeats</th>
				<th>$ 13.50</th>
				<th>$quanSeats</th>
				<th>$totalprice</th>
			</tr>


		</table>
	
	date_default_timezone_set("Asia/Singapore");
	echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";
	
	</div>
	</h3>
</body>


<footer><br>Copyright &copy; 2021 LiewTiahCinema<br>
    <a href="mailto:Hanwei@Liew.com">Hanwei@Liew.com</a>
</footer>
</html>