<?php
session_start();
	
	include_once 'config.php';
	include_once 'functions.php';
	
	$user_data = check_login($conn);
?>

<?php 
    if(isset($_GET['update'])){
    $idd = $user_data['user_id'];
     $funame = $_GET['fname'];
     $laname = $_GET["lname"];
     $dateob = $_GET["dob"];
     $email_id = $_GET["email"];
     $Phone_no = $_GET["phno"];
     $Nic = $_GET["nic"];
     $emer_name = $_GET["emname"];
     $emer_no = $_GET["emno"];
     $blood_group = $_GET["blood"];


     

     
        $query = "UPDATE `users` SET user_fname='$funame',user_lname='$laname',date_of_birth='$dateob',email='$email_id',mobile='$Phone_no',NIC_no='$Nic',contact_person='$emer_name',contact_number='$emer_no',blood_group='$blood_group' WHERE `users`.`user_id` = $idd";
        $quert_run = mysqli_query($conn,$query);

        if($quert_run){
            echo '<script type="text/javascript"> alert("Data Updated Successfully")</script>';
            header("Location:Accountpage.php");
            
        }
        else{
            echo '<script type="text/javascript"> alert("Data not updated. Please Try Again")</script>';
        }
     }

?>

<?php
    if(isset($_GET['cancel'])){
        header("Location:Accountpage.php");
    }
?>

