<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hikka SafariSeas Adventures</title>
	<link rel="stylesheet" href="styles\homeStyles.css">
	<script src="js\homeScript.js"></script>
</head>
<body>
	<div class = "position">
	<div class="header">
		<img src = "images\logo1.png">
	</div>
	
	<nav>
		<div class = "logo">
			<p>hikka safariseas</p>
		</div>
		<ul>
			<li><a class = "active" href = "#">HOME</a></li>
			<li><a href = "#">ABOUT</a></li>
			<li><a href = "#">SERVICES</a></li>
			<li><a href = "#">GALLERY</a></li>
			<li><a href = "#">BLOG</a></li>
			<li><a href = "#">CONTACT</a></li>
			
			<div class = "navbtn">
				<button> <a href = "logging.php"> Login </a></button>
				<button> <a href = "register.php"> Register </a></button>
			</div>
		</ul>
	</nav>
	</div>
	
	<div class = "background">
		<img src = "images\img2.png">
	</div>
	  <div class="content">
      <h3 style="font-size: x-large; background-color:#519ca8 ; padding: 15px 0 15px 0; text-align: left; ">OUR PACKAGES...</h3>
	  
      <table class="ContentTable" >
        <tr>
          <th>
            <img src="packages\Wildlife.jpeg" id="package_pic">
          </th>
          <th class="details">
            <p style="font-weight: bold; font-size: 20px;">Wildlife Safari</p>
          Venture into the wild with our Wildlife Safari package, where you'll have the chance to encounter a myriad of marine and coastal wildlife.
			From playful dolphins to majestic whales, observe these incredible creatures in their natural habitat. 
			Our expert guides will provide insightful commentary, making this an educational and unforgettable voyage for nature enthusiasts.
           
          </th>
          <th class="price">
            Rs.30000.00<br><br>
       
          </th>
          <th id="booknowbtn">
         
            <a href="" id="book_now">Book Now</a><br><br>
           
          </th>
        </tr>
      </table>
      

      <table class="ContentTable" >
        <tr>
          <th>
            <img src="packages\adventuretours.jpeg" id="package_pic">
          </th>
          <th class="details">
            <p style="font-weight: bold; font-size: 20px;">Adventure Tours</p>
           Join one of our Adventure Tours as they set sail on a thrilling maritime adventure! Explore the broad seas and take in the sea's raw splendor.
		   This package is ideal for adrenaline addicts looking for an adrenaline-fueled ocean trip, offering exhilarating speedboat excursions and heart-pounding water sports.
            
          </th>
          <th class="price">
            Rs.15000.00<br><br>
           
          </th>
          <th id="booknowbtn">
           
            <a href="" id="book_now">Book Now</a><br><br>
          
          </th>
        </tr>
        
      </table>
      

      <table class="ContentTable" >
        <tr>
          <th>
            <img src="packages\islandhopping.jpeg" id="package_pic">
          </th>
          <th class="details">
            <p style="font-weight: bold; font-size: 20px;">Island Hopping</p>
            With Island Hopping, you can explore a vast array of unspoiled islands, each with its own special appeal. Discover isolated beaches, go snorkeling in pristine waters, and get close to the abundant marine life.
			We provide guided boat cruises that combine relaxation and exploration as they transport you from one enticing island to another.
          </th>
          <th class="price">
            Rs.25000.00<br><br>
          
          </th>
          <th id="booknowbtn">
            
            <a href="" id="book_now">Book Now</a><br><br>
            
          </th>
        </tr>
      </table>

      <table class="ContentTable hiddenTable" >
        <tr>
          <th>
            <img src="packages\sunsetcruises.jpeg" id="package_pic">
          </th>
          <th class="details">
            <p style="font-weight: bold; font-size: 20px;">Sunset Cruises</p>
          Experience the magic of the setting sun on the tranquil waters with our Sunset Cruises. 
		  As day transforms into night, bask in the warm hues of the sunset painting the sky. Relax on deck, sipping on your favorite beverage and revel in the breathtaking coastal vistas. 
		  It's a serene and romantic journey to end your day in perfect harmony with nature
          </th>
          <th class="price">
            Rs.20000.00<br><br>
           
          </th>
          <th id="booknowbtn">
            
            <a href="" id="book_now">Book Now</a><br><br>
          
          </th>
        </tr>
        
      </table>

    
    </div>
    <div>
      <button onclick="showMoreTables()" id="viewMore">View More</button>
    </div>
    
    <br>
    <p class="final" style="text-align: center; width: 1519px; margin-top: 60px;">At our sea boat safari company, we specialize in curating unforgettable maritime experiences. 
	With a passion for exploration and a deep love for the ocean, we offer a range of exciting packages, including Adventure Tours, Island Hopping, Sunset Cruises, and Wildlife Safaris. 
	Our mission is to provide adventurers, nature enthusiasts, and those seeking relaxation with the opportunity to connect with the sea in a safe and exhilarating manner.
	With a commitment to exceptional service, environmental sustainability, and a genuine love for the marine world, we invite you to set sail with us on an expedition of discovery and wonder </p>
    
      <div class="allFinal">
        <div class="img">
          <img src="images\profile photo.jpg">
          <p style="text-align: center;">20000+<br>Viewers</p>
        </div>
        <div class="img">
          <img src="images\profile photo.jpg">
          <p style="text-align: center;">7000+<br>Users</p>
        </div>

        <div class="img">
          <img src="images\profile photo.jpg">
          <p style="text-align: center;">20+<br>Experienced Staff</p>
        </div>
      </div>
	
<footer>
	<div class = "container">
		<div class = "footer-content">
			<h3> Contact Us </h3>
			<p> E-mail: hikkaSafariseas@gmail.com </p>
			<p> Phone: +94-7743357800</p>
			<p> Address: 159/6 Hikkaduwa, Sri Lanka </p>
		</div>
		<div class = "footer-content">
			<h3> Quick Links </h3>
				<ul class = "list">
					<li><a href = "#">HOME</a></li>
					<li><a href = "#">ABOUT</a></li>
					<li><a href = "#">SERVICES</a></li>
					<li><a href = "#">CONTACT</a></li>
				</ul>
		</div>
		<div class = "footer-content">
			<h3> Follow Us </h3>
			<ul class = "social-icons">
				<li><a href="https://www.facebook.com/"><img src="images\facebook.png" alt="facebook" ></a></li>
                <li><a href="https://twitter.com/"><img src="images\twitter.png" alt="Twitter" ></a></li>
                <li><a href="https://www.instagram.com/"><img src="images\instagram.png" alt="Instagram" ></a></li>
                <li><a href="https://www.google.com/"><img src="images\google.png" alt="Google" ></a></li>
			</ul>
		</div>
	</div>
	
	
	
	
</body>
<html>
