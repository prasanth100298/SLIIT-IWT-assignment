<?php
    session_start();
	
	include_once 'config.php';
	include_once 'functions.php';
	
	$user_data = check_login($conn);
?>


<?php

	$idd = $user_data['user_id'];

	
        $query = "DELETE FROM users WHERE `users`.`user_id` = $idd";
        $quert_run = mysqli_query($conn,$query);

        if($quert_run){
            echo '<script type="text/javascript"> alert("Account deleted Successfully")</script>';
            header("Location:logout.php");
            
        }
        
?>