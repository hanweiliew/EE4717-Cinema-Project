<?php
	include "update.php";
	
?>
<html>	
	<head>
		<meta charset="UTF-8">
		<title>Movie Seat Booking</title>
		<link rel="stylesheet" href="stylesheet.css">
		<link rel="stylesheet" href="style.css">
		<script type="text/javascript" src="script.js"></script>
		<script type = "text/javascript"> 		
		</script>
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
	
		<section class="top">			
			<div class="container">
				<h1 style = "font-weight:bold; font-size:40px;text-align:center; ">Avengers</h1>
				<br>
				<br>
				<div class="container1">
        <div class="col-md-3">
          <div class="single-movie">
              <div class="name">
				<img src="img3.jpg" id="poster" style = "height:440px;width:auto">
				</div>
			</div>	
		</div>
		<div class="col-md-3">
          <div class="single-movie">
              <div class="name">
				<img src="screen-thumb.png" width="300"  alt="screen" style="padding-bottom:50px;margin-left:80px;height:100px;">	
			<ol class="movieseat" style = "padding-left:120px;">
		<form action="confirmation3.php" method="get">
		<li class="row">
		  <ol class="seats" >
			&nbsp;&nbsp;A 
			<input type="checkbox" class="checkbox"id="A1" value="A1" name="seats[]" onclick="checkbox()"<?php compare3('A1')?>>
			<input type="checkbox" class="checkbox"id="A2" value="A2" name="seats[]" onclick="checkbox()"<?php compare3('A2')?>>
			<input type="checkbox" class="checkbox"id="A3" value="A3" name="seats[]" onclick="checkbox()"<?php compare3('A3')?>>
			<input type="checkbox" class="checkbox"id="A4" value="A4" name="seats[]" onclick="checkbox()"<?php compare3('A4')?>>
			<input type="checkbox" class="checkbox"id="A5" value="A5" name="seats[]" onclick="checkbox()"<?php compare3('A5')?>>
			<input type="checkbox" class="checkbox"id="A6" value="A6" name="seats[]" onclick="checkbox()"<?php compare3('A6')?>>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="checkbox" class="checkbox"id="A7" value="A7" name="seats[]" onclick="checkbox()"<?php compare3('A7')?>>
			<input type="checkbox" class="checkbox"id="A8" value="A8" name="seats[]" onclick="checkbox()"<?php compare3('A8')?>>
			<input type="checkbox" class="checkbox"id="A9" value="A9" name="seats[]" onclick="checkbox()"<?php compare3('A9')?>>
			<input type="checkbox" class="checkbox"id="A10" value="A10" name="seats[]" onclick="checkbox()"<?php compare3('A10')?>>
			<input type="checkbox" class="checkbox"id="A11" value="A11" name="seats[]" onclick="checkbox()"<?php compare3('A11')?>>
			<input type="checkbox" class="checkbox"id="A12" value="A12" name="seats[]" onclick="checkbox()"<?php compare3('A12')?>>
		  </ol>
		</li>
		<li class="row">
		  <ol class="seats" >
			&nbsp;&nbsp;B <input type="checkbox" class="checkbox"id="B1" value="B1" name="seats[]" onclick="checkbox()"<?php compare3('B1')?>>
			<input type="checkbox" class="checkbox"id="B2" value="B2" name="seats[]" onclick="checkbox()"<?php compare3('B2')?>>
			<input type="checkbox" class="checkbox"id="B3" value="B3" name="seats[]" onclick="checkbox()"<?php compare3('B3')?>>
			<input type="checkbox" class="checkbox"id="B4" value="B4" name="seats[]" onclick="checkbox()"<?php compare3('B4')?>>
			<input type="checkbox" class="checkbox"id="B5" value="B5" name="seats[]" onclick="checkbox()"<?php compare3('B5')?>>
			<input type="checkbox" class="checkbox"id="B6" value="B6" name="seats[]" onclick="checkbox()"<?php compare3('B6')?>>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="checkbox" class="checkbox"id="B7" value="B7" name="seats[]" onclick="checkbox()"<?php compare3('B7')?>>
			<input type="checkbox" class="checkbox"id="B8" value="B8" name="seats[]" onclick="checkbox()"<?php compare3('B8')?>>
			<input type="checkbox" class="checkbox"id="B9" value="B9" name="seats[]" onclick="checkbox()"<?php compare3('B9')?>>
			<input type="checkbox" class="checkbox"id="B10" value="B10" name="seats[]" onclick="checkbox()"<?php compare3('B10')?>>
			<input type="checkbox" class="checkbox"id="B11" value="B11" name="seats[]" onclick="checkbox()"<?php compare3('B11')?>>
			<input type="checkbox" class="checkbox"id="B12" value="B12" name="seats[]" onclick="checkbox()"<?php compare3('B12')?>>
		  </ol>
		</li>
		<li class="row">
			<ol class="seats" >
			&nbsp;&nbsp;C <input type="checkbox" class="checkbox"id="C1" value="C1" name="seats[]" onclick="checkbox()"<?php compare3('C1')?>>
			<input type="checkbox" class="checkbox"id="C2" value="C2" name="seats[]" onclick="checkbox()"<?php compare3('C2')?>>
			<input type="checkbox" class="checkbox"id="C3" value="C3" name="seats[]" onclick="checkbox()"<?php compare3('C3')?>>
			<input type="checkbox" class="checkbox"id="C4" value="C4" name="seats[]" onclick="checkbox()"<?php compare3('C4')?>>
			<input type="checkbox" class="checkbox"id="C5" value="C5" name="seats[]" onclick="checkbox()"<?php compare3('C5')?>>
			<input type="checkbox" class="checkbox"id="C6" value="C6" name="seats[]" onclick="checkbox()"<?php compare3('C6')?>>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="checkbox" class="checkbox"id="C7" value="C7" name="seats[]" onclick="checkbox()"<?php compare3('C7')?>>
			<input type="checkbox" class="checkbox"id="C8" value="C8" name="seats[]" onclick="checkbox()"<?php compare3('C8')?>>
			<input type="checkbox" class="checkbox"id="C9" value="C9" name="seats[]" onclick="checkbox()"<?php compare3('C9')?>>
			<input type="checkbox" class="checkbox"id="C10" value="C10" name="seats[]" onclick="checkbox()"<?php compare3('C10')?>>
			<input type="checkbox" class="checkbox"id="C11" value="C11" name="seats[]" onclick="checkbox()"<?php compare3('C11')?>>
			<input type="checkbox" class="checkbox"id="C12" value="C12" name="seats[]" onclick="checkbox()"<?php compare3('C12')?>>
			<ul class="legend">
				<li><span class="smallgreenbox">&nbsp&nbsp&nbsp&nbspSelected&nbspSeat</span></li>
			</ul>
			</ol>		
		</li>
		<li class="row">
		  <ol class="seats" >
			&nbsp;&nbsp;D <input type="checkbox" class="checkbox"id="D1" value="D1" name="seats[]" onclick="checkbox()"<?php compare3('D1')?>>
			<input type="checkbox" class="checkbox"id="D2" value="D2" name="seats[]" onclick="checkbox()"<?php compare3('D2')?>>
			<input type="checkbox" class="checkbox"id="D3" value="D3" name="seats[]" onclick="checkbox()"<?php compare3('D3')?>>
			<input type="checkbox" class="checkbox"id="D4" value="D4" name="seats[]" onclick="checkbox()"<?php compare3('D4')?>>
			<input type="checkbox" class="checkbox"id="D5" value="D5" name="seats[]" onclick="checkbox()"<?php compare3('D5')?>>
			<input type="checkbox" class="checkbox"id="D6" value="D6" name="seats[]" onclick="checkbox()"<?php compare3('D6')?>>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="checkbox" class="checkbox"id="D7" value="D7" name="seats[]" onclick="checkbox()"<?php compare3('D7')?>>
			<input type="checkbox" class="checkbox"id="D8" value="D8" name="seats[]" onclick="checkbox()"<?php compare3('D8')?>>
			<input type="checkbox" class="checkbox"id="D9" value="D9" name="seats[]" onclick="checkbox()"<?php compare3('D9')?>>
			<input type="checkbox" class="checkbox"id="D10" value="D10" name="seats[]" onclick="checkbox()"<?php compare3('D10')?>>
			<input type="checkbox" class="checkbox"id="D11" value="D11" name="seats[]" onclick="checkbox()"<?php compare3('D11')?>>
			<input type="checkbox" class="checkbox"id="D12" value="D12" name="seats[]" onclick="checkbox()"<?php compare3('D12')?>>
		  </ol>
		</li>
		<li class="row">
			<ol class="seats">
			&nbsp;&nbsp;E <input type="checkbox" class="checkbox"id="E1" value="E1" name="seats[]" onclick="checkbox()"<?php compare3('E1')?>>
			<input type="checkbox" class="checkbox"id="E2" value="E2" name="seats[]" onclick="checkbox()"<?php compare3('E2')?>>
			<input type="checkbox" class="checkbox"id="E3" value="E3" name="seats[]" onclick="checkbox()"<?php compare3('E3')?>>
			<input type="checkbox" class="checkbox"id="E4" value="E4" name="seats[]" onclick="checkbox()"<?php compare3('E4')?>>
			<input type="checkbox" class="checkbox"id="E5" value="E5" name="seats[]" onclick="checkbox()"<?php compare3('E5')?>>
			<input type="checkbox" class="checkbox"id="E6" value="E6" name="seats[]" onclick="checkbox()"<?php compare3('E6')?>>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="checkbox" class="checkbox"id="E7" value="E7" name="seats[]" onclick="checkbox()"<?php compare3('E7')?>>
			<input type="checkbox" class="checkbox"id="E8" value="E8" name="seats[]" onclick="checkbox()"<?php compare3('E8')?>>
			<input type="checkbox" class="checkbox"id="E9" value="E9" name="seats[]" onclick="checkbox()"<?php compare3('E9')?>>
			<input type="checkbox" class="checkbox"id="E10" value="E10" name="seats[]" onclick="checkbox()"<?php compare3('E10')?>>
			<input type="checkbox" class="checkbox"id="E11" value="E11" name="seats[]" onclick="checkbox()"<?php compare3('E11')?>>
			<input type="checkbox" class="checkbox"id="E12" value="E12" name="seats[]" onclick="checkbox()"<?php compare3('E12')?>>
			<ul class="legend">
				<li><span class="smallredbox">&nbsp&nbsp&nbsp&nbspReserved&nbspSeat</span></li>
			</ul>
			</ol>
		</li>
		<li class="row">
		  <ol class="seats" >
			&nbsp;&nbsp;F <input type="checkbox" class="checkbox"id="F1" value="F1" name="seats[]" onclick="checkbox()"<?php compare3('F1')?>>
			<input type="checkbox" class="checkbox"id="F2" value="F2" name="seats[]" onclick="checkbox()"<?php compare3('F2')?>>
			<input type="checkbox" class="checkbox"id="F3" value="F3" name="seats[]" onclick="checkbox()"<?php compare3('F3')?>>
			<input type="checkbox" class="checkbox"id="F4" value="F4" name="seats[]" onclick="checkbox()"<?php compare3('F4')?>>
			<input type="checkbox" class="checkbox"id="F5" value="F5" name="seats[]" onclick="checkbox()"<?php compare3('F5')?>>
			<input type="checkbox" class="checkbox"id="F6" value="F6" name="seats[]" onclick="checkbox()"<?php compare3('F6')?>>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="checkbox" class="checkbox"id="F7" value="F7" name="seats[]" onclick="checkbox()"<?php compare3('F7')?>>
			<input type="checkbox" class="checkbox"id="F8" value="F8" name="seats[]" onclick="checkbox()" <?php compare3('F8')?>>
			<input type="checkbox" class="checkbox"id="F9" value="F9" name="seats[]" onclick="checkbox()" <?php compare3('F9')?>>
			<input type="checkbox" class="checkbox"id="F10" value="F10" name="seats[]" onclick="checkbox()"<?php compare3('F10')?>>
			<input type="checkbox" class="checkbox"id="F11" value="F11" name="seats[]" onclick="checkbox()"<?php compare3('F11')?>>
			<input type="checkbox" class="checkbox"id="F12" value="F12" name="seats[]" onclick="checkbox()"<?php compare3('F12')?>>
		  </ol>
		</li>
		<li class="row">
			<ol class="seats" >
			&nbsp;&nbsp;G <input type="checkbox" class="checkbox"id="G1" value="G1" <?php compare3('G1')?>>
			<input type="checkbox" class="checkbox"id="G2" value="G2" name="seats[]" onclick="checkbox()"<?php compare3('G2')?>>
			<input type="checkbox" class="checkbox"id="G3" value="G3" name="seats[]" onclick="checkbox()"<?php compare3('G3')?>>
			<input type="checkbox" class="checkbox"id="G4" value="G4" name="seats[]" onclick="checkbox()"<?php compare3('G4')?>>
			<input type="checkbox" class="checkbox"id="G5" value="G5" name="seats[]" onclick="checkbox()"<?php compare3('G5')?>>
			<input type="checkbox" class="checkbox"id="G6" value="G6" name="seats[]" onclick="checkbox()"<?php compare3('G6')?>>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="checkbox" class="checkbox"id="G7" value="G7" name="seats[]" onclick="checkbox()"<?php compare3('G7')?>>
			<input type="checkbox" class="checkbox"id="G8" value="G8" name="seats[]" onclick="checkbox()"<?php compare3('G8')?>>
			<input type="checkbox" class="checkbox"id="G9" value="G9" name="seats[]" onclick="checkbox()"<?php compare3('G9')?>>
			<input type="checkbox" class="checkbox"id="G10" value="G10" name="seats[]" onclick="checkbox()"<?php compare3('G10')?>>
			<input type="checkbox" class="checkbox"id="G11" value="G11" name="seats[]" onclick="checkbox()"<?php compare3('G11')?>>
			<input type="checkbox" class="checkbox"id="G12" value="G12" name="seats[]" onclick="checkbox()"<?php compare3('G12')?>>
			<ul class="legend">
				<li><span class="smallwhitebox">&nbsp&nbsp&nbsp&nbspEmpty&nbspSeat</span></li>
			</ul>
			</ol>
		</li>
		<li class="row">
		  <ol class="seats">
			&nbsp;&nbsp;H<input type="checkbox" class="checkbox"id="H1" value="H1" name="seats[]" onclick="checkbox()"<?php compare3('H1')?>>
			<input type="checkbox" class="checkbox"id="H2" value="H2" name="seats[]" onclick="checkbox()"<?php compare3('H2')?>>
			<input type="checkbox" class="checkbox"id="H3" value="H3" name="seats[]" onclick="checkbox()"<?php compare3('H3')?>>
			<input type="checkbox" class="checkbox"id="H4" value="H4" name="seats[]" onclick="checkbox()"<?php compare3('H4')?>>
			<input type="checkbox" class="checkbox"id="H5" value="H5" name="seats[]" onclick="checkbox()"<?php compare3('H5')?>>
			<input type="checkbox" class="checkbox"id="H6" value="H6" name="seats[]" onclick="checkbox()"<?php compare3('H6')?>>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="checkbox" class="checkbox"id="H7" value="H7" name="seats[]" onclick="checkbox()"<?php compare3('H7')?>>
			<input type="checkbox" class="checkbox"id="H8" value="H8" name="seats[]" onclick="checkbox()"<?php compare3('H8')?>>
			<input type="checkbox" class="checkbox"id="H9" value="H9" name="seats[]" onclick="checkbox()"<?php compare3('H9')?>>
			<input type="checkbox" class="checkbox"id="H10" value="H10" name="seats[]" onclick="checkbox()"<?php compare3('H10')?>>
			<input type="checkbox" class="checkbox"id="H11" value="H11" name="seats[]" onclick="checkbox()"<?php compare3('H11')?>>
			<input type="checkbox" class="checkbox"id="H12" value="H12" name="seats[]" onclick="checkbox()"<?php compare3('H12')?>>
			
		  </ol>
		</li>
		<li class="row">
		  <ol class="seats" >
			&nbsp;&nbsp;I&nbsp;
			<input type="checkbox" class="checkbox"id="I1" value="I1" name="seats[]" onclick="checkbox()"<?php compare3('I1')?>>
			<input type="checkbox" class="checkbox"id="I2" value="I2" name="seats[]" onclick="checkbox()"<?php compare3('I2')?>>
			<input type="checkbox" class="checkbox"id="I3" value="I3" name="seats[]" onclick="checkbox()"<?php compare3('I3')?>>
			<input type="checkbox" class="checkbox"id="I4" value="I4" name="seats[]" onclick="checkbox()"<?php compare3('I4')?>>
			<input type="checkbox" class="checkbox"id="I5" value="I5" name="seats[]" onclick="checkbox()"<?php compare3('I5')?>>
			<input type="checkbox" class="checkbox"id="I6" value="I6" name="seats[]" onclick="checkbox()"<?php compare3('I6')?>>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="checkbox" class="checkbox"id="I7" value="I7"  name="seats[]" onclick="checkbox()"<?php compare3('I7')?>>
			<input type="checkbox" class="checkbox"id="I8" value="I8"  name="seats[]" onclick="checkbox()"<?php compare3('I8')?>>
			<input type="checkbox" class="checkbox"id="I9" value="I9" name="seats"  onclick="checkbox()"<?php compare3('I9')?>>
			<input type="checkbox" class="checkbox"id="I10" value="I10" name="seats"  onclick="checkbox()"<?php compare3('I10')?>>
			<input type="checkbox" class="checkbox"id="I11" value="I11" name="seats"  onclick="checkbox()"<?php compare3('I11')?>>
			<input type="checkbox" class="checkbox"id="I12" value="I12" name="seats[]" onclick="checkbox()"<?php compare3('I12')?>>
		  </ol>
		</li>
		<li class="row">
			<ol class="seats">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			10 &nbsp;&nbsp;&nbsp;&nbsp;
			11&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			12
			</ol>
		</li>
		</ol>
		</div>
		</div>
		</div>
		</div>
	</section>
	  
		
	<div class="top" >
	<center>
		<table class="displaytable" border=1>
			<tr>
				<th>Selected Seats</th>
				<th>Price per Ticket</th>
				<th>Qty</th>
				<th>Total amount</th>
			</tr>
			<tr>
				<td><input type="text" id="show" name="seats"></td>
				<td>$13.50</td>
				<td><p id="seatquan" name="seats" ></p></td>
				<td>$<span id="movietotal"></span></td>
			</tr>
		</table>
				<input style="margin-left:870px;" type="submit" value="Confirm Selection">
	</center>

	</div>



	</form>

	<footer><br>Copyright &copy; 2021 LiewTiahCinema<br>
		<a href="mailto:Hanwei@Liew.com">Hanwei@Liew.com</a>
	</footer>
	
	</body>
</html>