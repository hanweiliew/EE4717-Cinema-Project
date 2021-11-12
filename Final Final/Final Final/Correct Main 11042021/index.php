
<html>
	<head>
		<link rel="stylesheet" href = "style.css">

		<script src = "js/slidingslide.js"></script>
		<title> | Han's Movie | </title>
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

<!-----------------corousal(image slider)------------------------------------------->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
  <div class="mySlides" >
    <div class="numbertext">1 / 3</div>
		<img src="venomwide.jpg" style="width:auto;height:450px;" class = "center"> 
<!--https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.buzzfeed.com%2Fcrystalro%2Fmovie-poster-copycats&psig=AOvVaw0ZCu0Fx8ECw6_uljl1QIxh&ust=1635861390113000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPC7quCo9_MCFQAAAAAdAAAAABAE--->
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 3</div>
		<img src="spidermanwide.jpg" style="width:auto;height:450px;" class = "center">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 3</div>
		<img src="avengerwide.jpg" style="width:auto; height:450px;" class = "center">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
<script src = "js/slidingslide.js"></script> <!--Have to be here-->


<!--This is Where the Movies poster will be at-->
<section id="top">
  <div class="container">
    <h1>Showing Now</h1>
    <br>
    <h1>Nanyang Technology University</h4>
      <div class="container1">
        <div class="col-md-3">
          <div class="single-movie">
              <div class="name">
                  <h2>Venom</h2>
                  <p>1hr:38min</p>
                </div>
                <div class="image">
                  <img src="img1.jpg" alt="" class = "center">
                </div>
                <div class="button">
                  <a href="movie1.php" class="buy-btn">BOOK NOW</a>
                </div>
          </div>
        </div>
        <div class="col-md-3">
            <div class="single-movie">
                <div class="name">
                    <h2>SpiderMan</h2>
                    <p>2hr:30min</p>
                  </div>
                  <div class="image">
                    <img src="img2.jpg" alt="">
                  </div>
                  <div class="button">
                    <a href="movie2.php" class="buy-btn">BOOK NOW</a>
                  </div>
            </div>
          </div>
          <div class="col-md-3">
              <div class="single-movie">
                  <div class="name">
                      <h2>Avenger</h2>
                      <p>3hr:02min</p>
                    </div>
                    <div class="image">
                      <img src="img3.jpg" alt="">
                    </div>
                    <div class="button">
                      <a href="movie3.php" class="buy-btn">BOOK NOW</a>
                    </div>
              </div>
            </div>
      </div>
	</div>
</section>

</body>
<footer><br>Copyright &copy; 2021 LiewTiahCinema<br>
    <a href="mailto:Hanwei@Liew.com">Hanwei@Liew.com</a>
</footer>
</html>