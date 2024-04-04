<?php
session_start();
	
	include_once 'config.php';
	include_once 'functions.php';
	
	$user_data = check_login($conn);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>JIFFY</title>
		<link rel="shortcut icon" type="images/jpg" href="images/j.jpg">
		<link rel="stylesheet" type="text/css" href="styles/Accountpage.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	</head>

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
		<a  href="logout.php"><button class ="btn1">Logout</button></a>			
	</div >
	<hr>

	<body>
	<div class="box">
  
		<img src="images/profile.jpg" width="100" height="100" alt="Account" class="Account1">
		<div class="top">
			<h2 class="hi">Hi <?php echo $user_data['user_fname']; ?>!</h2>
			<h3 class="hi">Happy to see you back!</h3>
	
		</div> 
		
		<button onclick="myFunction()" class="summery">Trip summery</button>
		<script>
			function myFunction(){
				alert("Trip Summery link Sent to your mobile Number!");
			}
		</script>

		 <a href="Contact Us.html"><button class="customerf" >Customer feedback</button></a>
		 <a href="Contact Us.html"><button class="customeri">Inquiry</button></a>
			<hr class="line">
			<br>

		<div class ="accinfo">
			<div class="row1">
				<img src="images/menu.png" width="40" height="40" class="pin1">
				<p1>Your Information</p1>
				<br><br>
				<li>Name</li>
				<li class="fetch"><?php echo $user_data['user_fname']; ?> <?php echo $user_data['user_lname']; ?></li>
				<br>

				<li>Date of Birth</li>
				<li class="fetch"><?php echo $user_data['date_of_birth']; ?></li>
				<br>

				<li>Email</li>
				<li class="fetch"><?php echo $user_data['email']; ?></li>
				<br>

				<li>Phone number</li>
				<li class="fetch"><?php echo $user_data['mobile']; ?></li>
				<br>

				<li>NIC</li>
				<li class="fetch"><?php echo $user_data['NIC_no']; ?></li>
				<br><br>

			</div>

			<div class="row1">
				<img src="images/menu.png" width="40" height="40" class="pin2">
				<p1>Emergency Information</p1>
				<br><br>
				<li>Contact Person</li>
				<li class="fetch"><?php echo $user_data['contact_person']; ?></li>
				<br>

				<li>Contact Number</li>
				<li class="fetch"><?php echo $user_data['contact_number']; ?></li>
				<br>

				<li>Blood group</li>
				<li class="fetch"><?php echo $user_data['blood_group']; ?></li>
				<br>
			</div>

			<a href="Edit Account.php"><img src="images/109-1090151_web-ui-color-edit-circle-icon.png" width="60"  class="editacc"></a>
			
			<a href="delete.php"><button class="close">Close My Account</button></a>
		
		</div>	
	</div> 
		
		
		<hr>
	
	</body>
	
	
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
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-linkedin"></i></a>
				</div>
			</div>
		<div class="copy-rights">
			@ 2021 The Jiffy Corporation<br>
			Jiffy is committed to your privacy. For details, please read our 'Privacy Policy'|T&C
		</div>
	</div>>	
	</footer>
	
</html>

