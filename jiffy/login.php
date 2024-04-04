<?php
session_start();
	include_once 'config.php';
	include_once 'functions.php';
	
	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['username'];
		$password = $_POST['password'];
		
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			//Read from database
			$query = "select * from users where user_fname = '$user_name' limit 1";
			
			$result = mysqli_query($conn, $query);
			
			if($result)
			{ 
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					if($user_data['password'] === $password)
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: Accountpage.php");
						die;
					}
				}
			}	
			
			echo "<script>alert('Wrong username or password!')</script>";
			
		}else
		{
			echo "<script>alert('Please enter some valid information!')</script>";
		}
		
	}

?>

<html>
	<head>
	
		<title>JIFFY</title>
		<link rel="shortcut icon" type="images/jpg" href="images/j.jpg">
		<link rel="stylesheet" type="text/css" href="styles/login.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	</head>
<!--Header-->

		<div class="header">
			<img class="logo1" href="Home page.html" src="images\j.jpg" alt="JIFFY Services">
			<img class="Account" src="images\Account2.png" alt="Account">
			<ul>
				<li class="menu"><a href="Home page.html">Home</a></li>
				<li class="menu"><a href="Ride.html">Ride</a></li>
				<li class="menu"><a href="Pricing page.html">Pricing</a></li>
				<li class="menu"><a href="Promos page.html">Promos</a></li>
				<li class="menu"><a href="About Us.html">About Us</a></li>
				<li class="menu"><a href="Contact Us.html">Contact Us</a></li>
			</ul>
			<a  href="login.php"><button class ="btn1">Login</button></a>			
		</div >
	
		
<body>
	<div class="r">
		<form class="box" method="post">
			<div class="input-field">
				<i class="fa fa-user icon"></i>
				<input type="text" placeholder="Username" name="username">
			</div>
		
			<div class="input-field">
				<i class="fa fa-key icon"></i>
				<input type="password" placeholder="Password" name="password">
			</div>
		
		
			<div class="input-field">
				<button type="submit" class="btn">Login</button>
			</div>
			<p>
				&emsp; Not yet a member? &nbsp; <a href="signup.php">Sign up</a>
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
		
</html>