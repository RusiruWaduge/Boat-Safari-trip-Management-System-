<?php
include 'connect.php';
?>
<!DOCTYPE html>
<head>
  <title>Hikka SafariSeas Adventures</title>
  <link rel="stylesheet" href="styles\loggingStyles.css">
 
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
			<li><a class = "active" href = "Homepage.php">HOME</a></li>
			<li><a href = "#">ABOUT</a></li>
			<li><a href = "#">SERVICES</a></li>
			<li><a href = "#">GALLERY</a></li>
			<li><a href = "#">BLOG</a></li>
			<li><a href = "#">CONTACT</a></li>
			
			<div class = "navbtn">
				<button> <a href = "#"> Login </a></button>
				<button> <a href = "register.php"> Register </a></button>
			</div>
		</ul>
	</nav>
	</div>
	
	<div class = "background">
		<img src = "images\imgback10.jpeg">
	</div>
 

  <main>
    <div class="login-form">
      <h2 class="login-form-title">Login</h2>
      <form action="/login" method="post">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
        <a href="#" class="forgot-password">Forgot Password?</a>
      </form>
    </div>
  </main>
<br>
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