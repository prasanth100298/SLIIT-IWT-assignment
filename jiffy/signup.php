<?php
session_start();
	include_once 'config.php';
	include_once 'functions.php';
	
	//when some one posted
	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['username'];
		$user_lname = $_POST['lname'];
		$mail = $_POST['email'];
		$mobile = $_POST['mobile'];
		$addr = $_POST['address'];
		$password = $_POST['password'];
		
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
			
			//save to database
			$query = "insert into users(user_fname, user_lname, email, mobile, address, password) values('$user_name', '$user_lname', '$mail', '$mobile','$addr', '$password')";
			
			//execute the query
			if(mysqli_query($conn, $query)){
				header("Location: login.php");
			}
			else{
				echo "<script>alert('Error in Registering !!')</script>";
			}
			mysqli_close($conn);
			
		}
		else{
			echo "Please enter some valid information!";
		}
		
	}

?>

<html>
	<head>
	
		<title>JIFFY</title>
		<link rel="shortcut icon" type="images/jpg" href="images/j.jpg">
		<link rel="stylesheet" type="text/css" href="styles/signup.css">
		<script src="js/myScript.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
<!--Header-->

		<div class="header">
			<img class="logo1" src="images\j.jpg" alt="JIFFY Services">
			<img class="Account" src="images\Account2.png" alt="Account">
			<ul>
				<li class="menu"><a href="Home page.html">Home</a></li>
				<li class="menu"><a href="Ride.html">Ride</a></li>
				<li class="menu"><a href="Pricing page.html">Pricing</a></li>
				<li class="menu"><a href="Promos page.html">Promos</a></li>
				<li class="menu"><a href="About Us.html">About Us</a></li>
				<li class="menu"><a href="Contact Us.php">Contact Us</a></li>
			</ul>
			<a  href="login.php"><button class ="btn1">Login</button></a>			
		</div >
		
<body>
	
	<div class="r">
		<form class="box" method="post" onsubmit="return checkPasswords()">
			<div class="input-field">
				<i class="fa fa-user icon"></i>
				<input type="text" placeholder="First Name" name="username" required>
			</div>
			<div class="input-field">
				<i class="fa fa-user icon"></i>
				<input type="text" placeholder="Last Name" name="lname" required>
			</div>
			<div class="input-field">
				<i class="fa fa-envelope icon"></i>
				<input type="text" placeholder="Email" name="email" pattern="[a-zA-Z0-9_.+_]+@[a-z]+\.[a-z]{2,3}" required>
			</div>
			<div class="input-field">
				<i class="fa fa-phone icon"></i>
				<input type="text" placeholder="Mobile" name="mobile" pattern="[0-9]{10}" required>
			</div>
			<div class="input-field">
				<i class="fa fa-address-card-o icon" style="font-size:16px; position: relative; top: -63px"></i>
				<textarea class="txtarea" placeholder="Address..." name="address" rows="4" cols="51" style="padding: 5px 35px; border-radius: 5px; width: 85%; font-size: 16px;" required></textarea>
			</div>
			<div class="input-field">
				<i class="fa fa-key icon"></i>
				<input type="password" id="pwd" placeholder="Password" name="password" pattern="[a-zA-Z0-9]{5,8}" required>
			</div>
			<div class="input-field">
				<i class="fa fa-key icon"></i>
				<input type="password" id="rpwd" placeholder="Confirm Password" name="re-password" required>
			</div>
			<div class="input-field">
				<button type="submit" class="btn">Register</button>
			</div>
			<p>
				&emsp; Already a member? &nbsp; <a href="login.php">Login</a>
			</p>
		</form>
	</div>
</body>
	
		
<!--footer-->

	<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col">
						<img class="logo2" src="images\j.jpg" >
						<ul>
							<div class="breif">
							<li><a>Jiffy, formerly known as TaxiStartup, Is a brand
							which ensures customer's
							safety, satisfaction and health.</a></li>
							</div>
						</ul>
					</div>
					<div class="col">
						<h4>Quick Links</h4>
						<ul>
							<div class="footer-menu">
							<li><a href="Home page.html">Home</a></li>
							<li><a href="Ride.html">Ride</a></li>
							<li><a href="Pricing page.html">Pricing</a></li>
							<li><a href="promos page.html">Promos</a></li>
							<li><a href="About Us.html">About Us</a></li>
							<li><a href="Contact Us.html">Contact Us</a></li>
							</div>
						</ul>
					</div>
					<div class="col">
						<h4>Contact</h4>
						<ul>
							<div class="info">
								<li><a>12B, Useless lane,<br>
								Port city, Colombo-01,<br>
								Sri Lanka.</a></li>
								<li><a>+94 777555555</a></li>
								<li><a>support@jiffy.lk</a></li>
							</div>
							
						</ul>
					</div>
					<div class="col">
						<h4>Download</h4>
						<br>
						<ul class="store">
							<div class="app">
							<li><a href="https://play.google.com/store/apps"><img src="https://d1a3f4spazzrp4.cloudfront.net/uber-com/1.3.8/d1a3f4spazzrp4.cloudfront.net/illustrations/app-store-google-4d63c31a3e.svg" alt="Get it on Google Play"></a></li>
							<li><a href="https://www.apple.com/app-store/"><img src="https://d1a3f4spazzrp4.cloudfront.net/uber-com/1.3.8/d1a3f4spazzrp4.cloudfront.net/illustrations/app-store-apple-f1f919205b.svg" alt='Get it on App store'></a></li>
							</div>
						</ul>
						
					</div>
				</div>
				
			</div>
			<div class="social">
					<h4>follow us</h4>
					<div class="social-links">
						<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
						<a href="http://twitter.com/"><i class="fab fa-twitter"></i></a>
						<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
						<a href="https://lk.linkedin.com/"><i class="fab fa-linkedin"></i></a>
					</div>
				</div>
			<div class="copy-rights">
				© 2021 The Jiffy Corporation<br>
				Jiffy is committed to your privacy. For details, please read our 'Privacy Policy'|T&C
			</div>
	</footer>