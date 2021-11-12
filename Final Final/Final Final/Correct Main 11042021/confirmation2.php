<html>
	<head>
		<link rel="stylesheet" href = "style.css">

		<script src = "js/slidingslide.js"></script>
		<title> | LiewTiahCinema | </title>
	</head>	
	

<body>
	<!------------Nav Bar ---------->
	<section id="nav-bar">
	  <nav class="navbar">
		<a class="navbar-brand" href="home.php"><img src="Logo.jpg"></a>
			<ul class = "navbar-nav">	
				<li class = "nav-item">
					<a class="nav-link" href="home.php">HOME</a>
				</li>
				<li class="nav-item">
						<a class="nav-link" href="contactus.html">CONTACT US</a>
				</li>
			</ul>
		</nav>
	</section>
<?php
//Ensure that database connection is good before any code is executed. 
$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	return;
}	
	$selectedSeats = preg_split ("/\,/", $_GET["seats"]); 
	if($selectedSeats == NULL){
		mysqli_close($conn);
	}
	$array = array();
 $i = 0;
foreach ($selectedSeats as $seat) {
	
  $array[$i] = $seat; 
	$i++;
}
$quanSeats = 0;
$quanSeats = count($array);

if($quanSeats == 0 ) {
	echo "Select choose your seatings before submitting.<br>";
	return;
}

if($quanSeats > 0 ){
	updateOrderTable($quanSeats,2,$quanSeats*13.5);
	foreach ($selectedSeats as $seat){	
			updateSeatTable(getOrderID($abcd),$seat,2);
	}

	updateSalesTable(getCurrentTotals(2) + ($quanSeats * 13.5),2);
	$totalprice = $quanSeats * 13.5;
}
mysqli_close($conn);
function getOrderID($abcd){
	$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");
	
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		return;
	}
	$sql = "SELECT * FROM f32ee.cinema_orders ORDER BY order_id DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row[order_id];
}	
function updateOrderTable($quantity,$ticket_id,$current) {
	$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");
	
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		return;
	}
	$sql = "INSERT INTO f32ee.cinema_orders (ticket_id, quantity,current_sale) VALUES ($ticket_id, $quantity,$current);";
	if (!mysqli_query($conn, $sql)) {
		echo "Failed to update database: " . mysqli_error($conn);
		mysqli_close($conn);
	}
}
function updateSeatTable($orderid,$seats,$ticket_id ) {
	$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");
	
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		return;
	}
	$sql = "INSERT INTO f32ee.cinema2 (order_id,ticket_id, ticket_seat) VALUES ($orderid,$ticket_id,'$seats');";
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
	<script type = "text/javascript" src = "validation.js"></script>
</head>

<body>
	
	<h1 style = "text-align:center;">Order Summary</h1>
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
				<th>SpiderMan</th>
				<th><?php $i=0;
				$array = array();
				foreach ($selectedSeats as $seat) {
				$array[$i] = $seat; 
				echo "$array[$i]";
				echo " ";		
				$i++;
				
				}?></th>
				<th>$ 13.50</th>
				<th><?php echo "$quanSeats"?></th>
				<th><?php echo "$totalprice"?></th>
			</tr>


		</table>
	
	
	</div>
	</h3>
	
	<div class = "center" style = "width: fit-content";>
	<form action="finalconfirmation2.php" method="post" class="finalconfirm">
	
		<div>
			<label for="name">Name</label><br>
			<input type="text" id="finalname" name="finalname" style="width:200px;padding:10px;" onchange="validateName()" placeholder="Tan Ah Kow" required />
        </div>
		<div>
			<label for="contact">Contact Number</label><br>
			<input type="tel" id="finalcontact" name="finalcontact" style="width:200px;padding:10px;" onchange="validateContact()" placeholder="98764532" required />
        </div>
		<div>
			<label for="email">Email address</label><br>
			<input type="email" id="finalemail" name="finalemail" style="width:200px;padding:10px;" onchange="validateEmail()" placeholder="abc@abc.com" required />
        </div>	
		
		
		<button type="submit" class="submitbutton">Confirm</button>
	</form>	
	
	</div>










</body>


<footer><br>Copyright &copy; 2021 LiewTiahCinema<br>
    <a href="mailto:Hanwei@Liew.com">Hanwei@Liew.com</a>
</footer>
</html>