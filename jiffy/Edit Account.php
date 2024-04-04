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
		<link rel="stylesheet" type="text/css" href="styles/Editaccount.css">
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
			<li class="menu"><a href="Contact Us.php">Contact Us</a></li>
		</ul>
		<a  href="logout.php"><button class ="btn1">Logout</button></a>			
	</div >
	<hr>

    <body>
	<form method="GET" action="accountdb.php">
        <div class="box">
            <div class ="infohead">
                <h3>Your Information</h3>
            </div>
            <img src="images/right arrow.png" width="40" height="40" class="arrow">
            <hr class="line">
        
            <div class="profilepic">
            <img src="images/profile.jpg" id="photo" height="150" class="profilephoto"> 
            <input type="file" id="file">
            <label for="file" id="uploadbtn">Choose Photo</label>
            </div>
            <script src="js/Profilepic.js"></script>
            
            <div class="infolist">
            
            <div class="upperlist">
                <br>
                 <label for="fname" class="fname">First name</label>
                <input type="text" id="fname" name="fname" value="<?php echo $user_data['user_fname']; ?>"><br>

                <label for="lname" class="lname">Last name</label>
                <input type="text" id="lname" name="lname" value="<?php echo $user_data['user_lname']; ?>"><br>

                <label for="DOB" class="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" value="<?php echo $user_data['date_of_birth']; ?>"><br>
            </div>

            <div class="lowerlist">
                <br>
                <label for="email" class="email">Email</label>
                <input type="text" id="email" name="email" value="<?php echo $user_data['email']; ?>" pattern="[a-zA-Z0-9_.+_]+@[a-z]+\.[a-z]{2,3}" required><br>

                <label for="phno" class="phno">Phone Number</label>
                <input type="text" id="phno" name="phno" value="<?php echo $user_data['mobile']; ?>" pattern="[0-9]{10}" required><br>

                <label for="pword" class="pword">Password</label>
                <input onclick="myFunction()" type="button" id="pword" name="pword" value="Change Password"><br>

                <label for="nic" class="nic">NIC</label>
                <input type="nic" id="nic" name="nic" value="<?php echo $user_data['NIC_no']; ?>" pattern="[0-9]{9}" required><br>

            </div>
            </div>

            <button type="submit"  name="update" class="submit">Submit</button>
            <button	type="submit" name="cancel" class="cancel">Cancel</button>

        </div>  
        
		<div class="box1">
			<div class ="infohead">
                <h3>Emergency Contact Information</h3>
            </div>
			<img src="images/right arrow.png " width="40" height="40" class="lowarrow">
			<hr class="line">
			<div class="infolist">
				<div class="lowerlist">
					<br>
					<label for="emname" class="emname">Contact Person</label>
					<input type="text" id="emname" name="emname" value="<?php echo $user_data['contact_person']; ?>"><br>
	
					<label for="emno" class="emno">Contact Number</label>
					<input type="text" id="emno" name="emno" value="<?php echo $user_data['contact_number']; ?>" pattern="[0-9]{10}" required><br>
	
					<label for="blood" class="blood">Blood group</label>
					<input type="text" id="blood" name="blood" value="<?php echo $user_data['blood_group']; ?>"><br><br>
	
				</div>
		
			</div>
		</div>
        
</form>
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

<script>
			function myFunction(){
				alert("Reset Password link Sent to your mobile Number!");
			}
		</script>