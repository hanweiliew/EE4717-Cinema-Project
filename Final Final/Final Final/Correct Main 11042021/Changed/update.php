
<?php
	function compare($seatid){
		$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");
		$sql = "SELECT ticket_seat from f32ee.cinema1;";
		$result = mysqli_query($conn, $sql);

			/* fetch associative array */
			while ($row = mysqli_fetch_assoc($result)) {
				if($row["ticket_seat"] == $seatid)
				{echo "disabled";}
			}
	}
?>