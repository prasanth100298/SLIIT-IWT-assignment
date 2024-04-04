<?php
    include_once 'config.php';
?>


<?php 
$name1=$_POST["name"];
$email1=$_POST["email"];
$feedback1=$_POST["feedback"];
$query="INSERT INTO `customer feedback`(`f_ID`,`C_Name`, `C_Email`, `C_Feedback`) VALUES ('','$name1','$email1','$feedback1')";

if(mysqli_query($conn, $query)) {
    echo "<script>alert('Record inserted successfully!!')</script>";
    header("Location:Contact Us.php");
    }
    else{
    echo "<script>alert('Error in inserting record !!')</script>";
    }
    mysqli_close($conn);
?>