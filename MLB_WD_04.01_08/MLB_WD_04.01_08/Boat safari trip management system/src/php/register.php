<?phpinclude 'connect.php'; ?>



<!DOCTYPE html>
<html>
<head>
	<title>Hikka SafariSeas Adventures</title>
	<link rel="stylesheet" href="styles\registerStyles.css">
	<script src="js\registerScript.js"></script>
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
				<button> <a href = "logging.php"> Login </a></button>
				<button> <a href = "#"> Register </a></button>
			</div>
		</ul>
	</nav>
	</div>
	
	<div class = "background">
		<img src = "images\imgback10.jpeg">
	</div>

<main>
    <div class ="registration-form">
      <h2 class = "registration-form-title">Create New Profile </h2>
	  <form method="post" action ="process.php">
	   <input type="text" name="F_name" placeholder="First Name">
		<input type="text" name="Last_name" placeholder="Last Name">
		<input type="text" name="Address" placeholder="Address">
		<input type="email" name="Email" placeholder="Email Address">
		<input type="gender" name="Gender" placeholder="Your Gender">
		<input type="age" name="Age" placeholder="Your Age">
		<input type="text" name="User_name" placeholder="User Name">
	    <input type="tel" name="Phone_no" placeholder="Phone Number">
		<input type="password" name="password" placeholder="Password">
		<input type="password" name="confirm_password" placeholder="Confirm Password">
		<button type="submit"> SIGN UP </button>
	  </form>
	</div>
</main>

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
					<li><a href = "Homepage.php">HOME</a></li>
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